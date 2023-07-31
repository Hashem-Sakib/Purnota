<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packages_rooms;
use Illuminate\Support\Facades\DB;

class PackagesroomsController extends Controller
{
    
    public function create()
    {

        $rooms = DB::table('rooms')
        ->get();


        $packages = DB::table('packages')
                    ->get();
        return view('packagesrooms')
            ->with('packages',$packages)
            ->with('rooms',$rooms);

    }
    public function store(Request $request)
    {
        

        $packages_rooms = new Packages_rooms();

        $packages_rooms->package_id= $request->package_id;
        $packages_rooms->room_id = $request->room_id;
        
        $packages_rooms->save();

        // return redirect(route('package.show',$packages->id));
    }
    public function index()
    {
        
        
        $packages_rooms = DB::table('packages_rooms')
                    ->join('packages','package_id','=','packages.id')
                    ->join('rooms','room_id','=','rooms.id')
                    ->select('packages_rooms.*','packages.name as package_name','rooms.room_no as room')
                    ->get();

        return view('packagesroomsindex')
                    ->with('packagesrooms',$packages_rooms);
    }
}
