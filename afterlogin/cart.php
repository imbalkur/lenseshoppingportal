<?php
	require_once ("db.php"); session_start();
	$email=$_SESSION['loginname'];
	if(isset($_POST["add"])){
	$query1 = "SELECT * FROM cart where pid='$_POST[pid]' and useremail='$email'";
	$result1 = mysqli_query($conn,$query1);
	$row = mysqli_fetch_array($result1,MYSQLI_NUM);
	if($row[0]<=1){
	$ptitle=$_POST['ptitle'];
	$pprice=$_POST['pprice'];
	$email=	$_SESSION['loginname'];
	$pimage=$_POST['pimage'];
	$pid=$_POST['pid'];
	$qty=$_POST['quantity'];
	$glass=$_POST['glass'];
	$sphr=$_POST['sphright'];
	$sphl=$_POST['sphleft'];
	$cylr=$_POST['cylright'];
	$cyll=$_POST['cylleft'];
	$axisr=$_POST['axisright'];
	$axisl=$_POST['axisleft'];
	$addr=$_POST['addright'];
	$addl=$_POST['addleft'];
	$pd=$_POST['pd'];
	$adcom=$_POST['adcomment'];
	$thickness=$_POST['thickness'];
	$lenstype=$_POST['lenstype'];
	$presprice=$_POST['presprice'];
	$s1="INSERT Into cart(pid, useremail, ptitle,pimage,qty,price) values('".$pid."','".$email."','".$ptitle."','".$pimage."','".$qty."','".$pprice."') ";
	mysqli_query($conn,$s1) or die (mysqli_error($conn));
	$s2="INSERT Into prescription(pid, useremail, glassuse,sphright,sphleft,cylright,cylleft,axisright,axisleft,addright,addleft,pd,additionalcomment,lensthickness,lenstype,presprice) values('".$pid."','".$email."','".$glass."','".$sphr."','".$sphl."','".$cylr."','".$cyll."','".$axisr."','".$axisl."','".$addr."','".$addl."','".$pd."','".$adcom."','".$thickness."','".$lenstype."','".$presprice."') ";
	mysqli_query($conn,$s2) or die (mysqli_error($conn));
	echo "<script>alert('Product is added to the cart..!'); window.history.back();</script>";		
	}
	else{
		echo "<script>alert('Product is already added in the cart..!'); window.history.back();</script>";
		}
	}	  
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
	<link rel="stylesheet" href="" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<script src="../74f5b9a386.js"></script>
	<script src="../css/font-awesome.min.css"></script>
</head>
<style>
.ord{
 margin: 0 50%;
}
.btnord{
	width: 350px;
	height: 50px;
	font-size: 20px;
}
</style>
<body class="bg-light">
<?php require_once "header.php" ?>
<br /><br /><br /><br /><br />
	<div class="table-responsive">
		<table class="table table-bordered">
            <tr>
				<th width="10%">Product Image</th>
                <th width="25%">Product Name</th>
                <th width="5%">Quantity</th>
                <th width="10%">Price Details</th>
				<th width="10%">Update Item</th>
                <th width="10%">Remove Item</th>
            </tr>
			<?php 
			$total = 0;
			$total2 = 1000;
			 $qty1=0;
			 $qtytotal=0;
			$email=	$_SESSION['loginname'];
			$query = "SELECT * FROM cart where useremail='$email'";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {?>
			<tr>
			<form action="cart.php?" name="remove" method="post" class="cart-items">
			<td><img src="<?php echo $row["pimage"]; ?>" class="img-responsive" height="50px" width="100"></td>
			<td><?php echo $row["ptitle"]; ?></td>
			<td><input type="number" value="<?php echo $row["qty"]; ?>" name="qty" ></td>
			<td><?php echo $row["price"]; ?></td>
			<input type="hidden" name="id" value="<?php echo $row["cartid"]; ?>">	
			<input type="hidden" name="price" value="<?php echo $row["price"]; ?>">		
			<td><button type="submit" class="btn btn-warning mx-2" name="update">Update</button></td>
			<td><button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button></td>
			</form>
			</tr>	
			 <?php
			 $total=$total+$row['price']*$row['qty'];
			$qtytotal=$row['qty'];
			 $qty1=$row['qty']+$qty1;
			 $_SESSION['order']=$qty1;
						}
					}			
					 if (isset($_POST['remove'])){
			  $cartid=$_POST['id'];
					$query="DELETE FROM cart WHERE cartid='$cartid'" ;
					$result=mysqli_query($conn,$query);
					  echo "<script>alert('Product has been Removed...!')</script>";
					  echo "<script>window.location = 'cart.php'</script>";
				  }
			   if (isset($_POST['update'])){
			  $cartid=$_POST['id'];
			  $qty=$_POST['qty'];
					$query="UPDATE cart SET qty = '$qty' WHERE cartid ='$cartid'" ;
					$result=mysqli_query($conn,$query);
					  echo "<script>alert('Product has been Updated...!')</script>";
					  echo "<script>window.location = 'cart.php'</script>";
				  }
			?>
            <tr>
				<td></td>
				<td></td>
				<td><h3>Total<h3></td>
				<?php 
				$total3=$total2*$qty1;
				$total4=$total3+$total;
				?>
				<td><h4>Rs.<?php echo $total; ?></h4></td>
				<td></td>
				<td></td>
			</tr>
		</table><br /><br />
		<h3>    Total Amount (With Prescription): <b> Rs.<?php echo $total4; ?></b></h3>
    </div><br />
	<input type="hidden" name="totalprice" value="<?php echo $total4 ?>">		
	<form action="orders.php?" name="ord" method="post" class="ord">
	<button type="submit" class="btn btn-success mx-2 btnord" onClick="window.location.href ='orders.php';" name="order">Order Now</button></form>
	<br /><br /><br /><br /><br /><br />
	<!--footer-->
	<?php include("footer.php"); ?>
	</body>
</html>
