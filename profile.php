<?php include('koneksi.php');
session_start();
$id_pelamar = $_SESSION['id_pelamar'];
$sql = mysqli_query($koneksi, "SELECT * FROM pelamar WHERE id_pelamar = '$id_pelamar'");
$d = mysqli_fetch_assoc($sql);
$status = $_SESSION['status'];
if($status != 'login'){
    echo "
    <script>
    alert('Anda belum login !')
    location.href = 'login.php';
    </script>
    ";
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, AdminWrap lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Nice admin lite design, Nice admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Nice Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>SPK - Rekrutmen CV. Motorindo Perkasa</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="#" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 mr-1"></i>
                                    <div class="ml-1 d-none d-sm-block">
                                        <span>Search</span>
                                    </div>
                                </div>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                   
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php"
                                aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Lowongan</span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
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
                                        <a href="index.php">Home</a>
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
                                    echo "<center class='m-t-30'> <img src='assets/images/users/no-image.jpg'
                                    class='rounded-circle' width='150' />
                                <h4 class='card-title m-t-10'>$d[nama]</h4>
                            </center>"; 
                                }
                                else{
                                    echo "<center class='m-t-30'> <img src='file/$d[foto]'
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
                                        <label class="col-sm-12">Select Age</label>
                                        <div class="col-sm-12">
                                            <select name="age" class="form-control form-control-line">
                                                <option>Select Age</option>
                                                <option>Kurang dari 22</option>
                                                <option>22-25</option>
                                                <option>26-30</option>
                                                <option>31-35</option>
                                                <option>Lebih dari 35</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" name="hp" value="<?php echo $d['hp'];?>" placeholder="+62852******"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Education</label>
                                        <div class="col-sm-12">
                                            <select name="pendidikan" class="form-control form-control-line">
                                                <option>Pilih pendidikan</option>
                                                <option>>S2</option>
                                                <option>S1</option>
                                                <option>D3</option>
                                                <option>SMA</option>
                                                <option>Kurang dari SMA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Experience</label>
                                        <div class="col-sm-12">
                                            <select name="pengalaman" class="form-control form-control-line">
                                                <option>Pilih Pengalaman</option>
                                                <option>>5</option>
                                                <option>4</option>
                                                <option>3</option>
                                                <option>2</option>
                                                <option>1</option>
                                                <option>Kurang dari 1 tahun</option>
                                            </select>
                                        </div>
                                    </div>
                                    <?php 
                                    if($d['cv'] == NULL){
                                        echo "<div class='form-group'>
                                        <label class='col-md-12'>CV</label>
                                        <div class='col-md-12'>
                                            <input type='file'
                                                class='form-control form-control-line' name='cv'>
                                        </div>
                                    </div>";
                                    }
                                    else{
                                        echo "CV anda sudah diupload, silahkan klik link berikut untuk melihat ". "<a href='file/$d[cv]'>CV</a>". " atau anda bisa mengupload kembali";
                                        echo "<div class='form-group'>
                                        <div class='col-md-12'>
                                            <input type='file'
                                                class='form-control form-control-line' name='cv'>
                                        </div>
                                    </div>";
                                    }
                                    ?>
                                    <div class="form-group">
                                        <label class="col-md-12">Photo</label>
                                        <div class="col-md-12">
                                            <input type="file" name="foto"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <?php 
                                    if($d['sertifikat_keahlian'] == NULL){
                                        echo "<div class='form-group'>
                                        <label class='col-md-12'>Sertifikat Keahlian</label>
                                        <div class='col-md-12'>
                                            <input type='file'
                                                class='form-control form-control-line' name='sertifikat_keahlian'>
                                        </div>
                                    </div>";
                                    }
                                    else{
                                        echo "Sertifikat anda sudah diupload, silahkan klik link berikut untuk melihat ". "<a href='file/$d[sertifikat_keahlian]'>Sertifikat Keahlian</a>". " atau anda bisa mengupload kembali";
                                        echo "<div class='form-group'>
                                        <div class='col-md-12'>
                                            <input type='file'
                                                class='form-control form-control-line' name='sertifikat_keahlian'>
                                        </div>
                                    </div>";
                                    }
                                    ?>
                                    <?php 
                                    if($d['ijazah'] == NULL){
                                        echo "<div class='form-group'>
                                        <label class='col-md-12'>Ijazah</label>
                                        <div class='col-md-12'>
                                            <input type='file'
                                                class='form-control form-control-line' name='ijazah'>
                                        </div>
                                    </div>";
                                    }
                                    else{
                                        echo "Ijazah anda sudah diupload, silahkan klik link berikut untuk melihat ". "<a href='file/$d[ijazah]'>Ijazah</a>". " atau anda bisa mengupload kembali";
                                        echo "<div class='form-group'>
                                        <div class='col-md-12'>
                                            <input type='file'
                                                class='form-control form-control-line' name='ijazah'>
                                        </div>
                                    </div>";
                                    }
                                    ?>
                                    <?php 
                                    if($d['surat_kesehatan'] == NULL){
                                        echo "<div class='form-group'>
                                        <label class='col-md-12'>Surat Kesehatan</label>
                                        <div class='col-md-12'>
                                            <input type='file'
                                                class='form-control form-control-line' name='surat_kesehatan'>
                                        </div>
                                    </div>";
                                    }
                                    else{
                                        echo "Surat Kesehatan anda sudah diupload, silahkan klik link berikut untuk melihat ". "<a href='file/$d[surat_kesehatan]'>Surat Kesehatan</a>". " atau anda bisa mengupload kembali";
                                        echo "<div class='form-group'>
                                        <div class='col-md-12'>
                                            <input type='file'
                                                class='form-control form-control-line' name='surat_kesehatan'>
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