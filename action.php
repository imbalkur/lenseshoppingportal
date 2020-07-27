<?php
include "db.php";
if(isset($_POST["category"])){
	$category_query="select * from category";
	$run_query=mysqli_query($conn,$category_query);
	echo"
		<div class='nav nav-pills nav-stacked'>
<li class='active'><a href='#'><h4>category</h4></a></li>
	";
	if(mysqli_num_rows($run_query)>0){
		while($row=mysqli_fetch_array($run_query)){
			$cid=$row["cat_id"];
			$cname=$row["cat_title"];
			echo"
			<li><a href='#'>$cname</a></li>
			";
		}
		echo "</div>";
	}
}


if(isset($_POST["getProduct"])){
	$product_query="select * from product order by brand() limit 0.9";
	$run_query=mysqli_query($conn,$product_query);
	if(mysqli_num_rows($run_query)>0){
		while($row=mysqli_fetch_array($run_query)){
			$pid=$row["pid"];
			$pcat=$row["pcategory"];
			$pbrand=$row["pbrand"];
			$pbrand=$row["ptitle"];
			$pprice=$row["pprice"];
			$pdesc=$row["pdesc"];
			$pimage=$row["pimage"];
			$pkey=$row["pkeywords"];
			echo "
			<div class='col-md-4'>
<div class='card'>
<div class='card-header'>$ptitle</div>
<div class='card-body'>
<img src='images/$pimage' width='175px' height='300px'/><br />
</div>
<div class='card-header'>$pprice
<button style='float:right;' class='$pid btn btn-danger btn-xs'>Add to cart </button></div>
</div>
</div>"
}
?>