<?php 
session_start();
require 'function.php';
if(!isset($_SESSION["login"])){
    header('Location: ../frontend/login.php');
}
$conn = koneksi();

$merkmobil = query("SELECT * FROM merkmobil");



if(isset($_POST['tambah'])){
    if(tambahmobil($_POST) > 0){
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href='adminmobil.php';
            </script>";
    } else{
        echo "<script>
                alert('Data gagal ditambahkan!');
            </script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- icon -->
    <link rel="icon" href="../../assets/img/icon.png">
    <title>Tambahkan Data Mobil</title>
    <style>
    body{
        margin:0;
        padding:0;
        font-family:sans-serif;
        background:#34495e;

    }

    .box{
        width:1000px;
        padding: 40px;
        position : absolute;
        top : 50%;
        left : 50%;
        transform : translate(-50%, -50%);
        background : #191919;
        text-align : center;
        border-radius : 30px;
        border : 3px solid white;
    }

    .box h1{
        color : white;
        text-transform : uppercase;
        font-weight : 500;
    }

    .box .tipe, .box .tipemesin, .box .dayamaksimum, .box .torsimaksimum, .box .transmisi, .box .harga, .box .warna, .box .pilih{
        border : 0;
        background : none;
        margin : 20px;
        text-align : center;
        border : 2px solid #3498db;
        padding : 14px 10px;
        width : 200px;
        outline : none;
        color : white;
        border-radius : 24px;
        transition : 0.25s; 
    }

    .box .tipe:focus, .box .tipemesin:focus, .box .dayamaksimum:focus, .box .torsimaksimum:focus, .box .transmisi:focus, .box .harga:focus, .box .warna:focus{
        width : 280px;
        border-color : #2ecc71;
    }

    .box .submit{
        border : 0;
        background : none;
        display : block;
        margin : 20px auto;
        text-align : center;
        border : 2px solid #2ecc71;
        padding : 14px 40px;
        outline : none;
        color : white;
        border-radius : 24px;
        transition : 0.25s;
        cursor : pointer;
    }

    .box .submit:hover{
        background : #2ecc71;

    }

    .pilih ,.pilih:focus{
        color: #3498db !important;
    }

    
    
    </style>
</head>
<body>

    <form action="" method="post" class="box" enctype="multipart/form-data">
        <h1>Tambah Data</h1>
        <div class="row">
            <div class="col m6 s12">
                <select name="id" class="pilih">
                    <?php foreach($merkmobil as $merk) : ?>
                        <option value="<?= $merk['id']; ?>"><?= $merk['merk']; ?></option>
                    <?php endforeach; ?>
                </select>
                <input class="tipe" type="text" name = "tipe" id="tipe" placeholder="tipe">
                <input class="tipemesin" type="text" name = "tipemesin" id="tipemesin" placeholder="tipe mesin">
                <input class="dayamaksimum" type="text" name = "dayamaksimum" id="dayamaksimum" placeholder="daya maksimum">
                <input class="torsimaksimum" type="text" name = "torsimaksimum" id="torsimaksimum" placeholder="torsi maksimum">
                </div>
            <div class="col m6 s12 ">
                <input class="transmisi" type="text" name = "transmisi" id="transmisi" placeholder="transmisi">
                <input class="warna" type="text" name = "warna" id="warna" placeholder="warna">
                <input class="harga" type="text" name = "harga" id="harga" placeholder="harga USD">
                <h3 style="color:white;">Foto : </h3>
                <input type="file" name="foto" id="foto1" class="upload">
                <input type="file" name="foto1" id="foto2" class="upload">
                <input type="file" name="foto2" id="foto3" class="upload">
            </div>
        </div>
        <button type="submit" name="tambah" class="submit">Tambahkan</button>
        <a href="admin.php">Kembali</a>
    </form>
</body>
</html>
