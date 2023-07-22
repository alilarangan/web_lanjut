<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("menu.php"); ?>
    <main>
    <section>
        <h2>Informasi Kontak</h2>
        <p>Jika Anda memiliki pertanyaan atau memerlukan bantuan lebih lanjut, silakan hubungi kami melalui:</p>
        <ul>
            <li>Email: <a href="mailto:info@contohperusahaan.com">info@contohperusahaan.com</a></li>
            <li>Telepon: 123-456-7890</li>
            <li>Alamat: Jalan Contoh No. 123, Kota Contoh, Negara Contoh</li>
        </ul>
    </section>
    <section>
                <h2>Kontak</h2>
                <form action="#" method="post">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="pesan">Pesan:</label>
                    <textarea id="pesan" name="pesan" rows="4" required></textarea>

                    <button type="submit">Kirim</button>
                </form>
            </section>
</main>
</body>
</html>