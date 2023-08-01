<?php
include("koneksi.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kd = $_POST['kode_penitia'];
    $nama = $_POST['nama_panitia'];
    $bag = $_POST['bagian'];
    $tlp = $_POST['no_tlp'];

    $sql ="INSERT INTO panitia(kd_panitia, nama, bagian, tlp) VALUES ('$kd','$nama','$bag','$tlp')";
    if($kon->query($sql)==TRUE){
        header("Location: ../index.php?page=panitia");
        exit();
    }else{
        echo "insert error ". $sql . "<br>" . $kon->error;
    }
}
$kon->close();
?>
