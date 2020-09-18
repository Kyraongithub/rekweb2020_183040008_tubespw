<?php 
require_once '../../vendor/autoload.php';
require 'function.php';
$conn = koneksi();
$users = query("SELECT * FROM user");





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
                    <h3 class="center">Daftar User Ramadan Auto</h3>
                    
                    <table border = 3px cellpadding="5" cellspacing="0">
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>';
                            $angka = 1;
                    foreach($users as $user) {
                        
                        $html.='
                        <tr>
                            <td>'. $angka .'</td>
                            <td>'. $user['nama'] .'</td>
                            <td>'. $user['username'] .'</td>
                            <td>'. $user['email'] .'</td>
                        </tr>';
                        $angka++;
                    }                          
$html.='</table>
</div>
    </div>

</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();

?>






