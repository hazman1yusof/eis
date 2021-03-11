<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use stdClass;
use View;
use Response;
use File;

class PostController extends Controller
{
    public function post(Request $request)
    {
    	$type = $request->file('file')->getClientMimeType();

        $file_path = $request->file('file')->store('upload', 'public');
    	echo $file_path;
    }

    public function get(Request $request)
    {	
    	$filename = storage_path()."/app/public/upload/3uo7bTJhARp7eRQ4MSZa6HjCbkU1igkai5UlTdij.txt";
    	$myfile = fopen($filename,'r');

    	$year_obj = $this->getmonth_year($myfile);
    	DB::table('pateis_epis')
                ->where('datetype','=','dis')
                ->where('year','=',$year_obj->year)
                ->where('month','=',$year_obj->month)
                ->delete();

        fclose($myfile);
        $myfile = fopen($filename,'r');

        $row = 0;
        $field_name = [];
        $array_insert = [];
    	while (($data = fgetcsv($myfile, 1000, ",")) !== FALSE) {
	        $row++;
    		if($row == 1){
                $field_name = $this->makefield($data);
                continue;
            }
            array_push($array_insert,$this->make_array_insert($data,$field_name));
	    }
        fclose($myfile);
        foreach (array_chunk($array_insert,1000) as $t){ // masuk macam ni sebab mysql xboleh byk sekali harung
            DB::table('pateis_epis')->insert($t);
        }

    }

    public function makefield($data){
        $field_name = [];
        foreach ($data as $key => $value) {
            if($value == 'Procedure'){
                array_push($field_name,'procedure_');
            }else if($value == 'Case'){
                array_push($field_name,'case_');
            }else{
                array_push($field_name,str_replace(' ', '', strtolower($value)));
            }
        }
        array_push($field_name,'datetype');
        return $field_name;
    }

    public function make_array_insert($data,$field_name){
        $array_insert = [];
        foreach ($field_name as $key => $field) {
            if($field == 'datetype'){
                $value = 'dis';
            }else{
                $value = $data[$key];
            }

            $array_insert = array_merge($array_insert,array(
                $field=>$value
            ));
        }
        return $array_insert;
    }

    public function getmonth_year($myfile){
		$row = 0;
		$object = new stdClass();
	    while (($data = fgetcsv($myfile, 1000, ",")) !== FALSE) {
	        $row++;
    		if($row == 2){
    			$object->year = $data[22];
    			$object->month = $data[24];
    			break;
    		}
	    }
	    return $object;
	}

}
