<?php 
include('koneksi.php');
$parameter = $_POST['parameter'];
$nilai = $_POST['nilai'];

$sql = mysqli_query($koneksi, "INSERT INTO pendidikan (parameter, nilai) VALUES ('$parameter', '$nilai')");

if($sql){
    echo "
    <script>
    alert('Berhasil tambah data !')
    location.href = 'pendidikan.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Gagal tambah data !')
    location.href = 'post_pendidikan.php';
    </script>
    ";
}
?>