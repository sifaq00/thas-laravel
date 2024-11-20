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
                            <div class="img-part">
                                <img src="https://sekolahtumbuh.sch.id/public/assets/images/tumbuh/sma/bg1.png" alt="About Image">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-70 md-pr-15 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="sec-title">
                                <div class="sub-title orange">Tentang Kami</div>
                                <h2 class="title mb-17">Profil Lulusan Program Studi Perhotelan</h2>
                                <div class="desc">
                                    <p>Program perhotelan adalah program pendidikan 1 tahun atau setara Diploma 1 (D1) di bidang operasional hotel untuk lulusan SMA dan sederajat.</p>
                                    <p>Lulusan prodi perhotelan Tumbuh Hospitality & Arts School akan memiliki ketrampilan operasional perhotelan yang berkaitan dengan pekerjaan pada departmen <b>Housekeeping, Front Office, Food & Beverage Service, Food & Beverage Production, dan Pastry & Bakery.</b> Lulusan prodi perhotelan juga akan memiliki bekal kewirausahaan yang ramah lingkungan dan memiliki kemampuan berkomunikasi dengan bahasa yang baik dan benar minimal dalam dua bahasa, Indonesia dan Inggris.</p>
                                    <p>Lulusan prodi perhotelan dapat <b>bekerja</b> di bawah pengawasan supervisor di bidang operasional hotel atau dunia industri, berwirausaha secara mandiri, maupun melanjutkan ke jenjang Perguruan Tinggi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- Kurikulum dan Pembelajaran Section -->
        <div class="educational-program-content-wrapper">
            <div id="curriculum-learning-section" class="curriculum-learning-section pt-50 pb-100 md-pt-70 md-pb-70">
                <div class="section-container">
                    <div>
                        <div class="section-introduction-title">Kurikulum dan Pembelajaran</div>
                    </div>

                    <div class="flexible-content-row">
                        <!-- Card Kurikulum -->
                        <div class="card-column curriculum-details-card">
                            <div class="card-information-content">
                                <h2 class="section-subtitle mb-20">Kurikulum</h2>
                                <p>Kurikulum adalah jantungnya pendidikan (the heart of education). Tanpa kurikulum proses pembelajaran menjadi tidak jelas arah dan orientasinya. Kurikulum bagi mahasiswa Tumbuh Hospitality & Arts School dikembangkan dengan mengacu pada tiga aspek:</p>
                                <ul class="curriculum-information-list">
                                    <li><strong>SNDikti:</strong> Kurikulum Tumbuh Hospitality & Arts School menggunakan skema pendidikan tinggi (8 standar pendidikan) sehingga memiliki citarasa perkuliahan.</li>
                                    <li><strong>KKNI:</strong> Kurikulum Tumbuh Hospitality & Arts School mengacu pada Kerangka Kualifikasi Nasional Indonesia (KKNI) level 3.</li>
                                    <li><strong>Perpektif Inklusi:</strong> Kurikulum Tumbuh Hospitality & Arts School dikembangkan dengan menggunakan perspektif inklusi.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Card Pembelajaran -->
                        <div class="card-column learning-method-card">
                            <div class="card-information-content">
                                <h2 class="section-subtitle mb-20">Pembelajaran</h2>
                                <p>Proses pembelajaran di Tumbuh Hospitality & Arts School berpusat pada mahasiswa (Student Centered Learning) dan dirancang dengan skema pembelajaran sebagai berikut:</p>
                                <ul class="learning-details-list">
                                    <li>Lama studi 2 semester</li>
                                    <li>Beban belajar 36 SKS</li>
                                    <li>Komposisi pembelajaran 30% teori dan 70% praktik</li>
                                    <li>On The Job Training (OJT) di hotel/industri selama 3 bulan</li>
                                    <li>Program penunjang pembelajaran: Guest lecturer, kunjungan industri, pembekalan OJT (Grooming, Table manner, dan praktik terintegrasi lintas peminatan), gelar karya mahasiswa</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Kurikulum dan Pembelajaran Section -->

        

        <!-- Section Program Keistimewaan -->
        <section id="program-keistimewaan" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4 program-title">Program Keistimewaan Kampus</h2>
                <p class="text-center lead mb-3 program-description">
                    Tumbuh Hospitality & Arts School memiliki program keistimewaan <strong>Green Entrepreneurship</strong>. Program ini menjadi program unggulan dan kekhasan dari Tumbuh Hospitality & Arts School.  
                </p>
                <p class="text-center lead mb-4 program-description">
                    Program ini terintegrasi pada mata kuliah Green Entrepreneurship dan berbasis projek (Project Based Learning) yang berbentuk unit usaha kuliner. Dibawah ini adalah tujuan dan kegiatan dari program keistimewaan Green Entrepreneurship
                </p>
                
                <div class="row">
                    <!-- Card 1: Pengembangan Pembelajaran -->
                    <div class="col-md-6 mb-4">
                        <div class="card program-card shadow-lg d-flex flex-row">
                            <img src="{{ asset('images/icon/Pembelajaran.png') }}" alt="Pengembangan Pembelajaran" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Pengembangan Pembelajaran</h3>
                                <p class="card-text">Program ini menyediakan wadah untuk mengasah skill kewirausahaan mahasiswa yang inklusif dan ramah lingkungan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Unit Usaha Lembaga -->
                    <div class="col-md-6 mb-4">
                        <div class="card program-card shadow-lg d-flex flex-row">
                            <img src="{{ asset('images/icon/LembagaUsaha.png') }}" alt="Unit Usaha Lembaga" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Unit Usaha Lembaga</h3>
                                <p class="card-text">Program ini diharapkan menghasilkan keuntungan bagi lembaga dan mahasiswa serta mampu menghidupkan ekonomi sirkular.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Card 3: Kegiatan Program -->
                    <div class="col-md-7 mx-auto">
                        <div class="card program-card shadow-lg d-flex flex-row">
                            <img src="{{ asset('images/icon/GreenEntre.png') }}" alt="Kegiatan Program" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Kegiatan Program Green Entrepreneurship</h3>
                                <ul class="program-activities" style="list-style-type: disc; padding-left: 20px;">
                                    <li>Membuat Business Plan</li>
                                    <li>Pembekalan Kewirausahaan</li>
                                    <li>Pembekalan Digital Marketing</li>
                                    <li>Produksi dan Penjualan Produk</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="d-flex flex-row align-items-center">
                            <div class="col-md-3">
                                <img src="{{ asset('images/thas/bakehouse.png') }}" alt="Tumbuh BakeHouse" class="bakehouse-img img-fluid">
                            </div>
                            <div class="col-md-9"> 
                                <h3 class="bakehouse-title">Tumbuh BakeHouse</h3>
                                <p class="bakehouse-text">
                                    Tumbuh BakeHouse merupakan merk produk sekaligus nama unit usaha kuliner yang telah dihasilkan dari program keistimewaan kampus Green Entrepreneurship.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End Section Program Keistimewaan -->
        
        
        <!-- Gallery Section -->
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
        <!-- End Gallery Section -->
</div> 
<!-- Main content End --> 

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
                                <a href="{{ ('index') }}"><img src="{{ asset('images/thas/white.png') }}" alt=""></a>
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