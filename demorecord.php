<?php session_start(); ?>
<!DOCTYPE html>
<head><title>signup</title>

<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	
	
	<link rel="stylesheet" href="css/demorecord.css">
    <script src="jquery/jquery.min.js"></script>
  <script src="jquery/bootstrap.min.js"></script>
 <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="jquery/jquery.smooth-scroll.min.js"></script> 
<script src="jquery/signup.js"></script>
<link rel="stylesheet" href="css/docprettysticky.css">
<script src="jquery/prettySticky.js"></script>
 
  <script>
  $(document).ready(function(){
  $(".nav a").smooth<a href="http://www.jqueryscript.net/tags.php?/Scroll/">Scroll</a>({
    offset: -$("nav").outerHeight()

  });

});
</script>
</head>
<body>
<nav>
<div> <a href="#top"><img src="images/DoctorFinder_logo_final.png" alt="Logo" class="logo"></a> </div>
<div class="menu">
<ul class="nav">

        <li class="nav"><a href="docfinder.php"><strong>Home</strong></a></li>
           
        <li class="nav" id="dropdown"><a href="docfinder.php#neighborhood-guides"><strong>Doctors</strong></a></li>
  		
    <li class="nav"><a href="labs.php"><strong>Labs</strong></a></li>
        
<?php
		
	if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED']==1)
	{
		echo '<li class="nav">
        <ul class="nav">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="demorecord.php">Records</a></li>
                <li><a href="logout.php">Logout</a></li>
               </ul>
            </li>
          </ul></li>
            
          
          
';
	}
	else
	{
		 echo'<li class="nav"><a href="login.php"><strong>Log In</strong></a></li>

        <li class="nav"><a href="signup.php"><strong>Sign Up</strong></a></li>';
		session_destroy();
		
	}
	
?>
<script>$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});</script>

        

		
      </ul>

    </div>

  
</nav>



<div class="container">
    <h2><center><strong>Your Appointment Status</strong></center></h2>
        <br>
    <br>
    <div class="stepwizard">
<center>    
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#doctors" type="button" class="btn btn-info btn-circle"><strong>Doctors</strong></a>
            
        </div>
        <div class="stepwizard-step">
            <a href="#labs" type="button" class="btn btn-info btn-circle" ><strong>Labs</strong></a>
            
        </div>
        
        
    </div>
        </center>
</div>
    

    <div class="row setup-content" id="doctors">
    
        <div class="col-xs-12">
            <div class="col-md-12">
                <center><h3><strong>Doctors</strong></h3></center>
				<br>
				<br>
<?php

	$id=$_SESSION['USER_ID'];
	$link=mysqli_connect( 'localhost','root','') ; 
	if(!($link))
		echo 'unable to connect to server'.mysqli_error();
	else
        $db=mysqli_select_db($link,'doctorfinder');
	if(!($link))
		echo 'unable to connect to database'.mysqli_error();
	

echo'<div id="doctors">
    <table class="table table-striped">
    <tr>
        <td><center>S. no.</center></td>
     <th><center>Appointment No</center></th>
        <th><center>Clinic</center></th>
     <th><center>Doctor\'s Name</center></th>
        <th><center>Specialist</center></th>
     
     <th><center>Date</center></th>
     <th><center>Time Slot</center></th>
     <th><center>Appointment Status</center></th>
    </tr>
        <tr>';
		$i=1;
	$qry="select * from visit where pt_id='".$id."' order by date desc";
	$result=mysqli_query($link,$qry);		
	while($row=mysqli_fetch_assoc($result))
	{
		$qry1="select * from clinics where creg_no=".$row['creg_no'];
		$result1=mysqli_query($link,$qry1);
		$row1=mysqli_fetch_assoc($result1);
		$qry2="select * from doctor where reg_no=".$row['reg_no'];
		$result2=mysqli_query($link,$qry2);
		$row2=mysqli_fetch_assoc($result2);
        
		echo'<td><center><strong>'.$i++.'</strong></center></td>
            <td><center><strong>'.$row['receipt_no'].'</strong></center></td>
            <td><center><strong>'.$row1['c_name'].'</strong></center></td>
            <td><center><strong>'.$row2['d_name'].'</strong></center></td>
            <td><center><strong>'.$row2['specialization'].' </strong></center></td>
            
                <td><center><strong>'.$row['date'].'</strong> </center></td>
                <td><center><strong>'.$row['time'].'</strong> </center></td>
                <td><center><strong>Booked</strong> </center></td>
        
        </tr>';
	}
        echo '</table>
    </div>';
   
    ?>            
                
                
                
                
                
                
                
            </div>
        </div>
    </div>
    <div class="row setup-content" id="labs">
        <div class="col-xs-12">
            <div class="col-md-12">
                <center><h3><strong>Labs</strong></h3></center>
               <br>
                <br>
                <!-- File Button --> 
<!-- Text input-->
 <div id="labs">
    <table class="table">
    <tr>
        
        <th><center>S. no.</center></th>
        <th><center>Appointment No</center></th>
     <th><center>Labs</center></th>
        <th><center>Test name</center></th>
        <th><center>Address</center></th>
     <th><center>Date</center></th>
     <th><center>Time Slot</center></th>
     <th><center>Appointment Status</center></th>
    </tr>
        
                                               
                         
        <tr>
            <td><center><strong>1.</strong></center></td>
            <td><center><strong>003 </strong></center></td>
            <td><center><strong>lal Pathology labs</strong></center></td>
            <td><center><strong>Blood test</strong> </center></td>
            <td><center><strong>this this </strong></center></td>
            
            <td><center><strong>16/4/16</strong> </center></td>
            <td><center><strong>9:00</strong> </center></td>
            <td><center><strong>Booked </strong></center></td>
        
        </tr> 
        <tr>
            <td><center><strong>1.</strong></center></td>
            <td><center><strong>003 </strong></center></td>
            <td><center><strong>lal Pathology labs</strong></center></td>
            <td><center><strong>Blood test</strong> </center></td>
            <td><center><strong>this this </strong></center></td>
            
            <td><center><strong>16/4/16</strong> </center></td>
            <td><center><strong>9:00</strong> </center></td> 
            <td><center><strong>Booked </strong></center></td>
        
        </tr> 
        
        </table>
    
    </div>
                
            </div>
        </div>
    </div>
    

</div>
</body>
