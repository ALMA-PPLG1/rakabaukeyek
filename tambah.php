<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<title>Document</title>
</head>
<body>
<form action="tambah2.php" method="post">
<p>Nama : <input type="text" name="nama" id=""></p>
<label for="">kategori</label>
<select name="id_kategori" id="" require>
    <?php 
    include 'koneksi.php';
    $kategori = mysqli_query($koneksi, "select * from kategori");
    while ($d = mysqli_fetch_array($kategori)) { ?>
        <option value="<?php echo $d ['id_kategori'] ?>"><?php echo $d ['nama']?></option>
    <?php }?>

</select>
<button type="submit">simpan</button>
</form>
</body>
</html>