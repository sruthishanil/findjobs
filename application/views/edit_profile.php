
<!DOCTYPE html>
<html>

<head>
	<title>Btrac Job hunt</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<script type="text/javascript">
        $(document).ready(function() {
        	
        	$("#edit22").hide();

            $("#edits").click(function() {
                 $("#edit1").hide();
                $("#edit22").show();
                
            });
        });
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


	<div class="inner_page_agile">
		<h3>Employee</h3>
		<p>Profile Edit</p>

	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">

			<ul class="short_w3ls"_w3ls>
				<li><a href="<?php echo site_url();?>/Welcome/index/">Home</a><span>|</span></li>
				<li>Employee</li>
				<span>|</span></li>
				<li>Edit Profile </li>
			</ul>
		</div>
	</div>
	<div class="inner_content_info_agileits">
	 	<div class="tittle_head_w3ls">
				<h3 class="tittle">Job Description </h3>
		</div>
		<div class="tab_grid ">
		</div>

		<div class="container">
			<div class="row">  
			<div class="col-md-12">
				<div class="col-md-4 job_info_left">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<?php
				 $i=1;
  				 foreach($data as $row)
  				 	{
 				?>
					<ul id="myTab" class="nav nav-tabs" >
								<li role="presentation" class="active"   role="tab" data-toggle="tab" ><h2>hai <?php echo $row->first_name ?></h2></li>
								<li></li>
								 
								 
							</ul>	
					</div>
				</div>

				
				<div class="tab_grid ">
				</div>
				<div class="col-sm-4" style="background-color: lightgray ;">
				   	<table>
					    <tbody>
					    	<tr><td>ID</td><td></td><td><b><?php echo $row->id ?></b></td></tr>  
					    	<tr><td>Name</td><td></td><td><b><?php echo $row->first_name ?></b></td></tr> 
					    	<tr><td>Last name</td><td></td><td><b><?php echo $row->last_name?></b></td></tr>  
                             <tr><td>Email</td><td></td><td><?php echo $row->email ?></td></tr>
                            <tr><td>Phone </td><td></td><td> <?php echo $row->phone_no ?></td></tr>      
                        </tbody></table>

                </div> 
                 
                <div class="col-sm-8  ">
				  <div class="nav nav-tabs">
				  	<span><h3><b>Personal Details</b></h3></span>
                                  	&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                  	&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                  	&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                  	&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                  	&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                  	&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                  	&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                  	&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                  	<span>                                              </span>
                                  	 <!-- <a onclick="nummodal();" href="#" > <span class="fa fa-edit fa-1x fa-orange"></span>Edit</a> -->
                                  	 <button id="edits" class="fa fa-edit fa-1x fa-orange"> Edit
                                  	 </button>&nbsp;
				  	    <div id="edit1" style="border:  1px solid black">
                               
                                    <table >
                                        <tr><td>Name</td><td >:</td><td><?php echo $row->first_name ?></td></tr>
                                        
	                                    <tr><td>Gender</td><td>:</td><td><?php echo $row->gender ?></td></tr>
	                                    <tr><td>place</td><td >:</td><td><?php echo $row->place ?></td></tr>
                                        <tr><td>Address</td><td >:</td><td><?php echo $row->address ?></td>
                                        </tr>
                                        <tr><td>age</td><td >:</td><td><?php echo $row->age  ?></td></tr>

                                        <?php
                                        if($row->marital_status=="yes")
                                        {
                                        ?>
                                        <tr><td>Marital status</td><td >:</td><td>Married</td></tr>
                                        <?php
                                    	}
                                    	else
                                    		{?>
                                    			<tr><td>Marital status</td><td >:</td><td>Not Married</td></tr>
                                        <?php
                                    	}
                                    	?>

                                        <tr><td>Experience</td><td >:</td><td><?php echo $row->experience ?>year</td></tr>
                                        <tr><td>Qualification</td><td >:</td><td><?php echo $row->qualification ?></td></tr>
                                        <tr><td>Skills</td><td >:</td><td><?php echo $row->skills ?></td></tr>
                                     </table>
                                
                                
                                     
				 				</div>
				 				<div  id="edit22" style="border:  1px solid black; text-align: center; ">
				 				  <div class="signin-form">
									<!-- <div class="login-form-rec"> -->
				 					<form method="post">
				 						<table>
				 							<tr>
				 								<td>
				 									Name :
				 								</td>
				 								<td>
				 									<input type="text" value="<?php echo $row->first_name ?>" disabled >
				 								</td>
				 							</tr>
				 							<tr>
				 								<td>
				 									Gender :
				 								</td>
				 								<td>
				 									<?php
                                        if($row->gender=="Female")
                                        {
                                        ?>
                                        			<input type="radio" name="gender" value="male">Male
				 									<input type="radio" name="gender" value="Female" checked="checked" >Female
				 									<?php
				 								}
				 								else
				 								{
				 									?>
				 								<input type="radio" name="gender" value="male" checked="checked" >Male
				 								<input type="radio" name="gender" value="Female" >Female
				 									<?php
				 								}
				 								?>

				 								</td>
				 							</tr>
				 							<tr>
				 								<td>
				 									Place :
				 								</td>
				 								<td>
				 									<input type="text" name="place" value="<?php echo $row->place ?>" >
				 								</td>
				 							</tr>
				 							<tr>
				 								<td>
				 									Address :
				 								</td>
				 								<td>
				 									<textarea name="address"><?php echo $row->address ?>
				 									</textarea>
				 									
				 								</td>
				 							</tr>
				 							<tr>
				 								<td>
				 									age :
				 								</td>
				 								<td>
				 									<input type="text" name="age" value="<?php echo $row->age ?>" >
				 								</td>
				 							</tr>
				 							<tr>
				 								<td>
				 									Marital Status :
				 								</td>
				 								<td>
				 									<?php
                                        if($row->marital_status == "yes")
                                        {
                                        ?>
                                        			<input type="radio" name="Marital" value="no">Not Married
				 									<input type="radio" name="Marital" value="yes" checked="checked" >Married
				 									<?php
				 								}
				 								else
				 								{
				 									?>
				 								<input type="radio" name="Marital" value="no" checked="checked" >Not Married
				 								<input type="radio" name="Marital" value="yes" >Married
				 									<?php
				 								}
				 								?>

				 								</td>
				 							</tr>
				 							
				 							<tr>
				 								<td>
                                                 Experience  :
				 									
				 								</td>
				 								<td>
				 									<input type="number" name="experience" value="<?php echo $row->experience ?>" >
				 								</td>
				 							</tr>
				 							<tr>
				 								<td>
				 									Qualification :
				 								</td>
				 								<td>
				 									<input type="text" name="qualification" value="<?php echo $row->qualification ?>" >
				 								</td>
				 							</tr>
				 							<tr>
				 								<td>
				 									Skills :
				 								</td>
				 								<td>
				 									<textarea name="skills"><?php echo $row->skills ?>
				 									</textarea>
				 									
				 								</td>
				 							</tr>
				 							<tr>
				 								<td colspan="2" align="center">
				 									<input type="submit" name="update" value="Edit" align="center" class="btn-success">
				 								</td>
				 							</tr>
				 						</table>
				 						
				 					</form>
				 				<!-- </div> -->
				 				</div>
				 				</div>
							</div>  
						</div> 



						
				<?php
				$i++;
					}
				?>

       </div>         
    </div>
</div>

    <div class="tab_grid ">
				</div>        
	<?php include("footer.php")?>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js"></script>
</body>


</html>