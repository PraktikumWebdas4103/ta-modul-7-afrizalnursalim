<?php

require_once("koneksi.php");

?>

<?php

		$sql = "SELECT * FROM mahasiswa";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0){

			while($data = mysqli_fetch_assoc($result)){

				?>

<form>

	<table>

		<tr>

			<td>Nama</td>

			<td>:</td>

			<td><?php echo $data['nama'];?></td>

		</tr>

		<tr>

			<td>NIM</td>

			<td>:</td>

			<td><?php echo $data['nim'];?></td>

		</tr>

		<tr>

			<td>Jenis Kelamin</td>

			<td>:</td>

			<td><?php echo $data['jenis_kelamin'];?></td>

		</tr>

		<tr>

			<td>Program Study</td>

			<td>:</td>

			<td><?php echo $data['prodi'];?></td>

		</tr>

		<tr>

			<td>Fakultas</td>

			<td>:</td>

			<td><?php echo $data['fakultas'];?></td>

		</tr>

		<tr>

			<td>Asal</td>

			<td>:</td>

			<td><?php echo $data['asal'];?></td>

		</tr>

		<tr>

			<td>motto hidup</td>

			<td>:</td>

			<td><?php echo $data['moto_hidup'];?></td>

		</tr>

	</table>

</form>