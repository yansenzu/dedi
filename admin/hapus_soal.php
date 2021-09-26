<?php
include('koneksi.php');
$id_soal = $_GET['id_soal'];
$sql = mysqli_query($koneksi, "DELETE FROM tbl_soal WHERE id_soal='$id_soal'");

if($sql){
    echo "
    <script>
    alert('Berhasil hapus data !')
    location.href='soal.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Gagal hapus data !')
    location.href='soal.php';
    </script>
    ";
}
?>