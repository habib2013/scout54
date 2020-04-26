<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/front/html/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 03:16:23 GMT -->
<head>
  <!-- Title -->
  <title>Scout54 | Register</title>
  @laravelPWA
  {!! NoCaptcha::renderJs() !!}
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="https://htmlstream.com/front/favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../../assets/css/theme.css">
  <link rel="stylesheet" href="../../assets/css/intlTelInput.css">
  <link rel="stylesheet" href="../../assets/css/countrySelect.css">
  <link rel="stylesheet" href="path/to/intlTelInput.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<body style="font-family: 'Cera Pro New';">
  <!-- ========== HEADER ========== -->

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main" >
    <!-- Form -->
    <div class="d-flex align-items-center position-relative vh-lg-100" >
      <div class="col-lg-5 col-xl-4  d-none d-lg-flex align-items-center bg-navy vh-lg-100 px-0 relogin" style="background-image: url(../../assets/img/1920x800/02.jpg);background-size: 100% 100%;">
         <div class="overlay"></div>
         <div class="w-100 p-5" style="position: absolute;">

         <div class="cont_here" style="position: relative;color: #ffffff;">

       <br>
     <h2>Join scout54' {{ isset($url) ? ucwords($url) : ""}}</h2>



            </div>

        </div>
      </div>

      <div class="container" >
        <div class="row no-gutters">
          <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="background-color: #ffffff;">
               <a class="navbar-brand" href="#" style="height: 50px;">
                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="46px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
                   <path fill="#000000" opacity=".65" d="M23,41.1L23,41.1c-9.9,0-18-8-18-18l0,0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6v11.4C41,33,32.9,41.1,23,41.1z"/>
                   <path class="fill-white" opacity=".5" d="M28,36L28,36c-9.9,0-18-8-18-18l0,0c0-9.9,8-18,18-18h11.3C43,0.1,46,3.1,46,6.7v11.4C46,28,38,36,28,36z"/>
                   <path class="fill-white" opacity=".7" d="M18,46.1L18,46.1c-10,0-18-8-18-18l0,0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6v11.4C35.9,38.1,27.9,46.1,18,46.1z"/>
                   <path class="fill-primary" d="M17.4,34.1V18.4h10.2v2.9h-6.4v3.4H26v2.9h-4.8v6.5H17.4z"/>
                 </svg>


               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto smallers" >
                   <li class="nav-item myactive">
                     <a class="nav-link" href="/" style="color: #ffffff;font-family: 'Cera Pro New';font-style: normal">Home </a>
                   </li>



                 </ul>
     <div class="mt-2"></div>
     <button type="button" class="bt" data-toggle="modal" data-target="#loginModal"> <a
       class="pop_up_btn nav-link text-white px-4 mx-2 rounded"
       href="#">Login</a></button>

                 <button type="button" class="bt" data-toggle="modal" data-target="#registerModal"> <a
                   class="pop_up_btn nav-link text-white px-4 mx-2 rounded"
                   href="#">Register</a></button>

                   <div class="modal fade" id="registerModal">
              <div class="modal-dialog">
                  <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">

                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body" style="padding-right: 34px;">
                          <div class="pop_iner">

                              <ul>
                                  <li><a href="/register/coach">
                                          <div class="imgg"><img
                                            src="../../assets/illustrators/newcoach.png"
                                                  class="img-fluid"></div>
                                          <p>Coach</p>
                                      </a></li>
                                      <li>
                                      <a href="/register/player">
                                        <div class="imgg"><img

                                                src="../../assets/illustrators/rener.png"
                                                class="img-fluid"></div>
                                        <p>Player</p>
                                    </a></li>

                                  <li><a href="/register/club">
                                          <div class="imgg"><img
                                                  src="../../assets/illustrators/realfc.png"
                                                  class="img-fluid"></div>
                                          <p>CLub</p>
                                      </a></li>
                                  <li><a href="/register/agent">
                                          <div class="imgg"><img
                                            src="../../assets/illustrators/newagent.png"
                                                  class="img-fluid"></div>
                                          <p>Agent</p>
                                      </a></li>
                              </ul>
                          </div>
                      </div>



                  </div>
              </div>
          </div>

          <div class="modal fade" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body" style="padding-right: 34px;">
                        <div class="pop_iner">
                          <ul>
                            <li><a href="/login/coach">
                                    <div class="imgg"><img
                                      src="../../assets/illustrators/newcoach.png"
                                            class="img-fluid"></div>
                                    <p>Coach</p>
                                </a></li>

                                <li><a href="/login/player">
                                  <div class="imgg"><img

                                          src="../../assets/illustrators/rener.png"
                                          class="img-fluid"></div>
                                  <p>Player</p>
                              </a></li>

                            <li><a href="/login/club">
                                    <div class="imgg"><img
                                            src="../../assets/illustrators/realfc.png"
                                            class="img-fluid"></div>
                                    <p>CLub</p>
                                </a></li>
                            <li><a href="/login/agent">
                                    <div class="imgg"><img
                                      src="../../assets/illustrators/newagent.png"
                                            class="img-fluid"></div>
                                    <p>Agent</p>
                                </a></li>
                        </ul>
                        </div>
                    </div>



                </div>
            </div>
        </div>
               </div>
             </nav>

             @isset($url)
                    <form  method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                    @else
                    <form  method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @endisset
                        @csrf


              <!-- Title -->
              <div class="mb-5 mb-md-5" >
              </div>
              <div class="mb-3 mb-md-3" >
           </div>
              <!-- End Title -->


              <!-- Form Group -->
              <div class="row">


  <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
              <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Username</label>
                <input type="text"  id="username" tabindex="1" aria-label="Username"
                       data-msg="Please enter a valid Username." class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                       @error('username')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror

              </div>

