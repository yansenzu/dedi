<?php
include('koneksi.php');
$job_title = $_POST['title'];
$konten = $_POST['kontent'];
$num_char = 30;
$text = $_POST['kontent'];
$slug = substr($text, 0, $num_char) . '...';
$kategori = $_POST['kategori'];
$kualifikasi = $_POST['kualifikasi'];
$tingkat_pekerjaan = $_POST['tingkat_pekerjaan'];

$sql = mysqli_query($koneksi, "INSERT INTO job_list (title, konten, slug, kategori, kualifikasi, tingkat_pekerjaan) VALUES ('$job_title', '$konten', '$slug', '$kategori', '$kualifikasi', '$tingkat_pekerjaan')");

if($sql){
    echo "
    <script>
    alert('Berhasil tambah data !')
    location.href = 'jobs.php';
    </script>
    ";
}
?>