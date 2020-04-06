<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/authentication/simple-recover.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 19:48:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Sabikick.. Africa to the world">
        <meta name="author" content="Habib">
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
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
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