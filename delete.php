<?php

require_once("koneksi.php");
$id = $_GET["nim"];
$sql = "DELETE FROM mahasiswa WHERE nim = $id";

if (mysqli_query($conn, $sql)) {
    echo "<center> Data berhasil Dihapus <center>";
    echo "<br>";
    echo "<button><a href='formawal.php'>Form Awal</a></button>";
}else {
    echo "Gagal :".$sql."<br>".mysqli_error($conn);

}
?>
