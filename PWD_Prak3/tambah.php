<html>
    <head>
        // Menampilkan judul
        <title>Tambah data mahasiswa</title> 
    </head>

<body>
// link ke index.php dengan title "Go to Home"
    <a href="index.php">Go to Home</a> 
<br/><br/> //Untuk membuat baris baru/enter


// Form untuk menampung macam-macam element yang berkaitan dengan sebuah form
// Method POST untuk mengirimkan data atau nilai langsung ke action untuk ditampung
// tr sebagai pembuatan baris pada table
// td sebagai pembuatan isi dalam kolom 
    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
    <tr>
        <td>Nim</td>
        <td><input type="text" name="nim"></td> 
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Gender (L/P)</td>
        <td><input type="text" name="jkel"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td>Tgl Lahir</td>
        <td><input type="text" name="tgllhr"></td>
    </tr>
    <tr>
    <td></td>

    <td><input type="submit" name="Submit" value="Tambah"></td>
    </tr>
</table>
</form>

<?php
// Periksa Jika formulir dikirimkan, masukkan data formulir ke dalam tabel pengguna.
    if(isset($_POST['Submit'])) {
        // Variabel sesuai dari database yang kita buat
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jkel = $_POST['jkel'];
        $alamat = $_POST['alamat'];
        $tgllhr = $_POST['tgllhr'];

// Termasuk file koneksi database "koneksi.php"/fungsi include hanya sekali
    include_once("koneksi.php");

// Memasukkan data pengguna ke dalam tabel
    $result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,jkel,alamat,tgllhr)
    VALUES('$nim','$nama', '$jkel','$alamat','$tgllhr')");

// Menampilkan pesan dibawah ini saat pengguna menambahkan
    echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
    }
?>
</body>
</html>