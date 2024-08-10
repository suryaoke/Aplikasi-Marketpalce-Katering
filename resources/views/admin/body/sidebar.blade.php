@php

    $id = Request::route('id');

    $url = url()->current();
    $dashboard = URL::route('dashboard');

    $adminprofile = URL::route('admin.profile');
    $editprofile = URL::route('edit.profile');
    $change = URL::route('change.password');

    $restoran = URL::route('restoran');
    $restoranadd = URL::route('restoran.add');
    $menu = URL::route('menu');
    $menuadd = URL::route('menu.add');

    $customer = URL::route('customer');

    if ($id !== null) {
        $restoranedit = URL::route('restoran.edit', ['id' => $id]);
        $menuedit = URL::route('menu.edit', ['id' => $id]);
        $customermenu = URL::route('menu.customer', ['id' => $id]);
    } else {
        $menuedit = 1;
        $restoranedit = 1;
        $customermenu = 1;
    }
@endphp


<nav class="side-nav">
    <a href="{{ route('dashboard') }}" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone - HTML Admin Template" class="w-16" src="{{ asset('backend/dist/images/logo-k.png') }}">
        <span class="hidden xl:block text-white text-lg ml-2">Marketplace Catering</span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            @if ($url == $dashboard)
                <a href="{{ route('dashboard') }}" class="side-menu  side-menu--active">
                @elseif ($adminprofile == $url)
                    <a href="{{ route('dashboard') }}" class="side-menu side-menu--active">
                    @elseif ($editprofile == $url)
                        <a href="{{ route('dashboard') }}" class="side-menu side-menu--active">
                        @elseif ($change == $url)
                            <a href="{{ route('dashboard') }}" class="side-menu side-menu--active">
                            @else
                                <a href="{{ route('dashboard') }}" class="side-menu ">
            @endif
            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
            <div class="side-menu__title">
                Dashboard
            </div>
            </a>

        </li>
        @if (Auth::user()->role == '1')


            <li>
                @if ($url == $restoran)
                    <a href="{{ route('restoran') }}" class="side-menu  side-menu--active">
                    @elseif ($restoranadd == $url)
                        <a href="{{ route('restoran') }}"class="side-menu side-menu--active">
                        @elseif ($restoranedit == $url)
                            <a href="{{ route('restoran') }}"class="side-menu side-menu--active">
                            @else
                                <a href="{{ route('restoran') }}" class="side-menu ">
                @endif
                <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="side-menu__title">
                    Restoran
                </div>
                </a>

            </li>
            <li>
                @if ($url == $menu)
                    <a href="{{ route('menu') }}" class="side-menu  side-menu--active">
                    @elseif ($menuadd == $url)
                        <a href="{{ route('menu') }}"class="side-menu side-menu--active">
                        @elseif ($menuedit == $url)
                            <a href="{{ route('menu') }}"class="side-menu side-menu--active">
                            @else
                                <a href="{{ route('menu') }}" class="side-menu ">
                @endif
                <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="side-menu__title">
                    Menu
                </div>
                </a>

            </li>
        @endif

        @if (Auth::user()->role == '2')


            <li>
                @if ($url == $customer)
                    <a href="{{ route('customer') }}" class="side-menu  side-menu--active">
                    @elseif ($url == $customermenu)
                        <a href="{{ route('customer') }}" class="side-menu  side-menu--active">
                        @else
                            <a href="{{ route('customer') }}" class="side-menu ">
                @endif
                <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="side-menu__title">
                    Restoran
                </div>
                </a>

            </li>
            <li>
                @if ($url == $menu)
                    <a href="{{ route('menu') }}" class="side-menu  side-menu--active">
                    @elseif ($menuadd == $url)
                        <a href="{{ route('menu') }}"class="side-menu side-menu--active">
                        @elseif ($menuedit == $url)
                            <a href="{{ route('menu') }}"class="side-menu side-menu--active">
                            @else
                                <a href="{{ route('menu') }}" class="side-menu ">
                @endif
                <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="side-menu__title">
                    Pesanan
                </div>
                </a>

            </li>
        @endif

    </ul>

</nav>
