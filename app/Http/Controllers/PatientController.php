<?php

namespace App\Http\Controllers;
use App\Patient;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PatientController extends Controller
{
   
    public function create()
    {
        $patients = DB::table('patients') //query bulider
                ->get();

        return view('patient.create')
                ->withPatients($patients);
    }

    
    public function store(Request $request)
    {

        $patients = new Patient();

        $patients->name = $request->name;
        $patients->dob = $request->dob;
        $patients->gender = $request->gender;
        $patients->religion = $request->religion;
        $patients->occupation = $request->occupation;
        $patients->marital_status = $request->marital_status;
        $patients->phone = $request->phone;
        $patients->email = $request->email;
        $patients->present_address = $request->present_address;
        $patients->permanent_address = $request->permanent_address;
        $patients->father_name = $request->father_name;
        $patients->father_nid = $request->father_nid;
        $patients->father_phone = $request->father_phone;
        $patients->father_occ = $request->father_occ;
        $patients->mother_name = $request->mother_name;
        $patients->mother_nid = $request->mother_nid;
        $patients->mother_phone = $request->mother_phone;
        $patients->mother_occ = $request->mother_occ;
        
                
        if(isset($_POST['father']))
        {
            $patients->guardian_name=$request->father_name;
            $patients->guardian_nid=$request->father_nid;
            $patients->guardian_phone=$request->father_phone;
            $patients->guardian_occ=$request->father_occ;
        }
        elseif(isset($_POST['mother']))
        {
            $patients->guardian_name=$request->mother_name;
            $patients->guardian_nid=$request->mother_nid;
            $patients->guardian_phone=$request->mother_phone;
            $patients->guardian_occ=$request->mother_occ;
        }
        else
        {
            $patients->guardian_name=$request->guardian_name;
            $patients->guardian_nid=$request->guardian_nid;
            $patients->guardian_phone=$request->guardian_phone;
            $patients->guardian_occ=$request->guardian_occ;

        }
                
        
        $patients->save();

        
        $sp = DB::table('employees')
                ->where('designation','=','Admin')
                ->get();
                 
        $emp = DB::table('employees')
        ->where('designation','=', 'Employee')
        ->get();

        
        
        $pck = DB::table('packages_rooms')
        ->join('packages','package_id','=','packages.id')
        ->join('rooms','room_id','=' ,'rooms.id')
        ->select('packages_rooms.*','packages.name as package_name','rooms.room_no as room')
        ->get();


        return view('admission.create')
                ->withSupervisors($sp)
                ->withEmployees($emp)
                ->withPackages($pck)
                ->withPatients($patients);

    }

    public function index()
    {
        
        
        $patients = DB::table('patients')
                    ->get();

        return view('patient.index')
                    ->with('patients',$patients);
    }

    public function show($id)
    {
        // $emp = DB::table('employees');
        $pt = Patient::find($id);

        return view('patient.show')
                    ->withPatients($pt);
    }
  
    

}
