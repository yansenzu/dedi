<?php
    
    include 'koneksi.php';
?>
<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SPK - Rekrutmen CV. Motorindo Perkasa</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
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
            <h3><u>DATA LAPORAN PENERIMAAN KARYAWAN</u></h3>

    </center>
   
    <table id="customers">
  <tr>
    <th>Nomor Tabel</th>
    <th>Nama Karyawan</th>
    <th>Nama Pekerjaan</th>
    <th>Nilai Akhir</th>
    <th>Ranking</th>
    <th>Action</th>
  </tr>
    <?php 
        $no = 1;
        $rank = 1;
        $data= mysqli_query($koneksi,"SELECT alternatif.id_pelamar, alternatif.jumlah, job_list.id_job, job_list.title, pelamar.id_pelamar, pelamar.id_job, pelamar.nama, pelamar.hp FROM alternatif, job_list, pelamar WHERE pelamar.id_pelamar = alternatif.id_pelamar AND pelamar.id_job = job_list.id_job ORDER BY alternatif.jumlah DESC");
        while($d = mysqli_fetch_array($data))
        {
    ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['nama']; ?></td>
    <td><?php echo $d['title']; ?></td>
    <td><?php echo $d['jumlah']; ?></td>
    <td><?php echo "Ranking ".$rank++; ?></td>
    <td><a href="email.php?id=<?php echo $d['id_pelamar'];?>">Email</a> | <a href="https://wa.me/<?php echo $d['hp'];?>?text=Selamat%20Anda%20Lolos%20Rekruitmen%20CV.%20Motorindo%20Perkasa.%20Silahkan%20datang%20ke%20Kantor%20yang%20beralamat%20di%20Jl.%20Citra%20No.%2028.%20Terimakasih.">Whatsapp</a> | <a href="detail_pengumuman.php?id=<?php echo $d['id_pelamar'];?>">Detail</a></td>
  </tr>
  <?php
        }
  ?>
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

