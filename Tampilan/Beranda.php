<?php 
require "../Admin/fungsi_admin.php";

$data_produk_laris = ambilData("SELECT * FROM produk_laris");


?>






<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="logoToko.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda - Elizabeth Ulos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Beranda2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

  <body>
    <!-- navigasi -->
    
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" style="box-shadow: 0 2px 7px rgba(0, 0, 0, 0.3);">
        <div class="container-fluid">
            <a class="navbar-brand text-dark" href="Beranda.php">
                <div class="d-flex align-items-center">
                    <img src="gambar/REAL.jpg" alt="#" class="img-fluid">
                    <h4 class="ml-2 mb-0">
                        <span class="nav-1">Elizabeth</span>
                        <span class="nav-2">Ulos</span>
                    </h4>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto d-flex gap-4">
                    <a href="Beranda.php" id="beranda">Beranda</a>
                    <a href="Tentang.php">Tentang Kami</a>
                    <a href="Produk.php">Produk</a>    
                    <a href="Ulasan.php">Ulasan</a>
                    <?php
                    session_start();
                    if( isset($_SESSION["login"])){?>
                        <a href="../Admin/dasbor_admin.php">Dasbor Admin</a>
                   <?php } else{?>
                    <a href="../Admin/login_admin.php">Login Admin</a>
                   <?php } ?>       
                </div>
            </div>
        </div>
    </nav>
