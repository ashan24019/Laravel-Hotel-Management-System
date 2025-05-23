<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Room;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return view('home.index');
            } elseif ($usertype == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        }
    }

    public function home() {
        return view('home.index');
    }

    public function create_room() {
        return view('admin.create_room');
    }

    public function add_room(Request $request) {
        $data = new Room;

        $data -> room_title = $request -> title;
        $data -> descrption = $request -> description;
        $data -> price = $request -> price;
        $data -> wifi = $request -> wifi;
        $data -> room_type = $request -> type;
        
        $image = $request -> image;
        if($image) {
            $imagename = time().'.'.$image -> getClientOriginalExtension();
            $request -> image -> move('room',$imagename );
            $data -> image = $imagename ;
        }

        $data -> save();
        return redirect() -> back();
    }

    public function view_room() {
        $data = Room:: all();
        return view('admin.view_room', compact('data'));
    }
}
