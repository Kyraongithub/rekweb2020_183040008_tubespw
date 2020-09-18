<?php 


function koneksi(){
    // $conn = mysqli_connect('localhost', 'u391578622_kyx', 'xOeB6p1zBTFH', 'u391578622_pw');
    $conn = mysqli_connect('localhost','root','','u391578622_pw');
    return $conn;
}



function query($sql){

    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;


    $mobil = $rows;
}   




function tambahmerk($data){
    $conn = koneksi();

    //upload dulu 
    $foto = uploadmerk();
    if(!$foto){
        return false;
    }

    $merk = htmlspecialchars($data['merk']);
    $namapendiri = htmlspecialchars($data['namapendiri']);
    $tahunberdiri = htmlspecialchars($data['tahunberdiri']);
    $negara = htmlspecialchars($data['negara']);

    $querytambahmerk = "INSERT INTO merkmobil
                        VALUES('','$foto','$merk','$namapendiri','$tahunberdiri','$negara')";


mysqli_query($conn, $querytambahmerk);

return mysqli_affected_rows($conn);


}

function tambahmobil($data){
    $conn = koneksi();

    //upload dulu 
    $foto = uploadmobil();
    if(!$foto){
        return false;
    }

    $foto1 = uploadmobil1();
    if(!$foto1){
        return false;
    }

    $foto2 = uploadmobil2();
    if(!$foto2){
        return false;
    }

    $id = htmlspecialchars($data['id']);
    $tipe = htmlspecialchars($data['tipe']);
    $tipemesin = htmlspecialchars($data['tipemesin']);
    $dayamaksimum = htmlspecialchars($data['dayamaksimum']);
    $torsimaksimum = htmlspecialchars($data['torsimaksimum']);
    $transmisi = htmlspecialchars($data['transmisi']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);



    $querytambahmobil = "INSERT INTO mobil
                        VALUES('','$id','$tipe','$tipemesin','$dayamaksimum','$torsimaksimum','$transmisi','$warna','$harga', '$foto', '$foto1', '$foto2')";


mysqli_query($conn, $querytambahmobil);

return mysqli_affected_rows($conn);


}

function uploadmerk(){
    $namaFile = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    if($error === 4){
        echo "
        <script>
            alert('Masukkan foto!')
        </script>";
        return false;
    }
    $ekstensi = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    $tmpName = $_FILES['foto']['tmp_name'];
    if(!in_array($ekstensiGambar, $ekstensi)){
        echo "
        <script>
            alert('Masukkan file gambar!')
        </script>";
        return false;
    }

    if($ukuran > 2000000){
        echo"
        <script>
            alert('ukuran gambar terlalu besar!')
        </script>";
        return false;
    }


    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName,'../../assets/img/merk/'.$namaFileBaru);
    return $namaFileBaru;
}

function uploadmobil(){
    $namaFile = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    if($error === 4){
        echo "
        <script>
            alert('Masukkan foto!')
        </script>";
        return false;
    }
    $ekstensi = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    $tmpName = $_FILES['foto']['tmp_name'];
    if(!in_array($ekstensiGambar, $ekstensi)){
        echo "
        <script>
            alert('Masukkan file gambar!')
        </script>";
        return false;
    }

    if($ukuran > 2000000){
        echo"
        <script>
            alert('ukuran gambar terlalu besar!')
        </script>";
        return false;
    }


    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName,'../../assets/img/mobil/'.$namaFileBaru);
    return $namaFileBaru;
}

function uploadmobil1(){
    $namaFile = $_FILES['foto1']['name'];
    $ukuran = $_FILES['foto1']['size'];
    $error = $_FILES['foto1']['error'];
    if($error === 4){
        echo "
        <script>
            alert('Masukkan foto!')
        </script>";
        return false;
    }
    $ekstensi = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    $tmpName = $_FILES['foto1']['tmp_name'];
    if(!in_array($ekstensiGambar, $ekstensi)){
        echo "
        <script>
            alert('Masukkan file gambar!')
        </script>";
        return false;
    }

    if($ukuran > 2000000){
        echo"
        <script>
            alert('ukuran gambar terlalu besar!')
        </script>";
        return false;
    }


    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName,'../../assets/img/mobil/'.$namaFileBaru);
    return $namaFileBaru;
}

