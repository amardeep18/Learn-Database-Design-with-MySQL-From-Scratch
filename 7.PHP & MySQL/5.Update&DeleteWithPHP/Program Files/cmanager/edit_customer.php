<?php include('includes/database.php'); ?>
<?php
	//Assign get variable
	$id = $_GET['id'];
	
	//Create customer select query
	$query ="SELECT * FROM customers
			 INNER JOIN customer_addresses
			 ON customer_addresses.customer=customers.id
			 WHERE customers.id = $id";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if($result = $mysqli->query($query)){
		//Fetch object array
		while($row = $result->fetch_assoc()) {
			$first_name = $row['first_name'];
			$last_name = $row['last_name'];
			$email = $row['email'];
			$password = $row['password'];
			$address = $row['address'];
			$address2 = $row['address2'];
			$city = $row['city'];
			$state = $row['state'];
			$zipcode = $row['zipcode'];
		}
		//Free Result set
		$result->close();
	}
?>
<?php
	if($_POST){
		//Assign GET Variable
		$id = $_GET['id'];
	
		//Assign Variables
		$first_name = mysql_real_escape_string($_POST['first_name']);
		$last_name = mysql_real_escape_string($_POST['last_name']);
		$email = mysql_real_escape_string($_POST['email']);
		$password = mysql_real_escape_string($_POST['password']);
		$address = mysql_real_escape_string($_POST['address']);
		$address2 = mysql_real_escape_string($_POST['address2']);
		$city = mysql_real_escape_string($_POST['city']);
		$state = mysql_real_escape_string($_POST['state']);
		$zipcode = mysql_real_escape_string($_POST['zipcode']);
		
		//Create customer update
		$query = "UPDATE customers
				  SET
				  first_name='$first_name',
				  last_name='$last_name',
				  email='$email',
				  password='$password'
				  WHERE id=$id
				  ";
		$mysqli->query($query) or die();
		
		//Create address update
		$query = "UPDATE customer_addresses
				  SET
				  address='$address',
				  address2='$address2',
				  city='$city',
				  state='$state',
				  zipcode='$zipcode'
				  WHERE customer=$id
				  ";
		$mysqli->query($query) or die();
		$msg="Customer Updated";
		header('Location:index.php?msg='.urlencode($msg).'');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CManager | Edit Customer</title>
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
         <h2>Edit Customer</h2>
		 <form role="form" method="post" action="edit_customer.php?id=<?php echo $id; ?>">
			<div class="form-group">
				<label>First Name</label>
				<input name="first_name" type="text" class="form-control" 
				value="<?php echo $first_name; ?>" placeholder="Enter First Name">
			</div>
			<div class="form-group">
				<label>Last Name</label>
				<input name="last_name" type="text" class="form-control" 
				value="<?php echo $last_name; ?>" placeholder="Enter Last Name">
			</div>
			<div class="form-group">
				<label>Email address</label>
				<input name="email" type="email" class="form-control" 
				value="<?php echo $email; ?>" placeholder="Enter Email">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input name="password" type="password" class="form-control" 
				value="<?php echo $password; ?>" placeholder="Enter Password">
			</div>
			<div class="form-group">
				<label>Address</label>
				<input name="address" type="text" class="form-control" 
				value="<?php echo $address; ?>" placeholder="Enter Address">
			</div>
			<div class="form-group">
				<label>Address 2</label>
				<input name="address2" type="text" class="form-control" 
				value="<?php echo $address2; ?>" placeholder="Enter Address 2">
			</div>
			<div class="form-group">
				<label>City</label>
				<input name="city" type="text" class="form-control" 
				value="<?php echo $city; ?>" placeholder="Enter City">
			</div>
			<div class="form-group">
				<label>State</label>
				<input name="state" type="text" class="form-control" 
				value="<?php echo $state; ?>" placeholder="Enter State">
			</div>
			<div class="form-group">
				<label>Zipcode</label>
				<input name="zipcode" type="text" class="form-control" 
				value="<?php echo $zipcode; ?>" placeholder="Enter Zipcode">
			</div>
			<input type="submit" class="btn btn-default" value="Update Customer" />
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