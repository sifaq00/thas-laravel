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
                                              <li class="rs-mega-menu mega-rs current-menu-item"> <a href="#">Home</a>
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

            <!-- Slider Section Start -->
            <div class="rs-slider style2">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="false" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                    <div class="slide-part">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-last">
                                    <div class="img-part">
                                        <img style="border-radius: 10px" src="{{ asset('images/thas/cooking2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 pr-50">
                                    <div class="content">
                                        <div class="sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Good Food Good Life</div>
                                        <h1 class="title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Cooking Start Learing recipes to Cook today</h1>
                                        <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                            <a class="readon orange-btn" href="#">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-part">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-last">
                                    <div class="img-part">
                                        <img src="{{ asset('images/slider/home8/2.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 pr-80">
                                    <div class="content">
                                        <div class="sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Good Food Good Life</div>
                                        <h1 class="title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Be Happy healthy And Successful Simplifited</h1>
                                        <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                            <a class="readon orange-btn" href="#">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Section End -->


        
            <!-- About Section Start -->
            <div class="container">
            <div id="section-tentang" class="kontainer-tentang padding-atas-besar padding-bawah-sedang md-padding-atas-kecil md-padding-bawah-kecil">
                <div class="kontainer-kustom">
                    <div class="row align-items-center">
                        <!-- Bagian Gambar -->
                        <div class="col-lg-6 bagian-gambar">
                            <div class="gambar-wrapper">
                                <img src="{{ asset('images/thas/lkp4-2.png') }}" alt="Gambar Tentang Kami">
                            </div>
                        </div>
            
                        <!-- Bagian Teks -->
                        <div class="col-lg-6 bagian-teks">
                            <div class="konten-teks munculPerlahan" data-delay="300ms" data-duration="2000ms">
                                <div class="subjudul-seksi">TENTANG KAMI</div>
                                <h2 class="judul-seksi">Tumbuh Hospitality & Arts School</h2>
                                <p class="deskripsi-seksi">
                                    Tumbuh Hospitality & Arts School merupakan satuan pendidikan non formal berbentuk
                                    Lembaga Kursus dan Pelatihan (LKP) di bawah naungan Yayasan Edukasi Anak Nusantara
                                    yang mengusung pendidikan inklusi dan menyelenggarakan program pendidikan vokasi di
                                    bidang operasional perhotelan, kuliner, dan seni.
                                </p>
                                <div class="wrapper-tombol">
                                    <a class="tombol-utama" href="{{ route('about') }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>

            <!-- About Section End -->

            <!-- Recipes Section Start -->
            <div class="rs-recipes bg6 pt-100 pb-100 md-pt-70 md-pb-70">
               <div class="container">
                   <div class="sec-title3 text-center wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                       <div class="sub-title">Pendaftaran Mahasiswa Baru 2024/2025</div>
                       <h2 class="title">​​Tumbuh Hospitality & Arts School</h2>
                        <div class="desc mb-30 md-pr-15">Kami membuka pendaftaran mahasiswa baru untuk<br>
						periode tahun ajaran 2024-2025, untuk info syarat dan <br>ketentuan serta detail informasi dapat diakses<br>
						melalui admin kami, silakan klik tombol dibawah ini.</div>

                       <div class="btn-part wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                           <a class="readon orange-btn" href="https://wa.me/6282223243036" target="_blank">Daftar Sekarang</a>
                       </div>
                   </div>
               </div>
            </div>
            <!-- Recipes Section end -->

            <!-- Categories Section Start -->
            <div id="rs-popular-courses" class="rs-popular-courses style5 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title3 text-center mb-45">
                        <div class="sub-title primary">Program</div>
                        <h2 class="title mb-0">Berbagai Program Unggulan</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-30">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="#"><img src="{{ asset('images/courses/home8/1.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="course-price">
                                            <!--<span class="price"></span>-->
                                        </div>
                                        <h3 class="title"><a href="{{ route('perhotelan')}}">Program Perhotelan</a></h3>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 3 Students
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                6 Lessons
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                       <a href="#"> <img src="{{ asset('images/courses/home8/2.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="course-price">
                                            <!--<span class="price"></span>-->
                                        </div>
                                        <h3 class="title"><a href="{{ route('shortcourse')}}">Short Course Kuliner</a></h3>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                  4 Students
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                5 Lessons
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="#"><img src="{{ asset('images/courses/home8/3.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="course-price">
                                            <!--<span class="price"></span>-->
                                        </div>
                                        <h3 class="title"><a href="{{ route('shortcourse') }}">Short Course Eksplorasi Seni</a></h3>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 30 Students
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                6 Lessons
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                           </div>
                        </div>
                    <div class="row">
                        <div  class="col-lg-4 col-md-6 mx-auto -mb-10">
                           <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="#"><img src="{{ asset('images/courses/home8/4.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="content-part">
                                        <div class="course-price">
                                            <!--<span class="price"></span>-->
                                        </div>
                                        <h3 class="title"><a href="{{ route('shortcourse')}}">Paket Edukasi Cooking Class</a></h3>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-user"></i>
                                                 15 Students
                                            </li>
                                            <li class="user">
                                                <i class="fa fa-file"></i>
                                                5 Lessons
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                        
                    </div>
                </div>
            </div>
        
            <!-- Categories Section End -->

            <!-- Events Section Start -->
            <div class="rs-event home8-style1 event-bg pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title3 text-center">
                        <div class="sub-title uppercase mb-10">
                            Berita Terbaru
                        </div>
                        <h2 class="title mb-30">Aktivitas dan Berita Terbaru</h2>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                        @foreach($articles as $article)
                        <div class="event-item">
                            <div class="event-short">
                                <div class="featured-img">
                                    <img src="{{ asset('storage/' . $article->image) }}" alt="Image">
                                    <div class="dates">
                                        {{ $article->created_at->format('d M Y') }}
                                    </div>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></h4>
                                    <div class="time-sec">
                                        <div class="timesec"><i class="fa flaticon-clock"></i> 
                                            {{ $article->created_at->format('H.i') }}
                                        </div>
                                        <div class="address"><i class="fa fa-map-o"></i> 
                                            {{ $article->author }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <!-- Events Section End -->

            <!-- About Section Start -->
            <div class="rs-about style9 pt-100 pb-200 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-4">
                            <div class="content-part">
                                <div class="about-img md-mb-50">
                                    <div class="media-icon orange-color">
                                        <img src="{{ asset('images/about/home8/3.png') }}" alt="">
                                        <a class="popup-videos" href="https://www.youtube.com/watch?v=3RPQDj9s4u4">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="sec-title3 pl-65 md-pl-15 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="sub-title">Video Profile</div>
                                    <h2 class="title">Tumbuh Hospitality & Arts School Video Profile</h2>
                                     <div class="desc mb-30 pr-50 md-pr-15">Dalam video ini, Anda akan melihat berbagai fasilitas
									 unggulan, program akademik terkemuka, serta suasana belajar yang inspiratif dan dinamis.
									 Dapatkan gambaran nyata tentang pengalaman mahasiswa kami, dukungan dari dosen berpengalaman,
									 dan pencapaian luar biasa yang telah kami raih. Saksikan sendiri bagaimana lembaga kami
									 berkomitmen untuk menciptakan lingkungan belajar yang mendorong pertumbuhan dan kesuksesan.
									 Jangan lewatkan kesempatan ini untuk melihat masa depan Anda bersama kami!</div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Newsletter section start
            <div class="rs-newsletter home8-style1 bg7 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="content-wrap text-center">
                      <div class="sec-title3 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                          <div class="sub-title"> Subscribe Newsletter</div>
                          <h2 class="title">Subscribe To Our Newsletter!</h2>

                      </div>
                        <form class="newsletter-form">
                            <input type="email" id="email" name="email" placeholder="Enter Your Email" required="">
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            Newsletter section end -->

            <!-- Testimonial Section Start -->
            <div class="rs-testimonial style8 pt-100 pb-100 md-pt-70 md-pb-70">
              <div class="container">
                <div class="sec-title3 text-center">
                    <div class="sub-title uppercase mb-10">
                        Testimonial
                    </div>
                    <h2 class="title mb-30">What Students Saying</h2>
                </div>
                  <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                      <div class="testi-item">
                          <div class="author-desc">
                              <div class="desc">Education is the passport to the future for tomorrow belongs to those who pre pare for it today. Sed ut perspiciatis unde omnis  iste natus error sit vo luptatem</div>
                              <div class="author-img">
                                  <img src="{{ asset('images/testimonial/style8/1.png') }}" alt="">
                              </div>
                          </div>
                          <div class="author-part">
                              <a class="name" href="#">Mahadi Monsura</a>
                              <span class="designation">Student</span>
                          </div>
                      </div>
                      <div class="testi-item">
                          <div class="author-desc">
                            <div class="desc">Education is the passport to the future for tomorrow belongs to those who pre pare for it today. Sed ut perspiciatis unde omnis  iste natus error sit vo luptatem</div>
                              <div class="author-img">
                                  <img src="{{ asset('images/testimonial/style8/2.png') }}" alt="">
                              </div>
                          </div>
                          <div class="author-part">
                              <a class="name" href="#">Mahadi Monsura</a>
                              <span class="designation">Student</span>
                          </div>
                      </div>
                      <div class="testi-item">
                          <div class="author-desc">
                              <div class="desc">Education is the passport to the future for tomorrow belongs to those who pre pare for it today. Sed ut perspiciatis unde omnis  iste natus error sit vo luptatem</div>
                              <div class="author-img">
                                  <img src="{{ asset('images/testimonial/style8/3.png') }}" alt="">
                              </div>
                          </div>
                          <div class="author-part">
                              <a class="name" href="#">Mahadi Monsura</a>
                              <span class="designation">Student</span>
                          </div>
                      </div>
                      <div class="testi-item">
                          <div class="author-desc">
                            <div class="desc">Education is the passport to the future for tomorrow belongs to those who pre pare for it today. Sed ut perspiciatis unde omnis  iste natus error sit vo luptatem</div>
                              <div class="author-img">
                                  <img src="{{ asset('images/testimonial/style8/4.png') }}" alt="">
                              </div>
                          </div>
                          <div class="author-part">
                              <a class="name" href="#">Mahadi Monsura</a>
                              <span class="designation">Student</span>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Events Section Start -->
            <div class="rs-gallery style2">
               <div class="row margin-0">
                   <div class="col-lg-2 padding-0 mb-0 col-md-4 col-sm-6">
                       <div class="gallery-part">
                           <div class="gallery-img">
                               <a class="image-popup" href="{{ asset('images/gallery/home8/1.jpg') }}"><img src="{{ asset('images/gallery/home8/1.jpg') }}" alt=""></a>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-2 padding-0 mb-0 col-md-4 col-sm-6">
                       <div class="gallery-part">
                           <div class="gallery-img">
                               <a class="image-popup" href="{{ asset('images/gallery/home8/2.jpg') }}"><img src="{{ asset('images/gallery/home8/2.jpg') }}" alt=""></a>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-2 padding-0 mb-0 col-md-4 col-sm-6">
                       <div class="gallery-part">
                           <div class="gallery-img">
                               <a class="image-popup" href="{{ asset('images/gallery/home8/3.jpg') }}"><img src="{{ asset('images/gallery/home8/3.jpg') }}" alt=""></a>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-2 padding-0 mb-0 col-md-4 col-sm-6">
                       <div class="gallery-part">
                           <div class="gallery-img">
                               <a class="image-popup" href="{{ asset('images/gallery/home8/4.jpg') }}"><img src="{{ asset('images/gallery/home8/4.jpg') }}" alt=""></a>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-2 padding-0 mb-0 col-md-4 col-sm-6">
                       <div class="gallery-part">
                           <div class="gallery-img">
                               <a class="image-popup" href="{{ asset('images/gallery/home8/5.jpg') }}"><img src="{{ asset('images/gallery/home8/5.jpg') }}" alt=""></a>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-2 padding-0 mb-0 col-md-4 col-sm-6">
                       <div class="gallery-part">
                           <div class="gallery-img">
                               <a class="image-popup" href="{{ asset('images/gallery/home8/6.jpg') }}"><img src="{{ asset('images/gallery/home8/6.jpg') }}" alt=""></a>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
            <!-- Events Section End -->
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
