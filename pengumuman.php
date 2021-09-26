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
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
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
   <!-- Responsive navbar-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-3">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Back</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    <br></br>
    <center>
            <h2 >CV. MOTORINDO PERKASA</h2>
            <h3><u>INFORMASI SEMENTARA PENERIMAAN KARYAWAN</u></h3>

    </center>
   
    <table id="customers">
  <tr>
    <th>Nomor Tabel</th>
    <th>Nama Karyawan</th>
    <th>Nama Pekerjaan</th>
    <th>Ranking</th>
  </tr>
    <?php 
        $no = 1;
        $rank = 1;
        $data= mysqli_query($koneksi,"SELECT alternatif.id_pelamar, alternatif.jumlah, job_list.id_job, job_list.title, pelamar.id_pelamar, pelamar.id_job, pelamar.nama FROM alternatif, job_list, pelamar WHERE pelamar.id_pelamar = alternatif.id_pelamar AND pelamar.id_job = job_list.id_job ORDER BY alternatif.jumlah DESC");
        while($d = mysqli_fetch_array($data))
        {
    ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['nama']; ?></td>
    <td><?php echo $d['title']; ?></td>
    <td><?php echo "Ranking ".$rank++; ?></td>
  </tr>
  <?php
        }
  ?>
</table>
<h4><strong>Pekanbaru, <?php date_default_timezone_set('Asia/Jakarta'); echo date('d F Y');?> | Pukul <?php echo date('h:i:s');?> </strong></h4>
       <br></br>
    <strong>Informasi:</strong>
    <br>Untuk Pelamar yang dinyatakan lulus seleksi akan diinformasikan melalui E-Mail atau Whatsapp</br>

    
<!--
    <script>
        window.print();
        </script>
 --><script src="laporan/js/bootstrap.js"></script>
<script src="laporan/js/bootstrap.min.js"></script>
<script src="laporan/js/jquery.js"></script>
</body>

</html>

