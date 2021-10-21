<?php
// Termasuk file koneksi database "koneksi.php"/fungsi include hanya sekali
    include_once("koneksi.php");

// Periksa apakah formulir dikirimkan untuk pembaruan pengguna, lalu arahkan kembali ke beranda setelah pembaruan
    if(isset($_POST['update']))
{
    // Variabel sesuai dari database yang kita buat
        $nim = $_POST['nim'];
        $nama=$_POST['nama'];
        $jkel=$_POST['jkel'];
        $alamat=$_POST['alamat'];
        $tgllhr=$_POST['tgllhr'];

// Perbarui data pengguna
    $result = mysqli_query($con, "UPDATE mahasiswa SET
    nama='$nama',jkel='$jkel',alamat='$alamat',tgllhr='$tgllhr' WHERE nim='$nim'");

// Mengarahkan ulang ke beranda untuk menampilkan pengguna yang diperbarui dalam daftar
    header("Location: index.php");
    }
?>

<?php
// Tampilkan data pengguna yang dipilih berdasarkan id/nim
// Mendapatkan id/nim dari url
    $nim = $_GET['nim'];

// Mengambil data pengguna berdasarkan id/nim
    $result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim='$nim'");

//Untuk menampilkan data yang sudah diproses diatas dan while untuk melakukan perulangan untuk memenuhi data yang diminta/diproses tadi
while($user_data = mysqli_fetch_array($result))
{
    // Variabel sesuai dari database yang kita buat
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $jkel = $user_data['jkel'];
    $alamat = $user_data['alamat'];
    $tgllhr = $user_data['tgllhr'];
}
?>
<html>
    <head>
// Menampilkan judul
    <title>Edit Data Mahasiswa</title>
    </head>

<body>
// Link ke index.php dengan title "Home"
    <a href="index.php">Home</a>
    <br/><br/>

// Form untuk menampung macam-macam element yang berkaitan dengan sebuah form
// Method POST untuk mengirimkan data atau nilai langsung ke action untuk ditampung
// tr sebagai pembuatan baris pada table
// td sebagai pembuatan isi dalam kolom 
// input untuk menunjukkan sebuah inputan (masukkan) dalam bentuk kotak dan sejenisnya yang dapat diedit/diketik untuk diisi data tertentu 
(seperti memasukkan data diri nama, email, tanggal dan lain sebagainya).
// echo untuk menampilkan teks sesuai yang kita buat ke layar
<form name="update_mahasiswa" method="post" action="edit.php">
<table border="0">
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><input type="text" name="jkel" value=<?php echo $jkel;?>></td>
    </tr>
    <tr>
        <td>alamat</td>
        <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
    </tr>
    <tr>
        <td>Tgl Lahir</td>
        <td><input type="text" name="tgllhr" value=<?php echo $tgllhr;?>></td>
    </tr>
    <tr>
        <td><input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>></td>
        <td><input type="submit" name="update" value="Update"></td>
    </tr>

        </table>
    </form>
</body>
</html>