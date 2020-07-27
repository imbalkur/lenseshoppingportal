<?php include "db.php";  session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Women Sunglasses</title>
        <link rel="stylesheet" href="" type="text/css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
		<script src="../74f5b9a386.js"></script>
		<script src="../css/all.min.js"></script>
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
	<script>
		function checkOption(obj) {
			var input = document.getElementsByClassName("form-control");
			for(var i=0; i < input.length; i++) {
				input[i].disabled = (obj.value == "None");
			}
		}
	</script>
<body>
		<!--header-->
		<?php include("header.php"); ?>

<br /><br /><br />
<div class="pagecontent">
 <div class="row text-center py-5">
<?php   $query = "SELECT * FROM product where pcategory=3";
            $result = mysqli_query($conn,$query);
			$i = 1;
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) { ?>
                    <div class="col-md-3">
                        <form method="post" action="cart.php?action=add&id=<?php echo $row["pid"]; ?>">
							<?php if(isset($_SESSION['loginname']));?>
                            <div class="product card shadow">
							<div class="card-body">
							<input type="hidden" id="" name="" value="<?php echo $i; ?>">
                            <img src="<?php echo $row["pimage"]; ?>" class="img-responsive" height="100px" width="150">
                            <h5 class="card-title"><?php echo $row["ptitle"]; ?></h5>
                            <h5 class="text-danger">Rs. <?php echo $row["pprice"]; ?></h5>
                            <input type="hidden" id="quantity" name="quantity" class="form-control" value="1">
                            <input type="hidden" id="ptitle" name="ptitle" value="<?php echo $row["ptitle"]; ?>">
                            <input type="hidden" id="pprice" name="pprice" value="<?php echo $row["pprice"]; ?>">
							<input type="hidden" id="pid" name="pid" value="<?php echo $row["pid"]; ?>">
							<input type="hidden" id="pimage" name="pimage" value="<?php echo $row["pimage"]; ?>">
							<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $row['pid'] ?>">Add to cart<i class="fas fa-shopping-cart"></i></button>
							<!-- modal------------------>
							<div id="myModal<?php echo $row['pid'] ?>" class="modal fade" role="dialog">
							<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
							<h5 class="modal-title">Prescription Details</h5>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
							<h4><?php echo $row['ptitle']; ?></h4><br />
							<p><u>Per prescription lenses is Rs. 1000</u></p>
							<div class="form-group col-md-8">
							<label for="inputEmail4">What do you use your glasses for?</label>
							<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" onChange="checkOption(this)" name="glass" required>
								<option value="None">Non-Prescription</option>
								<option value="single vision">Single Vision</option>
								<option value="near vision">Near Vision</option>
								<option value="bifocal">Bifocal</option>
								<option value="progressive">Progressive</option>
							</select>
							</div><br />	
							<div class="form-row">
							<div class="col-md-2 mb-3">
							<label></label>
							</div>
							<div class="col-md-2 mb-3">
							<label>Sphere (SPH)</label>
							</div>
							<div class="col-md-2 mb-3">
							<label>Cylinder (CYL)</label>
							</div>
							<div class="col-md-2 mb-3">
							<label>Axis (AXI)</label>
							</div>
							<div class="col-md-2 mb-3">
							<label>Add (Near addition)</label>
							</div>
							</div>
							<div class="form-row">
							<div class="col-md-2 mb-3">
							<label>Right (OD)</label>
							</div>
							<div class="col-md-2 mb-3">
							<select class="form-control" id="FormControl" name="sphright" required disabled>
							  <option value="">None</option>
							  <option value="-15.00">-15.00</option>
							  <option value="-14.50">-14.50</option>
							  <option value="-14.00">-14.00</option>
							  <option value="-13.50">-13.50</option>
							  <option value="-13.00">-13.00</option>
							  <option value="-12.50">-12.50</option>
							  <option value="-12.00">-12.00</option>
							  <option value="-11.00">-11.00</option>
							  <option value="-10.00">-10.00</option>
							  <option value="-9.00">-9.00</option>
							  <option value="-8.00">-8.00</option>
							  <option value="-7.00">-7.00</option>
							  <option value="-6.00">-6.00</option>
							  <option value="-5.00">-5.00</option>
							  <option value="-4.00">-4.00</option>
							  <option value="-3.00">-3.00</option>
							  <option value="-2.00">-2.00</option>
							  <option value="-1.00">-1.00</option>
							  <option value="0.00">0.00</option>
							  <option value="+1.00">+1.00</option>
							  <option value="+2.00">+2.00</option>
							  <option value="+3.00">+3.00</option>
							  <option value="+4.00">+4.00</option>
							  <option value="+5.00">+5.00</option>
							  <option value="+6.00">+6.00</option>
							  <option value="+7.00">+7.00</option>
							  <option value="+8.00">+8.00</option>
							  <option value="+9.00">+9.00</option>
							</select>
							</div>
							<div class="col-md-2 mb-3">
							<select class="form-control" id="FormControl" name="cylright" required disabled>
							  <option value="">None</option>
							  <option value="SPH">SPH</option>
							  <option value="DS">DS</option>
							  <option value="NV">NV</option>
							  <option value="DV">DV</option>
							  <option value="-9.00">-9.00</option>
							  <option value="-8.00">-8.00</option>
							  <option value="-7.00">-7.00</option>
							  <option value="-6.00">-6.00</option>
							  <option value="-5.00">-5.00</option>
							  <option value="-4.00">-4.00</option>
							  <option value="-3.00">-3.00</option>
							  <option value="-2.00">-2.00</option>
							  <option value="-1.00">-1.00</option>
							  <option value="0.00">0.00</option>
							  <option value="+1.00">+1.00</option>
							  <option value="+2.00">+2.00</option>
							  <option value="+3.00">+3.00</option>
							  <option value="+4.00">+4.00</option>
							  <option value="+5.00">+5.00</option>
							  <option value="+6.00">+6.00</option>
							  <option value="+7.00">+7.00</option>
							  <option value="+8.00">+8.00</option>
							  <option value="+9.00">+9.00</option>
							</select>
							</div>
							<div class="col-md-2 mb-3">
							<select class="form-control" id="FormControl" name="axisright" required disabled>
							  <option value="">None</option>
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
							  <option value="6">6</option>
							  <option value="7">7</option>
							  <option value="8">8</option>
							  <option value="9">9</option>
							  <option value="10">10</option>
							  <option value="11">11</option>
							  <option value="12">12</option>
							  <option value="13">13</option>
							  <option value="16">16</option>
							  <option value="19">19</option>
							  <option value="20">20</option>
							  <option value="25">25</option>
							  <option value="30">30</option>
							  <option value="35">35</option>
							  <option value="40">40</option>	  
							</select>
							</div>
							<div class="col-md-2 mb-3">
							<select class="form-control" id="FormControl" name="addright" required disabled>
							  <option value="">None</option>
							  <option value="0.00">0.00</option>
							  <option value="+1.00">+0.50</option>
							  <option value="+2.00">+1.00</option>
							  <option value="+3.00">+1.50</option>
							  <option value="+4.00">+2.00</option>
							  <option value="+7.00">+2.50</option>
							  <option value="+8.00">+3.00</option>
							  <option value="+9.00">+3.50</option>
							</select>
							</div>
							</div>
							<div class="form-row">
							<div class="col-md-2 mb-3">
							<label>Left (OS)</label>
							</div>
							<div class="col-md-2 mb-3">
							<select class="form-control" id="FormControl" name="sphleft" required disabled>
							  <option value="">None</option>
							  <option value="-15.00">-15.00</option>
							  <option value="-14.50">-14.50</option>
							  <option value="-14.00">-14.00</option>
							  <option value="-13.50">-13.50</option>
							  <option value="-13.00">-13.00</option>
							  <option value="-12.50">-12.50</option>
							  <option value="-12.00">-12.00</option>
							  <option value="-11.00">-11.00</option>
							  <option value="-10.00">-10.00</option>
							  <option value="-9.00">-9.00</option>
							  <option value="-8.00">-8.00</option>
							  <option value="-7.00">-7.00</option>
							  <option value="-6.00">-6.00</option>
							  <option value="-5.00">-5.00</option>
							  <option value="-4.00">-4.00</option>
							  <option value="-3.00">-3.00</option>
							  <option value="-2.00">-2.00</option>
							  <option value="-1.00">-1.00</option>
							  <option value="0.00">0.00</option>
							  <option value="+1.00">+1.00</option>
							  <option value="+2.00">+2.00</option>
							  <option value="+3.00">+3.00</option>
							  <option value="+4.00">+4.00</option>
							  <option value="+5.00">+5.00</option>
							  <option value="+6.00">+6.00</option>
							  <option value="+7.00">+7.00</option>
							  <option value="+8.00">+8.00</option>
							  <option value="+9.00">+9.00</option>
							</select>
							</div>
							<div class="col-md-2 mb-3">
							<select class="form-control" id="FormControl" name="cylleft" required disabled>
							  <option value="">None</option>
							  <option value="SPH">SPH</option>
							  <option value="DS">DS</option>
							  <option value="NV">NV</option>
							  <option value="DV">DV</option>
							  <option value="-9.00">-9.00</option>
							  <option value="-8.00">-8.00</option>
							  <option value="-7.00">-7.00</option>
							  <option value="-6.00">-6.00</option>
							  <option value="-5.00">-5.00</option>
							  <option value="-4.00">-4.00</option>
							  <option value="-3.00">-3.00</option>
							  <option value="-2.00">-2.00</option>
							  <option value="-1.00">-1.00</option>
							  <option value="0.00">0.00</option>
							  <option value="+1.00">+1.00</option>
							  <option value="+2.00">+2.00</option>
							  <option value="+3.00">+3.00</option>
							  <option value="+4.00">+4.00</option>
							  <option value="+5.00">+5.00</option>
							  <option value="+6.00">+6.00</option>
							  <option value="+7.00">+7.00</option>
							  <option value="+8.00">+8.00</option>
							  <option value="+9.00">+9.00</option>
							</select>
							</div>
							<div class="col-md-2 mb-3">
							<select class="form-control" id="FormControl" name="axisleft" required disabled>
							  <option value="">None</option>
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
							  <option value="6">6</option>
							  <option value="7">7</option>
							  <option value="8">8</option>
							  <option value="9">9</option>
							  <option value="10">10</option>
							  <option value="11">11</option>
							  <option value="12">12</option>
							  <option value="13">13</option>
							  <option value="16">16</option>
							  <option value="19">19</option>
							  <option value="20">20</option>
							  <option value="25">25</option>
							  <option value="30">30</option>
							  <option value="35">35</option>
							  <option value="40">40</option>	  
							</select>
							</div>
							<div class="col-md-2 mb-3">
							<select class="form-control" id="FormControl" name="addleft" required disabled>
							  <option value="">None</option>
							  <option value="0.00">0.00</option>
							  <option value="+1.00">+0.50</option>
							  <option value="+2.00">+1.00</option>
							  <option value="+3.00">+1.50</option>
							  <option value="+4.00">+2.00</option>
							  <option value="+7.00">+2.50</option>
							  <option value="+8.00">+3.00</option>
							  <option value="+9.00">+3.50</option>
							</select>
							</div>
							</div><br />
							<div class="form-group col-md-8">
							<label for="inputEmail4">PD</label>
							<select class="form-control" id="FormControl" name="pd" required disabled>
							  <option value="">None</option>
							  <option value="41">41</option>
							  <option value="42">42</option>
							  <option value="43">43</option>
							  <option value="44">44</option>
							  <option value="45">45</option>
							  <option value="46">46</option>
							  <option value="57">57</option>
							  <option value="58">58</option>
							  <option value="59">59</option>
							  <option value="61">61</option>
							  <option value="62">62</option>
							  <option value="63">63</option>
							  <option value="64">64</option>
							  <option value="65">65</option>
							  <option value="76">76</option>
							  <option value="77">77</option>
							  <option value="78">78</option>
							  <option value="79">79</option>
							</select>
							</div><br />
							<div class="form-group col-md-8">
							<label for="inputEmail4">Additional comment about prescription</label>
							<textarea class="form-control" id="FormControl" rows="3" name="adcomment" disabled></textarea>
							</div><br />
							<div class="form-group col-md-8">
							<label for="inputEmail4">Lens Thickness</label>
							<select class="custom-select my-1 mr-sm-2 form-control" id="FormControl" name="thickness" disabled>
								<option value=" Standard (1.49)"> Standard (1.49)</option>
								<option value=" Thin and Light (1.55)"> Thin and Light (1.55)</option>
								<option value="Polycarbonate (1.59)">Polycarbonate (1.59)</option>
								<option value=" Super Thin (1.6)"> Super Thin (1.6)</option>
								<option value="Ultra Thin (1.67)">Ultra Thin (1.67)</option>
								<option value="As Thin as possible (1.74)">As Thin as possible (1.74)</option>
							</select>
							</div><br />
							<div class="form-group col-md-8">
							<label for="inputEmail4">Lens Type</label>
							<select class="custom-select my-1 mr-sm-2 form-control" id="FormControl" name="lenstype" disabled>
								<option value="Clear">Clear(Lenses for everyday use)</option>
								<option value="Clear Blue Light">Clear Blue light (Protect your eyes from the emissions of digital devices)</option>
								<option value="Photochromic">Photochromic (Darken when outdoors Remain clear when indoors)</option>
							</select>
							</div>
							<input type="hidden" name="presprice" value="1000">
							<button type="submit" name="add" style="margin-top: 5px;" class="btn btn-warning">Add to cart<i class="fas fa-shopping-cart"></i></button>
							</div>
							</div>
							</div>
							</div>               
							</div>
							</div>
                        </form><br /><br />
					</div> 
				<?php $i++;
				}
			}?>
		</div><br /><br />
	</div>
<br /><br /><br /><br /><br /><br />

<!--footer-->
<?php include("footer.php"); ?>
</body>

</html>