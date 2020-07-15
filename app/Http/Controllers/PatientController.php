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
    			->offset($request->start)
                ->orderBy('idno', 'desc');
    	}else{
    		$pat_mast = DB::table('pat_mast')->offset($request->start)->orderBy('idno', 'desc');
    	}

    	
        $paginate = $pat_mast->paginate($request->length);

        foreach ($paginate->items() as $key => $value) {
            $pat_mast_info = DB::table('pat_mast_info')->where('mrn','=',$value->MRN);

            if($pat_mast_info->exists()){
                $pat_mast_info = (array)$pat_mast_info->first();

                $value->Baseline = $this->make_field('Baseline',$pat_mast_info);
                $value->_1st_Month = $this->make_field('1st_Month',$pat_mast_info);
                $value->_3rd_Month = $this->make_field('3rd_Month',$pat_mast_info); 
                $value->_6th_Month = $this->make_field('6th_Month',$pat_mast_info); 
                $value->_1_Year = $this->make_field('1_Year',$pat_mast_info); 
                $value->_2_Year = $this->make_field('2_Year',$pat_mast_info); 
                $value->_3_Year = $this->make_field('3_Year',$pat_mast_info);
                $value->_4_Year = $this->make_field('4_Year',$pat_mast_info); 

            }else{
                $value->Baseline = null;
                $value->_1st_Month = null;
                $value->_3rd_Month = null; 
                $value->_6th_Month = null; 
                $value->_1_Year = null; 
                $value->_2_Year = null; 
                $value->_3_Year = null; 
                $value->_4_Year = null; 
            }


            if(!empty($value->last_visit)){
                $value->last_visit  = Carbon::createFromFormat('Y-m-d',$value->last_visit)->toFormattedDateString();
            }
            if(!empty($value->diagnosis)){
                $value->button = '<a href="./study/'.$value->MRN.'?diagcode='.$value->diagnosis.'" class="btn btn-sm btn-primary">'.$value->diag_desc.'</a>';
            }else{
                $value->button = '<a href="./study/'.$value->MRN.'" class="btn btn-sm btn-primary">Study</a>';
            }
        }


        $responce = new stdClass();
        $responce->recordsTotal = $paginate->total();
        $responce->recordsFiltered = $paginate->total();
        $responce->data = $paginate->items();
        $responce->sql = $pat_mast->toSql();
        $responce->sql_bind = $pat_mast->getBindings();


        return json_encode($responce);
    }


    public function make_field($name,$pat_mast_info){
        if($pat_mast_info[$name.'_completed'] == 'true'){

            $field = $pat_mast_info[$name.'_regdate'].'</br><i class="fas fa-check" style="color:green"></i>';

        }else{

            $field = $pat_mast_info[$name.'_regdate'].'</br><i class="fas fa-times" style="color:red"></i>';
        }


        return $field;

    }
}
