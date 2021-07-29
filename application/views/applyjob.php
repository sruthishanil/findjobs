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
				<li>Apply For Job</li><span>|</span></li>
				 <li></li>
			</ul>
			
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
	 	<div class="tittle_head_w3ls">
				<h3 class="tittle">Job Description </h3>
		</div>
		<div class="tab_grid ">
		</div>
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-4 job_info_left">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<?php
				 				$i=1;
  				 				foreach($dts as $row)
  				 				{
 							?>
							<ul id="myTab" class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active btn-success"   role="tab" data-toggle="tab" ><h2><?php echo $row->Company_name ?></h2></li>
								
								 <li role="presentation"><!-- <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"> Descriptions</a> -->
								 <h2><span>   -   </span><?php echo $row->job_title ?></h2>
								 </li> 
							</ul>
					</div>
				</div>

				</div>
				<div class="tab_grid ">
				</div>
				<div class="col-sm-3" style="background-color: #f0f0f0 ;">
					<dl >
						<dt> JOB TYPE</dt>
						<dd> <span><?php echo $row->job_type ?></span></dd>								
						<br>
						<dt>EXPERIENCE </dt> <span>
						<dd><?php echo $row->work_experience ?></span></dd>
						<br>
						<dt>SALARY<span > <dt>
						<dd> <?php echo $row->salary_range ?></i></span></dd>
						<br>
						<dt>NO OF POST<span > <dt>
						<dd> <?php echo $row->no_of_post ?></i></span></dd>
						<br>
						<dt>AGE LIMIT<span > <dt>
						<dd> <?php echo $row->age_limit ?></i></span></dd>
						<br>
						<dt>LOCATION<span > <dt>
						<dd> <?php echo $row->location ?></i></span></dd>
						<br>
						<dt>POSTED DATE<span > </dt>
						<dd> <?php echo $row->post_date ?></i></span></dd>
						<br>
						
						<?php
						if ($js== 0)
						{
						?>
					<a href="<?php echo site_url();?>/Employee_cntlr/apply_job_form/<?php echo $row->id?>" class="btn" style="background-color: #23B684; color: white ;">Apply Now</a>
					<!-- <button class="btn" style="background-color: #23B684; color: white ;" onclick="checkdate(<?php //echo $row->last_date ?>)">Apply Now</button> -->
					<?php
						}
						else
						{
					?>
					<a href="" class="btn" style="background-color: #23B684; color: white ;">Applied</a>
					<?php
						}						
					?>
					</dl>
					

				
				</div>
				<div class="col-sm-9  ">
				  <div class="nav nav-tabs tab_grid">
					<p><b><span style="color: red;">Last Date  : <?php echo $row->last_date ?></span></b></p>
					<p><b><span>Qualification  : </b></span><?php echo $row->qualification ?></p>
					<p><b><span>Skills Required  : </b></span><?php echo $row->skills_required ?></p>
				 </div>

				 	<h3><b>Detailed Description  : </b></h3><br>
				 	<p><?php echo $row->job_specification ?></p>
				 </div>
				
					<?php
						$i++;
						}
					?>
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