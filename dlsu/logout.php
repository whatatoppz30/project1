<?php
session_start();
ob_start();
 include 'include/db.php';
 //login logs

 echo $_SESSION['acc_id'];

$select="SELECT * FROM `tblaccount` WHERE acc_id='$_SESSION[acc_id]' LIMIT 1";
    		$runselect=mysqli_query($conn, $select);
    		$row = mysqli_fetch_assoc($runselect);

              date_default_timezone_set("Asia/Bangkok");
              $datelog = date('Y-m-d h:i');


              echo $row['acc_name'];
                $insertlog="INSERT INTO `tbllogs`(`userid`,`username`, `datelog`, `logaction`) VALUES ($_SESSION[acc_id],'$row[acc_name]','$datelog','LOG-OUT')";
                 $runinsertlog=mysqli_query($conn, $insertlog);


if(session_destroy()){
	header('Location:index.php');
}

 ?>