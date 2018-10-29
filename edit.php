<?php
session_start();
require_once("koneksi.php");
$nim=$_SESSION['nim']; 
$data =mysqli_query($koneksi, "SELECT * from data where nim='$nim'");
$row=mysqli_fetch_array($data);
$genre=explode(",",$row["genre"]);
$tempat_wisata[]=explode(",",$row["tempat_wisata"]);
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Buat Akun</title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Martya</a>
          <div class="container" style="width: 100px;">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link" href="profil.php">Profil </a>
          </li>
          <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="edit.php">Edit</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="register.php">Logout</a>
        </li>
        </ul>
        </div>
      </nav>
    </div>

    <div class="container" style="margin: 0px;">
    	<h1>Editor.</h1>
    	<div class="row">
    		<div class="col-md-5">
    			   <form method="POST" action="dashboard.php">
  						<div class="form-group">
    					<label for="nama_depan">Nama Depan</label>
    					<input type="text" class="form-control" id="nama_depan" aria-describedby="namadepan" placeholder="nama depan anda" name="nama_depan" value="<?php echo $row['nama_depan']; ?>" name="nama_depan">
    					</div>
    					<div class="form-group">
    					<label for="nama_belakang">Nama Belakang</label>
    					<input type="text" class="form-control" id="nama_belakang" aria-describedby="nama_belakang" placeholder="nama belakang anda" name="nama_belakang" value="<?php echo $row['nama_belakang']; ?>" name="nama_belakang">
  						</div>
  						<div class="form-group">
    					<label for="nim">NIM</label>
    					<input type="text" class="form-control" id="nim" aria-describedby="nim" placeholder="NIM" name="nim" value="<?php echo $row['nim']; ?>" name="nim">
  						</div>
  						<div class="form-group">
    					<label for="kelas">Kelas</label>
    					<input type="text" class="form-control" id="kelas" aria-describedby="kelas" placeholder="kelas anda" name="kelas" value="<?php echo $row['kelas']; ?>" name="kelas">
  						</div>
  						<div class="form-group">
    					<label for="hobi">Hobi</label>
    					<input type="text" class="form-control" id="hobi" aria-describedby="hobi" placeholder="hobby anda" name="hobi" value="<?php echo $row['hobi']; ?>" name="hobi">
  						</div>
  						<div class="form-group">
    					<label for="tanggal_lahir">Tanggal Lahir</label>
    					<input type="date" class="form-control" id="tanggal_lahir" aria-describedby="emailHelp" placeholder="tanggal kelahiran anda" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" name="tanggal_lahir">
  						</div>
  						<tr>
  						<td>Tempat Wisata</td><br>
  						<td>
                			<input type="checkbox" name="tempat_wisata[]" value="Pulau Seribu"<?php if(in_array('Pulau Seribu',$tempat_wisata)):echo'checked';endif?> >Pulau Seribu<br>
                			<input type="checkbox" name="tempat_wisata[]" value="Lombok"<?php if(in_array('Lombok',$tempat_wisata)):echo'checked';endif?> >Lombok
                			<br>
                			<input type="checkbox" name="tempat_wisata[]" value="Bali"<?php if(in_array('Bali',$tempat_wisata)):echo'checked';endif?> >Bali<br>
                			<input type="checkbox" name="tempat_wisata[]" value="Maluku" <?php if(in_array('Maluku',$tempat_wisata)):echo'checked';endif?> >Maluku</td><br>
        				</tr>
        				<tr>
        					<td>Genre Film</td><br>
        					<td>
                			<input type="checkbox" name="genre[]" value="Action" <?php if(in_array('Action',$genre)):echo'checked'; endif ?> >Action<br>
                			<input type="checkbox" name="genre[]" value="Romance" <?php if(in_array('Romance',$genre)):echo'checked'; endif ?> >Romance<br>
                			<input type="checkbox" name="genre[]" value="Fiksi" <?php if(in_array('Action',$genre)):echo'checked'; endif ?> >Fiksi<br>
                      <input type="checkbox" name="genre[]" value="Fantasi" <?php if(in_array('Fantasi',$genre)):echo'checked'; endif ?> >Fantasi
                			<input type="checkbox" name="genre[]" value="Comedy" <?php if(in_array('Drama',$genre)):echo'checked'; endif ?> >Comedy
            				</td>
        				</tr>

  						<div class="form-group form-check">
    					<input type="checkbox" class="form-check-input" id="exampleCheck1">
    					<label class="form-check-label" for="exampleCheck1">Check me out</label>
  						</div>
  						<button type="submit" class="btn btn-primary" name="submit">Submit</button>
					</form>
    		</div>
    	</div>
    </div>
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

<?php
require_once("koneksi.php");
$namadepan=$_POST['nama_depan'];
$namabelakang= $_POST['nama_belakang'];
$nim= $_POST['nim'];
$kelas= $_POST['kelas'];
$hobi= $_POST['hobi'];
$genre= $_POST['genre'];
$tempatwisata= $_POST['tempat_wisata'];
$sql= " UPDATE data SET nama_depan='$nama_depan', nama_belakang='$nama_belakang' ,nim='$nim',kelas='$kelas', hobi='$hobi', genre='$genre', tempat_wisata='$tempat_wisata',tanggal_lahir='$tanggal_lahir' where nim='$nim'";
if(mysqli_query($koneksi, $sql)){
	header("Location:dashboard.php");
}else{
	echo "Error :".$sql."<br>". mysql_error($koneksi);
}
?>