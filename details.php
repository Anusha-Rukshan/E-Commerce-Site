<!doctype html>
<?php
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
			
				<li><a href="">Home</a></li>
				<li><a href="">All Products</a></li>
				
				<li><a href="">Sign Up</a></li>
				<li><a href="">Shopping Cart</a></li>
				
				
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
				
				<div id="shopping_cart">
					
					<span style="float: right;font-size: 18px; padding: 5px; line-height: 40px;">
						
					Welcome Guest! <b style="color: #679EE0">Shopping Cart -</b>Total Items: Total Price: <a href="cart.php" style="color: "#679EE0">Go to Cart</a>
						
					</span>
					
				</div>
			
				
					<div id="products_box">
					<?php
					if(isset($_GET['pro_id'])) {
						
					$product_id = $_GET['pro_id'];
						
					$run_pro = mysqli_query($con, $get_pro);
						
					$get_pro = "select * from products where product_id='$product_id'";
	
	$run_pro = mysqli_query($con,$get_pro);
	
	while($row_pro = mysqli_fetch_array($run_pro)){
		
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
		
		echo "
			<div id='single_product'>
			
			<h3><b>$pro_title</b></h3>
			
			<img src='admin_area/product_images/$pro_image' width='400' height='500' />
			
			<p><b> Rs.$pro_price</b></p>
			
			<a href='index.php' style='float:left;'>Go Back</a>
			
			<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
			
			</div>
		";
		
	}
}
	
?>

				
			
				 
					 
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