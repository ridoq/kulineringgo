<?php
$data = file_get_contents('assets/data/content.json');
$content = json_decode($data, true);
$content = $content["content"];
$rekomen = json_decode($data, true);
$rekomen = $rekomen["rekomen"]
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kulineringgo | Seputar Kuliner Probolinggo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/imgContent/icon/logo.jpg" rel="icon">
  <link href="assets/imgContent/icon/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy - v1.2.1
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="#hero" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="https://img2.pngdownload.id/20180704/xcv/kisspng-computer-icons-meal-food-meal-icon-5b3cb405517002.9542126315307049013336.jpg" alt="logoicon" />
        <h1>Kuliner<span>inggo</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door me-1" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
</svg>Beranda</a></li>
          <li><a href="#menu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list me-1" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg>Daftar Kuliner</a></li>
          <li><a href="#about"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle me-1" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
</svg>Tentang</a></li>
          <a class="btn-book-a-table" href="#contact"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram me-1" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>Follow Ig Kami</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container ">
      <div class="row justify-content-between gy-1">
        <div class="col-lg-4 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start" >
          <h2 data-aos="zoom-in">SEPUTAR KULINER<br> KHAS PROBOLINGGO</h2>
          <p data-aos="zoom-in">Bukan hanya tempat wisata menarik, Probolinggo juga memiliki makanan khas enak.</p>
            <a href="#contact" class="btn-book-a-table" data-aos="zoom-in"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram me-1" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>Follow Ig Kami</a>
            <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
        </div>
        <div class="col-lg-4 order-1 order-lg-2 text-center text-lg-start mt-0">
          <div class="slides-1 swiper  " style="background-color:#eee;" data-aos="fade-up" data-aos-delay="0">
            <div class="swiper-wrapper " >
              <?php foreach($content as $slide) : ?>
              <div class="swiper-slide" >
                <div class="testimonial-item" >
                  <div class="row gy-3 justify-content-center text-center" >
                    <img src="assets/imgContent/kulinerkhas/<?= $slide["gambar"];?>" class="img-fluid d-block w-100" data-aos="zoom-out" data-aos-delay="300" >
                    <h6><?= $slide["judul"];?></h6>
                    <h6></h6>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              <?php endforeach;?>
              
            </div>
            <div class="swiper-pagination" ></div>
            
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2></h2>
          <p>Daftar<span> Kuliner</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4> 12 Kuliner Khas</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>6 Rekomendasi Kuliner</h4>
            </a><!-- End tab nav item -->
<!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

              <br>
              <br>

            <div class="row gy-5">
                <?php foreach($content as $slide):?>
              <div class="col-lg-4 menu-item text-center">
                <a href="#" class="glightbox"><img src="assets/imgContent/kulinerkhas/<?= $slide["gambar"];?>" class="menu-img img-fluid" alt=""></a>
                <h4><?= $slide["judul"];?></h4>
                <p class="ingredients">
                <?= $slide["deskripsi"];?>
                </p>
                <p class="price">
                <?= $slide["harga"];?>
                </p>
              </div><!-- Menu Item -->
              <!-- Menu Item -->
                  <?php endforeach;?>
            </div>
          </div><!-- End Dinner Menu Content -->

        </div>
        <div class="tab-content" data-aos-delay="300">

          <div class="tab-pane fade" id="menu-breakfast">

              <br>
              <br>

            <div class="row gy-5">
                <?php foreach($rekomen as $mek):?>
              <div class="col-lg-4 menu-item text-center">
                <a href="assets/img/p5/gacoan.jpeg" class="glightbox"><img src="assets/imgContent/rekomendasikuliner/<?= $mek["gambar"];?>" class="menu-img img-fluid" alt=""></a>
                <h4><?= $mek["judul"];?></h4>
                <p class="ingredients">
                <?= $mek["deskripsi"];?>
              </p>
              <p class="price">
                <?= $mek["harga"];?>
                </p>
              </div><!-- Menu Item -->
              <!-- Menu Item -->
                  <?php endforeach;?>
            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    
    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="background-color:#eee;">
      <div class="container" >

        <div class="section-header">
          <h2></h2>
          <p>Tentang<span> Website</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" >
            <div class="call-us position-absolute">
              <h4>Contact Person</h4>
              <p><a href="http://wa.me/62895422414260">Wa : +62 895 422 414 260</a></p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" >
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                
              </p>
              <p style="font-size:20px;font-style:italic;">  Website ini bertujuan untuk memperkenalkan berbagai macam makanan khas yang terdapat di daerah Probolinggo, dan juga rekomendasi kuliner yang wajib anda coba ketika berkunjung ke Probolinggo.</p>
                <p style="font-size:20px;font-style:italic;"> Website ini dibuat oleh siswa dari SMK Negeri 2 Kraksaan kelas X Rekayasa Perangkat Lunak 2 Tahun Pelajaran 2022-2023</p>
              </ul>

              <div class="position-relative mt-4">
                <img src="https://www.tripjalanjalan.com/wp-content/uploads/2018/07/Nasi-Campur-Nyak-Nyong-probolinggo.jpg" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" >

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="41" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Content</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="144" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Events Section ======= -->
    
    <!-- ======= Chefs Section ======= -->
   
    <!-- ======= Book A Table Section ======= -->
    

    <!-- ======= Gallery Section ======= -->
   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" >

        <div class="section-header">
          <h2>Sosial Media</h2>
          <p>Dukung Kami<span> Di Instagram</span></p>
        </div>

        

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-instagram flex-shrink-0"></i>  
            <div>
                <h3>Dewi Agustina (Project Manager)</h3>
                <p style="font-size:20px;"><a href="http://instagram.com/dewi_agustina_d3n4">@dewi_agustina_d3n4</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-instagram flex-shrink-0"></i>  
              <div>
                <h3>Desy Arynta K.A.P (Project Manager)</h3>
                <p style="font-size:20px;"><a href="http://instagram.com/dsyarynta">@dsyarynta</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-instagram flex-shrink-0"></i>  
            <div>
              <h3>Taufiqi Ridho Maulana (Front-end, Back-end)</h3>
              <p style="font-size:20px;"><a href="http://instagram.com/rdmlnnn">@rdmlnnn</a></p>
            </div>
          </div>
        </div>
          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-instagram flex-shrink-0"></i>  
            <div>
              <h3>Ahmat Zaini (Quality assurance)</h3>
              <p style="font-size:20px;"><a href="http://instagram.com/vwxyzeen_">@vwxyzeen_</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-instagram flex-shrink-0"></i>  
            <div>
                <h3>Ibrahim Akbar (System Analyst)</h3>
                <p style="font-size:20px;"><a href="http://instagram.com/a07_ibrahim">@a07_ibrahim</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-instagram flex-shrink-0"></i>  
            <div>
                <h3>Feby Tri Wicaksono (System Analyst)</h3>
                <p style="font-size:20px;"><a href="http://instagram.com/febyt_xyz">@febyt_xyz</a></p>
              </div>
            </div>
          </div>
          
        </div>

        

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    

       

    <div class="container">
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by : <a href="https://instagram.com/x.rpl.2_">  X RPL 2 | SMK Negeri 2 Kraksaan 2022-2023</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>