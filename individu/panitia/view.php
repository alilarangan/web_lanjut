<br>
<h2>Data Panitia</h2>
<table cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Kode Panitia</th>
        <th>Nama</th>
        <th>Bagian</th>
        <th>No. Telpon</th>
        <th><a href="index.php?page=panitia&aksi=tambah">Tambah</a></th>
    </tr>
    <?php
            include("data/koneksi.php");
            $sql = "SELECT * FROM panitia";
            $result = $kon->query($sql);
            $no=1;
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$row["kd_panitia"]."</td>";
                echo "<td>".$row["nama"]."</td>";
                echo "<td>".$row["bagian"]."</td>";
                echo "<td>".$row["tlp"]."</td>";
                echo "<td class='aksi'><a href='index.php?page=panitia&aksi=edit&id=".$row['kd_panitia']."'>Edit</a> | 
                <a href='data/model_panitia.php?id=".$row['kd_panitia']."'>Hapus</a></td>";
                echo "</tr>";
                }
            }
            $kon->close();
          ?>
</table>