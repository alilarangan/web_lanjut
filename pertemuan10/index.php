<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>SEKOLAH MENENGAH KEJURUAN</h1>
    <table cellpadding="0" cellspacing="0" class="table_index">
        <thead>
            <td>No</td>
            <td>NIS</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Jurusan</td>
            <td><a href="insert.php">Tambah</a></td>
        </thead>
        <?php
            include("koneksi.php");
            $sql = "SELECT * FROM siswa";
            $result = $kon->query($sql);
            $no=1;
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$row["ni"]."</td>";
                echo "<td>".$row["nama"]."</td>";
                echo "<td>".$row["kelas"]."</td>";
                echo "<td>".$row["jurusan"]."</td>";
                echo "<td><a href='update.php?ni=" . $row["ni"] . "'>Edit</a> | 
                <a href='delete.php?ni=" . $row["ni"] . "'>Hapus</a></td>";
                echo "</tr>";
                }
            }
            $kon->close();
            ?>
    </table>
</body>
</html>