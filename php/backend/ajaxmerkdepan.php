<?php require 'function.php';
$conn = koneksi();
$keyword =$_GET['keyword'];
$merkmobil = query("SELECT * FROM merkmobil WHERE
merk LIKE '%$keyword%'
");

if(empty($merkmobil)){

    echo "<h1>Maaf Merk tidak ditemukan :(</h1>";

}

?>

<div class="row">
        <?php foreach($merkmobil as $merk): ?>
            <div class="col m4 l3 s12 center box">
                <a href="mobil.php?id=<?= $merk['id']; ?>"><img src="../../assets/img/merk/<?= $merk['foto']; ?>" class="logo" alt=""></a>
            </div>
        <?php endforeach; ?>
        </div>