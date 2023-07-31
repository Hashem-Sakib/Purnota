<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{

    public function create()
    {
        $packages = DB::table('packages') //query bulider
                ->get();

        return view('package.create')
                ->withPackages($packages);
    }


    public function store(Request $request)
    {
        $n = $request->name;
        $d = $request->duration;
        $a = $request->amount;

        // echo "okay";
        // return;

        $packages = new Package();

        $packages->name = $n;
        $packages->duration = $d;
        $packages->amount = $a;
        
        $packages->save();

        // return redirect(route('package.show',$packages->id));
    }

    public function index()
    {
        
        
        $packages = DB::table('packages')
                    ->get();

        return view('package.index')
                    ->with('packages',$packages);
    }
    
    
  
}
