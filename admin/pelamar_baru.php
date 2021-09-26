<?php include('template/header.php');?>
<style>
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">List Kriteria</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">List Kriteria</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List Pelamar Baru</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Title Pekerjaan</th>
                                            <th scope="col">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('koneksi.php');
                                        $sql = mysqli_query($koneksi, "SELECT job_list.id_job, job_list.title, pelamar.nama, pelamar.kategori, pelamar.id_job, pelamar.id_pelamar FROM job_list,pelamar WHERE job_list.id_job = pelamar.id_job");
                                        $no = 1;
                                        while($d = mysqli_fetch_array($sql)){
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $no++;?></th>
                                            <td><?php echo $d['nama']; ?></td>
                                            <td><?php echo $d['kategori'];?></td>
                                            <td><?php echo $d['title'];?></td>
                                            <td><a href="detail.php?id=<?php echo $d['id_pelamar'];?>">Detail</a> | <a href="hapus_pelamar.php?id=<?php echo $d['id_pelamar'];?>">Hapus</a></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('template/footer.php');?>