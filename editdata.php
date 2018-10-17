<?php

require_once('koneksi.php');

$id = $_GET['nim'];

$sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = '$id'");

$row = mysqli_fetch_assoc($sql);

if(isset($_POST['upload'])){

 $nim				= $_POST["nim"];

 $nama 				= $_POST["nama"];

 $jeniskelamin		= $_POST["jenis_kelamin"];

 $programstudi		= $_POST["prodi"];

 $fakultas			= $_POST["fakultas"];

 $asal 				= $_POST["asal"];

 $moto				= $_POST["moto_hidup"];

 $sql = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', jenis_kelamin = '$jeniskelamin', prodi = '$programstudi', fakultas = '$fakultas', asal = '$asal', moto_hidup = '$moto' WHERE nim='$id'";

 if (mysqli_query($conn, $sql)) {

 header('Location: tampilan.php');

 }else {

 echo "Data gagal diupload! " . $sql . "<br?" . mysqli_error($conn);

}

mysqli_close($conn);

}

?>

<!DOCTYPE html>



<html>



<head>

<center>

	<title>Ubah Data Mahasiswa</title>

</head>

<body>

		<h2><center>Ubah Data Mahasiswa</center></h2>

		<form method="POST">

			Nama : <input type="text" name="nama"  minlength="1" maxlength="25"  value="<?php echo $row["nama"];?>"><br><br>

			NIM : <input type="number"  name="nim" maxlength="10"  value="<?php echo $row["nim"];?>"  required ><br><br>

			Jenis Kelamin :	<input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan 

					 		<input type="radio" name="jenis_kelamin" value="Laki - Laki" required>Laki - Laki

					 		<br><br>

			Program Studi :

					<select name="prodi" required="">
						<option value="">Pilih Program Studi</option>
						<option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
						<option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
						<option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
						<option value="SIF">S1 Teknik Informatika</option>
						<option value="S1 Teknik Informatika">S1 Sistem Informasi</option>
						<option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
						<option value="S1 Teknik Telekomunikasi">S1 Teknik Telekomunikasi</option>
						</select><br>
			Fakultas :

					<td>Fakultas</td>

				<td>:</td>

				<td>

					<select name="fakultas" required="">

						<option value="">Pilih Fakultas</option>

						<option value="FIT">Fakultas Ilmu Terapan</option>

						<option value="FKB">Fakultas Komunikasi Bisnis</option>

						<option value="FEB">Fakultas Ekonomi Bisnis</option>

						<option value="FIK">Fakultas Industri Kreatif</option>

						<option value="FIF">Fakultas Informatika</option>

						<option value="FTE">Fakultas Teknik Elektri</option>

						<option value="FRI">Fakultas Rekayasa Industri</option>

					</select><br>

			Asal : <input type="text" name="asal" value="<?php echo $row["asal"];?>"><br><br>

			Motto Hidup : <input type="textarea" name="moto_hidup" value="<?php echo $row["moto_hidup"];?>"><br><br>

			<input type="submit" name="upload" id="upload" value="Kirim" style="width: 120px"></td>

	</form>

</body>

</html>