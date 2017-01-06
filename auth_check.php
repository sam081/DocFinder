<?php
	
	session_start();
	$key=$_POST['submit1'];
	if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED']==1)
	{
		header('location:clinic.php?key='.$key);
		exit();
	}
	else
	{
		header('location:login1.php?key='.$key);
        session_destroy();
		exit();
	}	
 ?>
