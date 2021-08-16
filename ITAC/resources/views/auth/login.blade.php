<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="offset-md-3 col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center">Login Form</h4>
                                <p class="card-description" style="text-align: center">Login form layout</p>
                                @if (Session::has('error_message'))
                                    <div class="text-danger my-3">{!! Session('error_message') !!}</div>
                                @endif

                                <form class="forms-sample" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Email</label>
                                        <div>
                                            <input type="email" class="form-control" id="exampleInputEmail2"
                                                placeholder="Email" name="email" />
                                        </div>
                                        @error('email')
                                            <div class="text-danger my-3">{{ $message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group ">
                                        <label for="exampleInputPassword2">Password</label>
                                        <div>
                                            <input type="password" class="form-control" id="exampleInputPassword2"
                                                placeholder="Password" name="password" />
                                        </div>
                                        @error('password')
                                            <div class="text-danger my-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-4 btn-block"> Login </button>
                                    <div class="register-side mt-3" style="text-align: center">
                                        <p>Don't you have an account?
                                            <a href="/register">Register</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
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
</body>

</html>
