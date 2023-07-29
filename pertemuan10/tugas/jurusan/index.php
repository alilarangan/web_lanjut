<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Jurusan</h1>
    <table cellpadding="0" cellspacing="0" class="table_index">
        <thead>
            <td>No</td>
            <td>Kode Jurusan</td>
            <td>Nama Jurusan</td>
            <td><a href="insert.php">Tambah</a></td>
        </thead>
        <?php
            include("../koneksi.php");
            $sql = "SELECT * FROM jurusan";
            $result = $kon->query($sql);
            $no=1;
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$row["kd_jurusan"]."</td>";
                echo "<td>".$row["nama_jurusan"]."</td>";
                echo "<td><a href='update.php?kd_jurusan=" . $row["kd_jurusan"] . "'>Edit</a> | 
                <a href='delete.php?kd_jurusan=" . $row["kd_jurusan"] . "'>Hapus</a></td>";
                echo "</tr>";
                }
            }
            $kon->close();
            ?>
    </table>
</body>
</html>