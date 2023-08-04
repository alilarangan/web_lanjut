<table>
    <tr>
        <th>No</th>
        <th>Kode Kelas</th>
        <th>Nama Kelas</th>
        <th>Tambah</th>
    </tr>
    <tr>
    <?php
        include("koneksi.php");
        $sql = "SELECT * FROM kelas";
        $result = $kon->query($sql);
        $no=1;
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$row["kode_kelas"]."</td>";
            echo "<td>".$row["nama_kelas"]."</td>";
            echo "<td><a href=''>Edit</a> <a href=''>Hapus</a></td>";
            echo "</tr>";
            }
        }
        $kon->close();
    ?>
    </tr>
</table>