<?php
    include "koneksi.php";
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
            <h3>Tambahkan Data Kategori</h3>
            <div class="box">
                <form action="" method="post">
                    <input type="text" name="nama" placeholder="Nama Kategori" class="input-control" required>
                    
                    <input type="submit" name="submit" value="Tambahkan" class="btn">
                </form>
                <?php
                if(isset($_POST['submit'])){
                    $nama = ucwords($_POST['nama']);
                    $insert = mysqli_query($conn,"INSERT INTO kategori VALUES (
                        null, '".$nama."') ");
                    if($insert){
                        echo '<script>alert("Data berhasil ditambahkan")</script>';
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