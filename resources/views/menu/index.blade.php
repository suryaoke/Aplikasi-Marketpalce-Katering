@extends('admin.admin_master')
@section('admin')
    <div class="mb-3 intro-y flex flex-col sm:flex-row items-center mt-8">
        <h1 class="text-lg font-medium mr-auto">
            Data Menu All
        </h1>
    </div>
    <div class="mb-4 intro-y flex flex-col sm:flex-row items-center mt-4">
        @if (Auth::user()->role == '1')
            <form role="form" action="{{ route('menu') }}" method="get" class="sm:flex">


                <div class="flex-1 sm:mr-2">
                    <div class="form-group">
                        <input type="text" name="searchnama" class="form-control" placeholder="Nama"
                            value="{{ request('searchnama') }}">

                    </div>
                </div>


                <div class="flex-1 sm:mr-2">
                    <div class="form-group">

                        <select name="searchjenis" class="form-select w-full">
                            <option value="">Jenis</option>

                            <option value="1">Makanan </option>
                            <option value="2">Minuman </option>

                        </select>
                    </div>
                </div>

                <div class="sm:ml-1">
                    <button type="submit" class="btn btn-default">Search</button>
                </div>
                <div class="sm:ml-2">

                    <a href="{{ route('menu') }}" class="btn btn-danger">Clear</a>

                </div>
            </form>
        @endif
        @if (Auth::user()->role == '2')
            <form role="form" action="{{ route('menu.customer', $id) }}" method="get" class="sm:flex">


                <div class="flex-1 sm:mr-2">
                    <div class="form-group">
                        <input type="text" name="searchnama" class="form-control" placeholder="Nama"
                            value="{{ request('searchnama') }}">

                    </div>
                </div>


                <div class="flex-1 sm:mr-2">
                    <div class="form-group">

                        <select name="searchjenis" class="form-select w-full">
                            <option value="">Jenis</option>

                            <option value="1">Makanan </option>
                            <option value="2">Minuman </option>

                        </select>
                    </div>
                </div>

                <div class="sm:ml-1">
                    <button type="submit" class="btn btn-default">Search</button>
                </div>
                <div class="sm:ml-2">

                    <a href="{{ route('menu.customer', $id) }}" class="btn btn-danger">Clear</a>

                </div>
            </form>
    </div>
    @endif
    @if (Auth::user()->role == '1')
        <div class="col-span-2 mb-4 mt-4">

            <a href="{{ route('menu.add') }}" class="btn btn-primary btn-block"> <span
                    class="glyphicon glyphicon-download"></span> </span> <i data-lucide="plus-square"
                    class="w-5 h-5"></i>&nbsp;Create</a>

        </div>
    @endif
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card overflow-x-auto">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">No</th>
                                        <th class="whitespace-nowrap">Nama</th>
                                        <th class="whitespace-nowrap">Deskripsi</th>
                                        <th class="whitespace-nowrap">Foto</th>
                                        <th class="whitespace-nowrap">Jenis</th>
                                        <th class="whitespace-nowrap">Harga</th>
                                        <th class="whitespace-nowrap">Action</th>

                                </thead>
                                <tbody>

                                    @foreach ($menu as $key => $item)
                                        <tr>
                                            <td class="whitespace-nowrap"> {{ $key + 1 }} </td>
                                            <td class="whitespace-nowrap"> {{ $item->nama }} </td>
                                            <td class="whitespace-nowrap"> {{ $item->deskripsi }} </td>
                                            <td class="whitespace-nowrap">
                                                <img style="max-width:70px; max-height:100px"
                                                    src=" {{ !empty($item->foto) ? url('uploads/' . $item->foto) : url('backend/dist/images/profile-user.png') }}"
                                                    alt="">
                                            </td>
                                            <td class="whitespace-nowrap">

                                                @if ($item->jenis == 1)
                                                    Makanan
                                                @elseif ($item->jenis == 2)
                                                    Minuman
                                                @endif
                                            </td>
                                            <td class="whitespace-nowrap">Rp.{{ $item->harga }} </td>

                                            @if (Auth::user()->role == '1')
                                                <td class="whitespace-nowrap">
                                                    <a id="delete" href="{{ route('menu.delete', $item->id) }}"
                                                        class="btn btn-danger mr-1 mb-2">
                                                        <i data-lucide="trash" class="w-4 h-4"></i> </a>
                                                    <a href="{{ route('menu.edit', $item->id) }}"
                                                        class="btn btn-success mr-1 mb-2">
                                                        <i data-lucide="edit" class="w-4 h-4"></i>
                                                    </a>
                                                </td>
                                            @endif

                                            @if (Auth::user()->role == '2')
                                                <td class="whitespace-nowrap">
                                                    <form method="post" action="{{ route('pesan.store') }}"
                                                        enctype="multipart/form-data" id="myForm">
                                                        @csrf

                                                        <input type="hidden" name="menu_id" value="1">
                                                        <input type="hidden" name="status" value="2">



                                                        <div>
                                                            <input type="text" name="total"
                                                                class="form-control w-20" placeholder="Total" required>
                                                        </div>
                                                        <div class="mb-2">
                                                            <button
                                                                class="btn btn-primary  h-10 w-full xl:w-32 xl:mr-3 align-top"
                                                                type="submit">Save</button>
                                                        </div>

                                                    </form>


                                                </td>
                                            @endif




                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
