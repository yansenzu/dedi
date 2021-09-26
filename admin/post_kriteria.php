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
                        <h4 class="page-title">Post Kriteria</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Post Kriteria</li>
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
                        <div class="card card-body">
                            <form class="form-horizontal m-t-30" action="proses_kriteria.php" method="post">
                                <div class="form-group">
                                    <label>Kode Kriteria</label>
                                    <input type="text" class="form-control" name="kode_kriteria">
                                </div>
                                <div class="form-group">
                                    <label>Kriteria</label>
                                    <input type="text" class="form-control" name="kriteria">
                                </div>
                                <div class="form-group">
                                    <label>Bobot</label>
                                    <input type="text" class="form-control" name="bobot">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
<?php include('template/footer.php');?>