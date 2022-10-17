<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Si - Raka | Laporan Karyawan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logocdk.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  @include('includes.landing.stylesheet')


  <!-- =======================================================
    * Template Name: Vesperr - v4.7.0
    * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

  <body>

    @include('includes.landing.navbar')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Sistem Informasi Laporan Karyawan Berbasis Online</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Tempat Penyampaian Laporan Kegiatan Harian Karyawan Secara Realtime</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="{{ url('login')}}" class="btn-get-started scrollto">Laporkan!</a>
           
            <a href="#services" class="btn-get-started-2 scrollto">Alur laporan</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/side.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tentang SI - Raka</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              <h3>Si - Raka </h3> Atau Singkatan Dari Lapo<u>RA</u>n <u>KA</u>ryawan Merupakan Sistem Informasi Yang Berfungsi Untuk Melaporkan Kegiatan Yang Dilakukan Oleh Karyawan Secara Realtime </p>
            <ul>
              <h3>Tujuan Si - Raka</h3>
              <li><i class="ri-check-double-line"></i>Memberikan Informasi atau laporan yang jelas secara realtime untuk memberikan informasi apa saja kegiatan yang dilakukan pada hari itu </li>
              <li><i class="ri-check-double-line"></i>Mempermudah Karyawan Dalam Melaporkan Dan Juga mempermudah karyawan Berinteraksi Dengan Atasan</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
              <h4>Si - Raka</h4>merupakan suatu website yang dibuat untuk mempermudah dalam pelayanan . dengan hadirnya sistem pelaporan ini , diharapkan karyawawan dapat berkomunikasi dengan baik dengan atasan agar memperkecil adanya miskomunikasi</p>
            <a href="#services" class="btn-learn-more">Tata cara atau alur pengaduan</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          <br>
          <br>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="assets/img/side2.jpg" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Pengguna</strong><br>Pengguna Sistem Informasi Si - Raka</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Terlaporkan</strong> <br> Jumlah Laporan yg sudah disampaikan</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Terbaca</strong> <br> Jumlah laporan yg sudah dibaca</p>
                  </div>
                </div>


              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tata Cara Pelaporan</h2>
          <p>Alur Tata Cara Pelaporan Pada Aplikasi Si - Raka</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class='bx bxs-edit-alt'></i></div>
              <h4 class="title"><a href="">Kirim Laporan</a></h4>
              <p class="description">Tulis laporan Kegiatan Harian Dengan Detail</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-shuffle"></i></div>
              <h4 class="title"><a href="">Proses Verifikasi</a></h4>
              <p class="description">Tunggu sampai laporan di baca dan di tanggapi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Tindak Lanjut</a></h4>
              <p class="description">Laporan Anda dalam proses di baca dan di tanggapi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class='bx bx-check-shield'></i></div>
              <h4 class="title"><a href="">Selesai</a></h4>
              <p class="description">Laporan Telah Di Baca</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id="contact" class="contact">
      
      <section class="ftco-section img bg-hero" style="background-image: url(images/bg_1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="wrapper">
                        <div class="row no-gutters justify-content-between">
                            <div class="col-lg-6 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-5">
                                    <h3 class="mb-4">Contact us</h3>
                            <div class="dbox w-100 d-flex align-items-start">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text pl-4">
                                <p><span>Address:</span>  Jl. Raya Genengan No.9,3, Dusun Binangun, Genengan, Kec. Pakisaji, Kabupaten Malang, Jawa Timur 65161</p>
                              </div>
                              <br>
                          </div>
                            <div class="dbox w-100 d-flex align-items-start">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text pl-4">
                                <p><span>Phone:</span> <a href="tel://1234567920">(0341) 806454</a></p>
                              </div>
                              <br>
                          </div>
                            <div class="dbox w-100 d-flex align-items-start">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text pl-4">
                                <p><span>Email:</span> <a href=""> cdkmalang.dishut.jatimprov.go.id </a></p>
                              </div>
                              <br>
                          </div>
                            <div class="dbox w-100 d-flex align-items-start">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-instagram"></span>
                                </div>
                                <div class="text pl-4">
                                <p><span>Instagram :</span> <a href="https://www.instagram.com/cabdinkehutananmalang/">@cabdinkehutananmalang</a></p>
                              </div>
                          </div>
                          <div class="dbox w-100 d-flex align-items-start">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-twitter"></span>
                            </div>
                            <div class="text pl-4">
                            <p><span>Twitter :</span> <a href="https://twitter.com/cdkmalang">@cdkmalang</a></p>
                          </div>
                      </div>
                      <div class="dbox w-100 d-flex align-items-start">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-globe"></span>
                        </div>
                        <div class="text pl-4">
                        <p><span>Website :</span> <a href="https://cdkmalang.dishut.jatimprov.go.id/">https://cdkmalang.dishut.jatimprov.go.id/</a></p>
                      </div>
                  </div>
                          
                      </div>
                    </div>
                    <div class="col mx-auto mt-5">
                        <div class="d-flex justify-content-between">
                          <h5>Yuk temui kami!</h5>
                        </div>
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=cdk malang&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                </iframe>
                                <a href="https://mcpenation.com/">https://mcpenation.com</a>
                                </div>
                                <style>
                            .mapouter{position:relative;text-align:right;width:400px;height:300px;}
                            .gmap_canvas {overflow:hidden;background:none!important;width:400px;height:300px;}
                            .gmap_iframe {width:400px!important;height:300px!important;}
                        </style>
                            </div>
                      </div>
                    </div>
                            </div>
                        </div>
                </div>
                
            </div>
        </div>
    </section>

      </div>
    </section><!-- End Counts Section -->










  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('includes.landing.javascript')

</body>

</html>
