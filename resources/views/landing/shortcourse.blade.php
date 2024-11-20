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

                                               <li class="menu-item-has-children current-menu-item">
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
        <!--Full width header End-->


		<!-- Main content Start -->
        <div class="main-content">
            <div id="rs-about" class="rs-about style1 pt-50 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-last padding-0 md-pl-15 md-pr-15 md-mb-30 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="video-part">
                                <iframe class="styled-video" width="100%" height="315" src="https://www.youtube.com/embed/Pz16x5L9TMM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 pr-70 md-pr-15 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="sec-title">
                                <div class="sub-title orange">Tentang Kami</div>
                                <h2 class="title mb-17">Short Course Kuliner</h2>
                                <div class="desc">
                                    <h5 style="margin-bottom: 5px;"><i>Salam pencinta dan penikmat kuliner</i></h5>
                                    <p style="margin-bottom: 7px;">Tumbuh Hospitality & Arts School hadir untuk menyambut teman-teman semua yang memerlukan 
                                       bekal pengetahuan, keterampilan, dan kecakapan hidup untuk mengembangkan diri, mengembangkan profesi,
                                       bekerja, atau berusaha mandiri di dunia kuliner. </p>
                                    <p style="margin-bottom: 2px;"><strong>Kami menyediakan kelas-kelas berupa:</strong></p>
                                    <ol style="padding-left: 15px;">
                                        <li>1. Cooking Class Program Intensif (usia remaja dan dewasa)</li>
                                        <li>2. Cooking Class Program Liburan (untuk anak-anak usia TK dan SD)</li>
                                    </ol>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Short Course Eksplorasi Seni Section -->
        <div class="art-section">
            <div class=" art-course-container">
                <div class="art-course-title">Short Course Eksplorasi Seni</div>
                <blockquote class="art-course-quote">
                    “Setiap anak adalah artis. Masalahnya bagaimana agar kita tetap menjadi artis pada saat dewasa."  
                    <br>- Pablo Picasso -
                </blockquote>
            
                <div class="art-course-content">
                    <p>
                        Short course Eksplorasi Seni menyediakan pembelajaran seni 2D, 3D, fine arts, applied arts, dan seni kontemporer. Peserta juga akan diikutkan dalam pameran seni bersama, melakukan pameran bersama di luar kampus, atau melakukan pameran secara mandiri.
                    </p>
                    <div class="art-course-goals">
                        <h3 class="goals-title">Melalui Short course Eksplorasi Seni, kami ingin mengajak anak-anak dan orang tua melihat seni dengan lebih luas, yaitu:</h3>
                        <div class="art-course-cards">
                            <div class="creative-card">
                                <div class="content-art">
                                    <h3>Seni sebagai wahana ekspresi</h3>
                                    <p>Menyuarakan jiwa dan emosi melalui beragam media seni.</p>
                                </div>
                            </div>
                            <div class="creative-card">
                                <div class="content-art">
                                    <h3>Seni sebagai sarana pengembangan kreativitas</h3>
                                    <p>Merangsang imajinasi tanpa batas dan menginspirasi inovasi.</p>
                                </div>
                            </div>
                            <div class="creative-card">
                                <div class="content-art">
                                    <h3>Seni sebagai pengembangan bakat anak</h3>
                                    <p>Mengasah bakat dan minat untuk membantu anak-anak bersinar.</p>
                                </div>
                            </div>
                            <div class="creative-card">
                                <div class="content-art">
                                    <h3>Seni sebagai sarana pembinaan keterampilan</h3>
                                    <p>Melatih keterampilan dan ketekunan melalui proses kreatif.</p>
                                </div>
                            </div>
                            <div class="creative-card">
                                <div class="content-art">
                                    <h3>Seni sebagai sarana pembentukan kepribadian</h3>
                                    <p>Membentuk karakter yang kuat dan autentik lewat seni.</p>
                                </div>
                            </div>
                            <div class="creative-card">
                                <div class="content-art">
                                    <h3>Seni sebagai sarana pembinaan impuls estetik</h3>
                                    <p>Menumbuhkan apresiasi terhadap keindahan dan estetika.</p>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            
        </div>
        <!-- End Short Course Eksplorasi Seni Section -->


        <!-- Paket Edukasi Cooking Class Section -->
        <div class="cooking-class">
        <section class="cooking-header">
            <div class="overlay"></div>
            <h1 class="display-4">Paket Edukasi Cooking Class</h1>
            <p class="lead">Paket Edukasi Cooking Class adalah program layanan pembelajaran pengolahan menu makanan, minuman, kue-kue, atau roti di Tumbuh Hospitality & Arts School.</p>
        </section>

        <section id="edu-section" class="edu-section container">
            <div class="row mb-5">
            <div class="col-lg-12">
                <div class="card-edu p-4 rounded shadow-sm animate-hover">
                <h2 class="edu-title">🎯 Sasaran (Internal)</h2>
                <p>Semua siswa, edukator, dan staf Sekolah Tumbuh yang memerlukan bekal pengetahuan, keterampilan, dan kecakapan hidup untuk mengembangkan diri, mengembangkan profesi, bekerja, atau berwirausaha mandiri di dunia kuliner.</p>
                </div>
            </div>
            </div>
        
            <!-- Fasilitas & Ketentuan Peserta Section -->
            <div class="row mb-5">
            <div class="col-md-6">
                <div class="card-edu p-4 rounded shadow-sm animate-hover">
                <h2 class="edu-title">🍴 Fasilitas</h2>
                <div class="edu-list-item"><span class="icon-badge">🍲</span><span>Bahan praktik disediakan</span></div>
                <div class="edu-list-item"><span class="icon-badge">📜</span><span>Resep</span></div>
                <div class="edu-list-item"><span class="icon-badge">👨‍🍳</span><span>Apron & topi chef (untuk anak-anak)</span></div>
                <div class="edu-list-item"><span class="icon-badge">🛍️</span><span>Produk dibawa pulang</span></div>
                <div class="edu-list-item"><span class="icon-badge">🏢</span><span>Lab. Kitchen ber-AC</span></div>
                <div class="edu-list-item"><span class="icon-badge">💊</span><span>Obat-obatan P3K</span></div>
                </div>
            </div>
        
            <!-- Ketentuan Peserta dan Pengajar Card -->
            <div class="col-md-6">
                <div class="card-edu p-4 rounded shadow-sm animate-hover">
                <h2 class="edu-title">📋 Ketentuan Peserta dan Pengajar</h2>
                <p class="ketentuan-list">Kapasitas Lab. Kitchen per sesi sebanyak 12-20 orang. <strong>Apabila peserta melebihi kapasitas, maka kegiatan Cookng Class akan disesuaikan.</strong></p>
                <p class="ketentuan-list">Peserta anak-anak berkebutuhan khusus wajib didampingi untuk keselamatan.</p>
                <p class="ketentuan-list"><strong>Ketentuan Pengajar :</strong> Pengajar adalah Chef dari Tumbuh Hospitality & Arts School, Rombongan 1 kelas memiliki asisten pengajar
                
                </p>
                </div>
            </div>
            </div>
        
            <!-- Tata Cara Pendaftaran Section -->
            <div class="row mb-5">
            <div class="col-lg-12">
                <div class="card-edu p-4 rounded shadow-sm animate-hover">
                <h2 class="edu-title">📞 Tata Cara Pendaftaran</h2>
                <p style="line-height: 1.5;">PIC rombongan dapat menghubungi admin di nomor <a href="https://wa.me/6282223243036" class="contact-link">0822-2324-3036</a></p>
                <p style="line-height: 1.5;">PIC melakukan koordinasi persiapan dengan Tumbuh Hospitality & Arts School.</p>
                </div>
            </div>
            </div>
        </section>
    </div>

    <!-- Gallery Section -->
    <div class="gallery-cooking">
        <div class="container my-5">
            <h2 class="text-center gallery-title mb-5">Galeri Kegiatan</h2>
            <div class="row gallery-grid">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="gallery-item">
                        <img src="{{ asset('images/thas/lkp1.png') }}" alt="Gallery Image 1" class="img-fluid gallery-img">
                        <div class="gallery-overlay">
                            <div class="gallery-text">Kegiatan 1</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="gallery-item">
                        <img src="{{ asset('images/thas/lkp2.png') }}" alt="Gallery Image 2" class="img-fluid gallery-img">
                        <div class="gallery-overlay">
                            <div class="gallery-text">Kegiatan 2</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="gallery-item">
                        <img src="{{ asset('images/thas/lkp3.png') }}" alt="Gallery Image 3" class="img-fluid gallery-img">
                        <div class="gallery-overlay">
                            <div class="gallery-text">Kegiatan 3</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="gallery-item">
                        <img src="{{ asset('images/thas/lkp4.png') }}" alt="Gallery Image 3" class="img-fluid gallery-img">
                        <div class="gallery-overlay">
                            <div class="gallery-text">Kegiatan 4</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
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
                                <a href="index.html"><img src="{{ asset('images/thas/white.png') }}" alt=""></a>
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