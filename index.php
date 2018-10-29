<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <body>
    <div class="container" style="margin: 50px;">
    	<h1>Login.</h1><br>
    	<div class="row">
    		<div class="col-md-4">
    			   <form method="POST" action="dashboard"> 
  						<div class="form-group">
    					<label for="username">Username</label>

    					<input type="text" class="form-control" id="username" aria-describedby="username" placeholder="Username" name="username">

    					<small id="username" class="form-text text-muted">Username anda</small>
  						</div>

  						<div class="form-group">
    					<label for="email">Email</label>

    					<input type="text" class="form-control" id="email" aria-describedby="email" placeholder="Email" name="email">

    					<small id="email" class="form-text text-muted">Email anda, wajib di isi</small>
  						</div>


  						<div class="form-group">
    					<label for="Password">Password</label>
    					<input type="password" class="form-control" id="Password" placeholder="Password anda" name="password">
    					<small id="password" class="form-text text-muted">Wajib diisi </small>
  						</div>


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
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM user WHERE username='$username' && password='$password' && email='$email'";
$hasil=mysqli_query($koneksi,$sql);
if(mysqli_num_rows($hasil)==0){
 echo "Akun Tidak Terdaftar";
 header("location:index.php");
}else{
	$row=mysqli_fetch_assoc($hasil);
	if($row['username']== $username && $row['password']== $password){
		header("location:dashboard.php");
	}else{
		echo "Data Kurang Tepat, Ulangi!!!";
	}
}
?>
