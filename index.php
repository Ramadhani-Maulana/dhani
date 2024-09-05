<!DOCTYPE html>
<head>
    <title>Isi Data Diri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Mahasiswa</h2>
        <form action="index.php" method="post">
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama.." required>

            <label for="nim">NIM :</label>
            <input type="number" id="nim" name="nim" placeholder="Masukkan NIM.."required>

            <label for="kelas">Kelas :</label>
            <select id="kelas" name="kelas" required>
                <option value="T3-A">T3-A</option>
                <option value="T3-B">T3-B</option>
                <option value="T3-C">T3-C</option>
                <option value="T3-D">T3-D</option>
                <option value="T3-E">T3-E</option>
                <option value="T3-F">T3-F</option>
                <option value="T3-G">T3-G</option>
                <option value="T3-F">T3-H</option>
                <option value="T3-G">T3-I</option>
            </select>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Masukkan Email.." required>

            <label>Jenis Kelamin :</label>
            <div class="radio-group">
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan</label>
            </div>

            <label for="saran">Saran :</label>
            <textarea id="saran" name="saran" rows="4"></textarea>

            <input type="submit" name="submit" value="Kirim">
        </form>
    </div>
    <?php
    include 'db.php';

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $kelas = $_POST['kelas'];
        $email = $_POST['email'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $saran = $_POST['saran'];

        $sql = "INSERT INTO registrasi (nama, nim, kelas, email, jenis_kelamin, saran)
                VALUES ('$nama', '$nim', '$kelas', '$email', '$jenis_kelamin', '$saran')";

        if (mysqli_query($conn, $sql)) {
            echo "<script language='javascript'>alert('Data Berhasil Disimpan');</script>";
        } 
    }
?>
</body>
</html>