<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room; //binding model
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function index()
    {
    }
    public function create()
    {
        $rooms = DB::table('rooms')
                ->get();

        return view('rooms')
                ->withRooms($rooms);
    }
    public function store(Request $request)
    {
        $rooms = new Room();
        $rooms->room_no = $request->room_no;
        $rooms->room_type_id = $request->room_type_id;
       
        $rooms->save();

        // return redirect(route('employee.show',$rooms->id));
    }
    public function show($id)
    {
      
                    
    }

    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {

    }

    public function delete($id)
    {
        
    }
}
