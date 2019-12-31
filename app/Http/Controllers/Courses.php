<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class Courses extends Controller
{
    //
    function fetch()
    {
    	///return Course::all();///working fine
 		//experiment 1
 		$data=Course::all();
 		//
 		return view('adminview',['data'=>$data]);
    
		//experiment 1


    }
}
