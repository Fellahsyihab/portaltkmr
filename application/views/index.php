<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PORTAL TKMR</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('front-end/'); ?>assets/img/clients/darisk.png" rel="icon">
  <link href="<?= base_url('front-end/'); ?>assets/img/clients/darisk.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?= base_url('front-end/'); ?>https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('front-end/'); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('front-end/'); ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url('front-end/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('front-end/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('front-end/'); ?>assets/vendor/icon/css/all.min.css" rel="stylesheet">
  <link href="<?= base_url('front-end/'); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('front-end/'); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Bootstrap CSS --> 
  <link rel="stylesheet" href="<?= base_url('front-end/'); ?>assets/css/bootstrap.min.css">
  <!-- Owl Theme Default CSS --> 
  <link rel="stylesheet" href="<?= base_url('front-end/'); ?>assets/css/owl.theme.default.min.css">
  <!-- Owl Carousel CSS --> 
  <link rel="stylesheet" href="<?= base_url('front-end/'); ?>assets/css/owl.carousel.min.css">
  <!-- Owl Magnific CSS --> 
  <link rel="stylesheet" href="<?= base_url('front-end/'); ?>assets/css/magnific-popup.css">
  <!-- Animate CSS --> 
  <link rel="stylesheet" href="<?= base_url('front-end/'); ?>assets/css/animate.css">
  <!-- Boxicons CSS --> 
  
  <!-- Flaticon CSS --> 
  <link rel="stylesheet" href="<?= base_url('front-end/'); ?>assets/css/flaticon.css">
  <!-- Meanmenu CSS -->
  <link rel="stylesheet" href="<?= base_url('front-end/'); ?>assets/css/meanmenu.css">
  <!-- Nice Select CSS -->
  <link rel="stylesheet" href="<?= base_url('front-end/'); ?>assets/css/nice-select.css">
  <!-- Odometer CSS-->
  <link rel="stylesheet" href="<?= base_url('front-end/'); ?>assets/css/odometer.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="<?= base_url('front-end/'); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url('front-end/'); ?>assets/css/gasak.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="<?= base_url('front-end/'); ?>assets/css/responsive.css">

  <!-- =======================================================
  * Template Name: BizPage
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- ======= site Header ======= -->
  <header class="site-header">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-12 d-flex flex-wrap">
                <p class="d-flex me-4 mb-0">
                    <img class="center" src="<?= base_url('front-end/'); ?>assets/img/Header_Beranda/Picture4.png"  width="350px" />
                </p>
                   
            </div>

        </div>
    </div>
</header>


