<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $pesan = $_POST["pesan"];

    // Simpan pesan ke file teks
    $file = fopen("guestbook.txt", "a");
    fwrite($file, "Nama: " . $nama . "\n");
    fwrite($file, "Pesan: " . $pesan . "\n\n");
    fclose($file);
}

// Baca pesan dari file teks dan tampilkan di halaman
//$pesan_list = file_get_contents("guestbook.txt");
//$pesan_list = nl2br($pesan_list); // Mengganti baris baru dengan tag <br> agar tampilan pesan sesuai dengan formatnya

// echo $pesan_list;
?>