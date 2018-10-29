<?php
$koneksi = mysql_connect('localhost','root','','modul8');
if (! $koneksi) {
	die("Konek ke database gagal" . mysqli_connect_error());
}
?>