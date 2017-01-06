<?php
	session_start();
	$key=$_POST['submit'];         //doctor id
	$id=$_SESSION['USER_ID'];         // patients id
	if($key && $id)
	{
		$link=mysqli_connect('localhost','root','');
			if(!$link)
			{
				die('Failed to connect ot server: '.mysqli_error());
			}
			$db=mysqli_select_db($link,'doctorfinder');
			if(!$db)
			{
				die('unable to select database');
			}
			
			$qry="select * from availablity where sno=".$key;
			$result=mysqli_query($link,$qry);
			$row=mysqli_fetch_assoc($result);
			echo ''.$row['reg_no'].' '.$row['creg_no'].' '.$row['sno'].''; 
				
		//doctors details		
			$qry1="select * from doctor where reg_no=".$row['reg_no'];
			$result1=mysqli_query($link,$qry1);
			$row1=mysqli_fetch_assoc($result1);
			echo ''.$row1['d_name'].''.$row1['specialization'].''.$row1['DEGREE'].''; 
	}
?>