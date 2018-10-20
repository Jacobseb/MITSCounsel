<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
<?php

session_start();
?>
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Medical Appointment Form a Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medical Appointment Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<!--background-->
<!---728x90--->
<h1> Appointment Form </h1>
<!---728x90--->
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Make an appointment</h2>
			<form action="addnewuser.php" method="post">
			<div class="left-agileits-w3layouts same">
			<div class="gaps">
				<p>Admission Id</p>
					<input type="text" name="id" placeholder="" required=""/>
			</div>	
			<div class="gaps">
				<p>Name</p>
					<input type="text" name="name" placeholder="" required=""/>
			</div>	
				<div class="gaps">	
				<p>Phone Number</p>
					<input type="text" name="mobile" placeholder="" required=""/>
				</div>
				<div class="gaps">
				<p>Email</p>
						<input type="email" name="email" placeholder="" required="" />
				</div>	
				
			</div>
			<div class="right-agileinfo same">
			<div class="gaps">
				<p>Select Date</p>		
						<input  id="datepicker1" name="date" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
			</div>
			
			
			
			</div>
			<div class="clear"></div>
						  <input type="submit" value="Make an appointment">
			</form>
			<?php 
								if(isset($_SESSION['flag']))
								{
									if($_SESSION['flag']==0)
									{
									$_SESSION['flag']=1;
									echo $_SESSION['invalid'];
									}
								}
								?>
		</div>
   </div>
   <!---728x90--->
   <!--copyright-->
			
		<!--//copyright-->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>
		<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

</body>
</html>