</div>

@if(isset($url) && $url == 'club')

<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
    <label class="input-label" for="signinSrEmail">Club Name</label>
    <input type="text"  id="clubname" tabindex="1"  aria-label="Full name"
           data-msg="Please enter a valid Club name." class="form-control @error('clubname') is-invalid @enderror" name="clubname" value="{{ old('clubname') }}" required autocomplete="clubname" autofocus>
           @error('username')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror

  </div>
@else
<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
    <label class="input-label" for="signinSrEmail">Full Name</label>
    <input type="text"  id="fullname" tabindex="1"  aria-label="Full name"
           data-msg="Please enter a valid Full name." class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>
           @error('username')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror

  </div>

@endif
</div>

              <div class="js-form-message form-group">
<div class="row">

  <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
    <label class="input-label" for="signinSrEmail">Email Address</label>
    <input type="email"  id="email" tabindex="1"  aria-label="Email address"
           data-msg="Please enter a valid email." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
           @error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror

  </div>

  @if(isset($url) && $url == 'club')
  <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
              <label class="input-label">Date Of Establishment </label>
              <div class="js-form-message form-group">
                <input type="date"   id="date" tabindex="1" required
                       data-msg="Please enter a valid date." class="form-control @error('date') is-invalid @enderror" name="date_est" value="<?php echo date("Y-m-d"); ?>" required autocomplete="date">
                       @error('phone')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
          </div>
              </div>

@else

<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
              <label class="input-label">Status as professional</label>

<select name="status" id="status" class="form-control">

<option value="never had a contract">Never had a contract</option>
<option value="My last contract has expired">My last contract has expired</option>
<option value="My current contract has been terminated">My current contract has been terminated</option>
<option value="Still on Contract">Still on Contract</option>


</select>

              </div>


</div>

@endif

              </div>



            <div class="row">



<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
              <label class="input-label">Country</label>
              <div class="js-form-message form-group">


              <div>
				<input id="country_selector" type="text" class="form-control">
				<label for="country_selector" style="display:none;">Select a country here...</label>
			</div>
			<div class="form-item" style="display:none;">
				<input type="text" id="country_selector_code" class="form-control" name="nationality" data-countrycodeinput="1" readonly />
			</div>

              </div>
              </div>

@if(isset($url) && $url == 'player')

<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
              <label class="input-label">Date Of Birth</label>
              <div class="js-form-message form-group">
                <input type="date"   id="date" tabindex="1" required
                       data-msg="Please enter a valid date." class="form-control @error('phone') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday">
                       @error('phone')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
          </div>
              </div>

@else

<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
              <label class="input-label">Phone number</label>
              <div class="js-form-message form-group">
                <input type="tel"   id="phone" tabindex="1"
                       data-msg="Please enter a valid Phone number." class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone">
                       @error('phone')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
          </div>
              </div>

     @endif

            </div>



              <!-- End Form Group -->

              <!-- Form Group -->
