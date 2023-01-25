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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">About Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(assets/images/gambar\ about.jpg);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">About us</span>
	            <h2 class="mb-4">Sewa Motor Bali MURAH & MUDAH</h2>

	            <p>Sewa motor Bali MURAH dengan unit BERKUALITAS 24 Jam penuh.Rental Kami selalu memastikan kenyamanan bagi pelanggang dengan memberikan beberapa falisitas gratis seperti mengantar kendaraan ke hotel konsumen, memastikan jas hujan tersedia di jok motor, dan gratis bahan bakar.</p>
	          </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-intro" style="background-image: url(assets/images/damar2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6 heading-section heading-section-white ftco-animate">
            <h2 class="mb-3">Apakah Anda Ingin menyewa motor? Jadi Jangan Sampai Terlambat.</h2>
            <a href="https://api.whatsapp.com/send?text=Hello&phone=6287734059183&text=Halo, Saya Mau Rental" class="btn btn-secondary btn-lg">Book now</a>
          </div>
				</div>
			</div>
		</section>


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-15 text-center heading-section ftco-animate">
            <h2 class="mb-3">Layanan Rental Motor</h2>
            <h5 class="mb-3">Sewa motor bisa menjadi pilihan tepat bagi Anda yang mengutamakan kecepatan saat bermobilitas. Moda transportasi ini dapat menempuh jarak dekat maupun jauh relatif lebih lincah daripada moda lainnya, seperti kendaraan roda empat. Menembus kepadatan lalu lintas bukanlah hal sulit bila Anda bepergian dengan sewa motor. Dibandingkan kendaraan lain, sewa motor juga relatif lebih terjangkau dari segi harga. Anda jadi bisa menghemat waktu serta biaya.

              Lebih jauh, sewa motor bisa menjadi alternatif praktis ketika Anda berwisata ke daerah yang belum memiliki sarana transportasi publik memadai. Tidak berhenti di sana, Anda bisa lebih menyatu dengan lingkungan alam sekitar dengan bepergian menggunakan motor.
              
              Dalam hal berwisata, tentunya Anda ingin memaksimalkan waktu saat mengunjungi beberapa destinasi sekaligus. Terlebih lagi, bila liburan Anda tergolong singkat, sewa motor bisa menjadi opsi terbaik. </h5>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(assets/images/icon2.png)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Sewa mobil cukup di genggaman Anda, kapan saja dan di mana saja. Bandingkan pilihan mobil dari partner tepercaya kami dengan mudah dan temukan yang sesuai dengan kebutuhan Anda.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(assets/images/icon3.png)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Untuk kondisi kendaraan sendiri kami juga sangat detail mulai dari perawatannya, kebersihannya, hingga mesin-mesinnya. Jadi jangan takut jika kendaraan akan mengalami keluhan selama digunakan.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(assets/images/icon.png)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Untuk memberikan kepuasan kepada konsumen.Motor yang kami sewakan selalu di cek dan dilakukan perawatan berkala ke dealer resmi. Sehingga konsumen bisa menggunakan motor dengan nyaman dan aman selama di Bali.</p>
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