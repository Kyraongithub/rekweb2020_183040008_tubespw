<?php require '../backend/function.php';

$conn = koneksi();

$id = $_GET['idmobil'];

$mobil = query("SELECT * FROM mobil NATURAL JOIN merkmobil WHERE mobil.id = merkmobil.id AND idmobil=$id")[0];



?>







<!DOCTYPE html>
<html class=" scrollspy">
    <head>
      <title>Ramadhan Auto</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- icon -->
      <link rel="icon" href="../../assets/img/icon.png">
      <!--css-->
      <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="../../css/rizky.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>  
    <body class="body scrollspy" id="body">
        <!-- navbar1 -->
      <div class="navbar-fixed">
        <nav class="white accent-2">
          <div class="container">
          <div class="nav-wrapper">
            <a href="../../index.php" class="brand-logo black-text"><img src="../../assets/img/logo.png" alt=""></a>
             <a href="#" data-target="mobile-nav" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
              <li>
                <button class="btnhome">
                  <a href="../../index.php" class="black-text">Home</a>
              </button>
              </li>

              <li>
                <button class="btnbrg">
                  <a href="merk.php" class="black-text">Product</a>
                </button>
              </li>
              <li><a href="login.php" class="black-text person"><i class="material-icons small">person</i></a></li>
              
            </ul>
          </div>
          </div>
        </nav>
    </div>
        <!-- end of navbar1 -->




        <!-- navbar2 -->
      <div class="navbar-fixed">
        <nav class="red accent-2">
          <div class="container">
            <div class="nav-wrapper">
              <ul class="menu">
                <li><a href="#body" class="scroll pnav">Preview  </a></li>
                <li><a href="#harga" class="scroll pnav">Harga  </a></li>
                <li><a href="#spek" class="scroll pnav">Spesifikasi</a></li>
              </ul>
            </div>
          </div>
        </nav>
    </div>
        <!-- end of navbar2 -->




          <!-- sidebar -->
          <ul class="sidenav" id="mobile-nav">
            <li><a href="../../index.php">Home</a></li>
            <li><a href="merk.php">Product</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
          <!-- end of sidebar -->



        <!-- content -->
        <div class="container putih padbot con scrollspy">
          <div class="nama">
            <h4><?= $mobil['merk']; ?> <?= $mobil['tipe']; ?></h4>
            <h5>Mulai dari <?= $mobil['harga']; ?> USD</h5>
          </div>
          <!-- slider -->
          <div class="slider">
            <ul class="slides">
              <li>
                <img src="../../assets/img/mobil/<?= $mobil['foto1']?>"> 
                <div class="caption center-align">
                </div>
              </li>
              <li>
                <img src="../../assets/img/mobil/<?= $mobil['foto2']?>"> 
                <div class="caption left-align white-text">
                </div>
              </li>
              <li>
                <img src="../../assets/img/mobil/<?= $mobil['foto3']?>"> 
                <div class="caption left-align white-text">
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- end slider -->

          <div class="container putih ll">
            <div class="spek1">
              <div class="row">
                <div class="col m3 s3 a1">
                  <div class="card horizontal border">
                    <div class="card-stacked">
                      <div class="card-content pp">
                      <p class="center">Tipe</p>
                        <p class="center"><?= $mobil['tipe']; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col m3 s3 a1">
                  <div class="card horizontal border">
                    <div class="card-stacked">
                      <div class="card-content pp">
                        <p class="center">Daya Maximum</p>
                        <p class="center"><?= $mobil['dayamaksimum']; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col m3 s3 a1">
                  <div class="card horizontal border">
                    <div class="card-stacked">
                      <div class="card-content pp">
                        <p class="center">Torsi Maximum</p>
                        <p class="center"><?= $mobil['torsimaksimum']; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col m3 s3 a1">
                  <div class="card horizontal border">
                    <div class="card-stacked">
                      <div class="card-content pp">
                        <p class="center">Transmisi</p>
                        <p class="center"><?= $mobil['transmisi']; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!--tutup row-->
            </div><!--tutup spek1-->
          </div><!--tutup container putih ll-->


          <!-- harga -->

          <div class="container putih padbot scrollspy" id="harga">
            <h4 class="center">Harga <?= $mobil['merk']; ?> <?= $mobil['tipe']; ?></h4>
            <h5 class="center"><?= $mobil['harga']; ?> USD</h5>
          </div>  

          <!-- harga -->



          <!-- spek2 -->

          <div class="container putih ll padbot scrollspy" id="spek">
            <h4 class="nama">Spesifikasi</h4>
            <table class="table" align="center">
              <tr>
                <td>Tipe</td>
                <td><?= $mobil['tipe']; ?></td>
              </tr>
              <tr>
                <td>Tipe Mesin</td>
                <td><?= $mobil['tipemesin']; ?></td>
              </tr>
              <tr>
                <td>Daya Maximum</td>
                <td><?= $mobil['dayamaksimum']; ?></td>
              </tr>
              <tr>
                <td>Torsi Maximum</td>
                <td><?= $mobil['torsimaksimum']; ?></td>
              </tr>
              <tr>
                <td>Transmisi</td>
                <td><?= $mobil['transmisi']; ?></td>
              </tr>
              <tr>
                <td>Tersedia dalam warna</td>
                <td><?= $mobil['warna']; ?></td>
              </tr>
            </table>

          </div>


          <!-- spek2 -->




        








        <!-- end of content -->









          <!--JavaScript-->
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script src="../../js/rizky.js"></script>
          
</body>
</html>