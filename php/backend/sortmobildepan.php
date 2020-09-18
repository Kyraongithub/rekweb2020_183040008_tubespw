<?php session_start();
require 'function.php';
$conn= koneksi();
$metode = $_GET['metode'];
$id = $_GET['merk'];

if(empty($metode)){
    header('Location: adminmobil.php');
}

$mobil =query("SELECT * FROM mobil NATURAL JOIN merkmobil WHERE
mobil.id = merkmobil.id AND
mobil.id = $id
ORDER BY $metode
");

?>

<?php foreach($mobil as $m) : ?>
    <div class="col m3 l3 s12">
        <div class="isi">
            <h5 class="center"><?= $m['tipe']; ?></h5>
            <p class="center">Mulai dari <?= $m['harga']; ?> USD</p>
            <img src="../../assets/img/mobil/<?= $m['foto1']; ?>" alt="" class="center" style="width: 80%; height:auto;">
            <div class="detil">
                <a href="produk.php?idmobil=<?= $m['idmobil']; ?>"><button class="produk">Lihat Detail</button></a>
            </div>
        </div>
    </div>
    <div class="col m1 s12"></div>
<?php endforeach; ?>