<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<!--script src="js/jquery-2.2.3.min.js"></script-->
		<!--script src="js/bootstrap.min.js"></script-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<meta name="viewport" content="width=device-width, initial-scale=1">


		</script>

	</head>
	<body>
	
		<div class="container-fluid">
			<div class="row">
				
				<div class="col-sm-8" >
					<!--================================show product list-->

					<table class="table table-bordered table-hover">
						<tr>
							<th>Product code</th>
							<th>color</th>
							<th>unit price</th>
							<th>vat</th>
							<th>vat cost</th>
							<th>Price with vat</th>
							<th>Discount</th>
							<th>Final Price</th>
							<th>Quantity</th>
							<th>Sub Total</th>
							<th>Action</th>
						</tr>
							<?php $fullTotalPrice=0;?>
							<?php foreach($products as $row):?>
							
							<tr>
								<td><?= $row['p_code']?></td>
								<td><?= $row['color']?></td>
								<td><?= $row['price']?></td>
								<td>4%</td>
								<td>
									<?php
										$mainprice=$row['price'];
										$vat=(4*$mainprice)/100;
										echo $vat;
									?>
								</td>
								<td>
									<?php
										
										$priceWithVat=$mainprice+$vat;
										echo $priceWithVat;
									?>
								</td>
								<td>0%</td>
								<td>
									<?php
										
										$finalprice=$mainprice+$vat;
										echo $priceWithVat;
									?>
								</td>
								<td><?= $row['quantity']?></td>
								<td>
									<?php
										$quantity=$row['quantity'];
										$subtotal=$finalprice*$quantity;
										echo $subtotal;

										$fullTotalPrice=$fullTotalPrice+$subtotal;
									?>

								</td>
								<td><a href="<?=base_url();?>shop/delete/<?=$row['p_code']?>" >Delete</a></td>
							</tr>
							<?php endforeach;?>
					</table>


				<hr>
				<h4>Coustomer Info</h4>
					<div class="row">
					
						<div class="col-sm-8" >

							<form action="<?php echo base_url();?>shop/checkout" method="POST" class="form-inline">
					
								Selling Date:
								<input type="date" name="sellingDate" class="form-control" ><br><br>

								Delivery Code:
								<input type="date" name="deliveryDate" class="form-control" ><br><br>

								Phone number :
								<input type="text" name="phoneNumber" class="form-control" ><br><br>

								Customer :
								<input type="text" name="customername" class="form-control" ><br><br>

								Address :
								<input type="text" name="address" class="form-control" ><br><br>

								Email :
								<input type="text" name="email" class="form-control" ><br><br>

							
						</div>
						<div class="col-sm-4" >
								Vat(%) :
								<input type="text" name="vat" value="4" class="form-control" disabled><br><br>
								Discount(%) :
								<input type="text" name="discount" value="0" class="form-control" id="discount" onkeyup="calculateDiscount(this.value)""><br><br>
								Total Price :
								<input type="text" name="totalprice" value="<?= $fullTotalPrice?>" id="total_price" class="form-control" disabled><br><br>

								Less :
								<input type="text" name="less" value="0" class="form-control" id="less" onkeyup="calculateLess(this.value)"><br><br>
								Final Price :
								<input type="text" name="fianlPrice" value="<?= $fullTotalPrice?>" readonly="readonly" class="form-control" id="final_price" ><br><br>
								Due :
								<input type="text" name="due" value="0" class="form-control" id="due" readonly="readonly"><br><br>

								Advanced :
								<input type="text" name="advanced" value="0" class="form-control" id="advanced" onkeyup="calculatAdvanced(this.value)" ><br><br>

								<input type="submit" name="submitCheckout" value="submit" class="form-control"><br><br>


							</form>
						</div>
					</div>
				</div>

				
				<div class="col-sm-4" >
					<!--================================product insert form-->
					<form action="<?php echo base_url();?>shop/addProduct" method="POST" class="form-inline">  <!--class="form-inline" use for inline-->
						Product Code:
						<input type="text" name="product_code" class="form-control" ><br><br>
						
						Select Color:
						<select class="form-control" name="product_color">
							<option>Red</option>
							<option>Green</option>
							<option>Blue</option>
						</select><br><br>

						Unit Price::
						<input type="text" class="form-control" name="product_price"><br><br>

						Quantity::
						<input type="text" class="form-control" name="product_quantity"><br><br>
						
						<input type="submit" value="Submit" name="submitAddProduct" class="btn btn-info">
					  
					</form>
					<?php echo validation_errors(); ?>

				</div>
			</div>
		</div>


		<script type="text/javascript">

			function calculateDiscount(discount) {
				var totalprice='<?php echo $fullTotalPrice; ?>';
				var discountRate=(discount*totalprice)/100;
				var priceAfterDiscount=totalprice-discountRate;

			    document.getElementById('total_price').value = priceAfterDiscount;
			}

			function calculateLess(less) {
				var priceAfterDiscount=document.getElementById('total_price').value;
			    document.getElementById('final_price').value = priceAfterDiscount-less;
			}

			function calculatAdvanced(advanced) {

				var TotalAfterlessPrice=document.getElementById('final_price').value;
			    document.getElementById('due').value = -(advanced-TotalAfterlessPrice);
			}



		</script>
	</body>
</html>

