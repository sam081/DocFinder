<?php
session_start();
?>
<!DOCTYPE html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	
	
	<link rel="stylesheet" href="main2.css">
    <script src="jquery/jquery.min.js"></script>
  <script src="jquery/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="css/docprettysticky.css">
  
  
  <!--new try -->
 <!--new try-->
  
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="jquery/prettySticky.js"></script>

<script src="jquery/jquery.smooth-scroll.min.js"></script> 
  
  <script>
  $(document).ready(function(){
  $(".nav a").smooth<a href="http://www.jqueryscript.net/tags.php?/Scroll/">Scroll</a>({
    offset: -$("nav").outerHeight()

  });

});
</script>
  <style>.col-md-2{
	  background-color:#b0bec5;
	  height:1800px;
	  
	  
  }
  
  .cont{
	 margin-left:40px;
	 padding-top:100px;
	 
  }
  .doctors-list{
	 position:relative; 
  }
  .wrap{
	  margin:auto;
  }
	   .modal-dialog{
          padding-top: 150px;}
          .modal-content{
          background-color:white;}
		   .buton1{
	background-color:#64b5f6;
	color:white;
	font-weight:700;
	padding-top:10px;
	padding-bottom:10px;
	width:400px;
}
.text-center a:hover{
	text-decoration:none;
	
	
}
      td{
          font-family: Goudy Old Style;
          font-size: 18px;
      }
.buton1:hover{
	color:white;
background-color:grey;	
}
      .wrap h3{
          color:#1b5e20;
          font-family: Goudy Old Style;
      }  
  body{
	  background-color:#b3e5fc;
         
  }
  </style>
  <script> $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
});</script>
  
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
              <ul class="dropdown-menu"><style>.dropdown-menu{box-shadow:none;background-color:#eeeeee;}</style>
                <li><a href="demorecord.php">Records</a></li>
                <li><a href="logout.php">Logout</a></li>
               </ul>
            </li>
          </ul></li>
            
          
          
';
	}
	else
	{
		 echo'<li class="nav"><a href="login1.php"><strong>Log In</strong></a></li>

        <li class="nav"><a href="signup.php"><strong>Sign Up</strong></a></li>';
		session_destroy();
		
	}
	
?>   

        

		
      </ul>

    </div>

  
</nav>





<div class="cont">
<div class="row">
<form action="" method="post">
  <div class="col-md-2">



    <h4>Search city</h4>
<select class="form-control" name="city">
  <option>Bhopal</option>
  <option>Indore</option>
  <option>Jabalpur</option>
  <option>Delhi</option>
  <option>Bombay</option>
  <option>Bengalore</option>
  <option>Lucknow</option>
  <option>Noida</option>
  <option>Jaipur</option>
  <option>Jhansi</option>
  <option>Shimla</option>
  <option>Ahemdabad</option> 
</select>
<input type="submit" name="submit" value="GO!">

</div>

</form>

