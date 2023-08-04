<?php
include("koneksi.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    // Untuk update
    if(isset($_POST['update'])){
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $bagian = $_POST['bagian'];
        $tlp = $_POST['tlp'];

        $sql = "UPDATE panitia SET kd_panitia='$kode',nama='$nama',bagian='$bagian',tlp='$tlp' WHERE kd_panitia='$kode'";

        if ($kon->query($sql) === TRUE) {
            header("Location: ../index.php?page=panitia");
            exit;
        } else {
            echo "Error updating record: " . $kon->error;
        }
    }
    // untuk Insert
    else{
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $bagian = $_POST['bagian'];
        $tlp = $_POST['tlp'];

    $sql = "INSERT INTO panitia(kd_panitia, nama, bagian, tlp) VALUES ('$kode','$nama','$bagian','$tlp')";

    if($kon->query($sql)==TRUE){
        header("Location: ../index.php?page=panitia");
        exit();
    }else{
        echo "insert error ". $sql . "<br>" . $kon->error;
    }
 }
}
// untuk hapus
else if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM panitia WHERE kd_panitia = $id";

    if ($kon->query($sql) === TRUE) {
        header("Location: ../index.php?page=panitia");
        exit;
    } else {
        echo "Error deleting record: " . $kon->error;
    }
}

$kon->close();
?>