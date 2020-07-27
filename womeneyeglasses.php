<?php include "db.php"; 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Women Eyeglasses</title>
         <link rel="stylesheet" href="" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script src="74f5b9a386.js"></script>
		<script src="css/all.min.js"></script>
    <style>
    body{
        margin-top: 66px;
    }

    .main{
        padding: 20px;
    }

    .corimage{
      width: 100%;
      height: 400px;
    }
	.pagecontent {
		padding-left: 150px;
		padding-right: 150px;
	}
    </style>
    </head>

<body>
		<!--header-->
		<?php include("header.php"); ?>

<br /><br /><br />
<div class="pagecontent">
 <div class="row text-center py-5">
<?php

		    $query = "SELECT * FROM product where pcategory=1";
        $result = mysqli_query($conn,$query);
	 if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {


                    ?>
                    <div class="col-md-3">

                        <form method="post" action="womeneyeglasses.php?action=add&id=<?php echo $row["pid"]; ?>">

                            <div class="product card shadow">
							<div class="card-body">
                                <img src="<?php echo $row["pimage"]; ?>" class="img-responsive" height="100px" width="150">
                                <h5 class="card-title"><?php echo $row["ptitle"]; ?></h5>
                                <h5 class="text-danger">Rs. <?php echo $row["pprice"]; ?></h5>
                                <input type="hidden" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="ptitle" value="<?php echo $row["ptitle"]; ?>">
                                <input type="hidden" name="pprice" value="<?php echo $row["pprice"]; ?>">
								<input type="hidden" name="pid" value="<?php echo $row["pid"]; ?>">
								<input type="hidden" name="pimage" value="<?php echo $row["pimage"]; ?>">
								<input type="hidden" name="email" value="<?php echo $email; ?>">
								
                                <button type="submit" name="add" style="margin-top: 5px;" class="btn btn-warning">Add to cart<i class="fas fa-shopping-cart"></i></button>
                            </div></div>
                        </form><br /><br />
                    </div>
                    <?php
                }
            }
			if(isset($_POST['add'])){
				echo "<script> alert('Please Login:)');
	window.location.href='login.php';</script>;"; 
			}
            ?>
			</div>
			</div>
<br /><br /><br /><br /><br /><br />

<!--footer-->
<?php include("footer.php"); ?>
</body>

</html>