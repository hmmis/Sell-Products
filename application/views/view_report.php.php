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
				
				<div class="col-sm-12" >
					<h3>Report</h3>
					<table class="table table-bordered table-hover">

						<tr>
							<th>Memo</th>
							<th>Client Name</th>
							<th>Phone</th>
							<th>Total Price</th>
							<th>Total Collection</th>
							<th>Dew</th>
							<th>Selling Date</th>
							<th>Deleivary Date</th>
						</tr>
						{sells}
						<tr>
							<td>{memo_no}</th>
							<td>{client_name}</td>
							<td>{mobile}</td>
							<td>{total_price}</td>
							<td>{total_collection}</td>
							<td>{due}</td>
							<td>{selling_date}</td>
							<td>{delivary_date}</td>
						</tr>
						{/sells}
					</table>

					</div>
				</div>
		</div>
		


	</body>
</html>

