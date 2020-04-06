<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/account/account-profile-public.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:39:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sabikick.. Africa to the world">
 <meta name="author" content="Habib">
  @section('title','|{{$user->username}}')
 <!-- Favicon -->
 @laravelPWA
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
  <!-- Font Awesome 5 -->
  <link rel="stylesheet"  href="{{asset('libs/@fortawesome/fontawesome-pro/css/all.min.css')}}"><!-- Page CSS -->
        <link rel="stylesheet"  href="{{asset('libs/swiper/dist/css/swiper.min.css')}}">
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
                                     
                                        <a class="dropdown-item" href="/settings/{{Auth::user()->username}}">
                                            <i class="far fa-cog"></i>Settings
                                        </a>
                                        <a  class="dropdown-item" onclick="seenUpdate()"  href="{{URL::to('/allmessages')}}">
                    <span class="float-right badge badge-primary"><b class="smsnum"id="smsnum"></b></span>
                    <i class="far fa-envelope"></i>Messages
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
        <div class="row justify-content-end">

          <div class=" col-lg-8">

          
            <!-- Salute + Small stats -->
            <div class="row align-items-center mb-4">
              <div class="col-lg-8 col-xl-5 mb-4 mb-md-0">
           
                <span class="h2 mb-0 text-white d-block">{{$user->username}}&nbsp; 
                @if(($user->status) == "verify")
            <img src="{{asset('img/appro.png')}}" style="height:25px;width:25px"/>
            @else
            <img src="{{asset('img/waiting.png')}}" style="height:25px;width:25px" title="Not a verified account"/>
           
                @endif
                </span>
              </div>
              <div class="col-auto flex-fill d-none d-xl-block">
                <ul class="list-inline row justify-content-lg-end mb-0">
                  <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                    <span class="badge badge-dot text-white">
                      <i class="bg-success"></i>Followers
                    </span>
                    <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                     {{count($user->profile->followers)}}
                    
                    </a>
                  </li>
                  <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                    <span class="badge badge-dot text-white">
                      <i class="bg-warning"></i>Following
                    </span>
                    <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                    {{count($user->following)}}
                     
                    </a>
                  </li>
                  <li class="list-inline-item col-sm-4 col-md-auto px-3 my-2 mx-0">
                    <span class="badge badge-dot text-white">
                      <i class="bg-danger"></i>Article(s)
                    </span>
                    <a class="d-sm-block h5 text-white font-weight-bold pl-2" href="#">
                  
                     {{count($user->posts) ?? 'N/A'}}
                     </a>
                
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Account navigation -->
            <div class="d-flex">
              <a href="/{{Auth::user()->username}}" class="btn btn-icon btn-group-nav shadow btn-neutral">
                <span class="btn-inner--icon"><i class="far fa-user"></i></span>
                <span class="btn-inner--text d-none d-md-inline-block">My Profile</span>
              </a>
              <div class="btn-group btn-group-nav shadow ml-auto" role="group" aria-label="Basic example">
              
              <div class="btn-group" role="group">
              
                  <button id="btn-group-boards" type="button" class="btn btn-neutral btn-icon" data-toggle="dropdown" data-offset="0,8" aria-haspopup="true" aria-expanded="false">
                    <span class="btn-inner--icon"><i class="far fa-chart-line"></i></span>
                    <span class="btn-inner--text d-none d-sm-inline-block">My Connections</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="btn-group-boards">
                    <a class="dropdown-item" href="/getfollower"> {{count($user->profile->followers)}} followers</a>
                    <a class="dropdown-item" href="/getfollowing"> {{count($user->following)}} Following</a>
                  
                  </div>

                </div>


              </div>
              
            </div>

            
          </div>
        </div>
      </div>
    </section>
    <section class="pt-5 pt-lg-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div data-toggle="sticky" data-sticky-offset="30" data-negative-margin=".card-profile-cover">
              <div class="card card-profile border-0">
                <div class="card-profile-cover">
                  <img alt="Image placeholder" src="{{$user->profile->profileimage()}}" style="height:200px;width:350px; -webkit-filter: blur(5px);filter: blur(2px);"class="card-img-top">
                </div>
                <a href="#" class="mx-auto">
                  <img alt="Image placeholder" src="{{$user->profile->profileimage()}}" class="card-profile-image avatar rounded-circle shadow hover-shadow-lg">
                </a>
                <div class="card-body p-3 pt-0 text-center">
                  <h5 class="mb-0">{{$user->name}}</h5>
                  <span class="d-block text-muted mb-3">{{$user->usertype}}</span>
              
                  <div class="actions d-flex justify-content-between mt-3 pt-3 px-5 delimiter-top">
                 
                  
                 
                  </div>
                </div>
