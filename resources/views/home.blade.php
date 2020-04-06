
<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:37:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Sabikick.. Africa to the world">
        <meta name="author" content="Habib">
        @section('title','|{{$user->username}}')
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

        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
      <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    </head>

    <body>
   
        <!-- <div class="alert alert-danger bg-gradient-danger text-white fixed-top alert-flush alert-dismissible border-0 shadow-lg fade show mb-0" role="alert">
            <div class="container">
                The heat of the summer comes with a <strong>35% discount</strong>. Use the <strong>SUMMER35</strong> code until June 15h and get started with this UI Kit to build your next amazing website.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span class="text-white opacity-10" aria-hidden="true">&times;</span>
                </button>
            </div>
        </div> -->
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
                    <a class="navbar-brand mr-lg-5" href="/">
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
        <div id="omnisearch" class="omnisearch">
            <div class="container">
                <!-- Search form -->
                <form class="omnisearch-form">
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-flush">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-search"></i></span>
                            </div>
                            <input type="text" name="country_name" id="country_name"  class="form-control" value="Type and hit enter ...">
                        </div>
                    </div>
                </form>
                <div class="omnisearch-suggestions">
                    <h6 class="heading">Search Suggestions</h6>
                    <div class="row">
                        <div class="col-sm-6">
                        <div id="countryList">
    </div>

                        </div>

                    </div>
                    {{ csrf_field() }}
                </div>
            </div>
        </div>
        <div class="main-content">
            <!-- Header (v1) -->
   <section class="slice slice-lg bg-cover bg-size--cover" data-offset-top="#header-main" style="background-image: url({{asset('img/slide-3.jpg')}});height:90vh">
      <span class="mask bg-gradient-dark opacity-7"></span>
      <div class="container pt-5 pt-lg-9 pb-lg-7">
        <div class="row justify-content-center">
          <div class="col-lg-9">
      
          <h2 class="h1 text-white mb-4">We <span class="text-info typed" id="type-example-1" data-type-this="Restore the glory of African players..,  find hope in players., showcase players based on excellence and integrity., are the best football networking agent in Africa."></span></h2>
             
          </div>
        </div>
      </div>
      <a href="#sct-topics" class="tongue tongue-bottom tongue-section-primary scroll-me">
        <i class="far fa-angle-down"></i>
      </a>
    </section>
            <!-- Features (v1) -->
            <section class="slice slice-xl" data-offset-top="#header-main">
            <div class="container">
     
     <div class="row row-grid  delimiter-top">
       <div class="col-lg-4">
         <div class="d-flex align-items-center">
         <img alt="Image placeholder" src="{{asset('img/analyseee.png')}}" class="svg-inject" style="width: 90px; height: 90px;">
            <div class="icon-text px-4">
             <h5 class="mb-1">Agents & Scouts</h5>
             <p class="mb-0">You bring your passion. We take care of the rest.</p>
           </div>
         </div>
       </div>
       <div class="col-lg-4">
         <div class="d-flex align-items-center">
           <img alt="Image placeholder" src="{{asset('img/realsearch.png')}}" class="svg-inject" style="width: 90px; height: 90px;">
           <div class="icon-text px-4">
             <h5 class="mb-1">Search</h5>
             <p class="mb-0">We give all ...</p>
           </div>
         </div>
       </div>
       <div class="col-lg-4">
         <div class="d-flex align-items-start">
           <img alt="Image placeholder" src="{{asset('img/portfolio.png')}}" class="svg-inject" style="width: 90px; height: 90px;">
           <div class="icon-text px-4">
             <h5 class="mb-1">Players & Coaches</h5>
             <p class="mb-0">We have collections of world class players and coaches ready to explore on Sabikick </p>
           </div>
         </div>
       </div>
     </div>
   </div>
    </section>
            <!-- Features (v2) -->
            <section class="slice slice-lg">
                <div class="container">
                    <div class="row row-grid justify-content-around align-items-center">
                        <div class="col-lg-5 order-lg-2">
                            <div class=" pr-lg-4">
                                <h5 class=" h3">Get Connected to the best football network now.</h5>
                              </div>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <img alt="Image placeholder" src="{{asset('img/2.jpg')}}" class="img-fluid img-center">
                        </div>
                    </div>
                </div>
            </section>

            <!-- <iframe width="420" height="315"
