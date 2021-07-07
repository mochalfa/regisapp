<?php
  include "php/koneksi.php";

  $ambil = "Select * From daftar";
  $hasil = MySQL_query ($ambil);
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
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
    form{
      background-color: white;
      margin-left: 350px;
      margin-right: 350px;
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
        <li>SISWA TERDAFTAR</li>
      </div>
    </div>
  </div>

  <div class="tampil-isi">
    <br><br>
    <strong>
    <p align="justify">
      DIHARAPKAN KEPADA PESERTA DIDIK DAN ORANG TUA UNTUK MELAKUKAN VERIFIKASI DATA DISEKOLAH SESUAI DENGAN JADWAL YANG ADA DAN MEMBAWA BERKAS YANG TELAH DITENTUKAN. JIKA MERASA ADA KESALAHAN SAAT PENGISIAN DATA PENDAFTARAN, BISA DIPERBAIKI SAAT VERIFIKASI DISEKOLAH. <br><br>
      APABILA PESERTA DIDIK YANG TELAH TERDAFTAR TIDAK MELAKUKAN VERIFIKASI DATA PADA WAKTU YANG TELAH DITENTUKAN, PIHAK PANITIA PENERIMAAN PESERTA DIDIK BARU (PPDB) AKAN MENCORET DATA PESERTA DIDIK TERSEBUT DAN MENGANGGAP BAHWA PESERTA DIDIK TERSEBUT TIDAK JADI MENDAFTAR.
    </p>
    </strong>
  </div>

  <center>
    <br>
    <h2>
      PESERTA DIDIK YANG TELAH TERDAFTAR
    </h2>
    <br><br>
  </center>

  <div class="tampil">
    <strong>
    <font size="3">
    <table border="3" cellspacing="0" width="800" align="center">
    <th> NISN </th>
    <th> FOTO PESERTA DIDIK </th>
    <th> NAMA PESERTA DIDIK </th>
    <th> ASAL SEKOLAH SMP / MTS</th>
    <?php
      while ($data = mysql_fetch_array ($hasil)){
    ?>
    <tr>
        <td>
          <?php echo $data['nisn']; ?>
        </td>
        <td>
          <?="<img src='images/pendaftar/".$data['filefoto']."'style='width:120px; height:150px;'>"?>
        </td>     
        <td>
          <?php echo $data['namapeserta']; ?>
        </td>
        <td>
          <?php echo $data['asalsmp']; ?>
        </td>
    </tr>
    <?php
      }
    ?>
    </table>
    </font>

    <br><br>
    </strong>
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