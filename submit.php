<?php
include "koneksi.php";
$nama=$_POST['nama'];
$hasil=$_POST['hasil'];
$query="INSERT INTO ddd (nama,persen) VALUES ('$nama','$hasil')";
$hasilq=mysql_query($query);
?>