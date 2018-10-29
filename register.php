<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Buat Akun</title>
  </head>
  <body>
    <div class="container" style="margin: 0px;">
    	<h1>Buat Akun</h1>
    	<div class="row">
    		<div class="col-md-5">
    			   <form method="POST">
  						<div class="form-group">
    					<label for="exampleInputEmail1">Username</label>
    					<input type="text" class="form-control" id="email1e aria-describedby="email" placeholder="Username" name="username">
    					<small id="emailHelp" class="form-text text-muted">Username</small>
  						</div>
  						<div class="form-group">
    					<label for="password1">Password</label>
    					<input type="password" class="form-control" id="password1" placeholder="Password" name="password">
    					<small id="emailHelp" class="form-text text-muted"><b>WAJIB</b> diisi </small>
  						</div>
  						<div class="form-group">
    					<label for="exampleInputPassword1">Re-Password</label>
    					<input type="password" class="form-control" id="Password1" placeholder="re-Password" name="repassword">
    					<small id="emailHelp" class="form-text text-muted"><b>WAJIB</b> diisi </small>
  						</div>
  						<div class="form-group">
  						<label for="Email">Email</label>
    					<input type="text" class="form-control" id="Email" aria-describedby="email" placeholder="Email" name="email">
    					<small id="emailHelp" class="form-text text-muted">Email anda, wajib di isi</small>
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
$email=$_POST['email'];
$sql="INSERT INTO user (username,password,email) values ('$username','$password','$email')";
if (isset($_POST['submit'])) {
if(mysqli_query($koneksi,$sql)){
 header("location: ../index.php");
}
else{
  echo"Error:".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
}
?>