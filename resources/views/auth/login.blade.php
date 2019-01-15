<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Serein Premium Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('serein/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('serein/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('serein/vendors/css/vendor.bundle.addons.css') }}">
  <link rel="stylesheet" href="{{ asset('serein/css/horizontal-layout/style.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('serein/css/horizontal-layout/style.js') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('serein/images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="main-panel">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                  <img src="{{ asset('serein/images/logo.svg') }}" alt="logo">
                </div>
                <h4>Selamat Datang Dihalaman Admin Login Page!</h4>
                <h6 class="font-weight-light">Masuk Untuk Lanjut.</h6>
                <form class="pt-3">
                  <div class="form-group">
                                <input id="email" type="email" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Username" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        
                  </div>
                  <div class="form-group">
                                <input id="password" type="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                  <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        Biarkan Saya Tetap login
                      </label>
                    </div>

                    <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <center>{{ __('Lupa Password?') }}<center>
                                </a>
                  </div>
                  <div class="mb-2">
                    
                  </div>
                  <div class="text-center mt-4 font-weight-light">
                    Don't have an account? <a href="register.html" class="text-primary">Create</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('serein/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('serein/vendors/js/vendor.bundle.addons.js') }}"></script>
  <script src="{{ asset('serein/js/off-canvas.js') }}"></script>
  <script src="{{ asset('serein/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('serein/js/template.js') }}"></script>
  <script src="{{ asset('serein/js/settings.js') }}"></script>
  <script src="{{ asset('serein/js/todolist.js') }}"></script>
  <script src="{{ asset('serein/js/dashboard.js') }}"></script>
  <script src="{{ asset('serein/js/todolist.js') }}"></script>
  <script src="{{ asset('serein/js/modal-demo.js') }}"></script>
  <script src="{{ asset('serein/js/file-upload.js') }}"></script>
  <script src="{{ asset('serein/js/typeahead.js') }}"></script>
  <script src="{{ asset('serein/js/select2.js') }}"></script>
  <script src="{{ asset('serein/js/data-table.js') }}"></script>
  <script src="{{ asset('serein/js/alerts.js') }}"></script>
  <script src="{{ asset('serein/js/avgrund.js') }}"></script>
</body>

</html>