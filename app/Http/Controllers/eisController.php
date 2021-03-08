<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;
use DB;
use Auth;
use Carbon\Carbon;
use DateTime;
use Session;

class eisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Request $request)
    {
        return view('eis.eis');
    }

	public function reveis(Request $request)
    {
        return view('eis.reveis');
    }

    public function table(Request $request){
        switch ($request->action) {
            case 'get_json_pivot_epis':
                return $this->get_json_pivot_epis($request);
                break;
            case 'get_json_pivot_reveis':
                return $this->get_json_pivot_reveis($request);
                break;
            case 'get_month':
                return $this->get_month($request);
                break;
            default:
                # code...
                break;
        }
    }

    public function get_json_pivot_epis(Request $request){
        $datetype = $request->datetype;
        $datefrom = new Carbon($request->datefrom);
        $dateto = new Carbon($request->dateto);
        $dateto = $datefrom->day($datefrom->daysInMonth);

        $init = $request->init;
        $pateis = DB::table('pateis_epis')
                    ->select('units','epistype','gender','race','religion','payertype','regdept','admdoctor','admdate','admsrc','docdiscipline','docspeciality','agerange','citizen','area','postcode','placename','state','country','year','quarter','month','datetype')
                    ->whereBetween('admdate', [$datefrom, $dateto])
                    ->where('datetype','=',$datetype);
        if($init == 'init'){
            $dt = Carbon::now("Asia/Kuala_Lumpur");
            $pateis = $pateis->where('year','=','Y'.$dt->year);
            $pateis = $pateis->where('month','=','M'.str_pad($dt->month, 2, '0', STR_PAD_LEFT));
        }
        $pateis = $pateis->get();

        return json_encode($pateis);
    }

    public function get_json_pivot_reveis(Request $request){
        $datetype = $request->datetype;
        $init = $request->init;
    	$pateis = DB::table('pateis_rev')
                    ->select('epistype','groupdesc','typedesc','month','quarter','year','datetype')
                    ->where('datetype','=',$datetype);
        if($init == 'init'){
            $dt = Carbon::now("Asia/Kuala_Lumpur");
            $pateis = $pateis->where('year','=','Y'.$dt->year);
            $pateis = $pateis->where('month','=','M'.str_pad($dt->month, 2, '0', STR_PAD_LEFT));
        }
        $pateis = $pateis->get();

    	return json_encode($pateis);
    }

    public function get_month(Request $request){
        

    }

}
