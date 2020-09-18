<?php 

require 'function.php';
$id=$_GET['idmobil'];

if(hapusmobil($id)>0){
    echo "<script>
            alert('Data berhasil dihapus!');
            document.location.href = 'adminmobil.php';
        </script>";
} else{
    echo "<script>
            alert('Data gagal dihapus!';
            document.location.href = 'adminmobil.php');
        </script>";

}


?>