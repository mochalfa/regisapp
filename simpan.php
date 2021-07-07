<?php
	include "php/koneksi.php";

	$nisn = $_POST['nisn'];
	$namapeserta = $_POST['namapeserta'];
	$jkel = $_POST['jkel'];
	$tempatlahir = $_POST['tempatlahir'];
	$tahun = $_POST['thn'];
	$bulan = $_POST['bln'];
	$tanggal = $_POST['tgl'];
	$tgllahir = $tahun."-".$bulan."-".$tanggal;
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];
	$asalsmp = $_POST['asalsmp'];
	$namaayah = $_POST['namaayah'];
	$pekerjaanayah = $_POST['pekerjaanayah'];
	$namaibu = $_POST['namaibu'];
	$pekerjaanibu = $_POST['pekerjaanibu'];
	$namawali = $_POST['namawali'];
	$pekerjaanwali = $_POST['pekerjaanwali'];
	$penghasilan = $_POST['penghasilan'];
	$nilaiun = $_POST['nilaiun'];

  $filefoto = $_FILES['foto']['name'];

  if (strlen($filefoto)>0){
    //upload
    if (is_uploaded_file($_FILES['foto']['tmp_name'])){
      move_uploaded_file($_FILES['foto']['tmp_name'], "images/pendaftar/".$filefoto);
    }
  }

	//insert ke tabel
	$isi = "INSERT INTO daftar VALUES('$nisn','$filefoto','$namapeserta','$jkel','$tempatlahir','$tgllahir','$agama','$alamat','$asalsmp','$namaayah','$pekerjaanayah','$namaibu','$pekerjaanibu','$namawali','$pekerjaanwali','$penghasilan','$nilaiun')";
	$sql = mysql_query ($isi) or die (mysql_error());
	if ($sql){
		echo "
		<script>
			alert('PENDAFTARAN PESERTA DIDIK BARU TELAH BERHASIL !')
		</script>
		";
	}else{
		echo "<script>alert('PENDAFTARAN ANDA TELAH GAGAL !')</script>";
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMA SULUH</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/style.css" rel="stylesheet" />

  <style type="text/css">
    body{
      background-image: url(images/form/backsuluh.jpg);
      background-attachment: fixed;
      background-repeat: no-repeat;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
            <div class="navbar-brand">
              <a href="index.html"><h1><span>SMA</span> SULUH</h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="index.html" class="active">BERANDA</a></li>
                <li role="presentation"><a href="profil.html">TENTANG</a></li>
                <li class="dropdown">
                  <a href="kegiatan.html" class="dropdown-toggle" data-toggle="dropdown">AGENDA<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="kegiatan.html">INFORMASI PENDAFTARAN</a></li>
                    <li><a href="kegiatan2.html">INFORMASI ADMINISTRASI KEUANGAN</a></li>
                    <li><a href="kegiatan3.html">INFORMASI TATA CARA PENDAFTARAN</a></li>
                  </ul>
                </li>
                <li role="presentation"><a href="daftar.php">PENDAFTARAN</a></li>
                <li role="presentation"><a href="siswaterdaftar.php">SISWA TERDAFTAR</a></li>
                <li role="presentation"><a href="kontak.html">KONTAK</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Beranda</a></li>
        <li>PENDAFTARAN</li>
      </div>
    </div>
  </div>

  <div class="thanks">
    <center>
    <font color="black">
    <br>
      <marquee scroolamount="10" direction="left" width=500>
      <h2>
        TERIMA KASIH KARENA TELAH MEMILIH SMA SULUH
      </h2>
      </marquee>
    <br><br>

    <img src="images/form/suluh.jpg" class="img-responsive">
    
    <br><br>
    <h2>
      SILAHKAN CEK<br>
      NAMA<br>
      YANG TELAH DIDAFTARKAN<br>
      <br>|<br>|<br>|<br>|<br><br>
      <u>
        <a href="siswaterdaftar.php">SISWA TERDAFTAR</a>
      </u>
    </h2>
    </font>
    </center>
  </div>

  <footer>
    <div class="footer">
      <div class="container">
        <div class="col-md-4 col-md-offset-4">
          <div class="copyright">
            COPYRIGHT&copy;2019 SMA SULUH. ALL RIGHTS RESERVED <br>
            DESIGNED BY MOCHAMAD ALFA RIEANA
          </div>
        </div>
      </div>

      <div class="pull-right">
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
    </div>
  </footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate.min.js"></script>

  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>

</body>

</html>