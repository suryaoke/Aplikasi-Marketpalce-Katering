@extends('admin.admin_master')
@section('admin')
    <div class="intro-y flex items-center mt-8 mb-4">
        <h1 class="text-lg font-medium mr-auto">
            Edit Profile Restoran
        </h1>
    </div>

    <form method="post" action="{{ route('restoran.update') }}" enctype="multipart/form-data" id="myForm">
        @csrf

        <input type="hidden" name="id" value="{{ $restoran->id }}">
        <div class="mt-3">
            <label>Nama</label>
            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-1" placeholder="Masukkan Nama"
                name="nama" value="{{ $restoran->nama }}">
        </div>
        <div class="mt-3">
            <label>Alamat</label>
            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-1"
                placeholder="Masukkan Alamat" name="alamat" value="{{ $restoran->alamat }}">
        </div>

        <div class="mt-3">
            <label>No Hp</label>
            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-1"
                placeholder="Masukkan No HP" name="kontak" pattern="[0-9]+" title="Please enter only numbers"
                value="{{ $restoran->kontak }}">
        </div>

        <div class="mt-3">
            <label>Deskripsi</label>
            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-1"
                placeholder="Masukkan Deskripsi" name="deskripsi" value="{{ $restoran->deskripsi }}">
        </div>





        <div class="mt-4">
            <a href="{{ route('restoran') }}" class="btn btn-danger h-10 w-full xl:w-32 xl:mr-2 align-top">Cancel</a>
            <button class="btn btn-primary  h-10 w-full xl:w-32 xl:mr-3 align-top" type="submit">Save</button>
        </div>
    </form>
@endsection
