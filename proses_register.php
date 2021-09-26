<?php
include('koneksi.php');
$nik = $_POST['nik'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "INSERT INTO pelamar (nik, password) VALUES ('$nik', '$password')");

if($sql){
    echo "
    <script>
    alert('Berhasil Register !')
    location.href = 'login.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Gagal Register !')
    location.href = 'register.php';
    </script>
    ";
}
?>