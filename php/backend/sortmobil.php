<?php session_start();
require 'function.php';
$conn= koneksi();
$metode = $_GET['metode'];

if(empty($metode)){
    header('Location: adminmobil.php');
}

$mobil =query("SELECT * FROM mobil NATURAL JOIN merkmobil WHERE
mobil.id = merkmobil.id
ORDER BY $metode
");

?>


<?php foreach($mobil as $m) :  ?>
    <div class="card horizontal kartu">
        <div class="card-image">
            <img src="../../assets/img/mobil/<?= $m['foto1'] ?>" class="">
        </div>
        <div class="card-stacked">
            <div class="card-content">
                <h5><?= $m['merk']; ?> <?= $m['tipe']; ?></h5>
                <p>Tipe Mesin : <?= $m['tipemesin']; ?></p>
                <p>Daya Maksimum : <?= $m['dayamaksimum']; ?></p>
                <p>Torsi Maksimum : <?= $m['torsimaksimum']; ?></p>
                <p>Transmisi : <?= $m['transmisi']; ?></p>
                <p>Warna tersedia : <?= $m['warna']; ?></p>
                <p>Harga <?= $m['harga']; ?> USD</p>
            </div>
            <div class="card-action">
                <?php if($_SESSION['priv'] == 1){ ?>
                    <a href="ubahmobil.php?idmobil=<?=$m['idmobil']?>">Ubah</a>
                <?php } ?>
                <?php if($_SESSION['priv'] == 1){ ?>
                    <a href="hapusmobil.php?idmobil=<?=$m['idmobil']?>" onclick="return confirm('Anda yakin ingin hapus data ini?');">Hapus</a>
                <?php } ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>