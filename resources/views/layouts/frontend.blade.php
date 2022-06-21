<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams"> 
    <title>Name of company</title>
    @yield('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sans&display=swap" rel="stylesheet">
    @yield('scripts')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/rrg4put.css">
    <link rel="stylesheet" href="assets/css/main.css">
    
</head>
<body>
    <div id="app">
        <nav class="navbar bg-primary navbar-expand-lg fixed-top mb-5">
            <div class="container">
              <a class="navbar-brand" href="/"><img claass="w-100" src="assets/img/icon/company-logo.svg" alt=""></a>
              <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-card-item">
                    <a class="nav-link  active" href="/">Home</a>
                  </li>
                  <li class="nav-card-item">
                    <a class="nav-link" href="aboutus.html">About</a>
                  </li>
                  <li class="nav-card-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                  <li class="nav-card-item">
                    <a class="nav-link" href="blog.html">Blog</a>
                  </li>  
                  @if (Route::has('login'))
                          @auth
                          <cart-component></cart-component>
                        @else
                            <li class="nav-card-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> 
    
                            @if (Route::has('register'))
                                <li class="nav-card-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @endauth
                    @endif       
                </ul>
              </div>
            </div>
        </nav>

        @yield('content')

        </footer>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container text-center text-md-start">
            <div class="footer-wrap">
                <div class="about">
                    <img src="assets/img/icon/company-logo-black.svg" alt="">
                    <p class="text-muted py-4">
                        Start working with Firmbee which can provide you with all the tools needed to run an effcieint business remotely.
                    </p>
                </div>
            </div>

            <div class="social-media">
                <a href="" class="me-2 text-reset"><img src="assets/img/icon/instagram-icon.svg" alt=""></a>
                <a href="" class="me-2 text-reset"><img src="assets/img/icon/facebook-icon.svg" alt=""></a>
                <a href="" class="me-2 text-reset"><img src="assets/img/icon/twitter-icon.svg" alt=""></a>
                <a href="" class="me-2 text-reset"><img src="assets/img/icon/linkedin-icon.svg" alt=""></a>
            </div>
            </div>
            <div class="company">
                <p class="fw-bold">Company</p>
                <p><a href="">About us</a></p>
                <p><a href="">Services</a></p>
                <p><a href="">Team</a></p>
                <p><a href="">Pricing</a></p>
                <p><a href="">Project</a></p>
                <p><a href="">Careers</a></p>
                <p><a href="">Blog</a></p>
                <p><a href="">Login</a></p>
                </div> 
                <div class="useful-links">
                <p class="fw-bold">Useful links</p>
                <p><a href="">Terms of </a></p>
                <p><a href="">Services</a></p>
                <p><a href="">Privacy Policy</a></p>
                <p><a href="">Documentation</a></p>
                <p><a href="">Changelog</a></p>
                <p><a href="">Components</a></p>
            </div>

            <div class="newsletter">
                <p class="fw-bold">Newsletter</p>
                <p class="text-muted">Sign up and receive the latest tips
                via email.</p>
                <form id="subscribe" action="">
                <label for="email">Youre e-mail:</label>
                <input type="email" placeholder="e-mail:" name="email" required>
                <button type="submit" class="main-btn">Subscribe</button>
                </form>
            </div> 
        </div>
        <div class="copyright">
            <p>&copy; 2022 YOUR-DOMAIN | Created by <a href="https://firmbee.com/use-cases/software-for-team-work/" title="Firmbee - Online Remote working app for collaboration & task management" target="_blank">Firmbee.com</a></p>
            <!--
            This template is licenced under Attribution 3.0 (CC BY 3.0 PL),
            You are free to: Share and Adapt. You must give appropriate credit, you may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.
            --> 
            <div class="fb2022-copy">Fbee 2022 copyright</div>
        </div>
    

    
    <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="assets/js/nav-bg.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>