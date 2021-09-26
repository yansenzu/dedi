<?php
include('koneksi.php');
$id_job = $_GET['id'];
$sql = mysqli_query($koneksi, "DELETE FROM job_list WHERE id_job = '$id_job'");
if($sql){
    echo "
    <script>
    alert('Berhasil hapus data !')
    location.href='index.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Gagal hapus data !')
    location.href='index.php';
    </script>
    ";
}
?>