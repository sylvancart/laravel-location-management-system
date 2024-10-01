<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        
       
        <link rel="icon" href="{{ asset('admin/images/favicon.ico') }}" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        <!-- Icons Css -->
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
        <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('toastr/toastr.css') }}">
        <link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('admin/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin/libs/spectrum-colorpicker2/spectrum.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin/libs/spectrum-colorpicker2/spectrum.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('admin/libs/%40chenfengyuan/datepicker/datepicker.min.css') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

        <link href="{{ asset('admin/css/main.css') }}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="{{ asset('admin/css/jquery.dataTables.css') }}" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

    </head>
    <body data-sidebar="dark">


        <div id="layout-wrapper">
            @include('backend.layouts.inc.admin.header')
            @include('backend.layouts.inc.admin.sidebar')
            <div class="main-content">
                @yield('content')
            </div>
            @include('backend.layouts.inc.admin.footer')
        </div>




        <!-- JAVASCRIPT -->
        <script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('admin/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

        <!-- dashboard init -->
        <script src="{{ asset('admin/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('admin/js/app.js') }}"></script>

        <script src="{{ asset('admin/js/script.js') }}"></script>

        <script src="{{ asset('toastr/toastr.min.js') }}"></script>
        <script src="{{ asset('admin/libs/spectrum-colorpicker2/spectrum.min.js') }}"></script>
        <script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('admin/libs/dropzone/min/dropzone.min.js') }}"></script>

        <script src="{{ asset('js/main.js') }}"></script>

        <script>

            if ("{{ !empty(session('success')) }}") {
        
                successMsg("{{ session('success') }}")
        
            }
        
            if ("{{ !empty(session('error')) }}") {
        
                errorMsg("{{ session('error') }}")
        
            }
        
        </script>
        
        {{-- jquery data tables --}}
        <script src="{{ asset('admin/js/jquery.dataTables.js') }}"></script>
    </body>
</html>
        