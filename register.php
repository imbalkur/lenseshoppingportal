<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script src="74f5b9a386.js"></script>
		<script src="css/all.min.js"></script>
</head>
<style>
	form{
		margin: 50px 300px 100px 50px;
	}
	input[type=password],input[type=email],input[type=text],.custom-select,input[type=number],input[type=tel]{
		width: 300px;
	}
	.btn{
		width: 150px;
	}
</style>
<body>
  <!-- Navbar content -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand navbar-custom" href="index.php">Lense <i class="fa fa-eye"></i></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle 	navigation">
    <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Register<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
	</div>
	</nav>
	<form action="register1.php" method="post">
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
			<div class="col-sm-10">
				<input type="text" name="fname" class="form-control" id="inputEmail3" onkeypress="return /[a-z]/i.test(event.key)" required></textarea>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label" >Last Name</label>
			<div class="col-sm-10">
				<input type="text" name="lname"class="form-control" id="inputEmail3" onkeypress="return /[a-z]/i.test(event.key)" required>
			</div>
		</div>
		<fieldset class="form-group">
			<div class="row">
				<legend class="col-form-label col-sm-2 pt-0">Gender</legend>
				<div class="col-sm-10">
					<div class="form-check">
						<input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>
						<label class="form-check-label" for="gridRadios1">Male</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
						<label class="form-check-label" for="gridRadios2">Female</label>
					</div>
					<div class="form-check disabled">
						<input class="form-check-input" type="radio" name="gender" id="gridRadios3" value="other">
						<label class="form-check-label" for="gridRadios3">Other</label>
					</div>
				</div>
			</div>
		</fieldset>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-10">
				<input type="email" name="email" class="form-control" id="inputEmail3" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
			<div class="col-sm-10">
				<input type="tel" id="phone" name="phone" pattern="[7-9]{1}[0-9]{9}" onkeypress="return /[0-9]/i.test(event.key)" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
			<div class="col-sm-10">
				<input type="password" name="psw" class="form-control" id="inputPassword3" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
			<div class="col-sm-10">
				<input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">State</label>
			<div class="col-sm-10">
				<select class="custom-select" name="state" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					<option>Andhra Pradesh</option>
					<option>Arunachal Pradesh</option>
					<option>Assam</option>
					<option>Bihar</option>
					<option>Chhattisgarh</option>
					<option>Goa</option>
					<option>Gujarat</option>
					<option>Haryana</option>
					<option>Himachal Pradesh</option>
					<option>Jharkhand</option>
					<option>Karnataka</option>
					<option>Kerala</option>
					<option>Madhya Pradesh</option>
					<option>Maharashtra</option>
					<option>Manipur</option>
					<option>Meghalaya</option>
					<option>Mizoram</option>
					<option>Nagaland</option>
					<option>Odisha</option>
					<option>Punjab</option>
					<option>Rajasthan</option>
					<option>Sikkim</option>
					<option>Tamil Nadu	</option>
					<option>Telangana</option>
					<option>Tripura</option>
					<option>Uttar Pradesh</option>
					<option>Uttarakhand</option>
					<option>West Bengal</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">City</label>
			<div class="col-sm-10">
				<input type="text" name="city" class="form-control" id="inputEmail3" onkeypress="return /[a-z]/i.test(event.key)" required></textarea>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Pin Code</label>
			<div class="col-sm-10">
				<input type="tel" pattern="[0-9]{6}" name="pin" class="form-control" id="inputEmail3" onkeypress="return /[0-9]/i.test(event.key)" required></textarea>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-10">
				<button type="submit" name="submit" class="btn btn-primary">Register</button>
			</div>
		</div>
	</form>
</body>
</html>