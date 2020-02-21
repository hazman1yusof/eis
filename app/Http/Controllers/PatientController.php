<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;
use DB;
use Auth;
use Carbon\Carbon;
use DateTime;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Request $request)
    {
    	$pat_mast = DB::table('pat_mast')->limit(100)->get();

        return view('patient.patient',compact('pat_mast'));
    }

    public function ajax(Request $request){
    	if(!empty($request->search['value'])){
    		$pat_mast = DB::table('pat_mast')
    			->where($request->where,'like','%'.$request->search['value'].'%')
    			->offset($request->start);
    	}else{
    		$pat_mast = DB::table('pat_mast')->offset($request->start);
    	}

    	
        $paginate = $pat_mast->paginate($request->length);

        foreach ($paginate->items() as $key => $value) {
        	$value->button = '<a href="./study/'.$value->MRN.'" class="btn btn-sm btn-primary">Study</a>';
        }


        $responce = new stdClass();
        $responce->recordsTotal = $paginate->total();
        $responce->recordsFiltered = $paginate->total();
        $responce->data = $paginate->items();
        $responce->sql = $pat_mast->toSql();
        $responce->sql_bind = $pat_mast->getBindings();


        return json_encode($responce);
    }

    public function patmast(Request $request){
        // foreach ($_GET as $key => $value) {
        //     dump($key.' => '.$value);
        // }


        $get_array=[];
        foreach ($_GET as $key => $value) {
            // $value = $this->turn_into_appro_array($value);
            $get_array = array_merge($get_array,[$key => $value]);
        }

        // dd($get_array);


        $patmast_obj = DB::table('pat_mast')->where('mrn','=',$_GET['MRN']);

        if($patmast_obj->exists()){
            $patmast_obj->update($get_array);
            $lastid = $patmast_obj->first()->idno;
        }else{
            $lastid = DB::table('pat_mast')->insertGetId($get_array);
        }

        $patmast = DB::table('pat_mast')->where('idno','=',$lastid)->first();

        dd($patmast);

        // return view('patmast.show',compact('patmast'));
    }

    public function turn_into_appro_array($array){
        $int_array = ['MRN','Episno','Postcode','Century','Accum_chg','Accum_Paid','first_visit_date','last_visit_date','Reg_Date','last_episno','FirstIpEpisNo','FirstOpEpisNo','AddDate','Lastupdate','NewMrn','pPostCode','DeceasedDate','upddate','idno'];
        $date_array = ['DOB','first_visit_date','Reg_Date','last_visit_date','AddDate','Lastupdate','DeceasedDate','upddate'];

        foreach ($array as $key => $value) {
            // if(in_array($key, $date_array) && !empty($value)){
            //  $array[$key] = $this->turn_date($value);
            // }
            if(in_array($key, $int_array) && empty($value)){
                unset($array[$key]);
            }
        }
        // dd($array);

        return $array;
    }

    public static function turn_date($from_date,$from_format='d/m/Y'){
        $carbon = Carbon::createFromFormat($from_format,$from_date);
        return $carbon;
    }
}
