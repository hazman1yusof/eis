<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PatientController extends Controller
{
    public function show(Request $request)
    {
    	$pat_mast = DB::table('hisdb.pat_mast')->limit(100)->get();

        return view('patient.patient',compact('pat_mast'));
    }
}
