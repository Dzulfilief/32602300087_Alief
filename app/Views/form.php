<!DOCTYPE html>
<html>

<head>
    <title>Form Mahasiswa</title>
</head>

<body>
    <h2>Form Data Mahasiswa</h2>
    <form action="<?= base_url('form') ?>" method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas" required><br><br>

        <label>Mata Kuliah:</label><br>
        <input type="text" name="matkul" required><br><br>

        <label>Dosen Pengampu:</label><br>
        <input type="text" name="dosen" required><br><br>

        <label>Asisten Praktikum:</label><br>
        <input type="text" name="asisten" required><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>

</html>