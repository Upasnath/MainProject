<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info">New <span>Arrivals</span></h3>		
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
						<?php
						$result=select("select * from `category` limit 0, 4");
						while($r=mysqli_fetch_array($result))
						{extract($r);
							?>
							<li> <?=$cat_name?></li>
						<?php
						}
						?>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">
						<?php
					$a1="select * from `pet_info` INNER JOIN subcategory on pet_info.sub_cat_id=subcategory.sub_id where cat_id='1' ORDER BY pet_info.pet_id DESC limit 0,8 ";
						$result1=select($a1);
						while($r1=mysqli_fetch_array($result1))
						{
							extract($r1);
						?>
							<div class="col-md-3 product-men">
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
																	<input type="hidden" name="cancel_return" value=" " />
																<?php
																	if(isset($SESSION['login']))
																	{
																	?>
																	<input type="submit" name="submit" disabled value="Add to cart" class="btn btn-danger"   class="button" />
																<?php
																	}
																?></fieldset>
															</form>
														
												<?php
											}
											else
											{
												?>
<form action="myphp.php" method="post">
																<fieldset>
																	
																	<input type="hidden" name="sub_cat" value="<?=$sub_name?>" />
																	<input type="hidden" name="userid" value="<?=$SESSION['userid']; ?>" />
																	<input type="hidden" name="petid" value="<?=$pet_id?>"/>
																	<input type="hidden" name="currency_code" value="IND" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																<?php
																	if(isset($SESSION['login']))
																	{
																	?>
																	<input type="submit" name="submit" value="Add to cart" class="btn btn-success" class="button" />
																<?php
																	}
																	else
																	{
																		
																	}
																?></fieldset>
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
							
				
							<div class="clearfix"></div>
						</div>
						<!--//tab_one-->
						<!--/tab_two-->
						<div class="tab2">
						<?php
					$a2="select * from `pet_info` INNER JOIN subcategory on pet_info.sub_cat_id=subcategory.sub_id where cat_id='2' ORDER BY pet_info.pet_id DESC  limit 0,8 ";
						$result11=select($a2);
						while($r11=mysqli_fetch_array($result11))
						{
							extract($r11);
						?>
							 <div class="col-md-3 product-men">
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
																	if(isset($SESSION['login']))
																	{
																	?>
																	<input type="submit" name="submit" disabled value="Add to cart" class="btn btn-danger"   class="button" />
																<?php
																	}
																?></fieldset>
															</form>										
																	<?php
											}
											else
											{
												?>
<form action="myphp.php" method="post">
																<fieldset>
																	
																	<input type="hidden" name="sub_cat" value="<?=$sub_name?>" />
																	<input type="hidden" name="userid" value="<?=$SESSION['userid']; ?>" />
																	<input type="hidden" name="petid" value="<?=$pet_id?>"/>
																	<input type="hidden" name="currency_code" value="IND" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																<?php
																	if(isset($SESSION['login']))
																	{
																	?>
																	<input type="submit" name="submit" value="Add to cart" class="btn btn-success" class="button" />
																<?php
																	}
																	else
																	{
																		
																	}
																?></fieldset>
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
							
						    
								
							<div class="clearfix"></div>
						</div>
					 <!--//tab_two-->
						<div class="tab3">
								<?php
					$a3="select * from `pet_info` INNER JOIN subcategory on pet_info.sub_cat_id=subcategory.sub_id where cat_id='4'  ORDER BY pet_info.pet_id DESC limit 0,8 ";
						$result111=select($a3);
						while($r111=mysqli_fetch_array($result111))
						{
							extract($r111);
						?>
						<div class="col-md-3 product-men">
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
																	<input type="hidden" name="cancel_return" value=" " />
																	<?php
																	if(isset($SESSION['login']))
																	{
																	?>
																	<input type="submit" name="submit" disabled value="Add to cart" class="btn btn-danger"   class="button" />
																<?php
																	}
																?></fieldset>
															</form>												
															<?php
											}
											else
											{
												?>
<form action="myphp.php" method="post">
																<fieldset>
																	
																	<input type="hidden" name="sub_cat" value="<?=$sub_name?>" />
																	<input type="hidden" name="userid" value="<?=$SESSION['userid']; ?>" />
																	<input type="hidden" name="petid" value="<?=$pet_id?>"/>
																	<input type="hidden" name="currency_code" value="IND" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<?php
																	if(isset($SESSION['login']))
																	{
																	?>
																	<input type="submit" name="submit" value="Add to cart" class="btn btn-success" class="button" />
																<?php
																	}
																	else
																	{
																		
																	}
																?></fieldset>
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
													
													
													
							<div class="clearfix"></div>
						</div>
						<div class="tab4">
							<?php
					$a3="select * from `pet_info` INNER JOIN subcategory on pet_info.sub_cat_id=subcategory.sub_id where cat_id='5' ORDER BY pet_info.pet_id DESC limit 0,8 ";
						$result111=select($a3);
						while($r111=mysqli_fetch_array($result111))
						{
							extract($r111);
						?>
							    <div class="col-md-3 product-men">
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
																	if(isset($SESSION['login']))
																	{
																	?>
																	<input type="submit" name="submit" disabled value="Add to cart" class="btn btn-danger"   class="button" />
																<?php
																	}
																?>
																</fieldset>
															</form>												<?php
											}
											else
											{
												?>

															<form action="myphp.php" method="post">
																<fieldset>
																	
																	<input type="hidden" name="sub_cat" value="<?=$sub_name?>" />
																	<input type="hidden" name="userid" value="<?=$SESSION['userid']; ?>" />
																	<input type="hidden" name="petid" value="<?=$pet_id?>"/>
																	<input type="hidden" name="currency_code" value="IND" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<?php
																	if(isset($SESSION['login']))
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
														
												<?php
											}
											?>
										
																			
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
			</div>
		</div>