<br>
                <div class="card-body p-3 pt-0 text-center">
              @if((($user->usertype) == 'player') && (($user->status) == 'disable'))
              @endif
    @if(($user->status) == 'verify')
<p class="btn btn-info">Account has been verified by the administrator, you can make deals with him/her</p>
@endif
@if(($user->status) == 'suspended')
<p class="btn btn-warning">Account has been suspended by the administrator, please be careful</p>
@endif
@if(($user->status) == 'disable' && (!($user->usertype) == 'player'))
<p class="btn btn-danger">Account has been <b>disabled</b> by the administrator, please be careful</p>
@endif

           
                 
                </div>
              </div>
            </div>
          </div>



          <div class="col-lg-8 mt-lg-5">
            <!-- Change avatar -->
            <!-- <div class="card bg-gradient-warning hover-shadow-lg">
              <div class="card-body py-3">
                <div class="row row-grid align-items-center">
                  <div class="col-lg-8">
                    <div class="media align-items-center">
                      <a href="#" class="avatar avatar-lg rounded-circle mr-3">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg">
                      </a>
                      <div class="media-body">
                        <h5 class="text-white mb-0">Heather Wright</h5>
                        <div>
                          <form>
                            <input type="file" name="file-1[]" id="file-1" class="custom-input-file custom-input-file-link" data-multiple-caption="{count} files selected" multiple />
                            <label for="file-1">
                              <span class="text-white">Change avatar</span>
                            </label>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto flex-fill mt-4 mt-sm-0 text-sm-right d-none d-lg-block">
                    <a href="#" class="btn btn-sm btn-white rounded-pill btn-icon shadow">
                      <span class="btn-inner--icon"><i class="far fa-fire"></i></span>
                      <span class="btn-inner--text">Upgrade to Pro</span>
                    </a>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- Timeline -->

            @if(($user->usertype == 'agent' || $user->usertype == 'scout' || $user->usertype == 'coach' || $user->usertype == 'club') & ($user->status == 'disable'))

 <p style="color:#000000">This account is currently under review by the administrator, we will get back to you shortly or kindly refresh this page.If you own this account, please update your profile for fast verification</p>

 @else
            <div class="card">
              <div class="card-header pt-4 pb-2">
              
 <!-- Button trigger modal -->

                <div class="d-flex align-items-center">

                  <a href="#" class="avatar rounded-circle shadow">
                    <img alt="Image placeholder"  src="{{$user->profile->profileimage()}}" style="height:47px">
                  </a>
                  
                  <div class="avatar-content">
                    <h6 class="mb-0">{{$user->username}} </h6>
                    <small class="d-block text-muted"><i class="far fa-clock mr-2"></i>3 hrs ago</small>
                  </div>
                </div>
              </div>
      
              <div class="card-body">
              <p>{{$user->profile->bio ?? 'No bio Available'}}</p>
               <!-- Badges -->
                <div class="d-lg-flex mt-4">
                  <a href="#" class="d-flex align-items-center mr-lg-5 mb-3 mb-lg-0">
                    <div>
                      <div class="icon icon-sm bg-gradient-success text-white rounded-circle icon-shape">
                        <i class="far fa-user-ninja"></i>
                      </div>
                    </div>
                    <div class="pl-3">
                      <span class="h6">{{count($user->profile->followers)}} Followers</span>
                    </div>
                  </a>
                  <a href="#" class="d-flex align-items-center mr-lg-5 mb-3 mb-lg-0">
                    <div>
                      <div class="icon icon-sm bg-gradient-warning text-white rounded-circle icon-shape">
                        <i class="far fa-user-friends"></i>
                      </div>
                    </div>
                    <div class="pl-3">
                      <span class="h6"> {{count($user->following)}} following</span>
                    </div>
                  </a>
                  <a href="#" class="d-flex align-items-center mr-lg-5 mb-3 mb-lg-0">
                    <div>
                   
                    </div>
                    <div class="pl-3">
                @if(Auth::user()->id == $user->id)

