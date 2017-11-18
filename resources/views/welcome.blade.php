<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prueba</title>
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap-material-design-font/css/material.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/et-line-font-plugin/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/tether/tether.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/animate.css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
        
    </head>

    <body>

        <section id="menu-0">
        
            <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
              
              <div class="container">
                
                <div class="mbr-table">
                 
                  <div class="mbr-table-cell">
                    <div class="navbar-brand">
                      <a href="" class="navbar-logo"><img src="assets/images/logov2-832x128.png" alt="Mobirise"></a>                
                    </div>
                  </div>
                 
                  <div class="mbr-table-cell">
                      <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                      </button>
                      
                      <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                          
                        @if (Route::has('login'))
                          @if (Auth::check())
                            <li class="nav-item">
                              <a class="nav-link link" href="{{ url('/home') }}">Home</a>
                            </li>
                          @else
                            <li class="nav-item">
                              <a class="nav-link link" href="{{ url('/vue') }}">Login</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link link" href="{{ url('/vue') }}">Register</a>
                            </li>
                          @endif
                        @endif
                      
                      </ul>
                      <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                      </button>
                  </div>

                </div>

              </div> 

            </nav>
        
        </section>

        <section class="mbr-section mbr-section-hero mbr-section-full header2 mbr-parallax-background mbr-after-navbar') }}" " id="header2-4" style="background-image: url(assets/images/mbr-2-2000x1333.jpg);">

            <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);">
            </div>

            <div class="mbr-table mbr-table-full">
                <div class="mbr-table-cell">

                    <div class="container">
                        <div class="mbr-section row">
                            <div class="mbr-table-md-up">
                                
                                
                                

                                <div class="mbr-table-cell col-md-5 content-size text-xs-center text-md-right">

                                    <h3 class="mbr-section-title display-2">Lo que hace grande tu empresa es tu personal</h3>

                                    <div class="mbr-section-text">
                                        <p>Su auto superación y preparación engrandencen tu marca</p>
                                    </div>

                                    

                                </div>
                                <div class="mbr-table-cell mbr-valign-top mbr-left-padding-md-up col-md-7 image-size" style="width: 50%;">
                                    <div class="mbr-figure"><img src="{{ asset('assets/images/coworkers.jpg') }}"></div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="mbr-arrow mbr-arrow-floating hidden-sm-down" aria-hidden="true"><a href="#features7-5"><i class="mbr-arrow-icon"></i></a></div>

        </section>

        <section class="mbr-cards mbr-section mbr-section-nopadding" id="features7-5" style="background-color: rgb(239, 239, 239);">

            

            <div class="mbr-cards-row row">
                <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
                    <div class="container">
                        <div class="card cart-block">
                            <div class="card-img iconbox"><a href="#" class="mbri-growing-chart mbr-iconfont mbr-iconfont-features7" style="color: rgb(255, 255, 255);"></a></div>
                            <div class="card-block">
                                <h4 class="card-title">Mejora la productivad</h4>
                                
                                <p class="card-text">En equipo bien capacitado llevara por el mejor camino a tu empresa.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
                    <div class="container">
                        <div class="card cart-block">
                            <div class="card-img iconbox"><a href="https://mobirise.com" class="mbri-paperclip mbr-iconfont mbr-iconfont-features7" style="color: rgb(255, 255, 255);"></a></div>
                            <div class="card-block">
                                <h4 class="card-title">Tu decides</h4>
                                
                                <p class="card-text">Tu tendras el control total de lo que la plataforma publicara</p>
                                
                            </div>
                        </div>
                  </div>
                </div>
                <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
                    <div class="container">
                        <div class="card cart-block">
                            <div class="card-img iconbox"><a href="https://mobirise.com" class="etl-icon icon-briefcase mbr-iconfont mbr-iconfont-features7" style="color: rgb(255, 255, 255);"></a></div>
                            <div class="card-block">
                                <h4 class="card-title">Sin necesidad de libros</h4>
                                
                                <p class="card-text">Todos los cursos se llevan acabo de manera online, ya sea en su ordenador, tablet o telefono inteligente.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
            </div>
        </section>

        <footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-2" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">
            
            <div class="container">
                <p class="text-xs-center">Creado por Pablo Ruiz &amp; Diego Gonzalez</p>
            </div>
        </footer>


        <script src="{{ asset('assets/web/assets/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/tether/tether.min.js') }}"></script>
        <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/smooth-scroll/smooth-scroll.js') }}"></script>
        <script src="{{ asset('assets/dropdown/js/script.min.js') }}"></script>
        <script src="{{ asset('assets/touch-swipe/jquery.touch-swipe.min.js') }}"></script>
        <script src="{{ asset('assets/viewport-checker/jquery.viewportchecker.js') }}"></script>
        <script src="{{ asset('assets/jarallax/jarallax.js') }}"></script>
        <script src="{{ asset('assets/theme/js/script.js') }}"></script>
        <input name="animation" type="hidden" />
    
    </body>

</html>
