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
      body{
          background-color: lightgrey;
      }
  .cont{
	 margin-left:40px;
	 padding-top:100px;
	 
  }
  .doctors-list{
	 position:relative; 
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
      input[type=date] {
    width: 20em;
    padding: .4em;
    font-size: 1.0em;
    font-family: Consolas, monospace;
          border-radius: 5px;
}
      .altfield {
    margin-left: 1em;
    background-color: #efefef;
    padding:.2em;
    color: #c00;
    border: none;
}

.text-center a:hover{
	text-decoration:none;
	
	
}
      .doctors-list{
          padding-top:50px;
      }
.buton1:hover{
	color:white;
background-color:grey;	
}
      .buton1{
          width:200px;
      }
  body{
	  background:url('images/imageedit_1_3702034004.jpg');
      background-size:cover;    
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
		 echo'<li class="nav"><a href="login1.php"><strong>Log In</strong></a></li>

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
    <center>
<div class="row">

    
    
    

<div class="doctors-list">
				<div class="gap-50"></div>
				<div class="fullwidth">
					<?php
				
					$id=$_SESSION['USER_ID'];
					$lno=$_POST['l_no'];
					//$tid="'".$_POST['submit']."'";
					if(isset($_SESSION['var']))
					{
						
						$tid=$_SESSION['var'];
					}
					else
					{
						$tid=$_POST['submit'];
						$_SESSION['var']=$tid;
					}
					//echo $id;
					//echo $tid;
					// echo $lno;
					if(isset($_POST['l_no']) && isset($_POST['submit']))
					{
						//$id=$_SESSION['USER_ID'];
						
					//	$key=$_GET['submit'];         //doctor id
					//	$id=$_SESSION['USER_ID'];
					
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
			
						$qry="select * from patient where username='".$id."'";
						$result=mysqli_query($link,$qry);
						$row=mysqli_fetch_assoc($result);
						$qry1="select * from lab where license_no='".$lno;
						//echo $qry1;
						$result1=mysqli_query($link,$qry1);
						$row1=mysqli_fetch_assoc($result1);
	
					echo "<div class=\"col-md-8 col-md-offset-2\">
					
						<div class=\"fullwidth white-background\">
							<div class=\"col-sm-5 no-left-padding\"><style>.thumbnail{box-shadow:5px 5px 5px #888888;padding-top:2px;height:400px;}</style>
								
                                 <div class=\"thumbnail\">
                                <img src=\"images/photo_01.jpg\" alt=\"...\">
                                
                                <div class=\"caption\">
                                 <h3>".$row1['l_name']."</h3>
                                 
                                   <p>
                                   <strong>".$row1['locality']."</strong>
                                   <br><strong>".$row1['city']."<strong>
                                  </p>
                                  <br>
                                <form action=\"\" method=\"post\">
								<div class=\"text-center\">
									<input type=\"hidden\" value=".$row1['license_no']." name=\"l_no\" />
									<button type=\"submit1\" value='".$tid."' name=\"submit1\" class=\"buton\" />Confirm booking</button>
									</button>
									

								</div>
								
                                
                              </div>
                            </div>
								
							</div>
							<div class=\"col-sm-6 no-padding\"><style>.col-sm-6{box-shadow:5px 5px 5px #888888;position:relative;padding-top:15px; border-top:1px solid #000;border-bottom:1px solid #000;background-color:white;}.table{height:322px; }</style>
								<div class=\"doctorname\">
									<h4>Confirm Appointment</h4>";
					//		$qry2="select * from patient where username='".$id."'";
					//	$result2=mysqli_query($link,$qry2);
					//	$row2=mysqli_fetch_assoc($result2);
								echo"</div>
								<table class=\"table\">
								<tbody>
								  <tr>
									<td><strong>Patient</strong></td>
									<td>".$row['p_name']."</td>
									
								  </tr>
								  <tr>
									<td><strong>Age</strong></td>
									<td>".$row['age']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strong>Sex &nbsp&nbsp&nbsp</strong>".$row['gender']."</td>

								  </tr>
								  <tr>
									<td><strong>Test</strong></td>
									<td>".$tid."</td>
									
								  </tr>
								  <tr>
									<td><strong>Date</strong></td>
									<td> <input id=\"date1\" type=\"date\" name=\"date1\" value=\"\"></td>
									
								  </tr>
								  <tr>
									<td><strong>Time</strong></td>
									<td><select class=\"form-control\" name=\"time\">
                                      <option>10:00 A.M</option>
                                      <option>11:00 A.M</option>
                                      <option>12:00 P.M</option>
                                      <option>7:00 P.M</option>
                                      <option>8:00 P.M</option>
                                      <option>9:00 P.M</option>
                                    </select></td>
									
								  </tr>
								</tbody>
							  </table>
							</div>
							</form>
						</div>
					</div>"	;
						
					}
					?>
					

				</div>

</div>
</div>
    </center>
</div>
</div>
<script>yepnope({ // or Modernizr.load
    test: Modernizr.inputtypes.date,
    nope: [
        'http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js',

        'http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.css',
        'http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.structure.min.css',
        'http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.theme.min.css',

    ],

    callback:function (url) {

        if(url === 'http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js') {

            var idx=0;

            $('input[type="date"]').each( function() {
                var _this=$(this),
                    prefix='alt'+ String(idx++) + '_',
                    _val=_this.val();

                _this
                .attr('placeholder', 'gg/mm/aaaa')
                .attr('autocomplete', 'off')
                .prop('readonly', true)
                .after('<input type="text" class="altfield" id="' + prefix + _this.attr('id')  + '" name="' + _this.attr('name') + '" value="' + _val + '">')
                .removeAttr('name')
                .val('')
                .datepicker({
                    altField: '#'+ prefix + _this.attr('id'),
                    dateFormat: 'dd/mm/yy',
                    altFormat: 'yy-mm-dd'
                });

                if(_val) {
                    _this.datepicker('setDate', $.datepicker.parseDate('yy-mm-dd', _val) );
                };
            });


            // min attribute
            $('input[type="date"][min]').each(function() {
                var _this=$(this);
                _this.datepicker( "option", "minDate", $.datepicker.parseDate('yy-mm-dd', _this.attr('min')));
            });

            // max attribute
            $('input[type="date"][max]').each(function() {
                var _this=$(this);
                _this.datepicker( "option", "maxDate", $.datepicker.parseDate('yy-mm-dd', _this.attr('max')));
            });
        }
    }
}); // end Modernizr.load</script>
</body>
</html>

<?php
if(isset($_POST['submit1']))
{
	$flag=0;
	$lno=$_POST['l_no'];
	$tid=$_SESSION['var'];
//	$sno=$_POST['submit1'];
	$id=$_SESSION['USER_ID'];
	$time=$_POST['time'];
	$date=$_POST['date1'];
//	$dayname=date('l', strtotime( $date));
//	echo '<center>'.$dayname.'</center';
	if($date=='')
	{
		$flag=1;
	echo "DATE IS NULL";
	}
//	echo $id;
	//echo $time;
	//echo $date;
	//echo "fasfafsadf";
	if(!( $id && $time && $date))
	{
			echo '<b>PLEASE FILL ALL THE OPTIONS<b><br>';
	//	header('location:docprofile.php?submit='.$key1);
	}
	else
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
	$qry="select * from lab where license_no=".$lno;
	$result=mysqli_query($link,$qry);
	$row=mysqli_fetch_assoc($result);
	$qry2="select * from test where t_name='".$tid."'";
	$result2=mysqli_query($link,$qry2);
	$row2=mysqli_fetch_assoc($result2);
	$qry1="select count(receipt_no) from report group by license_no,t_name,date,time having time='".$time."' and license_no=".$row['license_no']." and t_name='".$row2['t_name']."' and date='".$date."'";
	$result1=mysqli_query($link,$qry1);
	$row1=mysqli_fetch_assoc($result1);
	$count=mysqli_num_rows($result1);
//	echo $row1['count(receipt_no)'];	
//	echo $count;
    if($row1['count(receipt_no)']==0)
	{
		$row1=mysqli_fetch_assoc($result1);
		$qry3="select receipt_no from report";
		$result3=mysqli_query($link,$qry3);
		while(1)  //unique receipt_no
		{
			for ($receipt_no = mt_rand(1, 9), $i = 1; $i < 10; $i++) 
			{
				$receipt_no .= mt_rand(0, 9);
			}
			$c=0;
			while($row3=mysqli_fetch_assoc($result3))
			{
				if($receipt_no==$row3['receipt_no'])
					$c++;
				if($c>0)
					break;
			}
			if($c==0)
				break;
		}

		$qry3="insert into report(license_no,t_name,date,time,receipt_no,pt_id) values ($lno,'".$tid."','".$date."','".$time."',$receipt_no,'".$id."')";
		$result3=mysqli_query($link,$qry3);
		//echo $qry3;
		echo "<h2><center>you are successfully registered</center></h2>";	
	}
	else if($row1['count(receipt_no)']>=5)
	{
		//header('location:docprofile.php?submit='.$key1);
		echo '<b><center>SORRY....the mentioned slot is already booked...PLEASE choose another day or time</center><b><br>';
		
	}
	else
	{
		
		$row1=mysqli_fetch_assoc($result1);
		$qry3="select receipt_no from report";
		$result3=mysqli_query($link,$qry3);
		while(1)  //unique receipt_no
		{
			for ($receipt_no = mt_rand(1, 9), $i = 1; $i < 10; $i++) 
			{
				$receipt_no .= mt_rand(0, 9);
			}
			$c=0;
			while($row3=mysqli_fetch_assoc($result3))
			{
				if($receipt_no==$row3['receipt_no'])
					$c++;
				if($c>0)
					break;
			}
			if($c==0)
				break;
		}

		$qry3="insert into report(license_no,t_name,date,time,receipt_no,pt_id) values ($lno,'".$tid."','".$date."','".$time."',$receipt_no,'".$id."')";
		$result3=mysqli_query($link,$qry3);
		echo $qry3;
		echo "<center>you are successfully registered</center>";	
		}
	}
	}

?>
