<html>
<head>
    <title>tugas2</title>
</head>
<body>
    <form action="#" method="post">
        <table style="border: 1px solid black; margin-left:auto;margin-right:auto">
            <tr>
                <td colspan="3" style="text-align: center;"><h3>FORM TIKET BOLA SEAGAMES 2018</h3>
                <h3>INDONESIA VS MALAYSIA<br>PUKUL 15:00 WIB</h3>
                </td>
            </tr>
            <tr>
                <td>NAMA PEMESAN</td>
                <td>=</td>
                <td><input type="text" name="namapemesan" autocomplete="off"></td>
            </tr>
            <tr>
                <td>TELP.</td>
                <td>=</td>
                <td><input type="tel" name="telpon" autocomplete="off"></td>
            </tr>
            <tr>
                <td>JENIS TIKET</td>
                <td>=</td>
                <td><select name="tkt">
                    <option value="VIP">VIP</option>
                    <option value="kelas1">Kelas1</option>
                    <option value="kelas2">Kelas2</option>
                    <option value="kelas3">Kelas3</option>
                </select></td>
            </tr>
            <tr>
                <td style="vertical-align:top;">JUMLAH TIKET</td>
                <td style="vertical-align:top;">=</td>
                <td><input type="number" name="jml" autocomplete="off"><br>Lembar</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><input type="submit" value="Simpan" name="simpan"><br></td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr><hr>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: left;">
                    <h3>DATA PEMESANAN TIKET BOLA SEAGAMES 2018<br>
                        INDONESIA VS MALAYSIA<br>
                        PUKUL 15:00 WIB</h3>
                </td>
            </tr>
            <?php
                if(isset($_POST["simpan"])){
                    $nama = $_POST["namapemesan"];
                    $telp = $_POST["telpon"];
                    $kelas = $_POST["tkt"];
                    $jumlah = $_POST["jml"];
                    $pilih;
                    $total;
                    $jenis;

                    echo "<tr>
                            <td>Nama </td>
                            <td>:</td>
                            <td>".$nama."</td>
                        </tr>";
                    echo "<tr>
                            <td>Telp </td>
                            <td>:</td>
                            <td>".$telp."</td>
                        </tr>";
                    switch ($kelas){
                        case "VIP":
                            $jenis ="VIP";
                            $pilih = 500000;
                            break;
                        case "kelas1":
                            $jenis ="Kelas1";
                            $pilih = 400000;
                            break;
                        case "kelas2":
                            $jenis ="Kelas2";
                            $pilih = 300000;
                            break;
                        case "kelas3":
                            $jenis ="Kelas3";
                            $pilih = 200000;
                            break;
                        default:
                            echo "Data tidak ada";
                        }
                        echo "<tr>
                            <td>Jenis Tiket </td>
                            <td>:</td>
                            <td>".$jenis."</td>
                            </tr>";
                        echo "<tr>
                            <td>Harga Tiket </td>
                            <td>:</td>
                            <td> Rp ".number_format($pilih, 0,',','.')."</td>
                        </tr>";
                        echo "<tr>
                            <td colspan=3><br></td>
                        </tr>";
                        echo "<tr>
                            <td>Banyaknya Tiket </td>
                            <td>:</td>
                            <td>".$jumlah."</td>
                        </tr>";
                        echo "<tr>
                            <td colspan=3><hr></td>
                        </tr>";
                        $total = $jumlah*$pilih;
                        echo "<tr>
                            <td>Total Bayar</td>
                            <td>:</td>
                            <td> Rp ".number_format($total, 0,',','.')."</td>
                        </tr>";
                }
            ?>
        </table>
    </form>
</body>
</html>