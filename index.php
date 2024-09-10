<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO SKINCARE</title>
</head>
<body>
    <h2>DATA KELAS</h2>
    <br/>
    <a href="tambah.php">+ TAMBAH</a> <br/><br/>
    <div class="d-flex flex-row container justify-content-between gap-3">
    <?php
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "select * from product");
            while ($d = mysqli_fetch_array($data)) {
    ?>
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $d['nama']?></h5>
          <p class="card-text"><?php echo $d['id_kategori']?></p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <?php } ?>
    </div>
</body>
</html>