<?php
include('koneksi.php');
session_start();
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
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php">SPK - Rekrutmen CV. Motorindo Perkasa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="pengumuman.php">Pengumuman</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container px-4 px-lg-3">
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body">
                    <img src='uui.png'>
                    <h1>LOWONGAN KERJA</h1>
                    <h4>Selamat Datang!! Mari bergabung bersama kami untuk mendapatkan karir yang lebih baik</h4>
                </div>
            </div>
        </div>
        <div class="container px-4 px-lg-3">
        <h5>Silahkan lamar pekerjaan sesuai dengan profesi anda!</h5>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM job_list");
            while($d = mysqli_fetch_array($sql)){
            ?>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $d['title'];?></h2>
                            <p class="card-text"><?php echo $d['slug'];?></p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="info.php?id=<?php echo $d['id_job'];?>">More Info</a></div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
        <div class="container px-4 px-lg-3">
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body">
                    <h2>Tentang Kami</h2>
                    <h5>CV. MOTORINDO PERKASA adalah perusahaan yang bergerak dibidang penjualan alat-alat yang berhungan dengan Safety
                        dan Fire Equipment (Peralatan pemadan dan keselamatan). CV Motorindo Perkasa ini beralamat di jalan Labersa, Simpang
                        Tiga , Bukit Raya, Pekanbaru.</h5>
                </div>
            </div>
        </div>
 
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-1 py-2 text-left">
                <div class="py-5 bg-dark">
                    <left><img src='22.png' width=12%></left>
                    <h2>CV. MOTORINDO PERKASA</h2>
                    <strong>Address :</strong>
                    <br> Jl. Citra No. 28 Simpang Tiga Bukit Raya Pekanbaru Riau 28284</br>
                    <strong>Phone/Fax</strong>
                    <br> +62 761 787 6407</br>
                    <strong>Email</strong>
                    <br> motorindo@yahoo.com</br>
                </div>
            </div>
      

        <!-- Footer-->
        <footer class="py-2 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
