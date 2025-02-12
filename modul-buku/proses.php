<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$kategori_id = $_POST['kategori_id'];
$cover = $_POST['cover'];

#3. menulis query
$simpan = "INSERT INTO tbl_buku (judul,penulis,kategori_id,cover) VALUES ('$judul','$penulis','$kategori_id','$cover')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman
 header("location:index.php");
?>
<script>
    document.location="index.php";
</script>