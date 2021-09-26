<?php
include 'koneksi.php';
$id_pelamar=$_GET['id'];
$nama=mysqli_query($koneksi, "SELECT * FROM pelamar WHERE id_pelamar='$id_pelamar'");
$z = mysqli_fetch_array($nama);    
?>
<!DOCTYPE html>
<html>
<head>
<title>SPK - Rekrutmen CV. Motorindo Perkasa</title>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<style type="text/css">
        h3{font-family: Cambria,"Times New Roman",serif;}
        h2{font-family: Georgia,serif;}
        h4{text-align: right;}
        h4{font-family: Georgia,serif;}
        .center{text-align:center;}
        .right{text-align:right;}
    </style>
</head>
<body>
    <center>
            <h2 >CV. MOTORINDO PERKASA</h2>
            <h3><u>DATA DETAIL PENERIMAAN KARYAWAN</u></h3>

    </center>
   
    <table id="customers">
  <tr>
    <th>Nomor Tabel</th>
    <th>Pendidikan</th>
    <th>Usia</th>
    <th>Pengalaman</th>
    <th>Keahlian</th>
    <th>Tulis</th>
    <th>Wawancara</th>
    <th>Kesehatan</th>
  </tr>
    <?php 
        
        $no = 1;
        $data= mysqli_query($koneksi,"SELECT * FROM alternatif WHERE id_pelamar='$id_pelamar'");
        while($d = mysqli_fetch_array($data))
        {
    ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['pendidikan']; ?></td>
    <td><?php echo $d['usia']; ?></td>
    <td><?php echo $d['pengalaman']; ?></td>
    <td><?php echo $d['sertifikat_keahlian']; ?></td>
    <td><?php echo $d['test_tulis']; ?></td>
    <td><?php echo $d['wawancara']; ?></td>
    <td><?php echo $d['kesehatan']; ?></td>
  </tr>
  <?php
        }
  ?>
  <center>
      <h2>Tabel Nilai Pelamar <?php echo $z['nama'];?></h2>
  </center>
</table>

<table id="customers">
  <tr>
    <th>Nomor Tabel</th>
    <th>Kode Kriteria</th>
    <th>Kriteria</th>
    <th>Bobot</th>
    <th>Normalisasi</th>
  </tr>
    <?php 
        $no = 1;
        $data= mysqli_query($koneksi,"SELECT * FROM `kriteria`");
        while($d = mysqli_fetch_array($data))
        {
    ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['kode_kriteria']; ?></td>
    <td><?php echo $d['kriteria']; ?></td>
    <td><?php echo $d['bobot']; ?></td>
    <td><?php echo $d['normalisasi']; ?></td>
  </tr>
  <?php
        }
  ?>
  <center>
      <h2>Tabel Normalisasi Bobot</h2>
  </center>
</table>

<table id="customers">
  <tr>
    <th>Nomor Tabel</th>
    <th>Pendidikan</th>
    <th>Usia</th>
    <th>Pengalaman</th>
    <th>Keahlian</th>
    <th>Tulis</th>
    <th>Wawancara</th>
    <th>Kesehatan</th>
    <th>Jumlah</th>
  </tr>
    <?php 
    $no = 1;
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
    ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $pendidikan; ?></td>
    <td><?php echo $usia; ?></td>
    <td><?php echo $pengalaman; ?></td>
    <td><?php echo $keahlian; ?></td>
    <td><?php echo $tulis; ?></td>
    <td><?php echo $wawancara; ?></td>
    <td><?php echo $kesehatan; ?></td>
    <td><?php echo $jumlah; ?></td>
  </tr>
  <center>
      <h2>Tabel Perhitungan Metode</h2>
  </center>
</table>
    <h4>Pekanbaru, <?php date_default_timezone_set('Asia/Jakarta'); echo date('d F Y');?> | Pukul <?php echo date('h:i:s');?> </h4>
<!--
    <script>
        window.print();
        </script>
 --><script src="laporan/js/bootstrap.js"></script>
<script src="laporan/js/bootstrap.min.js"></script>
<script src="laporan/js/jquery.js"></script>
</body>

</html>

