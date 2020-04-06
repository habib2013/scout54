 <!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/account/account-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:39:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sabikick.. Africa to the world">
        <meta name="author" content="Habib">
        <title>Sabikick.com</title><!-- Favicon -->
        <!-- Favicon -->
  @laravelPWA
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="{{asset('libs/@fortawesome/fontawesome-pro/css/all.min.css')}}"><!-- Page CSS -->
  <link type="text/css" href="{{asset('libs/select2/dist/css/select2.min.css')}}" rel="stylesheet">
  <link type="text/css" href="{{asset('libs/flatpickr/dist/flatpickr.min.css')}}" rel="stylesheet">
  <!-- Purpose CSS -->
  <link rel="stylesheet" href="{{asset('css/purpose.css')}}" id="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
  
</head>

<body>
<header class="header header-transparent" id="header-main">
    <!-- Topbar -->
    <div id="navbar-top-main" class="navbar-top  navbar-dark bg-dark border-bottom">
                <div class="container px-0">
                    <div class="navbar-nav align-items-center">
                        <div class="d-none d-lg-inline-block">
                    
                        </div>
                   
                        <div class="ml-auto">
                            <ul class="nav">
                                <li class="nav-item">
                                    
                                </li>
                       
                               
                                <li class="nav-item dropdown">
                                    <a class="nav-link pr-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-user-circle"></i>
                                    </a>

                                    @guest
                             
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <h6 class="dropdown-header">User menu</h6>
                                        <a class="dropdown-item" href="/login">
                                            <i class="far fa-user"></i>Login
                                        </a>
                                        @if (Route::has('register'))
                                        <a class="dropdown-item" href="/register">
                                            <i class="far fa-user"></i>Register
                                        </a>
                                        @endif
                                    </div>
                                @else
                                   
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <h6 class="dropdown-header">{{ Auth::user()->username}}</h6>
                                        <a class="dropdown-item" href="/{{Auth::user()->username}}">
                                            <i class="far fa-user"></i>Account
                                        </a>
                                      
                                        <div class="dropdown-divider" role="presentation"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   
                                      
                                            <i class="far fa-sign-out-alt"></i>Sign out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </div>
                                    @endguest

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Main navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-dark" id="navbar-main">
                <div class="container px-lg-0">
                    <!-- Logo -->
                    <a class="navbar-brand mr-lg-5" href="#">
                    
                   <img alt="Image placeholder" src="{{asset('img/newlogo.png')}}" id="navbar-logo" style="height: 50px;">
                
                  <!-- <p style="padding-top:15px;font-family: 'Shadows Into Light', cursive;font-size:30px">Sabikick</p> -->
                      <!-- <h6 id="navbar-logo" style="height: 50px;padding-top:7px;color:#ffffff;font-size:30px">Sabikick</h6> -->
                    </a>
                    <!-- Navbar collapse trigger -->
                    <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Navbar nav -->
                    <div class="collapse navbar-collapse" id="navbar-main-collapse">
                    <ul class="navbar-nav align-items-lg-center">
                            <!-- Home - Overview  -->
                           
                            <!-- Pages menu -->
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="/listplayers" >Players</a>
                            </li>

                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="/listscouts" >Scouts</a>
                            </li>
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="/listcoaches" >Coaches</a>
                            </li>

                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="/listagents" >Agents</a>
                            </li>

                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="/listclubs" >Clubs</a>
                            </li>
                            <!-- Sections menu -->
                          
                           
                        </ul>
                        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-sm dropdown-menu-arrow p-0">
                                    <ul class="list-group list-group-flush">
                                    <li>
                                            <a href="/contactus" class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                                    
                                                    <!-- Media body -->
                                                    <div class="media-body">
                                                  <p class="mb-0">Contact us</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/aboutus" class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                        
                                                    <!-- Media body -->
                                             
                                                        <p class="mb-0">About Us</p>
                                      
                                                </div>
                                            </a>

                                            <a href="/faqs" class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                        
                                                    <!-- Media body -->
                                            
                                                        <p class="mb-0">Faqs</p>
                                              
                                                </div>
                                            </a>
                                            <a href="/showallposts" class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                        
                                                    <!-- Media body -->
                                            
                                                        <p class="mb-0">News & Events</p>
                                              
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                 
                                </div>
                            </li>
                          
                         
                        </ul>
                    </div>
                </div>
            </nav>  
  
   </header>
  <!-- Omnisearch -->
 



  <div class="main-content">
    <!-- Header (account) -->
    <section class="header-account-page bg-primary d-flex align-items-end" data-offset-top="#header-main">
      <!-- Header container -->
      <div class="container pt-4 pt-lg-0">
        <div class="row">
          <div class=" col-lg-12">
            <!-- Salute + Small stats -->
            <div class="row align-items-center mb-4">
              <div class="col-md-5 mb-4 mb-md-0">
                <span class="h2 mb-0 text-white d-block">Welcome,{{$user->username}}&nbsp; 
                @if(($user->status)== "verified")
            <img src="{{asset('img/appro.png')}}" style="height:25px;width:25px"/>
            @else
            <img src="{{asset('img/waiting.png')}}" style="height:25px;width:25px" title="Not a verified account"/>
           
                @endif
                </span>
                <span class="text-white"></span>
              </div>
              
            </div>
            <!-- Account navigation -->
            <div class="d-flex">
              <a href="/{{Auth::user()->username}}" class="btn btn-icon btn-group-nav shadow btn-neutral">
                <span class="btn-inner--icon"><i class="far fa-user"></i></span>
                <span class="btn-inner--text d-none d-md-inline-block">My Profile</span>
              </a>
              <div class="btn-group btn-group-nav shadow ml-auto" role="group" aria-label="Basic example">
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="slice">
      <div class="container">
        <div class="row row-grid">
          <div class="col-lg-9 order-lg-2">
            <!-- Change avatar -->
           
            <!-- General information form -->
            <div class="actions-toolbar py-2 mb-4">
              <h5 class="mb-1">General information</h5>
              <p class="text-sm text-muted mb-0">You can help us, by filling your data, create you a much better experience using our website.</p>
            </div>
            <form action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PATCH')
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label"> Username</label>
                    <input class="form-control"  type="text" value="{{$user->username}}" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Full name</label>
                    <input class="form-control" type="text" value="{{$user->name}}" disabled>
                  </div>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Birthday</label>
                    <input type="text" name="birthday" class="form-control" data-toggle="date" value="{{$user->profile->birthday}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Gender</label>
                    <select name="gender" class="form-control" data-toggle="select">
                      <option value="Female">Female</option>
                      <option value="Male">Male</option>
                      <option value="Rather not say">Rather not say</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Email</label>
                    <input class="form-control" type="email" value="{{$user->email}}" disabled>
                    <small class="form-text text-muted mt-2">This is the main email address that we'll send notifications to. <a href="account-notifications.html">Manage you notifications</a> in order to receive only the thing that matter to you most.</small>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Phone</label>
                    <input class="form-control" name="phone" type="text" value="{{$user->profile->phone}}">
                  </div>
                </div>
              </div>
              <!-- Address -->
              <div class="pt-5 mt-5 delimiter-top">
                <div class="actions-toolbar py-2 mb-4">
                  <h5 class="mb-1">Address details</h5>
                  <p class="text-sm text-muted mb-0"></p>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label class="form-control-label">Address</label>
                      <input class="form-control" name="address" type="text" value="{{$user->profile->address}}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-control-label">City</label>
                      <input class="form-control" name="city" type="text" value="{{$user->profile->city}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-control-label">Country</label>
                      <select name="country" class="form-control" data-toggle="select" title="Country" data-live-search="true" data-live-search-placeholder="Country">
                        <option>Romania</option>
                        <option>United Stated</option>
                        <option>France</option>
                        <option>Greece</option>
                        <option>Italy</option>
                        <option>Norway</option>
                        <option>Nigeria</option>
                        <option>Niger</option>
                        <option>Ghana</option>
                        <option>Togo</option>

                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Skills -->
              <div class="pt-5 mt-5 delimiter-top">
                <div class="actions-toolbar py-2 mb-4">
                  <h5 class="mb-1"><span style="color:red">**</span> Current Position</h5>
                  <p class="text-sm text-muted mb-0">Please fill out your currrent position.</p>
                </div>
                <div class="row">
                  <div class="col-6">
                  <label class="form-control-label">Date From</label>
                  <input type="text" name="datefrom" class="form-control" data-toggle="date" value="{{$user->profile->datefrom}}">
                
                  </div>
                  <div class="col-6">
                  <label class="form-control-label">Date to</label>
                  <input type="text" name="dateto" class="form-control" data-toggle="date" value="{{$user->profile->dateto ?? 'Optional if still on contract'}}">
                  </div>

                  <div class="col-6">
                  <label class="form-control-label">My Club</label>
                  <input class="form-control" name="position" type="text" value="{{$user->profile->position}}">
                  
                  </div>
                </div>
              </div>

              <div class="pt-5 mt-5 delimiter-top">
                <div class="actions-toolbar py-2 mb-4">
                  <h5 class="mb-1">Upload Image</h5>
                  <p class="text-sm text-muted mb-0">Use this field to upload a good image of yourself.</p>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <div class="form-group">
                        <label class="form-control-label">Profile Image</label>
                <div class="col-6">
                    <input class="form-control" type="file" name="coverimage" id="coverimage">
                    </div>
                    <br><br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class=" delimiter-top">
                <div class="actions-toolbar py-2 mb-4">
                  <h5 class="mb-1">Upload CV</h5>
                  <p class="text-sm text-muted mb-0">Only PDF,DOCS format is supported.</p>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <div class="form-group">
                 
                   <div class="col-6">
                    <input class="form-control" type="file" name="cv" id="cv">
                    </div>
                    <br><br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Description -->
              <div class="delimiter-top">
                <div class="actions-toolbar py-2 mb-4">
                  <h5 class="mb-1">About me</h5>
                  <p class="text-sm text-muted mb-0">Use this field to let others know you better.</p>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <div class="form-group">
                        <label class="form-control-label">Bio</label>
                        <textarea class="form-control" name="bio" placeholder="Tell us a few words about yourself" rows="3"></textarea>
                        </div>
                    </div>
                  </div>
                </div>
              </div>

              
              <!-- Save changes buttons -->
              <div class="pt-5 mt-5 delimiter-top text-center">
                <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
                <button type="button" class="btn btn-link text-muted">Cancel</button>
              </div>
            </form>
          </div>
          <div class="col-lg-3 order-lg-1">
            <div data-toggle="sticky" data-sticky-offset="30" data-negative-margin=".card-profile-cover">
              <div class="card">
             
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="footer p-0 footer-light bg-section-secondary" id="footer-main">
    <div class="container">
      <div class="py-4">
        <div class="row align-items-md-center">
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="d-flex align-items-center">
              <p class="text-sm mb-0">&copy; Sabikick.  <a href="https://www.sabikick.com" target="_blank">Sabikick</a>. All rights reserved.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-sm-0">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="/aboutus">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contactus">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/faqs">Faqs</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-4">
            <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
              <li class="nav-item">
                <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <script src="{{asset('js/purpose.core.js')}}"></script>
  <!-- Page JS -->
  <script src="{{asset('libs/select2/dist/js/select2.min.js')}}"></script>
  <script src="{{asset('libs/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
  <script  src="{{asset('libs/flatpickr/dist/flatpickr.min.js')}}"></script>
  <!-- Purpose JS -->
  <script src="{{asset('js/purpose.js')}}"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="{{asset('js/demo.js')}}"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-104437451-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-104437451-1');
  </script>
</body>


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/account/account-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:39:10 GMT -->
</html>