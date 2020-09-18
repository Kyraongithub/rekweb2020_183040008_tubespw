<?php require 'function.php';
$conn = koneksi();
$keyword=$_GET['keyword'];
$users = query("SELECT * FROM user WHERE
                nama LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                username LIKE '%$keyword%'
");

if(empty($users)){
    echo "<h1>Maaf Pengguna tidak ditemukan :(</h1>";
    die;
}


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
