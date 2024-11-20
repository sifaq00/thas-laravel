<!DOCTYPE html>
<html lang="zxx">
	<head>
		        <!-- meta tag -->
                <meta charset="utf-8">
                <title>Tumbuh Hospitality & Arts School</title>
                <meta name="description" content="">
                <!-- responsive tag -->
                <meta http-equiv="x-ua-compatible" content="ie=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- favicon -->
                <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
                <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/tumbuh/favicon-tumbuh.png') }}">
        
                <!-- Bootstrap v5.0.2 css -->
                <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        
                <!-- font-awesome css -->
                <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
        
                <!-- animate css -->
                <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
        
                <!-- owl.carousel css -->
                <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
        
                <!-- slick css -->
                <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
        
                <!-- off canvas css -->
                <link rel="stylesheet" type="text/css" href="{{ asset('css/off-canvas.css') }}">
        
                <!-- linea-font css -->
                <link rel="stylesheet" type="text/css" href="{{ asset('fonts/linea-fonts.css') }}">
        
                <!-- flaticon css  -->
                <link rel="stylesheet" type="text/css" href="{{ asset('fonts/flaticon.css') }}">
        
                <!-- magnific popup css -->
                <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
        
                <!-- Main Menu css -->
                <link rel="stylesheet" href="{{ asset('css/rsmenu-main.css') }}">
        
                <!-- spacing css -->
                <link rel="stylesheet" type="text/css" href="{{ asset('css/rs-spacing.css') }}">
        
                <!-- For Vite generated assets -->
                @vite(['resources/css/app.css'])
        
                <!-- responsive css -->
                <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
                <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
            </head>
            </head>
            <!--Warna Web orange = #FA8E00 | Abu = #303030 | Hijau = #00A450-->
            <body class="home-style5">
                
                <!--Preloader area start here-->
                <div id="loader" class="loader orange-color">
                    <div class="loader-container">
                        <div class='loader-icon'>
                            <img src="{{ asset('images/thas/thas.png') }}" alt="">
        
                        </div>
                    </div>
                </div>
                <!--Preloader area End here-->
        
                <!--Full width header Start-->
                <div class="full-width-header header-style2">
                    <!--Header Start-->
                    <header id="rs-header" class="rs-header">
                        <!-- Topbar Area Start -->
                        <div class="topbar-area home8-topbar">
                            <div class="container">
                                <div class="row y-middle">
                                    <div class="col-md-6">
                                        <ul class="topbar-contact">
                                            <li>
                                                <i class="flaticon-email"></i>
                                                <a href="mailto:hospitality.arts@sekolahtumbuh.sch.id">hospitality.arts@sekolahtumbuh.sch.id</a>
                                            </li>
                                            <li>
                                                <i class="flaticon-phone"></i>
                                                0822–2324-3036
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <ul class="topbar-right">
                                            <li class="login-register"></li>
                                            <li class="btn-part">
                                                <a class="apply-btn" href="https://wa.me/628112535100" target="_blank">Daftar Sekarang!</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Topbar Area End -->
        
                        <!-- Menu Start -->
                        <div class="menu-area menu-sticky">
                            <div class="container">
                                <div class="row y-middle">
                                    <div class="col-lg-5">
                                        <div class="logo-cat-wrap">
                                            <div class="logo-part pr-90">
                                                <a class="dark-logo" href="{{ route('landingpage') }}">
                                                    <img src="{{ asset('images/thas/menu.png') }}" alt="">
                                                </a>
                                                <a class="light-logo" href="{{ route('landingpage') }}">
                                                    <img src="{{ asset('images/thas/white.png') }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 text-center">
                                        <div class="rs-menu-area">
                                            <div class="main-menu pr-30">
                                                <div class="mobile-menu">
                                                    <a class="rs-menu-toggle">
                                                        <i class="fa fa-bars"></i>
                                                    </a>
                                                </div>
                                                <nav class="rs-menu">
                                                   <ul class="nav-menu">
                                                      <li class="rs-mega-menu mega-rs "> <a href="{{ route('landingpage') }}">Home</a>
                                                      </li>
                                                       <li class="menu">
                                                           <a href="{{ route('about') }}">About</a>
        
                                                       </li>
        
                                                       <li class="menu-item-has-children">
                                                           <a href="#">Program</a>
                                                           <ul class="sub-menu">
                                                               <li><a href="{{ route('perhotelan') }}">Program Perhotelan</a> </li>
                                                               <li><a href="{{ route('shortcourse') }}">Program Short Course</a> </li>
                                                           </ul>
                                                       </li>
        
                                                       <li class="menu">
                                                           <a href="{{ route('articles.index') }}">Info & Berita</a>
                                                       </li>
        
                                                       <li class="current-menu-item">
                                                           <a href="#">Kontak</a>
                                                       </li>
                                                   </ul> <!-- //.nav-menu -->
                                                </nav>
                                            </div> <!-- //.main-menu -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Menu End -->
                    </header>
                    <!--Header End-->
                </div>
                <!--Full width header End-->
        
        <section id="kontak" class="kontak-container py-5">
            <h2 class="kontak-title text-center mb-4">Kontak Kami</h2>
            <div class="row">
              <!-- Form Kontak -->
              <div class="col-md-6 kontak-form">
                <form id="kontak-form">
                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda" required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" required>
                  </div>
                  <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis pesan Anda" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                </form>
              </div>
              <!-- Info Kontak -->
              <div class="col-md-6 kontak-info">
                <h4>Informasi Kontak</h4>
                <p><strong>Alamat Lembaga:</strong><br> Tumbuh Hospitality & Arts School, Sekolah Tumbuh Kampus Terpadu, Jl. KH. Ali Maksum, Panggungharjo, Sewon, Bantul, D.I Yogyakarta</p>
                <p><strong>Email:</strong><br> hospitality.arts@sekolahtumbuh.sch.id</p>
                <p><strong>Nomor Kontak:</strong><br> 0822 – 2324 - 3036</p>
                <p><strong>Instagram:</strong><br> <a href="https://instagram.com/hospitality.artsschool" target="_blank">@hospitality.artsschool</a></p>
              </div>
            </div>
          </section>
        
          <!-- Peta Lokasi -->
          <section class="container py-5 peta">
            <h4 class="text-center mb-4">Lokasi Kami</h4>
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.4668854711276!2d110.35326317405057!3d-7.846104877966404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57eafc8da2d7%3A0x296082143669b908!2z6qeL6qax6qa86qaP6qa66qa06qat6qaD6qag6qa46qap6qeA6qan6qa46qaDIFNFS09MQUggVFVNQlVI!5e0!3m2!1sid!2sid!4v1731408017564!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </section>
        

        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer style8">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                            <h4 class="widget-title">Program Studi</h4>
                            <ul class="site-map">
                                <li><a href="#">Program Perhotelan</a></li>
                                <li><a href="#">Short Course</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                            <h4 class="widget-title">Short Course Program</h4>
                            <ul class="site-map">
                                <li><a href="#">Short Course Kuliner</a></li>
                                <li><a href="#">Short Course Eksplorasi Seni</a></li>
                                <li><a href="#">Paket Edukasi Cooking Class</a></li>
                                <li><a href="#">Galeri Kegiatan</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                            <h4 class="widget-title">Kemitraan</h4>
                            <ul class="site-map">
                                <li><a href="#">Artotel Hotel</a></li>
                                <li><a href="#">Grup Mesa</a></li>
                                <li><a href="#">Grup Colours Street Food</a></li>
                                <li><a href="#">Grup Casa</a></li>
                                <li><a href="#">JNM Bloc</a></li>
                                <li><a href="#">Grup Kopi Mlaku</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                            <h4 class="widget-title">Address</h4>
                            <ul class="address-widget">
                                <li>
                                    <i class="flaticon-location"></i>
                                    <div class="desc">Sekolah Tumbuh Kampus Terpadu, Jl. KH. Ali Maksum, Panggungharjo, Sewon, Bantul, D.I Yogyakarta</div>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <div class="desc">
                                        <a href="tel:(+62)82223243036">082223243036</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <div class="desc">
                                        <a href="mailto:hospitality.arts@sekolahtumbuh.sch.id">hospitality.arts@sekolahtumbuh.sch.id</a> 
                                        <a href="https://sekolahtumbuh.sch.id">www.sekolahtumbuh.sch.id</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-4 md-mb-20">
                            <div class="footer-logo md-text-center">
                                <a href="index.html"><img src="{{asset('images/thas/white.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-20">
                            <div class="copyright text-center md-text-start">
                                <p>&copy; 2024 Developed By <a href="https://sekolahtumbuh.sch.id">Sekolah Tumbuh</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 text-end md-text-start">
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

		<!-- start scrollUp  -->
		<div id="scrollUp" class="orange-color">
			<i class="fa fa-angle-up"></i>
		</div>
		<!-- End scrollUp  -->

		<!-- Search Modal Start -->
        <div class="modal fade search-modal" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <button type="button" class="close" data-bs-dismiss="modal">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

		<script>
			$(document).ready(function() {
				$('.popup-videos').magnificPopup({
					type: 'iframe'
				});
			});
		</script>
		
        <!-- Search Modal End -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

		<!-- modernizr js -->
        <script src="{{ asset('js/modernizr-2.8.3.min.js') }}"></script>

        <!-- jquery latest version -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>

        <!-- Bootstrap v5.0.2 js -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <!-- Menu js -->
        <script src="{{ asset('js/rsmenu-main.js') }}"></script>

        <!-- op nav js -->
        <script src="{{ asset('js/jquery.nav.js') }}"></script>

        <!-- owl.carousel js -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

        <!-- Slick js -->
        <script src="{{ asset('js/slick.min.js') }}"></script>

        <!-- isotope.pkgd.min js -->
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

        <!-- imagesloaded.pkgd.min js -->
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>

        <!-- wow js -->
        <script src="{{ asset('js/wow.min.js') }}"></script>

        <!-- Skill bar js -->
        <script src="{{ asset('js/skill.bars.jquery.js') }}"></script>

        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>

        <!-- counter top js -->
        <script src="{{ asset('js/waypoints.min.js') }}"></script>

        <!-- video js -->
        <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>

        <!-- magnific popup js -->
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

        <!-- plugins js -->
        <script src="{{ asset('js/plugins.js') }}"></script>

        <!-- contact form js -->
        <script src="{{ asset('js/contact.form.js') }}"></script>

        <!-- app js -->
        @vite('resources/js/app.js')
</body>
</html>