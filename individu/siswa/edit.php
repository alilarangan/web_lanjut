<?php
include("data/koneksi.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM siswa WHERE nis='$id'";
    $result = $kon->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
?>
<br>
<h2>Update Data Siswa</h2>
<form action="data/model_siswa.php" method="post">
<label for="nis">NIS</label>
    <input type="text" name="nis" id="" value="<?php echo $row['nis'] ?>">
    <label for="nama">Nama siswa</label>
    <input type="text" name="nama" id="" value="<?php echo $row['nama'] ?>">
    <label for="tgl"> TGL</label>
    <input type="date" name="tgl" id="" value="<?php echo $row['tgl'] ?>">
    <label for="skl">Asal Sekola</label>
    <input type="text" name="skl" id="" value="<?php echo $row['asal_sekolah'] ?>">
    <input type="submit" value="Update" name="update">
</form>
<?php }}
$kon->close();
?>