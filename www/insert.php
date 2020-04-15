<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $no=$_POST['no'];
 $tipe_motor=$_POST['tipe_motor'];
 $tahun=$_POST['tahun'];
 $sewa=$_POST['sewa'];
 $q=mysqli_query($con,"INSERT INTO `motor` (`no`,`tipe_motor`,`tahun`,`sewa`) VALUES ('$no','$tipe_motor','$tahun','$sewa')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>