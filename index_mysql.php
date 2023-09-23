<?php 

$conn = mysqli_connect("localhost","root","","mahasiswa");

$result = mysqli_query($conn,"SELECT * FROM mahasiswa");

$mahasiswa = mysqli_fetch_all($result, MYSQLI_ASSOC);
var_dump($mahasiswa);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <table border="1"  celllpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Jurusan</th>
        <th>Fakultas</th>
        <th colspan="2">Aksi</th>
     </tr>
     <?php $i = 1?>
     <?php foreach ($mahasiswa as $mhs) : ?>
     <tr>
        <td><?= $i ?></td>
        <td><?= $mhs["nama"] ?></td>
        <td><?= $mhs["npm"] ?></td>
        <td><?= $mhs["jurusan"] ?></td>
        <td><?= $mhs["fakultas"] ?></td>
        <td>Hapus</td>
        <td>Edit</td>
     </tr>
     <?php $i++ ?>
     <?php endforeach?>
    </table>
     
</body>
</html>