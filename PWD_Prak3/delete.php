<?php
// Termasuk file koneksi database "koneksi.php"/fungsi include hanya sekali
    include_once("koneksi.php");

// Dapatkan id dari URL untuk menghapus pengguna itu
    $nim = $_GET['nim'];

// Hapus baris pengguna dari tabel berdasarkan id yang diberikan
    $result = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim='$nim'");

// Setelah menghapus redirect ke Home, maka daftar pengguna terbaru akan ditampilkan/sisa.
    header("Location:index.php");
?>