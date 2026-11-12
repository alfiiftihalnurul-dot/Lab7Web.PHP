
<?php
$nama = "";
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST["nama"] ?? "");

    if ($nama == "") {
        $pesan = "Nama wajib diisi.";
    } else {
        $pesan = "Halo, " . htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') . "! Data berhasil diproses oleh server.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen Reset Form</title>
</head>
<body>

    <h2>Form Reset dan Proses Server</h2>

    <form method="POST">
        <label>Masukkan Nama:</label><br>
        <input type="text" name="nama"
            value="<?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?>">

        <br><br>

        <button type="submit">Kirim</button>
        <button type="reset">Reset</button>
    </form>

    <p><?= $pesan ?></p>

</body>
</html>
