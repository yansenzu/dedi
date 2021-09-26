<?php
include('koneksi.php');
$keterangan = $_POST['keterangan'];
$catatan = $_POST['catatan'];

$sql = mysqli_query($koneksi, "UPDATE pelamar SET keterangan='$keterangan', catatan='$catatan'");

if($sql){
    echo "
    <script>
    alert('Berhasil update keterangan !')
    location.href = 'user_baru.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Gagal update keterangan !')
    location.href = 'user_baru.php';
    </script>
    ";
}
?>