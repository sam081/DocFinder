<!DOCTYPE html>
<head><title>signup</title>

<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	
	
	<link rel="stylesheet" href="css/signup.css">
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
        
<li class="nav"><a href="login1.php"><strong>Log In</strong></a></li>

        <li class="nav"><a href="signup.php"><strong>Register</strong></a></li>

        

		
      </ul>

    </div>

  
</nav>



<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
	<a href="#step-1" type="button" class="btn btn-info btn-circle">1</a>
            <p>Personal Details</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-info btn-circle" disabled="disabled">2</a>
            <p>Address</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-info btn-circle" disabled="disabled">3</a>
            <p>Register</p>
        </div>
        
    </div>
</div>
<form role="form" action="signup1.php" method="post">
    <div class="row setup-content" id="step-1">
    
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Personal Details</h3>
				<br>
				<br>

<div class="form-group">
  <label class="col-md-4 control-label" for="name"> Name</label>  
  <div class="col-md-5">
  <input id="service_name" name="name" type="text" placeholder="" value="name" class="form-control input-md" />
    
  </div>
</div>
<br>
<br>

<div class="form-group">
  <label class="col-md-4 control-label" for="age">Age</label>  
  <div class="col-md-5">
  <input id="service_architecture" name="age" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>

				<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Gender</label>
  <div class="col-md-5">
    <select id="stack_id" name="gender" class="form-control">
      <option value="M">Male</option>
      <option value="F">Female</option>
      
    </select>
  </div>
</div>
<br>
<br>


                <button class="btn btn-info nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Address</h3>
               <br>
                <br>
                <!-- File Button --> 
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="street_name">Street Name</label>  
  <div class="col-md-5">
  <input id="service_architecture" name="street_name" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City</label>  
  <div class="col-md-5">
  <input id="service_architecture" name="city" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact_no">Contact No.</label>  
  <div class="col-md-5">
  <input id="service_architecture" name="contact_no" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>

                <button class="btn btn-info nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Register</h3>
                <br>
                <br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username</label>  
  <div class="col-md-5">
  <input id="sd_modulepath" name="username" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-5">
  <input id="sd_filename" name="email" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>  
  <div class="col-md-5">
  <input id="sd_filename" name="password" type="password" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>
<div class="form-group">
  <label class="col-md-4 control-label" for="sd_filename">Re-Type password</label>  
  <div class="col-md-5">
  <input id="sd_filename" name="repassword" type="password" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>
                 <button class="btn btn-success btn-lg pull-right" type="submit" value="submit">Submit</button>
            </div>
        </div>
    </div>
    
    <!--<div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Preview & Submit</h3>
                <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
            </div>
        </div>
    </div>-->
</form>
</div>
</body>
</html>