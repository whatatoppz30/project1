    include 'db.php';
 $_SESSION['acc_name']='TEST SESSION';
//

    if(isset($_POST['signin'])){

      	$select="SELECT * FROM `tblaccount` WHERE acc_username='$_POST[login_username]' AND acc_password='$_POST[login_password]' LIMIT 1";
    	$runselect=mysqli_query($conn, $select);

    	// echo mysqli_num_rows($runselect);
    	if(mysqli_num_rows($runselect)==1)
    	{
		    $_SESSION['status']='1';

            $row = mysqli_fetch_assoc($runselect);
            $_SESSION['acc_name']='ssss';
			  
              echo "1"; 

    	}else{
		    $_SESSION['status']='0';

		    echo "0"; 

    	}

    }