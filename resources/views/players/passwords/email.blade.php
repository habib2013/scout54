<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/authentication/simple-recover.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 19:48:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.">
        <meta name="author" content="Webpixels">
        <title>Sabikick.com</title><!-- Favicon -->
          <!-- Favicon -->
        @laravelPWA

        <!--  -->

        <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
        <!-- Font Awesome 5 -->
        <link rel="stylesheet"  href="{{asset('libs/@fortawesome/fontawesome-pro/css/all.min.css')}}"><!-- Page CSS -->
        <link rel="stylesheet"  href="{{asset('libs/swiper/dist/css/swiper.min.css')}}">
        <!-- Purpose CSS -->
        <link rel="stylesheet" href="{{asset('css/purpose.css')}}" id="stylesheet">
        <script src="{{asset('libs/typed.js/lib/typed.min.js')}}"></script>
      <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    </head>
<body>
  <!-- Omnisearch -->

  <div class="main-content">
    <div class="container h-100vh d-flex align-items-center">
      <div class="col">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-5 col-xl-4">
            <div>
              <div class="mb-5 text-center">
                <h6 class="h3">Password reset</h6>
                <p class="text-muted mb-0">Enter your email below to proceed.</p>
              </div>
              <span class="clearfix"></span>
              @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                <div class="form-group">
                  <label class="form-control-label">Email address</label>
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-user"></i></span>
                    </div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

 </div>
                </div>
                <div class="mt-4">
                  <button type="submit" class="btn btn-block btn-primary">Reset password</button></div>
              </form>
              <div class="mt-4 text-center"><small>Not registered?</small>
                <a href="/register" class="small font-weight-bold">Create account</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="{{ asset('js/app.js') }}"></script>
        <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
      <script  src="{{asset('js/purpose.core.js')}}"></script>
      
        <script src="{{asset('libs/swiper/dist/js/swiper.min.js')}}"></script>
      
        <script src="{{asset('js/purpose.js')}}"></script>
       
        <script src="{{asset('js/demo.js')}}"></script>
</body>


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/authentication/simple-recover.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 19:48:54 GMT -->
</html>