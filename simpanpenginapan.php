<?php
include 'koneksipenginapan.php';
  
// menyimpan data kedalam variabel
$kodereservasi   = $_GET['kodereservasi'];
$nama            = $_GET['nama'];
$nomortelepon    = $_GET['nomortelepon'];
$email           = $_GET['email'];
$checkin         = $_GET['checkin'];
$checkout        = $_GET['checkout'];
$jumlahkamar     = $_GET['jumlahkamar'];
$jenispembayaran = $_GET['jenispembayaran'];

//$kodereservasi   ='kodereservasi';
//$nama            = 'nama';
//$nomortelepon    = 'nomortelepon';
//$email           = 'email';
//$checkin         = '2019-10-29';
//$checkout        = '2019-10-31';
//$jumlahkamar     = 'jumlahkamar';
//$jenispembayaran = 'jenispembayaran';

// query SQL untuk insert data
 $q = "INSERT INTO `museum`.`penginapan` 
 			(`kodereservasi`,`nama`,`nomortelepon`, `email`,`checkin`,`checkout`,`jumlahkamar`,`jenispembayaran`) 
 		VALUES 
 			('$kodereservasi','$nama','$nomortelepon','$email','$checkin','$checkout','$jumlahkamar','$jenispembayaran')";
$result = mysqli_query($conn, $q);

if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }

// mengalihkan ke halaman index.php
header("location:penginapan3.php");

?>
