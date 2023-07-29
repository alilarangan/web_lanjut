<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>SEKOLAH</h1>
    <table cellpadding="0" cellspacing="0" class="table_index">
        <thead>
            <td>No</td>
            <td>Kode Sekolah</td>
            <td>Nama Sekolah</td>
            <td>Alamat</td>
            <td><a href="insert.php">Tambah</a></td>
        </thead>
        <?php
            include("../koneksi.php");
            $sql = "SELECT * FROM sekolah";
            $result = $kon->query($sql);
            $no=1;
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$row["kd_sekolah"]."</td>";
                echo "<td>".$row["nama_sekolah"]."</td>";
                echo "<td>".$row["alamat"]."</td>";
                echo "<td><a href='update.php?kd_sekolah=" . $row["kd_sekolah"] . "'>Edit</a> | 
                <a href='delete.php?kd_sekolah=" . $row["kd_sekolah"] . "'>Hapus</a></td>";
                echo "</tr>";
                }
            }
            $kon->close();
            ?>
    </table>
</body>
</html>