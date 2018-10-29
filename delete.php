<?php
require_once("koneksi.php");
$nim   = $_GET['nim'];
$query="DELETE from data where nim ='$nim'";
mysqli_query($koneksi, $query);
header("location:dashboard.php");
?>