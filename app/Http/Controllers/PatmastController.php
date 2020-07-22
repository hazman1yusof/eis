<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;
use DB;
use Auth;
use Carbon\Carbon;
use DateTime;

class PatmastController extends Controller
{
    public function __construct()
    {
    }

    public function patmast(Request $request){ //xguna
        // foreach ($_GET as $key => $value) {
        //     dump($key.' => '.$value);
        // }


        $get_array=[];
        foreach ($_GET as $key => $value) {
            if($this->discard_null_value($key,$value)){
                continue;
            }
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

        return view('patmast.show',compact('patmast'));
    }

    public function discard_null_value($key,$value){
        $int_array = ['MRN','Episno','Postcode','Century','Accum_chg','Accum_Paid','first_visit_date','last_visit_date','Reg_Date','last_episno','FirstIpEpisNo','FirstOpEpisNo','AddDate','Lastupdate','NewMrn','pPostCode','DeceasedDate','upddate','idno'];
        $date_array = ['DOB','first_visit_date','Reg_Date','last_visit_date','AddDate','Lastupdate','DeceasedDate','upddate'];

        if(in_array($key, $int_array) && empty($value)){
            return true;            
        }

        if(in_array($key, $date_array) && empty($value)){
            return true;            
        }
        // dd($array);

        return false;
    }

    public static function turn_date($from_date,$from_format='d/m/Y'){
        $carbon = Carbon::createFromFormat($from_format,$from_date);
        return $carbon;
    }

    public function test(Request $request){
        $patmast = DB::table('pat_mast')->where('idno','=',1)->first();
        // dd($patmast);

        return view('patmast.show',compact('patmast'));
    }
}
