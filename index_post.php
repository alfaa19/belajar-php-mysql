<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--- 
    
    1.$_POST Menerima data hanya melalui  form 
    2.Data tidak akan ditampilkan di URL
    3.Data bisa dikirim ke halaman lain  ataupun halaman itu sendiri
    --->
    <form action="admin_post.php" method="post">

    Masukan Nama :
    <input type="text" name="nama" >
    <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>