@else
                <section id="app">
                                     <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                                    </section>
@endif
                    </div>

                    
                  </a>

                </div>
                @if(Auth::user()->id == $user->id)

@else
      
                <a href="{{URL::to('/message/'.$user->id)}}"> 
                <div class="pt-5 mt-5 delimiter-top">
               <button class="btn btn-success"><span class="far-fa-comment"></span> Start a chat with {{$user->username}}</button>
                </div>
                </a>
@endif

                <div class="pt-5 mt-5 delimiter-top">
                  <!-- Title -->
                  <h6 class="mb-4">
                    <i class="far fa-file-signature mr-2"></i>Experience
                  </h6>
                  <!-- Timeline -->
                  <div class="timeline timeline-one-side" data-timeline-content="axis">
                    <div class="timeline-block">
                      <span class="timeline-step border-primary"></span>
                      <div class="timeline-content">
                        <small class="text-muted font-weight-bold">{{$user->profile->datefrom}} - {{$user->profile->dateto}}</small>
                        <h6>{{$user->profile->position}}</h6>
                        <p class="text-sm lh-160">{{$user->profile->bio ?? 'No bio'}}</p>
                      
                      </div>
                    </div>
                   
                  </div>
                </div>
                <div class="pt-5 mt-5 delimiter-top">
                  <!-- Title -->
                  <h6>
                    <i class="far fa-user-n mr-2 mb-4"></i>Download {{$user->username}}'s CV</i>
                  </h6>
                  @if(($user->profile->cv) == '')

@else
<button class="btn btn-primary"> 
         
         <a  href="/cvdownload/{{$user->profile->cv}}" style="color:#ffffff">Download CV</a> </button>
       

@endif

            
                  <!-- Skil badges -->
                  <div>
                  <div class="row">
                  

                  <div class="pt-5 mt-5 delimiter-top">
          
                <div class="row">
                  <div class="col" style="color:#000000">
                   <h4>Personal Details</h4> 
                   <p><b>Phone number: </b>{{$user->profile->phone ?? 'N/A'}}</p>
                   <p><b>Date of Birth: </b>{{date('M j, Y',strtotime($user->profile->birthday)) ?? 'N/A'}}</p>

                  
                   <p><b>Gender:</b> {{$user->profile->gender ?? 'N/A'}}</p>
                   <p><b>House address:</b> {{$user->profile->address ?? 'N/A'}}</p>
                   <p><b>City: </b>{{$user->profile->city ?? 'N/A'}}</p>
                   <p><b>Country:</b> {{$user->profile->country ?? 'N/A'}}</p>
                  </div>
                </div>
              </div>

                </div>
                  </div>
                </div>
              
              </div>

            </div>


            <!-- Post -->
          

          </div>
        </div>
      </div>
    </section>

   
            <section class="slice slice-lg bg-section-secondary">
                <div class="container">
                    <div class="mb-5 text-center">
                        <h3 class=" mt-4">My Video clips</h3>
                        <div class="fluid-paragraph mt-3">
                          </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="swiper-js-container overflow-hidden">
                                <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0" data-swiper-sm-items="2" data-swiper-xl-items="3">
                                    <div class="swiper-wrapper">
              @if(count($user->videourl) == 0)
              @if((auth()->user()->id) == $user->id)
<a href="/url/create" style="padding-top:50px">
<div style="background-color:blue;height:100px;width:100px;border-radius:400px;border-shadow:2px;">
<p style="color:#ffffff;float:center;padding-top:15px;padding-left:38px;font-size:40px">+</p>
</div>
</a>
@else
No video post here
@endif

@else
        @foreach($user->videourl as $pos)

   
                                        <div class="swiper-slide p-4">
                                        <div class="card hover-shadow-lg hover-translate-y-n10">
            
            
              <a href="#">
              
                <iframe 
src="https://www.youtube.com/embed/{{$pos->url}}"  class="card-img-top">
</iframe>
              </a>
              <div class="card-body py-5 text-center">
                <a href="#" class="d-block h5 lh-150">{{$pos->title}}</a>
                <a href="#" class="d-block h5 lh-150">{{$pos->created_at}}</a>
             </div>
             
            </div>
                                        </div>
