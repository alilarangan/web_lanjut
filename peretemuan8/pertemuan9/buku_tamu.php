<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("menu.php"); ?>
<h2>Buku Tamu</h2>
<main>
    <form action="#" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="pesan">Pesan:</label>
        <textarea id="pesan" name="pesan" rows="4" required></textarea>

        <button type="submit">Simpan</button>
    </form>
    <h2>Pesanan</h2>
    <div id="pesan-list">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $pesan = $_POST["pesan"];
        echo $nama."<br>".$pesan;
}
?>
    </div>
</main>
</body>
</html>