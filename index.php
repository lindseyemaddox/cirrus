<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); // HTTP head
?>    		

	<title>Cirrus Outdoor Power Equipment</title>
	<meta name="description" content="">

</head>

<body>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); // header and navigation
?>    		

    <section class="slider">
        <div class="flexslider">
          	<ul class="slides">
            	<li data-thumb="/_images/Kubota-B2320DT-Tractor-Package.jpg">

				   	<section id="kubota">
						
						<div class="inner">
							
							<div class="left">
								
								<img src="/_images/Kubota-B2320DT-Tractor-Package.jpg">

								<div class="overlay">
									
									<a href="/compare.php"><span class="btn"><img src="/_images/icon-compare.png"> Compare</span></a>

									<div class="details">
										
										<p>Kubota 23HP 4WD Gear Drive Tractor</p>
										<p>Kubota LA304 Loader</p>
										<p>18ft Trailer w/brakes and slide in ramps</p>                                  
										<p>4ft Rotary Cutter </p>

									</div><!--details-->

								</div>

							</div><!--left-->

							<div class="right">
								
									<?php
									  $sql = "SELECT * FROM products WHERE product_id = 1";
									  $res = mysql_query($sql);
									  while($row = mysql_fetch_array($res, MYSQL_ASSOC))
									  {
										$available=$row['availability'];//set variable
										if ($available !== '1')//If not equal to 1, do somthing
										  {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price out-of-stock'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed out-of-stock'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments out-of-stock'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
									  		echo '<p class="availability">Availability: <span>out of stock</span></p>';

										  }else {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
											echo '<p class="availability">Availability: in stock</p>';
										  }
									}?>
								<p class="information"><a href="/B2320DT.php" class="fancybox fancybox.iframe"><img src="/_images/icon-information.png">get more information</a></p>

							</div><!--right-->

							<div class="clear"></div>

						</div><!--inner-->

					</section>



  	    		</li>
  	    		<li data-thumb="/_images/Kubota-B2620HSD-Tractor-Package.jpg">


				   	<section id="kubota">
						
						<div class="inner">
							
							<div class="left">
								
								<img src="/_images/Kubota-B2620HSD-Tractor-Package.jpg">

								<div class="overlay">
									
									<a href="/compare.php"><span class="btn"><img src="/_images/icon-compare.png"> Compare</span></a>

									<div class="details">
										
										<p>Kubota 26HP 4WD Hydrostat Tractor</p>
										<p>Kubota LA364 Loader</p>
										<p>18ft Trailer w/brakes and slide in ramps</p>                                  
										<p>4ft Rotary Cutter </p>

									</div><!--details-->

								</div>

							</div><!--left-->

							<div class="right">
								
									<?php
									  $sql = "SELECT * FROM products WHERE product_id = 2";
									  $res = mysql_query($sql);
									  while($row = mysql_fetch_array($res, MYSQL_ASSOC))
									  {
										$available=$row['availability'];//set variable
										if ($available !== '1')//If not equal to 1, do somthing
										  {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price out-of-stock'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed out-of-stock'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments out-of-stock'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
									  		echo '<p class="availability">Availability: <span>out of stock</span></p>';

										  }else {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
											echo '<p class="availability">Availability: in stock</p>';
										  }
									}?>
								<p class="information"><a href="/B2620HSD.php" class="fancybox fancybox.iframe"><img src="/_images/icon-information.png">get more information</a></p>

							</div><!--right-->

							<div class="clear"></div>

						</div><!--inner-->

					</section>


  	    		</li>
  	    		<li data-thumb="/_images/Kubota-L3200F-Tractor-Package.jpg">


				   	<section id="kubota">
						
						<div class="inner">
							
							<div class="left">
								
								<img src="/_images/Kubota-L3200F-Tractor-Package.jpg">

								<div class="overlay">
									
									<a href="/compare.php"><span class="btn"><img src="/_images/icon-compare.png"> Compare</span></a>

									<div class="details">
										
										<p>Kubota 31.9HP 2WD Gear Drive Tractor</p>
										<p>18ft Trailer w/brakes and slide in ramps</p>                                  
										<p>5ft Rotary Cutter</p>

									</div><!--details-->

								</div>

							</div><!--left-->

							<div class="right">
								
									<?php
									  $sql = "SELECT * FROM products WHERE product_id = 3";
									  $res = mysql_query($sql);
									  while($row = mysql_fetch_array($res, MYSQL_ASSOC))
									  {
										$available=$row['availability'];//set variable
										if ($available !== '1')//If not equal to 1, do somthing
										  {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price out-of-stock'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed out-of-stock'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments out-of-stock'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
									  		echo '<p class="availability">Availability: <span>out of stock</span></p>';

										  }else {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
											echo '<p class="availability">Availability: in stock</p>';
										  }
									}?>
								
								<p class="information"><a href="/L3200F.php" class="fancybox fancybox.iframe"><img src="/_images/icon-information.png">get more information</a></p>

							</div><!--right-->

							<div class="clear"></div>

						</div><!--inner-->

					</section>


  	    		</li>
  	    		<li data-thumb="/_images/Kubota-L3200DT-Tractor-Package.jpg">


				   	<section id="kubota">
						
						<div class="inner">
							
							<div class="left">
								
								<img src="/_images/Kubota-L3200DT-Tractor-Package.jpg">

								<div class="overlay">
									
									<a href="/compare.php"><span class="btn"><img src="/_images/icon-compare.png"> Compare</span></a>

									<div class="details">
										
										<p>Kubota 31.9HP 4WD Gear Drive Tractor</p>
										<p>Kubota LA524FL Loader</p>
										<p>18ft Trailer w/brakes and slide in ramps</p>                                  
										<p>5ft Rotary Cutter </p>

									</div><!--details-->

								</div>

							</div><!--left-->

							<div class="right">
								
									<?php
									  $sql = "SELECT * FROM products WHERE product_id = 4";
									  $res = mysql_query($sql);
									  while($row = mysql_fetch_array($res, MYSQL_ASSOC))
									  {
										$available=$row['availability'];//set variable
										if ($available !== '1')//If not equal to 1, do somthing
										  {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price out-of-stock'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed out-of-stock'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments out-of-stock'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
									  		echo '<p class="availability">Availability: <span>out of stock</span></p>';

										  }else {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
											echo '<p class="availability">Availability: in stock</p>';
										  }
									}?>
								<p class="information"><a href="/L3200DT.php" class="fancybox fancybox.iframe"><img src="/_images/icon-information.png">get more information</a></p>

							</div><!--right-->

							<div class="clear"></div>

						</div><!--inner-->

					</section>


  	    		</li>
  	    		<li data-thumb="/_images/Kubota-L3200HST-Tractor-Package.jpg">

				   	<section id="kubota">
						
						<div class="inner">
							
							<div class="left">
								
								<img src="/_images/Kubota-L3200HST-Tractor-Package.jpg">

								<div class="overlay">
									
									<a href="/compare.php"><span class="btn"><img src="/_images/icon-compare.png"> Compare</span></a>

									<div class="details">
										
										<p>Kubota 31.9HP 4WD Hydrostat Drive Tractor</p>
										<p>Kubota LA524FL Loader</p>
										<p>18ft Trailer w/brakes and slide in ramps</p>                                  
										<p>5ft Rotary Cutter </p>

									</div><!--details-->

								</div>

							</div><!--left-->

							<div class="right">
								
									<?php
									  $sql = "SELECT * FROM products WHERE product_id = 5";
									  $res = mysql_query($sql);
									  while($row = mysql_fetch_array($res, MYSQL_ASSOC))
									  {
										$available=$row['availability'];//set variable
										if ($available !== '1')//If not equal to 1, do somthing
										  {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price out-of-stock'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed out-of-stock'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments out-of-stock'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
									  		echo '<p class="availability">Availability: <span>out of stock</span></p>';

										  }else {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
											echo '<p class="availability">Availability: in stock</p>';
										  }
									}?>
								<p class="information"><a href="/L3200HST.php" class="fancybox fancybox.iframe"><img src="/_images/icon-information.png">get more information</a></p>

							</div><!--right-->

							<div class="clear"></div>

						</div><!--inner-->

					</section>

  	    		</li>  	    		
  	    		<li data-thumb="/_images/Kubota-L3800DT-Tractor-Package.jpg">

				   	<section id="kubota">
						
						<div class="inner">
							
							<div class="left">
								
								<img src="/_images/Kubota-L3800DT-Tractor-Package.jpg">

								<div class="overlay">
									
									<a href="/compare.php"><span class="btn"><img src="/_images/icon-compare.png"> Compare</span></a>

									<div class="details">
										
										<p>Kubota 37.4HP 4WD Gear Drive Tractor</p>
										<p>Kubota LA524FL Loader</p>
										<p>18ft Trailer w/brakes and slide in ramps</p>                                  
										<p>6ft Rotary Cutter </p>

									</div><!--details-->

								</div>

							</div><!--left-->

							<div class="right">
								
									<?php
									  $sql = "SELECT * FROM products WHERE product_id = 6";
									  $res = mysql_query($sql);
									  while($row = mysql_fetch_array($res, MYSQL_ASSOC))
									  {
										$available=$row['availability'];//set variable
										if ($available !== '1')//If not equal to 1, do somthing
										  {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price out-of-stock'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed out-of-stock'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments out-of-stock'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
									  		echo '<p class="availability">Availability: <span>out of stock</span></p>';

										  }else {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
											echo '<p class="availability">Availability: in stock</p>';
										  }
									}?>
								<p class="information"><a href="/L3800DT.php" class="fancybox fancybox.iframe"><img src="/_images/icon-information.png">get more information</a></p>

							</div><!--right-->

							<div class="clear"></div>

						</div><!--inner-->

					</section>

  	    		</li>
  	    		<li data-thumb="/_images/Kubota-L3800HST-Tractor-Package.jpg">

				   	<section id="kubota">
						
						<div class="inner">
							
							<div class="left">
								
								<img src="/_images/Kubota-L3800HST-Tractor-Package.jpg">

								<div class="overlay">
									
									<a href="/compare.php"><span class="btn"><img src="/_images/icon-compare.png"> Compare</span></a>

									<div class="details">
										
										<p>Kubota 37.4HP 4WD Hydrostat Drive Tractor</p>
										<p>Kubota LA524FL Loader</p>
										<p>18ft Trailer w/brakes and slide in ramps</p>                                  
										<p>6ft Rotary Cutter </p>

									</div><!--details-->

								</div>

							</div><!--left-->

							<div class="right">
								
									<?php
									  $sql = "SELECT * FROM products WHERE product_id = 7";
									  $res = mysql_query($sql);
									  while($row = mysql_fetch_array($res, MYSQL_ASSOC))
									  {
										$available=$row['availability'];//set variable
										if ($available !== '1')//If not equal to 1, do somthing
										  {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price out-of-stock'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed out-of-stock'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments out-of-stock'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
									  		echo '<p class="availability">Availability: <span>out of stock</span></p>';

										  }else {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
											echo '<p class="availability">Availability: in stock</p>';
										  }
									}?>
								<p class="information"><a href="/L3800HST.php" class="fancybox fancybox.iframe"><img src="/_images/icon-information.png">get more information</a></p>

							</div><!--right-->

							<div class="clear"></div>

						</div><!--inner-->

					</section>

  	    		</li>

 	    		<li data-thumb="/_images/Kubota-L4600F-Tractor-Package.jpg">

				   	<section id="kubota">
						
						<div class="inner">
							
							<div class="left">
								
								<img src="/_images/Kubota-L4600F-Tractor-Package.jpg">

								<div class="overlay">
									
									<a href="/compare.php"><span class="btn"><img src="/_images/icon-compare.png"> Compare</span></a>

									<div class="details">
										
										<p>Kubota 46.3HP 2WD Gear Drive Tractor</p>
										<p>18ft Trailer w/brakes and slide in ramps</p>                                  
										<p>6ft Rotary Cutter </p>

									</div><!--details-->

								</div>

							</div><!--left-->

							<div class="right">
								
									<?php
									  $sql = "SELECT * FROM products WHERE product_id = 8";
									  $res = mysql_query($sql);
									  while($row = mysql_fetch_array($res, MYSQL_ASSOC))
									  {
										$available=$row['availability'];//set variable
										if ($available !== '1')//If not equal to 1, do somthing
										  {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price out-of-stock'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed out-of-stock'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments out-of-stock'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
									  		echo '<p class="availability">Availability: <span>out of stock</span></p>';

										  }else {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
											echo '<p class="availability">Availability: in stock</p>';
										  }
									}?>
								<p class="information"><a href="/L4600F.php" class="fancybox fancybox.iframe"><img src="/_images/icon-information.png">get more information</a></p>

							</div><!--right-->

							<div class="clear"></div>

						</div><!--inner-->

					</section>

  	    		</li>  	    		

 	    		<li data-thumb="/_images/Kubota-L4600DT-Tractor-Package.jpg">

				   	<section id="kubota">
						
						<div class="inner">
							
							<div class="left">
								
								<img src="/_images/Kubota-L4600DT-Tractor-Package.jpg">

								<div class="overlay">
									
									<a href="/compare.php"><span class="btn"><img src="/_images/icon-compare.png"> Compare</span></a>

									<div class="details">
										
										<p>Kubota 46.3HP 4WD Gear Drive Tractor</p>
										<p>Kubota LA764 Loader</p>
										<p>18ft Trailer w/brakes and slide in ramps</p>                                  
										<p>6ft Rotary Cutter </p>

									</div><!--details-->

								</div>

							</div><!--left-->

							<div class="right">
								
									<?php
									  $sql = "SELECT * FROM products WHERE product_id = 9";
									  $res = mysql_query($sql);
									  while($row = mysql_fetch_array($res, MYSQL_ASSOC))
									  {
										$available=$row['availability'];//set variable
										if ($available !== '1')//If not equal to 1, do somthing
										  {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price out-of-stock'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed out-of-stock'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments out-of-stock'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
									  		echo '<p class="availability">Availability: <span>out of stock</span></p>';

										  }else {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
											echo '<p class="availability">Availability: in stock</p>';
										  }
									}?>
								<p class="information"><a href="/L4600DT.php" class="fancybox fancybox.iframe"><img src="/_images/icon-information.png">get more information</a></p>

							</div><!--right-->

							<div class="clear"></div>

						</div><!--inner-->

					</section>

  	    		</li> 
 	    		<li data-thumb="/_images/Kubota-L4600HST-Tractor-Package.jpg">

				   	<section id="kubota">
						
						<div class="inner">
							
							<div class="left">
								
								<img src="/_images/Kubota-L4600HST-Tractor-Package.jpg">

								<div class="overlay">
									
									<a href="/compare.php"><span class="btn"><img src="/_images/icon-compare.png"> Compare</span></a>

									<div class="details">
										
										<p>Kubota 46.3HP 4WD Hydrostat Tractor</p>
										<p>Kubota LA764 Loader</p>
										<p>18ft Trailer w/brakes and slide in ramps</p>                                  
										<p>6ft Rotary Cutter </p>

									</div><!--details-->

								</div>

							</div><!--left-->

							<div class="right">
								
									<?php
									  $sql = "SELECT * FROM products WHERE product_id = 10";
									  $res = mysql_query($sql);
									  while($row = mysql_fetch_array($res, MYSQL_ASSOC))
									  {
										$available=$row['availability'];//set variable
										if ($available !== '1')//If not equal to 1, do somthing
										  {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price out-of-stock'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed out-of-stock'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments out-of-stock'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
									  		echo '<p class="availability">Availability: <span>out of stock</span></p>';

										  }else {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
											echo '<p class="availability">Availability: in stock</p>';
										  }
									}?>
								<p class="information"><a href="/L4600HST.php" class="fancybox fancybox.iframe"><img src="/_images/icon-information.png">get more information</a></p>

							</div><!--right-->

							<div class="clear"></div>

						</div><!--inner-->

					</section>

  	    		</li> 
 	    		<li data-thumb="/_images/Kubota-M5640SUD-Tractor-Package.jpg">

				   	<section id="kubota">
						
						<div class="inner">
							
							<div class="left">
								
								<img src="/_images/Kubota-M5640SUD-Tractor-Package.jpg">

								<div class="overlay">
									
									<a href="/compare.php"><span class="btn"><img src="/_images/icon-compare.png"> Compare</span></a>

									<div class="details">
										
										<p>Kubota 56HP 4WD Gear Drive Tractor</p>
										<p>Kubota LA1002-5R2 Loader</p>
										<p>6ft Heavy Duty Rotary Cutter</p>                                  
										<p>*Optional 20ft Trailer (Not Included in Price)</p>

									</div><!--details-->

								</div>

							</div><!--left-->

							<div class="right">
								
										<?php
									  $sql = "SELECT * FROM products WHERE product_id = 11";
									  $res = mysql_query($sql);
									  while($row = mysql_fetch_array($res, MYSQL_ASSOC))
									  {
										$available=$row['availability'];//set variable
										if ($available !== '1')//If not equal to 1, do somthing
										  {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price out-of-stock'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed out-of-stock'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments out-of-stock'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
									  		echo '<p class="availability">Availability: <span>out of stock</span></p>';

										  }else {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
											echo '<p class="availability">Availability: in stock</p>';
										  }
									}?>
								<p class="information"><a href="/M5640SUD.php" class="fancybox fancybox.iframe"><img src="/_images/icon-information.png">get more information</a></p>

							</div><!--right-->

							<div class="clear"></div>

						</div><!--inner-->

					</section>

  	    		</li> 

	    		<li data-thumb="/_images/Kubota-M7040SUHD-Tractor-Package.jpg">

				   	<section id="kubota">
						
						<div class="inner">
							
							<div class="left">
								
								<img src="/_images/Kubota-M7040SUHD-Tractor-Package.jpg">

								<div class="overlay">
									
									<a href="/compare.php"><span class="btn"><img src="/_images/icon-compare.png"> Compare</span></a>

									<div class="details">
										
										<p>Kubota 71HP 4WD Hydraulic Shuttle Tractor</p>
										<p>Kubota LA1153 Loader</p>
										<p>6ft Heavy Duty Rotary Cutter</p>                                  
										<p>*Optional 20ft Trailer (Not Included in Price)</p>

									</div><!--details-->

								</div>

							</div><!--left-->

							<div class="right">
								
									<?php
									  $sql = "SELECT * FROM products WHERE product_id = 12";
									  $res = mysql_query($sql);
									  while($row = mysql_fetch_array($res, MYSQL_ASSOC))
									  {
										$available=$row['availability'];//set variable
										if ($available !== '1')//If not equal to 1, do somthing
										  {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price out-of-stock'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed out-of-stock'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments out-of-stock'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
									  		echo '<p class="availability">Availability: <span>out of stock</span></p>';

										  }else {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
											echo '<p class="availability">Availability: in stock</p>';
										  }
									}?>
								<p class="information"><a href="/M7040SUHD.php" class="fancybox fancybox.iframe"><img src="/_images/icon-information.png">get more information</a></p>

							</div><!--right-->

							<div class="clear"></div>

						</div><!--inner-->

					</section>

  	    		</li>
           	</ul>
        </div>
    </section>

