<!DOCTYPE html>

<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="{{ asset('backend/dist/images/logo-k.png') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Register</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/app.css') }}" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="{{ url('/') }}" class="-intro-x flex items-center pt-5">
                    <img alt="Midone - HTML Admin Template" class="w-40"
                        src="{{ asset('backend/dist/images/logo-k.png') }}">
                    <span class="text-white text-2xl ml-3 "> Marketplace Katering </span>
                </a>
                <div class="my-auto ">
                    <img width="370px" alt="Midone - HTML Admin Template" class="-intro-x -mt-16"
                        src="{{ asset('backend/dist/images/landing.png') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        Marketplace Katering
                    </div>

                </div>
            </div>
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->

            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        Register
                    </h2>

                    <div class="intro-x mt-8">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input type="text" class="intro-x login__input form-control py-3 px-4 block"
                                placeholder=" Name" name="name" id="name">
                            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4"
                                placeholder="UserName" name="username" id="username">
                            <input type="email" class="intro-x login__input form-control py-3 px-4 block mt-4"
                                placeholder="Email" name="email" id="email">
                            <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4"
                                placeholder="Password" name="password" id="password">
                            <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4"
                                placeholder="Password" name="password_confirmation" id="password_confirmation">
                            <div class="intro-x mt-4">

                                <select name="role" id="role"
                                    class="intro-x login__input form-control py-3 px-4 block">
                                    <option value="">Role</option>
                                    <option value="1">Merchant</option>
                                    <option value="2">Customer</option>

                                </select>
                            </div>


                    </div>

                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top"
                            type="submit">Register</button>

                        <a class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top"
                            href="{{ route('login') }}">
                            Sign in</a>
                    </div>
                </div>
                </form>
            </div>

            <!-- END: Register Form -->
        </div>
    </div>


    <!-- BEGIN: JS Assets-->
    <script src="{{ asset('backend/dist/images/illustration.svg') }}dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>

</html>
