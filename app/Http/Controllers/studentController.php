<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
    function getStudents(){
        $data['allStudents']=student::all();
        return view('students',$data);
    }
}
