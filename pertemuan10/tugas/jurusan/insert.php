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
            <td>Kode Jurusan</td>
            <td>:</td>
            <td><input type="text" name="kd_jurusan"></td>
        </tr>
        <tr>
            <td>Nama Jurusan</td>
            <td>:</td>
            <td><input type="text" name="nama_jurusan"></td>
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
            $kdjr = $_POST['kd_jurusan'];
            $nama_jr = $_POST['nama_jurusan'];

            $sql = "INSERT INTO jurusan(kd_jurusan, nama_jurusan) VALUES ('$kdjr','$nama_jr')";
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