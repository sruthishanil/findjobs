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
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Improving workplace <span>Productivity.</span></h3>
						<p>Hire. Train. Retain.</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="single.html">Read More »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Inspiring leadership <span>innovation.</span></h3>
						<p>Hire. Train. Retain.</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="single.html">Read More »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Improving workplace <span>Productivity.</span></h3>
						<p>Hire. Train. Retain.</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="single.html">Read More »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">

						<h3>Inspiring leadership <span>innovation.</span></h3>
						<p>Hire. Train. Retain.</p>
						<div class="agileits-button top_ban_agile">
							<!-- <a class="btn btn-primary btn-lg scroll" href="#welcome" role="button">Read More »</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->

	<!--/search_form -->
	<div id="search_form" class="search_top">
		<h2>Start your job search</h2>
		<form action="<?php echo site_url();?>/Welcome/searchs" method="post">
			<input type="text" name="keywords" placeholder="Enter Keyword(s)" required="">
			<input class="email" name="location" type="text" placeholder="Location" required="">
			<select id="country12" onchange="change_country(this.value)" name="category" class="frm-field required">
														<option value="null"> Select Category</option>
														<option value="bank">Banking</option>
														<option value="finance">Finance</option>
														<option value="it">It</option>
														<option value="health">health care</option>
														
										</select>
			<input type="submit" value="Find Jobs" name="search">
			<div class="clearfix"></div>
		</form>
	</div>
	<!--//search_form -->
	<div class="banner-bottom">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle">About Us</h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div class="col-md-6 banner_bottom_left">
					<h4>Employment opportunities</h4>
					<p style="text-align: justify;">Btrac is formed by a group of entrepreneurs to focus solely on building skilled manpower pool, to bridge the gap between industry requirements and academy resources. Our professional team comprises of talented individuals that have been in the industry for years and bring 5 to 25 years of knowledge to the table. The organization structure ensures that a blend of young and the restless as well as those who have impeccable command in various fields of Business Technology and Management jointly contribute to the solutions. The organization provides consulting, research and development facilities for various industries. On the other side students can directly involve in these industrial activities as part of their academic project / internship and thereby acquire enough practical skills in a live production environment.
					
					</p>
					
					<ul class="some_agile_facts">
						<li><span class="fa fa-briefcase" aria-hidden="true"></span><label>35 </label> IT/BT Companies</li>
						<li><span class="fa fa-graduation-cap" aria-hidden="true"></span><label> 420 </label> Proffessionals</li>
						<li><span class="fa fa-user" aria-hidden="true"></span><label>60 </label> Industries</li>
						<li><span class="fa fa-line-chart" aria-hidden="true"></span><label>725</label> Projects</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 banner_bottom_right">
					<div class="agileits_w3layouts_banner_bottom_grid"><br>
						<br>
						<br>
						<br>
						<img height="100%" width="1500 px" src="<?php echo base_url();?>/assets/images/rr1.jpg" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
	</div>
	<!-- //banner-bottom -->
	<div class="team_work_agile">
		<h4>We are looking at how our technology and expertise can be used in new and exciting ways, but we also realize it’s the partnerships we form around the world that can lead to the biggest advances for industries, people and systems.</h4>
	</div>
	<!-- services -->

	<!-- //services -->
	<!-- /mid-services -->
	
