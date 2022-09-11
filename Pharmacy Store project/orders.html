<?php
session_start();
if(!isset($_SESSION["TYPE"] ) && !isset($_SESSION["ID"] ) ){
	header("Location: login.php");
}else if($_SESSION["TYPE"] == 0 ){
	$type = $_SESSION["TYPE"] ;
	$id = $_SESSION["ID"]; 
}else{
	header("Location: login.php");
}
include("php/connect.php");
?>
<!DOCTYPE html>
<html class="no-js">

<?php include ("include/head.php") ?>

<body>

<body>
	
	<div id="canvas">
		<div id="box_wrapper">
			     <?php include ("include/header.php") ?>
				 <?php $active = "orders"; include ("include/sidebar.php");?>
    
		

			<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Orders</h2>
						</div>
					</div>
				</div>
			</section>


			<?php 
			
			$total = 0;
			$query = "SELECT * FROM `orders` ORDER BY `ID` DESC";
			$result = $link->query($query);
			if ($result->num_rows > 0) {
			echo'
			<section class="ls section_padding_top_75">
				<div class="container" >
					<div class="row" style="background-color: #fff;border: 1px solid #fff;border-radius: 4px;margin-bottom: 30px;padding: 20px; position: relative;">
						<div class="table-responsive">
								<table class="table shop_table cart cart-table">
									<thead>
										<tr>
											<td class="product-info">Product</td>
											<td class="product-info">User</td>
											<td class="product-price-td">Price</td>
											<td class="product-remove">&nbsp;</td>
										</tr>
									</thead>
									<tbody>
									';
			while($array = $result->fetch_array()){
				$order_id = $array["ID"];
				$product_id = $array["PRODUCT_ID"];
				$user_id = $array["USER_ID"];
				$query1 = "SELECT * FROM `products` WHERE `ID`=$product_id";
				$result1 = $link->query($query1);
				$array1 = $result1->fetch_array();
				$product_name = $array1["NAME"];
				$price = $array1["PRICE"];
				$image = $array1["IMAGE"];
				$description = $array1["DESCRIPTION"];
				$total += $price;
				$query2 = "SELECT * FROM `user` WHERE `ID`=$user_id";
				$result2 = $link->query($query2);
				$array2 = $result2->fetch_array();
				$user_name = $array2["NAME"];
				$email = $array2["EMAIL"];
				$phone = $array2["PHONE"];
				$address = $array2["ADDRESS"];
										echo'
										<tr class="cart_item">
											<td class="product-info">
												<div class="media">
													<div class="media-left">
														<a href="shop-product-right.html">
															<img class="media-object cart-product-image" src="'.$image.'" alt="">
														</a>
													</div>
													<div class="media-body">
														<h4 class="media-heading">
															<a href="shop-product-right.html">'.$product_name.'</a>
														</h4>
												
													</div>
												</div>
											</td>
											<td class="product-info">
												<div class="media">
													<div class="media-body">
														<h4 class="media-heading">
															<a href="shop-product-right.html">'.$user_name.'</a>
														</h4>
														<span class="grey">Email: </span>'.$email.' <br>
														<span class="grey">Phone: </span>'.$phone.' <br>
														<span class="grey">Address: </span>'.$address.' <br>
													</div>
												</div>
											</td>
											<td class="product-price">
												<span class="currencies">JOD</span><span class="amount">'.$price.'</span>
											</td>
											<td class="product">
												<a href="php/orders.php?&user_id='.$user_id.'&product_id='.$product_id.'" title="Remove this item">
													<i class="fa fa-trash-o fa-2x"></i>
												</a>
											</td>
										</tr>
										';
									}
									echo'
									</tbody>
								</table>
							</div>
					</div>
				</div>
			</section>
			
			
			';
			}else {
				echo '
				<section class="ls section_padding_top_100 section_padding_bottom_100">
					<div class="container" style="text-align:center;">
						<h4>0 Order ...</h4>
					</div>
				</section>
				';
			}
			?>
			
			
			
						
			<?php include ("include/footer.php");?>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>

</body>


</html>