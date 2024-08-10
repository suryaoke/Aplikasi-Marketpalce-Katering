<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuCreateRequest;
use App\Http\Requests\MenuUpdateRequest;
use App\Models\menu;
use App\Models\Restoran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use League\CommonMark\Extension\Mention\Mention;

class MenuController extends Controller
{

    public function all(Request $request)
    {


        $searchNama = $request->input('searchnama');
        $searchJenis = $request->input('searchjenis');

        $query = Menu::query();
        if (!empty($searchNama)) {
            $query->where('nama', '=', $searchNama);
        }
        if (!empty($searchJenis)) {
            $query->where('jenis', '=', $searchJenis);
        }


        $user = Auth::user();

        $restoran = Restoran::where('user_id', $user->id)->first();

        if (!$restoran) {
        }
        $menu = $query->where('perusahaan_id', $restoran->id)->get();


        return view('menu.index', compact('menu'));
    }
    //end method

    public function add()
    {
        return view('menu.create');
    } //end method

    public function create(MenuCreateRequest $request)

    {

        $data = $request->validated();

        $user = Auth::user();
        $restoran = Restoran::where('user_id', $user->id)->first();

        if (!$restoran) {
        }
        $filePath  = public_path('uploads');
        $menu = new Menu($data);
        $menu->perusahaan_id = $restoran->id;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);
            $menu->foto = $file_name;
        }


        $menu->save();

        $notification = array(
            'message' => 'Menu Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('menu')->with($notification);
    } //end method


    public function edit($id)
    {

        $user = Auth::user();

        $restoran = Restoran::where('user_id', $user->id)->first();
        $menu = Menu::where('id', $id)->where('perusahaan_id', $restoran->id)->first();


        return view('menu.edit', compact('menu'));
    } //end method


    public function update(MenuUpdateRequest $request)
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Temukan restoran yang sesuai dengan user id
        $restoran = Restoran::where('user_id', $user->id)->first();

        if (!$restoran) {
            return redirect()->route('menu')->withErrors('Restoran tidak ditemukan.');
        }

        // Temukan menu yang sesuai dengan id dan restoran id
        $menu = Menu::where('id', $request->id)
            ->where('perusahaan_id', $restoran->id)
            ->first();

        if (!$menu) {
            return redirect()->route('menu')->withErrors('Menu tidak ditemukan.');
        }

        $data = $request->validated();
        $menu->fill($data);
        // Jika ada file foto yang diupload
        if ($request->hasFile('foto')) {
            // Tentukan direktori upload dan nama file
            $filePath = public_path('uploads');
            $file = $request->file('foto');
            $file_name = time() . '-' . $file->getClientOriginalName(); // Tambahkan pemisah untuk kejelasan
            $file->move($filePath, $file_name);

            // Update foto menu
            $menu->foto = $file_name;
        }

        $menu->save();

        // Kirim notifikasi sukses
        $notification = [
            'message' => 'Menu Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('menu')->with($notification);
    } // end method


    public function delete($id)

    {

        $menu = Menu::findOrFail($id);
        $menu->delete();


        $notification = array(
            'message' => 'Menu Deleted Successfully',
            'alert-type' => 'success'
        );


        return redirect()->back()->with($notification);
    }

    public function menucostumer(Request $request, $id)
    {
        $searchNama = $request->input('searchnama');
        $searchJenis = $request->input('searchjenis');

        $query = Menu::query();
        if (!empty($searchNama)) {
            $query->where('nama', '=', $searchNama);
        }
        if (!empty($searchJenis)) {
            $query->where('jenis', '=', $searchJenis);
        }



        $restoran = Restoran::findOrFail($id);

        if (!$restoran) {
        }
        $menu = $query->where('perusahaan_id', $restoran->id)->get();
        
        return view('menu.index', compact('menu', 'id'));
    }
}
