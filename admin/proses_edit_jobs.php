<?php
include('koneksi.php');
$id_job = $_POST['id_job'];
$job_title = $_POST['title'];
$konten = $_POST['kontent'];
$kategori = $_POST['kategori'];
$kualifikasi = $_POST['kualifikasi'];
$tingkat_pekerjaan = $_POST['tingkat_pekerjaan'];

$sql = mysqli_query($koneksi, "UPDATE job_list SET title='$job_title', konten='$konten', kategori='$kategori', kualifikasi='$kualifikasi', tingkat_pekerjaan='$tingkat_pekerjaan' WHERE id_job='$id_job'");

if($sql){
    echo "
    <script>
    alert('Berhasil edit data !')
    location.href = 'index.php';
    </script>
    ";
}
?>