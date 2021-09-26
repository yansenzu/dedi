<?php
include('koneksi.php');
$id = $_GET['id'];
$sql = mysqli_query($koneksi, "DELETE FROM pelamar WHERE id_pelamar = '$id'");

if($sql){
    echo "
    <script>
    alert('Berhasil hapus data !')
    location.href = 'pelamar_baru.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Gagal hapus data !')
    location.href = 'pelamar_baru.php';
    </script>
    ";
}
?>