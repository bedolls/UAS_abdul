<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id_kategori = $_POST['id_kategori'];
$nm_kategori = $_POST['nm_kategori'];


#3. menulis query
$sunting = "UPDATE tbl_kategori_bk SET nm_kategori='$nm_kategori' WHERE id_kategori='$id_kategori'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>