<?php
include('koneksi.php');

$id_soal = $_POST['id_soal'];
$soal = $_POST['soal'];
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$knc_jawaban = $_POST['knc_jawaban'];

$sql = mysqli_query($koneksi, "UPDATE tbl_soal SET soal='$soal', a='$a', b='$b', c='$c', d='$d', knc_jawaban='$knc_jawaban' WHERE id_soal='$id_soal'");

if($sql)
{
    echo "
    <script>
    alert('Berhasil edit data !')
    location.href='soal.php';
    </script>
    ";
}
else
{
    echo "
    <script>
    alert('Gagal edit data !')
    location.href='post_soal.php';
    </script>
    ";
}
?>