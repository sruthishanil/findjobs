
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
		<p>NOW VIEWING POSTED JOBS</p>

	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">
			<ul class="short_w3ls"_w3ls>
				<li><a href="<?php echo site_url();?>Employer_controller/emphome">Home</a><span>|</span></li>
				<li>Employer<span>|</span></li>
				<li>Posted Jobs<span>|</span></li>
				 <li></li>
			</ul>
			
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<!-- <div class="container"> -->
			<div class="tittle_head_w3ls">
				<h3 class="tittle three">Upload Jobs</h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				
				<table  border="1" cellspacing="20" cellpadding="25" align="center">
  				<tr style="background:#DCC">
  					<th>S No</th>
    				<th>Job Title</th>
    				<th>Job Type</th>
    				<th>Experience</th>
    				<th>Qualification</th>
    				<th>Salary Range</th>
    				<th>No of post</th>
    				<th>Age Limit</th>
    				<th>Skills</th>
    				<th>Location</th>
    				<th>Specifications</th>
    				<th>Posted date</th>
    				<th>Last date</th>
  				</tr>
				<?php
 				 $i=1;
  				foreach($dat as $row)
 				 {
  					echo "<tr>";
 		 			echo "<td>".$i."</td>";
  					echo "<td>".$row->job_title."</td>";
 					echo "<td>".$row->job_type."</td>";
  					echo "<td>".$row->work_experience."</td>";
  					echo "<td>".$row->qualification."</td>";
  					echo "<td>".$row->salary_range."</td>";
  					echo "<td>".$row->no_of_post."</td>";
  					echo "<td>".$row->age_limit."</td>";
  					echo "<td>".$row->skills_required."</td>";
  					echo "<td>".$row->location."</td>";
 					echo "<td>".$row->job_specification."</td>";
  					echo "<td>".$row->post_date."</td>";
  					echo "<td>".$row->last_date."</td>";
  					echo "</tr>";
  					$i++;
  				}
   				?>	

				</table>
			</div>
		</div>
<!-- 	</div> -->
	
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


