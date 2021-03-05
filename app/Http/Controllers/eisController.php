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
        $pateis = DB::table('pateis_epis')
                    ->select('units','epistype','gender','race','religion','payertype','regdept','admdoctor','admsrc','docdiscipline','docspeciality','agerange','citizen','area','postcode','placename','state','country','year','quarter','month','datetype')
                    ->where('datetype','=',$datetype)
                    ->get();

        return json_encode($pateis);

    }

    public function get_json_pivot_reveis(Request $request){
    	$pateis = DB::table('pateis_epis')
                    ->where('datetype','=',$datetype)
    				->get();

    	return json_encode($pateis);
    }

    public function get_month(Request $request){
        

    }

}
