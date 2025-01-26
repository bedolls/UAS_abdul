<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$kategori_id = $_POST['kategori_id'];
$cover_bk = $_POST['cover_bk'];
$nama_foto = $_FILES['cover_bk']['name'];
$tmp_foto = $_FILES['cover_bk']['tmp_name'];

#3. menulis query
$simpan = "INSERT INTO tbl_bk (judul,penulis,kategori_id,cover_bk) 
VALUES ('$judul','$penulis','$kategori_id','$cover_bk')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#4.1. Proses Upload File
$upload_foto = move_uploaded_file($tmp_foto,"cover_bk/$nama_foto");

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>