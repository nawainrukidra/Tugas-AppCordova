<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $no=$_POST['no'];
 $tipe_motor=$_POST['tipe_motor'];
 $tahun=$_POST['tahun'];
 $sewa=$_POST['sewa'];
 $q=mysqli_query($con,"UPDATE `motor` SET `no`='$no',`tipe_motor`='$tipe_motor',`tahun`='$tahun', `sewa`='$sewa' where `no`='$no'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>