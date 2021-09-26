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
                        <h4 class="page-title">Post Job</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Post Job</li>
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
                            <form class="form-horizontal m-t-30" action="proses_jobs.php" method="post">
                                <div class="form-group">
                                    <label>Job Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label>Kontent</label>
                                    <textarea name="kontent" id="editor1" rows="10" cols="80"></textarea>
                                </div>
                                <script>
                                        CKEDITOR.replace( 'editor1' );
                                </script>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <input type="text" class="form-control" name="kategori">
                                </div>
                                <div class="form-group">
                                    <label>Kualifikasi</label>
                                    <input type="text" class="form-control" name="kualifikasi">
                                </div>
                                <div class="form-group">
                                    <label>Tingkat Pekerjaan</label>
                                    <input type="text" class="form-control" name="tingkat_pekerjaan">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
<?php include('template/footer.php');?>