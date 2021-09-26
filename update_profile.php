<?php 
include('koneksi.php');
$id_pelamar = $_POST['id_pelamar'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$umur = $_POST['age'];
$hp = $_POST['hp'];
$pendidikan = $_POST['pendidikan'];
$pengalaman = $_POST['pengalaman'];
$cv = $_FILES['cv']['name'];
$cv_tmp = $_FILES['cv']['tmp_name'];
$foto = $_FILES['foto']['name'];
$foto_tmp = $_FILES['foto']['tmp_name'];
$sertifikat_keahlian = $_FILES['sertifikat_keahlian']['name'];
$sertifikat_keahlian_tmp = $_FILES['sertifikat_keahlian']['tmp_name'];
$ijazah = $_FILES['ijazah']['name'];
$ijazah_tmp = $_FILES['ijazah']['tmp_name'];
$surat_kesehatan = $_FILES['surat_kesehatan']['name'];
$surat_kesehatan_tmp = $_FILES['surat_kesehatan']['tmp_name'];

$sql = mysqli_query($koneksi, "UPDATE pelamar SET nama='$nama', email='$email', alamat='$alamat', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', umur='$umur', hp='$hp', pendidikan='$pendidikan', pengalaman='$pengalaman', cv='$cv', foto='$foto', sertifikat_keahlian='$sertifikat_keahlian', ijazah='$ijazah', surat_kesehatan='$surat_kesehatan' WHERE id_pelamar = '$id_pelamar'");
$sql2 = mysqli_query($koneksi, "SELECT nilai FROM pendidikan WHERE parameter = '$pendidikan'");
$nilai_pendidikan = mysqli_fetch_assoc($sql2);
$sql3 = mysqli_query($koneksi,"SELECT nilai FROM usia WHERE parameter = '$umur'");
$nilai_usia = mysqli_fetch_assoc($sql3);
$sql4 = mysqli_query($koneksi, "SELECT nilai FROM pengalaman WHERE parameter = '$pengalaman'");
$nilai_pengalaman = mysqli_fetch_assoc($sql4);

if($sertifikat_keahlian != NULL){
    $nilai_sertifikat = 100;
}
else
{
    $nilai_sertifikat = 10;
}


if($sql){
    move_uploaded_file($cv_tmp, 'file/'.''.$cv);
    move_uploaded_file($foto_tmp, 'file/'.$foto);
    move_uploaded_file($sertifikat_keahlian_tmp, 'file/'.$sertifikat_keahlian);
    echo "
    <script>
    alert('Berhasil update profile !')
    location.href = 'profile.php';
    </script>
    ";
}


$alternatif = mysqli_query($koneksi, "SELECT * FROM alternatif WHERE id_pelamar = '$id_pelamar'");
$d = mysqli_fetch_assoc($alternatif);

if($d['id_pelamar'] == $id_pelamar){
    $update_alternatif = mysqli_query($koneksi, "UPDATE alternatif SET pendidikan='$nilai_pendidikan[nilai]', usia='$nilai_usia[nilai]', pengalaman='$nilai_pengalaman[nilai]', sertifikat_keahlian='$nilai_sertifikat' WHERE id_pelamar = '$id_pelamar'");
}
else
{
    $update_alternatif = mysqli_query($koneksi, "INSERT INTO alternatif (id_pelamar, pendidikan, usia , pengalaman, sertifikat_keahlian) VALUES ('$id_pelamar', '$nilai_pendidikan[nilai]', '$nilai_usia[nilai]', '$nilai_pengalaman[nilai]', '$nilai_sertifikat')");
}
?>