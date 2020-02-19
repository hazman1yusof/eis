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
}
