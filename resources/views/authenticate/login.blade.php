<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Si Perdi APP</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{ asset('assets/images/favicon.png') }}"
    />
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="bg-dark">
    <div class="container-fluid">
        <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
            <div id="loginform">
                <div class="text-center pt-3 pb-3">
                <span class="db"
                    ><img src="/assets/images/logo-icon.png" alt="logo" width="100"
                /></span>
                </div>
                <!-- Form -->
                <form
                class="form-horizontal mt-3"
                id="loginform"
                action="{{ route('login') }}"
                method="post"
                >
                @csrf
                <div class="row pb-4">
                    <div class="col-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span
                            class="input-group-text bg-danger text-white h-100"
                            id="username"
                            for="username"
                            ><i class="mdi mdi-account fs-4"></i
                        ></span>
                        </div>
                        <input
                        type="text"
                        class="form-control form-control-lg @error('username')
                            is-invalid
                        @enderror"
                        placeholder="Username"
                        id="username"
                        name="username"
                        value="{{ old('username') }}"
                        required
                        />
                        @error('username')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span
                            class="input-group-text bg-warning text-white h-100"
                            id="password"
                            for="password"
                            ><i class="mdi mdi-lock fs-4"></i
                        ></span>
                        </div>
                        <input
                        type="password"
                        class="form-control form-control-lg @error('password')
                            is-invalid
                        @enderror"
                        placeholder="Password"
                        id="password"
                        name="password"
                        required
                        />
                        @error('password')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    </div>
                </div>
                <div class="row border-top border-secondary">
                    <div class="col-12">
                    <div class="form-group">
                        <div class="pt-3 d-grid">
                        <button
                            class="btn btn-block btn-lg btn-success"
                            type="submit"
                        >
                            {{ __('Login') }}
                        </button>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-2">
                            <span class="text-white mx-2 h6"> Do you have an account?
                            <a href="{{ route('register') }}" class="text-white btn ms-1"><i class="mdi mdi-account-multiple-plus"></i>Register</a>
                            </span>
                        </div>
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
      $(".preloader").fadeOut();
      // ==============================================================
      // Login and Recover Password
      // ==============================================================
      $("#to-recover").on("click", function () {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
      });
      $("#to-login").click(function () {
        $("#recoverform").hide();
        $("#loginform").fadeIn();
      });
    </script>
  </body>
</html>