src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1">
</iframe> -->
            <!-- Features (v3) -->
          
            <!-- Features (v4) -->
            <section class="slice slice-lg bg-section-secondary overflow-hidden">
                <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
                    <figure class="w-100">
                        <img alt="Image placeholder" src="{{asset('img/svg/backgrounds/bg-2.svg')}}" class="svg-inject" style="height: 1000px;">
                    </figure>
                </div>
                <div class="container position-relative zindex-100">
                    <div class="mb-5 px-3 text-center">
                        <span class="badge badge-soft-success badge-pill badge-lg">
                          Our Values
                        </span>
                        <h3 class=" mt-4">Sabikick... Africa to the world!!</h3>
                       
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card px-3">
                                <div class="card-body py-5">
                                    <div class="d-flex align-items-center">
                                        <div class="icon bg-gradient-primary text-white rounded-circle icon-shape shadow-primary">
                                           1
                                            </div>
                                        <div class="icon-text pl-4">
                                           
                                        </div>
                                    </div>
                                    <h4 class="mt-4 mb-0" style="color:#000000">Restoring the glory of African players</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card px-3">
                                <div class="card-body py-5">
                                    <div class="d-flex align-items-center">
                                        <div class="icon bg-gradient-warning text-white rounded-circle icon-shape shadow-warning">
                                         2
                                        </div>
                                        <div class="icon-text pl-4">
                                           </div>
                                    </div>
                                    <h4 class="mt-4 mb-0" style="color:#000000">We find hope in players</h4>
                               
                        
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card px-3">
                                <div class="card-body py-5">
                                    <div class="d-flex align-items-center">
                                        <div class="icon bg-gradient-info text-white rounded-circle icon-shape shadow-info">
                                           3
                                        </div>
                                        <div class="icon-text pl-4">
                                 
                                        </div>
                                    </div>
                                    <h4 class="mt-4 mb-0" style="color:#000000">We showcase players based on excellence and integrity</h4>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Features (v5) -->
            <section class="slice slice-sm bg-section-secondary" id="sct-faq">
      <div class="container">
        <div class="row row-grid">
    
          <div class="col-lg-10 ml-lg-auto">
            <!-- Theme integration -->
            <div class="mb-5">
              <h4 class="mb-4" id="theme-integration">Our Faqs</h4>
              <!-- Accordion -->
              <div id="accordion-1" class="accordion accordion-spaced">
                <!-- Accordion card 1 -->

                @foreach($faq as $fq)
                <div class="card">
                  <div class="card-header py-4" id="heading-1-1" data-toggle="collapse" role="button" data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                    <h6 class="mb-0"><i class="far fa-file-pdf mr-3"></i>{{$fq->header ?? 'No header'}}</h6>
                  </div>
                  <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1" data-parent="#accordion-1">
                    <div class="card-body">
                     <p>{{$fq->body ?? 'N/A'}}</p>
                      </div>
                  </div>
                </div>
               @endforeach

                <!-- Accordion card 2 -->
             
              </div>
              <!-- Scroll to top -->
              <div class="text-right py-4">
                <a href="#theme-integration" data-scroll-to data-scroll-to-offset="50" class="text-sm font-weight-bold">Back to top<i class="far fa-long-arrow-alt-up ml-2"></i></a>
              </div>
            </div>
            <!-- Customization  -->
           
          </div>
        </div>
      </div>
    </section>
            <!-- Testimonials (v1) -->
            <section class="slice slice-lg bg-section-secondary">
                <div class="container">
                    <div class="mb-5 text-center">
                        <h3 class=" mt-4">What our users say</h3>
                        <div class="fluid-paragraph mt-3">
                            <p class="lead lh-180">We have served them better than others, here are lists of feedbacks from our users.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="swiper-js-container overflow-hidden">
                                <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0" data-swiper-sm-items="2" data-swiper-xl-items="3">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide p-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <img alt="Image placeholder" src="{{asset('img/theme/light/team-1-800x800.jpg')}}" class="avatar  rounded-circle">
                                                        </div>
                                                        <div class="pl-3">
                                                            <h5 class="h6 mb-0">Oloye Bukoye</h5>
                                                            <small class="d-block text-muted">Agent</small>
                                                        </div>
                                                    </div>
                                                    <p class="mt-4 lh-180">I used to have tough time searching for players to boost my business, but since i joined sabikick, i get all best players at my fingertips in the comfort of my room.</p>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide p-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <img alt="Image placeholder" src="{{asset('img/theme/light/team-1-800x800.jpg')}}" class="avatar  rounded-circle">
                                                        </div>
                                                        <div class="pl-3">
                                                            <h5 class="h6 mb-0">Habib Oladosu</h5>
                                                            <small class="d-block text-muted">Footballer</small>
                                                        </div>
                                                    </div>
                                                    <p class="mt-4 lh-180">I really love this platform, i got connected to my first scout after registering on sabikick by posting my videos daily </p>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide p-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <img alt="Image placeholder" src="{{asset('img/theme/light/team-1-800x800.jpg')}}" class="avatar  rounded-circle">
                                                        </div>
                                                        <div class="pl-3">
                                                            <h5 class="h6 mb-0">Olamide Hamed</h5>
                                                            <small class="d-block text-muted">Coach</small>
                                                        </div>
                                                    </div>
                                                    <p class="mt-4 lh-180">This platform is first of it's kind in Africa, now i can connect to all my players and disseminate information easily to them. Thanks to Sabikick</p>
                                                 
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide p-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <img alt="Image placeholder" src="{{asset('img/theme/light/team-1-800x800.jpg')}}" class="avatar  rounded-circle">
                                                        </div>
                                                        <div class="pl-3">
                                                            <h5 class="h6 mb-0">X-Pillars</h5>
                                                            <small class="d-block text-muted">Club</small>
                                                        </div>
                                                    </div>
                                                    <p class="mt-4 lh-180">Great job done, all thanks to Sabikick,i got my players and coach with all on this platform easily...We going places soon</p>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination w-100 mt-4 d-flex align-items-center justify-content-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Features (v7) -->
            <section class="slice slice-lg bg-section-secondary">
                <div class="container">
                    <div class="mb-5 text-center">
                        <h3 class=" mt-4">Our News and event</h3>
                        <div class="fluid-paragraph mt-3">
                            <p class="lead lh-180">See trending updates posted by our world class users</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="swiper-js-container overflow-hidden">
                                <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0" data-swiper-sm-items="2" data-swiper-xl-items="3">
                                    <div class="swiper-wrapper">
              @if(count($post) == 0)


