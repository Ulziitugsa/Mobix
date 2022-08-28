<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
//Connet to the database
require_once("conn_mobix.php");
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Watches an E-Commerce online Shopping Category Flat Bootstrap Responsive Website Template| Men :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/component.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/jquery.easydropdown.js"></script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body>
	<div class="men_banner">
   	  		<div class="container">
   	  	<div class="header_top">
   	  	   <div class="header_top_left">
	  	      <div class="box_11"><a href="view_cart.php">
		      <h4><p>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p><img src="images/bag.png" alt=""/><div class="clearfix"> </div></h4>
		      </a></div>
	          <p class="empty"><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
	          <div class="clearfix"> </div>
	       </div>
           <div class="header_top_right">
		  	 <div class="lang_list">
				<select tabindex="4" class="dropdown">
					<option value="" class="label" value="">$ Us</option>
					<option value="1">Dollar</option>
					<option value="2">Euro</option>
				</select>
				<b>

			 </div>
			 <ul class="header_user_info">
			  <a class="login" href="login.html">
				<i class="user"> </i> 
				<li class="user_desc"><a href="account_validation.php">My Account</a></li>
			  </a>
			  <div class="clearfix"> </div>
		     </ul>
		    <!-- start search-->
				<div class="search-box">
				   <div id="sb-search" class="sb-search">
					  <form>
						 <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
						 <input class="sb-search-submit" type="submit" value="">
						 <span class="sb-icon-search"> </span>
					  </form>
				    </div>
				 </div>
				 <!----search-scripts---->
				 <script src="js/classie1.js"></script>
				 <script src="js/uisearch.js"></script>
				   <script>
					 new UISearch( document.getElementById( 'sb-search' ) );
				   </script>
					<!----//search-scripts---->
		            <div class="clearfix"> </div>
			 </div>
		     <div class="clearfix"> </div>
	  </div>
	  <div class="header_bottom">
	   <div class="logo">
		  <h1><a href="index.html"><span class="m_1">M</span>obix</a></h1>
	   </div>
   	   <div class="menu">
	     <ul class="megamenu skyblue">
			<li><a class="color2" href="#">Brands</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Brands</h4>
								<ul>
									<li><a href="products.php?value=Apple&a=brand">Apple</a></li>
									<li><a href="products.php?value=Samsung&a=brand">Samsung</a></li>
									<li><a href="products.php?value=OnePlus&a=brand">OnePlus</a></li>
									<li><a href="products.php?value=Google&a=brand">Google</a></li>
									<li><a href="products.php?value=Huawei&a=brand">Huawei</a></li>

								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="products.php">HeadPhones</a></li>
									<li><a href="products.php">Powerbanks</a></li>
									<li><a href="products.php">Phone Cases</a></li>
									<li><a href="products.php">Screen Protectors</a></li>
									<li><a href="products.php">Cables & Chargers</a></li>
									<li><a href="products.php">Others</a></li>
						
								</ul>	
							</div>							
						</div>
						<div class="col2">
							<div class="h_nav">
								<h4>Trends</h4>
								<ul>
									<li class>
										<div class="p_left">
										  <img src="images/test4.jfif" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="single.php?productID=100003">Google Pixel 4</a></h4>
											<span class="item-cat"><small><a href="#">Smartphone</a></small></span>
											<span class="price">1049.99 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
									<li>
										<div class="p_left">
										  <img src="images/test5.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="404.html">Sony wh-1000xm3</a></h4>
											<span class="item-cat"><small><a href="#">Headphones</a></small></span>
											<span class="price">388.99 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>

								</ul>	
							</div>												
						</div>
					  </div>
					</div>
			</li>
			<li><a class="color4" href="#">Accessories</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Brands</h4>
								<ul>
									<li><a href="products.php?value=Apple&a=brand">Apple</a></li>
									<li><a href="products.php?value=Samsung&a=brand">Samsung</a></li>
									<li><a href="products.php?value=OnePlus&a=brand">OnePlus</a></li>
									<li><a href="products.php?value=Google&a=brand">Google</a></li>
									<li><a href="products.php?value=Huawei&a=brand">Huawei</a></li>
								</ul>
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="products.php">HeadPhones</a></li>
									<li><a href="products.php">Powerbanks</a></li>
									<li><a href="products.php">Phone Cases</a></li>
									<li><a href="products.php">Screen Protectors</a></li>
									<li><a href="products.php">Cables & Chargers</a></li>
									<li><a href="products.php">Others</a></li>
						
								</ul>	
							</div>							
						</div>
						<div class="col2">
							<div class="h_nav">
								<h4>Trends</h4>
								<ul>
									<li class>
										<div class="p_left">
										  <img src="images/test4.jfif" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="single.php?productID=100004">Google Pixel 4</a></h4>
											<span class="item-cat"><small><a href="#">Smartphone</a></small></span>
											<span class="price">1049.99 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
									<li>
										<div class="p_left">
										  <img src="images/test5.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="404.html">Sony wh-1000xm3</a></h4>
											<span class="item-cat"><small><a href="#">Headphones</a></small></span>
											<span class="price">388.99 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>

								</ul>	
							</div>												
						</div>
					  </div>
					</div>
				</li>				
				
				<li class="active grid"><a class="color3" href="products.php">Products</a></li>
				<li><a class="color7" href="404.html">News</a></li>
				
				<div class="clearfix"> </div>
			</ul>
			
			</div>
			
	        <div class="clearfix"> </div>
			
	        </div>
			
	    </div>
   </div>
   <div class="men">
    <div class="container">
    	<div class="col-md-4 sidebar_men">
    	  <h3>Brands</h3>
    	  <ul class="product-categories color">
		  <?php 
		  $query = "SELECT brand, COUNT(brand) as brand_count FROM products GROUP BY brand;";
			$result=mysqli_query($link, $query);
			$a='brand';
			
			while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				$url="products.php?value=" . $row['brand'] . "&a=" . $a;
			echo"<li class='cat-item cat-item-42'><a href=$url>$row[brand]</a> <span class='count'>($row[brand_count])</span></li>";
			}
			?>
		 </ul>
		  <h3>Ram</h3>
    	  <ul class="product-categories color"></li>
			<?php  $query = "SELECT ram, COUNT(ram) as ram_count FROM products GROUP BY ram;";
			$result=mysqli_query($link, $query);
			$a='ram';
			while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				$url="products.php?value=" . $row['ram'] . "&a=" . $a;
			echo"<li class='cat-item cat-item-42'><a href=$url>$row[ram]GB</a> <span class='count'>($row[ram_count])</span></li>";
			}
			?>
		  </ul>
		  <h3>Screen Size</h3>
    	  <ul class="product-categories color">
			<?php  $query = "SELECT screenSize, COUNT(screenSize) as screenSize_count FROM products GROUP BY screenSize;";
			$result=mysqli_query($link, $query);
			$a='screenSize';
			while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				$url="products.php?value=" . $row['screenSize'] . "&a=" . $a;
			echo"<li class='cat-item cat-item-42'><a href=$url>$row[screenSize]in</a> <span class='count'>($row[screenSize_count])</span></li>";
			}
			?>
		  </ul>
		  <h3>Storage</h3>
    	  <ul class="product-categories">
		  <?php  $query = "SELECT storage, COUNT(storage) as storage_count FROM products GROUP BY storage;";
			$result=mysqli_query($link, $query);
			$a='storage';
			while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				$url="products.php?value=" . $row['storage'] . "&a=" . $a;
			echo"<li class='cat-item cat-item-42'><a href=$url>$row[storage]GB</a> <span class='count'>($row[storage_count])</span></li>";
			}
			?>
		  </ul>

		</div>
    	<div class="col-md-8 mens_right">
    		<div class="dreamcrub">
			   	<ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                       <span></span>
                    </li>
                 
                </ul>
                <ul class="previous">
                	<li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="mens-toolbar">
                 <div class="sort">
               	   <div class="sort-by">
		            <label>Sort By</label>
		            <select>
		                            <option value="">
		                    Position                </option>
		                            <option value="">
		                    Name                </option>
		                            <option value="">
		                    Price                </option>
		            </select>
		            <a href=""><img src="images/arrow2.gif" alt="" class="v-middle"></a>
                   </div>
    		     </div>
    	        <ul class="women_pagenation dc_paginationA dc_paginationA06">
			     <li><a href="#" class="previous">Page : </a></li>
			     <li class="active"><a href="#">1</a></li>
			     <li><a href="#">2</a></li>
		  	    </ul>
                <div class="clearfix"></div>		
		        </div>
    		<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
					<div class="cbp-vm-options">
						<a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid" title="grid">Grid View</a>
						<a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List View</a>
					</div>
					<div class="pages">   
        	 <div class="limiter visible-desktop">
               <label>Show</label>
                  <select>
                            <option value="" selected="selected">
                    9                </option>
                            <option value="">
                    15                </option>
                            <option value="">
                    30                </option>
                  </select> per page        
               </div>
       	   </div>
					<div class="clearfix"></div>
					<ul>
					<?php
					
					if(isset($_GET["search"]))
					{
					$search = $_GET["search"];
					$query = "SELECT productID, brand, model, price, image FROM products where (model like '%$search%')";
					}
					else if(isset($_GET["value"]) && isset($_GET["a"]))
					{
					$value=$_GET["value"];
					$a=$_GET["a"]; 	
					$query = "SELECT productID, brand, model, price, image FROM products where ($a='$value')";
					}

					else
					{
					$query = "SELECT productID, brand, model, price, image FROM products";
					}
						$result=mysqli_query($link, $query);
					while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
					{
						echo"
					  <li class='simpleCart_shelfItem'>
							<a class='cbp-vm-image' href='single.php?productID=".$row['productID'].">".$row['model']."'</a>
							 <div class='view view-first'>
					   		  <div class='inner_content clearfix'>
								<div class='product_imag'>
									<div class='mask1'><img src=images/$row[image] alt='image' class='img-responsive zoom-img'></div>
									<div class='mask'>
			                       		<div class='info'>Quick View</div>
					                 </div>
					                 <div class='product_container'>
									   <h4>$row[model]</h4>
									   <p>$row[brand]</p>
									   <div class='price mount item_price'>$$row[price]</div>
									   <a class='button item_add cbp-vm-icon cbp-vm-add' href='add_to_cart.php?productID=".$row['productID']."'>Add to cart</a>
									 </div>		
								  </div>
			                     </div>
		                      </div>
		                    </a>
						</li>
					";
					}
					mysqli_close($link);
					?>
					</ul>
				</div>
				<script src="js/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="js/classie.js" type="text/javascript"></script>
    	</div>
    </div>
   </div>
   <div class="footer">
   	 <div class="container">
   	 	<div class="newsletter">
			<h3>Newsletter</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
			<form>
			  <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
			  <input type="submit" value="SUBSCRIBE">
			</form>
		</div>
   		<div class="cssmenu">
		   <ul>
			<li class="active"><a href="#">Privacy</a></li>
			<li><a href="#">Terms</a></li>
			<li><a href="#">Shop</a></li>
			<li><a href="#">About</a></li>
			<li><a href="contact.html">Contact</a></li>
		  </ul>
		</div>
		<ul class="social">
			<li><a href=""> <i class="instagram"> </i> </a></li>
			<li><a href=""><i class="fb"> </i> </a></li>
			<li><a href=""><i class="tw"> </i> </a></li>
	    </ul>
	    <div class="clearfix"></div>
	    <div class="copy">
           <p> &copy; 2015 Watches. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
	    </div>
   	</div>
   </div>
</body>
</html>		