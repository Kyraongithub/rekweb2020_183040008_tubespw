<?php 
session_start();
require 'function.php';
if(!isset($_SESSION["login"])){
    header('Location: ../frontend/login.php');
}
$conn = koneksi();



if(isset($_POST['tambah'])){
    if(tambahmerk($_POST) > 0){
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href='admin.php';
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
    <title>Tambah Data Merk</title>
    <style>
    body{
        margin:0;
        padding:0;
        font-family:sans-serif;
        background:#34495e;

    }

    .box{
        width:500px;
        padding: 40px;
        position : absolute;
        top : 50%;
        left : 50%;
        transform : translate(-50%, -50%);
        background : #191919;
        text-align : center;
        border-radius : 30px;
    }

    .box h1{
        color : white;
        text-transform : uppercase;
        font-weight : 500;
    }

    .box .merk, .box .namapendiri, .box .tahunberdiri, .box .negara , .box .upload{
        border : 0;
        background : none;
        display : block;
        margin : 20px auto;
        text-align : center;
        border : 2px solid #3498db;
        padding : 14px 10px;
        width : 200px;
        outline : none;
        color : white;
        border-radius : 24px;
        transition : 0.25s; 
    }

    .box .merk:focus, .box .namapendiri:focus, .box .tahunberdiri:focus, .box .negara:focus{
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

    a{
        text-decoration: none;
        color : black;
    }


    
    
    </style>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data" class="box" >
        <h1>Tambah Data</h1>
        
        <input class="merk" type="text" name = "merk" id="merk" placeholder="merk">
        <input class="namapendiri" type="text" name = "namapendiri" id="namapendiri" placeholder="Nama Pendiri">
        <input class="tahunberdiri" type="text" name = "tahunberdiri" id="tahunberdiri" placeholder="Tahun Berdiri">
        <input class="negara" type="text" name = "negara" id="negara" placeholder="Negara asal">
        <h3 style="color:white;">Foto : </h3>
        <input type="file" name="foto" id="foto" class="upload">
        <button type="submit" name="tambah" class="submit">Tambahkan</button>
        <a href="admin.php">Kembali</a>
    </form>
</body>
</html>