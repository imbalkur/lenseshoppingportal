<!doctype html><?php  session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
	<link rel="stylesheet" href="" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<script src="../74f5b9a386.js"></script>
	<script src="../css/all.min.js"></script>
	<link rel="stylesheet" href="css/all.css" />
<style>
body .container{
	color: black;
}
</style>
</head>
<body class="bg-light">
<?php include "header.php"; ?><br /><br /><br /><br /><br />
	<div class="container">
		<div class="row">
		<div class="col-sm-8">
		<div class="accordion" id="accordionExample">
		<div class="card">
		<div class="card-header" id="headingOne">
			<h2 class="mb-0">
			<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			  Delivery Address
			</button>
			</h2>
		</div>
		<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-body">
				<h3>Address</h3>
				<form class="formdeli" method="post" action="orders.php">
					<?php 
					$email=	$_SESSION['loginname'];
					$query1 = "SELECT * FROM user where email='$email'";
					$result1 = mysqli_query($conn,$query1);
					$row1 = mysqli_fetch_array($result1);
					?>
					<?php echo $row1["address"],', ',$row1['city'],', <br >',$row1['state'],", <br >",$row1['pin']; ?><br />
					<input type="hidden" class="form-control" id="inputEmail4" name="email" value=" <?php echo $row1["email"] ?>">
					<input type="hidden" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="<?php echo $row1["address"]; ?>">
					<input type="hidden" class="form-control" id="inputCity" name="city" value="<?php echo $row1['city']; ?>">
					<input type="hidden" class="form-control" id="inputstate" name="state" value="<?php echo $row1['state']; ?>">
					<input type="hidden" class="form-control" id="inputZip" name="pin" value="<?php echo $row1['pin']; ?>">
					<button type="submit" class="btn btn-info" name="submitdeli">Deliver Here</button>
				</form><br /><br />
				<p><button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Add Address</button></p>
				<div class="collapse" id="collapseExample">
					<div class="card card-body">
						<!-- address form-->
						<form method="POST" action="orders.php">
						<div class="form-row">
							<div class="form-group col-md-6">
							  <label for="inputEmail4">Email</label>
							  <input type="email" class="form-control" id="inputEmail4" value=" <?php echo $row1["email"] ?>" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="inputAddress">Address</label>
							<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" required>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
							  <label for="inputCity">City</label>
							  <input type="text" class="form-control" id="inputCity" name="city" required>
							</div>
							<div class="form-group col-md-4">
								<label for="inputState">State</label>
								<select id="inputState" class="form-control" name="state" required>
								<option disabled>Choose...</option>
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
							<div class="form-group col-md-2">
							  <label for="inputZip">Pin</label>
							  <input type="tel" pattern="[0-9]{6}" class="form-control" id="inputZip" name="pin" required>
							</div>
						</div>
						<button type="submit" class="btn btn-info" name="submitdeli">Deliver Here</button>				  
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>
		<form method="post" action="orders.php">
			<div class="card">
			<div class="card-header" id="headingTwo">
				<h2 class="mb-0">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				 Payment Option
				</button>
				</h2>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				<div class="card-body">
				<!-- -->
				<fieldset class="form-group">
				<div class="row">
				<div class="col-sm-10">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="payment" id="gridRadios1" value="COD" checked>
					<label class="form-check-label" for="gridRadios1">COD</label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="payment" id="gridRadios2" value="Paypal" disabled>
				  <label class="form-check-label" for="gridRadios2">Paypal</label>
				</div>
				</div>
				</div>
				</fieldset>
				</div>
			</div>
			</div><br />
			<button type="submit" class="btn btn-warning" style="float:left; width:250px;" name="back">Back</button>
			<button type="submit" class="btn btn-warning" name="proceed" style="float:right; width:250px;">Proceed</button>
		</form>
		<?php
		 $email=$_SESSION['loginname'];
		 $qtyqt=0;$total=0;$total2=1000;$total3=0;$total4=0;$totalqty=0;
		 $qty="select * from cart where useremail='$email'";
		 $pid="select pid from cart where useremail='$email'";
		 $qtyq=mysqli_query($conn,$qty);
		 if(mysqli_num_rows($qtyq) > 0) {
					while ($row = mysqli_fetch_array($qtyq)) {
						 $qtyqt=$row['qty']+$qtyqt;
						 $total=$total+$row['price']*$row['qty'];
			}}	 
		$total3=$total2*$qtyqt;
		$total4=$total3+$total;		
		$_SESSION["orders"] = $qtyqt;
		if(isset($_POST['order'])){
			$c="select count(*) as cou from cart where useremail='$email'";
			$c1 = mysqli_query($conn,$c);
			$row = mysqli_fetch_array($c1); 
			$cou = (int)$row['cou'];		
			if($cou>0){
				$query1 = "INSERT Into order_details(useremail,pid,ptitle,pimage,pprice,quantity) SELECT useremail,pid,ptitle,pimage,price,qty FROM cart where useremail='$email'";
				$result1 = mysqli_query($conn,$query1) ;}
				else{ 
				 echo "<script> alert('no item');
					window.location.href='cart.php';</script>;";
				}
			}
		if(isset($_POST['back'])){
			$query1 = "delete from order_details where useremail='$email' and pid='$pid'";
			$result1 = mysqli_query($conn,$query1) ;
			echo "<script> window.location.href='cart.php';</script>;";
			}				
		if(isset($_POST['submitdeli'])){
			$email=$_SESSION['loginname'];
			$address=$_POST['address'];
			$state=$_POST['state'];
			$city=	$_POST['city'];
			$pin=$_POST['pin'];
			$s1="UPDATE order_details SET address='".$address."', state='".$state."',city='".$city."', pin='".$pin."' where useremail='".$email."'";
			mysqli_query($conn,$s1) or die (mysqli_error($conn));}   
		?>
		</div>	
		<div class="col-sm-4 border mt-5 bg-white h-25">
			<div class="pt-4">
				<h6>PRICE DETAILS</h6>
				<hr>
				<div class="row price-details">
					<div class="col-md-6">
						<?php
						   if (isset($_SESSION['orders'])){
								$count  = $_SESSION['orders'];
								echo "<h6>Price ($count items)</h6>";
							}else{
								echo "<h6>Price (0 items)</h6>";
							}
						?>
						<h6>Delivery Charges</h6>
						<hr>
						<h6>Amount Payable(Prescription  included)</h6>
					</div>
					<div class="col-md-6">
						<h6>Rs. <?php echo $total; ?></h6>
						<h6 class="text-success">FREE</h6>
						<hr>
						<h6>Rs.<?php
							echo $total4;
							?></h6>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	</div>
	<?php if(isset($_POST['proceed'])){
		$payment=$_POST['payment'];
		$status='order placed';
		$s1="UPDATE order_details SET payment='".$payment."',ord_status='$status' where useremail='".$email."'";
		mysqli_query($conn,$s1) or die (mysqli_error($conn));
		$query2="delete from cart where useremail='$email'";
		$result2 = mysqli_query($conn,$query2) ;
		echo "<script> alert('your order has sucessfully been placed');
		window.location.href='profile.php';</script>;";
	}?><br /><br /><br /><br /><br /><br /><br /><br /><br />
	<!--footer-->
	<?php include("footer.php"); ?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>