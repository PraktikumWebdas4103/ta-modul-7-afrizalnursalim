<?php 



require_once("koneksi.php");

$nama 			= $_POST['nama'];

$nim 			= $_POST['nim'];

$jeniskelamin	= $_POST['jenis_kelamin'];

$programstudi	= $_POST['prodi'];

$fakultas 		= $_POST['fakultas'];

$asal 			= $_POST['asal'];

$moto 		= $_POST['moto_hidup'];



$sql = "INSERT INTO mahasiswa(nama,nim,jenis_kelamin,prodi,fakultas,asal,moto_hidup) 

		VALUES ('$nama', '$nim', '$jeniskelamin', '$programstudi', '$fakultas', '$moto', '$asal')";



if (mysqli_query($conn, $sql)) {

	echo "<center>BERHASIL</center>";



}else{



	echo "Gagal : ". $sql . "<br>" . mysqli_error($conn);

}		



mysqli_close($conn);

echo"<br>";

echo "<center> <button><a href='tampilan.php'>Tampilan</a></button></center>";



?>