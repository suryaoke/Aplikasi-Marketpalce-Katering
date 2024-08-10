@extends('admin.admin_master')
@section('admin')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> <!-- Include jQuery Validation plugin -->

    <div class="intro-y flex items-center mt-8 mb-4">
        <h1 class="text-lg font-medium mr-auto">
            Add Menu
        </h1>
    </div>

    <form method="post" action="{{ route('menu.store') }}" enctype="multipart/form-data" id="myForm">
        @csrf

        <div class="mt-3">
            <label>Nama</label>
            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-1" placeholder="Masukkan Nama"
                name="nama">
        </div>
        <div class="mt-3">
            <label>Deskripsi</label>
            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-1"
                placeholder="Masukkan Deskripsi" name="deskripsi">
        </div>
        <div class="mt-3">
            <label>Harga</label>
            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-1"
                placeholder="Masukkan Harga" name="harga" pattern="[0-9]+" title="Please enter only numbers" required>
        </div>

        <div class="mt-3">
            <label for="regular-form-1" class="form-control">Jenis</label>
            <select name="jenis" data-placeholder="Select Role" class="tom-select w-full  mt-2 ">

                <option value="1">Makanan</option>
                <option value="2">Minuman</option>

            </select>
        </div>

        <div class="mt-3 flex">
            <label for="regular-form-1" class="mr-2">Foto Makanan</label> <input name="foto" type="file"
                id="image">
        </div>

        <div class="mt-3 flex ">
            <img width="130px auto" id="showImage" alt="">

        </div>

        <div class="mt-4">
            <a href="{{ route('menu') }}" class="btn btn-danger h-10 w-full xl:w-32 xl:mr-2 align-top">Cancel</a>
            <button class="btn btn-primary  h-10 w-full xl:w-32 xl:mr-3 align-top" type="submit">Save</button>

        </div>

    </form>





    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
