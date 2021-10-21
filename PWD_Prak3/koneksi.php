<?php
$host="localhost"; //variabel host yang berisi host name database/alamat server database
$username="root"; //variabel username, biasanya berisi nama user yang telah diberi hak untuk dapat akses server tetapi disini kita menggunakan root (jika bukan admin)
$password=""; //variabel database
$databasename="akademik"; //variabel databasename/nama database yang sudah dibuat di mysql
$con=@mysqli_connect($host,$username,$password,$databasename); //variabel con/koneksi yang menampung variabel diatasnya

if (!$con) { //fungsi untuk mengecek
    echo "Error: " . mysqli_connect_error();//untuk mengetahui error bagian apa
        exit();//penyelesaian semua perintah
}
?>