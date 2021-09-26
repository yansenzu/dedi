<?php
include('koneksi.php');
$id_pelamar = $_POST['id_pelamar'];
$wawancara = $_POST['wawancara'];
$surat_kesehatan = $_POST['surat_kesehatan'];
$keterangan = $_POST['keterangan'];
$catatan = $_POST['catatan'];

$sql = mysqli_query($koneksi, "UPDATE alternatif set wawancara='$wawancara', kesehatan='$surat_kesehatan' WHERE id_pelamar = '$id_pelamar'");
$lol = mysqli_query($koneksi, "UPDATE pelamar SET keterangan='$keterangan', catatan='$catatan' WHERE id_pelamar = '$id_pelamar'");
//ambil data alternatif
$query = mysqli_query($koneksi, "SELECT * FROM alternatif WHERE id_pelamar = '$id_pelamar'");
$a = mysqli_fetch_array($query);

//cari utility
$u_pendidikan = $a['pendidikan'] / 100;
$u_usia = $a['usia'] / 100;
$u_pengalaman = $a['pengalaman'] / 100;
$u_keahlian = $a['sertifikat_keahlian'] / 100;
$u_tulis = $a['test_tulis'] / 100;
$u_wawancara = $a['wawancara'] / 100;
$u_kesehatan = $a['kesehatan'] / 100;

//ambil data bobot kriteria
$query2 = mysqli_query($koneksi, "SELECT * FROM kriteria WHERE kode_kriteria = 'C1'");
$b = mysqli_fetch_array($query2);
$b_pendidikan = $b['normalisasi'];

$query3 = mysqli_query($koneksi, "SELECT * FROM kriteria WHERE kode_kriteria = 'C2'");
$c = mysqli_fetch_array($query3);
$c_usia = $c['normalisasi'];

$query4 = mysqli_query($koneksi, "SELECT * FROM kriteria WHERE kode_kriteria = 'C3'");
$d = mysqli_fetch_array($query4);
$d_pengalaman = $d['normalisasi'];

$query5 = mysqli_query($koneksi, "SELECT * FROM kriteria WHERE kode_kriteria = 'C4'");
$e = mysqli_fetch_array($query5);
$e_keahlian = $e['normalisasi'];

$query6 = mysqli_query($koneksi, "SELECT * FROM kriteria WHERE kode_kriteria = 'C5'");
$f = mysqli_fetch_array($query6);
$f_tulis = $f['normalisasi'];

$query7 = mysqli_query($koneksi, "SELECT * FROM kriteria WHERE kode_kriteria = 'C6'");
$g = mysqli_fetch_array($query7);
$g_wawancara = $g['normalisasi'];

$query8 = mysqli_query($koneksi, "SELECT * FROM kriteria WHERE kode_kriteria = 'C7'");
$h = mysqli_fetch_array($query8);
$h_kesehatan = $h['normalisasi'];

//cari nilai utility
$pendidikan = $u_pendidikan * $b_pendidikan;
$usia = $u_usia * $c_usia;
$pengalaman = $u_pengalaman * $d_pengalaman;
$keahlian = $u_keahlian * $e_keahlian;
$tulis = $u_tulis * $f_tulis;
$wawancara = $u_wawancara * $g_wawancara;
$kesehatan = $u_kesehatan * $h_kesehatan;

$jumlah = $pendidikan + $usia + $pengalaman + $keahlian + $tulis + $wawancara + $kesehatan;

$sql2 = mysqli_query($koneksi, "UPDATE alternatif SET jumlah = '$jumlah' WHERE id_pelamar = '$id_pelamar'");

if($sql){
    echo "
    <script>
    alert('Berhasil update data !')
    location.href='index.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Gagal update data !')
    location.href='index.php';
    </script>
    ";
}
?>