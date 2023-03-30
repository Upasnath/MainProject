<?php
include"dbconfig.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>PetKart online selling and buying webiste</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ w₹ ow.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
		    <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
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
				<h1><a href="₹ ex.php"><span>Pet</span>Kart <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
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
	<div class="banner-bootom-w3-agileits">
	<div class="container">
         <!-- mens -->
		<div class="col-md-4 products-left">
			
			<div class="css-treeview">
				<h4>Categories</h4>
				<ul class="tree-list-pad">
					<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Dog's</label>
						<ul>
						<?php
										$u=select("select * from `subcategory` where cat_id='1'");
										while($ur=mysqli_fetch_array($u))
										{extract($ur);
										?>
							<li><input type="checkbox" id="item-0-0" /><label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="mens.php?id=<?=$sub_id?>" style="text-decoration:none"><?=$sub_name?></a></label>
								
							</li>
							<?php
										}
											?>
						</ul>
					</li>
					
					<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Cat's</label>
						<ul>
						<?php
										$u=select("select * from `subcategory` where cat_id='2'");
										while($ur=mysqli_fetch_array($u))
										{extract($ur);
										?>
							<li><input type="checkbox" id="item-0-0" /><label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="mens.php?id=<?=$sub_id?>" style="text-decoration:none"><?=$sub_name?></a></label>
								
							</li>
							<?php
										}
											?>
						</ul>
					</li>
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products-right">
			<h5>Product <span>Compare(0)</span></h5>
			<div class="sort-grid">
				
				
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-top">
				
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<img class="img-responsive" src="images/banner2.jpg" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="images/banner5.jpg" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="images/banner2.jpg" alt=" "/>
						</li>

					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<?php
					$a2="select * from `pet_info` INNER JOIN subcategory on pet_info.sub_cat_id=subcategory.sub_id where sub_cat_id='".$_REQUEST['id']."' limit 0,8 ";
						$result11=select($a2);
						while($r11=mysqli_fetch_array($result11))
						{
							extract($r11);
						?>
				<div class="col-md-4 product-men">
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
									<h4><a href="single.php?id=<?=$pet_id?>"><?=$sub_name?></a></h4>
											<div class="info-product-price">
<span class="item_price"><?=$price?> ₹ </span>
										</div>
															<form action="myphp.php" method="post">
																<fieldset>
																	
																	<input type="hidden" name="sub_cat" value="<?=$sub_name?>" />
																	<input type="hidden" name="userid" value="<?=$_SESSION['userid']; ?>" />
																	<input type="hidden" name="petid" value="<?=$pet_id?>"/>
																	<input type="hidden" name="currency_code" value="₹ " />
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
																?>
																</fieldset>
															</form>
														
																			
									</div>
								</div>
							</div>
							
							
			<?php
						}
			?>
			
				
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
		<div class="single-pro">
		<?php
		$tu=select("select * from `pet_info` INNER JOIN subcategory on pet_info.sub_cat_id=subcategory.sub_id where pet_id>'".$_REQUEST['id']."' limit 0,8");
		while($ry=mysqli_fetch_array($tu))
		{extract($ry);
		?>
			<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="seller/images/<?=$image?>" style="height:210px"  alt="" class="pro-image-front">
										<img src="seller/images/<?=$image?>" style="height:210px"  alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.php?id=<?=$pet_id?>" class="link-product-add-cart">Quick View</a>
													</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.php?id=<?=$pet_id?>"><?=$sub_name?></a></h4>
								<div class="info-product-price">
											<span class="item_price"><?=$price?> ₹ </span>
											
										</div>
										<form action="myphp.php" method="post">
																<fieldset>
																	
																	<input type="hidden" name="sub_cat" value="<?=$sub_name?>" />
																	<input type="hidden" name="userid" value="<?=$_SESSION['userid']; ?>" />
																	<input type="hidden" name="petid" value="<?=$pet_id?>"/>
																	<input type="hidden" name="currency_code" value="₹ " />
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
																?>
																</fieldset>
															</form>
																			
									</div>
								</div>
							</div>
							<?php
		}
							?>
							
                           
							
							
								
								
							<div class="clearfix"></div>
		</div>
	</div>
</div>	
<!-- //mens -->
<!--/grids-->

<!--grids-->
<!-- footer -->
<?php 
include"footer.php";
?>
<!-- //footer -->

<!-- login -->
			<div class="modal fade" id="myModal4" tab₹ ex="-1" role="dialog" aria-labelledby="myModalLabel">
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
<script src="js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(w₹ ow).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~w₹ ow.location.search.₹ exOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
	<!---->
							<script type='text/javascript'>//<![CDATA[ 
							$(w₹ ow).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 1000, 7000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>  

							</script>
						<script type="text/javascript" src="js/jquery-ui.js"></script>
					 <!---->
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
