<?php require 'function.php';

$conn = koneksi();

$merk = query("SELECT * FROM merkmobil");

$keyword = $_GET['keyword'];
$merkmobil = query("SELECT * FROM merkmobil WHERE
                    merk LIKE '%$keyword%' OR
                    namapendiri LIKE '%$keyword%' OR
                    tahunberdiri LIKE '%$keyword%' OR
                    negara LIKE '%$keyword%'
                    ");

?>

                            <?php if(empty($merkmobil)){ ?>
                                <div class="notFound">
                                    <h1>Maaf Barang tidak ditemukan :(</h1>
                                </div>
                            <?php }else { ?>
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
                                                    <a href="ubahmerk.php?id=<?=$merk['id']?>">Ubah</a>
                                                    <a href="hapusmerk.php?id=<?=$merk['id']?>" onclick="return confirm('Anda yakin ingin hapus data ini?');">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                            <?php } ?>