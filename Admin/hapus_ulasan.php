<?php 
      session_start();

      if( !isset($_SESSION["login"])){
          header("Location: login_admin.php");
          exit;
      }




require "fungsi_admin.php";


$id_ulasan = $_GET['id_ulasan'];

if(hapusFeedback($id_ulasan) > 0){
    echo "<script>
    alert('Ulasan Berhasil Dihapus');
    document.location.href = 'ulasan_admin.php';
</script>";
} else{
    echo "<script>
    alert('Ulasan Gagal Dihapus');
    document.location.href = 'ulasan_admin.php';
</script>";
}


?>