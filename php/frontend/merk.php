<?php require '../backend/function.php';
$conn = koneksi();


if(isset($_GET['cari'])){
    $keyword = $_GET['s'];
    $merkmobil = query("SELECT * FROM merkmobil WHERE
                    merk LIKE '%$keyword%'
                    ");
}else {
    $merkmobil = query("SELECT * FROM merkmobil");
} ?>



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
    <body>
        <!-- navbar -->
      <div class="navbar-fixed">
        <nav class="white accent-2">
          <div class="container">
          <div class="nav-wrapper">
            <a href="../../index.php" class="brand-logo black-text"><img src="../../assets/img/logo.png" alt=""></a>
             <a href="#" data-target="mobile-nav" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
              <li>
                  <div class="search">
                  <form action="" method="get">
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
    <div class="tagmerk">
        <h3 class ="center red-text">Merk</h3>
        <h4 class="center">Pilih merk sebelum menuju ke mobil impianmu</h4>
    </div>
    <div class="row">
      <div class="col m12 s12">
                      <!-- sorting-->
                          <div class="pilih">
                                <!-- Dropdown Trigger -->
                            <a class='dropdown-trigger' href='#' data-target='dropdown1'>Urutkan</a>
                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content drop'>
                                <button id="asc" value="merk ASC">Merk A-Z</button>
                                <button id="desc" value="merk DESC">Merk Z-A</button>
                                <button id="asc1" value="tahunberdiri ASC">Tahun ASC</button>
                                <button id="desc1" value="tahunberdiri DESC">Tahun DESC</button>
                            </ul>
                        </div>
                    <!-- end of sorting -->
      </div>
    </div>

    <div class="merk" id="container">
        <div class="row">
        <?php if(empty($merkmobil)){ ?>
          <div class="notFound">
            <h1>Maaf Merk tidak ditemukan :(</h1>
          </div>
        <?php }else { ?>
          <?php foreach($merkmobil as $merk): ?>
              <div class="col m4 l3 s12 center box">
                  <a href="mobil.php?id=<?= $merk['id']; ?>"><img src="../../assets/img/merk/<?= $merk['foto']; ?>" class="logo" alt=""></a>
              </div>
          <?php endforeach; ?>
        <?php } ?>
        </div>
    
    </div>
    <!--JavaScript-->
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/rizky.js"></script>
    <script src="../../js/ajaxmerkdepan.js"></script>
</body>
</html>