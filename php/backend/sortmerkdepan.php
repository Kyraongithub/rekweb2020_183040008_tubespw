<?php session_start();
require 'function.php';
$conn= koneksi();
$metode = $_GET['metode'];

if(empty($metode)){
    header('Location: ../frontend/merk.php');
}

$merkmobil =query("SELECT * FROM merkmobil
ORDER BY $metode
");

?>


<div class="row">
    <?php foreach($merkmobil as $merk): ?>
        <div class="col m4 l3 s12 center box">
            <a href="mobil.php?id=<?= $merk['id']; ?>"><img src="../../assets/img/merk/<?= $merk['foto']; ?>" class="logo" alt=""></a>
        </div>
    <?php endforeach; ?>
</div>


