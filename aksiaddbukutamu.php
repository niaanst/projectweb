<?php
 //http://localhost/infa/aksi_add.php?kmk=INF103&nmk=Struktur+Data&kj=C&sks=3%281-2%29&tmbl=simpan
 
 //$a = $_GET["idn"];
 //$b = $_GET["kdg"];
 //$c = $_GET["nmg"];
 
 //$kodepengunjung ="BK01191031";
 //$nama = " Nia Irwanti ";
 //$tanggal = "2019-10-31";
 //$email= "niairwanti@gmail.com";
 //$jenispengunjung = "Individu";
 //$tingkatkepuasan= "puas";
 //$komentar = "sangat bagus";
 
 //$kodepengunjung =$_GET["kodepengunjung"];
 $nama = $_GET ["nama"];
 $tanggal = $_GET["tanggal"];
 $email= $_GET["email"];
 $jenispengunjung =$_GET ["jenis"];
 $tingkatkepuasan=$_GET ["rating"];
 $komentar = $_GET["komentar"];


 include("koneksibukutamu.php");
 //INSERT INTO `db_reservasikunjungan`.`tabel_negara` (`id_negara`, `nama_negara`, `kode_negara`) VALUES ('423456789', 'THD', 'Thailand');
 $q = "INSERT INTO `museum`.`bukutamu` 
 			(`nama`, `tanggal`,`email`,`jenispengunjung`,`tingkatkepuasan`,`komentar`) 
 		VALUES 
 			('$nama','$tanggal','$email','$jenispengunjung','$tingkatkepuasan','$komentar')";
 $result = mysqli_query($conn, $q);
if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }

// mengalihkan ke halaman index.php
header("location:bukutamu2.php");
 
?>
