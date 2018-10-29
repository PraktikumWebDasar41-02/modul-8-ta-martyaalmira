<!DOCTYPE html>
<html>
<head>
	<title>Data Baru</title>
</head>
<body>
	<table>
		<form method="POST">
			<tr>
				<td>Nama depan</td>
				<td><input type="text" name="nama_depan"></td>
			</tr>

			<tr>
				<td>Nama belakang</td>
				<td><input type="text" name="nama_belakang"></td>
			</tr>

			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>

			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas"></td>
			</tr>

			<tr>
				<td>Hobi</td>
				<td><select name="hobi">
						<option>Tidur</option>
						<option>Makan</option>
						<option>Mandi</option>
						<option>Begadang</option>	
					</select></td>
			</tr>

			<tr>
				<td>Genre Film</td>
				<td>
					<input type="checkbox" name="genre" value="Horror">Horror
					<input type="checkbox" name="genre" value="Anime">Anime
					<input type="checkbox" name="genre" value="Action">Action
					<input type="checkbox" name="genre" value="Drama">Drama
				</td>
			</tr>

			<tr>
				<td>Tempat Wisata</td>
				<td>
					<input type="checkbox" name="tempat_wisata" value="Bali">Bali
					<input type="checkbox" name="tempat_wisata" value="Tanjung Selor">Tanjung Selor
					<input type="checkbox" name="tempat_wisata" value="Jakarta">Jakarta
					<input type="checkbox" name="tempat_wisata" value="Lombok">Lombok
				</td>
			</tr>

			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>

			<tr>
				<td><button><a href="profil.php">Cek profil anda</a></button></td>
			</tr>


		</form>
	</table>

</body>
</html>

<?php
session_start();
if(isset($_POST['submit'])){
	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
	$nim = $_POST['nim'];
	$kelas = $_POST['kelas'];
	$hobi = $_POST['hobi'];
	$genre = $_POST['genre'];
	$tempat_wisata = $_POST['tempat_wisata'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$cek = "INSERT INTO data VALUES('$nama_depan','$nama_belakang', $nim, '$kelas', '$hobi','$genre', '$tempat_wisata', '$tanggal_lahir')";
	$sql = mysqli_query($konek,$cek);
	if($sql){
		//header("location:view.php");
		echo "Data berhasil";
	}else{
		echo "Data gagal input";
	}
}

?>