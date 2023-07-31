<?php

namespace App\Http\Controllers;
use App\Payment;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
   
    public function create()
    {
        $payment = DB::table('payments') //query bulider
                ->get();
                    
        $pt = DB::table('patients')
        ->get();

        return view('payment.create')
                ->withPayment($payment)
                ->withPatients($pt);
    }
    

    
    public function store(Request $request)
    {
           
        $pt = DB::table('patients')
                ->where('id','=',$request->patient_id)
                ->get();

        $payments = new Payment();
        $payments->patient_id = $request->patient_id;
        $payments->date_time = $request->date_time;
        $payments->admission_id = $request->admission_id;
        $payments->paid_amount = $request->paid_amount;
        $payments->paid_by = $request->paid_by;
        $payments->received_by = $request->received_by;
        $payments->paid_method = $request->paid_method;
        // $payments->status = $request->status;
        $payments->relationship = $request->relationship;
        $payments->total_amount = $request->total_amount;
       
                
       
        $payments->save();

        
        $sp = DB::table('employees')
                ->where('designation','=','Employee')
                ->get();
        
        
        $pck = DB::table('packages_rooms')
        ->join('packages','package_id','=','packages.id')
        ->join('rooms','room_id','=' ,'rooms.id')
        ->select('packages_rooms.*','packages.name as package_name','rooms.room_no as room')
        ->get();

       


        return view('patient.index')
                ->withPatients($pt);
    }

    public function index()
    {
       
        $patients = DB::table('patients')
        ->get();
        $payments = DB::table('payments')
                    ->get();


                   

        return view('payment.paymentrecords')
                        ->with('payments',$payments)
                        ->with('patients',$patients);
    }

    public function show($id)
    {

       
        // $emp = DB::table('employees');
        //$pt = Payment::find($id);
        //$p= DB::table('payments')->where('patient_id','=', $id)->first();
        $p=DB::table('payments')
        ->where('patient_id', $id)
        ->first();
        $total = DB::table('payments')->where('patient_id','=', $id)->sum('paid_amount');
        
               
        return view('payment.show')
                    ->withTotal($total)
                  ->withPayments($p);
                //     ->withPay($pt);
    }
  
   
    

}
