<?php
require_once ('db.php');
?>
<head>
	<style>
	.navbar-brand
	{
		font-size: 150%;
	  padding-bottom: 0px;
	  padding-top: 0px;
	   padding-left: 30px;
	   padding-right: 40px;
	  color: white;
	}
	.nav-link{
		font-size: 120%;
		color:#f1e6fc;
	}
	.dropdown-menu > a:hover,
	.dropdown-menu > a:focus {
		color: #262626;
		text-decoration: none;
		background-color: #66CCFF;
	}
	.navbar-nav > li > a:hover, .navbar-nav > li > a:focus ,.navbar>a:hover,.navbar> a:focus {
		color: white;
		font-style: bold;
	}
	.navbar-custom{
		color: white;
	}
	</style>
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-xl" style="background-image: linear-gradient(to right,#850df9, #0f149d);">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand navbar-custom" href="index.php">Lense <i class="fa fa-eye"></i></a>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle Men" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eyeglasses</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="womeneyeglasses.php">Women Eyeglasses</a>
						<a class="dropdown-item" href="meneyeglasses.php">Men Eyeglasses</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle women" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Sunglasses</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="womensunglasses.php">Women Sunglasses</a>
						<a class="dropdown-item" href="mensunglasses.php">Men Sunglasses</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link others" href="contacts.php" role="button">Contact Lenses </a>
				</li>
				<li class="nav-item">
					<a class="nav-link others" href="about.php" role="button"> Help &nbsp;&nbsp; </a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0" method="GET" action="search.php">
				<input class="form-control mr-sm-2" type="text" placeholder="Search" name="sea" aria-label="Search">
				<button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="search">Search</button>
			</form>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<ul class="navbar-nav mt-2 mt-lg-0">
				<li class="nav-item" >
				<a class="nav-link" href="cart.php" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Cart<i class="fas fa-shopping-cart"></i></a>		
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> My Account </a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="profile.php">Profile</a>
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
</body>