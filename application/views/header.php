<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="header" id="home">
		<div class="content white agile-info">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="index.html">
							<h1><span class="fa fa-signal" aria-hidden="true"></span> Job Hunt <label>Btrac</label></h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-2" id="link-effect-2">
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?php echo site_url();?>Welcome/index/" class="effect-3">Home</a></li>
								<li class="dropdown">
									<a href="jobs.html" class="dropdown-toggle effect-3" data-toggle="dropdown">Jobs<b class="caret"></b></a>
									<ul class="dropdown-menu multi-column columns-2">
										<div class="row">
											<div class="col-sm-6">
												<ul class="multi-column-dropdown">
													<li><a href="jobs.html">Walk-ins</a></li>
													<li><a href="jobs.html">Bpo Jobs</a></li>
													<li><a href="jobs.html">Teaching Jobs</a></li>
													<li><a href="jobs.html">Diploma Jobs</a></li>
													<li><a href="jobs.html">Tech Support</a></li>
													<li><a href="jobs.html">Finance Jobs</a></li>
													<li><a href="jobs.html">Part time Jobs</a></li>
													<li><a href="jobs.html">Health Care</a></li>
													<li><a href="jobs.html">Hospitality</a></li>
													<li><a href="jobs.html">Internships</a></li>
													<li><a href="jobs.html">Research Jobs</a></li>
													<li><a href="jobs.html">Defence Jobs</a></li>
												</ul>
											</div>
											<div class="col-sm-6">
												<ul class="multi-column-dropdown">
													<li><a href="login.html">Recruiter Updates</a></li>
													<li><a href="upload.html">Upload Resume</a></li>
													<li><a href="codes.html">Shortcodes</a></li>
												</ul>
											</div>
										</div>
									</ul>
								</li>
								

								<li><a href="<?php echo site_url();?>Welcome/aboutus/" class="effect-3">About Us</a></li>
								<li><a href="<?php echo site_url();?>Welcome/contactus/" class="effect-3">Contact</a></li>
								<?php if($this->session->userdata('id')=='') 
								{
									?> 
								
								<li><button type="button" class="btn" id="login" style="background-color: #23B684; color: white ;">Log in
  								</button>
  							  	<?php } 
  							  	else
  							  		{ ?>
  							  	<li>
  							  		<a href="<?php echo site_url();?>Employee_cntlr/edit_profile/" class="effect-3">Add/Edit Profile</a>
  							  	</li>
  							  	<li>
  								Hai, <?php echo $this->session->userdata('name');?>
  								<button>
  								<a href="<?php echo site_url();?>/Welcome/logout/" class="btn" id="logout"style="background-color: #23B684; color: white ;">Log out</a>
  								</button>
  								</li>

  								<?php
  								} ?>
  								


  								<div class="modal" id="logg">
    								<div class="modal-dialog">
      								<div class="modal-content">
       							 <!-- Modal Header -->
        							<div class="modal-header">
          								<h4 class="modal-title">LOGIN</h4>
          						<button type="button" class="close" data-dismiss="modal">x</button>
        							</div>

   									<div class="modal-body" align="center">
   										<form name="login" method="post" action="<?php echo site_url(); ?>Welcome/logins">
   										<label>User Type</label>
   										<input type="radio" name="type" value="Employee" checked> Employee
       									<input type="radio" name="type" value="Employer"> Employer<br>
   										<br>	
          								<label>user name</label><br>
          								<input type="text" name="uname"><br>
         								 <label>Password</label><br>
          								<input type="password" name="pswd"><br><br>
          						<input type="submit" class="btn btn-success" name="logs" value="LOGIN">
          						 		</form>
        							</div>
        							<div class="modal-footer">
          								<button type="button" class="btn btn-danger" id="close">Close</button>
        							</div>
   								</div>
   								</div>
							</div>
							</li>
							<?php if($this->session->userdata('id')=='') 
								{
									?> 
							<li><button type="button" class="btn" id="register" style="background-color: #23B684; color: white ;">Register
  								</button>
  							<?php }
  							?>
  								<div class="modal" id="regst">
    								<div class="modal-dialog">
      								<div class="modal-content">
       							 <!-- Modal Header -->
        							<div class="modal-header">
          								<h4 class="modal-title">REGISTER</h4>
          						<button type="button" class="close" data-dismiss="modal">x</button>
        							</div>

   									<div class="modal-body" align="center">
          								<a href="<?php echo site_url();?>Welcome/registration" class="btn btn-info">Employee Registration</a>
          								<br>
          								<br>
          						 		<a href="<?php echo site_url();?>Welcome/emp_register" class="btn btn-info">Employer Registration</a>
        							</div>
        							<div class="modal-footer">
          								<button type="button" class="btn btn-danger" id="clos">Close</button>
        							</div>
   								</div>
   								</div>
							</div>
  							</li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<script>
		$("#login").click(function(){
  		$('#logg').modal('show');
 		});
		$("#close").click(function(){
 		$('#logg').modal('hide');
		});


		$("#register").click(function(){
  		$('#regst').modal('show');
 		});
		$("#clos").click(function(){
 		$('#regst').modal('hide');
		});
	</script>