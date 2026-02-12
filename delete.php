<?php
include "./lib/koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($connectDatabase, "DELETE FROM `makanan` WHERE id = '$id'");

if ($query) {
    echo "<script>
    alert('data berhasil di hapus');
    window.location.href = 'view.php';
    </script>";
} else {
    echo "data gagal dihapus";
}