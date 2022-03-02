
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">

     <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/dropzone/min/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/flatpickr/flatpickr.min.css')}}">
    <!-- END Stylesheets -->
  </head>
  <body>
    <!-- Page Container -->
    <div id="page-container" class="main-content-boxed">

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo34@2x.jpg');">
          <div class="row mx-0 bg-earth-op">
            <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
              <div class="p-30 invisible" data-toggle="appear">
                <p class="font-size-h3 font-w600 text-white mb-5">
                  We're very happy you are joining our community!
                </p>
                <p class="font-size-h5 text-white">
                  <i class="fa fa-angles-right"></i> Create your account today and receive 50% off.
                </p>
                <p class="font-italic text-white-op">
                  Copyright &copy; <span class="js-year-copy"></span>
                </p>
              </div>
            </div>
            <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white">
              <div class="content content-full">
                <!-- Header -->
                <div class="px-30 py-10">
                  <a class="link-effect font-w700" href="index.html">
                    <i class="si si-fire"></i>
                    <span class="font-size-xl text-primary-dark">code</span><span class="font-size-xl">base</span>
                  </a>
                  <h1 class="h3 font-w700 mt-30 mb-10">Create New Account</h1>
                  <h2 class="h5 font-w400 text-muted mb-0">Please add your details</h2>
                </div>
                <!-- END Header -->

                <!-- Sign Up Form -->
                <form action="/register" method="post" class="js-validation-signup px-30">
                    @csrf
                  <div class="form-group row">
                    <div class="col-12">
                      <div class="form-material floating">
                        <input type="text"  id="nip" name="nip" value="{{old('nip')}}" onkeypress="return hanyaAngka(event)" maxlength="18" data-always-show="true" data-pre-text="Used " data-separator=" of " data-post-text=" characters" class="form-control @error('nip') is-invalid @enderror">
                        <label for="nip">NIP</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-12">
                      <div class="form-material floating">
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                        <label for="name">Nama</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-12">
                      <div class="form-material floating">
                        <input type="text" class="form-control" id="instansi" name="instansi" value="{{old('instansi')}}">
                        <label for="instansi">Nama</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-12">
                      <div class="form-material floating">
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                        <label for="email">Email</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-12">
                      <div class="form-material floating">
                        <input type="password" class="form-control" id="password" name="password">
                        <label for="password">Password</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-hero btn-alt-success">
                      <i class="fa fa-plus mr-10"></i> Create Account
                    </button>
                    <div class="mt-30">
                      <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#" data-toggle="modal" data-target="#modal-terms">
                        <i class="fa fa-book text-muted mr-5"></i> Read Terms
                      </a>
                      <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="/login">
                        <i class="fa fa-user text-muted mr-5"></i> Sign In
                      </a>
                    </div>
                  </div>
                </form>
                <!-- END Sign Up Form -->
              </div>
            </div>
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!-- Terms Modal -->
    <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
        <div class="modal-content">
          <div class="block block-themed block-transparent mb-0">
            <div class="block-header bg-primary-dark">
              <h3 class="block-title">Terms &amp; Conditions</h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                  <i class="si si-close"></i>
                </button>
              </div>
            </div>
            <div class="block-content">
              <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
              <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
              <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-alt-success" data-dismiss="modal">
              <i class="fa fa-check"></i> Perfect
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- END Terms Modal -->

    <script src="{{asset('assets/js/codebase.core.min.js')}}"></script>
    <script src="{{asset('assets/js/codebase.app.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{asset('assets/js/pages/op_auth_signup.min.js')}}"></script>


     <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/masked-inputs/jquery.maskedinput.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/dropzone/min/dropzone.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/flatpickr/flatpickr.min.js')}}"></script>

     <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins) -->
    <script>jQuery(function(){Codebase.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);});</script>
  </body>
</html>
