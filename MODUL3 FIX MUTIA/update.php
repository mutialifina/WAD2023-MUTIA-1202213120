<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include ('connect.php');
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];
// a. Ambil data nama mobil
if(isset($_POST['update'])){
    $namambl = $_POST['nama_mobil'];

    // b. Ambil data brand mobil
    $brandmbl = $_POST['brand_mobil'];

    // c. Ambil data warna mobil
    $warnambl = $_POST['warna_mobil'];

    // d. Ambil data tipe mobil
    $typembl = $_POST["tipe_mobil"];

    // e. Ambil data harga mobil
    $hargambl = $_POST["harga_mobil"];
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
    $update = "UPDATE showroom_mobil SET 
    nama_mobil = '$namambl',
    brand_mobil = '$brandmbl',
    warna_mobil = '$warnambl',
    tipe_mobil = '$typembl',
    harga_mobil = '$hargambl'
    WHERE id = $id";
        // Eksekusi perintah SQL

        // Buatkan kondisi jika eksekusi query berhasil

        if(mysqli_query($koneksi,$update)){
            echo "<script>
            alert('Data berhasil diubah !');
            document.location.href = 'list_mobil.php';
        </script>";
        
// Jika terdapat kesalahan, buatkan eksekusi query gagalnya
        }else{
            echo "<script>
            alert('Data gagal diubah !');
            document.location.href = 'list_mobil.php';
        </script>";
        }
    
    }
    
    
// Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database

mysqli_close();
?>