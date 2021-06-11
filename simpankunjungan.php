<?php
 //http://localhost/infa/aksi_add.php?kmk=INF103&nmk=Struktur+Data&kj=C&sks=3%281-2%29&tmbl=simpan
 
// $a = $_GET["idn"];
// $b = $_GET["kdg"];
//$c = $_GET["nmg"];

//$idreservasi = $_GET["id_reservasi"];
//$tanggal= $_GET["tanggal"];
//$jenis = $_GET["jenis"];
//$date=("Y-m-d");

//$idreservasi = $_GET["id_reservasi"];
$tanggal=$_GET["tanggal"];
$jenis = $_GET["jenis"];
$waktu=$_GET["waktu"];
$nama=$_GET["nama"];
$nomoridentitas=$_GET["nomoridentitas"];
$kota=$_GET["kota"];
$negara=$_GET["negara"];
$kebangsaan=$_GET["kebangsaan"];
$nomortelepon=$_GET["nomortelepon"];
$email=$_GET["email"];
//$foto = $_FILES['foto']['name'];

//$pecah = explode('.',$foto);
//$nama_baru = "tabel_reservasikunjungan".$nama.".".$pecah[1];
//$nama_baru = "kunjungan_".$nama.".".$pecah[1];
//$tmp_file = $_FILES['foto']['tmp_name'];
//$foto1 = $_FILES['foto'];
$date=("Y-m-d");
//$file_name = $_FILES["foto"]["name"];
//$tmp_name = $_FILES["gambar"]["tmp_name"];
    //ove_uploaded_file($tmp_name, "images/".$file_name);

//$db->query("INSERT INTO rsh_upload_image VALUES('', '$name', '$file_name')");

 include("aksi_koneksi.php");
 //INSERT INTO `db_reservasikunjungan`.`tabel_negara` (`id_negara`, `nama_negara`, `kode_negara`) VALUES ('423456789', 'THD', 'Thailand');
 $q = "INSERT INTO `museum`.`tabel_reservasikunjungan` 
 			( `tanggal`, `jenis`,`waktu`,`nama`,`nomoridentitas`,`kota`,`negara`,`kebangsaan`,`nomortelepon`,`email`) 
 		VALUES 
 			('$tanggal', '$jenis','$waktu','$nama','$nomoridentitas','$kota','$negara','$kebangsaan','$nomortelepon','$email')";

//$nama_direktori = "uploaded_files";
//move_uploaded_file($tmp_file,$nama_direktori."/".$nama_baru);

$result = mysqli_query($conn, $q);
if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }

// mengalihkan ke halaman index.php
header("location:kunjunganterakhir.php");
?>
