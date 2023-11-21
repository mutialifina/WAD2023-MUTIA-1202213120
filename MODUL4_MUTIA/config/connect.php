<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$hostt = "localhost:3306";
$user = "root";
$pass = "";
$db = "modul4";
$koneksi = mysqli_connect($hostt,$user,$pass,$db);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$koneksi) {
    die("Koneksi Gagal : ". mysqli_connect_error());
}
// 
 
?>