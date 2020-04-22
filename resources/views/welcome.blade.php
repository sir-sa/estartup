


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eStartup Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png'" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/modal-video/css/modal-video.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  


  <!-- =======================================================
  * Template Name: eStartup - v2.0.0
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><span>e</span>Startup</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="assets/img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about-us">About</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#screenshots">Screenshots</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>Welcome to eStartup</h1>
      <h2>Elegant Bootstrap Template for Startups, Apps &amp; more...</h2>
      <img src="/img/hero-img.png" alt="Hero Imgs">
      <a href="#get-started" class="btn-get-started scrollto">Get Started</a>
      <div class="btns">
        <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="padd-section text-center wow fadeInUp">

      <div class="container">
        <div class="section-title text-center">

          <h2>simple systeme fordiscount </h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>

        </div>
      </div>

      <div class="container">
        <div class="row">
{{--  

          <div class="col-md-6 col-lg-4">
            @foreach ($indexs as $index)
            <div class="feature-block">
                 
                <img src="{{$index->src}}" alt="img" class="img-fluid">
                    <h4>{{$index->heading}}</h4>
                    <p>{{$index->description}}</p>
                <a href="#">read more</a>
              </div>
              @endforeach
          </div> --}}

          <div class="card-group">
              
            @foreach ($indexs as $index)
                  <div class="col-md-6 col-lg-4">
                    <div class="feature-block">
                       
                        <img src="{{$index->src}}" alt="img" class="img-fluid">
                        <h4>{{$index->heading}}</h4>
                        <p>{{$index->description}}</p>
                        <a href="#">read more</a>
    
                    </div>
                  </div>
                  @endforeach
          </div>

          

           

        </div>
      </div>

    </section><!-- End Get Started Section -->

     

          <!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us padd-section wow fadeInUp">
  <div class="container">

    @foreach ( $abouts as $about )
        <div class="row justify-content-center">
  
          <div class="col-md-5 col-lg-3">
            <img src="{{$about->src}}" alt="About">
          </div>

          <div class="col-md-7 col-lg-5">
            <div class="about-content">

              <h2><span>eStartup</span>UI Design Mobile </h2>
              <p>{{$about->description}}</p>
              

              <ul class="list-unstyled">
                <li><i class="fa fa-angle-right"></i>{{$about->list1}}</li>
                <li><i class="fa fa-angle-right"></i>{{$about->list2}}</li>
                <li><i class="fa fa-angle-right"></i>{{$about->list3}}</li>
                <li><i class="fa fa-angle-right"></i>{{$about->list4}}</li>
                <li><i class="fa fa-angle-right"></i>{{$about->list5}}</li>
              </ul>

            </div>
          </div>
          @endforeach
    
      
      <!-- ======= Features Section ======= -->
      <section id="features" class="padd-section text-center wow fadeInUp">

        <div class="container">
          <div class="section-title text-center">
            <h2>Amazing Features.</h2>
            <p class="separator">Integer cursus bibendum augue ac cursus .</p>
          </div>
        </div>
  
        <div class="container">
          <div class="row">
              @foreach ($features as $feature)
              <div class="col-md-6 col-lg-3">
                  <div class="feature-block">
                  <img src="{{$feature->src}}" alt="img" class="img-fluid">
                  <h4>{{$feature->heading}}</h4>
                  <p>{{$feature->description}}</p>
                  </div>
              </div>
              @endforeach

       
    <!-- ======= Screenshots Section ======= -->
    <section id="screenshots" class="padd-section text-center wow fadeInUp">

      <div class="container">
        <div class="section-title text-center">
          <h2>App Gallery</h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>
        </div>
      </div>

      <div class="container">
        
        <div class="owl-carousel owl-theme">
          
          <div>
            @foreach ($screenshots as $screenshot)
              {{-- <img src="{{$screenshot->src}}" alt="img"> --}}
              <img src="{{$screenshot->src}}" alt="img" class="img-fluid">
            @endforeach
          </div>
               

            </div>
          </div>

    </section><!-- End Screenshots Section -->

    <!-- ======= Video Section ======= -->
    <section id="video" class="text-center wow fadeInUp">
      <div class="overlay">
        <div class="container-fluid container-full">

          <div class="row">
            <a href="#" class="js-modal-btn play-btn" data-video-id="s22ViV7tBKE"></a>
          </div>

        </div>
      </div>
    </section><!-- End Video Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="padd-section text-center wow fadeInUp">

      <div class="container">
        <div class="section-title text-center">

          <h2>Team Member</h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>

        </div>
      </div>

      <div class="container">
        <div class="row">

            @foreach ($teams as $team)
              <div class="col-md-6 col-md-4 col-lg-3">
                  
                <div class="team-block bottom">
                  <img src="{{$team->src}}" class="img-responsive" alt="img">
                  <div class="team-content">
                    <ul class="list-unstyled">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <span>{{$team->heading}}</span>
                    <h4>{{$team->description}}</h4>
                  </div>
                </div>
              </div>
            @endforeach

        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="padd-section text-center wow fadeInUp">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-8">

            <div class="testimonials-content">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner" role="listbox">
                  @foreach ($testimonials as $testimonial)
                      
                    <div class="carousel-item  active">

                      <div class="top-top">

                        <h2>{{$testimonial->heading}}</h2>
                        <p>{{$testimonial->description}}</p>
                        <h4>Kimberly Tran<span>manager</span></h4>

                      </div>
                    </div>
                  @endforeach


                  

                   

                </div>

                <div class="btm-btm">

                  <ul class="list-unstyled carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ul>

                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="padd-section text-center wow fadeInUp">

      <div class="container">
        <div class="section-title text-center">

          <h2>Meet With Price</h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>

        </div>
      </div>

      <div class="container">
        <div class="row">

          @foreach ($prices as $price)
          <div class="col-md-6 col-lg-3">
                
              <div class="block-pricing">
                <div class="table">
                  <h4>{{$price->heading}}</h4>
                  <h2>{{$price->cash}}</h2>
                  <ul class="list-unstyled">
                    <li><b>{{$price->list1}}</b> Ram</li>
                    <li><b>{{$price->list2}}</b> Tech Support</li>
                    <li><b>{{$price->list3}}</b> SSD Cloud Storage</li>
                    <li>{{$price->list4}}</li>
                    <li>{{$price->list5}}</li>
                  </ul>
                  <div class="table_btn">
                    <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
 
        </div>
      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="padd-section wow fadeInUp">

      <div class="container">
        <div class="section-title text-center">

          <h2>Latest posts</h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>

        </div>
      </div>

      <div class="container">
        <div class="row">
          @foreach ($blogs as $blog)
              
            <div class="col-md-6 col-lg-4">
              <div class="block-blog text-left">
                <a href="#"><img src="{{$blog->src}}" alt="img"></a>
                <div class="content-blog">
                  <h4><a href="#">{{$blog->description}}</a></h4>
                  <span>{{$blog->date}}</span>
                  <a class="pull-right readmore" href="#">read more</a>
                </div>
              </div>
            </div>
          @endforeach

          
           

        </div>
      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Newsletter Section ======= -->
    <section id="newsletter" class="newsletter text-center wow fadeInUp">
      <div class="overlay padd-section">
        <div class="container">

          <div class="row justify-content-center">
            <div class="col-md-9 col-lg-6">
              <form class="form-inline" method="POST" action="#">

                <input type="email" class="form-control " placeholder="Email Adress" name="email">
                <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i>Subscribe</button>

              </form>

            </div>
          </div>

          <ul class="list-unstyled">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>

        </div>
      </div>
    </section><!-- End Newsletter Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="padd-section wow fadeInUp">

      <div class="container">
        <div class="section-title text-center">
          <h2>Contact</h2>
          <p class="separator">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="fa fa-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">eStartup</a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Support</h4>

            <ul class="list-unstyled">
              <li><a href="#">faq</a></li>
              <li><a href="#">Editor help</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights eStartup. All rights reserved.</p>
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
        -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
  <script src="{{asset('vendor/modal-video/js/modal-video.min.js')}}"></script>
  <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('vendor/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('vendor/hoverIntent/hoverIntent.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
