<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />
    @yield('css')
</head>

<body>

    <div class="container-scroller">
        @include('admin.layouts.sidebar')
        <div class="page-body-wrapper container-fluid">
            @include('admin.layouts.header')
            <div class="main-panel">
                <div class="content-wrapper pb-0">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    <!-- plugins:js -->
    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/flot/jquery.flot.pie.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
    <script src="{{ asset('admin/assets/js/file-upload.js') }}"></script>

    <script src="{{ asset('admin/assets/js/select2.js') }}"></script>

    {{-- Ckeditor Start --}}
    @yield('ckeditor')
    @yield('validation')
    {{-- CKeditor End --}}

</body>

</html>
