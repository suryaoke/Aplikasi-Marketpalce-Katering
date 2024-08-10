@php
    $url = url()->current();
    $dashboard = URL::route('dashboard');

    $adminprofile = URL::route('admin.profile');
    $editprofile = URL::route('edit.profile');
    $change = URL::route('change.password');

    $restoran = URL::route('restoran');
@endphp


<nav class="side-nav">
    <a href="{{ route('dashboard') }}" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone - HTML Admin Template" class="w-16" src="{{ asset('backend/dist/images/man1_copy.png') }}">
        <span class="hidden xl:block text-white text-lg ml-3">MAN 1 Kota Padang</span>
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
                    @elseif ($restoran == $url)
                        <a href="{{ route('grestoran') }}"class="side-menu side-menu--active">
                        @elseif ($restoran == $url)
                            <a href="{{ route('restoran') }}"class="side-menu side-menu--active">
                            @else
                                <a href="{{ route('restoran') }}" class="side-menu ">
                @endif
                <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="side-menu__title">
                    restoran
                </div>
                </a>

            </li>
        @endif

    </ul>

</nav>
