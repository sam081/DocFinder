<!DOCTYPE html>
<html lang="en">

  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/prettySticky.css">  
	
	<script src="jquery/jquery.min.js"></script>
    <script src="jquery/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="jquery/prettySticky.js"></script>
    <script src="jquery/jquery.smooth-scroll.min.js"></script> 
    <script> $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate aphpAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
});</script>
      
      
      <script>
  $(document).ready(function(){
  $(".nav a").smooth<a href="http://www.jqueryscript.net/tags.php?/Scroll/">Scroll</a>({
    offset: -$("nav").outerHeight()

  });

});
</script>
      <style>
          @import url("//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/css/bootstrap-glyphicons.css");
         
          .buton{
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
.buton:hover{
	color:white;
background-color:grey;	
}
      
      </style>
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	</head>

  <body>

     
       
      
      
      
      
      
      
      
	

  <!--new try-->
  
  <nav>

  <div class="container">

    <div> <a href="#top"><img src="images/DoctorFinder_logo_final.png" alt="Logo" class="logo"></a> </div>

    <div class="menu">

      <ul class="nav">

        <li class="nav"><a href="docfinder.php"><strong>Home</strong></a></li>
          <li class="nav"><a href="#neighborhood-guides"><strong>Doctors</strong></a></li>
          <li class="nav"><a href="labs.php"><strong>Labs</strong></a></li>
<?php
	session_start();	
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

  </div>
</nav>


 <section class="jumbotron" id="jumbotron">
      <div class="container">
     <h1><br>                              </h1>
<div class="container" class="c1">
	<section class="main">
	 <form method="post" action="doc.php" >
	 <!--<input name="city" type="hidden" value="bhopal">-->
         <center>
	 <div class="search-box">
		 <input type="text" name="search" class='form-control' placeholder="Search by doctor name...." />
		 <button class='btn btn-link search-btn' type="submit" name="submit" value="GO!"><i class='glyphicon glyphicon-search'></i></button>
             </div></center>
	 </form>
</section>
</div>
</div>
    </section>
	
	
	
	
<h2 id="neighbor"></h2>	
<section class="neighborhood-guides" id="neighborhood-guides">
<div class="container">


<h2>Specialists</h2>
<p>Not sure about the terms in specialists?We've created a different option for you to check the specialist.</p>

<div class="row">

  <div class="col-md-3">
    <div class="thumbnail">
      <a href="doc.php"><img class="i1" src="images/AHS_Physician.jpg"></a>
    </div>
<div class="thumbnail">
	   <a href="#"><img class="i1" src="images/gynecologist.jpg"></a>
    </div>
	<div class="thumbnail">
	   <a href="#"><img class="i1" src="images/cardiologist.jpg"></a>
    </div></div>
<div class="col-md-3">	
	<div class="thumbnail">
	   <a href="#"><img class="i1" src="images/neurologist1.jpg"></a>
    </div>
  <div class="thumbnail">
	   <a href="#"><img class="i1" src="images/kids.jpg"></a>
    </div>
	
	<div class="thumbnail">
	   <a href="#"><img class="i1" src="images/allergist.jpg"></a>
    </div>
  
  
  </div>

<div class="col-md-3">

<div class="thumbnail">
      <a href="#"><img class="i1" src= "images/MD, OD, Optician shutterstock_26993095.jpg" ></a>
	  
    </div>
	
	<div class="thumbnail">
      <a href="#"><img class="i1" src="images/Dentist.jpg"></a>
	  </div>  
	<div class="thumbnail">
	   <a href="#"><img class="i1" src="images/dietician.jpg"></a>
    </div>
	</div>
	
	<div class="col-md-3">
	<div class="thumbnail">
	   <a href="#"><img class="i1" src="images/urologist2.jpg"></a>
    </div>
  
  
  <div class="thumbnail">
	  <a href="#"> <img class="i1" src="images/psychiatrist.jpg"></a>
    </div>
	
	<div class="thumbnail">
	   <a href="#"><img class="i1" src="images/ent.jpg"></a>
    </div>
	</div>

	</div>
	
	</div>



</section>
    
    <div class="learn-more">
	  <div class="container">
		<div class="row">
       <div class="col-md-4">
			<h3 id="travel">Support</h3>
			<p>From Doctors to clinic we provide every search options for you to sit and access the information from your home.</p>
			<p><a href="#">Learn more on support.</a></p>
	      </div>
		  <div class="col-md-4">
			<h3>Appointment</h3>
			<p>There's an appointment facility to book appointment to any doctor you want.</p>
			<p><a href="#">Learn more about Appointment</a></p>
		  </div>
		  <div class="col-md-4">
			<h3>Trust and Safety</h3>
			<p>From Verified ID to our worldwide customer support team, we've got your back.</p>
			<p><a href="#">Learn about trust at DocFinder</a></p>
		  </div>
	    </div>
	  </div>
	</div>
	
	</body>
    <script>$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});</script>
</html>