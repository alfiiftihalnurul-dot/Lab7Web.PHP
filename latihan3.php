<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3 PHP</title>
</head>
<body>

    <h2>Daftar Mahasiswa</h2>

    <?php
        $mahasiswa = [
            "Alya",
            "Bima",
            "Citra",
            "Doni",
            "Eka",
            "Fajar",
            "Gita"
        ];

        echo "<ol>";

        foreach ($mahasiswa as $nama) {
            echo "<li>" . htmlspecialchars($nama) . "</li>";
        }

        echo "</ol>";
    ?>

</body>
</html>
