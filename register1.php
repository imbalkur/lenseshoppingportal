<?php
	include('db.php');	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$email=	$_POST['email'];
	$phone=$_POST['phone'];
	$psw=$_POST['psw'];
	$address=$_POST['address'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$pin=$_POST['pin'];
	if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
	else {
         $SELECT = "SELECT email From user Where email = ? Limit 1";
         $INSERT = "INSERT Into user (fname, lname, gender, email, phone, psw, address,state,city,pin) values(?, ?, ?, ?, ?, ?,?,?,?,?)";
         //Prepare statement
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("s", $email);
         $stmt->execute();
         $stmt->bind_result($email);
         $stmt->store_result();
         $rnum = $stmt->num_rows;
         if ($rnum==0) {
			$stmt->close();
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssssssssi", $fname, $lname,$gender,$email, $phone, $psw,$address,$state,$city,$pin);
			$stmt->execute();
			echo "<script> alert('You have registered sucessfully now you may proceed to login');window.location.href='login.php';</script>";
			redirect('login.php', 'refresh');
         } 
		 else {
			echo "<script> alert('Someone already registered using this email');window.location.href='register.php';</script>";
         }
        $stmt->close();
        $conn->close();
    }
?>										