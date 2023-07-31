<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor; //binding model
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
   
    public function create()
    {
        $visitors = DB::table('visitors')
                ->get();
        $emp = DB::table('employees')
                ->where('designation','=','Employee')
                ->get();
        

        return view('visitor.create')
                ->withEmployees($emp)
                ->withVisitors($visitors);
    }
    public function store(Request $request)
    {
        $visitors = new Visitor();
        $visitors->name = $request->name;
        $visitors->goods_received = $request->goods_received;
        $visitors->monitored_by = $request->monitored_by;
        $visitors->admission_id = $request->admission_id;
        $visitors->date_time = $request->date_time;
        $visitors->relationship = $request->relationship;
        

        

      
        $visitors = DB::table('visitors')
        ->join('admissions','admission_id','=','admissions.id')
        ->join('patients','patient_id','=' ,'patients.id')
        ->select('visitors.*','patients.name as patient_name')
        ->get();

        return view('visitor.index')
                  ->with('visitors',$visitors);
        

       
        
    }
    

    public function index()
    {
       
        // $employees = DB::table('employees')
        // ->join('departments','dept_id','=','departments.id')
        // ->select('employees.*','departments.name as dept_name')
        // ->get();

        $visitors = DB::table('visitors')
                    ->join('admissions','admission_id','=','admissions.id')
                    ->join('patients','patient_id','=' ,'patients.id')
                    ->select('visitors.*','patients.name as patient_name')
                    ->get();

        return view('visitor.index')
                    ->with('visitors',$visitors);
    }

}
