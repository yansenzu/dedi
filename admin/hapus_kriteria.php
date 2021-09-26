<?php
include('koneksi.php');
$id_kriteria = $_GET['id_kriteria'];
$sql = mysqli_query($koneksi, "DELETE FROM kriteria WHERE id_kriteria = '$id_kriteria'");


if($sql){
    echo "
    <script>
    alert('Berhasil hapus data !')
    location.href = 'kriteria.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Gagal hapus data !')
    location.href = 'kriteria.php';
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