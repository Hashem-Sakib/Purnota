<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdmissionStatus;
use Illuminate\Support\Facades\DB;

class AdmissionStatusController extends Controller
{

    public function create()
    {
        $admissionstatus = DB::table('admission_statuses') //query bulider
                ->get();

        return view('admission.admissionstatus')
                ->withAdmissionstatus($admissionstatus);
    }


    public function store(Request $request)
    {
       
    

        $admissionstatus = new AdmissionStatus();

        $admissionstatus->name = $request->name;
        
        $admissionstatus->save();

        // return redirect(route('package.show',$packages->id));
    }
}