@endforeach
@if((auth()->user()->id) == $user->id)
<a href="/url/create" style="padding-top:50px">
<div style="background-color:blue;height:100px;width:100px;border-radius:400px;border-shadow:2px;">
<p style="color:#ffffff;float:center;padding-top:15px;padding-left:38px;font-size:40px">+</p>
</div>
</a>
@else

@endif

@endif






                                    </div>

                                    
                                </div>


                                
                                <!-- Add Pagination -->
                                <div class="swiper-pagination w-100 mt-4 d-flex align-items-center justify-content-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




            <!-- <section class="slice slice-lg bg-section-secondary">
                <div class="container">
                    <div class="mb-5 text-center">
                        <h3 class=" mt-4">My Blog post</h3>
                        <div class="fluid-paragraph mt-3">
                          </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="swiper-js-container overflow-hidden">
                                <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0" data-swiper-sm-items="2" data-swiper-xl-items="3">
                                    <div class="swiper-wrapper">
              @if(count($user->posts) == 0)
              @if((auth()->user()->id) == $user->id)
<a href="/posts/create" style="padding-top:50px">
<div style="background-color:blue;height:100px;width:100px;border-radius:400px;border-shadow:2px;">
<p style="color:#ffffff;float:center;padding-top:15px;padding-left:38px;font-size:40px">+</p>
</div>
</a>
@else
No video post here
@endif

@else
        @foreach($user->posts as $pos)

   
                                        <div class="swiper-slide p-4">
                                        <div class="card hover-shadow-lg hover-translate-y-n10">
        
              <a href="#">
                <img alt="Image placeholder" src="/storage/{{$pos->image}}" class="card-img-top">
              </a>
            
              <div class="card-body py-5 text-center">
                <a href="#" class="d-block h5 lh-150">{{$pos->title}}</a>
             </div>
             
            </div>
                                        </div>
@endforeach
@if((auth()->user()->id) == $user->id)
<a href="/posts/create" style="padding-top:50px">
<div style="background-color:blue;height:100px;width:100px;border-radius:400px;border-shadow:2px;">
<p style="color:#ffffff;float:center;padding-top:15px;padding-left:38px;font-size:40px">+</p>
</div>
</a>
@else

@endif

@endif






                                    </div>

                                    
                                </div>


                                
                                <div class="swiper-pagination w-100 mt-4 d-flex align-items-center justify-content-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

@endif

@if(($user->is_admin)== 1)
<div class="card">
              <div class="card-header pt-4 pb-2">
              
 <!-- Button trigger modal -->

                <div class="d-flex align-items-center">

                  <a href="#" class="avatar rounded-circle shadow">
                    <img alt="Image placeholder"  src="{{$user->profile->profileimage()}}" style="height:47px">
                  </a>
                  
                  <div class="avatar-content">
                    <h6 class="mb-0">{{$user->username}} </h6>
                    <small class="d-block text-muted"><i class="far fa-clock mr-2"></i>3 hrs ago</small>
                  </div>
                </div>
              </div>
      
              <div class="card-body">
              <p>{{$user->profile->bio ?? 'No bio Available'}}</p>
               <!-- Badges -->
                <div class="d-lg-flex mt-4">
                  <a href="#" class="d-flex align-items-center mr-lg-5 mb-3 mb-lg-0">
                    <div>
                      <div class="icon icon-sm bg-gradient-success text-white rounded-circle icon-shape">
                        <i class="far fa-user-ninja"></i>
                      </div>
                    </div>
                    <div class="pl-3">
                      <span class="h6">{{count($user->profile->followers)}} Followers</span>
                    </div>
                  </a>
                  <a href="#" class="d-flex align-items-center mr-lg-5 mb-3 mb-lg-0">
                    <div>
                      <div class="icon icon-sm bg-gradient-warning text-white rounded-circle icon-shape">
                        <i class="far fa-user-friends"></i>
                      </div>
                    </div>
                    <div class="pl-3">
                      <span class="h6"> {{count($user->following)}} following</span>
                    </div>
                  </a>
                  <a href="#" class="d-flex align-items-center mr-lg-5 mb-3 mb-lg-0">
                    <div>
                   
                    </div>
                    <div class="pl-3">
                @if(Auth::user()->id == $user->id)

@else
                <section id="app">
                                     <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                                    </section>
