<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestoranCreateRequest;
use App\Http\Requests\RestoranUpdateRequest;
use App\Models\Restoran;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class RestoranController extends Controller
{


    public function all()
    {
        $user = Auth::user();
        $restoran = Restoran::where('user_id', $user->id)->first();

        return view('restoran.index', compact('restoran'));
    } //end method

    public function add()
    {
        return view('restoran.create');
    } //end method

    public function create(RestoranCreateRequest $request)

    {

        $data = $request->validated();
        $user = Auth::user();
        $restoran = new Restoran($data);
        $restoran->user_id = $user->id;
        $restoran->save();

        $notification = array(
            'message' => 'Restoran Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('restoran')->with($notification);
    } //end method


    public function edit($id)
    {

        $user = Auth::user();
        $restoran = Restoran::where('id', $id)->where('user_id', $user->id)->first();

        return view('restoran.edit', compact('restoran'));
    } //end method


    public function update(RestoranUpdateRequest $request)

    {


        $user = Auth::user();
        $restoran = Restoran::where('user_id', $user->id)->first();


        $data = $request->validated();
        $restoran->fill($data);
        $restoran->save();

        $notification = array(
            'message' => 'Restoran Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('restoran')->with($notification);
    } //end method


    public function customerall()
    {
        $restoran = Restoran::all();

        return view('restoran.customer', compact('restoran'));
    } //end method

}
