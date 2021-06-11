<?php
 //http://localhost/infa/aksi_add.php?kmk=INF103&nmk=Struktur+Data&kj=C&sks=3%281-2%29&tmbl=simpan
 
// $a = $_GET["idn"];
// $b = $_GET["kdg"];
//$c = $_GET["nmg"];

//$idreservasi = $_GET["id_reservasi"];
$tanggal= $_POST["tgl"];
$jenis = $_POST["jenis"];
$date=("Y-m-d");

//$idreservasi = "KJ01191031";
//$tanggal= "2019-10-31";
//jenis = "GIT";
//$date=("Y-m-d");

 include("aksi_koneksi.php");
 //INSERT INTO `db_reservasikunjungan`.`tabel_negara` (`id_negara`, `nama_negara`, `kode_negara`) VALUES ('423456789', 'THD', 'Thailand');
 $q = "INSERT INTO `museum`.`reservasi` 
 			(`tanggal`, `jenis`) 
 		VALUES 
 			('$tanggal', '$jenis')";

$result = mysqli_query($conn, $q);

if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }

// mengalihkan ke halaman index.php
header("location:kunjungan3.php");
 
?>
<h2><a href="view_data.php">view data</a></h2>