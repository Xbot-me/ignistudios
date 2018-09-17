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
<style>
    .no-dot {
        list-style: none !important;
    }
</style>
</head>
<body>
    <!-- banner -->
    

    <div class="banner" style="background: url(storage/{{ setting('site.banner_image') ?: '' }}) no-repeat 0px 0px;background-size: cover;">
        <div class="agileinfo-dot">
            <div class="agileits-logo">
                <h1><a href="/">Igni <span>Studios</span></a></h1>
                <!-- <h1><a href="/"><img src="{{ asset('images/igni.png') }}" style="width: 100px;"></a></h1> -->
            </div>
            <div class="header-top">
                <div class="container">
                    <div class="header-top-info">
                        <nav class="navbar navbar-default">
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
                                        <li class="no-dot"><a href="#gallery" class="scroll">Our Games</a></li>
                                        <li class="no-dot"><a href="#team" class="scroll">Team</a></li>
                                        <li class="no-dot"><a href="#mail" class="scroll">Mail Us</a></li>
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
                                        <li>
                                            <div class="banner_text">
                                                <h3>Lorem ipsum</h3>
                                                <p>In volutpat metus quis velit malesuada</p>
                                                <div class="w3-button">
                                                    <a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="banner_text">
                                                <h3>Nam semper</h3>
                                                <p>Nam imperdiet tellus nec enim tempus</p>
                                                <div class="w3-button">
                                                    <a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
                                                </div>
                                            </div>
                                        </li>
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
                    <h2>Welcome</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="about-w3lsrow"> 
                <div class="col-md-7 col-sm-7 w3about-img" style="background: url(storage/{{ setting('site.about_us_image') ?: '' }})no-repeat 0px 0px;"> 
                    <div class="w3about-text"> 
                        <h5 class="w3l-subtitle"> About Us</h5>
                        <p>{{ setting('site.about_us') ?: '' }}</p>
                    </div>
                </div> 
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about --> 
    <!-- markets -->
    <div class="markets" id="markets">
        <div class="container">
            <div class="agileits-title"> 
                <h3>Our Services</h3>
            </div>
            <div class="markets-grids">
                <div class="col-md-4 w3ls-markets-grid">
                    <div class="agileits-icon-grid">
                        <div class="icon-left">
                            <i class="fa fa-gamepad" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Suspendisse</h5>
                            <p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-4 w3ls-markets-grid">
                    <div class="agileits-icon-grid">
                        <div class="icon-left">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Aliquam</h5>
                            <p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-4 w3ls-markets-grid">
                    <div class="agileits-icon-grid">
                        <div class="icon-left">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Consectetur</h5>
                            <p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-4 w3ls-markets-grid">
                    <div class="agileits-icon-grid">
                        <div class="icon-left">
                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Bibendum</h5>
                            <p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-4 w3ls-markets-grid">
                    <div class="agileits-icon-grid">
                        <div class="icon-left">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Vestibulum</h5>
                            <p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-4 w3ls-markets-grid">
                    <div class="agileits-icon-grid">
                        <div class="icon-left">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Fermentum</h5>
                            <p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
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
                <h3>Our Games</h3> 
            </div>
            <ul class="simplefilter w3layouts agileits">
                <li class="active w3layouts agileits" data-filter="all">All</li>
                @foreach($games as $game)
                    <li class="w3layouts agileits" data-filter="{{ $game->id }}">{{ $game->name }}</li>
                @endforeach
