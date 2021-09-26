

<?php 
include('koneksi.php');
include "classes/class.phpmailer.php";
$id_pelamar = $_GET['id'];

$sql  = mysqli_query($koneksi, "SELECT * FROM pelamar WHERE id_pelamar = '$id_pelamar'");
$d = mysqli_fetch_array($sql);
$nama = $d['nama'];
$email = $d['email'];
$id_job = $d['id_job'];
$sql2 = mysqli_query($koneksi, "SELECT * FROM job_list WHERE id_job = '$id_job'");
$a = mysqli_fetch_array($sql2);
$title = $a['title'];

	$pengirim = "admin@cvmotorindo.com";    
    $penerima = $email;    
    $subjek = "Pemberitahuan Penerimaan Pekerjaan CV. Motorindo Perkasa";    
    $pesan = "Selamat Anda Lolos Rekruitmen ".$title. " CV. Motorindo Perkasa. Silahkan datang ke Kantor yang beralamat di Jl. Citra No. 28. Terimakasih.";   
    $headers = "Dari :" . $pengirim;    
    mail($penerima,$subjek,$pesan, $headers);   
    echo "
    <script>
    alert('Pesan email sudah terkirim.')
    location.href = 'pengumuman.php';
    </script>
    ";
?>
