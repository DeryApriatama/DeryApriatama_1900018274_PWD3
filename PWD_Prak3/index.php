<?php

// Termasuk file koneksi database "koneksi.php"/fungsi include hanya sekali
    include_once("koneksi.php");

// Mengambil semua data pengguna dari database
    $result = mysqli_query($con, "SELECT * FROM mahasiswa ");

?>

<html>
    <head>
    // Menampilkan judul
<title>Halaman Utama</title>
    </head>

    <body>
    // link ke tambah.php dengan title "Tambah Data Baru"
    <a href="tambah.php">Tambah Data Baru</a><br/><br/>
        <table width='80%' border=1> //ukuran table

// tr sebagai pembuatan baris pada table
// th sebagai pembuatan judul didalam sebuah tabel
// td sebagai pembuatan isi dari th 
    <tr>
    <th>Nim</th> <th>Nama</th> <th>Gender</th> <th>Alamat</th>
    <th>tgl lahir</th> <th>Update</th>
    </tr>

<?php
// Untuk menampilkan data yang sudah diproses diatas dan while untuk melakukan perulangan untuk memenuhi data yang diminta/diproses tadi
// echo untuk menampilkan teks sesuai yang kita buat ke layar
    while($user_data = mysqli_fetch_array($result)) {
    echo "<tr>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jkel']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['tgllhr']."</td>";
        echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a
    href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>"; // link edit dan delete
    }
?>
        </table>
    </body>
</html>