<br>
<h2>Data Kelas</h2>
<table cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Kode Kelas</th>
        <th>Nama Kelas</th>
        <th><a href="index.php?page=kelas&aksi=tambah">Tambah</a></th>
    </tr>
    <?php
            include("data/koneksi.php");
            $sql = "SELECT * FROM kelas";
            $result = $kon->query($sql);
            $no=1;
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$row["kode_kelas"]."</td>";
                echo "<td>".$row["nama_kelas"]."</td>";
                echo "<td class='aksi'><a href='index.php?page=kelas&aksi=edit&id=".$row['kode_kelas']."'>Edit</a> | 
                <a href='data/model_kelas.php?id=".$row['kode_kelas']."'>Hapus</a></td>";
                echo "</tr>";
                }
            }
            $kon->close();
          ?>
</table>