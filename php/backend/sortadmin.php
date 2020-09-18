<?php session_start();
require 'function.php';
$conn= koneksi();
$metode = $_GET['metode'];

if(empty($metode)){
    header('Location: admin.php');
}

$merkmobil =query("SELECT * FROM merkmobil
ORDER BY $metode
");

?>








<?php foreach($merkmobil as $merk) : ?>
    <div class="card horizontal kartu">
        <div class="card-image">
            <img src="../../assets/img/merk/<?= $merk['foto'] ?>" class="logo">
        </div>
        <div class="card-stacked">
            <div class="card-content">
            <h5>Nama Brand : <?= $merk['merk']; ?></h5>
            <h5>Didirikan Oleh : <?= $merk['namapendiri']; ?></h5>
            <h5>Pada : <?= $merk['tahunberdiri']; ?></h5>
            <h5>Di Negara : <?= $merk['negara']; ?></h5>
                </div>
                <div class="card-action">
                <?php if($_SESSION['priv'] == 1){ ?>
                    <a href="ubahmerk.php?id=<?=$merk['id']?>">Ubah</a>
                <?php } ?>
                <?php if($_SESSION['priv'] == 1){ ?>
                    <a href="hapusmerk.php?id=<?=$merk['id']?>" onclick="return confirm('Anda yakin ingin hapus data ini?');">Hapus</a>
                <?php } ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>