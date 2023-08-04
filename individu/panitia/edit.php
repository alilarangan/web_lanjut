<?php
include("data/koneksi.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM panitia WHERE kd_panitia='$id'";
    $result = $kon->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
?>
<br>
<h2>Update Data Panitia</h2>
<form action="data/model_panitia.php" method="post">
    <label for="kode">ID Panitia</label>
    <input type="text" name="kode" id="" value="<?php echo $row['kd_panitia'] ?>">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="" value="<?php echo $row['nama'] ?>">
    <label for="bagian">Bagian</label>
    <input type="text" name="bagian" id="" value="<?php echo $row['bagian'] ?>">
    <label for="tlp">No. Telpon</label>
    <input type="text" name="tlp" id="" value="<?php echo $row['tlp'] ?>">
    <input type="submit" value="Update" name="update">
</form>
<?php }}
$kon->close();
?>