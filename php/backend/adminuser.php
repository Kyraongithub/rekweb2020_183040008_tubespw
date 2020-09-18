<?php 
session_start();
if(!isset($_SESSION["login"])){
    header('Location: ../frontend/login.php');
}

require 'function.php';
$conn = koneksi(); 


if(isset($_GET['cari'])){
    $keyword = $_GET['s'];
    $users = query("SELECT * FROM user WHERE
                    nama LIKE '%$keyword%' OR
                    email LIKE '%$keyword%' OR
                    username LIKE '%$keyword%'
                    ");
}else {
    $users = query("SELECT * FROM user");
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
                            <li><a href="adminmobil.php">Daftar Mobil</a></li>
                            <li class="user"><a href="adminuser.php">Users</a></li>
                        </ul>
                    </div>


                    <div class="admin center"><?php if($_SESSION['priv'] == 1){ ?>
                            <p style="font-size : 20px;">Admin</p>
                        <?php }else{ ?>
                            <p style="font-size : 20px;">User</p>
                        <?php } ?>
                        <ul><?php if($_SESSION['priv'] == 1){ ?>
                                <li><a href="../frontend/regisadmin.php" target="_blank">Tambahkan Admin</a></li>
                            <?php } ?>
                            <li><a href="cetakuser.php" target="_blank">Export to PDF</a></li>
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

                    <h3 class="center turun">Pengguna</h3>
                    <!-- sorting-->
                    <div class="pilih">
                                <!-- Dropdown Trigger -->
                            <a class='dropdown-trigger' href='#' data-target='dropdown1'>Urutkan</a>
                            <!-- Dropdown Structure -->
                            <ul id='dropdown1' class='dropdown-content drop'>
                                <button id="asc" value="nama ASC">Nama A-Z</button>
                                <button id="desc" value="nama DESC">Nama Z-A</button>
                                
                                <button id="asc2" value="email ASC">Email A-Z</button>
                                <button id="desc2" value="email DESC">Email Z-A</button>
                            </ul>
                        </div>
                    <!-- end of sorting -->
                    <div class="scroll2" id="container">
                            <?php if(empty($users)){ ?>
                                <div class="notFound">
                                    <h1>Maaf Pengguna tidak ditemukan :(</h1>
                                </div>
                            <?php }else { ?>
                        <table border = 3px cellpadding='5' cellspacing='0'>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                            
                                <?php $angka=1; foreach($users as $user): ?>
                                    <tr>
                                        <td><?= $angka; ?></td>
                                        <td><?= $user['nama']; ?></td>
                                        <td><?= $user['username']; ?></td>
                                        <td><?= $user['email']; ?></td>
                                    </tr>
                                <?php $angka++; endforeach; ?>
                            <?php } ?>
                        </table>
                    </div>
                </div><!--tutup div col-->
            </div><!--tutup div row-->
        </div><!--tutup div .baris-->

    </div>






    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script src="../../js/rizky.js"></script>
    <script src="../../js/ajaxuser.js"></script>
    
</body>
</html>