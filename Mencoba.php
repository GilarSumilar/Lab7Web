<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
    <style>
        .container {
            display: flex;
            gap: 100px;
        }

        h1 {
            color: blueviolet;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="1">
            <h1>Kondisi if</h1>
            <?php
            $nama_hari = date("l");
            if ($nama_hari == "Sunday") {
                echo "Minggu";
            } elseif ($nama_hari == "Monday") {
                echo "Sekarang hari Senin";
            } elseif ($nama_hari == "Tuesday") {
                echo "Sekarang hari Selasa";
            } elseif ($nama_hari == "Wednesday") {
                echo "Sekarang hari Rabu";
            } elseif ($nama_hari == "Thursday") {
                echo "Sekarang hari Kamis";
            } elseif ($nama_hari == "Friday") {
                echo "Sekarang hari Jum'at";
            } else {
                echo "Sekarang hari Sabtu";
            }
            ?>
        </div>
        <div class="2">
            <h1>Perulangan for</h1>
            <?php
            echo "Perulangan 1 sampai 10 <br />";
            for ($i = 1; $i <= 10; $i++) {
                echo "Perulangan ke: " . $i . '<br />';
            }
            echo "Perulangan Menurun dari 10 ke 1 <br />";
            for ($i = 10; $i >= 1; $i--) {
                echo "Perulangan ke: " . $i . '<br />';
            }
            ?>
        </div>
    </div>
</body>

</html>