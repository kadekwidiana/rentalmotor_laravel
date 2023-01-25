<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Rental</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Rental <span>Motor</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{ route('about')}}" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="{{ route('motor')}}" class="nav-link">Motorcyle</a></li>
	          <li class="nav-item"><a href="{{ route('contak')}}" class="nav-link">Contact</a></li>
              <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin<i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <form>
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><center>Login</center></a>
                            
                        </form>
                    </li>
                </ul>
            </a>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/pcx1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Motor details <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Motor Details</h1>
        </div>
      </div>
    </div>
  </section>
      

      <section class="ftco-section ftco-car-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="car-details">
                    <div class="img rounded" style="background-image: url(assets/images/scopy3.jpg);"></div>
                    <div class="text text-center">
                        <span class="subheading">Honda</span>
                        <h2>Scoopy White</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Mileage
                          <span>20,000</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Transmission
                          <span>Manual</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Seats
                          <span>1 Adults</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-backpack"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Luggage
                          <span>1 Bags</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">
                          Fuel
                          <span>Pertamax</span>
                      </h3>
                  </div>
              </div>
            </div>
          </div>      
        </div>
        </div>
        <div class="row">
            <div class="col-md-12 pills">
                      <div class="bd-example bd-example-tabs">
                          <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                              <li class="nav-item">
                                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                              </li>
                            </ul>
                          </div>

                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                              <div class="row">
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Airconditions</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Child Seat</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>GPS</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Luggage</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Music</li>
                                      </ul>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Seat Belt</li>
                                          <li class="remove"><span class="ion-ios-close"></span>Sleeping Bed</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Water</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Bluetooth</li>
                                          <li class="remove"><span class="ion-ios-close"></span>Onboard computer</li>
                                      </ul>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="features">
                                          <li class="check"><span class="ion-ios-checkmark"></span>Audio input</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Long Term Trips</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Car Kit</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Remote central locking</li>
                                          <li class="check"><span class="ion-ios-checkmark"></span>Climate control</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>

                          <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                  <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                          </div>

                          <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="row">
                                     <div class="col-md-7">
                                         <h3 class="head">23 Reviews</h3>
                                         <div class="review d-flex">
                                             <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                             <div class="desc">
                                                 <h4>
                                                     <span class="text-left">Jacob Webb</span>
                                                     <span class="text-right">14 March 2018</span>
                                                 </h4>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                     </span>
                                                     <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                 </p>
                                                 <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                             </div>
                                         </div>
                                         <div class="review d-flex">
                                             <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                             <div class="desc">
                                                 <h4>
                                                     <span class="text-left">Jacob Webb</span>
                                                     <span class="text-right">14 March 2018</span>
                                                 </h4>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                     </span>
                                                     <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                 </p>
                                                 <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                             </div>
                                         </div>
                                         <div class="review d-flex">
                                             <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                             <div class="desc">
                                                 <h4>
                                                     <span class="text-left">Jacob Webb</span>
                                                     <span class="text-right">14 March 2018</span>
                                                 </h4>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                     </span>
                                                     <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                 </p>
                                                 <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-5">
                                         <div class="rating-wrap">
                                             <h3 class="head">Give a Review</h3>
                                             <div class="wrap">
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (98%)
                                                     </span>
                                                     <span>20 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (85%)
                                                     </span>
                                                     <span>10 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (70%)
                                                     </span>
                                                     <span>5 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (10%)
                                                     </span>
                                                     <span>0 Reviews</span>
                                                 </p>
                                                 <p class="star">
                                                     <span>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         <i class="ion-ios-star"></i>
                                                         (0%)
                                                     </span>
                                                     <span>0 Reviews</span>
                                                 </p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
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
            <h2 class="ftco-heading-2"><a href="#" class="logo">Rental <span>Motor</span></a></h2>
            <p>#Fast Response  #Harga Pasti & Murah  #Fasilitas Lengkap  #Antar Jemput.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="https://api.whatsapp.com/send?phone=6281939123456"><span class="icon-whatsapp"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/damarmotorbikerental?mibextid=ZbWKwL"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://instagram.com/damarmotorbikerental?igshid=Yzg5MTU1MDY="><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Information</h2>
            <ul class="list-unstyled">
              <li><a href="{{ route('about')}}" class="py-2 d-block">About</a></li>
              <li><a href="{{ route('contak')}}" class="py-2 d-block">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Customer Support</h2>
            <ul class="list-unstyled">
              <li><a href="{{ route('contak')}}" class="py-2 d-block">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Jl.Tirta Tawar 108, Br.Kutuh Kaja, Ubud, Gianyar, Bali-Indonesia</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">087 760 606 090</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text"> damarmotorbikerental@gmail.com</span></a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Damar Motor Bike Rental <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Trio Karangasem</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/aos.js')}}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('js/google-map.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
</body>
</html>