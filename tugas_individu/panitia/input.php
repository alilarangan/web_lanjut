<div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Input Data Panitia</h2>
            <form id="myForm" action="panitia/simpan.php" method="post">
                <input type="text" class="custom-input" placeholder="Kode Panitia" id="kode_panitia" name="kode_penitia">
                <input type="text" class="custom-input" placeholder="Nama panitia" id="nama_panitia" name="nama_panitia">
                <input type="text" class="custom-input" placeholder="Bagian" name="bagian" id="bagian">
                <input type="text" class="custom-input" placeholder="Nomor telpon" name="no_tlp" id="no_tlp">
                <button type="submit" name="submit">Tambah</button>
            </form>
        </div>
    </div>