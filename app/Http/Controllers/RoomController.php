<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        $room = new Room();
        return view('rooms.create', compact('room'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'floor' => 'required',
            'type' => 'required',
            'beds' => 'required'
        ]);

        Room::create($request->all());

        $request->session()->flash('msg', 'Room has been created');

        return redirect('/rooms');
    }

    public function show(Room $room)
    {
        $room = Room::find($room->id);
        return view('rooms.detail', compact('room'));
    }

    public function edit(Room $room)
    {
        $room = Room::find($room->id);
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'floor' => 'required',
            'type' => 'required',
            'beds' => 'required'
        ]);

        $room = Room::find($id);
        $room->update($request->all());
        $request->session()->flash('msg', 'Room has been updated');
        return redirect('/rooms');
    }

    public function destroy(Room $room)
    {
        Room::destroy($room->id);
        request()->session()->flash('msg', 'Room has been deleted');
        return redirect('rooms');
    }

    public function availableRooms()
    {

        $rooms = Room::where('status', 1)->get();
        return view('rooms.index', compact('rooms'));
    }

    public function bookedRooms()
    {
        $rooms = Room::where('status', 0)->get();
        return view('rooms.index', compact('rooms'));
    }

}
