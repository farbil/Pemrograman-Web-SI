<!DOCTYPE html>
<html>

<head>
    <title>Form Berita</title>
</head>

<body>
    <h2><?= isset($b) ? 'Edit' : 'Tambah' ?> Berita</h2>
    <form method="POST">
        <label>Judul Indonesia</label><br>
        <input type="text" name="judul_id"
            value="<?= $b['judul_id'] ?? '' ?>" required><br><br>
        <label>Judul Inggris</label><br>
        <input type="text" name="judul_en"
            value="<?= $b['judul_en'] ?? '' ?>" required><br><br>
        <label>Thumbnail (nama file saja)</label><br>
        <input type="text" name="thumbnail"
            value="<?= $b['thumbnail'] ?? '' ?>" required><br><br>
        <label>Isi Indonesia</label><br>
        <textarea name="isi_id" rows="5" cols="50"><?= $b['isi_id'] ?? ''
                                                    ?></textarea><br><br>
        <label>Isi Inggris</label><br>
        <textarea name="isi_en" rows="5" cols="50"><?= $b['isi_en'] ?? ''
                                                    ?></textarea><br><br>
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="index.php?action=dashboard">← Kembali ke Dashboard</a>
</body>

</html>