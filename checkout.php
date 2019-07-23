<!doctype html>
<?php
session_start();
include("functions/functions.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>Your Wish</title>

<link rel="stylesheet" href="styles/style.css" media="all" />	
	
</head>
<body>
	
	<!--main container starts-->
	<div class="main_wrapper">
		
		<!--header starts-->
		<div class="header_wrapper">
			
			<a href="home.php"><img id="logo" src="images/homeheader.jpg" /></a>
		  
		</div>
		<!--header ends-->
		
		<!--navigation bar starts-->
		<div class="menubar">
			
			<ul id="menu">
			
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				
				<li><a href="">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				
				
			</ul>
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
				<input type="text" name="user_query" placeholder="Search..." />
				<input type="submit" name="search" value="Search" />
				</form>
				
			</div>
			
		</div>
		<!--navigation bar ends-->
		
		<!--content wrapper starts-->
		<div class="content_wrapper">
		
			<br><br><br><div id="sidebar">
			
				<div id="sidebar_title">Categories</div>
			
				<ul id="cats">
					
					
			
					<?php getCats(); ?>
					
			
				</ul>
			
				<div id="sidebar_title">Sub Categaories</div>
			
				<ul id="cats">
			
					<?php getBrands(); ?>
			
				</ul>
			
			</div>
			
			<div id="content_area">
				
				<?php cart(); ?>
				
				<div id="shopping_cart">
					
					
					
					<span style="float: right;font-size: 18px; padding: 5px; line-height: 40px;">
						
					Welcome Guest! <b style="color: #679EE0">Shopping Cart -</b>Total Items: <?php total_items(); ?> Total Price: <?php total_price(); ?> <a href="cart.php" style="color: "#679EE0">Go to Cart</a>
						
					</span>
					
				</div>
								
			
				<div id="products_box">
					
					<?php
						
					if(!isset($_SESSION['customer_email'])){
						
						include("customer_login.php");
						
					}
					else{
						
						include("payment.php");
						
					}
					
					?>	
						
			</div>	 
					 
			</div>
			
		</div>
		<!--content wrapper ends-->
		
		<div id="footer">
		
			<h2 style="text-align: center; padding: 30px;">&copy; By Kushantha & Jayana</h2>
			
		</div>
		
	</div>
	<!--main container ends-->
	
</body>
</html>