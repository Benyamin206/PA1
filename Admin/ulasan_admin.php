<?php 


session_start();

if( !isset($_SESSION["login"])){
    header("Location: login_admin.php");
    exit;
}


      include 'layouts/navbar(1)_layout.html';
      require "fungsi_admin.php";

      $data_ulasan = ambilData("SELECT * FROM ulasan");


?>
<link href="css/style_ulasan_admin.css" rel="stylesheet" />
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');


*{
    font-family: 'Roboto Slab', serif;
    font-size: large;
    transition: .2s linear;
    text-transform: capitalize;
}


    #ulasan{
    background-color : white;
    color : #722D2D;
  }
  #dasbor:hover{
    background-color : white;
    color: grey;
  }
</style>

<div class="container">
    <h2 style="color : #722D2D">Ulasan</h2>
    <table>
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama Pengirim</th>
          <th>Email</th>
          <th>Isi Ulasan</th>
          <th>Waktu</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

        <?php 
        $a = 1;
        foreach($data_ulasan as $df){ ?>
        <tr>
          
          <td><?php echo $a; ?></td>
          <td><?php echo $df['nama_pengirim']; ?></td>
          <td><?php echo $df['email_pengirim']; ?></td>
          <td><?php echo $df['isi_ulasan']; ?></td>
          <td style="max-width:200px;overflow-wrap: break-word;"><?php echo $df['waktu']; ?></td>
          <td><a href="hapus_ulasan.php?id_ulasan=<?php echo $df['id_ulasan']; ?>" style="text-decoration:none; color:white"><button class="btn btn-danger">Hapus</button></a></td>
        </tr>
        <?php
        $a++;
        } ?>
      </tbody>
    </table>
  </div>




<?php include 'layouts/navbar(2)_layout.html' ?>