</head>
<body>


  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <img class="right" src="<?= base_url('front-end/'); ?>assets/img/Header_Beranda/img_logo_white.png" width="160px" />

          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
              <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="<?=base_url('home/about_GCG'); ?>">TATA KELOLA PERUSAHAAN (GCG)</a></li>
                  <li><a href="<?=base_url('home/about_manrisk'); ?>">MANAJEMEN RISIKO</a></li>
                  </li>
                  
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="#penghargaan">Penghargaan</a></li>
              <li><a class="nav-link scrollto " href="#team">Anggota</a></li>
              <li><a class="nav-link scrollto" href="#e-learning">E-Learning</a></li>
              <li><a class="nav-link scrollto" href="#produk">Produk</a></li>
              <li><a class="nav-link scrollto" href="#berita">Berita</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
 
  <section id="hero">
    
    <div class="hero-container">
      
       
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
 
        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
    <?php foreach ($banner_image as $bi) : ?>
          <div class="carousel-item active" style="background-image: url(<?= base_url('front-end/assets/img/Header_Beranda/') . $bi['gambar']; ?>" alt="gambar">
            <div class="carousel-container">
           
              <div class="container">
                <p class="animate__animated animate__fadeInUp">WELCOME TO</p>
                <h2 class="animate__animated animate__fadeInDown"><?=$bi['text']?></h2>
                
              </div>
            </div>
          </div>



        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
  </div>
    <?php endforeach; ?>
  </section>

 
 

  <!-- End Hero Section -->

  <main id="main">

     <!-- ======= Aplikasi ======= -->
    <section id="clients">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>APLIKASI</h3>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center" >
            <div class="swiper-slide"><a href="https://risk.pusri.co.id/login"><img src="<?= base_url('front-end/'); ?>assets/img/clients/simanis.jpg" class="img-fluid" alt=""></a></div> 
            <div class="swiper-slide"><a href="http://siapgcg.pupuk-indonesia.com/login/"><img src="<?= base_url('front-end/'); ?>assets/img/clients/siap gcg.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><a href="https://elhkpn.kpk.go.id/"><img src="<?= base_url('front-end/'); ?>assets/img/clients/logo elhkpn.png" width="147px" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><a href="https://dof.pupuk-indonesia.com/Account/Login"><img src="<?= base_url('front-end/'); ?>assets/img/clients/dof logo.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><a href="https://iam.pusri.co.id/login"><img src="<?= base_url('front-end/'); ?>assets/img/clients/iam.png" width="100px" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><a href="http://dariskma.pusri.co.id/loginproses/getLogin#"><img src="<?= base_url('front-end/'); ?>assets/img/clients/logos dariskma.png" width="100px" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><a href="https://gol.kpk.go.id/login/"><img src="<?= base_url('front-end/'); ?>assets/img/clients/logo_gol kpk.png" width="137px" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><a href="https://wbs.pusri.co.id/"><img src="<?= base_url('front-end/'); ?>assets/img/clients/wbs logoss.png" width="137px" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><a href="https://webapp.peruri.co.id/pusri/login"><img src="<?= base_url('front-end/'); ?>assets/img/clients/Peruri Pusri logo.jpeg" width="137px" class="img-fluid" alt=""></a></div>
           
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
      </section>
   <!-- ======= Aplikasi ======= -->
   <?php foreach ($skls_tkmr as $skmr) : ?>
   <div class="container">
    <div class="row pusri-product__detail">
    <div class="col-lg-5 col-md-5 col-12">
    <div class="pusri-product__detail-left">
    <img src="<?= base_url('front-end/assets/img/Header_Beranda/') . $skmr['gambar']; ?>" alt="gambar" class="pusri-product__detail-left__secondary-img" alt="main-img">
    <div class="section-title">
    <h1><?=$skmr['nama']?></h1> 
    <P><?=$skmr['jbt']?></P> 
    </div>
    </a>
    </div>
    </div>
    <div class="col-lg-7 col-md-7 col-12">
    <div class="pusri-product__detail-right">
    <h2 class="fw-semi-bold text-wrap"><?=$skmr['judul']?></h2>
    <h2 class="fw-semi-bold text-wrap"><?=$skmr['bio']?></h2>
    <p class="pusri-product__detail-right__description fw-regular text-gray">
    </p><p><?=$skmr['text']?></p>
  </p><p><?=$skmr['next']?></p>
  </div>
    </div>
    </div>
    </div>
    <?php endforeach; ?>






   

   <!-- End Products Area -->
  


  
<!-- Start Team Area -->
<section id="team">
<section class="team-area bg-color ptb-100">
  <div class="container-fluid p-0">
    <div class="section-title">
      <span></span>
      <h2>TKMR TEAM</h2>
    </div>
     
    <div class="team-wrap owl-theme owl-carousel">
       <?php foreach ($krywn_tkmr as $kry) : ?>   
      <div class="ingle-team">
        <div class="team-img">
        <img src="<?= base_url('front-end/assets/img/KARYAWAN/') . $kry['image']; ?>" class="img-thumbnail" alt="image">

          
        </div>
        
        <div class="team-content">
          <h3><?=$kry['nama']?></h3>
          <span><?=$kry['jabatan']?></span>
        </div>
      </div>
      <?php endforeach; ?>

