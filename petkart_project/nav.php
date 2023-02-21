<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DOG'S <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.php"><img src="images/to.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
										<?php
										$u=select("select * from `subcategory` where cat_id='1'");
										while($ur=mysqli_fetch_array($u))
										{extract($ur);
										?>
											<li><a href="mens.php?id=<?=$sub_id?>"><?=$sub_name?></a></li>
											
											<?php
										}
											?>
										</ul>
									</div>
									
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CAT'S<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
										<?php
										$u=select("select * from `subcategory` where cat_id='2'");
										while($ur=mysqli_fetch_array($u))
										{extract($ur);
										?>
											<li><a href="mens.php?id=<?=$sub_id?>"><?=$sub_name?></a></li>
											
											<?php
										}
											?>
										</ul>
									</div>
									
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.php"><img src="images/ab3.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">RABBIT'S<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
										<?php
										$u=select("select * from `subcategory` where cat_id='4'");
										while($ur=mysqli_fetch_array($u))
										{extract($ur);
										?>
											<li><a href="mens.php?id=<?=$sub_id?>"><?=$sub_name?></a></li>
											
											<?php
										}
											?>
										</ul>
									</div>
									
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.php"><img src="images/reb.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BIRDS<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
										<?php
										$u=select("select * from `subcategory` where cat_id='5'");
										while($ur=mysqli_fetch_array($u))
										{extract($ur);
										?>
											<li><a href="mens.php?id=<?=$sub_id?>"><?=$sub_name?></a></li>
											
											<?php
										}
											?>
										</ul>
									</div>
									
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.php"><img src="images/bir.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<!-- <li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HAMSTER'S<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
										<?php
										$u=select("select * from `subcategory` where cat_id='6'");
										while($ur=mysqli_fetch_array($u))
										{extract($ur);
										?>
											<li><a href="mens.php?id=<?=$sub_id?>"><?=$sub_name?></a></li>
											
											<?php
										}
											?>
										</ul>
									</div>
									
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.php"><img src="images/chu.jpeg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li> -->
					 </ul>
				</div>
				 </div>
			</nav>	
		</div>
		<?php
		if(isset($_SESSION['login']))
		{
			?>
			<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<a href="womens.php"><button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						<?php
						$i=select("SELECT * FROM `addcart` WHERE `userid`='".$_SESSION['userid']."'  ");
						$o=mysqli_num_rows($i);
						?>
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-box" aria-hidden="true"><?=$o?></i></button>
					</a>
						</div>
		</div>
			
			<?php
		}
		else
		{
			
		}
		?>
		
		<div class="clearfix"></div>
	</div>
</div>