<?php require 'function.php';
$conn = koneksi();
$id = $_GET['merk'];
$keyword = $_GET['keyword'];
$mobil = query("SELECT * FROM mobil NATURAL JOIN merkmobil WHERE
                mobil.id = merkmobil.id AND
                mobil.tipe LIKE '%$keyword%' AND
                mobil.id = $id
"); 



if(empty($mobil)){
    echo "<h1>Maaf Barang tidak ditemukan :(</h1>";
}

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