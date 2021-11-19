<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Interagência</title>
        <link rel="stylesheet" href="{{URL::asset('./css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{URL::asset('./fonts/icon-font/css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('./fonts/typography-font/typo.css')}}">
        <link rel="stylesheet" href="{{URL::asset('./fonts/fontawesome-5/css/all.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Plugin'stylesheets  -->
        <link rel="stylesheet" href="{{URL::asset('./plugins/aos/aos.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('./plugins/slick/slick.min.css')}}">
        <!-- Vendor stylesheets  -->
        <link rel="stylesheet" href="{{URL::asset('./css/main.css')}}">
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="{{URL::asset('./css/index.css')}}">
        <link rel="stylesheet" href="{{URL::asset('./css/app.css')}}">
       <style>
           

           
       </style>

    </head>
    <body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">
        
            <div class="site-wrapper overflow-hidden position-relative">
              <!-- Site Header -->
              <!-- Preloader -->
              <!-- <div id="loading">
              <div class="preloader">
               <img src="./image/preloader.gif" alt="preloader">
             </div>
             </div>    -->
              <!--Site Header Area -->
              <header style='background:#fff' class="site-header site-header--menu-left landing-11-menu site-header--absolute site-header--sticky">
                <div class="container">
                  <nav class="navbar site-navba justify-content-center">
                    <!-- Brand Logo-->
                    <div class="brand-logo">
                      <a href="#">
                        <!-- light version logo (logo must be black)-->
                        <img src="image/system/logo/logo-white.png" alt="" class="light-version-logo">
                        <!-- Dark version logo (logo must be White)-->
                        <img src="image/logo/logo-white.png" alt="" class="dark-version-logo">
                      </a>
                    </div>
                    <div class="menu-block-wrapper ">
                      <div class="menu-overlay"></div>
                      <nav class="menu-block " id="append-menu-header">
                        <div class="mobile-menu-head">
                          <div class="go-back">
                            <i class="fa fa-angle-left"></i>
                          </div>
                          <div class="current-menu-title"></div>
                          <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="site-menu-main">                         
                          <li class="nav-item">
                            <a href="#" class="nav-link-item">Home</a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link-item">Sobre</a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link-item">Seriços</a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link-item">Blog</a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link-item">Depoimentos</a>
                          </li>
                         
                          
                        </ul>
                      </nav>
                    </div>
                    <div class="header-btns  header-btn-l11 ms-auto d-none d-xs-inline-flex align-items-center">
                        <div class="row">
                            
                            <div class="col-md-2 mt-2 text-left">
                                <div class="social-icons-l-11">
                                    <ul class="pl-0 list-unstyled d-flex  justify-content-center justify-content-md-end align-items-end ">                                
                                        <li class="d-flex flex-column justify-content-center btn-search"><a href="#"><i class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2 ">
                                <div class="social-icons-l-11">
                                    <ul class="pl-0 list-unstyled d-flex  justify-content-center justify-content-md-end align-items-end ">                                
                                        <li class="d-flex flex-column justify-content-center"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li class="d-flex flex-column justify-content-center"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a class="download-trail-btn btn btn-primary-gradient2" href="#">
                                Contato
                                </a>                             
                            </div>
                        </div>
                    </div>
                    <!-- mobile menu trigger -->
                    <div class="mobile-menu-trigger">
                      <span></span>
                    </div>
                    <!--/.Mobile Menu Hamburger Ends-->
                  </nav>
                </div>
              </header>
              <!-- navbar- -->
              <!-- Hero Area -->
              <div style='background-color:#3d4600;'   class="hero-area-l11 position-relative z-index-1 overflow-hidden">
                <div class="container position-relative">
                  <div class="row position-relative justify-content-center">
                    <div class="col-xl-10 col-lg-10 col-md-12 order-lg-1 order-1" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
                      <div class="content text-center">
                        <h3 class='text-white'>Soluções digitais para o seu negócio</h3>
                        <div class="row justify-content-center">
                          <div class="col-xl-10 col-lg-10 col-md-12 text-center">
                            <span class='text-white'>Alinhamos inovação e tecnologia para otimizar os resultados</span>
                          </div>
                          
                          <div class="col-xl-3 col-lg-4 text-center">
                            <div class="compitable-text border-top d-inline-block">
                                <a class="btn btn-white" href="#">Entre em Contato</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-9 order-lg-1 order-0" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                        <img src="image/l2/laptop-screen.png" alt="" class="w-100 hero-l11-main-image">
                    </div>
                </div>
                <svg class='wave' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#ffffff" fill-opacity="1" d="M0,64L48,58.7C96,53,192,43,288,58.7C384,75,480,117,576,133.3C672,149,768,139,864,117.3C960,96,1056,64,1152,42.7C1248,21,1344,11,1392,5.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                  </svg>
                </div>
                <div class="hero-shape-l11-1 d-none d-md-block">
                  <img src="./image/l2/hero-shape-1.svg" alt="">
                </div>
                <div class="hero-shape-l11-2 d-none d-md-block">
                  <img src="./image/l2/hero-shape-2.png" alt="">
                </div>
              </div>
             
              <!-- Brand-area -->
              <div class="brand-area-l11">
                <div class="container">
                  <div class="row img-grayscale">
                    <div class="col-lg-12" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                      <div class="brand-logos d-flex justify-content-center justify-content-center align-items-center flex-wrap ">
                        <h4 class='text-center'><b>Acelere! Inovação e tecnologia alinhados</b> <br>
                            <b>para um resultado surpreendente.</b></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Content Area-1 -->
              <div class="content-area-l-11-1">
                <div class="container">
                  <div class="row align-items-center justify-content-lg-start justify-content-center">
                    <div class="col-xl-6 col-md-5 col-md-10" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                      <div class="content-img position-relative z-index-1">
                        <img src="image/l2/content-img1.png" alt="" class="w-100">
                      </div>
                    </div>
                    <div class="offset-xxl-1 col-xxl-5 col-xl-6 col-lg-7 col-md-9" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                      <div class="content section-heading-5">
                        <h2>
                          Build Beautiful Landing Pages Faster.
                        </h2>
                        <p>Create custom landing pages with Shades that convert more visitors than any website, no coding
                          required.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Content Area-2  -->
              <div class="content-area-l-11-2">
                <div class="container">
                  <div class="row align-items-center justify-content-lg-between justify-content-center">
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-9 order-lg-1 order-1" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                      <div class="content section-heading-5">
                        <h2>
                          Completely Free for Everyone.
                        </h2>
                        <div class="d-flex content-l-11-3-card">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="27" viewBox="0 0 32 27">
                            <g>
                              <g>
                                <g>
                                  <path class="mypath1" fill="none" stroke="#258aff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" stroke-width="2" d="M25.528 25.615v0h5.47v0-5.911c0-.56-.341-1.062-.86-1.27l-5.118-2.05a1.367 1.367 0 0 1-.86-1.267v-1.2a5.445 5.445 0 0 0 2.735-4.711V6.471a5.47 5.47 0 0 0-8.205-4.738">
                                  </path>
                                </g>
                                <g>
                                  <path class="mypath1" fill="none" stroke="#258aff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" stroke-width="2" d="M19.367 19.846l-5.14-2.036a1.358 1.358 0 0 1-.864-1.257v-1.192a5.394 5.394 0 0 0 2.747-4.676V7.97c0-2.999-2.46-5.43-5.495-5.43-3.034 0-5.494 2.431-5.494 5.43v2.715a5.394 5.394 0 0 0 2.747 4.676v1.192c0 .555-.342 1.054-.864 1.26l-5.14 2.036c-.52.206-.863.703-.864 1.257v4.51h19.23v0-4.51c0-.555-.342-1.054-.863-1.26z">
                                  </path>
                                </g>
                              </g>
                            </g>
                          </svg>
                          <div class="content-body">
                            <h5>Easy setup process</h5>
                            <p>Editing and customizing Essential Landing is easy and fast.</p>
                          </div>
                        </div>
                        <div class="d-flex content-l-11-3-card">
                          <img src="image/l2/settings.svg" alt="icon">
                          <div class="content-body">
                            <h5>Built for real users</h5>
                            <p>Editing and customizing Essential Landing is easy and fast.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-6 offset-xxl-2 col-xl-6 col-lg-5 col-md-9 order-lg-1 order-0" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                      <div class="content-img">
                        <img src="image/l2/content-img2.png" alt="" class="w-lg-auto w-100">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Content Area -->
              <div class="content-area-l-11-3 position-relative">
                <div class="container">
                  <div class="row align-items-center justify-content-center justify-content-lg-start">
                    <div class="col-xl-6 col-lg-6 col-md-8 order-lg-1 order-0" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                      <div class="content-img">
                        <img src="image/l2/content-img3.png" alt="" class="w-100">
                      </div>
                    </div>
                    <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-9 order-lg-1 order-1" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                      <div class="content section-heading-5">
                        <h2>Completely Free for Everyone.</h2>
                        <p>Event is not like most tech conferences. We want our presentations to engage the audience, spark
                          discussion and inspire new ideas. </p>
                        <ul class="list-unstyled pl-0">
                          <li class="d-flex align-items-center">
                            <i class="fas fa-check"></i>Unlimited design possibility
                          </li>
                          <li class="d-flex align-items-center">
                            <i class="fas fa-check"></i>Completely responsive
                          </li>
                          <li class="d-flex align-items-center">
                            <i class="fas fa-check"></i>Easy to customize
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Feature Area -->
              <div class="feature-l-11">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-xl-9 px-lg-12 col-md-12">
                      <div class="row justify-content-center">
                        <div class="col-lg-10 text-center">
                          <div class="section-heading-5">
                            <h2>
                              One Software, Every Solution
                            </h2>
                            <p>We designed and tested prototypes that helped identify pain points in the account
                              creation process. Together, we shaped the new standard.</p>
                          </div>
                        </div>
                      </div>
                      <div class="row feature-l-11-items justify-content-center">
                        <div class="col-md-6" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                          <div class="d-flex ">
                            <div class="icon-box">
                              <i class="icon icon-pen-01"></i>
                            </div>
                            <div class="content-body">
                              <h5>Easy to Use</h5>
                              <p>Whether it’s a small internal app or a new for millions of customers, our design and
                                development teams.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                          <div class="d-flex ">
                            <div class="icon-box">
                              <i class="icon icon-layers-3"></i>
                            </div>
                            <div class="content-body">
                              <h5>300+ Blocks</h5>
                              <p>Whether it’s a small internal app or a new for millions of customers, our design and
                                development teams.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                          <div class="d-flex ">
                            <div class="icon-box">
                              <i class="icon icon-office"></i>
                            </div>
                            <div class="content-body">
                              <h5>100% Responsive</h5>
                              <p>Whether it’s a small internal app or a new for millions of customers, our design and
                                development teams.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                          <div class="d-flex ">
                            <div class="icon-box">
                              <i class="icon icon-book-open-2"></i>
                            </div>
                            <div class="content-body">
                              <h5>Rich Documentation</h5>
                              <p>Whether it’s a small internal app or a new for millions of customers, our design and
                                development teams.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
                          <div class="d-flex ">
                            <div class="icon-box">
                              <i class="icon icon-pen-01"></i>
                            </div>
                            <div class="content-body">
                              <h5>50+ Ready Pages</h5>
                              <p>Whether it’s a small internal app or a new for millions of customers, our design and
                                development teams.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
                          <div class="d-flex ">
                            <div class="icon-box">
                              <i class="icon icon-settings-gear-64-2"></i>
                            </div>
                            <div class="content-body">
                              <h5>Quick Setup</h5>
                              <p>Whether it’s a small internal app or a new for millions of customers, our design and
                                development teams.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Testimonial Section -->
              <div class="testimonial-area-l-11">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">
                      <div class="section-heading-5 text-center">
                        <h2>
                          30,000+ Customers Trust Us
                        </h2>
                        <p>We designed and tested prototypes that helped
                          identify pain points in the account creation process. Together, we shaped the new standard.</p>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                    <div class="col-xl-10 col-lg-12 col-md-10">
                      <div class="testimonial-slider-l-11 position-relative">
                        <div class="single-slide focus-reset">
                          <div class="testimonial-card">
                            <p>
                              <span class="d-inline-block quote-size-1">“</span> You made it so simple. My new site is
                              so much faster
                              and easier to work with than my old site. I just choose the page, make the change and
                              click save. Thanks, guys!”
                            </p>
                            <div class="d-flex user-details align-items-center">
                              <div class="customer-img">
                                <img src="image/l2/client-img-2.png" alt="">
                              </div>
                              <div class="user-identity">
                                <h5>Sallie Lawson</h5>
                                <span>Founder of Crips</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="single-slide focus-reset">
                          <div class="testimonial-card">
                            <p>
                              <span class="d-inline-block quote-size-1">“</span> You made it so simple. My new site is
                              so much faster
                              and easier to work with than my old site. I just choose the page, make the change and
                              click save. Thanks, guys!”
                            </p>
                            <div class="d-flex user-details  align-items-center">
                              <div class="customer-img">
                                <img src="image/l2/client-img-1.png" alt="">
                              </div>
                              <div class="user-identity">
                                <h5>Ella Brooks</h5>
                                <span>Founder of Crips</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="single-slide focus-reset">
                          <div class="testimonial-card rounded">
                            <p>
                              <span class="d-inline-block quote-size-1">“</span> You made it so simple. My new site is
                              so much faster
                              and easier to work with than my old site. I just choose the page, make the change and
                              click save. Thanks, guys!”
                            </p>
                            <div class="d-flex user-details  align-items-center">
                              <div class="customer-img">
                                <img src="image/l2/client-img-2.png" alt="">
                              </div>
                              <div class="user-identity">
                                <h5>Sallie Lawson</h5>
                                <span>Founder of Crips</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Newsletter-area start -->
              <div class="newsletter-l-11">
                <div class="container">
                  <div class="row justify-content-center news-l-11-main-bg position-relative">
                    <div class="news-l-11-second-bg w-100 h-100"></div>
                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-11" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                      <div class="content text-center">
                        <h5>Try our free software!</h5>
                        <h2>Try our free software!</h2>
                        <p>We designed and tested prototypes that helped identify pain points in the account creation
                          process. Together, we shaped the new standard.</p>
                        <div class="btn-area">
                          <a href="#" class="btn"><i class="fas fa-download d-inline-block"></i> Download Free Trial</a>
                        </div>
                        <span>No credit card required</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Footer Area -->
              <footer class="footer-l-11 text-center text-md-start">
                <div class="container">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="footer-logo-l-11">
                        <a href="#"><img src="image/logo/logo-black.png" alt="logo"></a>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="footer-widget-l-11">
                        <ul class="pl-0 list-unstyled d-flex flex-wrap justify-content-center align-items-end ">
                          <li class="d-flex"><a href="">About</a></li>
                          <li class="d-flex"><a href="">Features</a></li>
                          <li class="d-flex"><a href="">Works</a></li>
                          <li class="d-flex"><a href="">Career</a></li>
                          <li class="d-flex"><a href="">Contact</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="social-icons-l-11">
                        <ul class="pl-0 list-unstyled d-flex  justify-content-center justify-content-md-end align-items-end ">
                          <li class="d-flex flex-column justify-content-center"><a href="#"><i
                                              class="fab fa-twitter"></i></a></li>
                          <li class="d-flex flex-column justify-content-center"><a href="#"><i
                                              class="fab fa-facebook-f"></i></a></li>
                          <li class="d-flex flex-column justify-content-center"><a href="#"><i
                                              class="fab fa-google"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </footer>
              <div class="copyright-area-l-11">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <p>© Grayic 2021 All right reserved. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Vendor Scripts -->
            <script src="js/vendor.min.js"></script>
            <!-- Plugin's Scripts -->
            <script src="./plugins/aos/aos.min.js"></script>
            <script src="./plugins/slick/slick.min.js"></script>
            <script src="./plugins/menu/menu.js"></script>
            <!-- Activation Script -->
            <script src="js/custom.js"></script>
         
          
    </body>

</html>