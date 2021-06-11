
<?php

	$host = 'localhost';
	$username = 'root';
	$password='';
	$dbname="museum";

	//$conn = mysql_connect($host,$username,$password)or die ('server terputus');
	$conn = mysqli_connect($host,$username,$password,$dbname) or die ('server terputus'); // koneksi

	if($conn){
		echo 'Server Terhubung';

		$sql = 'INSERT INTO reservasikunjungan VALUES ("123456","2019-08-8","travel agent","10:10","Nia Irwanti","01234567","Medan","Indonesia","Indonesia","085372817753","niairwanti@gmail.com")';
		mysqli_query($conn,$sql);// mencetak data insert into
		
		$sql = 'INSERT INTO reservasikunjungan VALUES ("000001","2019-08-8","GIT","13:30","Selsa","3456787654321","Medan","Indonesia","Indonesia","085372817753","selsa@gmail.com")';
		mysqli_query($conn,$sql);// mencetak data insert into

		


		//$sql = 'DELETE FROM mata_kuliah' ; //menghapus

		//mysqli_query($conn,$sql); // mencetak data insert into


		$sql = 'SELECT * FROM reservasikunjungan'; //menampilkan data

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

