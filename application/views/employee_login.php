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
		<h3>Employee Login</h3>
		<p>Add Some Short Description</p>

	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">
			
 
  
			<ul class="short_w3ls"_w3ls>
				<li><a href="index.html">Home</a><span>|</span></li>
				<li>Employee</li><span>|</span></li>
				 <li></li>
			</ul>
			
		</div>
	</div>
	
   

	
	<div class="inner_content_info_agileits">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle">Available Jobs </h3>
			</div>
			<div class="col-sm-9">
				<?php
				 $i=1;
  				 foreach($dt as $row)
  				 	{
 				?>
				<div class="job_box">
					<h4><?php echo $row->job_title ?> </h4><span>   Posted <?php echo $row->post_date ?>   </span>
					<h4><a href="<?php echo site_url();?>/Employee_cntlr/emp_log_comanydata/<?php echo $row->Company_id?>"><?php echo $row->Company_name ?></a></h4><br><br>
				<p><span>Field : </span><?php echo $row->job_type ?></p>
				<p><span>Location : </span><?php echo $row->location ?></p>
				<p><span>Last date : </span><?php echo $row->last_date ?></p>
					
					<ul style="list-style-type: none;">
						<!-- <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text"> Email this Job</span></a></li> -->
						<!-- <li><a href="location_single.html"><i class="fa fa-eye icon_1"> </i> <span class="icon_text">View full Job Description</span></a></li> -->
						<li   align="right" ><a href="<?php echo site_url();?>/Employee_cntlr/emp_log_jobdetails/<?php echo $row->id ?>" style="background-color: #23B684; color: white ;" class="btn"><span class="icon_text">Apply to Job  <i class="fa fa-caret-right icon_1"> </i></span></a></li>
					</ul>
				</div>
				<?php
				$i++;
					}
				?>
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