<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Buku Tamu - Museum Pertanian</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Museum Pertanian</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Beranda</a></li>
            <li class="nav-item"><a href="kunjungan.php" class="nav-link">Kunjungan</a></li>
            <li class="nav-item"><a href="penginapan.php" class="nav-link">Penginapan</a></li>
            <li class="nav-item active"><a href="bukutamu.php" class="nav-link">Buku Tamu</a></li>
            <li class="nav-item"><a href="tentang.php" class="nav-link">Tentang</a></li>
            <li class="nav-item"><a href="kontak.php" class="nav-link">Kontak</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
		<div class="hero-wrap" style="background-image: url('images/gambar16.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Beranda</a></span> <span>Buku Tamu Pengunjung Museum Pertanian</span></p>
	            <h1 class="mb-4 bread">Buku Tamu Pengunjung Museum</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Informasi Kontak</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Alamat:</span> Kementerian Pertanian RI Jl. Harsono RM. No. 3, Ragunan Jakarta 12550, Indonesia</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Telepon PPID:</span> <a href="tel://1234567920">0812-8237-0137</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">humas-ip@pertanian.go.id</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Website</span> <a href="#">www.pertanian.go.id</a></p>
	          </div>
          </div>

          </div>
        
        <div class="col-md-12 d-flex">
            <div class="info ftco-bg-dark p-4">
              <p><span></span> <a href="kunjungan.html">Sebelum mengisi buku tamu, pastikan Anda sudah menjadi pengunjung resmi dengan mengunjugi laman reservasi kunjungan dengan klik tulisan ini :)</a></p>
            </div>
          </div>
          <br />

        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="aksiaddbukutamu.php" method="get" class="bg-white p-5 contact-form">
              
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama Lengkap Pengunjung" name="nama">
              </div>
              <div class="form-group">
                <input type="date" class="form-control" placeholder="Waktu Kunjungan" name ="tanggal">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email Pengunjung" name="email">
              </div>
              
              <div class="form-group">
          <span class="label-input100">Jenis Pengunjung</span>
          <div>
            <select class="js-select2" name="jenis">
              <option>Pilih</option>
              <option>Individu</option>
              <option>Rombongan</option>
            </select>
            <div class="dropDownSelect2"></div>
          </div>
        </div>

        <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
          <span class="label-input100">Tingkat Kepuasan Pengunjung</span>
          <div>
            <select class="js-select2" name="rating">
              <option>Pilih</option>
              <option>Tidak Puas</option>
              <option>Kurang Puas</option>
              <option>Puas</option>
              <option>Cukup Puas</option>
              <option>Sangat Puas</option>
            </select>
            <div class="dropDownSelect2"></div>
          </div>
        </div>
        <br />
              <div class="form-group">
                <textarea id="" cols="30" rows="7" class="form-control" placeholder="Komentar Pengunjung" name ="komentar"></textarea>
              </div>
              <div class="form-group">
                
				  <input class="btn btn--radius-2 btn--blue-2"  type="submit" name="tmbl" value="Send Message">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">MUSEUM TANAH DAN PERTANIAN</h2>
              <p>Kabar gembira bagi seluruh masyarakat, kota Bogor khususnya, telah di buka kembali Museum Tanah Indonesia yang sempat tidak beroperasi selama dilaksanakannya renovasi gedung dan fasilitas penunjang museum. Kini Museum Tanah Indonesia menempati komplek gedung yang terdiri dari empat bangunan yang dilengkapi dengan perpustakaan, sinema, penginapan bahkan area play ground untuk anak-anak. Soft launching Museum Tanah Indonesia ini dilakukan oleh Menteri Pertanian Amran Sulaiman di Bogor siang ini (5 Desember 2017 bertepatan dengan peringatan World Soil Day atau Hari Tanah Sedunia tahun 2017.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://www.youtube.com/user/pustakadeptan" target="_blank"><span class="icon-youtube"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/pustakakementan" target="_blank"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/pustaka.kementan/" target="_blank"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Link Terkait</h2>
              <ul class="list-unstyled">
                <li><a href="https://pertanian.go.id/" target="_blank" class="py-2 d-block">Kementrian Pertanian</a></li>
                <li><a href="http://setjen.pertanian.go.id/site/" target="_blank" class="py-2 d-block">Setjen Pertanian Republik Indonesia</a></li>
                <li><a href="http://www.litbang.pertanian.go.id/" target="_blank" class="py-2 d-block">Badan Litbang Pertanian</a></li>
                <li><a href="http://www.fao.org/home/en/" target="_blank" class="py-2 d-block">Lembaga Pangan Dunia</a></li>
                <li><a href="https://www.perpusnas.go.id/" target="_blank" class="py-2 d-block">Perpustakaan Nasional</a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Hubungi Kami</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text"><a href="https://www.google.com/maps/dir/-6.5971482,106.8060391/Pusat+Perpustakaan+dan+Penyebaran+Teknologi+Pertanian+Jl.+Ir.+H.+Juanda+No.+20+Bogor+16122/@-6.5982641,106.7911312,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e69c5b808aa9481:0xf22d8e600d5d421a!2m2!1d106.793698!2d-6.5982516" target="_blank">Pusat Perpustakaan dan Penyebaran Teknologi Pertanian <br /> Jl. Ir. H. Juanda No. 20 Bogor 16122</a></span></li>
                  <li><span class="icon icon-phone"></span><span class="text">0251 8321746</span></li>
                  <li><span class="icon icon-envelope"></span><span class="text">pustaka@pertanian.go.id</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https://colorlib.com" target="_blank">by Kelompok Domain Visual <i class="icon-heart color-danger" aria-hidden="true"></i></a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- // <script src="js/jquery.timepicker.min.js"></script> -->
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>