<?php $mahasiswa = [
      [
      "nama" => "Ateng Banteng",
      "npm" => "197006073",
      "jurusan" => "Informatika",
      "fakultas" => "teknik" 
      ],
      [
      "nama" => "SBSN",
      "npm" => "197006031",
      "jurusan" => "Informatika",
      "fakultas" => "teknik" 
      ]
] ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--- 
    
    1.$_GET Menerima data melalui , form dan juga query parameter
    2.Data akan ditampilkan pada URL (query parameter)
    
    --->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ($mahasiswa as $mhs ) : ?>
    <li><a href="detail_mahasiswa.php?nama=<?= $mhs["nama"] ?>"><?php echo $mhs["nama"]?></a></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>