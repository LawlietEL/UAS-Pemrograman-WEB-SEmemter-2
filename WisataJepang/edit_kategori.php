<?php

    include 'koneksi.php';

    $kategori = mysqli_query($conn, "SELECT * FROM kategori WHERE kategori_id = '".$_GET['id']."' ");
    if(mysqli_num_rows($kategori)== 0){
        echo '<script>window.location="kategori.php"</script>';
    }
    $K = mysqli_fetch_object($kategori);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kategori | Karman</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <!--header-->
    <header>
        <div class="container">
        <h1><a href="dashboard.php">Wisata Jepang</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="kategori.php">Data Kategori</a></li>
                <li><a href="wisata.php">Data Wisata</a></li>
            </ul>
        </div>
    </header>
    <!-- isi conten-->
    <div class="section">
        <div class="container">
            <h3>Edit Data Kategori</h3>
            <div class="box">
                <form action="" method="post">
                    <input type="text" name="nama" placeholder="Nama Kategori" class="input-control" value="<?php echo $K->nm_kategori?>" required>
                    <input type="submit" name="submit" value="Tambahkan" class="btn">
                </form>
                <?php
                if(isset($_POST['submit'])){
                    $nama = ucwords($_POST['nama']);
                    $update = mysqli_query($conn,"UPDATE kategori SET nm_kategori= '".$nama."' WHERE kategori_id = '".$K->kategori_id."' ");
                    if($update){
                        echo '<script>alert("Data berhasil diedit")</script>';
                        echo '<script>window.location="kategori.php"</script>';
                    }else{
                        echo 'gagal'.mysqli_error($conn);
                    }
                }
                ?>
            </div> 
        </div>
    </div>   
    <!--footer-->
    <div class="container">
    <small>Copyright &copy;2023 - Website-WisataJepang</small>
    </div>
</body>
</html>