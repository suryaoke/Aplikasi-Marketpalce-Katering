@extends('admin.admin_master')
@section('admin')
    <div class="grid grid-cols-12 gap-6 mt-5">


        @foreach ($restoran as $item)
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                <div class="box">
                    <div class="p-5">
                        <div
                            class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                            <img alt="Midone - HTML Admin Template" class="rounded-md"
                                src=" {{ url('backend/dist/images/logo-k.png') }}">
                            <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> <a href=""
                                    class="block font-medium text-base"> </a>
                                <span class="text-white/90 text-xs mt-3">{{ $item->nama }}</span>
                            </div>
                        </div>
                        <div class="text-slate-600 dark:text-slate-500 mt-5">
                            <div class="flex items-center"> <i data-lucide="home" class="w-4 h-4 mr-2"></i>
                                Alamat : {{ $item->alamat }} </div>
                            <div class="flex items-center mt-2"> <i data-lucide="users" class="w-4 h-4 mr-2"></i>
                                Kontak : {{ $item->kontak }} </div>
                            <div class="flex items-center mt-2"> <i data-lucide="file" class="w-4 h-4 mr-2"></i>
                                {{ $item->deskripsi }}
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                        <a class="flex items-center text-primary mr-auto" href="{{ route('menu.customer', $item->id) }}"> <i
                                data-lucide="eye" class="w-4 h-4 mr-1"></i> Menu </a>

                    </div>
                </div>
            </div>
        @endforeach


    </div>
@endsection
