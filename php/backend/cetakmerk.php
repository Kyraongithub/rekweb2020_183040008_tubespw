<?php 
require_once '../../vendor/autoload.php';
require 'function.php';
$conn = koneksi();
$merkmobil = query("SELECT * FROM merkmobil");





$mpdf = new \Mpdf\Mpdf();
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mobil</title>
      <!--css-->
      <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="../../css/admin.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <div class="utama container">
        <div class="baris center">
                    <h3 class="center">Daftar Merk Ramadan Auto</h3>';

                    foreach($merkmobil as $merk) {
                        $html.='<div class="card horizontal kartu">
                                <div class="card-image">
                                    <img src="../../assets/img/merk/'.$merk['foto'].'" class="logo">
                                </div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                    <h5>Nama Brand : '.$merk['merk'].'</h5>
                                    <h5>Didirikan Oleh : '.$merk['namapendiri'].'</h5>
                                    <h5>Pada : '.$merk['tahunberdiri'].'</h5>
                                    <h5>Di Negara : '.$merk['negara'].'</h5>
                                </div>
                            </div>
                        </div>';
                    }                          
$html.='</div>
    </div>

</body>
</html>
';

$mpdf->WriteHTML($html);
$mpdf->Output();

?>






