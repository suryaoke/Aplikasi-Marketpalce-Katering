<?php

namespace App\Http\Controllers;

use App\Http\Requests\PesananCreateRequest;
use App\Models\pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{


    public function store(PesananCreateRequest $request)

    {
        $user = Auth::user();

        $data = $request->validated();

        $pesanan = new pesanan($data);
        $pesanan->customer_id = $user->id;
        $pesanan->save();

        $notification = array(
            'message' => 'Pesanan Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //end method


    public function pesanan()

    {
        $user = Auth::user();



        $pesanan = Pesanan::all();

        return view('menu.index', compact('pesanan'));
    } //end method

}
