@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="intro-y flex items-center mt-8 mb-4">
        <h1 class="text-lg font-medium mr-auto">
            Edit Profile
        </h1>
    </div>

    <form method="post" action="{{ route('store.profile') }}" enctype="multipart/form-data">
        @csrf

        <div> <label for="regular-form-1" class="form-label">Name</label> <input name="name" id="regular-form-1"
                type="text" class="form-control" value="{{ $editData->name }}"> </div>
        <div class="mt-3"> <label for="regular-form-1" class="form-label">Email</label> <input name="email"
                id="regular-form-1" type="text" class="form-control" value="{{ $editData->email }}"> </div>
        <div class="mt-3"> <label for="regular-form-1" class="form-label">Username</label> <input name="username"
                id="regular-form-1" type="text" class="form-control" value="{{ $editData->username }}"> </div>




        <div class="mt-8">
            <a href="{{ route('admin.profile') }}" class="btn btn-danger w-full h-10 xl:w-32 xl:mr-2 align-top"
                type="submit">Cancel</a>
            <button class="btn btn-primary  w-full  h-10 xl:w-32 xl:mr-3 align-top" type="submit">Save </button>

        </div>
    </form>
@endsection
