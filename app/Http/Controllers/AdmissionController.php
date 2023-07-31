<?php

namespace App\Http\Controllers;
use App\Admission;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;





class AdmissionController extends Controller
{
    
    public function create()
    {


     

        $add = DB::table('admissions')
                ->get();
      
        return view('patient.create')
                ->withAddmissions($add);
    }
    public function store(Request $request)
    {


      

        $pp = DB::table('patients')
        ->where('id','=', $request->patient_id)
        ->first();
                 
        $emp = DB::table('employees')
        ->where('designation','=', 'Employee')
        ->get();

        $admission = new Admission();
        $admission->patient_id = $request->patient_id;
        $admission->package_room_id = $request->package_room_id;
        $admission->supervisor_id = $request->supervisor_id;
        $admission->addmission_status_id = $request->addmission_status_id;
        $admission->total_amount = $request->total_amount;
        $admission->total_paid = $request->total_paid;
        $admission->discount = $request->discount;
        $admission->paid_by = $request->paid_by;
        $admission->paid_method = $request->paid_method;
        $admission->relationship = $request->relationship;
        $admission->date_time = $request->date_time;
        $admission->admitted_by = $request->admitted_by;
        
        
        $admission->save();


//For Payment Table





        $ap = DB::table('admissions')
        ->where('patient_id','=', $request->patient_id)
        ->first();
        
$payments = new Payment();
$payments->patient_id = $request->patient_id;
$payments->date_time = $request->date_time;
$payments->admission_id = $ap->id;
$payments->paid_amount = $request->total_paid;
$payments->paid_by = $request->paid_by;
$payments->received_by = $request->admitted_by;
$payments->paid_method = $request->paid_method;
$payments->relationship = $request->relationship;
$payments->total_amount = $request->total_amount;

        

$payments->save();
        


                   

        return view('patient.show')
                    ->withPatients($pp);


        // return view('payment.create')
        //         ->withAdmissions($ap)
        //         ->withEmployees($emp)
        //         ->withPatients($pp);
       
    }

    public function index()
    {
        // $employees = Employee::All(); //eloquent ORM
        // $employees = 'select * from employees'; //converted SQL query
        
        // print_r($employees); //debug
        // return;
        
        $ad = DB::table('admissions')
                    ->join('patients','patient_id','patients.id')
                    ->join('employees','supervisor_id','employees.id')
                    ->select('employees.*','patients.name as patient_name','employees.name as employee_name')
                    ->get();

        return view('admission.index')
                    ->withAdmission($ad);
        // return view('employee.index')
        //             ->with('employee',$employees);
    }
    
}

