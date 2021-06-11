<!DOCTYPE html>
<html>
<head>
	<title>Form Menambah Data</title>
</head>
<body>
	<h2>Form Data Baru</h2>
	kode mata kuliah, nama mata kuliah, kode jurusan, sks<br/>
	<form action="aksiaddkunjungan1.php">
		<input type="text" name="id_reservasi">
		<input type="date" name="tanggal">
		<select name="jenis" >
                            <option value="0">Pilih</option>
                            <option value="instansi" title="Daftar Atas Nama Sekolah/Univ">Instansi</option>
                            <option value="fit" title="Visitor <= 6">FIT (Free Individual Travel)</option>
                            <option value="git" title="Visitor >= 7">GIT (Group Individual Travel)</option>
                            <option value="agentravel" title= "Visitor >= 7">Agen Travel</option>
                          </select>
		<input type="submit" name="tmbl" value="simpan">
	</form>

</body>
</html>