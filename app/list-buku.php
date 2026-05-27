<?php
include("../config/database.php");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Buku</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <div class="hero">
            <span class="badge">Katalog Buku</span>
            <h1>Daftar Koleksi Buku</h1>
            <p>Kelola data buku yang tersimpan di database perpustakaan.</p>
        </div>

        <div class="card">
            <div class="navbar">
                <a href="../index.php">Beranda</a>
                <a href="form-daftar.php">+ Tambah Buku</a>
            </div>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM buku";
                        $query = mysqli_query($db, $sql);
                        $no = 1;

                        while ($buku = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td>" . $buku['kode_buku'] . "</td>";
                            echo "<td>" . $buku['judul_buku'] . "</td>";
                            echo "<td>" . $buku['penulis_buku'] . "</td>";
                            echo "<td>" . $buku['penerbit_buku'] . "</td>";
                            echo "<td>" . $buku['tahun_penerbit'] . "</td>";
                            echo "<td>" . $buku['Stok'] . "</td>";
                            echo "<td class='actions'>
                                    <a class='edit' href='form-edit.php?id=" . $buku['id_buku'] . "'>Edit</a>
                                    <a class='delete' href='hapus.php?id=" . $buku['id_buku'] . "' onclick=\"return confirm('Yakin hapus data ini?')\">Hapus</a>
                                  </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div style="margin-top:16px;" class="meta">
                Total data: <?php echo mysqli_num_rows($query); ?>
            </div>
        </div>
    </div>
</body>
</html>