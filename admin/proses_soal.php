<?php
include('koneksi.php');

$soal = $_POST['soal'];
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$knc_jawaban = $_POST['knc_jawaban'];

$sql = mysqli_query($koneksi, "INSERT INTO tbl_soal(soal, a, b, c, d, knc_jawaban) VALUES ('$soal', '$a', '$b', '$c', '$d', '$knc_jawaban')");

if($sql)
{
    echo "
    <script>
    alert('Berhasil tambah data !')
    location.href='soal.php';
    </script>
    ";
}
else
{
    echo "
    <script>
    alert('Gagal tambah data !')
    location.href='post_soal.php';
    </script>
    ";
}
?>