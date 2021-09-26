<?php
include('koneksi.php');
session_start();
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
<?php include ('template/header.php');?>

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
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
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
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Applicants</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">NAME</th>
                                            <th class="border-top-0">KATEGORI</th>
                                            <th class="border-top-0">TITLE</th>
                                            <th class="border-top-0">DETAIL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        include('koneksi.php');
                                        $applicants = mysqli_query($koneksi, "SELECT job_list.id_job, job_list.title, pelamar.nama, pelamar.kategori, pelamar.id_job, pelamar.id_pelamar FROM job_list,pelamar WHERE job_list.id_job = pelamar.id_job");
                                        while($a = mysqli_fetch_array($applicants)){
                                        ?>
                                        <tr>
                                            <td class="txt-oflo"><?php echo $a['nama'];?></td>
                                            <td><span class="label label-success label-rounded" onclick="window.location.href='kategori.php?kategori=<?php echo $a['kategori'];?>';"><?php echo $a['kategori'];?></span> </td>
                                            <td class="txt-oflo"><?php echo $a['title'];?></td>
                                            <td><button name= "submit"class="button button2"onclick="window.location.href='detail.php?id=<?php echo $a['id_pelamar'];?>';">Detail</button></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Ravenue - page-view-bounce rate -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Jobs Post</h4>
                            </div>
                            <div class="comment-widgets" style="height:430px;">
                                <!-- Comment Row -->
                                <?php
                                        
                                        $sql = mysqli_query($koneksi, "SELECT * FROM job_list");
                                        while($d=mysqli_fetch_array($sql)){
                                        ?>
                                <div class="d-flex flex-row comment-row">
                                    <div class="comment-text active w-100">                                        
                                        <h6 class="font-medium"><?php echo $d['title'];?></h6>
                                        <span class="m-b-15 d-block"><?php echo $d['slug'];?></span>
                                        <div class="comment-footer ">
                                            <span class="text-muted float-right"><?php echo $d['date_post'];?></span>
                                            <span class="label label-success label-rounded"><?php echo $d['kategori'];?>
                                            </span>
                                            <span class="action-icons active">
                                                <a href="edit_job.php?id=<?php echo $d['id_job'];?>">
                                                    <i class="ti-pencil-alt"></i>
                                                </a>
                                            </span>
                                            <span class="action-icons active">
                                                <a href="hapus_job.php?id=<?php echo $d['id_job'];?>">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <!-- Comment Row -->    
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
<?php include('template/footer.php');?>