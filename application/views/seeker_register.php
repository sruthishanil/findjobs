<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<form name="register" >
		<tr>
			<th colspan="2">
				Jobseeker Registration
			</th>
		</tr>
		<tr>
			<td>
				<label>Name</label>
			</td>
			<td>
				<input type="text" name="name">
			</td>
		</tr>
		<tr>
			<td>
				<label>Phone No</label>
			</td>
			<td>
				<input type="text" name="phone">
			</td>
		</tr>
		<tr>
			<td>
				<label>Gender</label>
			</td>
			<td>
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
			</td>
		</tr>
		<tr>
			<td>
				<label>Date of Birth</label>
			</td>
			<td>
				<input type="Date" name="dob">
			</td>
		</tr>
		<tr>
			<td>
				<label>Guardian Name</label>
			</td>
			<td>
				<input type="text" name="gd_name">
			</td>
		</tr>
		<tr>
			<td>
				<label>highest Qualification</label>
			</td>
			<td>
				<select id="qualification" name="qualification">
  				<option value="MCA">MCA</option>
  				<option value="BCA">BCA</option>
  				<option value="MBA">MBA</option>
 				<option value="BBA">BBA</option>
 				<option value="BTECH">B-TECH</option>
 				<option value="MSC">MSC</option>
 				<option value="BSE">BSE</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<label>Email</label>
			</td>
			<td>
				<input type="text" name="email">
			</td>
		</tr>
		<tr>
			<td>
				<label>Password</label>
			</td>
			<td>
				<input type="Password" name="Password1">
			</td>
		</tr>
		<tr>
			<td>
				<label>Retype Password</label>
			</td>
			<td>
				<input type="password" name="pasword2">
			</td>
		</tr>
		<tr>
			<td>
				<label>Skills/ sertificates</label>
			</td>
			<td>
				<textarea name="skill" rows="5" cols="25">

				</textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="register" value="Submit">
			</td>
		</tr>
	</form>
</table>
</body>
</html>