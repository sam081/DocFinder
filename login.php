<?php
$key=$_POST['submit'];
	
	
		$login=$_POST['username'];
		$password=$_POST['password'];
		
		if($login && $password)
		{
			$link=mysqli_connect('localhost','root','');
			if(!$link)
			{
				die('Failed to connect ot server: '.mysqli_error());
			}
			$db=mysqli_select_db($link,'doctorfinder');
			if(!$db)
			{
				die('unable to select database'.mysqli_error());
			}
			
			$qry="select * from patient where username='$login' and password='$password'";
			$result=mysqli_query($link,$qry);
			if($result)
			{
				$count=mysqli_num_rows($result);
			}
			else
			{
				include('login1.php');
				echo '<center>Incorrect Username or Password!!</center>';
				exit();
			}
			if($count==1)
			{
				session_start();
				$_SESSION['IS_AUTHENTICATED']=1;
				$_SESSION['USER_ID']=$login;
			//	$_SESSION['NAME']=$result['name'];
				if($key==NULL)
                {
                header('location:docfinder.php');
                    exit();
                }
                else{
                    header('location:clinic.php?key='.$key);
                    exit();
                }
			}
			else	
			{
				include('login1.php');
				echo'<center>Incorrect Username or Password!! </center>';
				exit();
			}
		}
		else{
			include('login1.php');
			echo'<center>Username or Password Missing!!</center>';
			exit();
		}
	
?>