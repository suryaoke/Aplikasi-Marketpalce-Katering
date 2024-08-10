<!DOCTYPE html>

<html lang="en" class="light">
<!-- BEGIN: Head -->


<head>
    <meta charset="utf-8">
    <link href="{{ asset('backend/dist/images/logo-rm.png') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Login - Marketplace Katering</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/app.css') }}" />
    <!-- END: CSS Assets-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>
<!-- END: Head -->

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
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
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->

            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        Login
                    </h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="intro-x mt-8">
                            <input type="text" id="username" name="username"
                                class="intro-x login__input form-control py-3 px-4 block" placeholder="Username">
                            <input id="password" name="password" type="password"
                                class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
                        </div>
                        <div class="mt-4  intro-x  text-primary">
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                        <div class="intro-x mt-4 text-center xl:text-left">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top"
                                type="submit">Login</button>
                            <div class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top dropdown inline-block"
                                data-tw-placement="bottom"> <a href="{{route('register')}}"
                                    data-tw-toggle="dropdown">Register</a>
                                
                            </div>
                        </div>
                    </form>
                    <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left">
                    </div>
                </div>
            </div>
            <!-- END: Login Form -->

        </div>
    </div>


    <!-- BEGIN: JS Assets-->
    <script src="{{ asset('backend/dist/js/app.js') }}"></script>
    <!-- END: JS Assets-->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>


    <script type="text/javascript">
        jQuery(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    kode_mapel: {
                        required: true,
                    },
                    nama: {
                        required: true,
                    },



                },
                messages: {
                    kode_mapel: {
                        required: 'Please Enter Your Username',
                    },
                    nama: {
                        required: 'Please Enter Your Password',
                    },

                },
                errorElement: 'span',
                errorClass: 'invalid-feedback',
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>

</body>

</html>
