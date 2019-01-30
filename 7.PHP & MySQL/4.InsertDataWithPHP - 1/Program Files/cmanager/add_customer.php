<?php include('includes/database.php'); ?>
<?php
	if($_POST){
		//Get variables from post array
		$first_name = mysql_real_escape_string($_POST['first_name']);
		$last_name = mysql_real_escape_string($_POST['last_name']); 
		$email = mysql_real_escape_string($_POST['email']); 
		$password = mysql_real_escape_string(md5($_POST['password'])); 
		$address = mysql_real_escape_string($_POST['address']);
		$address2 = mysql_real_escape_string($_POST['address2']);
		$city = mysql_real_escape_string($_POST['city']);
		$state= mysql_real_escape_string($_POST['state']);
		$zipcode = mysql_real_escape_string($_POST['zipcode']);
		
		//Create customer query
		$query ="INSERT INTO customers (first_name,last_name,email,password)
								VALUES ('$first_name','$last_name','$email','$password')";
		//Run query
		$mysqli->query($query);
		
		//Create address query
		$query ="INSERT INTO customer_addresses (customer,address,address2,city,state,zipcode)
								VALUES ('$mysqli->insert_id','$address','$address2','$city','$state','$zipcode')";
		//Run query
		$mysqli->query($query);
		
		$msg='Customer Added';
		header('Location: index.php');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CManager | Add Customer</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li ><a href="index.php">Home</a></li>
          <li class="active"><a href="add_customer.php">Add Customer</a></li>
        </ul>
        <h3 class="text-muted">Store CManager</h3>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
         <h2>Add Customer</h2>
		 <form role="form" method="post" action="add_customer.php">
			<div class="form-group">
				<label>First Name</label>
				<input name="first_name" type="text" class="form-control" placeholder="Enter First Name">
			</div>
			<div class="form-group">
				<label>Last Name</label>
				<input name="last_name" type="text" class="form-control" placeholder="Enter Last Name">
			</div>
			<div class="form-group">
				<label>Email address</label>
				<input name="email" type="email" class="form-control" placeholder="Enter Email">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input name="password" type="password" class="form-control" placeholder="Enter Password">
			</div>
			<div class="form-group">
				<label>Address</label>
				<input name="address" type="text" class="form-control" placeholder="Enter Address">
			</div>
			<div class="form-group">
				<label>Address 2</label>
				<input name="address2" type="text" class="form-control" placeholder="Enter Address 2">
			</div>
			<div class="form-group">
				<label>City</label>
				<input name="city" type="text" class="form-control" placeholder="Enter City">
			</div>
			<div class="form-group">
				<label>State</label>
				<input name="state" type="text" class="form-control" placeholder="Enter State">
			</div>
			<div class="form-group">
				<label>Zipcode</label>
				<input name="zipcode" type="text" class="form-control" placeholder="Enter Zipcode">
			</div>
			<input type="submit" class="btn btn-default" value="Add Customer" />
		</form>
        </div>
      </div>

      <div class="footer">
        <p>&copy; Company 2014</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>