<div class="doctors-list">
				<div class="gap-50"></div>
				<div class="fullwidth">
					<?php 
					$key=$_GET['key'];
					$id=$_SESSION['USER_ID'];
					//	echo $id;
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
					if(isset($_POST['city']) && isset($_POST['submit']))
					{
						$city=$_POST['city'];
						//$city=$_POST['city'];
						echo "<h2>You selected ".$city."</h2>";
						$qry='SELECT * FROM availablity WHERE reg_no='.$key;
					//	$qry="select * from  where ......=$id'";
						$result=mysqli_query($link,$qry);
					//	$row=mysqli_fetch_assoc($result);
					while($row=mysqli_fetch_assoc($result))	
					{
						$qry1="SELECT * FROM clinics WHERE creg_no=".$row['creg_no']." and city='".$city."'";
						$result1=mysqli_query($link,$qry1);
						$row1=mysqli_fetch_assoc($result1);
						if($row1['city'])
						{
					echo "<div class=\"col-md-8 no padding\">
					
						<div class=\"fullwidth white-background\">";
							
					echo	"<div class=\"d\"><style>.d{border:3px solid #29b6f6;border-radius:10px;background-color:white;}</style>
								<div class=\"wrap\"><div class=\"doctorname\"><style>.doctorname{padding-left:10px;float:left;}</style>
									<h3>".$row1['c_name']."</h3>
									<small><strong>Registration No</strong></small>:<small>".$row['creg_no']."</small>
								</div>
								<form action=\"docprofile.php\" method=\"get\">
								<div class=\"text-center\"><style>.text-center{padding-left:400px;padding-top:10px;border-radius:10px;}</style>
									<button type=\"submit\" value=".$row['sno']." class=\"buton\" name=\"submit\">Book an Appointment</button>
									</div>
									</form>
									</div>
								<div><table class=\"table\">
								<tbody>
                                <tr>";
								if($row['days_of_week']=="MWF")
								{
									echo"<td><strong>Days</strong></td>
									<td>Monday,Wednesday,Friday</td>";
								}
								else
								{
									echo "<td><strong>Days</strong></td>
									<td>Tuesday,Thursday,Saturday</td>";
								}
									
								 echo "</tr>
								  <tr>
									<td><strong>Timings</strong></td>";
									if($row['timings']=="morning")
										echo "<td>10:00 A.M to 1:00 P.M.</td>";
									else
										echo "<td>5:00 P.M to 9:00 P.M.</td>";
								  echo "</tr>
								  <tr>
									<td><strong>Address</strong></td>
									<td>".$row1['locality']."</td>

								  </tr>
								  <tr>
									<td><strong>City</strong></td>
									<td>".$row1['city']."</td>
									
								  </tr>
                                  
								  
								  
									
									
								  
								  
								</tbody>
							  </table>
							  
							  </div>
							  
							</div>
                            <br>
						</div>
					</div>";
						}
							}
						
					}
					else
					{
						$qry='SELECT * FROM availablity WHERE reg_no='.$key;
					//	$qry="select * from  where ......=$id'";
						$result=mysqli_query($link,$qry);
					//	$row=mysqli_fetch_assoc($result);
					while($row=mysqli_fetch_assoc($result))	
					{
						$qry1="SELECT * FROM clinics WHERE creg_no=".$row['creg_no'];
						$result1=mysqli_query($link,$qry1);
						$row1=mysqli_fetch_assoc($result1);
					echo "<div class=\"col-md-8 no padding\">
					
						<div class=\"fullwidth white-background\">";
							
					echo	"<div class=\"d\"><style>.d{border:3px solid #29b6f6;border-radius:10px;background-color:white;}</style>
								<div class=\"wrap\"><div class=\"doctorname\"><style>.doctorname{padding-left:10px;float:left;}</style>
									<h3>".$row1['c_name']."</h3>
									<small><strong>Registration No</strong></small>:<small>".$row['creg_no']."</small>
								</div>
								<form action=\"docprofile.php\" method=\"get\">
								<div class=\"text-center\"><style>.text-center{padding-left:400px;padding-top:10px;border-radius:10px;}</style>
									<button type=\"submit\" value=".$row['sno']." class=\"buton\" name=\"submit\">Book an Appointment</button>
									</div>
									</form>
									</div>
								<div><table class=\"table\">
								<tbody>
                                <tr>";
								if($row['days_of_week']=="MWF")
								{
									echo"<td><strong>Days</strong></td>
									<td>Monday,Wednesday,Friday</td>";
								}
								else
								{
									echo "<td><strong>Days</strong></td>
									<td>Tuesday,Thursday,Saturday</td>";
								}
									
								 echo "</tr>
								  <tr>
									<td><strong>Timings</strong></td>";
									if($row['timings']=="morning")
										echo "<td>10:00 A.M to 1:00 P.M.</td>";
									else
										echo "<td>5:00 P.M to 9:00 P.M.</td>";
								  echo "</tr>
								  <tr>
									<td><strong>Address</strong></td>
									<td>".$row1['locality']."</td>

								  </tr>
								  <tr>
									<td><strong>City</strong></td>
									<td>".$row1['city']."</td>
									
								  </tr>
                                  
								  
								  
									
									
								  
								  
								</tbody>
							  </table>
							  
							  </div>
							  
							</div>
                            <br>
						</div>
					</div>
                    "	;}
					}
					?>
					

				</div>

</div>
</div>
</div>
</div>

</body>
</html>
