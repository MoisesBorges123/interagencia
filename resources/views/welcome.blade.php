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
              <div id='capa'   class="hero-area-l11 position-relative z-index-1 overflow-hidden">
                <div class="container position-relative">
                  <div class="row position-relative justify-content-center">
                    <div class="col-xl-10 col-lg-10 col-md-12 order-lg-1 order-1" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
                      <div class="content text-center">
                        <h3 class='text-white mt-7'>Soluções digitais para o seu negócio</h3>
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
             
              <!-- Content Area-2  -->
              <div class="content-area-l-11-2  justify-center align-items-center">
                <div class="container">
                  <div class="row align-items-center justify-content-lg-between justify-content-center">
                    <div class="col-xl-6 col-xl-6 col-lg-6 col-md-6 order-lg-1  order-1 pl-7" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                      <div class="content section-heading-5">
                        <div class="d-flex content-l-11-3-card card-1 justify-content-center align-items-center">                          
                          <div class="content-body ">
                              <img src="{{URL::asset('image/system/icons/clock.png')}}" alt="icon">                            
                          </div>
                        </div>
                      </div>                     
                    </div>
                    <div class="col-xl-6 col-xl-6 col-lg-6 col-md-6 order-lg-1  order-1 pr-7" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                        <div class="content section-heading-5">
                            <div class="d-flex content-l-11-3-card card-1 justify-content-center align-items-center">                          
                                <div class="content-body ">
                                    <img src="{{URL::asset('image/system/icons/segurando-a-chave.png')}}" alt="icon">                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xl-6 col-lg-6 col-md-6 order-lg-1  order-1 pl-7" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                        <div class="content section-heading-5">
                            <div class="d-flex content-l-11-3-card card-1 justify-content-center align-items-center">                          
                                <div class="content-body ">
                                    <img src="{{URL::asset('image/system/icons/smartphone.png')}}" alt="icon">                            
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Content Area -->
              <div class="content-area-l-11-3 position-relative" id='area3' style='background-image:url("{{URL::asset('image/system/background/person-typing2.png')}}")'>
                <div class="container">
                  <div class="row align-items-center justify-content-center justify-content-lg-start">
                    
                    <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-9 order-lg-1 order-1 justify-center" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                      <div class="content section-heading-5">                      
                        <p class='text-white'>A Interagência é para você que quer
                            digitalizar a gestão do seu negócio para
                            escalonar suas vendas e melhorar o seu
                            atendimento.</p>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Feature Area -->
              <div  id='content-4'>
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-xl-9 px-lg-12 col-md-12">
                      <div class="row justify-content-center">
                        <div class="col-lg-10 text-center">
                          <div class="section-heading-5">
                            <h3>
                              <b>O que fazemos</b>
                            </h3>                            
                          </div>
                        </div>
                      </div>
                      <div class="row feature-l-11-items justify-content-center">
                        <div class="col-md-4" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                          <div class="d-flex ">                            
                            <div class="content-body">                                
                                <div class='text-center h3 text-green-dark'>
                                    <i class="fas fa-mobile"></i>
                                </div>
                                <h5 class='text-green-dark'>Aplicativos</h5>
                                <p class='text-green-dark'>Ágeis, acessíveis e práticos. Aplicativos é o que
                                há de mais moderno no acesso e conectividade
                                com cliente</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                          <div class="d-flex ">                           
                            <div class="content-body">
                                <div class='text-center h3 text-green-dark'>
                                    <i class="fas fa-mobile"></i>
                                </div>
                                <h5 class='text-green-dark'>Sistema de Cobranças</h5>
                                <p class='text-green-dark'>Pagamentos, gestão de boletos e de assinaturas
                                    num único clique.
                                </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                          <div class="d-flex ">                            
                            <div class="content-body">
                                <div class='text-center h3 text-green-dark'>
                                    <i class="fas fa-mobile"></i>
                                </div>
                              <h5 class='text-green-dark'>Tecnologia para gestão acadêmica</h5>
                              <p class='text-green-dark'>At eripuit signiferumque sea, vel ad mucius
                                molestie, cu labitur iuvaret vulputate sed.
                                </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                          <div class="d-flex ">                            
                            <div class="content-body">
                                <div class='text-center h3 text-green-dark'>
                                    <i class="fas fa-mobile"></i>
                                </div>
                              <h5 class='text-green-dark'>Gestão de Hospitais</h5>
                              <p class='text-green-dark'>At eripuit signiferumque sea, vel ad mucius
                                molestie, cu labitur iuvaret vulputate sed.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
                          <div class="d-flex ">                            
                            <div class="content-body">
                                <div class='text-center h3 text-green-dark'>
                                    <i class="fas fa-mobile"></i>
                                </div>
                              <h5 class='text-green-dark'>Prontuário eletrônico</h5>
                              <p class='text-green-dark'>At eripuit signiferumque sea, vel ad mucius
                                molestie, cu labitur iuvaret vulputate sed.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
                          <div class="d-flex ">                            
                            <div class="content-body">
                                <div class='text-center h3 text-green-dark'>
                                    <i class="fas fa-mobile"></i>
                                </div>
                              <h5 class='text-green-dark'>Sistemas sob demandas</h5>
                              <p class='text-green-dark'>Uma solução sob medida para aquilo que você
                                precisa!</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Testimonial Section  41 76 39-->
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