@endif
                    </div>

                    
                  </a>
                </div>
                <div class="pt-5 mt-5 delimiter-top">
                  <!-- Title -->
                  <h6 class="mb-4">
                    <i class="far fa-file-signature mr-2"></i>Experience
                  </h6>
                  <!-- Timeline -->
                  <div class="timeline timeline-one-side" data-timeline-content="axis">
                    <div class="timeline-block">
                      <span class="timeline-step border-primary"></span>
                      <div class="timeline-content">
                        <small class="text-muted font-weight-bold">{{$user->profile->datefrom}} - {{$user->profile->dateto}}</small>
                        <h6>{{$user->profile->position}}</h6>
                        <p class="text-sm lh-160">{{$user->profile->bio ?? 'No bio'}}</p>
                      
                      </div>
                    </div>
                   
                  </div>
                </div>
                <div class="pt-5 mt-5 delimiter-top">
                  <!-- Title -->
                  <h6>
                    <i class="far fa-user-n mr-2 mb-4"></i>Download {{$user->username}}'s CV</i>
                  </h6>
                  @if(($user->profile->cv) == '')

@else
<button class="btn btn-primary"> 
         
         <a  href="/cvdownload/{{$user->profile->cv}}" style="color:#ffffff">Download CV</a> </button>
       

@endif

            
                  <!-- Skil badges -->
                  <div>
                  <div class="row">
                  

                  <div class="pt-5 mt-5 delimiter-top">
          
                <div class="row">
                  <div class="col" style="color:#000000">
                   <h4>Personal Details</h4> 
                   <p><b>Phone number: </b>{{$user->profile->phone ?? 'N/A'}}</p>
                   <p><b>Date of Birth: </b>{{$user->profile->birthday ?? 'N/A'}}</p>
                   <p><b>Gender:</b> {{$user->profile->gender ?? 'N/A'}}</p>
                   <p><b>House address:</b> {{$user->profile->address ?? 'N/A'}}</p>
                   <p><b>City: </b>{{$user->profile->city ?? 'N/A'}}</p>
                   <p><b>Country:</b> {{$user->profile->country ?? 'N/A'}}</p>
                  </div>
                </div>
              </div>

                </div>
                  </div>
                </div>
              
              </div>

            </div>


            <!-- Post -->
          

          </div>
        </div>
      </div>
    </section>

   
            <section class="slice slice-lg bg-section-secondary">
                <div class="container">
                    <div class="mb-5 text-center">
                        <h3 class=" mt-4">My Video clips</h3>
                        <div class="fluid-paragraph mt-3">
                          </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="swiper-js-container overflow-hidden">
                                <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0" data-swiper-sm-items="2" data-swiper-xl-items="3">
                                    <div class="swiper-wrapper">
              @if(count($user->videourl) == 0)
              @if((auth()->user()->id) == $user->id)
<a href="/url/create" style="padding-top:50px">
<div style="background-color:blue;height:100px;width:100px;border-radius:400px;border-shadow:2px;">
<p style="color:#ffffff;float:center;padding-top:15px;padding-left:38px;font-size:40px">+</p>
</div>
</a>
@else
No video post here
@endif

@else
        @foreach($user->videourl as $pos)

   
                                        <div class="swiper-slide p-4">
                                        <div class="card hover-shadow-lg hover-translate-y-n10">
            
            
              <a href="#">
              
                <iframe 
src="https://www.youtube.com/embed/{{$pos->url}}"  class="card-img-top">
</iframe>
              </a>
              <div class="card-body py-5 text-center">
                <a href="#" class="d-block h5 lh-150">{{$pos->title}}</a>
                <a href="#" class="d-block h5 lh-150">{{$pos->created_at}}</a>
             </div>
             
            </div>
                                        </div>
@endforeach
@if((auth()->user()->id) == $user->id)
<a href="/url/create" style="padding-top:50px">
<div style="background-color:blue;height:100px;width:100px;border-radius:400px;border-shadow:2px;">
<p style="color:#ffffff;float:center;padding-top:15px;padding-left:38px;font-size:40px">+</p>
</div>
</a>
@else

@endif

