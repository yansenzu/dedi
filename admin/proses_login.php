<?php 
include('koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($sql);


if($cek > 0){
session_start();
$data = mysqli_fetch_assoc($sql);
// buat session login dan username
$_SESSION['username'] = $username;
$_SESSION['status'] = 'login';

// alihkan ke halaman dashboard admin
header("location:index.php");
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