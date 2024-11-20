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
<body class="defult-home">

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
                                              <li class="menu"> <a href="{{ route('landingpage')}}">Home</a>
                                              </li>
                                               <li class="rs-mega-menu mega-rs current-menu-item">
                                                   <a href="#">About</a>

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

                                               <li class="menu">
                                                   <a href="{{ route('contact') }}">Kontak</a>
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


		<!-- Main content Start -->
		<div class="main-content">
			<!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs breadcrumbs-overlay">
					<div class="breadcrumbs-img">
							<img src="{{ asset('images/thas/breadcrumbs.png') }}" alt="Breadcrumbs Image">

					</div>
					<div class="breadcrumbs-text white-color">
							<h1 class="page-title">About Us</h1>
							<ul>
								<li>
									<a class="active" href="{{ route('landingpage') }}">Home</a>
								</li>
								<li>About Us</li>
							</ul>
					</div>
			</div>
			<!-- Breadcrumbs End -->

			<!-- About Section Start -->
			<div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 order-last padding-0 md-pl-15 md-pr-15 md-mb-30">
							<div class="img-part">
								<img class="" src="{{ asset('images/about/lkp4.png') }}" alt="About Image">
							</div>
						</div>
						<div class="col-lg-6 pr-70 md-pr-15">
							<div class="sec-title">
								<div class="sub-title orange">Tentang Tumbuh Hospitality & Arts School</div>
								<h3 class="title mb-17">Profil Tumbuh Hospitality & Arts School</h3>

								<div class="desc">
                                    <p style="line-height: 1.5; text-align:justify">Setelah 18 tahun berdiri, Sekolah Tumbuh melebarkan sayapnya dengan melahirkan lembaga pendidikan lanjutan setelah jenjang SMA. Lembaga ini bernama Tumbuh Hospitality & Arts School. Dengan lahirnya lembaga baru ini maka Sekolah Tumbuh telah memberikan fasilitas pendidikan lengkap kepada masyarakat dari jenjang PAUD sampai jenjang pendidikan tinggi. </p>
                                    <p style="line-height: 1.5; text-align:justify">Tumbuh Hospitality & Arts School merupakan satuan pendidikan non formal berbentuk Lembaga Kursus dan Pelatihan (LKP) di bawah naungan Yayasan Edukasi Anak Nusantara yang mengusung pendidikan inklusi dan menyelenggarakan program pendidikan vokasi di bidang operasional perhotelan, kuliner, dan seni.</p>
                                    Melalui Tumbuh Hospitality & Arts School ini diharapkan:
                                    <ol style="padding-left: 15px; list-style-type: decimal; ">
                                        <li>Memberikan fasilitas keberlanjutan untuk lulusan SMA Tumbuh.</li>
                                        <li>Memberikan kesempatan seluas-luasnya kepada anak untuk mengembangkan potensi dan minat sesuai dengan kebutuhannya.</li>
                                        <li>Memberikan kesempatan kepada masyarakat yang membutuhkan.</li>
                                    </ol>
                                    Program pendidikan yang dibuka di Tumbuh Hospitality & Arts School saat ini:
                                    <ol style="padding-left: 15px; list-style-type: decimal;">
                                        <li>Program Perhotelan 1 tahun</li>
                                        <li>Short Course Kuliner</li>
                                        <li>Short Course Eksplorasi Seni</li>
                                        <li>Paket Edukasi Cooking Class </li>
                                    </ol>
                                    Sasaran program:
                                    <ol style="padding-left: 15px; list-style-type: decimal;">
                                        <li>Program pendidikan setara D1, diselenggarakan bagi peserta didik lulusan SMA dan sederajat.</li>
                                        <li>Program short course, diselenggarakan bagi peserta didik mulai dari anak-anak (kelompok usia TK dan SD), remaja (kelompok usia SMP dan SMA), dan umum.</li>
                                        <li>Paket Edukasi Cooking Class, saat ini masih diselenggarakan untuk internal siswa dan staf Sekolah Tumbuh.</li>
                                    </ol>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Section End -->

            <!-- Visi & Misi -->
            <div class="rs-about style1 pt-70 pb-70 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 padding-0 md-pl-15 md-pr-15 md-mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="img-part">
                                <img src="https://sekolahtumbuh.sch.id/public/assets/images/tumbuh/sma/bg2.png" alt="About Image">
                            </div>
                            <ul class="nav nav-tabs histort-part" id="myTab" role="tablist">
                                <li class="nav-item tab-btns single-history" role="presentation">
                                    <a class="nav-link tab-btn active" href="#" id="about-mission-tab" data-bs-toggle="tab" data-bs-target="#about-mission" role="tab" aria-controls="about-mission" aria-selected="false">
                                        <span class="icon-part"><i class="flaticon-idea"></i></span>Visi
                                    </a>
                                </li>
                                <li class="nav-item tab-btns single-history last-item" role="presentation">
                                    <a class="nav-link tab-btn" href="#" id="about-admin-tab" data-bs-toggle="tab" data-bs-target="#about-admin" role="tab" aria-controls="about-admin" aria-selected="false">
                                        <span class="icon-part"><i class="flaticon-target"></i></span>Misi
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-5 offset-lg-1 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="tab-content tabs-content" id="myTabContent">
                                <div class="tab-pane tab fade show active" id="about-mission" role="tabpanel" aria-labelledby="about-mission-tab">
                                    <div class="sec-title mb-25">
                                        <h2 class="title">Visi</h2>
                                        <div class="desc">Menghasilkan lulusan yang berkarakter, profesional dalam bekerja, dan memiliki jiwa kewirausahaan.</div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="about-admin" role="tabpanel" aria-labelledby="about-admin-tab">
                                    <div class="sec-title mb-25">
                                        <h2 class="title">Misi</h2>
                                        <ol class="review-list">
                                            <li>Menyelenggarakan program pendidikan reguler dan non reguler di bidang operasional perhotelan, kuliner, dan seni yang menekankan pada penguasaan ketrampilan yang selalu terbaharui, mengikuti perkembangan informasi dan teknologi, serta tuntutan dunia kerja dan dunia industri.</li>
                                            <li>Menyelenggarakan program pendidikan yang mengusung nilai-nilai inklusif, Jogja educational spirit, kepedulian pada lingkungan, dan pendidikan berkelanjutan.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Visi & Misi End -->


            <!-- Fasilitas Pendidikan Section -->
            <section class="facilitas-section py-5">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="section-title">Fasilitas Pendidikan</h2>
                        <p class="section-subtitle-fasil">Fasilitas yang ada Tumbuh Hospitality & Arts School</p>
                    </div>
                    <div class="row g-4">
                        <!-- Card 1 -->
                        <div class="col-lg-3 col-md-6 facilitas-card animate__animated animate__fadeInUp">
                            <div class="card shadow-sm">
                                <img src="{{ asset('images/about/RuangKelas.png') }}" alt="Ruang Kelas" class="facilitas-img">
                                <h5 class="facilitas-title">Ruang Kelas nyaman ber-AC</h5>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col-lg-3 col-md-6 facilitas-card animate__animated animate__fadeInUp">
                            <div class="card shadow-sm">
                                <img src="{{ asset('images/about/LabFood.png') }}" alt="Lab. Food" class="facilitas-img">
                                <h5 class="facilitas-title">Lab. Food & Beverage Service</h5>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="col-lg-3 col-md-6 facilitas-card animate__animated animate__fadeInUp">
                            <div class="card shadow-sm">
                                <img src="{{ asset('images/about/LabHousekeeping.png') }}" alt="Lab. Housekeeping" class="facilitas-img">
                                <h5 class="facilitas-title">Lab. Housekeeping</h5>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="col-lg-3 col-md-6 facilitas-card animate__animated animate__fadeInUp">
                            <div class="card shadow-sm">
                                <img src="{{ asset('images/about/LabKitchen.png') }}" alt="Lab. Kitchen" class="facilitas-img">
                                <h5 class="facilitas-title">Lab. Kitchen</h5>
                            </div>
                        </div>
                        <!-- Additional Cards (Initially Hidden) -->
                        <div class="col-lg-3 col-md-6 facilitas-card animate__animated animate__fadeInUp" style="display: none;">
                            <div class="card shadow-sm">
                                <img src="{{ asset('images/about/LabFrontOffice.png') }}" alt="Lab. Front Office " class="facilitas-img">
                                <h5 class="facilitas-title">Lab. Front Office</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 facilitas-card animate__animated animate__fadeInUp" style="display: none;">
                            <div class="card shadow-sm">
                                <img src="{{ asset('images/about/Lainnya.png') }}" alt="Assesemen Psikologi" class="facilitas-img">

                            </div>
                        </div>

                        <!-- Add more hidden cards as needed -->
                    </div>
                    <div class="text-center mt-4">
                        <button id="showMoreBtn" class="btn btn-custom">Lihat Semua</button>
                    </div>
                </div>
            </section>
            <!-- Fasilitas Pendidikan End-->

            <!-- Kemitraan Section -->
            <div class="kemitraan-section text-center">
                <div class="container">
                    <h2 class="kemitraan-title mb-4">Kemitraan</h2>
                    <p class="kemitraan-description mb-5">
                        Sebagai upaya mendukung pembelajaran mahasiswa Tumbuh Hospitality & Arts School, kami telah membangun kemitraan dengan beberapa industri dan hotel di Yogyakarta, antara lain:
                    </p>


                    <!-- Daftar Kemitraan -->
                    <div class="row justify-content-center kemitraan">
                        <div class="col-lg-4 col-md-6 col-sm-6 kemitraan-card animate__animated animate__fadeInUp">
                            <div class="card">
                                <div class="card-mitra">
                                    <h5 class="mitra-name">Artotel Hotel</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 kemitraan-card animate__animated animate__fadeInUp">
                            <div class="card">
                                <div class="card-mitra">
                                    <h5 class="mitra-name">Grup Mesa</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 kemitraan-card animate__animated animate__fadeInUp">
                            <div class="card">
                                <div class="card-mitra">
                                    <h5 class="mitra-name">Grup Colours Street Food</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 kemitraan-card animate__animated animate__fadeInUp">
                            <div class="card">
                                <div class="card-mitra">
                                    <h5 class="mitra-name">Grup Casa</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 kemitraan-card animate__animated animate__fadeInUp">
                            <div class="card">
                                <div class="card-mitra">
                                    <h5 class="mitra-name">JNM Bloc</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 kemitraan-card animate__animated animate__fadeInUp">
                            <div class="card">
                                <div class="card-mitra">
                                    <h5 class="mitra-name">Grup Kopi Mlaku</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kemitraan Section End -->

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
                                <a href="{{ route('landingpage') }}"><img src="{{ asset('images/thas/white.png') }}" alt=""></a>
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
