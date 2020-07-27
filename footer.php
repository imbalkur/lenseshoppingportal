<style>
.footer2{
  background-color:#000d33;
  color: white;
  margin: auto;
  padding: 1px;  
}
*{
  margin: 0px;
}
.footer2 h4{
  padding-left: 50%;
}
.headcontact{
	padding-left: 2%;
	padding-top: 20px;
	font-size: 30px;
	color: white;
	margin-left:10%;
}
.formcontact {
	margin-left:10%;
	margin-right: 10%;
	padding-bottom:30px;	
}
.box{
	padding:7px 35px;
	border: 1px solid grey;
	border-radius: 20px;
	width: 100%;
}
.subbox{
	color: black;
	background-color: white;
	padding: 10px;
	border-radius: 20px;
	cursor: pointer;
}
.footer1 {
  background-image: linear-gradient(to right,#0044cc,  #001a4d);
}
.container{
  margin-left: 5%; 
  color: white;
  background-image: linear-gradient(to right, #002db3, #000d33s);
}
.links{
  margin-left: 200px;
  padding-top: 50px;
}
</style>
<footer class="footer1">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="contact" id="contact">
					<p class="headcontact">Contact Us</p>
					<form action="footer.php" method="POST" class="formcontact">
					  <input class="box" type="text" placeholder="Name" required name="name"><br /><br />
					  <input class="box" type="email" placeholder="Email" required name="email"><br /><br />
					  <input class="box" type="text" placeholder="Subject" required name="subject"><br /><br />
					  <input class="box" type="text" placeholder="Comment" required name="comment"><br /><br />
					  <button class="subbox" type="submit" name="submit">
						<i class="fa fa-paper-plane"></i> SEND MESSAGE
					  </button>
					</form>
					<?php
						$conn = mysqli_connect("localhost","root","") or die("No Connection");
						mysqli_select_db($conn,"lense") or die("No Database");
						if(isset($_POST['submit']))
						{
							$name=$_POST['name'];
							$email =$_POST['email'];
							$subject=$_POST['subject'];
							$comment=$_POST['comment'];
							$s1="INSERT INTO contact (name,email,subject,comment)VALUES('".$name."','".$email."','".$subject."','".$comment."') ";
							mysqli_query($conn,$s1) or die (mysqli_error($conn));
							echo "<script> alert('message sent successfully');
								window.location.href='index.php';</script>";
						} ?>
				</div>
			</div>
			<div class="col links">
				Women<br />
				<a href="womeneyeglasses.php">Eyeglasses</a>
				<br /><a href="womensunglasses.php">Sunglasses</a><br /><br /><br />
				Men<br />
				<a href="meneyeglasses.php">Eyeglasses</a><br />
				<a href="mensunglasses.php">Sunglasses</a><br /><br />   
				<a href="contacts.php">Contacts</a><br /><br />
			</div>
		</div>
	</div>
</footer>
<footer class="footer2">
	<h4>By M</h4>
</footer>