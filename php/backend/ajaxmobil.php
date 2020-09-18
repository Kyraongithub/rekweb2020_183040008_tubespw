<?php require 'function.php';

$conn = koneksi();
$keyword =$_GET['keyword'];
$mobil =query("SELECT * FROM mobil NATURAL JOIN merkmobil WHERE
mobil.id = merkmobil.id AND
merk LIKE '%$keyword%' OR
tipe LIKE '%$keyword%' OR
tipemesin LIKE '%$keyword%' OR
dayamaksimum LIKE '%$keyword%' OR
torsimaksimum LIKE '%$keyword%' OR
transmisi LIKE '%$keyword%' OR
warna LIKE '%$keyword%' OR
harga LIKE '%$keyword%'
"); 



if(empty($mobil)){

    echo "<h1>Maaf Barang tidak ditemukan :(</h1>";

}

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
                <a href="ubahmobil.php?idmobil=<?=$m['idmobil']?>">Ubah</a>
                <a href="hapusmobil.php?idmobil=<?=$m['idmobil']?>" onclick="return confirm('Anda yakin ingin hapus data ini?');">Hapus</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>