</section>
</section>
<!-- End Team Area -->




		<!-- Start Latest Trailer Area -->
    <section id="e-learning"></section>
		<section class="latest-trailer ptb-100">
      <div class="section-title">
        <h2>TKMR E-LEARNING</h2>
      </div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="latest-trailer-content">
							<h2>MEDIA PEMBELAJARAN</h2>
							<p>Media Pembelajaran ini digunakan untuk menyampaikan suatu informasi tentang Tata Kelola & Manajemen Risiko agar bermanfaat.</p>
						</div>
					</div>

					<div class="col-lg-6">
         
						<div class="latest-trailer-wrap owl-theme owl-carousel">
                <?php foreach ($elrn_tkmr as $elrn) : ?> 
							<div class="latest-trailer-item">
								<img src="<?= base_url('front-end/assets/img/elearning/'). $elrn['image']?>"  class="img-thumbnail" alt="Image">

								<div class="video-button">
									<a href="<?=$elrn['link']?>" class="video-btn popup-youtube">
                    <i class="bi bi-play-fill"></i>
									</a>
								</div>
							</div>
               <?php endforeach; ?>	
							</div>

          
			</div>
		</section>
		<!-- End Latest Trailer Area -->



    <?php foreach ($pstr_tkmr as $psmr) : ?>
		<div class="pusri-header-banner" style="background-color: #FFFFFF20">
