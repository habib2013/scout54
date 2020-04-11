<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/front/html/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 03:16:23 GMT -->
<head>
  <!-- Title -->
  <title>Login | {{ isset($url) ? ucwords($url) : ""}}</title>
  @laravelPWA
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</head>
<body style="font-family: 'Cera Pro New';">
  <!-- ========== HEADER ========== -->

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main" >
    <!-- Form -->
    <div class="d-flex align-items-center position-relative vh-lg-100" >
      <div class="col-lg-5 col-xl-4 d-none d-lg-flex align-items-center bg-navy vh-lg-100 px-0 relogin"  style="background-image: url(../../assets/img/1920x800/01.jpg);background-size: 100% 100%;">
         <div class="overlay"></div>
         <div class="w-100 p-5" style="position: absolute;">
     
         <div class="cont_here" style="position: relative;color: #ffffff;">
     
       <br>
       <br>  <br>

       <h1> Scout54 {{ isset($url) ? ucwords($url) : "Admin"}}</h1>
       
       <br>
  
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
                    <form  method="POST"  onsubmit="return LoginOtherUser()"  aria-label="{{ __('Login') }}">
                    @else
                    <!-- <form class="js-validate" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" onsubmit="return LoginUser()">
                    -->
                    <form id="login-form" method="post" onsubmit="return LoginUser()" role="form" style="display: block;">
                                    
                    @endisset
                        @csrf
        
        
              <!-- Title -->
              <div class="mb-5 mb-md-7" >
                
    @if(isset($url))
    <input type="hidden" id="txt_url" name="txt_url" value="{{$url}}"/>
    @endif

                <h1>Welcome back</h1>
                <p>Login to manage your {{ isset($url) ? ucwords($url) : "Admin"}}'s account.</p>
                 </div>
              <!-- End Title -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Email address</label>
                <input type="email" name="email" id="login_email" tabindex="1" placeholder="Email address" aria-label="Email address" 
                       data-msg="Please enter a valid email address." class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus >
          
          
                @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signinSrPassword" tabindex="0">
                  <span class="d-flex justify-content-between align-items-center">
                    Password
                    <a class="link-underline text-capitalize font-weight-normal" href="recover-account.html">Forgot Password?</a>
                  </span>
                </label>
                <input type="password"  name="password" id="password" tabindex="2" placeholder="********" aria-label="********" 
                       data-msg="Your password field is invalid. Please try again."  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
             
                       @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
              </div>
              <!-- End Form Group -->

              <!-- Button -->
              <div class="row align-items-center mb-5">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <span class="font-size-1 text-muted">Don't have an account?</span>
                  <a class="font-size-1 font-weight-bold" href="signup.html">Signup</a>
                </div>

                <div id="login_email_error" class="font-size-1 font-weight-bold"></div>
                <div class="col-sm-6 text-sm-right">
                  <button type="submit" class="btn btn-primary transition-3d-hover" id="login_button">LOGIN</button>

                  <!-- <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn btn-primary btn-login" value="Log In">
                                              -->
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

  <!-- JS Implementing Plugins -->
  <script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>

  <!-- JS Front -->
  <script src="../../assets/js/hs.core.js"></script>
  <script src="../../assets/js/hs.validation.js"></script>
  <script src="../../assets/js/hs.slick-carousel.js"></script>

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

<!-- <script type="text/javascript">
$(document).ready(function(){
  $('#login_email').on('blur',function(event){
      event.preventDefault();
      var url = '/validation-login-email';
      var email = $(this).val();
      $ajax({
        type:'POST',
        url: url,
        data: {'email':email},
        success:function(data){
          if(data){
            alert(data);
            $('#login_email_error').html(data);
            $('#login_button').prop('disabled',true);
          }
          else{
            $('#login_button').prop('disabled',false);
          }
        }
      });

  });
});
    </script> -->


    <script type="text/javascript">
        function LoginUser()
        {
            var token    = $("input[name=_token]").val();
            var email    = $("input[name=email]").val();
            var password = $("input[name=password]").val();
            var data = {
                _token:token,
                email:email,
                password:password
            };
            // Ajax Post 
            $.ajax({
                type: "post",
                url: "/login",
                data: data,
                cache: false,
                beforeSend:function(){
                  $("#login_button").attr("disabled", "disabled");
                        $("#login_button").html('Proccessing . . <i class="fas fa-spinner fa-spin text-white"></i>')
                  
                },
      
                success: function (data)
                {
                    console.log('login request sent !');
if(data.status == 'success'){
  swal({
        title: "Login Successful",
        text: "You will be redirected to your dahsboard!",
        type: "success",
        showCancelButton: false,
        dangerMode: false,
     
        confirmButtonText: 'OK!',
    }
    
    );
}
else {
 
  swal({
        title: data.status,
        text: data.message,
        type: "error",
        dangerMode: true,
        showCancelButton: false,
        dangerMode: false,
     
        confirmButtonText: 'ERROR!',
    }
    );
  
}


                    // console.log('status: ' +data.status);
                    // alert('message: ' +data.message);
                    // console.log('message: ' +data.message);
                    $("#login_button").removeAttr("disabled");
                        $("#login_button").html('LOGIN');
                   
                },

                error: function (data){
                  console.log('Fail to run Login..');
                    // alert("Fail to run Login..");

              
                }
            });
            return false;
        }
</script>


<script type="text/javascript">
        function LoginOtherUser()
        {
            var token    = $("input[name=_token]").val();
            var email    = $("input[name=email]").val();
            var password = $("input[name=password]").val();
            var txt_url = $('#txt_url').val();
            var data = {
                _token:token,
                email:email,
                password:password
            };
            // Ajax Post 
      //  if(txt_url == 'player'){
            $.ajax({
                type: "post",
                url: "/login/"+txt_url ,
                data: data,
                cache: false,
                beforeSend:function(){
                  $("#login_button").attr("disabled", "disabled");
                        $("#login_button").html('Proccessing . . <i class="fas fa-spinner fa-spin text-white"></i>')
                  
                },
      
                success: function (data)
                {
                    console.log('login request sent !');
if(data.status == 'success'){
  swal({
        title: "Login Successful",
        text: "You will be redirected to your dahsboard!",
        type: "success",
        showCancelButton: false,
        dangerMode: false,
     
        confirmButtonText: 'OK!',
    }
    
    );
}
else {
 
  swal({
        title: data.status,
        text: data.message,
        type: "error",
        dangerMode: true,
        showCancelButton: false,
        dangerMode: false,
     
        confirmButtonText: 'ERROR!',
    }
    );
  
}

                    $("#login_button").removeAttr("disabled");
                        $("#login_button").html('LOGIN');
                   
                },

                error: function (data){
                  console.log('Fail to run Login..');
                    // alert("Fail to run Login..");

              
                }
            });

          // }
            //End ajax Post


            return false;
        }
</script>



  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="../../assets/vendor/polifills.js"><\/script>');
  </script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

</body>

<!-- Mirrored from htmlstream.com/front/html/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 03:16:23 GMT -->
</html>