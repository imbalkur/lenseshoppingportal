<?php include "db.php"; 
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script src="74f5b9a386.js"></script>
		<script src="css/all.min.js"></script>
		
    <style>
    body{
        margin-top: 50px;
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

 <!------------------------image--------------------------------->
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/glasses1.png" class="d-block w-100 corimage" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/glasses2.png" class="d-block w-100 corimage" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/glasses3.png" class="d-block w-100 corimage" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!--image end-->

<br /><br /><br />


<div class="pagecontent">
        <div class="row text-center py-5">
 <?php
            $query = "SELECT * FROM product";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="index.php?action=add&id=<?php echo $row["pid"]; ?>">

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
                        </form>
						<br /><br />
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


<!--</div>
</div>-->
<br />
<br />
</div>

</body>
<!--footer-->
<?php include("footer.php"); ?>
</html>