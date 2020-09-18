<?php session_start();
require 'function.php';
$conn= koneksi();
$metode = $_GET['metode'];

if(empty($metode)){
    header('Location: adminuser.php');
}

$users =query("SELECT * FROM user
ORDER BY $metode
");

?>


<table border = 3px cellpadding='5' cellspacing='0'>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                            
                                <?php $angka=1; foreach($users as $user): ?>
                                    <tr>
                                        <td><?= $angka; ?></td>
                                        <td><?= $user['nama']; ?></td>
                                        <td><?= $user['username']; ?></td>
                                        <td><?= $user['email']; ?></td>
                                    </tr>
                                <?php $angka++; endforeach; ?>
                            
                        </table>