<div class="clear"></div>

    <section class="slider">
        <div class="flexslider">
          	<ul class="slides">

	    		<li data-thumb="/_images/LS-Tractor-G3033.jpg">

				   	<section id="ls-tractor">
						
						<div class="inner">
							
							<div class="left">
								
										<?php
									  $sql = "SELECT * FROM products WHERE product_id = 13";
									  $res = mysql_query($sql);
									  while($row = mysql_fetch_array($res, MYSQL_ASSOC))
									  {
										$available=$row['availability'];//set variable
										if ($available !== '1')//If not equal to 1, do somthing
										  {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price out-of-stock'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed out-of-stock'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments out-of-stock'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
									  		echo '<p class="availability">Availability: <span>out of stock</span></p>';

										  }else {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
											echo '<p class="availability">Availability: in stock</p>';
										  }
									}?>
								<p class="information"><a href="/M7040SUHD.php" class="fancybox fancybox.iframe"><img src="/_images/icon-information.png">get more information</a></p>

							</div><!--left-->


							<div class="right">
								
								<img src="/_images/LS-Tractor-G3033.jpg">

								<div class="overlay">
									
									<a href="/compare.php"><span class="btn"><img src="/_images/icon-compare.png"> Compare</span></a>

									<div class="details">
										
										<!-- <p>Kubota 71HP 4WD Hydraulic Shuttle Tractor</p>
										<p>Kubota LA1153 Loader</p>
										<p>6ft Heavy Duty Rotary Cutter</p>                                  
										<p>*Optional 20ft Trailer (Not Included in Price)</p> -->

									</div><!--details-->

								</div>

							</div><!--right-->

							<div class="clear"></div>

						</div><!--inner-->

					</section>

  	    		</li>

	    		<li data-thumb="/_images/LS-Tractor-G3033.jpg">

				   	<section id="ls-tractor">
						
						<div class="inner">
							
							<div class="left">
								
										<?php
									  $sql = "SELECT * FROM products WHERE product_id = 13";
									  $res = mysql_query($sql);
									  while($row = mysql_fetch_array($res, MYSQL_ASSOC))
									  {
										$available=$row['availability'];//set variable
										if ($available !== '1')//If not equal to 1, do somthing
										  {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price out-of-stock'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed out-of-stock'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments out-of-stock'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
									  		echo '<p class="availability">Availability: <span>out of stock</span></p>';

										  }else {
										  	echo "<h4>".$row['brand']."</h4>";
										  	echo "<h5>Package Deal</h5>";
										  	echo "<h6>".$row['model_number']."</h6>";
										  	echo "<p class='price'><span>$".$row['cash_price']."</span> Cash Price</p>";
										  	echo "<p class='price financed'><span>$".$row['financed_price']."</span> Financed Price</p>";
										  	echo "<p class='price payments'>Payments as Low As <span>$".$row['payments_price']."</span> per month</p>";
											echo '<p class="availability">Availability: in stock</p>';
										  }
									}?>
								<p class="information"><a href="/M7040SUHD.php" class="fancybox fancybox.iframe"><img src="/_images/icon-information.png">get more information</a></p>

							</div><!--left-->


							<div class="right">
								
								<img src="/_images/LS-Tractor-G3033.jpg">

								<div class="overlay">
									
									<a href="/compare.php"><span class="btn"><img src="/_images/icon-compare.png"> Compare</span></a>

									<div class="details">
										
										<!-- <p>Kubota 71HP 4WD Hydraulic Shuttle Tractor</p>
										<p>Kubota LA1153 Loader</p>
										<p>6ft Heavy Duty Rotary Cutter</p>                                  
										<p>*Optional 20ft Trailer (Not Included in Price)</p> -->

									</div><!--details-->

								</div>

							</div><!--right-->

							<div class="clear"></div>

						</div><!--inner-->

					</section>

  	    		</li>  	    		
           	</ul>
        </div>
    </section>
<div class="clear"></div>

	<script type="text/javascript">
		$(document).ready(function() {

			$('.fancybox').fancybox();

		});
	</script>

  <!-- FlexSlider -->
  <script defer src="../jquery.flexslider.js"></script><script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
        controlNav: "thumbnails",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/footer.php'); // footer, close body and html
?>    		