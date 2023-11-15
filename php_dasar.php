<!DOCTYPE html>
<html>

<head>
    <title>Form Input PHP</title>
    <style>
        h2,
        h3,
        p {
            text-align: center;
        }

        form {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>

    <h2>Form Input PHP</h2>
    <p style="text-align: center;">Isilah form di bawah ini :</p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal Lahir:</label></td>
                <td><input type="date" name="tanggal_lahir" required></td>
            </tr>
            <tr>
                <td><label for="pekerjaan">Pekerjaan:</label></td>
                <td>
                    <select name="pekerjaan" required>
                        <option value="Programmer">Programmer</option>
                        <option value="Petani">Petani</option>
                        <option value="Rebahan">Rebahan</option>
                    </select>
                </td>
            </tr>
        </table>
        <table><button type="select">Kirim</table>
    </form>

    <?php
    // Fungsi untuk menghitung umur berdasarkan tanggal lahir
    function hitungUmur($tanggal_lahir)
    {
        $tgl_lahir = new DateTime($tanggal_lahir);
        $sekarang = new DateTime('today');
        $umur = $sekarang->diff($tgl_lahir)->y;
        return $umur;
    }

    // Array pekerjaan dan gaji
    $pekerjaan_gaji = array(
        "Programmer" => 8000000,
        "Petani" => 7500000,
        "Rebahan" => 5000
    );

    // Memproses form jika sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $nama = $_POST["nama"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $pekerjaan = $_POST["pekerjaan"];

        // Menghitung umur
        $umur = hitungUmur($tanggal_lahir);

        // Menampilkan output
        echo "<h3>Output:</h3>";
        echo "<p>Nama: $nama</p>";
        echo "<p>Umur: $umur tahun</p>";
        echo "<p>Pekerjaan: $pekerjaan</p>";
        echo "<p>Gaji: Rp " . number_format($pekerjaan_gaji[$pekerjaan], 0, ",", ".") . "</p>";
    }
    ?>

</body>

</html>