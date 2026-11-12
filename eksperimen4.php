
<?php
$nim = "";
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = trim($_POST["nim"] ?? "");

    if ($nim == "") {
        $pesan = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim)) {
        $pesan = "NIM hanya boleh berisi angka.";
    } elseif (strlen($nim) != 8) {
        $pesan = "NIM harus terdiri dari 8 digit.";
    } else {
        $pesan = "NIM valid: " . htmlspecialchars($nim);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Validasi NIM</title>
</head>
<body>

    <h2>Validasi NIM Mahasiswa</h2>

    <form method="POST">
        <label>Masukkan NIM:</label><br>
        <input type="text" name="nim"
            value="<?= htmlspecialchars($nim) ?>">
        <button type="submit">Periksa</button>
    </form>

    <p><?= htmlspecialchars($pesan) ?></p>

</body>
</html>