<br>
<br>
		<div class="clearfix"> </div>
	</div>
	<!-- //mid-services -->
	<div class="candidate_cv">
		<div class="tittle_head_w3ls">
			<h3 class="tittle two">Candidate Cv</h3>
		</div>
		<div class="inner_sec_grids_info login-form">
			<form action="<?php echo site_url();?>/Welcome/cvupload" method="post" enctype="multipart/form-data">
				<div class="col-md-6 form-left">
					<div class="form-inputs email">
						<p>Full name</p>
						<i class="fa fa-user" aria-hidden="true"></i>
						<input type="text" name="Name" placeholder="" required="" />
					</div>
					<div class="form-inputs name">
						<p>Email</p>
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<input type="email" name="Email" placeholder="" required="" />
					</div>
					<div class="form-inputs name">
						<p>Phone</p>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<input type="text" name="Phone" placeholder="" required="" />
					</div>

				</div>
				<div class="col-md-6 form-right">
					<div class="form-inputs name">
						<p>Comment</p>
						<i class="fa fa-comment" aria-hidden="true"></i>
						<textarea name="Message" placeholder="" required=""></textarea>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="form-inputs">
					<p>Specify your current employment status</p>
					<ul>
						<li>
							<input type="radio" id="a-option" value="Employed" name="status">
							<label for="a-option">Employed </label>
							<div class="check"></div>
						</li>
						<li>
							<input type="radio" id="b-option"  name="status" value="Unemployed">
							<label for="b-option">Unemployed</label>
							<div class="check"></div>
						</li>
						<li>
							<input type="radio" id="c-option" name="status" value="Self-Employed">
							<label for="c-option">Self-Employed</label>
							<div class="check"></div>
						</li>
						<li>
							<input type="radio" id="d-option" name="status" value="Student">
							<label for="d-option">Student</label>
							<div class="check"></div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="form-inputs upload">
					<p>Upload your resume</p>
					<input type="file" id="fileselect" name="fileselect" size="50"/>
					<div id="filedrag">Upload</div>
				</div>
				<input type="submit" value="Submit Cv">
			</form>

		</div>
	</div>
	<!-- //testimonials -->
	<div class="testimonials_section">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle">Testimonials</h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div id="Carousel" class="carousel slide two">

					<ol class="carousel-indicators second">
						<li data-target="#Carousel" data-slide-to="0" class="active"></li>
						<li data-target="#Carousel" data-slide-to="1"></li>
						<li data-target="#Carousel" data-slide-to="2"></li>
					</ol>

					<!-- Carousel items -->
					<div class="carousel-inner">

						<div class="item active">
							<div class="testimonials_grid_wthree">
								<img src="<?php echo base_url();?>/assets/images/test1.jpg" alt=" " class="img-responsive" />
								<h4><i class="fa fa-quote-left" aria-hidden="true"></i> Nam libero tempore, cum soluta nobis est eligendi optio cumque
									nihil impedit quo minus id quod maxime placeat facere possimus,Morbi viverra congue nisi vel pulvinar posuere sapien
									eros. omnis voluptas.</h4>
								<h5>Dan Adams</h5>

							</div>

						</div>
						<!--.item-->
						<div class="item">
							<div class="testimonials_grid_wthree">
								<img src="<?php echo base_url();?>/assets/images/test2.jpg" alt=" " class="img-responsive" />
								<h4><i class="fa fa-quote-left" aria-hidden="true"></i> Nam libero tempore, cum soluta nobis est eligendi optio cumque
									nihil impedit quo minus id quod maxime placeat facere possimus,Morbi viverra congue nisi vel pulvinar posuere sapien
									eros. omnis voluptas.</h4>
								<h5>Jessica Doe</h5>

							</div>
						</div>
						<!--.item-->

						<div class="item">
							<div class="testimonials_grid_wthree">
								<img src="<?php echo base_url();?>/assets/images/test3.jpg" alt=" " class="img-responsive" />
								<h4><i class="fa fa-quote-left" aria-hidden="true"></i> Nam libero tempore, cum soluta nobis est eligendi optio cumque
									nihil impedit quo minus id quod maxime placeat facere possimus,Morbi viverra congue nisi vel pulvinar posuere sapien
									eros. omnis voluptas.</h4>
								<h5>Michael Doe</h5>

							</div>
						</div>
						<!--.item-->

					</div>
					<!--.carousel-inner-->

				</div>
				<!--.Carousel-->

			</div>
		</div>
	</div>

	<?php include("footer.php")?>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js"></script>
</body>

</html>