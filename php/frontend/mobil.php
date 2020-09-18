<?php require '../backend/function.php';

$conn = koneksi();

$id = $_GET['id'];

$merkmobil = query("SELECT * FROM merkmobil WHERE id=$id")[0];


if(isset($_GET['cari'])){
    $keyword = $_GET['s'];
    $mobil = query("SELECT * FROM mobil NATURAL JOIN merkmobil WHERE
                    mobil.id = merkmobil.id AND
                    mobil.tipe LIKE '%$keyword%' AND
                    mobil.id = $id
                    ");
}else {
    $mobil = query("SELECT  * 
                        FROM mobil NATURAL JOIN merkmobil 
                        WHERE mobil.id = merkmobil.id 
                        AND mobil.id = $id");
} 


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
    <body class="body">
        <!-- navbar -->
      <div class="navbar-fixed">
        <nav class="red accent-2">
          <div class="container">
          <div class="nav-wrapper">
            <a href="../../index.php" class="brand-logo black-text"><img src="../../assets/img/logo2.png" alt=""></a>
             <a href="#" data-target="mobile-nav" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
              <li>
                  <div class="search">
                  <form action="" method="get">
                    <input type="hidden" name="id" id="merk" value="<?= $merkmobil['id']?>">
                    <input id="keyword" type="search" name="s">
                    <button id="tombolcari" class="cari" name="cari"><i class="fa fa-search"></i></button>
                  </form>
                  </div>
                </li>
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
        <!-- end of navbar -->
          <!-- sidebar -->
          <ul class="sidenav" id="mobile-nav">
            <li><a href="../../index.php">Home</a></li>
            <li><a href="merk.php">Product</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
          <!-- end of sidebar -->
       <div class="row">
           <div class="col m1 s12"></div>
            <div class="all col m8 s12">
                <div class="merk center">
                    <img src="../../assets/img/merk/<?= $merkmobil['foto']; ?>" alt="" class="img">
                    <div class="detail">
                        <h6><?= $merkmobil['merk']; ?> adalah Produk Otomotif yang didirikan oleh <?= $merkmobil['namapendiri']; ?></h6>
                        <h6>Pada <?= $merkmobil['tahunberdiri']; ?></h6>
                        <h6>di Negara <?= $merkmobil['negara']; ?></h6>
                    </div>
                </div>
            </div>
            <div class="iklan col m2 s12">
                <h5>Penawaran Spesial</h5>
                <p>Cari Tahu model apapun Sekarang!</p>
                <img src="../../assets/img/iklan.jpg" alt="" style="width: 100%; height:auto;">
            </div>
        </div>
        <div class="bungkus putih">
                      <!-- sorting-->
                      <div class="pilih">
                                <!-- Dropdown Trigger -->
                            <a class='dropdown-trigger' href='#' data-target='dropdown1'>Urutkan</a>
                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content drop'>
                                <button id="asc" value="tipe ASC">Tipe A-Z</button>
                                <button id="desc" value="tipe DESC">Tipe Z-A</button>
                                <button id="asc1" value="harga ASC">harga min-max</button>
                                <button id="desc1" value="harga DESC">harga max-min</button>
                            </ul>
                        </div>
                    <!-- end of sorting -->
            <div class="row" id="container">
            <?php if(empty($mobil)){ ?>
                                <div class="notFound">
                                    <h1>Maaf Barang tidak ditemukan :(</h1>
                                </div>
            <?php }else { ?>
                <?php foreach($mobil as $m) : ?>
                    <div class="col m3 l3 s12">
                        <div class="isi">
                            <h5 class="center"><?= $m['tipe']; ?></h5>
                            <p class="center">Mulai dari <?= $m['harga']; ?> USD</p>
                            <img src="../../assets/img/mobil/<?= $m['foto1']; ?>" alt="" class="center" style="width: 80%; height:auto;">
                            <div class="detil">
                                <a href="produk.php?idmobil=<?= $m['idmobil']; ?>"><button class="produk">Lihat Detail</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col m1 s12"></div>
                <?php endforeach; ?>
            <?php } ?>
            </div>
            <div class="row">
                <div class="col m12 s12"></div>
            </div>
        </div>
          <!--JavaScript--> 
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script src="../../js/rizky.js"></script>
    <script src="../../js/ajaxmobildepan.js"></script>
    
</body>
</html>