<div class="row">
  <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">

    <div class="js-form-message form-group">
      <label class="input-label" for="signinSrPassword" tabindex="0">
        <span class="d-flex justify-content-between align-items-center">
           password
            </span>
      </label>
      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  id="signinSrPassword" tabindex="2"  aria-label="********"
             data-msg="Your password is invalid. Please try again." value="password">
             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
  </div>
  <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">

    <div class="js-form-message form-group">
      <label class="input-label" for="signinSrPassword" tabindex="0">
        <span class="d-flex justify-content-between align-items-center">
          Confirm password
        </span>
      </label>

      <input value="password"  id="input-password-confirm" placeholder="confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

       </div>
  </div>
</div>


<!-- <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                {!! app('captcha')->display() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            -->
              <!-- End Form Group -->
              <div class="js-form-message mb-5">
                <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                  <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required
                         data-msg="Please accept our Terms and Conditions.">
                  <label class="custom-control-label" for="termsCheckbox">
                    <small>
                      I agree to the
                      <a class="link-underline" href="terms.html">Terms and Conditions</a>
                    </small>
                  </label>
                </div>
              </div>
              <!-- Button -->
              <!-- <div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div> -->

              <div class="row align-items-center mb-5">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <span class="font-size-1 text-muted">Don't have an account?</span>
                  <a class="font-size-1 font-weight-bold" href="signup.html">Signup</a>
                </div>

                <div class="col-sm-6 text-sm-right">
                  <button type="submit" id="register_button" class="btn btn-primary transition-3d-hover register_button">Get Started</button>
                </div>
              </div>
              <!-- End Button -->
            </form>
            <!-- End Form -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Form -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- JS Global Compulsory -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <script src="../../assets/js/components/hs.range-datepicker.js"></script>
  <!-- JS Implementing Plugins -->
  <script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>

  <!-- JS Front -->
  <script src="../../assets/js/hs.core.js"></script>
  <script src="../../assets/js/hs.validation.js"></script>
  <script src="../../assets/js/hs.slick-carousel.js"></script>
  <script src="../../assets/js/intlTelInput.js"></script>
  <script src="../../assets/js/countrySelect.js"></script>
  <script src="../../assets/js/holders.js"></script>

  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
       excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
       preferredCountries: ['ng', 'gh','tg','ivr'],
      // separateDialCode: true,
      utilsScript: "../../assets/js/utils.js",
    });
  </script>
  		<script>
			$("#country_selector").countrySelect({
				preferredCountries: ['ng','gh']
			});
		</script>




<script type="text/javascript">
  $("body").on("click",".register_button",function(e){
   var date = $('#date').val();

   if(date == ''){
     alert('Date cannot be empty');
     $(".register_button").removeAttr("disabled");
    $(".register_button").html('GET STARTED');

   }


    $(this).parents("form").ajaxForm(options);

setTimeout(() => {
  $(".register_button").attr("disabled", "disabled");
    $(".register_button").html('Proccessing . . <i class="fas fa-spinner fa-spin text-white"></i>')

}, 1000);

  });

  var options = {
    complete: function(response)
    {
    	if($.isEmptyObject(response.responseJSON.error)){
        swal({
        title: "Registeration Successful",
        text: "You have successfully Registered",
        type: "success",
        dangerMode: true,
        showCancelButton: false,
        dangerMode: false,

        confirmButtonText: 'SUCCESS ⚽!',
    }
    );

    $(".register_button").removeAttr("disabled");
    $(".register_button").html('GET STARTED');

       window.location.href = '/success/email';

    	}else{
    		printErrorMsg(response.responseJSON.error);
    	}
    }
  };
  function printErrorMsg (msg) {
	$.each( msg, function( key, value ) {
    swal({
        title: "Login Error",
        text: value,
        type: "error",
        dangerMode: true,
        showCancelButton: false,
        dangerMode: false,

        confirmButtonText: 'ERROR!',
    }
    );

	});
  $(".register_button").removeAttr("disabled");
    $(".register_button").html('GET STARTED');


  }
</script>

  <!-- JS Plugins Init. -->



  <script>
    $(document).on('ready', function () {
      // initialization of slick carousel

      $('.js-slick-carousel').each(function() {
        var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
      });


      // initialization of form validation
      $('.js-validate').each(function () {
        var validation = $.HSCore.components.HSValidation.init($(this));
      });
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="../../assets/vendor/polifills.js"><\/script>');
  </script>
</body>

<!-- Mirrored from htmlstream.com/front/html/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 03:16:23 GMT -->
</html>
