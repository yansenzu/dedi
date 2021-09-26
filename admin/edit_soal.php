<?php include('template/header.php');?>
<?php
include('koneksi.php');
$id_soal=$_GET['id_soal'];
$sql = mysqli_query($koneksi, "SELECT * FROM tbl_soal WHERE id_soal = '$id_soal'");
$d = mysqli_fetch_array($sql);
?>
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
                            <form class="form-horizontal m-t-30" action="proses_edit_soal.php" method="post">
                                <div class="form-group">
                                    <label>Soal</label>
                                    <input type="hidden" name="id_soal" value="<?php echo $d['id_soal'];?>">
                                    <input type="text" class="form-control" name="soal" value="<?php echo $d['soal'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Pilihan A</label>
                                    <input type="text" class="form-control" name="a" value="<?php echo $d['a'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Pilihan B</label>
                                    <input type="text" class="form-control" name="b" value="<?php echo $d['b'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Pilihan C</label>
                                    <input type="text" class="form-control" name="c" value="<?php echo $d['c'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Pilihan D</label>
                                    <input type="text" class="form-control" name="d" value="<?php echo $d['d'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Kunci Jawaban</label>
                                    <input type="text" class="form-control" name="knc_jawaban" value="<?php echo $d['knc_jawaban'];?>">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
<?php include('template/footer.php');?>