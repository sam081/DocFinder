<?php  session_start(); ?>

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
.buton1:hover{
	color:white;
background-color:grey;	
}
  
 /* body{
	  background:url('images/imageedit_1_3702034004.jpg');
      background-size:cover;    
  }*/
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
           
        <li class="nav" id="dropdown"><a href="docfinder.html#neighborhood-guides"><strong>Doctors</strong></a></li>
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





<div class="cont">
<div class="row">
<form action="" method="post">
  <div class="col-md-2">
    
    <h4> Search Tests</h4>
<select class="form-control">
  <option>Allergy</option>
  <option>AIDS</option>
  <option>Blood</option>
   
</select>

    <h4>Search city</h4>
<select class="form-control">
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
<input type="submit" name="submint" value="GO!">

</div>

</form>

<div class="doctors-list">
				<div class="gap-50"></div>
				<div class="fullwidth">
					<?php 
	
	$link=mysqli_connect( 'localhost','root','') ; 
	mysqli_select_db($link,'doctorfinder');
	$qry = "SELECT * FROM lab inner join provides on lab.license_no=provides.license_no";
	$result = mysqli_query($link,$qry);
	while( $row = mysqli_fetch_assoc($result) ) 
	{
		
		echo "<div class=\"col-md-8 no padding\">
					
						<div class=\"fullwidth white-background\">";
							/*<div class=\"col-sm-6 no-left-padding\">
								<div class=\"image-area\">
									<img class=\"img-responsive\" src=\"images/photo_01.jpg\" alt=\"\"/>
								</div>
								<div class=\"text-center\">
									<a href=\"#\"><div class=\"buton\"><strong>Book an Appointment</strong></div></a>
									
		<input type="hidden" value="1" name="l_no">
<input type="submit" value="Add this product to your cart" name="foo[submit]">							

								</div>
							</div>*/
					echo	"<div class=\"d\"><style>.d{border:1px solid #000;border-radius:10px;}</style>
								<div class=\"wrap\"><div class=\"doctorname\"><style>.doctorname{padding-left:10px;float:left;}</style>
									<h4>".$row['l_name']."</h4>
									<small><strong>License No</strong></small>:<small>".$row['license_no']."</small>
								</div>
								<div class=\"text-center\"><style>.text-center{padding-left:400px;padding-top:10px;border-radius:10px;}</style>
								<form action=\"book_lab.php\" method=\"post\">
											<input type=\"hidden\" value=".$row['license_no']."' name=\"l_no\" />
											<button type=\"submit\" value='".$row['t_name']."' name=\"submit\" class=\"buton\">Book a Test</button>
								</form>
									</div></div>
								<div><table class=\"table\">
								<tbody>
								<tr>
									<td><strong>Test Name</strong></td>
									<td>".$row['t_name']."</td>
									
								  </tr>
								  <tr>
									<td><strong>Timings</strong></td>
									<td>9:00 A.M to 7:00 P.M.</td>
									
								  </tr>
								  <tr>
									<td><strong>Address</strong></td>
									<td>".$row['locality']."-".$row['city']."</td>

								  </tr>
								  <tr>
									<td><strong>Contact No</strong></td>
									<td>".$row['contact_no']."</td>
									
								  </tr>
								  	  
								</tbody>
							  </table>
							  
							  </div>
							  
							</div>
						</div>
					</div>"	;
	}					 
?>
					
<!--<div class="col-md-8 no-right-padding">
						<div class="fullwidth white-background">
							<div class="col-sm-6 no-left-padding">
								<div class="image-area">
									<img class="img-responsive" src="images/photo_01.jpg" alt=""/>
								</div>
								<div class="text-center">
									
									<a href="#"><div class="buton"><strong>Book an Appointment</strong></div></a>
									
								</div>
							</div>
							<div class="col-sm-6 no-padding"><style>.col-sm-6{border-bottom:1px solid #000; }</style>
								<div class="doctorname">
									<h4>Dr. Suzanne Holroyd</h4>
									<small>SENIOR DOCTOR AT CLINIX</small>
								</div>
								<table class="table">
								<tbody>
								  <tr>
									<td><strong>Speciality</strong></td>
									<td>Outpatient Surgen</td>
									
								  </tr>
								  <tr>
									<td><strong>Experience</strong></td>
									<td>40 years of Experience</td>

								  </tr>
								  <tr>
									<td><strong>Degrees</strong></td>
									<td>MBBS - FCPS</td>
									
								  </tr>
								  <tr>
									<td><strong>Training</strong></td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo ornare, augue</td>
									
								  </tr>
								  <tr>
									<td><strong>Work Days</strong></td>
									<td>Monday, Friday</td>
									
								  </tr>
								</tbody>
							  </table>
							</div>
						</div>
					</div>-->
				</div>

</div>
</div>
</div>
</div>

</body>
</html>
