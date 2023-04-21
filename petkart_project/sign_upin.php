

<script>petkart_project\js\signup.js</script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
									<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="email" required="">
								<label>Email</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<input type="submit" name="login" value="Sign In">
						</form>
						<style>.button-container {
  display: flex;
  justify-content: center;
}

.button {
  background-color: transparent;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px;
  cursor: pointer;
  transition: all 0.3s ease;
  border-radius: 5px;
}

.blue {
  background-color: #3c80f6;
}

.green {
  background-color: #3fa35d;
}

.pink {
  background-color: #f0478b;
}

.button:hover {
  background-color: rgba(255, 255, 255, 0.2);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

</style>
						  <ul> <div class="button-container">
						  <a href="admin\index.php"><button class="button blue">Admin</button>
						  <a href="seller\index.php"><button class="button green">Seller</button>
						  <a href="trainer\index.html"><button class="button pink">Trainer</button>
</div>


														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/t7.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
		<?php
		
		if(isset($_REQUEST['login']))
	{
		extract($_REQUEST);
	$query="select * from user_reg where email='$email' and password='$password'";
	
	
	
	
	$login_data=select($query);
	$n=mysqli_num_rows($login_data);
	if($n==1)
	{
		while($data=mysqli_fetch_array($login_data))
		{
		extract($data);
		
		}
		
		$_SESSION['userid']=$user_reg_id;
		$_SESSION['name']=$name;
		$_SESSION['login']="yes";
		
		//echo"1";
		echo'<script>alert("Login Successful")</script>';
	}
	else
	{
		echo"email or password is incorrect";
	}
	}
		
	?>
<!-- //Modal1 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
						 <form  method="post" autocomplete="off">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="Confirm_Password" required=""> 
								<label>Confirm Password</label>
								<span></span>
							</div> 
							
							<input type="submit" name="signup" value="Sign Up">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
					
															<li><a href="https://www.facebook.com/" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="https://www.instagram.com/" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/t7.jpg" style="height:400px" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
		<script src="js/signup.js"></script>

		 <?php
		if(isset($_REQUEST['signup']))
		{
			$password=$_POST['password'];
			$confirm_password=$_POST['Confirm_Password'];
			if($password==$confirm_password){

			extract($_REQUEST);
			$n=iud("INSERT INTO `user_reg`( `name`, `email`, `password`) VALUES ('$Name','$Email','$password')");
			if($n==1)
			{
				echo'<script>alert("Signup Successful")</script>';
			}
			else
			{
				echo'<script>alert("Something Wrong Try Again ")</script>';

			}
		}
		else{
			echo'<script>alert("password does not match")</script>';
		}
	}
		?> 