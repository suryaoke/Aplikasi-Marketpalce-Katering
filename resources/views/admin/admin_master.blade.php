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
    <title>Marketplace Catering</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/app.css') }}">
    <!-- END: CSS Assets-->

    <!-- jquery.vectormap css -->
    <link href="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{ asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

</head>
<!-- END: Head -->


<body class="py-5">
 
    <!-- END: Mobile Menu -->
    <div class="flex mt-[4.7rem] md:mt-0">
        <!-- BEGIN: Side Menu -->

        @include('admin.body.sidebar')

        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            <!-- BEGIN: Top Bar -->
            @include('admin.body.header')
            <!-- END: Top Bar -->
            @yield('admin')
        </div>

        <!-- END: Content -->
    </div>




    <!-- BEGIN: JS Assets-->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
    <script src="  {{ asset('backend/dist/js/app.js') }} "></script>

    <!-- END: JS Assets-->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
    </script>
    <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}">
    </script>

    <!-- Required datatable js -->
    <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    </script>



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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>


    <!-- Required datatable js -->
    <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>

    <script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="{{ asset('backend/assets/js/code.js') }}"></script>

    <script src="{{ asset('backend/assets/js/handlebars.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>


    <script>
        $('#gen_view').attr("src", res.path);
    </script>


   
  

    {{--  // script ttd signature //  --}}


    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/signature/jquery.signature/css/jquery.signature.css') }}">
    <script src="{{ asset('backend/signature/signature/jSignature-master/libs/jSignature.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // var wrapper = document.getElementById("signature");
            // var canvas = wrapper.querySelector("canvas");

            // var parentWidth = $(canvas).parent().outerWidth();
            // Initialize jSignature
            var $sigdiv = $("#signature").jSignature({
                'UndoButton': true,
                lineWidth: 5,
                // width: 500,
                // width: "ratio",
                autoFit: true,
                height: 102,
            });

            $('#click').click(function() {
                // Get response of type image
                var data = $sigdiv.jSignature('getData', 'image');

                // Storing in textarea
                $('#output').val(data);

                // ketika button cek
                $('#tombol-simpan').show();
                $('#tombol-cek').hide();
                // menampilkan data image 
                $('#sign_prev').attr('src', "data:" + data);
                $('#sign_prev').show();
            });

            $("#signature").bind('change', function(e) {
                $('#tombol-simpan').hide();
                $('#tombol-cek').show();
            });
        });
    </script>
