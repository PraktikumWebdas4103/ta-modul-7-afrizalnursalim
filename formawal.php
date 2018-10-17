<html>
<head>
	<title>FORM DATA MAHASISWA</title>
</head>
<body>
<center>
	<form action="proses.php" method="POST">
		<table>
			<tr>
				<td colspan="3" align="left"><h2>FORM MAHASISWA</h2></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td>
					<input type="text" name="nama" required="" maxlength="50"><br>
				</td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td>
					<input type="text" name="nim" required="" maxlength="25"><br>			
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
					<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>					
				</td>
			</tr>
			<tr>
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
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td>
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
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td>
					<input type="text" name="asal" required="">
				</td>
			</tr>
			<tr>
				<td>Moto Hidup</td>
				<td>:</td>
				<td><textarea name="moto_hidup" rows="5" cols="40" required=""></textarea></td>
			</tr>
			<tr>
				<td colspan="3">
					<br>
					<input type="submit" name="submit" value="Daftar" class="submit">
					<input type="reset" name="delete" value="hapus" class="hapus">
				</td>
			</tr>
</html>