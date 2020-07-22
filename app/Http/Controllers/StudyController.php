<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use stdClass;

class StudyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($idno,Request $request)
    {	
    	$pat_mast = DB::table('pat_mast')->where('idno','=',$idno)->first();
        $diagnosis_all = DB::table('gkcdiag')->get();

        $badge = new stdClass;
        $badge->baseline = $badge->month_1st = $badge->month_3rd = $badge->month_6th = $badge->year_1 = $badge->year_2 = $badge->year_3 = $badge->year_4 = 1;

    	if(!empty($request->diagcode)){

            $asses_master = [];

    		$gkcasses = DB::table('gkcasses')
    							->where('diagcode','=',$request->diagcode)->get();

            $diagnosis = DB::table('gkcdiag')->where('diagcode','=',$request->diagcode)->first();

            $patgkcasses = DB::table('patgkcasses')
                            ->where('pm_idno','=',$idno)
                            ->where('diagcode','=',$request->diagcode);

            // $badge_count = $patgkcasses->distinct()->get(['progress','mrn','description','diagcode','regdate']);

            $badge_count = ['Baseline','1st Month','3rd Month','6th Month','1 Year','2 Year','3 Year','4 Year'];

            foreach ($badge_count as $badge_count_key => $progress) {
                $this_progress = $progress;

                $this_idno = $idno;
                $this_regdate2 = '';
                $this_completed = '';
                $this_description = '';
                $this_diagcode = $request->diagcode;

                $answer_set = [];
                foreach ($gkcasses as $gkcasses_key => $gkcasses_each) {
                    if($this_description == ''){
                        $this_description = $gkcasses_each->description;
                    }

                    $patgkcasses_obj = DB::table('patgkcasses')
                                    ->where('pm_idno','=',$idno)
                                    ->where('diagcode','=',$request->diagcode)
                                    ->where('progress','=',$progress)
                                    ->where('questionnaire','=',$gkcasses_each->questionnaire);

                    if($patgkcasses_obj->exists()){
                        array_push($answer_set, $this->get_answer_set($patgkcasses_obj->first(),false));
                    }else{
                        array_push($answer_set, $this->get_answer_set($gkcasses_each,true));
                    }

                }

                $pat_mast_info = DB::table('pat_mast_info')
                                    ->where('pm_idno','=',$idno);
                $field_name_completed = str_replace(' ', '_', $progress).'_completed';
                $field_name_regdate = str_replace(' ', '_', $progress).'_regdate';

                $responce = new stdClass;

                if($pat_mast_info->exists()){
                    $pat_mast_info = (array)$pat_mast_info->first();
                    $this_regdate2 = $pat_mast_info[$field_name_regdate];
                    $this_completed = $pat_mast_info[$field_name_completed];
                }

                $responce->progress = $this_progress;
                $responce->idno = $this_idno;

                if($this_regdate2 != ''){
                    $responce->regdate2 = $this_regdate2;
                    $responce->regdate = Carbon::createFromFormat('Y-m-d',$this_regdate2)->toFormattedDateString();
                }else{
                    $responce->regdate2 = null;
                    $responce->regdate = null;
                }

                if($this_completed == 'true'){
                    $responce->completed = 'Completed';
                }else{
                    $responce->completed = 'Uncompleted';
                }
                $responce->description = $this_description;
                $responce->diagcode = $this_diagcode;
                $responce->rowdata = $answer_set;

                array_push($asses_master, $responce);

            }

            // dd($asses_master);

            
        	return view('study.study',compact('pat_mast','diagnosis','diagnosis_all','badge','asses_master','gkcasses'));
    	}

        return view('study.study',compact('pat_mast','diagnosis_all','badge'));
    }

    public function diagnosis_post(Request $request){

        DB::beginTransaction();

        try {

            $pat_mast = DB::table('pat_mast')->where('idno','=',$request->idno)->first();

            if(empty($pat_mast->diagnosis)){

                $gkcdiag = DB::table('gkcdiag')
                    ->where('diagcode','=',$request->diagcode)
                    ->first();

                DB::table('pat_mast')
                    ->where('idno','=',$request->idno)
                    ->update([
                        'diagnosis' => $request->diagcode,
                        'diag_desc' => $gkcdiag->Description
                    ]);
            }

            DB::commit();

            return redirect('/study/'.$request->idno.'?diagcode='.$request->diagcode);

        } catch (\Exception $e) {
            DB::rollback();
            
            return response($e->getMessage(), 500);
        }

    }

    public function study_postv2(Request $request){
        switch ($request->format) {
            case 'cb':
                $this->save_cb($request);
                break;

            case 'tf':
                $this->save_tf($request);
                break;

            case 'op':
                $this->save_op($request);
                break;

            case 'dd':
                // $this->save_dd($request,$value);
                break;

            case 'at':
                $this->save_at($request);
                break;

            case 'ta':
                $this->save_ta($request);
                break;

            case 'save_regdate':
                return $this->save_regdate($request);
                break;


            case 'save_complete':
                return $this->save_complete($request);
                break;
        }
    }

    public function study_post(Request $request){//xguna

        $gkcasses = DB::table('gkcasses')
            ->where('diagcode','=',$request->diagcode)
            ->where('description','=',$request->description)->get();

        foreach ($gkcasses as $key => $value) {
            $ques_type = '';

            if($value->cb1 != ''){
                $ques_type = 'cb';          
            }else if($value->tf1 != ''){
                $ques_type = 'tf';  
            }else if($value->op1 != ''){
                $ques_type = 'op';  
            }else if($value->dd1 != ''){
                $ques_type = 'dd';  
            }else if($value->ta1 != ''){
                $ques_type = 'ta';  
            }

            switch ($ques_type) {
                case 'cb':
                    $this->save_cb($request,$value);
                    break;

                case 'tf':
                    $this->save_tf($request,$value);
                    break;

                case 'op':
                    $this->save_op($request,$value);
                    break;

                case 'dd':
                    $this->save_dd($request,$value);
                    break;

                case 'ta':
                    $this->save_ta($request,$value);
                    break;
            }
        }

        return redirect('/study/'.$request->mrn.'?diagcode='.$request->diagcode.'&description='.$request->description);
    }

    public function save_cb(Request $request){
        DB::beginTransaction();

        try {

            if(!empty($request->value)){
                $table = DB::table('patgkcasses')
                    ->where('pm_idno','=', $request->pm_idno)
                    ->where('diagcode','=',$request->diagcode)
                    ->where('description','=',$request->description)
                    ->where('questionnaire','=',$request->name)
                    ->where('progress','=',$request->progress);

                if($table->exists()){
                    $table->update([
                        $request->value => $request->checked ,
                        'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                    ]);
                }else{
                    DB::table('patgkcasses')
                        ->insert([
                            'pm_idno' => $request->pm_idno,
                            'diagcode' => $request->diagcode,
                            'description' => $request->description,
                            'questionnaire' => $request->name,
                            'progress' => $request->progress,
                            $request->value => $request->checked ,
                            'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                        ]);
                }

                

            }

            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            
            return response($e->getMessage(), 500);
        }

    }

    public function save_op(Request $request){
        DB::beginTransaction();
        DB::enableQueryLog();

        try {
            if(!empty($request->value)){
                $table= DB::table('patgkcasses')
                    ->where('pm_idno','=', $request->pm_idno)
                    ->where('diagcode','=',$request->diagcode)
                    ->where('description','=',$request->description)
                    ->where('questionnaire','=',$request->name)
                    ->where('progress','=',$request->progress);
                    // ->get();


                if($table->exists()){
                    $table->update([
                        'op1' => null ,
                        'op2' => null ,
                        'op3' => null ,
                        'op4' => null ,
                        'op5' => null ,
                        'op6' => null ,
                        'op7' => null ,
                        'op8' => null ,
                        'op9' => null ,
                    ]);

                    $table
                        ->update([
                            $request->value => 'true' ,
                            'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                        ]);
                }else{
                    DB::table('patgkcasses')
                        ->insert([
                            'pm_idno' => $request->pm_idno,
                            'diagcode' => $request->diagcode,
                            'description' => $request->description,
                            'questionnaire' => $request->name,
                            'progress' => $request->progress,
                            $request->value => 'true' ,
                            'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                        ]);
                }

                

            }
            $queries = DB::getQueryLog();

            // dd($table);
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            
            return response($e->getMessage(), 500);
        }
    }

    public function save_tf(Request $request){
        DB::beginTransaction();

        try {

            if(!empty($request->value)){
                $table = DB::table('patgkcasses')
                    ->where('pm_idno','=', $request->pm_idno)
                    ->where('diagcode','=',$request->diagcode)
                    ->where('description','=',$request->description)
                    ->where('questionnaire','=',$request->name)
                    ->where('progress','=',$request->progress);

                if($table->exists()){
                    $table->update([
                        $request->tf_key => $request->value ,
                        'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                    ]);
                }else{
                    DB::table('patgkcasses')
                        ->insert([
                            'pm_idno' => $request->pm_idno,
                            'diagcode' => $request->diagcode,
                            'description' => $request->description,
                            'questionnaire' => $request->name,
                            'progress' => $request->progress,
                            $request->tf_key => $request->value ,
                            'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                        ]);
                }
                
            }
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            
            return response($e->getMessage(), 500);
        }

    }

    public function save_ta(Request $request){
        DB::beginTransaction();

        try {
            if(!empty($request->value)){
                $table = DB::table('patgkcasses')
                            ->where('pm_idno','=', $request->pm_idno)
                            ->where('diagcode','=',$request->diagcode)
                            ->where('description','=',$request->description)
                            ->where('questionnaire','=',$request->name)
                            ->where('progress','=',$request->progress);
                    
                if($table->exists()){
                    $table->update([
                        $request->ta_key => $request->value ,
                        'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                    ]);
                }else{
                    DB::table('patgkcasses')
                        ->insert([
                            'pm_idno' => $request->pm_idno,
                            'diagcode' => $request->diagcode,
                            'description' => $request->description,
                            'questionnaire' => $request->name,
                            'progress' => $request->progress,
                            $request->ta_key => $request->value ,
                            'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                        ]);
                }
            }

            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            
            return response($e->getMessage(), 500);
        }
    }

    public function save_dd(Request $request, $value){ // xbuat lagi dropdown xguna
        DB::beginTransaction();

        try {

            if(!empty($request[str_replace(' ', '_', $value->questionnaire)])){

                $table = DB::table('patgkcasses')
                        ->where('pm_idno','=', $request->pm_idno)
                        ->where('diagcode','=',$request->diagcode)
                        ->where('description','=',$request->description)
                        ->where('questionnaire','=',$value->name)
                        ->where('progress','=',$request->progress);


                if($table->exists()){
                    $table->update([
                        'dd1' => null ,
                        'dd2' => null ,
                        'dd3' => null ,
                        'dd4' => null ,
                        'upddate' => Carbon::now("Asia/Kuala_Lumpur"),
                    ]);

                    $table->update([
                        $request[str_replace(' ', '_', $value->questionnaire)] => 'true' ,
                        'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                    ]);
                }else{
                    DB::table('patgkcasses')
                        ->insert([
                            'mrn' => $request->mrn,
                            'diagcode' => $request->diagcode,
                            'description' => $request->description,
                            'questionnaire' => $request->name,
                            'progress' => $request->progress,
                            $request[str_replace(' ', '_', $value->questionnaire)] => 'true' ,
                            'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                        ]);
                }

            }
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            
            return response($e->getMessage(), 500);
        }

    }

    public function save_at(Request $request){
        DB::beginTransaction();

        try {

            if(!empty($request->value)){
                $table = DB::table('patgkcasses')
                    ->where('pm_idno','=', $request->pm_idno)
                    ->where('diagcode','=',$request->diagcode)
                    ->where('description','=',$request->description)
                    ->where('questionnaire','=',$request->name)
                    ->where('progress','=',$request->progress);

                if($table->exists()){
                    $table->update([
                        $request->at_key => $request->at_id ,
                        'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                    ]);

                    $anchor_table = DB::table('anchor_table')
                            ->where('pm_idno','=',$request->pm_idno)
                            ->where('anchor_id','=',$request->at_id)
                            ->where('anchor_index','=',$request->at_index);

                    if($anchor_table->exists()){
                        $anchor_table->update([
                            $request->at_field => $request->value
                        ]);
                    }else{
                        DB::table('anchor_table')
                            ->insert([
                                'pm_idno' => $request->pm_idno,
                                'anchor_id' => $request->at_id,
                                'anchor_index' => $request->at_index,
                                $request->at_field => $request->value
                            ]);
                    }
                            

                }else{

                    DB::table('patgkcasses')
                        ->insert([
                            'pm_idno' => $request->pm_idno,
                            'diagcode' => $request->diagcode,
                            'description' => $request->description,
                            'questionnaire' => $request->name,
                            'progress' => $request->progress,
                            $request->at_key => $request->at_id ,
                            'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                        ]);

                    DB::table('anchor_table')
                        ->insert([
                            'pm_idno' => $request->pm_idno,
                            'anchor_id' => $request->at_id,
                            'anchor_index' => $request->at_index,
                            $request->at_field => $request->value
                        ]);

                }
                
            }
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            
            return response($e->getMessage(), 500);
        }

    }

    public function save_regdate(Request $request){


        DB::beginTransaction();

        try {

            $pat_mast_info = DB::table('pat_mast_info')
                        ->where('pm_idno','=',$request->pm_idno);

            $field_name = str_replace(' ', '_', $request->progress).'_regdate';

            if($pat_mast_info->exists()){

                $pat_mast_info->update([
                    $field_name => $request->value
                ]);

            }else{

                DB::table('pat_mast_info')
                    ->insert([
                        'pm_idno' => $request->pm_idno,
                        $field_name => $request->value
                    ]);

            }
            DB::commit();

            $responce = new stdClass;
            $responce->regdate = Carbon::createFromFormat('Y-m-d',$request->value)->toFormattedDateString();
            return json_encode($responce);
            
        } catch (\Exception $e) {
            DB::rollback();
            
            return response($e->getMessage(), 500);
        }
        
    }

    public function save_complete(Request $request){

        DB::beginTransaction();

        try {

            $pat_mast_info = DB::table('pat_mast_info')
                        ->where('pm_idno','=',$request->pm_idno);

            $field_name = str_replace(' ', '_', $request->progress).'_completed';


            if($pat_mast_info->exists()){

                $pat_mast_info->update([
                    $field_name => $request->value
                ]);

            }else{

                DB::table('pat_mast_info')
                    ->insert([
                        'pm_idno' => $request->pm_idno,
                        $field_name => $request->value
                    ]);

            }
            DB::commit();

            $responce = new stdClass;
            if($request->value == 'true'){
                $responce->completed = 'Completed';
            }else{
                $responce->completed = 'Uncompleted';
            }
            return json_encode($responce);
            
        } catch (\Exception $e) {
            DB::rollback();
            
            return response($e->getMessage(), 500);
        }
    }

    public function get_answer_set($row,$null){
        if($null == true){
            $row->cb1=$row->cb2=$row->cb3=$row->cb4=$row->cb5=$row->cb6=$row->cb7=$row->cb8=$row->cb9=null;
            $row->tf1=$row->tf2=$row->tf3=$row->tf4=$row->tf5=$row->tf6=$row->tf7=$row->tf8=null;
            $row->op1=$row->op2=$row->op3=$row->op4=$row->op5=$row->op6=$row->op7=$row->op8=$row->op9=null;
            $row->dd1=$row->dd2=$row->dd3=$row->dd4=null;
            $row->ta1=$row->ta2=$row->ta3=$row->ta4=null;
            $row->at1=$row->at2=$row->at3=$row->at4=null;
            return $row;
        }else{
            if($row->at1!=null){
                $anchor_table = DB::table('anchor_table')
                    ->where('pm_idno','=',$row->pm_idno)
                    ->where('anchor_id','=',$row->at1)
                    ->get()
                    ->toArray();

                $row->at1 = $anchor_table;

            }
            return $row;
        }

    }
}
