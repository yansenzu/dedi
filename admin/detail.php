<?php include('koneksi.php');
session_start();
$id_pelamar = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM pelamar WHERE id_pelamar = '$id_pelamar'");
$d = mysqli_fetch_assoc($sql);
?>
<?php include('template/header.php');?>
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
                        <h4 class="page-title">Profile</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                if($d['foto'] == NULL){
                                    echo "<center class='m-t-30'> <img src='../assets/images/users/no-image.jpg'
                                    class='rounded-circle' width='150' />
                                <h4 class='card-title m-t-10'>$d[nama]</h4>
                            </center>"; 
                                }
                                else{
                                    echo "<center class='m-t-30'> <img src='../file/$d[foto]'
                                    class='rounded-circle' width='150' />
                                <h4 class='card-title m-t-10'>$d[nama]</h4>
                            </center>"; 
                                }
                                ?>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><?php echo $d['email'];?></h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6><?php echo $d['hp'];?></h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6><?php echo $d['alamat'];?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post" action="update_profile.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="hidden" name="id_pelamar" value="<?php echo $id_pelamar; ?>">
                                            <input type="text" name="nama" placeholder="Your Name"
                                                class="form-control form-control-line" value="<?php echo $d['nama'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="email" placeholder="youremail@domain.com"
                                                class="form-control form-control-line"
                                                id="example-email" value="<?php echo $d['email'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" name="password" value="password"
                                                class="form-control form-control-line" value="<?php echo $d['password'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Address</label>
                                        <div class="col-md-12">
                                            <input type="text" name="alamat" placeholder="Your Address"
                                                class="form-control form-control-line" value="<?php echo $d['alamat'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Place of Birth</label>
                                        <div class="col-md-12">
                                            <input type="text" name="tmp_lahir" placeholder="Your Place of Birth"
                                                class="form-control form-control-line" value="<?php echo $d['tmp_lahir'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Date of Birth</label>
                                        <div class="col-md-12">
                                            <input type="date" name="tgl_lahir" placeholder="Your Date of Birth"
                                                class="form-control form-control-line" value="<?php echo $d['tgl_lahir'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Age</label>
                                        <div class="col-md-12">
                                            <input type="text" name="umur" placeholder="Your Age"
                                                class="form-control form-control-line" value="<?php echo $d['umur'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" name="hp" value="<?php echo $d['hp'];?>" placeholder="123 456 7890"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Education</label>
                                        <div class="col-md-12">
                                            <input type="text" name="pendidikan" value="<?php echo $d['pendidikan'];?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Experience</label>
                                        <div class="col-md-12">
                                            <input type="text" name="pengalaman" value="<?php echo $d['pengalaman'];?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <?php 
                                    if($d['cv'] == NULL){
                                        echo "CV tidak di upload";
                                        echo "<div class='form-group'>
                                        <div class='col-md-12'>
                                        </div>
                                    </div>";
                                    }
                                    else{
                                        echo "CV anda sudah diupload, silahkan klik link berikut untuk melihat ". "<a href='../file/$d[cv]'>Lihat CV</a>". "";
                                        echo "<div class='form-group'>
                                        <div class='col-md-12'>
                                        </div>
                                    </div>";
                                    }
                                    ?>
                                    <?php 
                                    if($d['sertifikat_keahlian'] == NULL){
                                        echo "Sertifikat Keahlian tidak di upload";
                                        echo "<div class='form-group'>
                                        <div class='col-md-12'>
                                            <input type='text'
                                                class='form-control form-control-line' placeholder= 'Input Nilai' name='sertifikat_keahlian'>
                                        </div>
                                    </div>";
                                    }
                                    else{
                                        echo "Sertifikat anda sudah diupload, silahkan klik link berikut untuk melihat ". "<a href='../file/$d[sertifikat_keahlian]'>Lihat Sertifikat Keahlian</a>". " ";
                                        echo "<div class='form-group'>
                                        <div class='col-md-12'>
                                        </div>
                                    </div>";
                                    }
                                    ?>
                                    <div class="form-group">
                                        <label class="col-md-12">Nilai Wawancara</label>
                                        <div class="col-md-12">
                                            <input type="text" name="wawancara" value="<?php echo $d['wawancara'];?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <?php 
                                    if($d['surat_kesehatan'] == NULL){
                                        echo "Surat Kesehatan tidak di upload";
                                        echo "<div class='form-group'>
                                        <div class='col-md-12'>
                                        </div>
                                    </div>";
                                    }
                                    else{
                                        echo "Surat Kesehatan anda sudah diupload, silahkan klik link berikut untuk melihat ". "<a href='../file/$d[surat_kesehatan]'>Lihat Sertifikat Keahlian</a>". "";
                                        echo "<div class='form-group'>
                                        <div class='col-md-12'>
                                            <input type='text'
                                                class='form-control form-control-line' placeholder= 'Input Nilai' name='surat_kesehatan'>
                                        </div>
                                    </div>";
                                    }
                                    ?>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Nice admin. Designed and Developed by
                <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
</body>

</html>