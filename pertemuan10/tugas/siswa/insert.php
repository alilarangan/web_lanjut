<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php"><<==</a>
    <h1>INSERT</h1>
    <table class="table_insert">
    <form action="#" method="post">
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="jurusan"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="reset" value="batal"> <input type="submit" value="Simpan" name="simpan"></td>
        </tr>
    </form>
    </table>
    <?php
    include("../koneksi.php");
        if(isset($_POST['simpan'])){
            $nis = $_POST['nis'];
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $jurusan = $_POST['jurusan'];

            $sql = "INSERT INTO siswa(ni, nama, kelas, jurusan) VALUES ('$nis','$nama','$kelas','$jurusan')";
            if($kon->query($sql)==TRUE){
                header("Location: index.php");
                exit();
            }else{
                echo "insert error ". $sql . "<br>" . $kon->error;
            }
        }
        $kon->close();
    ?>
</body>
</html>