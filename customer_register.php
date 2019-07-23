<!doctype html>
<?php
session_start();
include("functions/functions.php");
include("customer/includes/db.php");
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
								
				<form action="customer_register.php" method="post" enctype="multipart/form-data">
					
					<table align="center" width="750">
						
						<tr align="center">
							<td colspan="6"><h2>Create an Account</h2></td>
						</tr>
						
						<tr>
							<td align="right">Customer Name:</td>
							<td><input type="text" name="c_name" required/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Email:</td>
							<td><input type="text" name="c_email" required/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Password:</td>
							<td><input type="password" name="c_pass" required/></td>
						</tr>
				
						<tr>
							<td align="right">Customer Address:</td>
							<td><textarea cols="15" rows="6" name="c_address"></textarea></td>
						</tr>
						
						<tr>
							<td align="right">Customer Contact:</td>
							<td><input type="text" name="c_contact" required/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Image:</td>
							<td><input type="file" name="c_image" required/></td>
						</tr>
						
						
					<tr align="center">
						<td colspan="6"><input type="submit" name="register" value="Create Account" /></td>
					</tr>
					
					
					
					</table>
				
				</form>
				 
					 
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
						
						
<?php 
	if(isset($_POST['register'])){
	
		
		$ip = getIp();
		
		$c_name = $_POST['c_name'];
		$c_email = $_POST['c_email'];
		$c_pass = $_POST['c_pass'];
		$c_country = $_POST['c_address'];
		$c_contact = $_POST['c_contact'];
		$c_image = $_FILES['c_image']['name'];
		$c_image_tmp = $_FILES['c_image']['tmp_name'];
	
		
		move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
		
		 $insert_c = "insert into customers (customer_ip,customer_name,customer_email,customer_pass,customer_address,customer_contact,customer_image) values ('$ip','$c_name','$c_email','$c_pass','$c_address','$c_contact','$c_image')";
	
		$run_c = mysqli_query($con, $insert_c); 
		
		$sel_cart = "select * from cart where ip_add='$ip'";
		
		$run_cart = mysqli_query($con, $sel_cart); 
		
		$check_cart = mysqli_num_rows($run_cart); 
		
		if($check_cart==0){
		
		$_SESSION['customer_email']=$c_email; 
		
		echo "<script>alert('Account has been created successfully, Happy Shopping!')</script>";
		
		
		}
		else {
		
		$_SESSION['customer_email']=$c_email; 
		
		echo "<script>alert('Account has been created successfully, Happy Shopping!')</script>";
		
		echo "<script>window.open('checkout.php','_self')</script>";
		
		
		}
	}





?>
						