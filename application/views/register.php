<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
		<h3>Register</h3>
		<p>Job Seeker Registration</p>

	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">

			<ul class="short_w3ls"_w3ls>
				<li><a href="<?php echo site_url();?>/Welcome/index/">Home</a><span>|</span></li>
				<li>Register</li>
			</ul>
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle three">Register Now </h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div class="signin-form">
					<div class="login-form-rec">
						<form name="registration" method="post" action="#" enctype="multipart/form-data">
							<input type="text" name="fname" placeholder="First Name" required="">
							<input type="text" name="lname" placeholder="Last Name" required="">
							<input type="text" name="phone" placeholder="Phone Number" required="">
							<input type="email" name="email" placeholder="Email" required="">
							<input type="password" name="password" id="password1" placeholder="Password" required="">
							<input type="password" name="password" id="password2" placeholder="Confirm Password" required="">
							<select id="country13" name="experience" onchange="change_country(this.value)" class="frm-field required">
														<option value="null">Work Experience</option>
													 <option value="">Fresher</option>
														<option value="0">0</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option> 
														<option value="4">4</option> 
														<option value="5">5</option> 
														<option value="6">6</option> 
														<option value="7">7</option> 
														<option value="8">8</option> 
														<option value="9">9</option> 
														<option value="10">10</option> 
														<option value="11">11</option>
														<option value="12">12</option>  
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>      
										</select>
							<select id="country13" name="qualification" onchange="change_country(this.value)" class="frm-field required">
												<option value="null">Qualification</option>
									           	<option value="Bsc">Bsc</option>
												<option value="BTech">BTech</option>
												<option value="MCA">MCA</option>
												<option value="BCA">BCA</option>
												<option value="Diploma">Diploma</option>
												<option value="BBA">BBA</option> 
												<option value="MBA">MBA</option>  
												<option value="BA">BA</option> 
												<option value="MA">MA</option>
												<option value="Bcom">Bcom</option>  
												<option value="Mcom">Mcom</option> 
												<option value="Other">Other</option> 
						</select>

						<!-- <div class="form-inputs upload">
						<label>Resume upload</label>
						<input type="file" name="resume" >
					<div id="filedrag">Upload</div> -->
						<!-- </div> -->
						<br>

							<input type="submit" name="save" value="Register">
						</form>
					</div>
					<p class="reg"><a href="#"> By clicking register, I agree to your terms</a></p>

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