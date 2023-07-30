<!DOCTYPE html>
<html>
<head>
  <title>Contoh Mengatur Teks dengan CSS</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="teks-container">
    <p>Selamat datang di contoh mengatur teks dengan CSS!</p>
  </div>
  <label for="nama">Nama:</label>
  <input type="text" id="nama" class="input-text" placeholder="Masukkan nama">
  <label class="checkbox-container">
    Pilih saya
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <br>
  <!-- combobox -->
  <label for="pilihan">Pilih opsi:</label>
  <select id="pilihan" class="combobox">
    <option value="opsi1">Opsi 1</option>
    <option value="opsi2">Opsi 2</option>
    <option value="opsi3">Opsi 3</option>
    <option value="opsi4">Opsi 4</option>
  </select>
  <br>
  <!-- text area -->
  <label for="pesan">Pesan:</label>
  <textarea id="pesan" class="custom-textarea" placeholder="Tulis pesan Anda di sini..."></textarea>
  <br>
  <!-- Button -->
  <button class="custom-button">Klik Saya</button>
  <button class="custom-delete">Klik Saya</button>
  <button class="custom-sukses">Klik Saya</button>
</body>
</html>