function uploadmobil2(){
    $namaFile = $_FILES['foto2']['name'];
    $ukuran = $_FILES['foto2']['size'];
    $error = $_FILES['foto2']['error'];
    if($error === 4){
        echo "
        <script>
            alert('Masukkan foto!')
        </script>";
        return false;
    }
    $ekstensi = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    $tmpName = $_FILES['foto2']['tmp_name'];
    if(!in_array($ekstensiGambar, $ekstensi)){
        echo "
        <script>
            alert('Masukkan file gambar!')
        </script>";
        return false;
    }

    if($ukuran > 2000000){
        echo"
        <script>
            alert('ukuran gambar terlalu besar!')
        </script>";
        return false;
    }


    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName,'../../assets/img/mobil/'.$namaFileBaru);
    return $namaFileBaru;
}


function hapusmerk($id){
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM merkmobil WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function hapusmobil($id){
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM mobil WHERE id = $id");

    return mysqli_affected_rows($conn);
}



function ubahmerk($data){
    $conn = koneksi();

    $id = $data['id'];
    $merk = htmlspecialchars($data['merk']);
    $namapendiri = htmlspecialchars($data['namapendiri']);
    $tahunberdiri = htmlspecialchars($data['tahunberdiri']);
    $negara = htmlspecialchars($data['negara']);
    $fotoLama = $data['fotoLama'];


    if($_FILES['foto']['error'] === 4){
        $foto = $fotoLama;
    } else {
        $foto = uploadmerk();
    } 
    


    $queryubahmerk = "UPDATE merkmobil
                    SET 
                    foto = '$foto',
                    merk = '$merk',
                    namapendiri = '$namapendiri',
                    tahunberdiri = '$tahunberdiri',
                    negara = '$negara'
                    WHERE id = $id;
                    ";


    mysqli_query($conn, $queryubahmerk);

    return mysqli_affected_rows($conn);
}



function ubahmobil($data){
    $conn = koneksi();
    $idmobil = htmlspecialchars($data['idmobil']);

    $id = htmlspecialchars($data['id']);
    $tipe = htmlspecialchars($data['tipe']);
    $tipemesin = htmlspecialchars($data['tipemesin']);
    $dayamaksimum = htmlspecialchars($data['dayamaksimum']);
    $torsimaksimum = htmlspecialchars($data['torsimaksimum']);
    $transmisi = htmlspecialchars($data['transmisi']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);
    $fotoLama = $data['fotoLama'];
    $fotoLama1 = $data['fotoLama1'];
    $fotoLama2 = $data['fotoLama2'];


    if($_FILES['foto']['error'] === 4){
        $foto = $fotoLama;
    } else {
        $foto = uploadmobil();
    } 

    if($_FILES['foto1']['error'] === 4){
        $foto1 = $fotoLama1;
    } else {
        $foto1 = uploadmobil1();
    }

    if($_FILES['foto2']['error'] === 4){
        $foto2 = $fotoLama2;
    } else {
        $foto2 = uploadmobil2();
    }
    
    $queryubah = "UPDATE mobil
                    SET 
                    id = '$id',
                    tipe = '$tipe',
                    tipemesin = '$tipemesin',
                    dayamaksimum = '$dayamaksimum',
                    torsimaksimum = '$torsimaksimum',
                    transmisi = '$transmisi',
                    warna = '$warna',
                    harga = '$harga',
                    foto1 = '$foto',
                    foto2 = '$foto1',
                    foto3 = '$foto2'
                    WHERE idmobil = $idmobil;
                    ";


    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);
}





function registrasi($data){
    $conn = koneksi();
    $nama = $data['nama'];
    $email = $data['email'];
    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);
    
    $cekid = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username '");

    if( mysqli_fetch_assoc($cekid) ){
        echo "<script>
                alert('Username Sudah Terdaftar!');
             </script>";
             return false;
    }

    if($password != $password2){
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');
             </script>";
             return false;
    }

    // enkripsi pass
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES
                        ('','$nama', '$email', '$username', '$password','')");

    return mysqli_affected_rows($conn);
}


if(isset($_POST['call'])){
    switch($_POST['call']){
        case 'cekusername' : cekusername(); break;

    }   
}


function registrasiadmin($data){
    $conn = koneksi();
    $nama = $data['nama'];
    $email = $data['email'];
    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);
    
    $cekid = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username '");

    if( mysqli_fetch_assoc($cekid) ){
        echo "<script>
                alert('Username Sudah Terdaftar!');
             </script>";
             return false;
    }

    if($password != $password2){
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');
             </script>";
             return false;
    }

    // enkripsi pass
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES
                        ('','$nama', '$email', '$username', '$password','1')");

    return mysqli_affected_rows($conn);
}

function cekusername(){
    $conn = koneksi();
    $user = $_POST['username'];
    $username = mysqli_query($conn,"SELECT * FROM user WHERE username = '$user'");
    if(mysqli_num_rows($username) > 0){
        echo true;
    }
}


?>