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

    	if(!empty($request->diagcode)){

    		$gkcasses = DB::table('gkc.gkcasses')
    							->where('diagcode','=',$request->diagcode)->get();

            $patgkcasses = DB::table('gkc.patgkcasses')
                                ->where('MRN','=',$mrn)
                                ->where('diagcode','=',$request->diagcode)->get();

            $diagnosis = DB::table('gkc.gkcdiag')->where('diagcode','=',$request->diagcode)->first();

    		$asses_cat_array = [];
    		$asses_cat = [];
    		foreach ($gkcasses as $key => $obj) {
    			if(!in_array($obj->description, $asses_cat_array)){
    				$responce = new stdClass();
    				$responce->description = $obj->description;
    				$responce->progress = $obj->progress;

    				array_push($asses_cat_array, $obj->description);
    				array_push($asses_cat, $responce);
    			}
    		}
            // dd($asses_cat);

    		// foreach ($asses_cat as $key_que => $obj_que) {
    		// 	foreach ($patgkcasses as $key => $obj) {
    		// 		$arrayname[indexname] = $value;
    		// 		array_push($asses_que, $obj->description);
    		// 	}
    		// }

        	return view('study.study',compact('pat_mast','diagnosis','diagnosis_all','asses_cat','gkcasses','patgkcasses'));
    	}

        return view('study.study',compact('pat_mast','diagnosis_all'));
    }

    public function diagnosis_post(Request $request){

    	$patgkcasses_obj = DB::table('gkc.patgkcasses')
    							->where('mrn','=',$request->mrn)
    							->where('compcode','=','9A')
    							->where('diagcode','=',$request->diagcode);

    	if($patgkcasses_obj->exists()){
        	return redirect('/study/'.$request->mrn.'?diagcode='.$request->diagcode);
    	}

    	$gkcasses = DB::table('gkc.gkcasses')->where('diagcode','=',$request->diagcode)->get();

    	foreach ($gkcasses as $key => $obj) {
    		DB::table('gkc.patgkcasses')->insert([
	    		'compcode' => '9A',
	    		'mrn' => $request->mrn,
	    		'description' => $obj->description,
	    		'diagcode' => $obj->diagcode,
	    		'questionnaire' => $obj->questionnaire,
	    		'progress' => $obj->progress,
	    		'regdate' => Carbon::now("Asia/Kuala_Lumpur"),
	    		'transdate' => Carbon::now("Asia/Kuala_Lumpur"),
	    	]);
    	}

        return redirect('/study/'.$request->mrn.'?diagcode='.$request->diagcode);
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
                $this->save_ta($request,$value);
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

    public function save_cb(Request $request){//, $value

        if(!empty($request->value)){
            DB::table('gkc.patgkcasses')
                ->where('mrn','=', $request->mrn)
                ->where('diagcode','=',$request->diagcode)
                ->where('description','=',$request->description)
                ->where('questionnaire','=',$request->name)
                ->update([
                    $request->value => $request->checked ,
                    'transdate' => Carbon::now("Asia/Kuala_Lumpur"),
                ]);
        }

        // DB::table('gkc.patgkcasses')
        //     ->where('mrn','=', $request->mrn)
        //     ->where('diagcode','=',$request->diagcode)
        //     ->where('description','=',$request->description)
        //     ->where('questionnaire','=',$request->name)
        //     ->update([
        //         $request->value => $request->checked ,
        //         'regdate' => Carbon::now("Asia/Kuala_Lumpur"),
        //         'transdate' => Carbon::now("Asia/Kuala_Lumpur"),
        //     ]);
    }

    public function save_op(Request $request){//, $value
        if(!empty($request->value)){//$request[str_replace(' ', '_', $value->questionnaire)]

            DB::table('gkc.patgkcasses')
                ->where('mrn','=', $request->mrn)
                ->where('diagcode','=',$request->diagcode)
                ->where('description','=',$request->description)
                ->where('questionnaire','=',$request->name)
                // ->where('questionnaire','=',$value->questionnaire)
                ->update([
                    'op1' => null ,
                    'op2' => null ,
                    'op3' => null ,
                    'op4' => null ,
                    'op5' => null ,
                    'op6' => null ,
                    'op7' => null ,
                    'op8' => null ,
                    'regdate' => Carbon::now("Asia/Kuala_Lumpur"),
                    'transdate' => Carbon::now("Asia/Kuala_Lumpur"),
                ]);

            DB::table('gkc.patgkcasses')
                ->where('mrn','=', $request->mrn)
                ->where('diagcode','=',$request->diagcode)
                ->where('description','=',$request->description)
                ->where('questionnaire','=',$request->name)
                // ->where('questionnaire','=',$value->questionnaire)
                ->update([
                    //$request[str_replace(' ', '_', $value->questionnaire)
                    $request->value => 'true' ,
                    'regdate' => Carbon::now("Asia/Kuala_Lumpur"),
                    'transdate' => Carbon::now("Asia/Kuala_Lumpur"),
                ]);
        }
    }

    public function save_tf(Request $request){//, $value
        if(!empty($request->value)){//$request[str_replace(' ', '_', $value->questionnaire)]
            DB::table('gkc.patgkcasses')
                ->where('mrn','=', $request->mrn)
                ->where('diagcode','=',$request->diagcode)
                ->where('description','=',$request->description)
                ->where('questionnaire','=',$request->name)
                // ->where('questionnaire','=',$value->questionnaire)
                ->update([
                    // 'tf1' => $request[str_replace(' ', '_', $value->questionnaire)] ,
                    'tf1' => $request->value ,
                    'regdate' => Carbon::now("Asia/Kuala_Lumpur"),
                    'transdate' => Carbon::now("Asia/Kuala_Lumpur"),
                ]);
        }
    }

    public function save_ta(Request $request){//, $value
        if(!empty($request->value)){//$request[str_replace(' ', '_', $value->questionnaire)]
            DB::table('gkc.patgkcasses')
                ->where('mrn','=', $request->mrn)
                ->where('diagcode','=',$request->diagcode)
                ->where('description','=',$request->description)
                ->where('questionnaire','=',$request->name)
                // ->where('questionnaire','=',$value->questionnaire)
                ->update([
                    'ta1' => $request->value ,
                    // 'ta1' => $request[str_replace(' ', '_', $value->questionnaire)] ,
                    'regdate' => Carbon::now("Asia/Kuala_Lumpur"),
                    'transdate' => Carbon::now("Asia/Kuala_Lumpur"),
                ]);
        }
    }

    public function save_dd(Request $request, $value){
        if(!empty($request[str_replace(' ', '_', $value->questionnaire)])){

            DB::table('gkc.patgkcasses')
                ->where('mrn','=', $request->mrn)
                ->where('diagcode','=',$request->diagcode)
                ->where('description','=',$request->description)
                ->where('questionnaire','=',$value->questionnaire)
                ->update([
                    'dd1' => null ,
                    'dd2' => null ,
                    'dd3' => null ,
                    'dd4' => null ,
                    'regdate' => Carbon::now("Asia/Kuala_Lumpur"),
                    'transdate' => Carbon::now("Asia/Kuala_Lumpur"),
                ]);

            DB::table('gkc.patgkcasses')
                ->where('mrn','=', $request->mrn)
                ->where('diagcode','=',$request->diagcode)
                ->where('description','=',$request->description)
                ->where('questionnaire','=',$value->questionnaire)
                ->update([
                    $request[str_replace(' ', '_', $value->questionnaire)] => 'true' ,
                    'regdate' => Carbon::now("Asia/Kuala_Lumpur"),
                    'transdate' => Carbon::now("Asia/Kuala_Lumpur"),
                ]);
        }
    }
}
