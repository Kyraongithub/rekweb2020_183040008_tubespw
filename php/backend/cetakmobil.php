<?php 
require_once '../../vendor/autoload.php';
require 'function.php';
$conn = koneksi();
$mobil = query("SELECT * FROM mobil NATURAL JOIN merkmobil WHERE mobil.id = merkmobil.id");





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
                    <h3 class="center">Daftar Mobil Ramadan Auto</h3>';

                    foreach($mobil as $m) {
                        $html.='
                        <div class="card horizontal kartu">
                                <div class="card-image">
                                    <img src="../../assets/img/mobil/'. $m['foto1'] .'" class="">
                                </div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <h5>'. $m['merk'] .'</h5>
                                        <p>'. $m['tipe'] .'</p>
                                        <p>'. $m['tipemesin'] .'</p>
                                        <p>'. $m['dayamaksimum'] .'</p>
                                        <p>'. $m['torsimaksimum'] .'</p>
                                        <p>'. $m['transmisi'] .'</p>
                                        <p>'. $m['warna'] .'</p>
                                        <p>'. $m['harga'] .'</p>
                                        </div>
                                    </div>
                                </div>
                        
                        
                        
                        ';
                    }                          
$html.='</div>
    </div>

</body>
</html>
';

$mpdf->WriteHTML($html);
$mpdf->Output();

?>






