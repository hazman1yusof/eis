<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use stdClass;

class StudyController extends Controller
{
    public function show($mrn,Request $request)
    {	
    	$pat_mast = DB::table('hisdb.pat_mast')->where('MRN','=',$mrn)->first();
        $diagnosis_all = DB::table('gkc.gkcdiag')->get();

        $badge = new stdClass;
        $badge->baseline = $badge->month_1st = $badge->month_3rd = $badge->month_6th = $badge->year_1 = $badge->year_2 = $badge->year_3 = $badge->year_4 = 1;

    	if(!empty($request->diagcode)){

            $asses_master = [];

    		$gkcasses = DB::table('gkc.gkcasses')
    							->where('diagcode','=',$request->diagcode)->get();

            $diagnosis = DB::table('gkc.gkcdiag')->where('diagcode','=',$request->diagcode)->first();

            $patgkcasses = DB::table('gkc.patgkcasses')
                            ->where('MRN','=',$mrn)
                            ->where('diagcode','=',$request->diagcode);

            // $badge_count = $patgkcasses->distinct()->get(['progress','mrn','description','diagcode','regdate']);

            $badge_count = ['Baseline','1st Month','3rd Month','6th Month','1 Year','2 year','3 year','4 year'];



            foreach ($badge_count as $badge_count_key => $progress) {
                $this_progress = $progress;

                $this_mrn = $mrn;
                $this_regdate2 = '';
                $this_description = '';
                $this_diagcode = $request->diagcode;

                $answer_set = [];
                foreach ($gkcasses as $gkcasses_key => $gkcasses_each) {
                    if($this_description == ''){
                        $this_description = $gkcasses_each->description;
                    }

                    $patgkcasses_obj = DB::table('gkc.patgkcasses')
                                    ->where('MRN','=',$mrn)
                                    ->where('diagcode','=',$request->diagcode)
                                    ->where('progress','=',$progress)
                                    ->where('questionnaire','=',$gkcasses_each->questionnaire);


                    if($patgkcasses_obj->exists()){

                        if($this_regdate2 == ''){
                            $this_regdate2 = $patgkcasses_obj->first()->regdate;
                        }


                        array_push($answer_set, $this->get_answer_set($patgkcasses_obj->first(),false));
                    }else{
                        array_push($answer_set, $this->get_answer_set($gkcasses_each,true));
                    }


                }


                $responce = new stdClass;

                $responce->progress = $this_progress;
                $responce->mrn = $this_mrn;
                if($this_regdate2 != ''){
                    $responce->regdate2 = $this_regdate2;
                    $responce->regdate = Carbon::createFromFormat('Y-m-d',$this_regdate2)->toFormattedDateString();
                }else{
                    $responce->regdate2 = null;
                    $responce->regdate = null;
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

            return redirect('/study/'.$request->mrn.'?diagcode='.$request->diagcode);

            // $patgkcasses_obj = DB::table('gkc.patgkcasses')
            //                     ->where('compcode','=','9A')
            //                     ->where('mrn','=',$request->mrn)
            //                     ->where('diagcode','=',$request->diagcode);

            // if($patgkcasses_obj->exists()){
            //     return redirect('/study/'.$request->mrn.'?diagcode='.$request->diagcode);
            // }

            // $gkcasses = DB::table('gkc.gkcasses')->where('diagcode','=',$request->diagcode)->get();
            // $patvisit = DB::table('gkc.patvisit')
            //             ->where('mrn','=',$request->mrn)
            //             ->where('compcode','=','9A')->get();

            // //ni salah betulkan balik nanti

            // $baseline_date = Carbon::createFromFormat('Y-m-d',$patvisit[0]->regdate);

            // foreach ($patvisit as $key_visit => $visit) {

            //     $visit_date = Carbon::createFromFormat('Y-m-d',$visit->regdate);
            //     if($visit_date->equalTo($baseline_date)){
            //         $progress = 'Baseline';
            //     }else if($visit_date->diffInMonths($baseline_date) <= 1){
            //         $progress = '1st Month';
            //     }else if($visit_date->diffInMonths($baseline_date) <= 3){
            //         $progress = '3rd Month';
            //     }else if($visit_date->diffInMonths($baseline_date) <= 6){
            //         $progress = '6th Month';
            //     }else if($visit_date->diffInYears($baseline_date) <= 1){
            //         $progress = '1st Year';
            //     }else if($visit_date->diffInYears($baseline_date) <= 2){
            //         $progress = '2nd Year';
            //     }else if($visit_date->diffInYears($baseline_date) <= 3){
            //         $progress = '3rd Year';
            //     }else if($visit_date->diffInYears($baseline_date) >= 4){
            //         $progress = '4th Year';
            //     }else{
            //         $progress = 'Error';
            //     }
                
            //     foreach ($gkcasses as $key_gkc => $gkc) {
            //         DB::table('gkc.patgkcasses')->insert([
            //             'compcode' => $visit->compcode,
            //             'mrn' => $visit->mrn,
            //             'description' => $gkc->description,
            //             'diagcode' => $gkc->diagcode,
            //             'questionnaire' => $gkc->questionnaire,
            //             'progress' => $progress,
            //             'regdate' => $visit->regdate,
            //             'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
            //         ]);
            //     }
            // }


            // DB::commit();

            //return redirect('/study/'.$request->mrn.'?diagcode='.$request->diagcode);
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

            case 'ta':
                $this->save_ta($request);
                break;
        }
    }

    public function study_post(Request $request){

        $gkcasses = DB::table('gkc.gkcasses')
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
                $table = DB::table('gkc.patgkcasses')
                    ->where('mrn','=', $request->mrn)
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
                    DB::table('gkc.patgkcasses')
                        ->insert([
                            'mrn' => $request->mrn,
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
                $table= DB::table('gkc.patgkcasses')
                    ->where('mrn','=', $request->mrn)
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
                    DB::table('gkc.patgkcasses')
                        ->insert([
                            'mrn' => $request->mrn,
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
                $table = DB::table('gkc.patgkcasses')
                    ->where('mrn','=', $request->mrn)
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
                    DB::table('gkc.patgkcasses')
                        ->insert([
                            'mrn' => $request->mrn,
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
                $table = DB::table('gkc.patgkcasses')
                            ->where('mrn','=', $request->mrn)
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
                    DB::table('gkc.patgkcasses')
                        ->insert([
                            'mrn' => $request->mrn,
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

    public function save_dd(Request $request, $value){ // xbuat lagi
        DB::beginTransaction();

        try {

            if(!empty($request[str_replace(' ', '_', $value->questionnaire)])){

                $table = DB::table('gkc.patgkcasses')
                        ->where('mrn','=', $request->mrn)
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
                    DB::table('gkc.patgkcasses')
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

    public function get_answer_set($row,$null){
        if($null == true){
            $row->cb1=$row->cb2=$row->cb3=$row->cb4=$row->cb5=$row->cb6=$row->cb7=$row->cb8=$row->cb9=null;
            $row->tf1=$row->tf2=$row->tf3=$row->tf4=$row->tf5=$row->tf6=$row->tf7=$row->tf8=null;
            $row->op1=$row->op2=$row->op3=$row->op4=$row->op5=$row->op6=$row->op7=$row->op8=$row->op9=null;
            $row->dd1=$row->dd2=$row->dd3=$row->dd4=null;
            $row->ta1=$row->ta2=$row->ta3=$row->ta4=null;
            return $row;
        }else{
            return $row;
        }

    }
}
