<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include("koneksi.php"); 
    if(isset($_GET['ni'])){
        $nis = $_GET['ni'];
        $sql = "SELECT * FROM siswa WHERE ni=$nis";
        $result = $kon->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
    <a href="index.php"><<==</a>
    <h1>INSERT</h1>
    <table class="table_insert">
    <form action="#" method="post">
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis" value="<?php echo $row['ni'] ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $row['nama'] ?>"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" value="<?php echo $row['kelas'] ?>"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="jurusan" value="<?php echo $row['jurusan'] ?>"></td>
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
        echo "NIS Tidak ditemukan";
    }
        $kon->close();
    ?>
    </table>
    <?php
    include("koneksi.php");
        if(isset($_POST['simpan'])){
            $n = $_POST['nis'];
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $jurusan = $_POST['jurusan'];

            $sql = "UPDATE siswa SET nama ='$nama',kelas='$kelas',jurusan='$jurusan' WHERE ni='$n'";
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