<!--                 <li class="w3layouts agileits" data-filter="2">Category2</li>
                <li class="w3layouts agileits" data-filter="3">Category3</li>
                <li class="w3layouts agileits" data-filter="4">Category4</li>
                <li class="w3layouts agileits" data-filter="5">Category5</li>
 -->            </ul>

            <div class="filtr-container w3layouts agileits">
                
                @foreach($gameData as $gameDatum)
                    <div class="filtr-item w3layouts agileits portfolio-t" data-category="{{ $gameDatum['id'] }}" data-sort="Busy streets">
                    <a href="{{ asset('storage/' . $gameDatum['image']) }}" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="{{ asset('storage/' . $gameDatum['image']) }}" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Games <span>Hub</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                @endforeach
                

                <!-- <div class="filtr-item w3layouts agileits" data-category="2" data-sort="Luminous night">
                    <a href="images/p2.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p2.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Games <span>Hub</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="filtr-item w3layouts agileits" data-category="3" data-sort="City wonders">
                    <a href="images/p3.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p3.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Games <span>Hub</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="filtr-item w3layouts agileits" data-category="4" data-sort="In production">
                    <a href="images/p4.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p4.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Games <span>Hub</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="filtr-item w3layouts agileits" data-category="5" data-sort="Industrial site">
                    <a href="images/p5.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p5.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Games <span>Hub</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="filtr-item w3layouts agileits" data-category="1" data-sort="Peaceful lake">
                    <a href="images/p6.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p6.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Games <span>Hub</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="filtr-item w3layouts agileits" data-category="2" data-sort="City lights">
                    <a href="images/p7.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p7.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Games <span>Hub</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="filtr-item w3layouts agileits" data-category="3" data-sort="Dreamhouse">
                    <a href="images/p8.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p8.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Games <span>Hub</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="filtr-item w3layouts agileits" data-category="4" data-sort="Dreamhouse">
                    <a href="images/p1.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
                        <figure>
                            <img src="images/p1.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
                            <figcaption>
                                <h3>Games <span>Hub</span></h3>
                            </figcaption>
                        </figure>
                    </a>
                </div> -->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //portfolio -->


    <!-- modal -->
    <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                    <h4 class="modal-title">Games <span>Hub</span></h4>
                </div> 
                <div class="modal-body">
                    <div class="agileits-w3layouts-info">
                        <img src="images/1.jpg" alt="" />
                        <p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //modal -->
    
    <!-- team -->
    <div class="team" id="team">
        <div class="container">
            <div class="agileits-title"> 
                <h3>Amazing Team</h3> 
            </div>
            <div class="agileits-team-grids">
                <div class="col-md-3 agileits-team-grid">
                    <div class="team-info">
                        <img src="images/t1.jpg" alt="">
                        <div class="team-caption"> 
                            <h4>Peter Parker</h4>
                            <p>Fusce laoreet</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 agileits-team-grid">
                    <div class="team-info">
                        <img src="images/t2.jpg" alt="">
                        <div class="team-caption"> 
                            <h4>Johan Botha</h4>
                            <p>Fusce laoreet</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 agileits-team-grid">
                    <div class="team-info">
                        <img src="images/t3.jpg" alt="">
                        <div class="team-caption"> 
                            <h4>Justo Congue</h4>
                            <p>Fusce laoreet</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 agileits-team-grid">
                    <div class="team-info">
                        <img src="images/t4.jpg" alt="">
                        <div class="team-caption"> 
                            <h4>Steven Wilson</h4>
                            <p>Fusce laoreet</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team -->
    
    <!-- mail -->
    <div class="mail" id="mail">
        <div class="container">
            <div class="agileits-title">
                <h3>Mail Us</h3>
            </div> 
            <div class="w3_mail_grids">
                <form action="#" method="post">
                    <span class="input input--jiro">
                        <input class="input__field input__field--jiro" type="text" id="input-10" name="Name" placeholder="Your Name" required=""/>
                        <label class="input__label input__label--jiro" for="input-10">
                            <span class="input__label-content input__label-content--jiro">Your Name</span>
                        </label>
                    </span>
                    <span class="input input--jiro">
                        <input class="input__field input__field--jiro" type="email" id="input-11" name="Email" placeholder="Your Email Address" required=""/>
                        <label class="input__label input__label--jiro" for="input-11">
                            <span class="input__label-content input__label-content--jiro">Your Email</span>
                        </label>
                    </span>
                    <span class="input input--jiro">
                        <input class="input__field input__field--jiro" type="text" id="input-12" name="Phone Number" placeholder="Phone Number" required=""/>
                        <label class="input__label input__label--jiro" for="input-12">
                            <span class="input__label-content input__label-content--jiro">Phone Number</span>
                        </label>
                    </span>
                    <textarea name="Message" placeholder="Message..." required=""></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <script src="js/classie.js"></script>
    <script>
            (function() {
                // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
                if (!String.prototype.trim) {
                    (function() {
                        // Make sure we trim BOM and NBSP
                        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                        String.prototype.trim = function() {
                            return this.replace(rtrim, '');
                        };
                    })();
                }

                [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
                    // in case the input is already filled..
                    if( inputEl.value.trim() !== '' ) {
                        classie.add( inputEl.parentNode, 'input--filled' );
                    }

                    // events:
                    inputEl.addEventListener( 'focus', onInputFocus );
                    inputEl.addEventListener( 'blur', onInputBlur );
                } );

                function onInputFocus( ev ) {
                    classie.add( ev.target.parentNode, 'input--filled' );
                }

                function onInputBlur( ev ) {
                    if( ev.target.value.trim() === '' ) {
                        classie.remove( ev.target.parentNode, 'input--filled' );
                    }
                }
            })();
        </script>
    <!-- //mail -->
    
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="col-md-4 amet-sed"> 
                    <div class="footer-title">
                        <h3>About Us</h3>
                    </div> 
                    <p>{{ setting('site.about_us') ?: '' }}</p>
                </div>
                <div class="col-md-4 amet-sed amet-medium">
                    <div class="footer-title">
                        <h3>Twitter Feed</h3>
                    </div> 
                    <p><a href="#">http://example.com</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lorem sed velit fermentum eget placerat. </p>
                    <p><a href="#">http://mail.com</a> Sed tincidunt lorem sed velit fermentum eget placerat. Lorem ipsum dolor sit, consectetur adipiscing elit. </p>
                </div>
                <div class="col-md-4 amet-sed ">
                    <div class="footer-title">
                        <h3>Follow Us</h3>
                    </div> 
                    <div class="agileinfo-social-grids">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-vk"></i></a></li>
                        </ul>
                    </div>
                    <div class="support">
                        <form action="#" method="post">
                            <input type="email" placeholder="Enter email...." required=""> 
                            <input type="submit" value="Subscribe" class="botton">
                        </form> 
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
            <p class="footer-class">© 2017 Games Hub . All Rights Reserved | Design by  <a href="#" target="#">W3layouts</a> </p>
        </div>
    </div>
    @include('includes/scripts')
</body> 
</html>