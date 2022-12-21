<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD dengan PHP</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <h1>Ubah Data Siswa</h1>

    <?php
    // Load file koneksi.php
    include "koneksi.php";
    // Ambil data NIS yang dikirim oleh index.php melalui URL
    $id = $_GET['id'];
    // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
    $sql = "SELECT * FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }
    ?>
    
    <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
        <table cellpadding="8">
        <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $siswa['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                <?php
                    if ($siswa['jenis_kelamin'] == "Laki-laki") {
                        echo "<input type='radio' name='jenis_kelamin' value='laki-laki' checked='checked'> Laki-laki";
                        echo "<input type='radio' name='jenis_kelamin' value='perempuan'> Perempuan";
                    } else {
                        echo "<input type='radio' name='jenis_kelamin' value='laki-laki'> Laki-laki";
                        echo "<input type='radio' name='jenis_kelamin' value='perempuan' checked='checked'> Perempuan";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Agama</td> 
                <td> 
                <select name="agama">
                    <option <?php echo ($siswa['agama'] == 'Islam') ? "selected": "" ?>>Islam</option>
                    <option <?php echo ($siswa['agama'] == 'Kristen') ? "selected": "" ?>>Kristen</option>
                    <option <?php echo ($siswa['agama'] == 'Hindu') ? "selected": "" ?>> Hindu</option>
                    <option <?php echo ($siswa['agama'] == 'Budha') ? "selected": "" ?>> Budha</option>
                    <option <?php echo ($siswa['agama'] == 'Atheis') ? "selected": "" ?>>Atheis</option>
                </select> 
                </td> 
            </tr>
            <tr>
                <td>Sekolah Asal</td>
                <td><input type="text" name="sekolah_asal" value="<?php echo $siswa['sekolah_asal'] ?>"></td>
            </tr>
        </table>
        
        <div class="button_akhir">
            <input name="simpan" type="submit" value="Simpan" class="custom-btn">
            <a href="index.php"><input type="button" value="Batal" class="custom-btn"></a>
        </div>
    </form>
</body>
</html>