<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$kategori_id = $_POST['kategori_id'];
$cover_bk = $_POST['cover_bk'];


#3. menulis query
$sunting = "UPDATE tbl_bk SET judul='$judul', penulis='$penulis', kategori_id='$kategori_id', cover_bk='$cover_bk'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>