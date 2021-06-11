<!DOCTYPE html>
<html>
<head>
	<title>View Data Mata Kuliah</title>
</head>
<body>
	<h2>Daftar Mata Kuliah</h2>
	<h3>
		<a href="add_form.php">tambah data baru</a>
	</h3>
	<?php
	
		include("aksi_koneksi.php");

	  	//Setelah terkoneksi berhasil baru kita melakukan transaksi
	  	$rslt = mysqli_query($con,"SELECT * FROM $table_name");
	  	
	  	while($rec  = mysqli_fetch_assoc($rslt)){
		  	foreach ($rec as $val){
		  		echo $val."&nbsp;&nbsp;&nbsp;";
		  	}
		  	
			echo "<a href=\"edit_form.php?kode=".$rec["id_reservasi"]."\">edit</a>&nbsp;"; 
		  	echo "<a href=\"aksi_delete.php?kode=".$rec["id_reservasi"]."\">delete</a>";
		  	echo "<br/>";
		} 

	?>
</body>
</html>