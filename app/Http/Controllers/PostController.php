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

    public function get()
    {	
    	$filename = storage_path()."/app/public/upload/3uo7bTJhARp7eRQ4MSZa6HjCbkU1igkai5UlTdij.txt";
    	$content = File::get($filename);
    	$myfile = fopen($filename,'r');
    	// dd(fgetcsv($myfile, 1000, ","));
    	$year_obj = $this->getmonth_year($myfile);

    	// DB::table('pateis_epis')
     //            ->where('datetype','=','dis')
     //            ->where('year','=',$year_obj->year)
     //            ->where('month','=',$year_obj->month)
     //            ->delete();

    	while (($data = fgetcsv($myfile, 1000, ",")) !== FALSE) {
	        $row++;
    		if($row == 1)continue;
    		$num = count($data);
	        echo "<p> $num fields in line $row: <br /></p>\n";
	        for ($c=0; $c < $num; $c++) {
	            echo $data[$c] . "<br />\n";
	        }
	        $array_insert;
	        DB::table('pateis_epis')
	        		->insert($array_insert);
	    }
  //   	echo fread($myfile,filesize($filename));
		// fclose($myfile);
    	// dump($file_handle);
    	// while (!feof($file_handle)) {
    	// 	dump($file_handle);
    	// }
    	// dd($content);
    	// foreach($content as $line) {
     //        echo $line;
     //    }
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
