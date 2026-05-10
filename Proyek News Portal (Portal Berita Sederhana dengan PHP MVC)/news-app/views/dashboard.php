<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin</title>
</head>

<body>
    <h2>Dashboard Admin</h2>
    <p>Selamat datang, <b><?= $_SESSION['admin'] ?></b></p>
    <a href="index.php?action=create">+ Tambah Berita</a> |
    <a href="index.php?action=logout">Logout</a>
    <hr>
    <table border="1" cellpadding="8">
        <tr>
            <th>Judul (ID)</th>
            <th>Thumbnail</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($berita as $b): ?>
            <tr>
                <td><?= $b['judul_id'] ?></td>
                <td>
                    <img src="public/uploads/<?= $b['thumbnail'] ?>" width="80">
                </td>
                <td><?= $b['datetime'] ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $b['id'] ?>">Edit</a> |
                    <a href="index.php?action=delete&id=<?= $b['id'] ?>"
                        onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>