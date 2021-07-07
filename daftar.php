<?php
  include "php/koneksi.php"
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
      background-image: url(images/form/background.jpg);
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
        <li>PENDAFTARAN</li>
      </div>
    </div>
  </div>

  <center>
    <br>
    <h2>
      FORM PENDAFTARAN PESERTA DIDIK BARU SMA SULUH JAKARTA
    </h2>
    <br><br>
  </center>

  <div id="print">
    <div class="daftar">
      <form action="simpan.php" method="POST" name="input" enctype="multipart/form-data">
      <font face="times no roman" size="4" color="black">
        <table align="center" border="0" cellspacing="0" width="600">
          <tr>
            <td> Nomor Induk Siswa Nasional </td>
            <td> : </td>
            <td> <input type="text" name="nisn" size="15" required> </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td> Foto Peserta Didik </td>
            <td> : </td>
            <td>
              <input type="file" name="foto">
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td> Nama Peserta Didik </td>
            <td> : </td>
            <td> <input type="text" name="namapeserta" size="30" required> </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td> Jenis Kelamin </td>
            <td> : </td>
            <td>
              <input type="radio" name="jkel" value="Laki - laki"> Laki - laki <br>
              <input type="radio" name="jkel" value="Perempuan"> Perempuan
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td> Tempat Lahir </td>
            <td> : </td>
            <td> <input type="text" name="tempatlahir" size="30" required> </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td> Tanggal Lahir </td>
            <td> : </td>
            <td>
              <select name=tgl>
                <?php
                  for($a=1;$a<=31;$a++){
                    echo "<option>".$a."</option>";
                  }
                ?>
              </select>
              <select name=bln>
                <?php
                  for($b=1;$b<=12;$b++){
                    echo "<option>".$b."</option>";
                  }
                ?>
              </select>
              <select name=thn>
                <?php
                  for($c=2000;$c<=2019;$c++){
                    echo "<option>".$c."</option>";
                  }
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td> Agama </td>
            <td> : </td>
            <td> <input type="text" name="agama" size="15" required> </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td> Alamat Lengkap </td>
            <td> : </td>
            <td>
              <textarea name="alamat" rows="8" cols="30"> </textarea>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td> Asal SMP / MTS </td>
            <td> : </td>
            <td> <input type="text" name="asalsmp" size="30" required> </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          
          <tr>
            <td> Nama Ayah </td>
            <td> : </td>
            <td> <input type="text" name="namaayah" size="30" required> </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td> Pekerjaan Ayah </td>
            <td> : </td>
            <td> <input type="text" name="pekerjaanayah" size="15" required> </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td> Nama Ibu </td>
            <td> : </td>
            <td> <input type="text" name="namaibu" size="30" required> </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td> Pekerjaan ibu </td>
            <td> : </td>
            <td> <input type="text" name="pekerjaanibu" size="15" required> </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td> Nama Wali <br> (Jika Ada) </td>
            <td> : </td>
            <td> <input type="text" name="namawali" size="30" required> </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td> Pekerjaan Wali </td>
            <td> : </td>
            <td> <input type="text" name="pekerjaanwali" size="15" required> </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td> Penghasilan Orang Tua / Wali <br> Rata-Rata Perbulan </td>
            <td> : </td>
            <td>
              <input type="radio" name="penghasilan" value="Rp. 1.000.000 - 3.000.000"> Rp. 1.000.000 - 3.000.000 <br>
              <input type="radio" name="penghasilan" value="Rp. 3.000.000 - 5.000.000"> Rp. 3.000.000 - 5.000.000 <br>
              <input type="radio" name="penghasilan" value="Diatas Rp. 5.000.000"> Diatas Rp. 5.000.000
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>

          <tr>
            <td> Jumlah Nilai UN </td>
            <td> : </td>
            <td> <input type="text" name="nilaiun" size="5" required> </td>
          </tr>
          
        </table>
        <center>
          <br>
          <input type="submit" name="simpan" value="DAFTAR">
          <br><br>
          <input type="reset" name="hapus" value="HAPUS">
          <br><br><br>
        </center>
      </font>
      </form>
    </div>
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