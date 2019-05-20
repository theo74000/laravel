@extends('layout.home')
  @section('main')
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Voyage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{route('show')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{route('voyages')}}" class="nav-link">Voyages</a></li>
            <li class="nav-item"><a href="{{route('hotels')}}" class="nav-link">Hotels</a></li>
            <li class="nav-item"><a href="{{route('services')}}" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Tour</span></p>
              <h1 class="mb-3">Voyages Show</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/tour-1.jpg');">
                  <div class="text">
                    <span class="price">$399</span>
                    <h3 class="heading">Group Tour in Maldives</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Maldives</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/tour-2.jpg');">
                  <div class="text">
                    <span class="price">$399</span>
                    <h3 class="heading">Group Tour in Maldives</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Maldives</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/tour-3.jpg');">
                  <div class="text">
                    <span class="price">$399</span>
                    <h3 class="heading">Group Tour in Maldives</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Maldives</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/tour-4.jpg');">
                  <div class="text">
                    <span class="price">$399</span>
                    <h3 class="heading">Group Tour in Maldives</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Maldives</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/tour-5.jpg');">
                  <div class="text">
                    <span class="price">$399</span>
                    <h3 class="heading">Group Tour in Maldives</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Maldives</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/tour-6.jpg');">
                  <div class="text">
                    <span class="price">$399</span>
                    <h3 class="heading">Group Tour in Maldives</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Maldives</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/tour-7.jpg');">
                  <div class="text">
                    <span class="price">$399</span>
                    <h3 class="heading">Group Tour in Maldives</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Maldives</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/tour-8.jpg');">
                  <div class="text">
                    <span class="price">$399</span>
                    <h3 class="heading">Group Tour in Maldives</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Maldives</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <!-- END -->

        
        </div>
      </div>
    </section>

    
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    
  </body>
  @stop