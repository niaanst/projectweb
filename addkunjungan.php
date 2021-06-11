<?php

	$host = 'localhost';
	$username = 'root';
	$password='';
	$dbname="museum";

	//$conn = mysql_connect($host,$username,$password)or die ('server terputus');
	$conn = mysqli_connect($host,$username,$password,$dbname) or die ('server terputus'); // koneksi

	if($conn){
		echo 'Server Terhubung';

		$sql = 'INSERT INTO reservasi VALUES ("KJ01190813","2019-08-13","GIT")';
		mysqli_query($conn,$sql);// mencetak data insert into
		
		$sql = 'INSERT INTO reservasi VALUES ("KJ02190813","2019-08-13","FIT")';
		mysqli_query($conn,$sql);
		
		$sql = 'INSERT INTO reservasi VALUES ("KJ03190813","2019-08-13","FIT")';
		mysqli_query($conn,$sql);
	
		
		
		
		//$sql = 'INSERT INTO mata_kuliah VALUES ("INF123","Bahasa Pemograman" ,"C" , "3(1-2)")'; // menambah data 
		//mysqli_query($conn,$sql);// mencetak data insert into
		
	//$sql = 'INSERT INTO mata_kuliah VALUES ("INF234","Struktur Data" ,"C" , "3(1-2)")'; // menambah data 
		//mysqli_query($conn,$sql);// mencetak data insert into


		//$sql = 'DELETE FROM mata_kuliah' ; //menghapus

		//mysqli_query($conn,$sql); // mencetak data insert into


		$sql = 'SELECT * FROM reservasi'; //menampilkan data

		//$query = mysqli_query($conn,$sql); //mengeksekusi query tetapi di tampung di query

		$count = mysqli_query($conn,$sql);

		$result=mysqli_query($conn,$sql);

		$count = mysqli_num_rows($result);

		echo'<br>'.$count.'<br>' ; // mencetak hasil yang ditampung di count
			
		if ($count){
				 while($data=mysqli_fetch_row($result)){
				 	//echo $data[1].'<br>';
				 echo $data[0].'-'.$data[1].'-',$data[2].'<br>';
				 }
			//$data = mysqli_fetch_row($result); // mengambil data ke 1
			//$data = mysqli_fetch_row($result);
			echo $data[0].'-'.$data[1].'-',$data[2].'<br>';

			}

		//echo'<br>'.mysqli_num_rows($query);

	}
	//else 
		//echo 'server terputus';

?>
