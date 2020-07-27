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
	.card {
		margin: auto;
		}
	.card-body,.card-footer{
		padding-left: 150px;
		padding-right: 150px;
	}
	</style>
</head>
<body class="bg-light">
	<?php
		include "header.php";
		$email=	$_SESSION['loginname'];
		$query = "SELECT * FROM user where email='$email'";
		$result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_array($result)) {
	?> <br /><br /><br />
	<div class="card border-info mb-3" style="max-width: 60rem;">
		<div class="card-body text-white bg-info">
			<h1 class="card-title "><?php echo $row['fname'],' ',$row['lname'];  ?></h1>
			<h5 class="card-text"><?php echo $row['email'] ?><br /><?php echo $row['phone'] ?></h5>
		</div>
		<div class="card-footer">
			<b>Address:</b> <?php echo $row['address'],', ',$row['state'],', ',$row['city'],', ',$row['pin'] ?>
		</div>
	</div>
	<?php  } } ?> <br /><br />
	<div class="table-responsive">
        <table class="table table-bordered">
			<tr>
				<th width="10%">Product Image</th>
                <th width="20%">Product Name</th>
                <th width="2%">Quantity</th>
                <th width="10%">Price Details</th>
				<th width="3%">Payment Mode</th>
				<th width="8%">Status</th>
				<th width="7%">Cancel Order</th>			
            </tr>
			<?php 
			$total = 0;$total2 = 1000;$total3 = 0;$qty1=0;$total4 = 0;
			$email=	$_SESSION['loginname'];
			$query = "SELECT * FROM order_details where useremail='$email'";
			$result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {				
			?>
			<tr>
				<form action="profile.php?" name="remove" method="post" class="cart-items">
					<td><img src="<?php echo $row["pimage"]; ?>" class="img-responsive" height="50px" width="100"></td>
					<td><?php echo $row["ptitle"]; ?></td>
					<td><input type="text" value="<?php echo $row["quantity"]; ?>" name="quantity" disabled></td>
					<td><?php echo $row["pprice"]; ?></td>	
					<td><?php echo $row["payment"]; ?></td>	
					<td><?php echo $row["ord_status"]; ?></td>	</td>
					<input type="hidden" name="price" value="<?php echo $row["pprice"]; ?>">	
					<input type="hidden" name="ord_id" value="<?php echo $row["ord_id"]; ?>">	
					<td><button type="submit" class="btn btn-danger mx-2" name="cancel">Cancel Order</button></td>
				</form>
			</tr>	
			<?php
			 $total=$total+$row['pprice']*$row['quantity'];
			 $qty1=$qty1+$row['quantity'];
			 $total3=$total2*$qty1;
			 $total4=$total3+$total;
						}
					}
				if (isset($_POST['cancel'])){
				$ord_id=$_POST['ord_id'];
				$query="DELETE FROM order_details WHERE ord_id='$ord_id'" ;
				$result=mysqli_query($conn,$query);
				echo "<script>alert('Product has been Cancelled...!')</script>";
				echo "<script>window.location = 'profile.php'</script>";
				}
			?>
            <tr>
				<td></td>
				<td></td>
				<td><h3>Total<h3></td>
				<?php 	?>
				<td><h4>Rs.<?php echo $total; ?></h4></td>
				<td></td>	
			</tr>
		</table>
		<h3>    Total Amount (With Prescription): <b> Rs.<?php echo $total4; ?></b></h3>
    </div> <br /><br /><br /><br /><br /><br />
	<!--footer-->
	<?php include("footer.php"); ?>
</body>
</html>