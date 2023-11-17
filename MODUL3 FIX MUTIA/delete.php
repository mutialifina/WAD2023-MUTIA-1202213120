<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
if (isset($_GET['id'])) {
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    $id = $_GET['id'];
    $hapus = "DELETE FROM showroom_mobil WHERE id = $id";
    $hasil = mysqli_query($koneksi, $hapus);

    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if ($hasil) {
        echo "<script>alert('Data dihapus')</script>";
        header("Location: list_mobil.php");
    } else {
        echo "<script>alert('Data gagal dihapus')</>";
        header("Location: list_mobil.php");
    }
    // Tutup koneksi ke database setelah selesai menggunakan database
    // exit();
}
?>