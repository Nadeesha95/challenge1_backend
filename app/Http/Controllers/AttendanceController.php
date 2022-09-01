<?php

namespace App\Http\Controllers;

use App\Imports\AttendanceImport;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class AttendanceController extends Controller
{
    

    public function fileImport(Request $request) 
    {

        $validator = Validator::make($request->all(), [
            'file' => 'required|max:10000|mimes:xlsx'
        ]);
    
    if($validator->fails()){
    
    
        return response()->json([
    
            'validate_err'=>$validator->messages(),
    
        ]);
    
    
    }else{



   
        

        Excel::import(new AttendanceImport, $request->file('file')->store('temp'));
       

        return response()->json([

            'status'=>200,
            'message'=>'Upload successfully',
    
        ])->setStatusCode(200);






    }

    }


    public function get_attendance() 
    {
    

        $attendance = Attendance::with('from')->get();

        return response()->json([
            'status'=> 200,
            'attendance'=>$attendance,
        ]);


    }











}
