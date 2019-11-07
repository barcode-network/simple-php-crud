<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="jscript.js"></script>
</head>

<body>
<div id="wrapper">
	<div class="header">
		<div id="photo">
			<img src="images/logo.png">
		</div>
		<div>
			<h1>Barbados Revenue Authority</h1>
			<h1>Vehicle Licensing and Registration System</h1>
		</div>
		<div></div>
	</div>

	<div class="content">
		<div id="account">
			<h2>Account Registration</h2>
			<p>All fields required</p>
		</div>
		<div>
			<form id="registration" name="regForm" action="registration.php" method="POST" onsubmit="reg(event)">
				<div>
					<label>National ID</label>
				</div>
				<div>
					<input type="text" name="nationalid" id="nationalid" maxlength="11" value="" onkeyup="addHyphen()">
				</div>
				<div class="error" id="iderror">
					<?=$errors;?>
				</div>

				<div>
					<label>License No.</label>
				</div>
				<div>
					<input type="text" name="licenseno" id="licenseno" maxlength="15">
				</div>
				<div class="error" id="lnerror">
					
				</div>
				<!-- <div>
					<label>First Name</label>
				</div>
				<div>
					<input type="text" name="name" id="fname">
				</div>
				<div class="error" id="fnameerror">
					
				</div>
				<div>
					<label>Last Name</label>
				</div>
				<div>
					<input type="text" name="name" id="lname">
				</div>
				<div class="error" id="lnameerror">
					
				</div>
				<div>
					<label>Email</label>
				</div>
				<div>
					<input type="email" name="email" id="email">
				</div>
				<div class="error" id="emailerror">

				</div>
				<div>
					<label>Telephone</label>
				</div>
				<div>
					<input type="tel" name="phone" id="phone">
				</div>
				<div class="error" id="phoneerror">

				</div>
				<div>
					<label>Address 1</label>
				</div>
				<div>
					<input type="text" name="add1" id="add1">
				</div>
				<div class="error" id="add1error">
				</div>
				<div>
					<label>Address 2</label>
				</div>
				<div>
					<input type="text" name="add2" id="add2">
				</div>
				<div class="error" id="add2error" >
				</div>
				<div>
					<label>Parish</label>
				</div>
				<div>
					<select name="parish" id="parish">
						<option value="">--Choose a parish--</option>
						<option value="stphilip">St. Philip</option>
						<option value="christchurch">Christ Church</option>
						<option value="stmichael">St. Michael</option>
						<option value="stgeorge">St. George</option>
						<option value="stthomas">St. Thomas</option>
						<option value="stjohn">St. John</option>
						<option value="stjoseph">St. Joseph</option>
						<option value="standrew">St. Andrew</option>
						<option value="stpeter">St. Peter</option>
						<option value="stjames">St. James</option>
						<option value="stlucy">St. Lucy</option>
					</select>
				</div> -->
				<div></div>
				<div>
					<label></label>
				</div>
				<div id="submit">
					<div >
						<input type="submit" value="Register" name="registerBtn" onclick="newDriver()">
					</div>
					<div>
						<input type="reset" value="Cancel" name="cancel">
					</div>
				</div>	
			</form>
		</div>
	</div>
</div>
</body>
</html>