<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class Courses extends Controller
{
    //
    function fetch()
    {
    	return Course::all();
 		//$data Course::all();
 		//return view('userview',['data']=>$data);
    



    }
}
