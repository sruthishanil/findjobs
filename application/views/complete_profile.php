
<!DOCTYPE html>
<html>

<head>
	<title>Btrac Job hunt</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}

	</script>
	
	<!--//tags -->
	<link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="<?php echo base_url();?>/assets/css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- header -->
	<?php include("header.php")?>
	
	
	<!-- banner -->
	
	<div class="inner_page_agile">
		<h3>Employee Login</h3>
		<p>Complete Profile</p>

	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">
			
 
  
			<ul class="short_w3ls"_w3ls>
				<li><a href="index.html">Home</a><span>|</span></li>
				<li>Employee</li><span>|</span></li>
				<li>Complete Profile</li><span>|</span></li>
				 <li></li>
			</ul>
			
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="container">
		<div class="row">
			<!-- <div class="col-sm-9"> -->
				<div class="signin-form">
				<div class="login-form-rec">
					<h3>Update the Profile</h3>
				<form name="registration" method="post" action="#" enctype="multipart/form-data">
					<input type="text" name="name" placeholder="<?php echo $this->session->userdata('name');?>" >
					<input type="text" name="age" placeholder="Enter Your Age" required="">
					<label>Gender    :</label>
					 <input type="radio" name="gender" value="male">Male
					  <input type="radio" name="gender" value="Female">Female
					<input type="text" name="place" placeholder="Enter Your Place" required="">
					<textarea name="address" placeholder="Enter the Address"></textarea>
					<label>marital Status    :</label> 
					<input type="radio" name="marry" value="yes">Married
					  <input type="radio" name="marry" value="no">Not Married
					<textarea name="skills" placeholder="Key Skills"></textarea>
					<div >
					 <label for="myfile">Upload resume:</label>
					<input type="file" id="resume" name="resume" sise="20">
					
					<br>
					
					<button type="submit" name="upload">Upload</button>
				</div>

					<input type="submit" name="save" value="Save">

				</form>
			</div>
			</div>
		</div>
	</div>
	

	<!-- //footer -->
<?php include("footer.php")?>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- password-script -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js"></script>
</body>

</html>