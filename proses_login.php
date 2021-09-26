<?php 
include('koneksi.php');
$nik = $_POST['nik'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM pelamar WHERE nik = '$nik' AND password = '$password'");
$cek = mysqli_num_rows($sql);


if($cek > 0){
session_start();
$data = mysqli_fetch_assoc($sql);
// buat session login dan username
$_SESSION['nik'] = $nik;
$_SESSION['id_pelamar'] = $data['id_pelamar'];
$_SESSION['status'] = 'login';

// alihkan ke halaman dashboard admin
header("location:profile.php");
}
else{
    echo "
    <script>
    alert('User Tidak Ditemukan !');
    location.href = 'login.php';
    </script>
    ";
}
?>