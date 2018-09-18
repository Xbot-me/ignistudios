<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Igni Studios</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Games Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link rel="icon" 
      type="image/png" 
      href="{{ asset('images/igni.png') }}">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
@include('includes/styles')
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada" rel="stylesheet">
<style>
    .no-dot {
        list-style: none !important;
        font-weight: 1000;
    }
    .callbacks_tabs .callbacks1_tabs {
        display: none !important;
    }
    .title {
        font-family: 'Montserrat Subrayada', sans-serif !important;
        color: #e2ef01 !important;
    }
    .banner-title {
        font-family: 'Montserrat Subrayada', sans-serif !important;
        font-size: 75px !important;
    }
    .welcome {
        border-bottom: none !important;
    }
    #about  , #gallery , #footer{
        background-color: #1e1e1e;
    }
    #markets ,  #team  {
        background-color: #2b2b2b;
    }
    .w3about-text {
        background-color: #2b2b2b;
    }
    .agileits-icon-grid {
        background-color: #1e1e1e;
    }
    .game-item, .game-item:active, .game-item .active {
        background-color: #e2ef01;
    }
    #service-icon {
        background-color: #e2ef01;
    }
    </style>
</head>
<body>
    <!-- banner -->
    

    <div class="banner" style="background: url(storage/{{ setting('site.banner_image') ?: '' }}) no-repeat 0px 0px;background-size: cover;">
        <div class="agileinfo-dot">
            <div class="agileits-logo">
                <h1><a href="/">

                </a></h1>
                <!-- <h1><a href="/"><img src="{{ asset('images/igni.png') }}" style="width: 100px;"></a></h1> -->
            </div>
            <div class="header-top">
                <div class="container">
                    <div class="header-top-info">
                        <nav class="navbar navbar-default" style="margin-top:80px;">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                                <nav>
                                    <ul class="nav navbar-nav no-do">
                                        <li class="active no-dot"><a href="/">Home</a></li>
                                        <li class="no-dot"><a href="#about" class="scroll">About Us</a></li>
                                        <li class="no-dot"><a href="#markets" class="scroll">About Us</a></li>
                                        <li class="no-dot"><a href="#gallery" class="scroll">Our Games</a></li>
                                        <li class="no-dot"><a href="#team" class="scroll">Team</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </div>
            </div>
            <div class="w3layouts-banner-info">
                <div class="container">
                    <div class="w3layouts-banner-slider">
                        <div class="w3layouts-banner-top-slider">
                            <div class="slider">
                                <div class="callbacks_container">
                                    <ul class="rslides callbacks callbacks1" id="slider4">
                                       
                                        @if($bannerTexts)
                                            @foreach($bannerTexts as $data)
                                            <li>
                                                <div class="banner_text">
                                                    <h3 class="banner-title">{{ $data->title }}</h3>
                                                    <p>{{ $data->description }}</p>
                                                    
                                                </div>
                                            </li>
                                            @endforeach
                                        @endif   
                                        
                                    </ul>
                                </div>
                                <div class="clearfix"> </div>
                                <script src="js/responsiveslides.min.js"></script>
                                <script>
                                    // You can also use "$(window).load(function() {"
                                    $(function () {
                                      // Slideshow 4
                                      $("#slider4").responsiveSlides({
                                        auto: true,
                                        pager:true,
                                        nav:true,
                                        speed: 500,
                                        namespace: "callbacks",
                                        before: function () {
                                          $('.events').append("<li>before event fired.</li>");
                                        },
                                        after: function () {
                                          $('.events').append("<li>after event fired.</li>");
                                        }
                                      });
                                
                                    });
                                 </script>
                                <!--banner Slider starts Here-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- about -->
    <div class="about" id="about"> 
        <div class="container"> 
            <div class="welcome">
                <div class="agileits-title"> 
                    <h2 class="title">{{ setting('site.welcome') ?: '' }}</h2>
                    <p>{{ setting('site.welcome_message') ?: '' }}</p>
                </div>
            </div>
            @if(! empty( setting('site.about_us')))
                <div class="about-w3lsrow"> 
                    <div class="col-md-7 col-sm-7 w3about-img" style="background: url(storage/{{ setting('site.about_us_image') ?: '' }})no-repeat 0px 0px;background-size: cover;"> 
                        <div class="w3about-text"> 
                            <h5 class="w3l-subtitle title"> About Us</h5>
                            <p>{{ setting('site.about_us') ?: '' }}</p>
                        </div>
                    </div> 
                <div class="clearfix"> </div>
            </div>
            @endif
            
        </div>
    </div>
    <!-- //about --> 
    <!-- markets -->
    <div class="markets" id="markets">
        <div class="container">
            <div class="agileits-title"> 
                <h3 class="title">Our Services</h3>
            </div>
            <div class="markets-grids">
                <div class="col-md-12 w3ls-markets-grid">
                    <div class="agileits-icon-grid">
                        <div class="icon-left" id="service-icon">
                            <i class="fa fa-gamepad" aria-hidden="true" style="color:black;"></i>
                        </div>
                        <div class="icon-right">
                            <!-- <h5>Suspendisse</h5> -->
                            <p>{{ setting('site.service') ?: '' }}</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //markets -->
    <!-- portfolio -->
    <div class="portfolio" id="gallery">
        <div class="container">
            <div class="agileits-title"> 
                <h3 class="title">Our Games</h3> 
            </div>
            <ul class="simplefilter w3layouts agileits">
                <li class="active w3layouts agileits game-item" data-filter="all">All</li>
                @foreach($games as $game)
                    <li class="w3layouts agileits game-item" data-filter="{{ $game->id }}">{{ $game->name }}</li>
                @endforeach
          </ul>

            <div class="filtr-container w3layouts agileits">
                
                @foreach($gameData as $gameDatum)
                    <div class="filtr-item w3layouts agileits portfolio-t" data-category="{{ $gameDatum['id'] }}" >
                    <a href="{{ asset('storage/' . $gameDatum['image']) }}" class="b-link-stripe w3layouts agileits" onclick="toGame('{{ $gameDatum['link'] }}');">
                        <figure>
                            <img 
                                src="{{ asset('storage/' . $gameDatum['image']) }}" 
                                class="img-responsive w3layouts agileits" 
                                style="max-height: 220px;" 
                                >
                        </figure>
                    </a>
                </div>
                @endforeach
                
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- team -->
    <div class="team" id="team">
        <div class="container">
            <div class="agileits-title"> 
                <h3 class="title">Amazing Team</h3> 
            </div>
            <div class="agileits-team-grids">

                @if($members)
                    @foreach($members as $member)
                        <div class="col-md-4 agileits-team-grid">
                                <div class="team-info">
                                    <img 
                                        class="img-responsive" 
                                        src="{{ asset('storage/' . $member->avatar) }}" 
                                        style="max-height: 425px;width: 352px;" 
                                            >
                                    <div class="team-caption"> 
                                        <h4>{{ $member->name }}</h4>
                                        <p>{{ $member->role }}</p>
                                        <ul>
                                            @if($member->fb_profile_link)
                                                <li><a style="color:white;" href="{{ $member->fb_profile_link }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                @endif
                
                
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team -->
    
    
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="footer-top">
                
                <div class="col-md-9 amet-sed amet-medium">
                    
                    <div class="footer-title">
                        <h3>Contact Us</h3>
                    </div> 
                    <p>{{ setting('site.contact_us') ?: '' }}</p>
                </div>
                <div class="col-md-3 amet-sed ">
                    <div class="footer-title">
                        <h3>Follow Us</h3>
                    </div> 
                    <div class="agileinfo-social-grids">
                        <ul>
                            <li><a href="https://www.facebook.com/IGNIStudios" target="_blank"><i class="fab fa-facebook-f"></i></a></li>

                            <li style="margin-left: 10px;"><a href="https://play.google.com/store/apps/developer?id=IGNI+Studios" target="_blank"><i class="fab fa-google-play"></i></a></li>


                            <li style="margin-left: 10px;"><a href="mailto:ignistudiosbd@gmail.com" target="_top"><i class="fas fa-envelope-open"></i></a>
                            </li>
                            
                        </ul>
                       

                    </div>
                     <div style="margin-top: 15px;color:white;">
                        <h3>Email</h3>
                        <span style="color:white;"> ignistudiosbd@gmail.com</span>
                    </div>
                     
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //footer --> 
    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <p class="footer-class">© 2018 Igni Studios . All Rights Reserved </p>
        </div>
    </div>
    @include('includes/scripts')
    <script>
        function toGame(url) {
            window.open(url,"_blank");

        }
    </script>
</body> 
</html>