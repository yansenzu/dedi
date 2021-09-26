<?php
    include "koneksi.php";
    session_start();
    $id_pelamar = $_SESSION['id_pelamar'];
    if(isset($_POST['submit'])){
        $pilihan=$_POST["pilihan"];
        $id_soal=$_POST["id"];
        $jumlah=$_POST['jumlah'];
        $id_job = $_POST['id_job'];
        $kategori = $_POST['kategori'];
        
        $score=0;
        $benar=0;
        $salah=0;
        $kosong=0;
        
        for ($i=0;$i<$jumlah;$i++){
            //id nomor soal
            $nomor=$id_soal[$i];
            
            //jika user tidak memilih jawaban
            if (empty($pilihan[$nomor])){
                $kosong++;
            }else{
                //jawaban dari user
                $jawaban=$pilihan[$nomor];
                
                //cocokan jawaban user dengan jawaban di database
                $query=mysqli_query($koneksi, "select * from tbl_soal where id_soal='$nomor' and knc_jawaban='$jawaban'");
                
                $cek=mysqli_num_rows($query);
                
                if($cek){
                    //jika jawaban cocok (benar)
                    $benar++;
                }else{
                    //jika salah
                    $salah++;
                }
                
            } 
        }
        $hasil = $benar * 10;
        $sql = mysqli_query($koneksi, "UPDATE pelamar SET id_job = '$id_job', kategori = '$kategori', test_tulis = '$hasil' WHERE id_pelamar = '$id_pelamar'");
        $sql2 = mysqli_query($koneksi, "UPDATE alternatif SET test_tulis = '$hasil' WHERE id_pelamar = '$id_pelamar'");
        $oke = "Anda berhasil menjawab " .$benar." dari 10 soal";

        if($sql){
            echo "
            <script>
            alert('Jawaban anda berhasil dikirim, mohon menunggu kurang lebih 3 hari, pihak HRD akan menghubungi anda kembali untuk test wawancara lebih lanjut dan harap pastikan nomor yang anda masukkan sudah VALID. $oke')
            location.href = 'index.php';
            </script>
            ";
        }
    }
?>