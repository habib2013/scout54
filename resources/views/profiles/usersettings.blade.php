<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/account/account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:39:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sabikick.. Africa to the world">
        <meta name="author" content="Habib">
 <title>Kick.com</title>
 <!-- Favicon -->
 @laravelPWA
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet"  href="{{asset('libs/@fortawesome/fontawesome-pro/css/all.min.css')}}"><!-- Page CSS -->
        <link rel="stylesheet"  href="{{asset('libs/swiper/dist/css/swiper.min.css')}}">
        <!-- Purpose CSS -->
        <link rel="stylesheet" href="{{asset('css/purpose.css')}}" id="stylesheet">

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
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-action="omnisearch-open" data-target="#omnisearch"><i class="far fa-search"></i></a>
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
                                        <a class="dropdown-item" href="/profile/{{Auth::user()->id}}">
                                            <i class="far fa-user"></i>Account
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span class="float-right badge badge-primary">4</span>
                                            <i class="far fa-envelope"></i>Messages
                                        </a>
                                        <a class="dropdown-item" href="/settings/{{Auth::user()->id}}">
                                            <i class="far fa-cog"></i>Settings
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
                    <a class="navbar-brand mr-lg-5" href="index-2.html">
                        <img alt="Image placeholder" src="{{asset('img/brand/white.png')}}" id="navbar-logo" style="height: 50px;">
                    </a>
                    <!-- Navbar collapse trigger -->
                    <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Navbar nav -->
                    <div class="collapse navbar-collapse" id="navbar-main-collapse">
                        <ul class="navbar-nav align-items-lg-center">
                            <!-- Home - Overview  -->
                            <li class="nav-item active">
                                <a class="nav-link" href="index-2.html">Overview</a>
                            </li>
                            <!-- Pages menu -->
                        
                            <!-- Sections menu -->
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sections</a>
                               
                            </li>
                        </ul>
                        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                                    <ul class="list-group list-group-flush">
                                        <li>
                                            <a href="docs/index.html" class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                                    <figure style="width: 50px;">
                                                        <img alt="Image placeholder" src="{{asset('img/icons/essential/detailed/DOC_File.svg')}}"  class="svg-inject img-fluid" style="height: 50px;">
                                                    </figure>
                                                    <!-- Media body -->
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-1">General posts</h6>
                                                        <p class="mb-0">Awesome section examples for any scenario.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="docs/components/index.html" class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                                    <figure style="width: 50px;">
                                                        <img alt="Image placeholder" src="{{asset('img/icons/essential/detailed/Mobile_UI.svg')}}"  class="svg-inject img-fluid" style="height: 50px;">
                                                    </figure>
                                                    <!-- Media body -->
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-1">From who i follow</h6>
                                                        <p class="mb-0">Awesome section examples for any scenario.</p>
                                                    </div>
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
  <div id="omnisearch" class="omnisearch">
    <div class="container">
      <!-- Search form -->
      <form class="omnisearch-form">
        <div class="form-group">
          <div class="input-group input-group-merge input-group-flush">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-search"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Type and hit enter ...">
          </div>
        </div>
      </form>
      <div class="omnisearch-suggestions">
        <h6 class="heading">Search Suggestions</h6>
        <div class="row">
          <div class="col-sm-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a class="list-link" href="#">
                  <i class="far fa-search"></i>
                  <span>macbook pro</span> in Laptops
                </a>
              </li>
              <li>
                <a class="list-link" href="#">
                  <i class="far fa-search"></i>
                  <span>iphone 8</span> in Smartphones
                </a>
              </li>
              <li>
                <a class="list-link" href="#">
                  <i class="far fa-search"></i>
                  <span>macbook pro</span> in Laptops
                </a>
              </li>
              <li>
                <a class="list-link" href="#">
                  <i class="far fa-search"></i>
                  <span>beats pro solo 3</span> in Headphones
                </a>
              </li>
              <li>
                <a class="list-link" href="#">
                  <i class="far fa-search"></i>
                  <span>smasung galaxy 10</span> in Phones
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
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
                <span class="h2 mb-0 text-white d-block">Morning, {{$user->username}}</span>
           
              </div>
              <div class="col-auto flex-fill d-none d-xl-block">
                <ul class="list-inline row justify-content-lg-end mb-0">
                  <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                    <span class="badge badge-dot text-white">
                      <i class="bg-success"></i>Followers
                    </span>
                    <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                    {{count($user->profile->followers)}}
                      <small class="far fa-angle-up text-success"></small>
                    </a>
                  </li>
                  <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                    <span class="badge badge-dot text-white">
                      <i class="bg-warning"></i>Following
                    </span>
                    <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                    {{count($user->following)}}
                      <small class="far fa-angle-up text-warning"></small>
                    </a>
                  </li>
                  <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                    <span class="badge badge-dot text-white">
                      <i class="bg-danger"></i>Article(s)
                    </span>
                    <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                    {{count($user->posts) ?? 'N/A'}}
                      <small class="far fa-angle-down text-danger"></small>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Account navigation -->
            <div class="d-flex">
              <a href="account-profile-public.html" class="btn btn-icon btn-group-nav shadow btn-neutral">
                <span class="btn-inner--icon"><i class="far fa-user"></i></span>
                <span class="btn-inner--text d-none d-md-inline-block">My Profile</span>
              </a>
              <div class="btn-group btn-group-nav shadow ml-auto" role="group" aria-label="Basic example">
                <div class="btn-group" role="group">
                  <button id="btn-group-settings" type="button" class="btn btn-neutral btn-icon" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="far fa-sliders-h"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">Account</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-settings">
                    <span class="dropdown-header">Profile</span>
                    <a class="dropdown-item" href="account-profile-public.html">Public profile</a>
                    <span class="dropdown-header">Account</span>
                    <a class="dropdown-item" href="account-profile.html">Profile</a>
                    <a class="dropdown-item" href="account-settings.html">Settings</a>
                    <a class="dropdown-item" href="account-billing.html">Billing</a>
                    <a class="dropdown-item" href="account-notifications.html">Notifications</a>
                  </div>
                </div>
                <div class="btn-group" role="group">
                  <button id="btn-group-boards" type="button" class="btn btn-neutral btn-icon" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="far fa-chart-line"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">Board</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-boards">
                    <a class="dropdown-item" href="board-overview.html">Overview</a>
                    <a class="dropdown-item" href="board-projects.html">Projects</a>
                    <a class="dropdown-item" href="board-tasks.html">Tasks</a>
                    <a class="dropdown-item" href="board-connections.html">Connections</a>
                  </div>
                </div>
                <div class="btn-group" role="group">
                  <button id="btn-group-listing" type="button" class="btn btn-neutral btn-icon rounded-right" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="far fa-list-ul"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">Listing</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-settings">
                    <span class="dropdown-header">Tables</span>
                    <a class="dropdown-item" href="listing-orders.html">Orders</a>
                    <a class="dropdown-item" href="listing-projects.html">Projects</a>
                    <span class="dropdown-header">Flex</span>
                    <a class="dropdown-item" href="listing-users.html">Users</a>
                  </div>
                </div>
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
            <form action="/user/{{$user->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
              <!-- Password -->
              <div class="actions-toolbar py-2 mb-4">
                <h5 class="mb-1">Change password</h5>
                <p class="text-sm text-muted mb-0">You can help us, by filling your data, create you a much better experience using our website.</p>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Old password</label>
                    <input class="form-control" type="password" name="password">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">New password</label>
                    <input class="form-control" type="password" name="newpassword">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Confirm password</label>
                    <input class="form-control" type="confirmpassword">
                  </div>
                </div>
              </div>
              <div class="mt-4">
                <button type="button" class="btn btn-sm btn-primary">Update password</button>
                <a href="recover.html" class="btn btn-sm btn-secondary">I forgot my password</a>
              </div>
            </form>
            <!-- Username -->
            <div class="mt-5 pt-5 delimiter-top">
              <div class="actions-toolbar py-2 mb-4">
                <h5 class="mb-1">Change username</h5>
                <p class="text-sm text-muted mb-0">You can help us, by filling your data, create you a much better experience using our website.</p>
              </div>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-change-username">Change username</button>
              <!-- Modal -->
              <div class="modal fade" id="modal-change-username" tabindex="-1" role="dialog" aria-labelledby="modal-change-username" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <form>
                    <div class="modal-content">
                      <div class="modal-header">
                        <div class="modal-title d-flex align-items-center" id="modal-title-change-username">
                          <div>
                            <div class="icon icon-sm icon-shape icon-info rounded-circle shadow mr-3">
                              <i class="far fa-user"></i>
                            </div>
                          </div>
                          <div>
                            <h6 class="mb-0">Change username</h6>
                          </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="form-control-label">Old username</label>
                              <input class="form-control" type="text">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="form-control-label">New username</label>
                              <input class="form-control" type="text">
                            </div>
                          </div>
                        </div>
                        <div class="px-5 pt-4 mt-4 delimiter-top text-center">
                          <p class="text-muted text-sm">You will receive an email where you will be asked to confirm this action in order to be completed.</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Change my username</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Delete -->
            <div class="mt-5 pt-5 delimiter-top">
              <div class="actions-toolbar py-2 mb-4">
                <h5 class="mb-1">Delete account</h5>
                <p class="text-sm text-muted mb-0">Deleting your account is ireversible and can affect past activites.</p>
              </div>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-account">Delete account</button>
              <!-- Modal -->
              <div class="modal modal-danger fade" id="modal-delete-account" tabindex="-1" role="dialog" aria-labelledby="modal-delete-account" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <form class="form-danger">
                    <div class="modal-content">
                      <div class="modal-body">
                        <div class="text-center">
                          <i class="far fa-exclamation-circle fa-3x opacity-8"></i>
                          <h5 class="text-white mt-4">Should we stop now?</h5>
                          <p class="text-sm text-sm">All your data will be erased. You will no longer be billed, and your username will be available to anyone.</p>
                        </div>
                        <div class="form-group">
                          <label class="form-control-label text-white">You email or username</label>
                          <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label text-white">To verify, type <span class="font-italic">delete my account</span> below</label>
                          <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label text-white">Your password</label>
                          <input class="form-control" type="password">
                        </div>
                        <div class="mt-4">
                          <button type="button" class="btn btn-block btn-sm btn-white text-danger">Delete my account</button>
                          <button type="button" class="btn btn-block btn-sm btn-link text-light mt-4" data-dismiss="modal">Not this time</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 order-lg-1">
            <div data-toggle="sticky" data-sticky-offset="30" data-negative-margin=".card-profile-cover">
              <div class="card">
                <div class="card-header py-3">
                  <span class="h6">Settings</span>
                </div>
                <div class="list-group list-group-sm list-group-flush">
                  <a href="account-profile.html" class="list-group-item list-group-item-action d-flex justify-content-between">
                    <div>
                      <i class="far fa-user-circle mr-2"></i>
                      <span>User Profile</span>
                    </div>
                    <div>
                      <i class="far fa-angle-right"></i>
                    </div>
                  </a>
                  <a href="account-settings.html" class="list-group-item list-group-item-action d-flex justify-content-between">
                    <div>
                      <i class="far fa-cog mr-2"></i>
                      <span>Profile Settings</span>
                    </div>
                    <div>
                      <i class="far fa-angle-right"></i>
                    </div>
                  </a>
                  <a href="account-billing.html" class="list-group-item list-group-item-action d-flex justify-content-between">
                    <div>
                      <i class="far fa-credit-card mr-2"></i>
                      <span>Billing</span>
                    </div>
                    <div>
                      <i class="far fa-angle-right"></i>
                    </div>
                  </a>
                  <a href="account-notifications.html" class="list-group-item list-group-item-action d-flex justify-content-between">
                    <div>
                      <i class="far fa-bell mr-2"></i>
                      <span>Notifications</span>
                    </div>
                    <div>
                      <i class="far fa-angle-right"></i>
                    </div>
                  </a>
                </div>
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
              <p class="text-sm mb-0">&copy; Purpose. 2019 <a href="https://webpixels.io/" target="_blank">Webpixels</a>. All rights reserved.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-sm-0">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="../utility/support.html">Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../utility/terms.html">Terms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../utility/privacy.html">Privacy</a>
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
  <div class="customizer">
    <a href="#modal-customizer" class="btn btn-warning btn-lg btn-icon-only rounded-circle text-white hover-scale-110 shadow-lg mr-3" data-toggle="modal">
      <span class="btn-inner--icon"><i class="far fa-palette"></i></span>
    </a>
    <a href="../../docs/support.html" class="btn btn-lg btn-white btn-icon-only rounded-circle hover-scale-110 shadow-lg mr-3 d-none d-lg-inline-block">
      <span class="btn-inner--icon"><i class="far fa-question"></i></span>
    </a>
    <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-lg btn-white btn-icon-only rounded-circle hover-scale-110 shadow-lg d-none d-lg-inline-block">
      <span class="btn-inner--icon"><i class="far fa-shopping-basket"></i></span>
    </a>
  </div>
  <!-- Customizer modal -->
  <div class="modal fade fixed-right" id="modal-customizer" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical" role="document">
      <form class="modal-content" id="form-customizer">
        <div class="modal-body">
          <!-- Close -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="left" title="Close Customizer">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="text-center mx-auto mt-4 mb-5" style="width: 80px;">
            <img alt="Image placeholder" src="../../assets/img/icons/essential/detailed/Click.svg" class="svg-inject img-fluid">
          </div>
          <h5 class="text-center mb-2">Choose (your) Purpose</h5>
          <p class="text-center mb-4">
            Customize your preview experience by selecting skin colors and modes.
          </p>
          <hr class="mb-4">
          <!-- Skin color -->
          <h6 class="mb-1">Skin color</h6>
          <p class="small text-muted mb-3">
            Set a new theme color palette.
          </p>
          <div class="btn-group-toggle row mx-0 mb-5" data-toggle="buttons">
            <label class="btn btn-sm btn-neutral active col mb-2">
              <input type="radio" name="skin" value="default" checked>
              Default
            </label>
            <label class="btn btn-sm btn-neutral col-6 mb-2 mr-0">
              <input type="radio" name="skin" value="blue">
              Blue
            </label>
            <!-- <label class="btn btn-sm btn-neutral col mb-2">
                        <input type="radio" name="skin" value="blue">
                        Blue
                    </label>
                    <label class="btn btn-sm btn-neutral col-6 mb-2 mr-0">
                        <input type="radio" name="skin" value="red">
                        Red
                    </label> -->
          </div>
          <!-- Skin mode -->
          <h6 class="mb-1">Skin mode</h6>
          <p class="small text-muted mb-3">
            Set the theme's mode: light or dark.
          </p>
          <div class="btn-group-toggle row mx-0 mb-4" data-toggle="buttons">
            <label class="btn btn-sm btn-neutral active flex-fill mb-2 mr-2">
              <input type="radio" name="mode" value="light" checked>
              <i class="far fa-sun mr-2"></i> Light
            </label>
            <label class="btn btn-sm btn-neutral flex-fill mb-2 mr-2">
              <input type="radio" name="mode" value="dark">
              <i class="far fa-moon mr-2"></i> Dark
            </label>
          </div>
        </div>
        <div class="modal-footer border-0">
          <button type="submit" class="btn btn-block btn-primary mt-auto">
            Preview
          </button>
        </div>
      </form>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>

<script  src="{{asset('js/purpose.core.js')}}"></script>
      <!-- Page JS -->
      <script src="{{asset('libs/swiper/dist/js/swiper.min.js')}}"></script>
      <!-- Purpose JS -->
      <script src="{{asset('js/purpose.js')}}"></script>
      <!-- Demo JS - remove it when starting your project -->
      <script src="{{asset('js/demo.js')}}"></script>
</body>


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/account/account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:39:11 GMT -->
</html>