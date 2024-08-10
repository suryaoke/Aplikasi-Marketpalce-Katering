@extends('admin.admin_master')
@section('admin')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-1">
                    <di class="ml-1 mb-2 intro-y flex items-center justify-between">
                        <h2 class="  text-primary">
                            <span class="text-4xl "> Selamat Datang </span>
                            <br>

                        </h2>
                    </di>
                    <div class="intro-y alert alert-danger show mb-2 " role="alert">
                        <span>
                            Silahkan gunakan aplikasi dengan sebaik-baiknya, dan jaga kerahasiaan email, username, dan
                            password Anda..!!!
                        </span>
                    </div>


                    <div class="grid grid-cols-12 gap-6 mt-3">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-8">
                                    <div class="flex">
                                        <i data-lucide="menu" class="report-box__icon text-pending"></i>

                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"></div>
                                    <div class="text-base text-slate-500 mt-1">Menu </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-8">
                                    <div class="flex">
                                        <i data-lucide="users" class="report-box__icon text-pending"></i>

                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"></div>
                                    <div class="text-base text-slate-500 mt-1">Pesanan Belum di proses</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-8">
                                    <div class="flex">
                                        <i data-lucide="users" class="report-box__icon text-pending"></i>

                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"></div>
                                    <div class="text-base text-slate-500 mt-1">Pesanan Selesai </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
                <!-- END: General Report -->

            </div>
        </div>

    </div>
    </span>
@endsection
