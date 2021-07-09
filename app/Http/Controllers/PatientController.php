<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;
use DB;
use Auth;
use Carbon\Carbon;
use DateTime;
use Session;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Request $request)
    {
        return redirect()->route('eis');
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
            $pat_mast_info = DB::table('pat_mast_info')->where('pm_idno','=',$value->idno);

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

            $value->Name = '<a href="./patient/'.$value->idno.'" class="btn btn-sm btn-info"><i class="fa fa-user"></i> Edit</a>&nbsp;&nbsp;&nbsp;'.$value->Name; 

            if(!empty($value->last_visit)){
                $value->last_visit  = Carbon::createFromFormat('Y-m-d',$value->last_visit)->toFormattedDateString();
            }
            if(!empty($value->diagnosis)){
                $value->button = '<a href="./study/'.$value->idno.'?diagcode='.$value->diagnosis.'" class="btn btn-sm btn-primary">'.$value->diag_desc.'</a>';
            }else{
                $value->button = '<a href="./study/'.$value->idno.'" class="btn btn-sm btn-primary">Study</a>';
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

    public function new_patient(){
        return view('patient.pat_add');
    }

    public function add_patient(Request $request){
        $validatedData = $request->validate([
            'Name' => 'required|max:100',
            'OldMrn' => 'required|max:10',
        ]);

        $exists=DB::table('pat_mast')
            ->where('OldMrn','=',$request->OldMrn)
            ->exists();

        if($exists){
            return redirect()->back()->withErrors(['HUKM MRN already exists']);
        }

        DB::table('pat_mast')
            ->insert([
                'Name' => $request->Name,
                'MRN' => $request->OldMrn,
                'OldMrn' => $request->OldMrn,
                'Lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                'LastUser' => session('username')
            ]);
        
        return redirect()->route('patient')->with('success', 'Patient Succesfully Added');
    }

    public function edit_patient($id){

        $patient = DB::table('pat_mast')
            ->where('idno','=',$id)
            ->first();

        return view('patient.pat_edit', compact('patient'));
    }

    public function store_patient($id, Request $request){//ini utk edit
        $validatedData = $request->validate([
            'Name' => 'required|max:100',
            'OldMrn' => 'required|max:10',
        ]);

        $exists=DB::table('pat_mast')
            ->where('idno','!=',$id)
            ->where('OldMrn','=',$request->OldMrn)
            ->exists();

        if($exists){
            return redirect()->back()->withErrors(['HUKM MRN already exists']);
        }

        DB::table('pat_mast')
            ->where('idno','=',$id)
            ->update([
                'Name' => $request->Name,
                // 'MRN' => $request->MRN,
                'OldMrn' => $request->OldMrn,
                'Lastupdate' => Carbon::now("Asia/Kuala_Lumpur"),
                'LastUser' => session('username')
            ]);
        
        return redirect()->back()->with('success', 'Patient Succesfully Updated');
    }


    public function dashboard(Request $request)
    {

        $dt = Carbon::now();
        $dt->set('month', 6);
        $dt->set('day', 1);
        $firstdate = $dt;
        $seconddate = $dt->add(7, 'days');
        $thirddate = $dt->add(7, 'days');
        $fourthdate = $dt->endOfMonth();

        dd('end');

        return view('dashboard.dashboard');
    }
}
