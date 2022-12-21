<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>Data Calon Siswa / Pendaftar</h1>

    <button class="custom-btn btn-5">
        <a href="index.php">Kembali</a>
    </button>
    <table border="1" width="100%">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th colspan="2">Aksi</th>
        </tr>
        
        <?php
        // Load file koneksi.php
        include "koneksi.php";

        // Buat query untuk menampilkan semua data siswa
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql); // Eksekusi querynya
        while ($data = mysqli_fetch_array($query)) { // Ambil semua data dari hasil eksekusi $sql
            echo "<tr>";
            echo "<td>" . $data['nama'] . "</td>";
            echo "<td>" . $data['alamat'] . "</td>";
            echo "<td>" . $data['jenis_kelamin'] . "</td>";
            echo "<td>" . $data['agama'] . "</td>";
            echo "<td>" . $data['sekolah_asal'] . "</td>";
            echo "<td><a href='form_ubah.php?id=" . $data['id'] . "'>Ubah</a></td>";
            echo "<td><a href='proses_hapus.php?id=" . $data['id'] . "'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>