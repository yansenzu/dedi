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
                                <h4 class="card-title">List Kriteria</h4>
                                <input class="button" type="button" onclick="window.location.href='post_kriteria.php';" value="Tambah Kriteria" />
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Kode Kriteria</th>
                                            <th scope="col">Kriteria</th>
                                            <th scope="col">Bobot</th>
                                            <th scope="col">Normalisasi</th>
                                            <th scope="col">Action</th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('koneksi.php');
                                        $sql = mysqli_query($koneksi, "SELECT * FROM kriteria");
                                        $no = 1;
                                        while($d = mysqli_fetch_array($sql)){
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $no++;?></th>
                                            <td><?php echo $d['kode_kriteria']; ?></td>
                                            <td><?php echo $d['kriteria'];?></td>
                                            <td><?php echo $d['bobot'];?></td>
                                            <td><?php echo $d['normalisasi'];?></td>
                                            <td><a href="edit_kriteria.php?id_kriteria=<?php echo $d['id_kriteria'];?>">Edit</a> | <a href="hapus_kriteria.php?id_kriteria=<?php echo $d['id_kriteria'];?>">Hapus</a></td>
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