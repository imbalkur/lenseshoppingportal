<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script src="74f5b9a386.js"></script>
		<script src="css/all.min.js"></script>
</head>
<style>
	form{
		margin: 50px 300px 100px 34%;
	}
	input[type=password],input[type=email],input[type=text],.custom-select,input[type=number],input[type=tel]{
		width: 300px;
		border-radius: 15px;
		border:3px solid grey;
		height: 50px;			
	}
	.btn{
		width: 150px;
	}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand navbar-custom" href="index.php">Lense <i class="fa fa-eye"></i></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="register.php">Register</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">Login<span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</nav>
	<form action="logindo.php" method="POST" class="main">
		<div class="container">
			<label for="email"><b>Email id</b></label> <br />
			<input type="email" class="form-control" placeholder="Enter email" name="email" required> <br /> <br />
			<label for="psw"><b>Password</b></label> <br />
			<input type="password" class="form-control" placeholder="Enter Password" name="psw" required>  <br /> <br />
			<button type="submit" class="btn btn-warning" name="submit">Login</button> <br />
			<input type="checkbox" checked="checked" name="remember"> Remember me
		</div><br />
		<div class="container2" style="">
			new user?<a href="register.php"> register here</a><br />
		</div>
	</form>
</body>
</html>