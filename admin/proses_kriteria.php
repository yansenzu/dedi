<?php
include('koneksi.php');

$kode_kriteria = $_POST['kode_kriteria'];
$kriteria = $_POST['kriteria'];
$bobot = $_POST['bobot'];

$sql = mysqli_query($koneksi, "INSERT INTO kriteria(kode_kriteria, kriteria, bobot) VALUES ('$kode_kriteria', '$kriteria', '$bobot')");

if($sql){
    echo "
    <script>
    alert('Berhasil tambah data !')
    location.href = 'kriteria.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Gagal tambah data !')
    location.href = 'post_kriteria.php';
    </script>
    ";
}
?>

<?php
$vcs = mysqli_query($koneksi, "SELECT SUM(bobot) as sumbobot FROM kriteria");
$a = mysqli_fetch_assoc($vcs);
$sumbobot = $a['sumbobot'];

$sql = mysqli_query($koneksi, "SELECT id_kriteria FROM kriteria");
while($b = mysqli_fetch_assoc($sql)){
	$id = array();
	$id[] = $b['id_kriteria'];


	foreach ($id as $ids) {

		$sql2 = mysqli_query($koneksi,"SELECT bobot FROM kriteria WHERE id_kriteria = '$ids'");
	    while($c = mysqli_fetch_assoc($sql2)){
		$bobot = array();
		$bobot[] = $c['bobot'];
		foreach ($bobot as $bobots){
			$vv = $bobots / $sumbobot;
			
			$sql3 = mysqli_query($koneksi, "UPDATE kriteria SET normalisasi = '$vv' WHERE id_kriteria = '$ids'");	
		}
		}
	}	
}
?>