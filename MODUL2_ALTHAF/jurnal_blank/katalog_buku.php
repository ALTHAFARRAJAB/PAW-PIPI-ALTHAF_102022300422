<?php
include 'connect.php';
$no = 1;
$search = "";

// Cek Apakah ada data yang dikirim
if (isset($_GET['search'])) {
    $search = trim($_GET['search']);

    // Validasi Input jika search input kurang dari 3 karakterr
    if (strlen($search) < 3) {
        echo "<script>alert('Search term must be at least 3 characters long.');</script>";
    //Buat query untuk menampilkan data
        $query = "SELECT * FROM tb_buku"; 
    } else {
        $query = "SELECT * FROM tb_buku WHERE judul LIKE '%$search%' OR penulis LIKE '%$search%'";
    }
} else {
    $query = "SELECT * FROM tb_buku"; 
}
//Jalankan query
$result = mysqli_query($conn, $query);
//Tampung hasil query ke dalam array
$bukus = [];
while ($row = mysqli_fetch_assoc($result)) {
    $bukus[] = $row;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <h1>Katalog Buku</h1>

        <!-- Form Pencarian --> 
        <form action="katalog.buku.php" method="GET" class="mb-3">
            <div class="input-group">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2-sm-0" type="submit">Search</button>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($bukus) == 0) : ?>
                    <tr>
                        <th colspan="5" class="text-center">TIDAK ADA DATA DALAM KATALOG</th>
                    </tr>
                <?php endif; ?>
                <?php foreach ($bukus as $buku) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($buku['judul']); ?></td>
                        <td><?= htmlspecialchars($buku['penulis']); ?></td>
                        <td><?= htmlspecialchars($buku['tahun_terbit']); ?></td>
                        <td>
                            <a href="edit_buku.php?id=<?= $buku['id'] ?>" class="btn btn-primary">Edit</a>
                            <a href="delete.php?id=<?= $buku['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>