@endif






                                    </div>

                                    
                                </div>


                                
                                <!-- Add Pagination -->
                                <div class="swiper-pagination w-100 mt-4 d-flex align-items-center justify-content-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




            <section class="slice slice-lg bg-section-secondary">
                <div class="container">
                    <div class="mb-5 text-center">
                        <h3 class=" mt-4">My Blog post</h3>
                        <div class="fluid-paragraph mt-3">
                          </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="swiper-js-container overflow-hidden">
                                <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0" data-swiper-sm-items="2" data-swiper-xl-items="3">
                                    <div class="swiper-wrapper">
              @if(count($user->posts) == 0)
              @if((auth()->user()->id) == $user->id)
<a href="/posts/create" style="padding-top:50px">
<div style="background-color:blue;height:100px;width:100px;border-radius:400px;border-shadow:2px;">
<p style="color:#ffffff;float:center;padding-top:15px;padding-left:38px;font-size:40px">+</p>
</div>
</a>
@else
No video post here
@endif

@else
        @foreach($user->posts as $pos)

   
                                        <div class="swiper-slide p-4">
                                        <div class="card hover-shadow-lg hover-translate-y-n10">
        
              <a href="#">
                <img alt="Image placeholder" src="/storage/{{$pos->image}}" class="card-img-top">
              </a>
            
              <div class="card-body py-5 text-center">
                <a href="#" class="d-block h5 lh-150">{{$pos->title}}</a>
             </div>
             
            </div>
                                        </div>
@endforeach
@if((auth()->user()->id) == $user->id)
<a href="/posts/create" style="padding-top:50px">
<div style="background-color:blue;height:100px;width:100px;border-radius:400px;border-shadow:2px;">
<p style="color:#ffffff;float:center;padding-top:15px;padding-left:38px;font-size:40px">+</p>
</div>
</a>
@else

@endif

@endif






                                    </div>

                                    
                                </div>


                                
                                <!-- Add Pagination -->
                                <div class="swiper-pagination w-100 mt-4 d-flex align-items-center justify-content-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endif

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
  
  <script> 
      
//  setInterval(soundCheck,1000); 
//  var first_run=0;
// function soundCheck() {
  

//    var oldMessage=$('#sound_check').val();
//     $.ajax({
//         type:'get',
//         url:'{{URL::to('/sound')}}',
//         datatype:'html',
//         success:function(response){
//             $('#sound_check').val(response);
       
           
//             if (response != oldMessage) {
//                 response=oldMessage;
//                             if(first_run===0) {
//                                 first_run = 1; //if the user just loaded the page, we want to acknowledge that so the chime will play next time if there is a new chat
//                             } else {
//                              var audio = document.getElementById("audio");
//                              audio.play();
//                             }
                   
//                }
           
           
            
//            }
//         });
// }
  
  </script>
<script> 
 setInterval(seenMessage,1000); 
 setInterval(allMessageView,1000); 

function seenMessage() {
   

    $.ajax({
        type:'get',
        url:'{{URL::to('/seen')}}',
        datatype:'html',
        success:function(response){
            
            if(response > 0){
                $('#smsnum').show();
                $('#smsnum').html(response);

            }else{
                $('#smsnum').hide();
            }
             
           }
        });
}
function allMessageView() {
   

    $.ajax({
        type:'get',
        url:'{{URL::to('/allmessageview')}}',
        datatype:'html',
        success:function(response){
           $('#all-chat-message').html(response);
           }
        });
}

function seenUpdate() {

    $.ajax({
        type:'get',
        url:'{{URL::to('/seenUpdate')}}',
        datatype:'html'
        });
}
function singleSeenUpdate(id) {
 var sender=id;
    $.ajax({
        type:'get',
        url:'{{URL::to('/singleSeenUpdate')}}/'+sender,
        datatype:'html'
        });
}




</script>  

<script src="{{asset('js/chat.js')}}"></script>
  <script src="{{ asset('js/app.js') }}"></script>

  <script  src="{{asset('js/purpose.core.js')}}"></script>
        <!-- Page JS -->
        <script src="{{asset('libs/swiper/dist/js/swiper.min.js')}}"></script>
        <!-- Purpose JS -->
        <script src="{{asset('js/purpose.js')}}"></script>
        <!-- Demo JS - remove it when starting your project -->
        <script src="{{asset('js/demo.js')}}"></script>
     
     
        <!-- Global site tag (gtag.js) - Google Analytics -->
     
</body>


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/pages/account/account-profile-public.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:39:11 GMT -->
</html>