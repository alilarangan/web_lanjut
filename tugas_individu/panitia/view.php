<div class="conten">
  <div class="container">
    <div class="custom-table">
      <button class="open-modal-btn" onclick="openModal()">Tambah</button>
      <table>
        <tr>
            <th width="20">No</th>
            <th>Kode Panitia</th>
            <th>Nama</th>
            <th>Bagian</th>
            <th>Telpon</th>
            <th width="120">Action</th>
        </tr>
        <?php
            include("koneksi.php");
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
                echo "<td class='aksi'><a href='' class='btn-edit'>Edit</a> <a href='' class='btn-hapus'>Hapus</a></td>";
                echo "</tr>";
                }
            }
            $kon->close();
          ?>
    </table>
    </div>
    </div>
</div>