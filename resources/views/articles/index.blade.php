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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">



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
                                              <li class="rs-mega-menu mega-rs"> <a href="{{ route('landingpage') }}">Home</a>
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

                                               <li class="current-menu-item">
                                                   <a href="#">Info & Berita</a>
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



        <!-- Section: Artikel -->
        <div class="container">
            <h2 class="text-center mb-4 font-bold text-2xl md:text-2xl lg:text-4xl">
                Info dan Berita Tumbuh Hospitality & Arts School</h2>
        </div>


       <!-- Pencarian -->
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="{{ route('articles.index') }}" method="GET" class="d-flex justify-content-center align-items-center">
                        <!-- Kotak Pencarian -->
                        <div class="input-group search-box">
                            <input
                                type="text"
                                name="search"
                                value="{{ request('search') }}"
                                class="form-control search-input"
                                placeholder="Cari artikel..."
                                aria-label="Cari artikel..."
                            />
                        </div>

                        <!-- Tombol Pencarian -->
                        <button type="submit" class="btn btn-primary search-button ms-3">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <section class="container my-5">
            <div class="row">
                <!-- Jika ada kategori terpilih -->
        @if($selectedCategory)
        <div class="col-12 mb-4">
            <h4 class="note-category text-center text-md-start">
                Menampilkan artikel dalam kategori: <span class="title-category">{{ $selectedCategory->name }}</span>
                <a href="{{ route('articles.index') }}" class="btn btn-filtercategory">Hapus Filter</a>
            </h4>
        </div>
        @endif
            <!-- List artikel -->
            <div class="col-lg-8 mb-4">
                <div class="row g-4">
                <!-- Card Template -->
                @foreach($articles as $article)
                <div class="col-md-6">
                    <div class="card news-card h-100">
                    <img
                        src="{{ asset('storage/' . $article->image) }}"
                        class="card-img-top news-img"
                        alt="{{ $article->title }}"
                    />
                    <div class="card-body">
                        <h5 class="article-title mb-2">{{ $article->title }}</h5>
                        <p class="card-text small text-muted mb-2">{{ $article->created_at->format('d M Y : H.i') }} | {{ $article->author }}</p>
                        <p class="card-text">
                            {!! nl2br(e(strip_tags(Str::limit($article->content, 100)))) !!}
                        </p>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary read-more">Baca Selengkapnya</a>
                    </div>
                    </div>

                </div>
                @endforeach
                <!-- Tambahkan lebih banyak card sesuai kebutuhan -->
                </div>
            </div>



            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar-container">
                <!-- Artikel Terbaru -->
                <div class="sidebar-box p-4 mb-4">
                    <h4 class="fw-bold mb-3 border-bottom pb-2">Artikel Terbaru</h4>
                    <ul class="list-group list-group-flush">
                    @foreach ($recentArticles as $latest)
                    <li class="list-group-item">
                        <a href="{{ route('articles.show', $latest->id) }}" class="text-orange-600 hover:text-orange-400">{{ $latest->title }}</a>
                    </li>
                    @endforeach
                    </ul>
                </div>

                <!-- Kategori -->
                <div class="sidebar-box p-4 mb-4">
                    <h4 class="fw-bold mb-3 border-bottom pb-2">Kategori</h4>
                    <ul class="list-group list-group-flush">
                    @foreach($categories as $category)
                    <li class="list-group-item">
                        <a href="{{ route('articles.index', ['category' => $category->id]) }}" class="text-decoration-none">{{ $category->name }}</a>
                    </li>
                    @endforeach
                    </ul>
                </div>

                <!-- Informasi Pendaftaran -->
                <div class="sidebar-box p-4">
                    <h4 class="fw-bold mb-3 border-bottom pb-2">Informasi Pendaftaran</h4>
                    <div class="card info-card mb-3">
                    <img
                        src="{{ asset('images/poster/posterpendaftaran1.jpg') }}"
                        class="card-img-top"
                        alt="Poster Pendaftaran"
                    />
                    <div class="card-body text-center">
                        <h5 class="card-title">Pendaftaran Mahasiswa Baru</h5>
                        <button
                        class="btn btn-infopendaftaran"
                        data-bs-toggle="modal"
                        data-bs-target="#detailModal"
                        >
                        Lihat Detail
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="detailModalLabel">Informasi Pendaftaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Carousel Gambar -->
                            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <!-- Gambar Pertama -->
                                    <div class="carousel-item active">
                                        <img src="{{ asset('images/poster/posterpendaftaran1.jpg') }}" class="d-block w-100" alt="Poster Pendaftaran 1">
                                    </div>
                                    <!-- Gambar Kedua -->
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/poster/posterpendaftaran2.jpg') }}" class="d-block w-100" alt="Poster Pendaftaran 2">
                                    </div>
                                </div>
                                <!-- Kontrol Carousel -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pagination -->
<div class="d-flex justify-content-center mt-4 mb-4">
    {{ $articles->onEachSide(1)->links('pagination::tailwind') }}
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
                                <a href="index.html"><img src="assets/images/thas/white.png" alt=""></a>
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
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
		<script src="{{ asset('/js/skill.bars.jquery.js') }}"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
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
