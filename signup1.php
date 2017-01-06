<?php 
//Start the session to see if the user is authenticated user. 
//session_start();  
//validation flag to check that all validations are done 
$validationFlag = true; 
//Check all the required fields are filled 
if(!($_POST['name'] && $_POST['age'] && $_POST['gender'] && $_POST['street_name'] && $_POST['city'] && $_POST['contact_no'] && $_POST['username'] && $_POST['password'] && $_POST['repassword']))
{ 
echo 'All the fields  are compulsary.<br>'; 
$validationFlag = false; 
} 
else
{ 
$name = "'".$_POST['name']."'";
$age = $_POST['age'];
 $gender = "'".$_POST['gender']."'"; 
 $street_name = "'".$_POST['street_name']."'"; 
 $city = "'".$_POST['city']."'";
 $contact_no = $_POST['contact_no']; 
 $username = "'".$_POST['username']."'"; 
 $password = "'".$_POST['password']."'";
 $repassword = "'".$_POST['repassword']."'";
 $email="'".$_POST['email']."'";
}
if($_POST['password']==$_POST['repassword'])
{	
//If all validations are correct, connect to MySQL and execute the query 
if($validationFlag)
{ 
//Connect to mysql server 
$link = mysqli_connect('localhost','root','','doctorfinder');
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysqli_error()); 
} 
//Select database 

//Create Insert query 
$query = "INSERT INTO patient
(username,p_name,age,contact_no,gender,locality,city,e_mail,password) 
VALUES 
($username,$name,$age,$contact_no,$gender,$street_name,$city,$email,$password)"; 
//Execute query 
$results = mysqli_query($link,$query);
}
//Check if query executes successfully 
if($results == FALSE)
echo mysqli_error($link) . '<br>'; 
else 
{
echo 'Data inserted successfully! ';
echo	'<br><hr><h2><a href="login/login.html">Click here to proceed...</a><br>';
}
}
else
{
	echo '<h1><pre > ...Please enter same password....</pre>';
	echo '<h2><em><a href="signup1.php">CLICK HERE TO REGISTER AGAIN.</a></em><h/2>';
}
?>