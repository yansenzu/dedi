<?php
include('koneksi.php');
session_start();
$id = $_GET['id'];
$id_job = $_GET['id'];
$kategori = $_GET['kategori'];
$status = $_SESSION['status'];
$nik = $_SESSION['nik'];
if($status != 'login'){
    echo "
    <script>
    alert('Anda belum login !')
    location.href = 'login.php';
    </script>
    ";
}
?>
<?php 
$sql = mysqli_query($koneksi, "SELECT * FROM pelamar WHERE cv IS NULL AND nik = '$nik'");
$data = mysqli_num_rows($sql);
$sql2 = mysqli_query($koneksi, "SELECT * FROM pelamar WHERE pendidikan IS NULL AND nik = '$nik'");
$data2 = mysqli_num_rows($sql2);
$sql3 = mysqli_query($koneksi, "SELECT * FROM pelamar WHERE umur IS NULL AND nik = '$nik'");
$data3 = mysqli_num_rows($sql3);
$sql4 = mysqli_query($koneksi, "SELECT * FROM pelamar WHERE pengalaman IS NULL AND nik = '$nik'");
$data4 = mysqli_num_rows($sql4);
$sql5 = mysqli_query($koneksi, "SELECT * FROM pelamar WHERE sertifikat_keahlian IS NULL AND nik = '$nik'");
$data5 = mysqli_num_rows($sql5);
if($data == 1)
{
    echo "
    <script>
    alert('Silahkan upload CV dan lengkapi data profile anda terlebih dahulu')
    location.href = 'profile.php';
    </script>
    ";
}
else if($data2 == 1){
    echo "
    <script>
    alert('Silahkan lengkapi data pendidikan anda terlebih dahulu')
    location.href = 'profile.php';
    </script>
    ";
}
else if($data3 == 1){
    echo "
    <script>
    alert('Silahkan lengkapi data usia anda terlebih dahulu')
    location.href = 'profile.php';
    </script>
    ";
}
else if($data4 == 1){
    echo "
    <script>
    alert('Silahkan lengkapi data pengalaman anda terlebih dahulu')
    location.href = 'profile.php';
    </script>
    ";
}
else if($data5 == 1){
    echo "
    <script>
    alert('Silahkan lengkapi data sertifikat keahlian anda terlebih dahulu')
    location.href = 'profile.php';
    </script>
    ";
}
?>
<?php
include('koneksi.php');
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"SELECT * FROM job_list WHERE id_job='$id'");
$d = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
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
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Test Online</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Test Online Karyawan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="pengumuman.php">Pengumuman</a></li>
                        <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                            <table>
                                <?php
                            $hasil=mysqli_query($koneksi, "select * from tbl_soal");
        $jumlah=mysqli_num_rows($hasil);
        $urut=0;
        while($row =mysqli_fetch_array($hasil))
        {
            $id=$row["id_soal"];
            $pertanyaan=$row["soal"];
            $pilihan_a=$row["a"];
            $pilihan_b=$row["b"];
            $pilihan_c=$row["c"];
            $pilihan_d=$row["d"]; 
            
            ?>
            <form method="post" action="jawab.php">
            <input type="hidden" name="id_job" value="<?php echo $id_job; ?>">
            <input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
            <input type="hidden" name="id[]" value=<?php echo $id; ?>>
            <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
            <tr>
                  <td width="17"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
                  <td width="430"><font color="#000000"><?php echo "$pertanyaan"; ?></font></td>
            </tr>
            <?php
                if (!empty($row["gambar"])) {
                    echo "<tr><td></td><td><img src='foto/$row[gambar]' width='200' hight='200'></td></tr>";
                }
            ?>
            <tr>
                  <td height="21"><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
               A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> 
                <?php echo "$pilihan_a";?></font> </td>
            </tr>
            <tr>
                  <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
               B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> 
                <?php echo "$pilihan_b";?></font> </td>
            </tr>
            <tr>
                  <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
              C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> 
                <?php echo "$pilihan_c";?></font> </td>
            </tr>
            <tr>
                <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
              D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> 
                <?php echo "$pilihan_d";?></font> </td>
            </tr>
            
        <?php
        }
        ?>
            </table>
                </div>
                <button name= "submit"class="button button2" onclick="window.location.href='tertulis.php?id=<?php echo $id;?>'">Submit</button>
            </div>
    </form>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
