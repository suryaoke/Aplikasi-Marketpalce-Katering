@extends('admin.admin_master')
@section('admin')
    <div class="mb-3 intro-y flex flex-col sm:flex-row items-center mt-8">
        <h1 class="text-lg font-medium mr-auto">
            Profile Restoran
        </h1>
    </div>

    <div class="col-span-2 mb-4 mt-4">


        <a href="{{ route('restoran.edit', $restoran->id) }}" class="btn btn-warning btn-block"> <span
                class="glyphicon glyphicon-download"></span> </span> <i data-lucide="edit" class="w-5 h-5"></i>&nbsp;Edit</a>



        <a href="{{ route('restoran.add') }}" class="btn btn-primary btn-block"> <span
                class="glyphicon glyphicon-download"></span> </span> <i data-lucide="plus-square"
                class="w-5 h-5"></i>&nbsp;Create</a>


    </div>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card overflow-x-auto">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">Nama</th>
                                        <th class="whitespace-nowrap">Alamat</th>
                                        <th class="whitespace-nowrap">Kontak</th>
                                        <th class="whitespace-nowrap">Deskripsi</th>
                                        <th class="whitespace-nowrap">Owner</th>

                                </thead>
                                <tbody>


                                    <tr>

                                        <td style="white-space: nowrap;" style="text-transform: capitalize;">
                                            {{ $restoran->nama }}
                                        </td>
                                        <td class="whitespace-nowrap" style="text-transform: capitalize;">
                                            {{ $restoran->alamat }} </td>
                                        <td class="whitespace-nowrap"> {{ $restoran->kontak }} </td>
                                        <td class="whitespace-nowrap"> {{ $restoran->deskripsi }} </td>
                                        <td class="whitespace-nowrap"> {{ $restoran->user->name }} </td>



                                    </tr>


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
