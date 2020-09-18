<?php 
session_start();
if(!isset($_SESSION["login"])){
    header('Location: ../frontend/login.php');
}

require 'function.php';
$conn = koneksi();
if(isset($_GET['cari'])){
    $keyword = $_GET['s'];
    $mobil = query("SELECT * FROM mobil NATURAL JOIN merkmobil WHERE
                    mobil.id = merkmobil.id AND
                    merk LIKE '%$keyword%' OR
                    tipe LIKE '%$keyword%' OR
                    tipemesin LIKE '%$keyword%' OR
                    dayamaksimum LIKE '%$keyword%' OR
                    torsimaksimum LIKE '%$keyword%' OR
                    transmisi LIKE '%$keyword%' OR
                    warna LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%'
                    ");
}else {
    $mobil = query("SELECT * FROM mobil NATURAL JOIN merkmobil WHERE mobil.id = merkmobil.id");
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
                        
                        </li>
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
                            <li><a href="admin.php">Merek Mobil</a></li>
                            <li class="mobil"><a href="adminmobil.php">Daftar Mobil</a></li>
                            <li><a href="adminuser.php">Users</a></li>
                        </ul>
                    </div>


                    <div class="admin center"><?php if($_SESSION['priv'] == 1){ ?>
                            <p style="font-size : 20px;">Admin</p>
                        <?php }else{ ?>
                            <p style="font-size : 20px;">User</p>
                        <?php } ?>
                        
                        <ul><?php if($_SESSION['priv'] == 1){ ?>
                            <li><a href="tambahmobil.php">Tambah Data</a></li>
                            <li><a href="../frontend/regisadmin.php" target="_blank">Tambahkan Admin</a></li>
                            <?php } ?>
                            <li><a href="cetakmobil.php" target="_blank">Export to PDF</a></li>
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
                    
                    <h3 class="left-align">Daftar Mobil Ramadan Auto</h3>
                    <!-- sorting-->
                    <div class="pilih">
                                <!-- Dropdown Trigger -->
                            <a class='dropdown-trigger' href='#' data-target='dropdown1'>Urutkan</a>
                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content drop mob'> 
                                <button id="asc" value="merk ASC">Merk A-Z</button>
                                <button id="desc" value="merk DESC">Merk Z-A</button>
                                
                                <button id="asc1" value="tipe ASC">Tipe A-Z</button>
                                <button id="desc1" value="tipe DESC">Tipe Z-A</button>
                                
                                <button id="asc2" value="torsimaksimum ASC">Torsi min-max</button>
                                <button id="desc2" value="torsimaksimum DESC">Torsi max-min</button>

                                <button id="asc3" value="dayamaksimum ASC">Daya min-max</button>
                                <button id="desc3" value="dayamaksimum DESC">Daya max-min</button>

                                <button id="asc4" value="harga ASC">harga min-max</button>
                                <button id="desc4" value="harga DESC">harga max-min</button>
                            </ul>
                        </div>
                    <!-- end of sorting -->


                    <div class="scroll" id="container">
                        <?php foreach($mobil as $m) :  ?>
                            <div class="card horizontal kartu">
                                <div class="card-image">
                                    <img src="../../assets/img/mobil/<?= $m['foto1'] ?>" class="">
                                </div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <h5><?= $m['merk']; ?> <?= $m['tipe']; ?></h5>
                                        <p>Tipe Mesin : <?= $m['tipemesin']; ?></p>
                                        <p>Daya Maksimum : <?= $m['dayamaksimum']; ?></p>
                                        <p>Torsi Maksimum : <?= $m['torsimaksimum']; ?></p>
                                        <p>Transmisi : <?= $m['transmisi']; ?></p>
                                        <p>Warna tersedia : <?= $m['warna']; ?></p>
                                        <p>Harga <?= $m['harga']; ?> USD</p>
                                    </div>
                                        <div class="card-action">
                                        <?php if($_SESSION['priv'] == 1){ ?>
                                        <a href="ubahmobil.php?idmobil=<?=$m['idmobil']?>">Ubah</a>
                                        <?php } ?>
                                        <?php if($_SESSION['priv'] == 1){ ?>
                                        <a href="hapusmobil.php?idmobil=<?=$m['idmobil']?>" onclick="return confirm('Anda yakin ingin hapus data ini?');">Hapus</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>



                    </div><!--tutup div .scroll-->
                </div><!--tutup div col-->
            </div><!--tutup div row-->
        </div><!--tutup div .baris-->

    </div>






    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/rizky.js"></script>
    <script src="../../js/ajaxmobil.js" ></script>
    
</body>
</html>