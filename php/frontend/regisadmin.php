<?php 
require '../backend/function.php';
$conn = koneksi();

if(isset($_POST['register'])){
    if(registrasiadmin($_POST)>0){
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href='login.php';
             </script>";
    }else {
        echo mysqli_error($conn);
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
    <title>Registrasi</title>
    <style>
    body{
        margin:0;
        padding:0;
        font-family:sans-serif;
        background:#34495e;

    }

    .box{
        width:350px;
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

    .box .nama, .box .email, .box .uname, .box .pw, .box .pw2{
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

    .box .nama:focus, .box .email:focus, .box .uname:focus, .box .pw:focus, .box .pw2:focus{
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

    .salah{
        border : 2px solid red !important;
        background : none;
        
    }

    
    
    </style>
</head>
<body>

    <form action="" method="post" class="box">
        <h1>Registrasi Admin</h1>
        <input class="nama" type="text" name = "nama" id="nama" placeholder="Nama">
        <input class="email" type="text" name = "email" id="email" placeholder="Email">
        <input class="uname" type="text" name = "username" id="username" placeholder="Username">
        <input class="pw" type="password" name = "password" id="password" placeholder="Password">
        <input class="pw2" type="password" name = "password2" id="password2" placeholder="Ketik ulang Password">
        <input class="submit" type="submit" value="Daftar" name="register">
    </form>

    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/rizky.js"></script>
</body>
</html>