@else
        @foreach($post as $pos)
                                        <div class="swiper-slide p-4">
                                        <div class="card hover-shadow-lg hover-translate-y-n10">
              <a href="#">
                <img alt="Image placeholder" src="/storage/{{$pos->image}}" class="card-img-top">
              </a>
              <div class="card-body py-5 text-center">
                <a href="#" class="d-block h5 lh-150">{{$pos->title}}</a>
                <h6 class="text-muted mt-4 mb-0">{{date('M j, Y h:ia',strtotime($pos->created_at))}}</h6>
              <span>Posted by </span> <a href="/{{$pos->user->username}}" target="_blank" class="d-block h5 lh-150">{{$pos->user->username}}</a>
              </div>
             
            </div>
                                        </div>
@endforeach


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
            <!-- Call to action (v10) -->
            <section class="slice slice-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-gradient-dark shadow hover-shadow-lg border-0 position-relative zindex-100">
                                <div class="card-body py-5">
                                    <div class="d-flex align-items-start">
                                        <div class="icon">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                        <div class="icon-text">
                                            <h3 class="text-white h4">Our Mission</h3>
                                            <p class="text-white mb-0">Creating the right platform that connects young African football players with scouts, agents, coaches, clubs and fellow players to enable them showcase their talent and get the right career opportunity</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-primary shadow hover-shadow-lg border-0 position-relative zindex-100">
                                <div class="card-body py-5">
                                    <div class="d-flex align-items-start">
                                        <div class="icon text-white">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                        <div class="icon-text">
                                            <h5 class="h4 text-white">Our Values</h5>
                                            <p class="mb-0 text-white">Restoring the glory of African players. <br> we find hope in players <br> We showcase players based on excellence and integrity</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer id="footer-main">
            <div class="footer footer-dark bg-gradient-primary footer-rotate">
                <div class="container">
                    <div class="row pt-md">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <a href="#">
                            <img alt="Image placeholder" src="{{asset('img/newlogo.png')}}" id="navbar-logo" style="height: 50px;">
                    </a>
                            <p>Restoring the glory of African players. <br> we find hope in players <br> We showcase players based on excellence and integrity</p>
                        </div>
                        <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
            <h6 class="heading mb-3">More</h6>
            <ul class="list-unstyled">
              <li><a href="/contactus">Contact Us</a></li>
              <li><a href="/aboutus">About Us</a></li>
              <li><a href="/faqs">Faq</a></li>
              <li><a href="/showallposts">News & Events</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
            <h6 class="heading mb-3">Menu</h6>
            <ul class="list-unstyled text-small">
              <li><a href="/listplayers">Players</a></li>
              <li><a href="/listagents">Agents</a></li>
              <li><a href="/listscouts">Scouts</a></li>
              <li><a href="/listcoaches">Coaches</a></li>
              <li><a href="/listclubs">Clubs</a></li>
            </ul>
          </div>
       
                    </div>
                    <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
                        <div class="col-md-6">
                            <div class="copyright text-sm font-weight-bold text-center text-md-left">
                                &copy; 2018-2019 <a href="https://webpixels.io/" class="font-weight-bold" target="_blank"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
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
    
        <!-- Customizer modal -->
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
      <script  src="{{asset('js/purpose.core.js')}}"></script>
      
        <script src="{{asset('libs/swiper/dist/js/swiper.min.js')}}"></script>
      
        <script src="{{asset('js/purpose.js')}}"></script>
       
        <script src="{{asset('js/demo.js')}}"></script>
     
        <script>
$(document).ready(function(){

 $('#country_name').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#countryList').fadeIn();  
                    $('#countryList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#country_name').val($(this).text());  
        $('#countryList').fadeOut();  
    });  

});
</script>
    </body>


<!-- Mirrored from demo.webpixels.io/purpose-website-ui-kit-v2.0.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2019 11:38:16 GMT -->
</html>
