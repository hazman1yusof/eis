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

        $firstdate = Carbon::createFromDate(2021, 6, 1);
        $seconddate = Carbon::createFromDate(2021, 6, 1)->add(6, 'days');
        $thirddate = Carbon::createFromDate(2021, 6, 1)->add(12+1, 'days');
        $fourthdate = Carbon::createFromDate(2021, 6, 1)->add(18+2, 'days');
        $fiftthdate = Carbon::createFromDate(2021, 6, 1)->endOfMonth();

        $week1ip = DB::table('ukmkcomm_eis.pateis_rev')
                    ->where('year','=','Y2021')
                    ->where('month','=','M06')
                    ->where('epistype','=','IP')
                    ->whereBetween('disdate', [$firstdate, $seconddate])
                    ->count();

        $week2ip = DB::table('ukmkcomm_eis.pateis_rev')
                    ->where('year','=','Y2021')
                    ->where('month','=','M06')
                    ->where('epistype','=','IP')
                    ->whereBetween('disdate', [$seconddate, $thirddate])
                    ->count();

        $week3ip = DB::table('ukmkcomm_eis.pateis_rev')
                    ->where('year','=','Y2021')
                    ->where('month','=','M06')
                    ->where('epistype','=','IP')
                    ->whereBetween('disdate', [$thirddate, $fourthdate])
                    ->count();

        $week4ip = DB::table('ukmkcomm_eis.pateis_rev')
                    ->where('year','=','Y2021')
                    ->where('month','=','M06')
                    ->where('epistype','=','IP')
                    ->whereBetween('disdate', [$fourthdate, $fiftthdate])
                    ->count();

        $week1op = DB::table('ukmkcomm_eis.pateis_rev')
                    ->where('year','=','Y2021')
                    ->where('month','=','M06')
                    ->where('epistype','=','OP')
                    ->whereBetween('disdate', [$firstdate, $seconddate])
                    ->count();

        $week2op = DB::table('ukmkcomm_eis.pateis_rev')
                    ->where('year','=','Y2021')
                    ->where('month','=','M06')
                    ->where('epistype','=','OP')
                    ->whereBetween('disdate', [$seconddate, $thirddate])
                    ->count();

        $week3op = DB::table('ukmkcomm_eis.pateis_rev')
                    ->where('year','=','Y2021')
                    ->where('month','=','M06')
                    ->where('epistype','=','OP')
                    ->whereBetween('disdate', [$thirddate, $fourthdate])
                    ->count();

        $week4op = DB::table('ukmkcomm_eis.pateis_rev')
                    ->where('year','=','Y2021')
                    ->where('month','=','M06')
                    ->where('epistype','=','OP')
                    ->whereBetween('disdate', [$fourthdate, $fiftthdate])
                    ->count();

        $groupdesc_ = DB::table('ukmkcomm_eis.pateis_rev')->distinct()->get(['groupdesc']);

        $groupdesc = [];
        $groupdesc_val_op = [];
        $groupdesc_val_ip = [];
        $groupdesc_val_op_percent = [];
        $groupdesc_val_ip_percent = [];
        $groupdesc_val = [];
        foreach ($groupdesc_ as $key => $value) {
            $groupdesc[$key] = $value->groupdesc;
            $groupdesc_op = DB::table('ukmkcomm_eis.pateis_rev')
                            ->where('year','=','Y2021')
                            ->where('month','=','M06')
                            ->where('epistype','=','OP')
                            ->where('groupdesc','=',$value->groupdesc)
                            ->count();
            $groupdesc_val_op[$key] = $groupdesc_op;

            $groupdesc_ip = DB::table('ukmkcomm_eis.pateis_rev')
                            ->where('year','=','Y2021')
                            ->where('month','=','M06')
                            ->where('epistype','=','IP')
                            ->where('groupdesc','=',$value->groupdesc)
                            ->count();
            $groupdesc_val_ip[$key] = $groupdesc_ip;
            $groupdesc_val[$key] = $groupdesc_op + $groupdesc_ip;


            if($groupdesc_val[$key] != 0){
                $groupdesc_val_op_percent[$key] = $groupdesc_op / $groupdesc_val[$key] * 100;
                $groupdesc_val_ip_percent[$key] = $groupdesc_ip / $groupdesc_val[$key] * 100;
            }else{
                $groupdesc_val_op_percent[$key] = 0;
                $groupdesc_val_ip_percent[$key] = 0;
            }

        }

        $ip_month = [$week1ip,$week2ip,$week3ip,$week4ip];
        $op_month = [$week1op,$week2op,$week3op,$week4op];

        return view('dashboard.dashboard',compact('ip_month','op_month','groupdesc','groupdesc_val_op','groupdesc_val_ip','groupdesc_val','groupdesc_val_op_percent','groupdesc_val_ip_percent'));
    }
}
