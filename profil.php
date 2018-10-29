<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Dashboard</title>
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

    <div>
      <form>
      <div>
           <?php
            echo "<a href='edit.php?nim=$nim'>Edit</a>";
            echo "<a href='delete.php?nim=$nim'>Delete</a>";
         ?>
      </div>
   <?php
      
      $sql="SELECT * FROM data where nim='$nim'";
      $hasil=mysql_query($koneksi,$sql);
      $row=mysql_fetch_assoc($hasil);
      echo "<tr>";
      echo "<td>"."<br><br>"."INPUTAN DATA"."</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td colspan=4>"."Nama Depan : ".$row['nama_depan']."<br><br>";
      echo "Nama Belakang : ".$row['nama_belakang']."<br><br>";
      echo "Nim : ".$row['nim']."<br><br>";
      echo "Kelas : ".$row['kelas']."<br><br>";
      echo "Hobi : ".$row['hobi']."<br><br>";
      echo "Genre : ".$row['genre']."<br><br>";
      echo "Tempat Wisata : ".$row['tempat_wisata']."<br><br>";
      echo "Tanggal Lahir : ".$row['tanggal_lahir']."</td>";
      echo "Klik: ".$row['klik']."</td>";
      
      echo "</tr>";
      mysqli_close($koneksi);
      ?>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>