</header>                                                 

    <!-- Hero Section -->
    <section id="hero-section">
        <div class="container mt-2">
            <div class="row mt-5 justify-content-center text-center">
                <h1 class="text-white font-weight-bold">Selamat Datang di Website Elizabeth Ulos</h1>
                <p class="text-white opacity-75 font-weight-bold mt-3">Jadilah penjelajah dan temukan yang Anda inginkan 
                </p>
                <div class="mt-2 mt-lg-4">
                    <a href="#oke" class="btn bg-dark text-white rounded-pill px-4 shadow-white">
                        Produk Terlaris
                    </a>
                </div>
            </div>
        </div>
    </section>

  
                    <span id="oke"></span>
                    <br><br><br><br>
    <!-- Best Product -->
    <section id="values-products">
        <div class="justify-content-center text-center " style="display: flex; justify-content: center;  ">
            <h1 class="judul">Produk Terlaris</h1>
        </div>
        <div class="container mt-4">
            <div class="row d-flex justify-content-center align-items-center"  data-aos="fade-up" data-aos-duration="2000">
                
            <?php  foreach($data_produk_laris as $dpl) { 
                $id_produk = $dpl['id_produk'];
                $produk = ambilData("SELECT * FROM produk WHERE id_produk = '$id_produk'")[0];
                ?>
                <div class="col-12 col-md-6 col-lg-3 ms-5">
                    <div class="d-flex flex-row flex-lg-column">
                        <img src="../Gambar/gambar_produk/<?php echo $produk['gambar']; ?>" class="col-4 rounded-4" style="width : 200px; height:200px">
                        <div class="d-flex flex-column col-5 col-md-6 ms-5 ms-md-4 ms-lg-0 detail mt-3 mt-md-0">
                            <h5 class="mt-lg-3"><?php echo $produk['nama_produk']; ?></h5>
                            <p class="mt-lg-2">Rp<?php echo number_format( $produk['harga_produk'], 0, ',', '.'); ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

            </div>
        </div>

    </section>

    <div class="row card-deck" style="display: flex; justify-content: center;">
    <div class="section-title text-center">
        <h2>Testimoni Pada Toko Kami</h2>
        <p>Terdapat beberapa testimoni yang kami dapatkan ketika menjual produk kami</p>
    </div>
    <div class="col-4 mt-md-3 mt-sm-4 m-2" data-aos="fade-up" data-aos-duration="500">
        <div class="card mt-sm-4" style="width: 20rem;">
            <div class="container mt-4">
                <img src="gambar/testi1.jpg" alt="Image1" class="Testi card-img-top img-fluid custom-img">
            </div>
            <div class="card-body">
                <h6>Testimoni 1</h6>
            </div>
        </div>
    </div>
    <div class="col-4 mt-md-3 mt-sm-4 m-2" data-aos="fade-up" data-aos-duration="500">
        <div class="card mt-sm-4" style="width: 20rem;">
            <div class="container mt-4">
                <img src="gambar/Testi2.jpg" alt="Image1" class="Testi card-img-top img-fluid custom-img">
            </div>
            <div class="card-body">
                <h6 class="card-title">Testimoni 2</h6>
            </div>
        </div>
    </div>
    <div class="col-4 mt-md-3 mt-sm-4 m-2" data-aos="fade-up" data-aos-duration="500">
        <div class="card mt-sm-4" style="width: 20rem;">
            <div class="container mt-4">
                <img src="gambar/testi3.jpg" alt="Image1" class="Testi card-img-top img-fluid custom-img">
            </div>
            <div class="card-body">
                <h6 class="card-title">Testimoni 3</h6>
            </div>
        </div>
    </div>
    <div class="col-4 mt-md-3 mt-sm-4 m-2" data-aos="fade-up" data-aos-duration="500">
        <div class="card mt-sm-4" style="width: 20rem;">
            <div class="container mt-4">
                <img src="gambar/testi4.png" alt="Image1" class="Testi card-img-top img-fluid custom-img">
            </div>
            <div class="card-body">
                <h6 class="card-title">Testimoni 4</h6>
            </div>
        </div>
    </div>
    <div class="col-4 mt-md-3 mt-sm-4 m-2" data-aos="fade-up" data-aos-duration="500">
        <div class="card mt-sm-4" style="width: 20rem;">
            <div class="container mt-4">
                <img src="gambar/testi5.png" alt="Image1" class="Testi card-img-top img-fluid custom-img">
            </div>
            <div class="card-body">
                <h6 class="card-title">Testimoni 5</h6>
            </div>
        </div>
    </div>
    <div class="col-4 mt-md-3 mt-sm-4 m-2" data-aos="fade-up" data-aos-duration="500">
        <div class="card mt-sm-4" style="width: 20rem;">
            <div class="container mt-4">
                <img src="gambar/testi6.png" alt="Image1" class="Testi card-img-top img-fluid custom-img">
            </div>
            <div class="card-body">
                <h6 class="card-title">Testimoni 6</h6>
            </div>
        </div>
    </div>
</div>



    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-4 mt-3 mt-md-4" style="background-color: #323232;">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left me-5">
                <div class="col-md-3 col-lg-3 col-xl-4 mx-auto mt-3">
                    <h5 class="d-flex flex-column text-uppercase mb-4 font-weight-bold text-warning">Elizabeth Ulos</h5>
                    <p>Toko yang menyediakan berbagai ulos yang dapat dibeli dan menyediakan layanan pemesanan dari luar pulau</p>
                    <h2>0852 - 7766 - 9222</h2>
                    <p style="text-decoration: underline;">ElizabethUlos@gmail.com</p>

                    <div class="text-center text-md-right mt-5">
                        <h6 class="text-warning">Temukan Lebih Banyak Pada Media Sosial Kami :</h6>
                        <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                                <a href="https://web.facebook.com/elizabethulosbatak/?locale=id_ID&_rdc=1&_rdr" class="btn-floating btn-sm text-white" style="font-size: 23px;" target="_blank">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/elizabethulosbatak/" class="btn-floating btn-sm text-white" style="font-size: 23px;" target="_blank">
                                    <i class="bi bi-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.tiktok.com/@elizabethulos?_t=8cxSKND2ysT&_r=1" class="btn-floating btn-sm text-white" style="font-size: 23px;" target="_blank">
                                    <i class="bi bi-tiktok"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/results?search_query=elizabeth+ulos" class="btn-floating btn-sm text-white" style="font-size: 23px;" target="_blank">
                                    <i class="bi bi-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-6 mx-auto mt-3">
                    <div class="iframe-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3986.4263299503386!2d99.12710621475559!3d2.362757498278076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMsKwMjEnNDUuOSJOIDk5wrAwNyc0NS41IkU!5e0!3m2!1sid!2sid!4v1684829412115!5m2!1sid!2sid"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="peta"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-center align-items-center">
            <div class="mt-md-2">
                <p>© 2022 All rights reserved</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
  </body>
</html>
