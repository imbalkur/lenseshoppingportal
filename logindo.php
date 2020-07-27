<?php
	include "db.php";
	if(isset($_REQUEST["submit"])){
		$email=$_REQUEST["email"];
		$password=$_REQUEST["psw"];
		$query=mysqli_query($conn,"select * from user where email='$email' && psw='$password'");
		$rowcount=mysqli_num_rows($query);
		if($rowcount==true){
			session_start();
			$_SESSION['loginname'] = $email;
			echo "<script> alert('login successfully');window.location.href='afterlogin/index.php';</script>;";}
		else {
?>
<script> alert("incorrect email or password");window.history.back();</script>
<?php
		}
	}
 ?>