<div class="container">
<div class="pusri-header-banner__content">
<img src="<?= base_url('front-end/assets/img/poster/') . $psmr['image']; ?>"     alt="PUSRI" class="img-fluid pusri-header-banner__header-banner">
</div>
</div>
</div>
<?php endforeach; ?>	





    <section id="produk"></section>
    <!-- Start Shop Two Area -->
		<section class="shop-area pt-100 ptb-100">
			<div class="container">
				<div class="section-title">
					<span>TKMR shop</span>
					<h2>PRODUK PUSRI</h2>
				</div>
				<div class="row">
           <?php foreach ($prdk_tkmr as $prdk) : ?> 
					<div class="col-lg-3 col-sm-6">
                   
						<div class="single-shop">
    
							<div class="shop-img">
								<img src="<?= base_url('front-end/assets/img/produk/'). $prdk['image']?>"  class="img-thumbnail" alt="Image">

								<a href="https://api.whatsapp.com/send?phone= 628117201189&text=Hi,%20Admin TKMR.%0Asaya tertarik%20untuk%20membeli%20Produk%20Pusri.%0ABoleh%20tanya-tanya%20dulu?" class="default-btn">
									<i class="bi bi-whatsapp"></i>
                
									PESAN DI SINI
                 
								</a>
							</div>

							<h3>
								
								<h3><?=$prdk['judul']?></h3>
								</a>
							</h3>
							
						</div>
					</div>

            <?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Shop Two Area -->
   

  
 <!-- Start Blog Area -->
 <section id="berita"></section>
 <section class="blog-area pt-100 pb-70">
  <div class="container">
    <div class="section-title">
    
      <h2>KABAR TKMR</h2>
    </div>

    <div class="row">
    <?php foreach ($kbr_tkmr as $kbmr) : ?> 
      <div class="col-lg-4 col-md-6">
        <div class="single-blog">
            <img src="<?= base_url('front-end/assets/img/berita/') . $kbmr['gambar']?>" class="img-thumbnail" alt="Image">
          </a>
        
          <div class="blog-content">
            <ul>
              <li>
                <i class="bi bi-person-fill"></i>
                <?=$kbmr['pembuat']?>
              </li>
              
              <li>
                <i class="bi bi-calendar2-week"></i>
               <?= date('d F Y', $kbmr['waktu']); ?>
              </li>
            </ul>

            <a href="<?= base_url('home/about_berita/') . $kbmr['slug']?>">
              <h3><?=$kbmr['judul']?></h3>
            </a>

            <p><?= substr(strip_tags($kbmr['isi']), 0, 100); ?></p>

            <a href="<?= base_url('home/about_berita/') . $kbmr['slug']?>" class="read-more">
              LIHAT SELENGKAPNYA
            </a>
          </div>
        </div>
      </div>

      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- End Blog Area -->




   

  <!-- ======= Footer ======= -->
  <footer class="footer-top-area pt-100 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="single-widget">
            <img src="<?= base_url('front-end/'); ?>assets/img/img_logo_white.png" alt="Image">
            
            
                
                </a>
              </li>
            </ul>
          </div>
        </div>

          
         
        <div class="col-lg-3 col-md-6">
          <div class="single-widget">
            <h3>Contact Us</h3>

            <ul class="address">
              <li>
                <i class="bi bi-pin-map-fill"></i>
                Jl. Mayor Zen, Kalidoni, Kota Palembang, Sumatera Selatan, Gedung Utama Lantai 2
              </li>

              <li>
                <i class="bi bi-envelope"></i>
                <a href="mailto:manrisk@pusri.co.id">
                  manrisk@pusri.co.id
                </a>
                  
                <li>
                <i class="bi bi-envelope"></i>
                <a href="mailto:gcg@pusri.co.id">
                  gcg@pusri.co.id
                </a>
                
                </a>
              </li>

              <li>
                <i class="bi bi-telephone"></i>
                <a href="tel:0711-712100">
                  Ext.3310/3347/3932
                </a>
                
               
                </a>
              </li>
            </ul>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6">
          <div class="single-widget">
            <h3>Navigasi</h3>

            <ul class="address">
              <li>
                <i class="bi bi-buildings"></i>
                TENTANG KAMI
              </li>

              <li>
                <i class="bi bi-award"></i>
                PENGHARGAAN
                </a>

              
              </li>

              <li>
                <i class="bi bi-people"></i>
                  ANGGOTA
                </a>
                
              </li>

              <li>
                <i class="bi bi-person-video3"></i>
                  E-LEARNING
                </a>

              </li>

              <li>
                <i class="bi bi-cart"></i>
                  PRODUK
                </a>

              </li>

              <li>
                <i class="bi bi-newspaper"></i>
                  BERITA
                </a>
               
              </li>
            </ul>
          </div>
        </div>



  </footer>
  <!-- End Footer Area -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="<?= base_url('front-end/'); ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url('front-end/'); ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url('front-end/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('front-end/'); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('front-end/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('front-end/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('front-end/'); ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url('front-end/'); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('front-end/'); ?>assets/js/main.js"></script>
   <!-- Jquery-3.5.1.Slim.Min.JS -->
   <script src="<?= base_url('front-end/'); ?>assets/js/jquery-3.5.1.slim.min.js"></script>
   <!-- Popper JS -->
   <script src="<?= base_url('front-end/'); ?>assets/js/popper.min.js"></script>
   <!-- Bootstrap JS -->
   <script src="<?= base_url('front-end/'); ?>assets/js/bootstrap.min.js"></script>
   <!-- Meanmenu JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/jquery.meanmenu.js"></script>
   <!-- Wow JS -->
   <script src="<?= base_url('front-end/'); ?>assets/js/wow.min.js"></script>
   <!-- Owl Carousel JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/owl.carousel.js"></script>
<!-- Carousel Thumbs JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/carousel-thumbs.js"></script>
   <!-- Owl Magnific JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/jquery.magnific-popup.min.js"></script>
   <!-- Nice Select JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/jquery.nice-select.min.js"></script>
<!-- Parallax JS --> 
<script src="<?= base_url('front-end/'); ?>assets/js/parallax.min.js"></script>
<!-- Mixitup JS --> 
<script src="<?= base_url('front-end/'); ?>assets/js/jquery.mixitup.min.js"></script>
<!-- Appear JS --> 
   <script src="<?= base_url('front-end/'); ?>assets/js/jquery.appear.js"></script>
<!-- Odometer JS --> 
<script src="<?= base_url('front-end/'); ?>assets/js/odometer.min.js"></script>
<!-- Form Validator JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/form-validator.min.js"></script>
<!-- Contact JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/contact-form-script.js"></script>
<!-- Ajaxchimp JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/jquery.ajaxchimp.min.js"></script>
   <!-- Custom JS -->
<script src="<?= base_url('front-end/'); ?>assets/js/custom.js"></script>

</body>

</html>