<?php 
session_start();
if(!isset($_SESSION["login"])){
    header('Location: ../frontend/login.php');
}

require 'function.php';
$conn = koneksi();

if(isset($_GET['cari'])){
    $keyword = $_GET['s'];
    $merkmobil = query("SELECT * FROM merkmobil WHERE
                    merk LIKE '%$keyword%' OR
                    namapendiri LIKE '%$keyword%' OR
                    tahunberdiri LIKE '%$keyword%' OR
                    negara LIKE '%$keyword%'
                    ");
}else {
    $merkmobil = query("SELECT * FROM merkmobil");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mobil</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- icon -->
      <link rel="icon" href="../../assets/img/icon.png">
      <!--css-->
      <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="../../css/admin.css">
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
                        <button class="btnhome">
                        <a href="../../index.php" class="black-text">Home</a>
                    </button>
                    </li>
                    <li>
                        <button class="btnbrg">
                        <a href="../frontend/merk.php" class="black-text">Product</a>
                        </button>
                    </li>
                </ul>
          </div>
          </div>
        </nav>
    </div>
    <!-- navbar -->
    <!-- sidebar -->
        <ul class="sidenav" id="mobile-nav">
            <li><a href="../../index.php">Home</a></li>
            <li><a href="../frontend/merk.php">Product</a></li>
        </ul>
          <!-- end of sidebar -->

    <div class="utama">
        <div class="baris">
            <div class="row">
                <div class="col m3 s4 profile">
                    <div class="profil center">
                        <img src="../../assets/img/profile.png" class="center" alt="">
                        <?php if($_SESSION['priv'] == 1){ ?>
                            <p style="font-size : 20px;">Hello, Admin</p>
                        <?php }else{ ?>
                            <p style="font-size : 20px;">Hello, User</p>
                        <?php } ?>
                    </div>
                    <div class="link center">
                        <ul>
                            <li class="merk"><a href="admin.php">Merek Mobil</a></li>
                            <li><a href="adminmobil.php">Daftar Mobil</a></li>
                            <li><a href="adminuser.php">Users</a></li>
                        </ul>
                    </div>
                    <div class="admin center"><?php if($_SESSION['priv'] == 1){ ?>
                            <p style="font-size : 20px;">Admin</p>
                        <?php }else{ ?>
                            <p style="font-size : 20px;">User</p>
                        <?php } ?>
                        <ul>

                            <?php if($_SESSION['priv'] == 1){ ?>
                                <li><a href="tambahmerk.php">Tambah Data</a></li>
                                <li><a href="../frontend/regisadmin.php" target="_blank">Tambahkan Admin</a></li>
                            <?php } ?>
                            <li><a href="cetakmerk.php" target="_blank">Export to PDF</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>

                </div>

                <div class="col m9 s8">
                    <div class="search">
                        <form action="" method="get">
                            <input id="keyword" type="search" name="s" placeholder="  Type To Search">
                            <button id="tombolcari" class="cari" name="cari"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <h3 class="left-align">Daftar Merk Ramadan Auto</h3>
                    <!-- sorting-->
                    <div class="pilih">
                                <!-- Dropdown Trigger -->
                            <a class='dropdown-trigger' href='#' data-target='dropdown1'>Urutkan</a>
                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content drop'>
                                <button id="asc" value="merk ASC">merk A-Z</button>
                                <button id="desc" value="merk DESC">merk Z-A</button>
                                <button id="asc1" value="tahunberdiri ASC">Tahun ASC</button>
                                <button id="desc1" value="tahunberdiri DESC">Tahun DESC</button>
                            </ul>
                        </div>
                    <!-- end of sorting -->
                        <div class="scroll" id="container">
                            <?php if(empty($merkmobil)){ ?>
                                <div class="notFound">
                                    <h1>Maaf Barang tidak ditemukan :(</h1>
                                </div>
                            <?php }else { ?>
                                <?php foreach($merkmobil as $merk) : ?>
                                        <div class="card horizontal kartu">
                                            <div class="card-image">
                                                <img src="../../assets/img/merk/<?= $merk['foto'] ?>" class="logo">
                                            </div>
                                            <div class="card-stacked">
                                                <div class="card-content">
                                                <h5>Nama Brand : <?= $merk['merk']; ?></h5>
                                                <h5>Didirikan Oleh : <?= $merk['namapendiri']; ?></h5>
                                                <h5>Pada : <?= $merk['tahunberdiri']; ?></h5>
                                                <h5>Di Negara : <?= $merk['negara']; ?></h5>
                                                    </div>
                                                    <div class="card-action">
                                                    <?php if($_SESSION['priv'] == 1){ ?>
                                                        <a href="ubahmerk.php?id=<?=$merk['id']?>">Ubah</a>
                                                    <?php } ?>
                                                    <?php if($_SESSION['priv'] == 1){ ?>
                                                        <a href="hapusmerk.php?id=<?=$merk['id']?>" onclick="return confirm('Anda yakin ingin hapus data ini?');">Hapus</a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                            <?php } ?>
                        </div><!--tutup div .scroll-->
                </div><!--tutup div col-->
            </div><!--tutup div row-->
        </div><!--tutup div .baris-->
    </div><!--tutup utama-->
<!--JavaScript-->
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script src="../../js/rizky.js"></script>
    <script src="../../js/ajax.js" ></script>
</body>
</html>