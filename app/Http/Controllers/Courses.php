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

    function save(Request $req)
    {
    	print_r($req->input());
    	$course=new Course;
    	$course->code=$req->code;
    	$course->user_id=$req->user_id;
    	$course->capacity=$req->capacity;
    	$course->enrolled=$req->enrolled;

    	echo $course->save();

    }
}
