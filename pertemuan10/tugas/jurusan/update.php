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
    if(isset($_GET['kd_jurusan'])){
        $kd_jurusan = $_GET['kd_jurusan'];
        $sql = "SELECT * FROM jurusan WHERE kd_jurusan=$kd_jurusan";
        $result = $kon->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
    <a href="index.php"><<==</a>
    <h1>UPDATE</h1>
    <table class="table_insert">
    <form action="#" method="post">
        <tr>
            <td>Kode Jurusan</td>
            <td>:</td>
            <td><input type="text" name="kd" value="<?php echo $row['kd_jurusan'] ?>" disabled></td>
        </tr>
        <tr>
            <td>Nama Jurusan</td>
            <td>:</td>
            <td><input type="text" name="nama_jurusan" value="<?php echo $row['nama_jurusan'] ?>"></td>
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
            $nama = $_POST['nama_jurusan'];
          $sql = "UPDATE jurusan SET kd_jurusan='$kd_jurusan',nama_jurusan='$nama' WHERE kd_jurusan='$kd_jurusan'";
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