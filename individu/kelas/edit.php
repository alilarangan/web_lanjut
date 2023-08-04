<?php
include("data/koneksi.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM kelas WHERE kode_kelas='$id'";
    $result = $kon->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
?>
<br>
<h2>Update Data Kelas</h2>
<form action="data/model_kelas.php" method="post">
    <label for="kode">Kode Kelas</label>
    <input type="text" name="kode" id="" value="<?php echo $row['kode_kelas'] ?>">
    <label for="nama">Nama Kelas</label>
    <input type="text" name="nama" id="" value="<?php echo $row['nama_kelas'] ?>">
    <input type="submit" value="Update" name="update">
</form>
<?php }}
$kon->close();
?>