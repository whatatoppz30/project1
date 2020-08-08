<?php
session_start();
ob_start();
    include 'include/db.php';
//

    if(isset($_POST['signin'])){

      	$select="SELECT * FROM `tblaccount` WHERE acc_username='$_POST[login_username]' AND acc_password='$_POST[login_password]' LIMIT 1";
    	$runselect=mysqli_query($conn, $select);

    	// echo mysqli_num_rows($runselect);
    	if(mysqli_num_rows($runselect)==1)
    	{


		    $_SESSION['status']='1';

            $row = mysqli_fetch_assoc($runselect);
            $_SESSION['acc_name']=$row['acc_name'];
             $_SESSION['acc_id']=$row['acc_id'];
			  
              echo "1"; 

              //login logs
              date_default_timezone_set("Asia/Bangkok");
              $datelog = date('Y-m-d h:i');
                $insertlog="INSERT INTO `tbllogs`(`userid`,`username`, `datelog`, `logaction`) VALUES ('$row[acc_id]','$row[acc_name]','$datelog','LOG-IN')";
                $runinsertlog=mysqli_query($conn, $insertlog);

    	}else{
		    $_SESSION['status']='0';

		    echo "0"; 

    	}

    }
 ?>