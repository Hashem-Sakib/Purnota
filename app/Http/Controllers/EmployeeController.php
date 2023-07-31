<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee; //binding model
use Illuminate\Support\Facades\DB;



class EmployeeController extends Controller
{
    public function index()
    {
        
        
        $employees = DB::table('employees')
                    ->get();

        return view('employee.index')
                    ->withEmployees($employees);
    }
    public function create()
    {
        $emp = DB::table('employees')
                ->get();

        return view('employee.create')
                ->withEmployees($emp);
    }
    public function store(Request $request)
    {
        $emp = new Employee();
        $emp->name = $request->name;
        $emp->designation = $request->designation;
        $emp->phone = $request->phone;
        $emp->address = $request->address;
        $emp->password = $request->password;
        
        $emp->save();

        // return redirect(route('employee.show',$emp->id));
        
        return redirect(route('employee.show',$emp->id));
    }

    public function show($id)
    {
        // $emp = DB::table('employees');
        $emp = Employee::find($id);
                   

        return view('employee.show')
                    ->withEmp($emp);
    }
    

}
