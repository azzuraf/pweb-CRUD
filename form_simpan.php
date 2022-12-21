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
    <h1>Tambah Data Calon Siswa</h1>
    <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
        <table cellpadding="8">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Agama</td> 
                <td> 
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select> 
                </td> 
            </tr>
            <tr>
                <td>Sekolah Asal</td>
                <td><input type="text" name="sekolah_asal"></td>
            </tr>
        </table>
        
        <div class="button_akhir">
            <input name="daftar" type="submit" value="Daftar" class="custom-btn">
            <a href="index.php"><input type="button" value="Batal" class="custom-btn"></a>
        </div>
    </form>
</body>
</html>