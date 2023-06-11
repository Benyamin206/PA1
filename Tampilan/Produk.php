<?php  

require "../Admin/fungsi_admin.php";

$data_produk = ambilData("SELECT * FROM produk");



if(isset($_POST['semua'])){
    $data_produk = ambilData("SELECT * FROM produk");
}else if(isset($_POST['ulos'])){
    $id_ulos = $_POST['id_ulos'];
    $data_produk = ambilData("SELECT * FROM produk WHERE id_kategori = '$id_ulos'");
}else if(isset($_POST['songket'])){
    $id_songket = $_POST['id_songket'];
    $data_produk = ambilData("SELECT * FROM produk WHERE id_kategori = '$id_songket'");
}else if(isset($_POST['sortali'])){
    $id_sortali = $_POST['id_sortali'];
    $data_produk = ambilData("SELECT * FROM produk WHERE id_kategori = '$id_sortali'");
}


$aktif = 'semua';

if (isset($_POST['semua'])) {
    $aktif = 'semua'; // Menandai tombol "Semua" sebagai aktif
} else if (isset($_POST['ulos'])) {
    $aktif = 'ulos'; // Menandai tombol "Ulos" sebagai aktif
} else if (isset($_POST['songket'])) {
    $aktif = 'songket'; // Menandai tombol "Songket" sebagai aktif
} else if (isset($_POST['sortali'])) {
    $aktif = 'sortali'; // Menandai tombol "SorTali" sebagai aktif
}




?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk - Elizabeth Ulos</title>
    <link rel="stylesheet" href="CSS/Produk2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="logoToko.jpg">

  </head>
    <style>
        .btn-ok{
            background-color : #722D2D;
            color : white;
        }
    </style>


  <body>
    <!-- navigasi -->
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" style="box-shadow: 0 2px 7px rgba(0, 0, 0, 0.3);">
        <div class="container-fluid">
            <a class="navbar-brand text-dark" href="#">
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
                    <a href="Tentang.php" id="tentang">Tentang Kami</a>
                    <a href="Produk.php" id="produk" style="background-color:">Produk</a>    
                    <a href="Ulasan.php" id="ulasan">Ulasan</a>    
                    <?php
                    session_start();
                    if( isset($_SESSION["login"])){?>
                        <a href="../Admin/dasbor_admin.php">Dasbor Admin</a>
                   <?php } else{?>
                    <a href="../Admin/login_admin.php">Login Admin</a>
                   <?php } ?>                   </div>
            </div>
        </div>
    </nav>
</header>

        <br><br><br>
    
        <!-- Hero Section -->
        <div >
            <h1 class="d-flex justify-content-center text-center text-dark" style="margin-top: 110px;">Produk Kami</h1>
        </div>
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-6 mt-4">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Cari nama produk..." id="search-input" />
  </div>
</div>
<br><br><br>

                <div class="input-group-append">
                    <div class="row wrapper">
                        <div class="col-lg-3 mt-md-3">

                        <form action="" method="POST">
                        <input type="hidden" name = 'semua'>
                        <button class="btn <?php echo ($aktif == 'semua') ? 'btn-ok' : 'btn-outline-dark'; ?> rounded-pill w-100" type="submit" name="semua">Semua</button>
                        </form>

                        </div>
                        <div class="col-lg-3 mt-md-3">
                        <form action="" method="POST">
                        <input type="hidden" name = 'id_ulos' value = "1">
                        <button class="btn <?php echo ($aktif == 'ulos') ? 'btn-ok' : 'btn-outline-dark'; ?> rounded-pill w-100" type="submit" name="ulos">Ulos</button>
                        </form>
                        </div>
                        <div class="col-lg-3 mt-md-3">
                        <form action="" method="POST">
                        <input type="hidden" name = 'id_songket' value = "2">
                        <button class="btn <?php echo ($aktif == 'songket') ? 'btn-ok' : 'btn-outline-dark'; ?> rounded-pill w-100" type="submit" name="songket">Songket</button>
                        </form>
                        </div>
                        <div class="col-lg-3 mt-md-3">
                        <form action="" method="POST">
                        <input type="hidden" name = 'id_sortali' value = "3">
                        <button class="btn <?php echo ($aktif == 'sortali') ? 'btn-ok' : 'btn-outline-dark'; ?> rounded-pill w-100" type="submit" name="sortali">SorTali</button>
                        </form>
                        </div>                            
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>

    <!-- section -->
  
    <section id="values-product">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach($data_produk as $dp){ ?>
                <div class="col col-md-5 col-lg-4 h-75 kartu">
                    <div class="card h-100 shadow custom-card">
                        <img src="../Gambar/gambar_produk/<?php echo $dp['gambar']; ?>" alt="" class="card-img-top w-100 custom-bg" width = 200 height = 350>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $dp['nama_produk']; ?></h4>
                        </div>
                        <div class="card-footer custom-footer">
                            <div class="float-start">
                                <h4 class="custom-highlight">Rp<?php echo number_format( $dp['harga_produk'], 0, ',', '.'); ?></h4>
                            </div>
                
                            

                            <div class="float-end">
                            <?php 
                    $pesan_template = urlencode("Halo, saya tertarik untuk memesan produk " . $dp['nama_produk'] . 
                    ".\nTerimakasih.");

                    echo  '<a href="https://wa.me/6281360344859?text=' . $pesan_template . '" 
                    class="btn btn-success rounded-3" target = "_blank">Pesan</a>';
                    ?>

                                <a href="Informasi_produk.php?id_produk=<?php echo $dp['id_produk']; ?>">
                                    <button class="btn btn-primary rounded-3 custom-btn">Detail Produk<i class="fas fa-info-circle ms-2"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            </div>
        </div>
    </section>
    <center>
    <div style="width:300px; height: 200px;">
        <p id="produk-not-found" style="display: none;">Produk tidak ditemukan</p>
        </div>
    </center>

  
    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-4" style="background-color: #323232;">
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

    <script src="https://kit.fontawesome.com/041b345707.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>  
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
  $(document).ready(function() {
    $('#search-input').on('keyup', function() {
      searchProducts();
    });
  });
</script>

<script>
  function searchProducts() {
    var searchValue = $('#search-input').val().toLowerCase();

    $('.kartu').each(function() {
      var productName = $(this).find('.card-title').text().toLowerCase();
      var productPrice = $(this).find('.custom-highlight').text().toLowerCase();

      if (productName.indexOf(searchValue) > -1 || productPrice.indexOf(searchValue) > -1) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });

    var visibleCards = $('.kartu:visible');
    if (visibleCards.length === 0) {
      $('#produk-not-found').show();
    } else {
      $('#produk-not-found').hide();
    }
  }
</script>




  </body>
</html>