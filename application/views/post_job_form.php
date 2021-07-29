
<!-- post_job_form.php -->


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
	<?php include("header11.php")?>
	
	
	<!-- banner -->
	<div class="inner_page_agile">
		<h3>Employer Logined</h3>
		<p>You can now Post Your Job</p>

	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">
			<ul class="short_w3ls"_w3ls>
				<li><a href="<?php echo site_url();?>/Employer_controller/emphome">Home</a><span>|</span></li>
				<li>Employer<span>|</span></li>
				<li>job posting<span>|</span></li>
				 <li></li>
			</ul>
			
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle three">Upload Job Details</h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div class="signin-form">
					<div class="login-form-rec">
						<form name="jobposting" method="post" action="">
							
							<label>TO POST A JOB </label>
							<input type="text" name="jobtitle" placeholder="Job Title" required="">
							<select id="country13" name="jobtype" onchange="change_country(this.value)" class="frm-field required">
												<option value="null">Type of Job</option>
									            <option value="It">IT</option>
												<option value="Bpo">Bpo Jobs</option>
												<option value="Teaching">Teaching Jobs</option>
												<option value="Diploma">Diploma Jobs</option>
												<option value="Tech_Support">Tech Support</option> 
												<option value="Finance">Finance Jobs</option> 
												<option value="Part_time">Part time Jobs</option>
												<option value="Health_Care">Health Care</option> 
												<option value="Hospitality">Hospitality</option>
												<option value="Internships">Internships</option>
												<option value="Research">Research Jobs</option> 
												<option value="Defence">Defence Jobs</option>
							</select>
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

							<input type="text" name="salary" placeholder="Salary Range" required="">
							<input type="text" name="no_ofpost" placeholder="Number Of Post" required="">
							<input type="text" name="age_limit" placeholder="Age Limit" required="">
							<input type="text" name="skills" placeholder="Skills Required" required="">
							<input type="text" name="location" placeholder="Location" required="">
							<textarea name="specification" placeholder="Other Specification"></textarea>
							<label>Date</label>
							<input type="date" name="post_date"  >
							<label>Last Date</label>
							<input type="date" name="last_date" >
							<input type="submit" name="savejob" value="POST NOW">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- //footer -->
<?php include("footer.php")?>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js"></script>
</body>

</html>


