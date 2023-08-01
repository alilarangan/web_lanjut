<?php
include('koneksi.php');
if (isset($_GET['kd_panitia'])) {
    $kd = $_GET['kd_panitia'];

    $query = "DELETE FROM panitia WHERE kd_panitia = $kd";
    mysqli_query($kon, $query);
}
header("Location: ../index.php?page=panitia");
exit();
?>