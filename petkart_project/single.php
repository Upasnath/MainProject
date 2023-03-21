<?php
include"dbconfig.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>petkart online shopping website</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
		<?php
		if(isset($_SESSION['login']))
		{
		?><li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Welcome <?=$_SESSION['name']?> </a></li>
		<li> <a href="logout.php" ><i class="fa fa-unlock-alt" aria-hidden="true"></i> Logout </a></li>

		   <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
		<?php
		}
		else
		{
?>		

 <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
			
	
			<?php
		}
		?>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="#" method="post">
					<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="index.php"><span>Pet</span>Kart<i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   <li class="share">Share On : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>



		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<?php
include"nav.php";
?>
<!-- //banner-top -->
<!-- Modal1 -->
		
<!-- //Modal1 -->
<!-- Modal2 -->
		
<!-- //Modal2 -->
<!--/single_page-->
       <!-- /banner_bottom_agile_info -->

  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	     <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<?php
					$result=select("select * from ((`pet_info` INNER JOIN subcategory on pet_info.sub_cat_id=subcategory.sub_id) INNER JOIN registration on pet_info.seller_id=registration.seller_id)  where pet_info.pet_id='".$_REQUEST['id']."'");
					while($r=mysqli_fetch_array($result))
					{extract($r);
					?>
					<ul class="slides">
						<li data-thumb="seller/images/<?=$image?>">
							<div class="thumb-image"> <img src="seller/images/<?=$image?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3><?=$sub_name?></h3>
					<p><span class="item_price"><?=$price?> ₹ </span> </p>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Quality -</h5>
							<h5>Status: <?php
							if($status==1)
							{
								echo"In Stock";
							}
							else
							{
								echo"Out Of Stock";
							}
							?></h5>
							<h5>Colour: <?=$color?></h5>
							<h5>Seller Name: <?=ucwords($name)?></h5>
							<h5>Mobile No  : <?=$mobile?></h5>
							
						</div>
					</div></br>
					
					<div class="occasion-cart">
						<?php
											if($status!=1)
											{
												?>
<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Formal Blue Shirt" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="IND" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " /><?php
																	if(isset($_SESSION['login']))
																	{
																	?>
																	<input type="submit" name="submit" disabled value="Add to cart" class="btn btn-danger"   class="button" />
																	<input type="submit" name="submit" disabled value="Buy Now" class="btn btn-danger"   class="button" />
																<?php
																	}
																	else
																	{
																		
																	}
																?>	
																</fieldset>
															</form>
												<?php
											}
											else
											{
												?>
<form action="myphp.php" method="post">
																<fieldset>
																	
																	<input type="hidden" name="seller_id" value="<?=$seller_id?>" />
																	<input type="hidden" name="sub_cat" value="<?=$sub_name?>" />
																	<input type="hidden" name="userid" value="<?=$_SESSION['userid']; ?>" />
																	<input type="hidden" name="petid" value="<?=$pet_id?>"/>
																	<input type="hidden" name="currency_code" value="IND" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																<?php
																	if(isset($_SESSION['login']))
																	{
																	?>
																	<input type="submit" name="submit" value="Add to cart" class="btn btn-success" class="button" />
																	<input type="submit" name="buynow" value="Buy Now" class="btn btn-info" class="button" />
																<?php
																	}
																	else
																	{
																		
																	}
																?>	
																</fieldset>
															</form>
												<?php
											}
											?>
										
														
																			
					</div>
					<ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
						                                   <li class="share">Share On : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
					
		      </div>
	 			<div class="clearfix"> </div>
				<!-- /new_arrivals --> 
	<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Description</li>
							
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <div class="tab1">

							<div class="single_page_agile_its_w3ls">
							  <h6><?=ucwords($sub_name)?></h6>
							   <p><?=ucwords($description)?></p>
							 	</div>
						</div>
						<!--//tab_one-->
						
						   <?php
					}
						   ?>
					</div>
				</div>	
			</div>
	<!-- //new_arrivals --> 
	  	<!--/slider_owl-->
	
			<div class="w3_agile_latest_arrivals">
			<h3 class="wthree_text_info">Featured <span>Arrivals</span></h3>	
			
			
			<?php
			$t=select("select * from `pet_info` INNER JOIN subcategory on pet_info.sub_cat_id=subcategory.sub_id where pet_info.pet_id>'".$_REQUEST['id']."' limit 0,4");
			while($ty=mysqli_fetch_array($t))
			{extract($ty);
			?>
					  <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
											<img src="seller/images/<?=$image?>" style="height:210px" alt="" class="pro-image-front">
										<img src="seller/images/<?=$image?>" style="height:210px" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.php?id=<?=$pet_id?>" class="link-product-add-cart">Quick View</a>
													</div>
											</div>
											<?php
											if($status==1)
											{
											?>
											<span class="product-new-top">IN STOCK</span>
											<?php
											}
											else
											{
												?>
											<span class="product-new-top" style="background-color:gray">OUT OF STOCK</span>
												
												<?php
											}
											?>	
									</div>
									<div class="item-info-product ">
										<h4><a href="single.php"><?=$sub_name?></a></h4>
										<div class="info-product-price">
												<span class="item_price"><?=$price?> ₹ </span>
											</div>
										<?php
											if($status!=1)
											{
												?>
<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Formal Blue Shirt" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<?php
																	if(isset($_SESSION['login']))
																	{
																	?><input type="submit" name="submit" disabled value="Add to cart" class="btn btn-danger"   class="button" />
																<?php
																	}
																	else
																	{
																		
																	}
																?>	
																</fieldset>
															</form>
												<?php
											}
											else
											{
												?>
<form action="myphp.php" method="post">
																<fieldset>
																	
																	<input type="hidden" name="sub_cat" value="<?=$sub_name?>" />
																	<input type="hidden" name="userid" value="<?=$_SESSION['userid']; ?>" />
																	<input type="hidden" name="petid" value="<?=$pet_id?>"/>
																	<input type="hidden" name="currency_code" value="IND" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																<?php
																	if(isset($_SESSION['login']))
																	{
																	?>
																	<input type="submit" name="submit" value="Add to cart" class="btn btn-success" class="button" />
																<?php
																	}
																	else
																	{
																		
																	}
																?>	</fieldset>
															</form>
												<?php
											}
											?>
																			
									</div>
								</div>
							</div>
                       
						
					  <?php
			}
					  ?>
							<div class="clearfix"> </div>
					<!--//slider_owl-->
		         </div>
	        </div>
 </div>
<!--//single_page-->
<!--/grids-->

<!--grids-->
<!-- footer -->
<?php 
include"footer.php";
?>
<!-- //footer -->

<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
	<!-- single -->
<script src="js/imagezoom.js"></script>
<!-- single -->
<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
<!-- //script for responsive tabs -->		
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
