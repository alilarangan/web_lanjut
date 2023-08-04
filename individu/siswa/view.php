<br>
<h2>Data Siswa</h2>
<table cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama Siswa</th>
        <th>Tanggal Lahir</th>
        <th>Asal Sekolah</th>
        <th><a href="index.php?page=siswa&aksi=tambah">Tambah</a></th>
    </tr>
    <?php
            include("data/koneksi.php");
            $sql = "SELECT * FROM siswa";
            $result = $kon->query($sql);
            $no=1;
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$row["nis"]."</td>";
                echo "<td>".$row["nama"]."</td>";
                echo "<td>".$row["tgl"]."</td>";
                echo "<td>".$row["asal_sekolah"]."</td>";
                echo "<td class='aksi'><a href='index.php?page=siswa&aksi=edit&id=".$row['nis']."'>Edit</a> | 
                <a href='data/model_siswa.php?id=".$row['nis']."'>Hapus</a></td>";
                echo "</tr>";
                }
            }
            $kon->close();
          ?>
</table>