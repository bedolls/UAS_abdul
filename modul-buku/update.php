<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id = $_POST['id'];
$judul =$_POST['judul'];
$penulis =$_POST['penulis'];
$kategori_id =$_POST['kategori_id'];
$cover =$_POST['cover'];

#3. menulis query
$sunting = "UPDATE tbl_buku SET judul='$judul', penulis='$penulis', kategori_id='$kategori_id', cover='$cover' WHERE id='$id'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);
if (!$proses) {
    die("Query gagal di jalankan:". mysqli_error($koneksi));
}
#5. mengalihkan halaman
header("location:index.php");
exit();
?>
<script>
    document.location="index.php";
</script>