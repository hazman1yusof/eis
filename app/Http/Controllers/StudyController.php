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
        $badge->baseline = $badge->month_1st = $badge->month_3rd = $badge->month_6th = $badge->year_1 = $badge->year_2 = $badge->year_3 = $badge->year_4 = null;

    	if(!empty($request->diagcode)){

    		$gkcasses = DB::table('gkc.gkcasses')
    							->where('diagcode','=',$request->diagcode)->get();

            $patvisit = DB::table('gkc.patvisit')
                                ->where('mrn','=',$mrn)->get();

            $diagnosis = DB::table('gkc.gkcdiag')->where('diagcode','=',$request->diagcode)->first();

    		$asses_by_visit = []; // berapa bnyak diagnosis dia

    		foreach ($patvisit as $key => $visit) {


                $patgkcasses_first = DB::table('gkc.patgkcasses')
                            ->where('MRN','=',$visit->mrn)
                            ->where('regdate','=',$visit->regdate)
                            ->where('diagcode','=',$request->diagcode)
                            ->first();

    			$patgkcasses = DB::table('gkc.patgkcasses')
                                ->where('MRN','=',$visit->mrn)
                                ->where('regdate','=',$visit->regdate)
                                ->where('diagcode','=',$request->diagcode)
                                ->get();

                $badge = $this->badge_counter($badge,$patgkcasses_first);

                $responce = new stdClass;
                $responce->mrn = $patgkcasses_first->mrn;
                $responce->regdate = Carbon::createFromFormat('Y-m-d',$patgkcasses_first->regdate)->toFormattedDateString();
                $responce->regdate2 = $patgkcasses_first->regdate;
                $responce->description = $patgkcasses_first->description;
                $responce->diagcode = $patgkcasses_first->diagcode;
                $responce->questionnaire = $patgkcasses_first->questionnaire;
                $responce->progress = $patgkcasses_first->progress;
                $responce->rowdata = $patgkcasses->toArray();

                array_push($asses_by_visit, $responce);

    		}
            
        	return view('study.study',compact('pat_mast','diagnosis','diagnosis_all','asses_by_visit','gkcasses','badge'));
    	}

        return view('study.study',compact('pat_mast','diagnosis_all','badge'));
    }

    public function diagnosis_post(Request $request){

        DB::beginTransaction();

        try {

            $patgkcasses_obj = DB::table('gkc.patgkcasses')
                                ->where('compcode','=','9A')
                                ->where('mrn','=',$request->mrn)
                                ->where('diagcode','=',$request->diagcode);

            if($patgkcasses_obj->exists()){
                return redirect('/study/'.$request->mrn.'?diagcode='.$request->diagcode);
            }

            $gkcasses = DB::table('gkc.gkcasses')->where('diagcode','=',$request->diagcode)->get();
            $patvisit = DB::table('gkc.patvisit')
                        ->where('mrn','=',$request->mrn)
                        ->where('compcode','=','9A')->get();

            //ni salah betulkan balik nanti

            $baseline_date = Carbon::createFromFormat('Y-m-d',$patvisit[0]->regdate);

            foreach ($patvisit as $key_visit => $visit) {

                $visit_date = Carbon::createFromFormat('Y-m-d',$visit->regdate);
                if($visit_date->equalTo($baseline_date)){
                    $progress = 'Baseline';
                }else if($visit_date->diffInMonths($baseline_date) <= 1){
                    $progress = '1st Month';
                }else if($visit_date->diffInMonths($baseline_date) <= 3){
                    $progress = '3rd Month';
                }else if($visit_date->diffInMonths($baseline_date) <= 6){
                    $progress = '6th Month';
                }else if($visit_date->diffInYears($baseline_date) <= 1){
                    $progress = '1st Year';
                }else if($visit_date->diffInYears($baseline_date) <= 2){
                    $progress = '2nd Year';
                }else if($visit_date->diffInYears($baseline_date) <= 3){
                    $progress = '3rd Year';
                }else if($visit_date->diffInYears($baseline_date) >= 4){
                    $progress = '4th Year';
                }else{
                    $progress = 'Error';
                }
                
                foreach ($gkcasses as $key_gkc => $gkc) {
                    DB::table('gkc.patgkcasses')->insert([
                        'compcode' => $visit->compcode,
                        'mrn' => $visit->mrn,
                        'description' => $gkc->description,
                        'diagcode' => $gkc->diagcode,
                        'questionnaire' => $gkc->questionnaire,
                        'progress' => $progress,
                        'regdate' => $visit->regdate,
                        'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                    ]);
                }
            }


            DB::commit();

            return redirect('/study/'.$request->mrn.'?diagcode='.$request->diagcode);
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
                    ->whereDate('regdate','=',$request->regdate);

                $table->update([
                        $request->value => $request->checked ,
                        'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                    ]);

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
                    ->whereDate('regdate','=',$request->regdate);
                    // ->get();

                
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
                    ->whereDate('regdate','=',$request->regdate);


                $table->update([
                        $request->tf_key => $request->value ,
                        'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                    ]);
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
                DB::table('gkc.patgkcasses')
                    ->where('mrn','=', $request->mrn)
                    ->where('diagcode','=',$request->diagcode)
                    ->where('description','=',$request->description)
                    ->where('questionnaire','=',$request->name)
                    ->whereDate('regdate','=',$request->regdate)
                    ->update([
                        $request->ta_key => $request->value ,
                        'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                    ]);
            }

            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            
            return response($e->getMessage(), 500);
        }
    }

    public function save_dd(Request $request, $value){
        DB::beginTransaction();

        try {

            if(!empty($request[str_replace(' ', '_', $value->questionnaire)])){

                DB::table('gkc.patgkcasses')
                    ->where('mrn','=', $request->mrn)
                    ->where('diagcode','=',$request->diagcode)
                    ->where('description','=',$request->description)
                    ->where('questionnaire','=',$value->questionnaire)
                    ->whereDate('regdate','=',$request->regdate)
                    ->update([
                        'dd1' => null ,
                        'dd2' => null ,
                        'dd3' => null ,
                        'dd4' => null ,
                        'upddate' => Carbon::now("Asia/Kuala_Lumpur"),
                    ]);

                DB::table('gkc.patgkcasses')
                    ->where('mrn','=', $request->mrn)
                    ->where('diagcode','=',$request->diagcode)
                    ->where('description','=',$request->description)
                    ->where('questionnaire','=',$value->questionnaire)
                    ->whereDate('regdate','=',$request->regdate)
                    ->update([
                        $request[str_replace(' ', '_', $value->questionnaire)] => 'true' ,
                        'lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                    ]);
            }
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            
            return response($e->getMessage(), 500);
        }

    }

    public function badge_counter($badge,$patgkcasses_first){
        switch ($patgkcasses_first->progress) {
            case 'Baseline':
                if($badge->baseline==null)$badge->baseline = 0;
                $badge->baseline = $badge->baseline +1;
                break;
            case '1st Month':
                if($badge->month_1st==null)$badge->month_1st = 0;
                $badge->month_1st = $badge->month_1st+1;
                break;
            case '3rd Month':
                if($badge->month_3rd==null)$badge->month_3rd = 0;
                $badge->month_3rd = $badge->month_3rd+1;
                break;
            case '6th Month':
                if($badge->month_6th==null)$badge->month_6th = 0;
                $badge->month_6th = $badge->month_6th+1;
                break;
            case '1st Year':
                if($badge->year_1==null)$badge->year_1 = 0;
                $badge->year_1 = $badge->year_1+1;
                break;
            case '2nd Year':
                if($badge->year_2==null)$badge->year_2 = 0;
                $badge->year_2 = $badge->year_2+1;
                break;
            case '3rd Year':
                if($badge->year_3==null)$badge->year_3 = 0;
                $badge->year_3 = $badge->year_3+1;
                break;
            case '4th Year':
                if($badge->year_4==null)$badge->year_4 = 0;
                $badge->year_4 = $badge->year_4+1;
                break;
            default:
                break;
        }
        return $badge;
    }
}
