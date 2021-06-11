<?php

	$host = 'localhost';
	$username = 'root';
	$password='';
	$dbname="nia";

	//$conn = mysql_connect($host,$username,$password)or die ('server terputus');
	$conn = mysqli_connect($host,$username,$password,$dbname) or die ('server terputus'); // koneksi

	if($conn){
		echo 'Server Terhubung';

		$sql = 'INSERT INTO m VALUES ("1","Nia Irwanti")';
		mysqli_query($conn,$sql);// mencetak data insert into
		
		

		


		//$sql = 'DELETE FROM mata_kuliah' ; //menghapus

		//mysqli_query($conn,$sql); // mencetak data insert into


		$sql = 'SELECT * FROM m'; //menampilkan data

		//$query = mysqli_query($conn,$sql); //mengeksekusi query tetapi di tampung di query

		$count = mysqli_query($conn,$sql);

		$result=mysqli_query($conn,$sql);

		$count = mysqli_num_rows($result);

		echo'<br>'.$count.'<br>' ; // mencetak hasil yang ditampung di count
			
		if ($count){
				 while($data=mysqli_fetch_row($result)){
				 	//echo $data[1].'<br>';
				 echo $data[0].'-'.$data[1].'-',$data[2].$data[3].'<br>';
				 }
			//$data = mysqli_fetch_row($result); // mengambil data ke 1
			//$data = mysqli_fetch_row($result);
			echo $data[0].'-'.$data[1].'-',$data[2].$data[3].'<br>';

			}

		
	}
	
?>

