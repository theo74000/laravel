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
      <div class="slider-item" style="background-image: url('images/bg_4.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Experience the best trip ever</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Making the most out of your holiday</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/bg_3.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Travel Operator Just For You</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <div class="ftco-section-search">
      <div class="container">
        <div class="row">
          <div class="col-md-12 tabulation-search">
            <div class="element-animate">
              <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link p-3 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span>01</span> Flight</a>
                <a class="nav-link p-3" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span>02</span> Hotel</a>
                <a class="nav-link p-3" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span>03</span> Car Rent</a>
                <a class="nav-link p-3" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><span>04</span> Cruises</a>
              </div>
            </div>
              
            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="block-17">
                  <form action="" method="post" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">

                      <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Search Location"></div>

                      <div class="check-in one-third"><input type="text" id="checkin_date" class="form-control" placeholder="Check-in date"></div>

                      <div class="check-out one-third"><input type="text" id="checkout_date" class="form-control" placeholder="Check-out date"></div>
                      <div class="select-wrap one-third">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Guest</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <input type="submit" class="search-submit btn btn-primary" value="Find Flights">  
                  </form>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="block-17">
                  <form action="" method="post" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">
                      <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Search Hotel"></div>

                      <div class="check-in one-third"><input type="text" id="checkin_date" class="form-control" placeholder="Check-in date"></div>

                      <div class="check-out one-third"><input type="text" id="checkout_date" class="form-control" placeholder="Check-out date"></div>
                      <div class="select-wrap one-third">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Guest</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <input type="submit" class="search-submit btn btn-primary" value="Find Hotels">  
                  </form>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="block-17">
                  <form action="" method="post" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">
                      <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Search Location"></div>

                      <div class="check-in one-third"><input type="text" id="start_date" class="form-control" placeholder="Start date"></div>

                      <div class="check-out one-third"><input type="text" id="return_date" class="form-control" placeholder="Return date"></div>
                      <div class="select-wrap one-third">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Guest</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <input type="submit" class="search-submit btn btn-primary" value="Find Car">  
                  </form>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="block-17">
                  <form action="" method="post" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">
                      <div class="textfield-search one-third one-third-1"><input type="text" class="form-control" placeholder="Search Location"></div>


                      <div class="check-out one-third one-third-1"><input type="text" id="start_date" class="form-control" placeholder="Check-out date"></div>

                      <div class="select-wrap one-third one-third-1">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Categories</option>
                          <option value="">Suite</option>
                          <option value="">Super Deluxe</option>
                          <option value="">Balcony</option>
                          <option value="">Economy</option>
                          <option value="">Luxury</option>
                        </select>
                      </div>
                    </div>
                    <input type="submit" class="search-submit btn btn-primary" value="Find Cruise">  
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('images/tour-1.jpg');">
            <a href="https://vimeo.com/45830194" class="button popup-vimeo"><span class="ion-ios-play"></span></a>
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Welcome to Bon Voyage since 1898 established Far far away.</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(images/promo-1.jpg);"></a>
            <div class="text text-center">
              <h2>Group Cruises</h2>
              <h3 class="price"><span>from</span> $299</h3>
              <a href="#" class="read">Read more</a>
            </div>
          </div>
          <div class="col-lg-3 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(images/promo-2.jpg);"></a>
            <div class="text text-center">
              <h2>Beach Voyages</h2>
              <h3 class="price"><span>from</span> $199</h3>
              <a href="#" class="read">Read more</a>
            </div>
          </div>
          <div class="col-lg-3 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(images/promo-3.jpg);"></a>
            <div class="text text-center">
              <h2>Mountain Voyages</h2>
              <h3 class="price"><span>from</span> $179</h3>
              <a href="#" class="read">Read more</a>
            </div>
          </div>
          <div class="col-lg-3 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(images/promo-3.jpg);"></a>
            <div class="text text-center">
              <h2>Family Voyages</h2>
              <h3 class="price"><span>from</span> $599</h3>
              <a href="#" class="read">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Our Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-sailboat"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Special Activities</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-around"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Travel Arrangements</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-compass"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Private Guide</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-map-of-roads"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Location Manager</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center mb-5 pb-5 ftco-animate">
          <div class="col-md-7 text-center heading-section">
            <h2>Most Popular Destination</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-6 col-lg-3 ftco-animate">
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
          <div class="col-md-6 col-lg-3 ftco-animate">
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
          <div class="col-md-6 col-lg-3 ftco-animate">
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
          <div class="col-md-6 col-lg-3 ftco-animate">
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
          <div class="col-md-6 col-lg-3 ftco-animate">
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
          <div class="col-md-6 col-lg-3 ftco-animate">
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
          <div class="col-md-6 col-lg-3 ftco-animate">
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
          <div class="col-md-6 col-lg-3 ftco-animate">
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
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Our Satisfied Guests says</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="carousel owl-carousel ftco-owl">
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Guests from Italy</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Guests from Italy</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Guests from Italy</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Guests from Italy</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Guests from Italy</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container-fluid">
        <div class="row mb-5 pb-5 no-gutters">
          <div class="col-lg-4 bg-light p-3 p-md-5 d-flex align-items-center heading-section ftco-animate">
            <div>
              <h2 class="mb-5 pb-3">Want to get our hottest travel deals top tips and advice? Subscribe us now!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <span class="icon icon-paper-plane"></span>
                  <input type="text" class="form-control" placeholder="Enter your email address">
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-8 p-2 pl-md-5 heading-section">
            <h2 class="mb-5 p-2 pb-3 ftco-animate">Most Recommended Hotels</h2>
            <div class="row no-gutters d-flex">
              <div class="col-md-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/hotel-1.jpg');">
                  <div class="text">
                    <span class="price">$29/night</span>
                    <h3 class="heading">Luxe Hotel</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Maldives</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/hotel-2.jpg');">
                  <div class="text">
                    <span class="price">$29/night</span>
                    <h3 class="heading">Deluxe Hotel</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Maldives</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/hotel-3.jpg');">
                  <div class="text">
                    <span class="price">$29/night</span>
                    <h3 class="heading">Deluxe Hotel</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Maldives</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Our Blog</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="carousel1 owl-carousel ftco-owl">
            <div class="item">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_5.jpg');">
                </a>
                <div class="text p-4">
                  <div class="meta">
                    <div><a href="#">July 7, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="100">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_6.jpg');">
                </a>
                <div class="text p-4">
                  <div class="meta">
                    <div><a href="#">July 7, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="200">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_7.jpg');">
                </a>
                <div class="text p-4">
                  <div class="meta">
                    <div><a href="#">July 7, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="200">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_8.jpg');">
                </a>
                <div class="text p-4">
                  <div class="meta">
                    <div><a href="#">July 7, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="200">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_9.jpg');">
                </a>
                <div class="text p-4">
                  <div class="meta">
                    <div><a href="#">July 7, 2018</a></div>
                    <div><a href="#">Admin</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <p class="clearfix">
                    <a href="#" class="float-left">Read more</a>
                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Voyage Fellow Tourist</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Book Now</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Flight</a></li>
                <li><a href="#" class="py-2 d-block">Hotels</a></li>
                <li><a href="#" class="py-2 d-block">Tour</a></li>
                <li><a href="#" class="py-2 d-block">Car Rent</a></li>
                <li><a href="#" class="py-2 d-block">Beach &amp; Resorts</a></li>
                <li><a href="#" class="py-2 d-block">Mountains</a></li>
                <li><a href="#" class="py-2 d-block">Cruises</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Top Deals</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Luxe Hotel</a></li>
                <li><a href="#" class="py-2 d-block">Venice Voyages</a></li>
                <li><a href="#" class="py-2 d-block">Deluxe Hotels</a></li>
                <li><a href="#" class="py-2 d-block">Boracay Beach &amp; Resorts</a></li>
                <li><a href="#" class="py-2 d-block">Beach &amp; Resorts</a></li>
                <li><a href="#" class="py-2 d-block">Fuente Villa</a></li>
                <li><a href="#" class="py-2 d-block">Japan Voyages</a></li>
                <li><a href="#" class="py-2 d-block">Philippines Voyages</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">198 West 21th Street, Suite 721 New York NY 10016</a></li>
                <li><a href="#" class="py-2 d-block">+ 1235 2355 98</a></li>
                <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>
                <li><a href="#" class="py-2 d-block">email@email.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


 
  </body>
  @stop