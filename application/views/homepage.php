<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.logs
		{
			background-color: lightgray;
			padding: 4px;
			
		}
	</style>
</head>
<body>
	<?php include('headers.php');?>
	
	<div class="container">
  		<div class="row">
  			<div class="col-sm-8" align="right">
  			</div>
    		<div class="col-sm-4" align="right">
    			<div class="logs">
  				<table>
  					<form name="login">
  						<tr>
  							<th colspan="2" align="center">
  							Log in
  							</th>
  						</tr>
  						<tr>
  							<td>
  								<label>User name</label>
  							</td>
  							<td>
  								<input type="text" name="uname">
  							</td>
  						</tr>
  						<tr>
  							<td>
  								<label>password</label>
  							</td>
  						<td>
  							<input type="password" name="pswd">
  						</td>
  						</tr>
  						<tr>
  							<td colspan="2" align="center">
  							<input type="submit" name="login" value="log in">
  							<button><a href="">New Registration</a></button>
  						</td>
  						</tr>
  					</form>
  				</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>