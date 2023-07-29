<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include("../koneksi.php"); 
    if(isset($_GET['kd_sekolah'])){
        $kd_sekolah = $_GET['kd_sekolah'];
        $sql = "SELECT * FROM sekolah WHERE kd_sekolah=$kd_sekolah";
        $result = $kon->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
    <a href="index.php"><<==</a>
    <h1>INSERT</h1>
    <table class="table_insert">
    <form action="#" method="post">
        <tr>
            <td>Kode Sekolah</td>
            <td>:</td>
            <td><input type="text" name="kd" value="<?php echo $row['kd_sekolah'] ?>" disabled></td>
        </tr>
        <tr>
            <td>Nama Sekolah</td>
            <td>:</td>
            <td><input type="text" name="nama_sekolah" value="<?php echo $row['nama_sekolah'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="<?php echo $row['alamat'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="reset" value="batal"> <input type="submit" value="Ubah" name="simpan"></td>
        </tr>
    </form>
    <?php 
        }else{
            echo "Data tidak ditemukan";
        }
    }else{
        echo "Kode Tidak ditemukan";
    }
        $kon->close();
    ?>
    </table>
    <?php
    include("../koneksi.php");
        if(isset($_POST['simpan'])){
            $nama = $_POST['nama_sekolah'];
            $al = $_POST['alamat'];
          $sql = "UPDATE sekolah SET kd_sekolah='$kd_sekolah',nama_sekolah='$nama',alamat='$al' WHERE kd_sekolah='$kd_sekolah'";
            if($kon->query($sql)==TRUE){
                header("Location: index.php");
               exit();
               echo "sukses diubah";
            }else{
                echo "insert error ". $sql . "<br>" . $kon->error;
            }
        }
        $kon->close();
    ?>
</body>
</html>