<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Portal Berita Kemahasiswaan</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/logodaqu.png'?>">
  
  <!-- Bootstr<ap CSS File -->
  <link href="<?php echo base_url().'depan/lib/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url().'depan/lib/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'depan/lib/animate/animate.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'depan/lib/ionicons/css/ionicons.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'depan/lib/owlcarousel/assets/owl.carousel.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'depan/lib/lightbox/css/lightbox.min.css'?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url().'depan/css/style.css'?>" rel="stylesheet">

  
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">
      <div id="logo" class="pull-left">
      	<a class="h5co"><img src="assets/logostmik.png" width="170px"> </a>
  
    <h1>PORTAL BERITA</h1>
     <h3>KEMAHASISWAAN STMIK AB</h3>
      

      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="<?php echo base_url().'pendaftaran'?>">DAFTAR</a></li>
          
          <li><a href="<?php echo base_url().'user/user'?>">MASUK UKM</a></li>
          <li><a href="<?php echo base_url().'Administrator'?>">MASUK ADMIN</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>


  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="<?php echo base_url().'theme/images/pkm2.jpg'?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              <h2>Portal Berita</h2>
                <h3><p>Ayo Tulis Berita Terbaikmu!</p></h3>
           
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url().'theme/images/pkm3.jpg'?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Portal Berita</h2>
                <h3><p>Ayo Tulis Berita Terbaikmu!</p></h3>

                
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url().'theme/images/pkm4.jpg'?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              <h2>Portal Berita</h2>
                <h3><p>Ayo Tulis Berita Terbaikmu!</p></h3>


              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url().'theme/images/pkm5.jpg'?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              <h2>Portal Berita</h2>
                <h3><p>Ayo Tulis Berita Terbaikmu!</p></h3>
               
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

   

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>NEWS BERITA</h3>
          <p>BERITA SEPUTAR DAN PRESTASI MAHASISWA STMIK ANTAR BANGSA
			</p>
        </header>

        <div class="row about-cols">


          					<?php foreach($data->result() as $row):?>
                       
          

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar?>" alt="" class="img-fluid">
                <header class="section-header">
          <h3><?php echo $row->tulisan_kategori_nama;?></h3>
        </header>
              </div>
              <h2 class="title"><a href="<?= base_url('artikel');?>"><?php echo substr( $row->tulisan_judul,0,100).'...';?></a></h2>
              <p>
              <?php echo substr( $row->tulisan_isi,0,100).'...';?>
              </p>
            </div>
          </div>
          <?php endforeach;?>

        </div>

      </div>
    </section><!-- #about -->

    

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>FASILITAS</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

        <?php foreach($album->result() as $row):?>
          <div class="testimonial-item">
            <img src="<?php echo base_url().'assets/images/'.$row->album_cover?>" class="testimonial-img" alt="">
            <h3><?php echo $row->album_nama;?></h3>
<!--            
            <p>
              <img src="depan/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p> -->
          </div>

          <?php endforeach;?>
          

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
   
    <section id="contact" class="section-bg wow fadeInUp">
            <div class="container">

                <div class="section-header">
                    <h3>Hubungi Kami</h3>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Address</h3>
                            <address>Kawasan Bisnis CBD Ciledug, Blok A5 No.29-36, Kota Tangerang, Banten</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+628119391441">021 5098 6099</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">stmik.ab@gmail.com</a></p>
                        </div>
                    </div>

                </div>
                </section><!-- #contact -->          

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    

    <div class="container">
      <div class="copyright">
      &copy; 2023 <strong>Biro Kemahasiswaan: </strong>STMIK Antar Bangsa
      </div>
      
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url().'depan/lib/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/jquery/jquery-migrate.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/easing/easing.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/superfish/hoverIntent.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/superfish/superfish.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/wow/wow.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/waypoints/waypoints.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/counterup/counterup.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/owlcarousel/owl.carousel.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/isotope/isotope.pkgd.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/lightbox/js/lightbox.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/touchSwipe/jquery.touchSwipe.min.js'?>"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url().'depan/contactform/contactform.js'?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url().'depan/js/main.js'?>"></script>

</body>
</html>
