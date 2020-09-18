<?php require '../backend/function.php';
$conn = koneksi();
$result = mysqli_query($conn, "SELECT * FROM user");
$rows = [];


while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}

$user = $rows;
//end conn
session_start();
    if(isset($_COOKIE['rahasia1']) && $_COOKIE['rahasia2']){
        $rahasia1 = $_COOKIE['rahasia1'];
        $rahasia2 = $_COOKIE['rahasia2'];

        //take username base on id

        $hasil = mysqli_query($conn, "SELECT username FROM user WHERE id=$rahasia1");
        $row = mysqli_fetch_assoc($hasil);

        //cookie username

        if($rahasia1 === hash('sha256', $row['username'])){
            $_SESSION['login'] = true;
            $_SESSION['priv'] = $pass['priv'];
        }
    }

if(isset($_SESSION['login'])){
    header("location: ../backend/admin.php");
}




if(isset($_POST["submit"])){

    $username = filter_var( $_POST["username"], FILTER_SANITIZE_STRING);
    $password = filter_var( $_POST["password"], FILTER_SANITIZE_STRING);

    $id = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    
    if(mysqli_num_rows($id) === 1){
        $pass = mysqli_fetch_assoc($id);
        if(password_verify($password, $pass['password'] )){
           $_SESSION["login"] = true;
           $_SESSION['priv'] = $pass['priv'];

        //    cek remember me
        if(isset($_POST['remember'])){
            //set cookie
            setcookie('rahasia1', $pass['id'], time()+60*60);
            setcookie('rahasia2', hash('sha256', $pass['username']), time()+60*60);
        }
            header("location:../backend/admin.php "); 
           exit;
        }
    }

    $error = true;
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
    <title>Login</title>
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

    .box .id, .box .pass{
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

    .box .id:focus, .box .pass:focus{
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

    .error {
        color : red;
        font-style : italic;
    }

    a{
        color : white;
        text-decoration : none;
    }

    .putih{
        color:white;
    }
    
    </style>


</head>
<body>


    <form action="" method="post" class="box">
        <h1>Login</h1>


        <?php if(isset($error)) :  ?>
            <p class="error">Username / Password SALAH!!!</p>
        <?php endif; ?>

        <img src="../../assets/img/profile.png" alt="">
        <input class="id" type="text" name="username" placeholder="Username">
        <input class="pass"type="password" name="password" placeholder="Password">
        <input type="checkbox" placeholder = "Remember Me" name ="remember">
        <label for="remember" class="putih">Remember Me</label>
        <input class="submit" type="submit" value="Login" name="submit">


        <a href="registrasi.php">Belum terdaftar? Daftarkan disini!</a>
    </form>
    
</body>
</html>