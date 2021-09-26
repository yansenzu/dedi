<?php include('template/header.php');?>
<script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
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
                        <h4 class="page-title">Post Soal</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Post Soal</li>
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
                            <form class="form-horizontal m-t-30" action="proses_soal.php" method="post">
                                <div class="form-group">
                                    <label>Soal</label>
                                    <input type="text" class="form-control" name="soal">
                                </div>
                                <div class="form-group">
                                    <label>Pilihan A</label>
                                    <input type="text" class="form-control" name="a">
                                </div>
                                <div class="form-group">
                                    <label>Pilihan B</label>
                                    <input type="text" class="form-control" name="b">
                                </div>
                                <div class="form-group">
                                    <label>Pilihan C</label>
                                    <input type="text" class="form-control" name="c">
                                </div>
                                <div class="form-group">
                                    <label>Pilihan D</label>
                                    <input type="text" class="form-control" name="d">
                                </div>
                                <div class="form-group">
                                    <label>Kunci Jawaban</label>
                                    <input type="text" class="form-control" name="knc_jawaban" placeholder="Diisi dengan abjad saja">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
<?php include('template/footer.php');?>