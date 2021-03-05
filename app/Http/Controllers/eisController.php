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

    public function get_json_pivot(Request $request){
    	$pateis = DB::table('pateis_epis')
    				->get();

    	return json_encode($pateis);
    }

    public function get_json_pivot_reveis(Request $request){
    	$pateis = DB::table('pateis_epis')
    				->get();

    	return json_encode($pateis);
    }
}
