<?php include('includes/database.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CManager | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="add_customer.php">Add Customer</a></li>
        </ul>
        <h3 class="text-muted">Store CManager</h3>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
         <h2>Customers</h2>
		 <table class="table table-striped">
			<tr>
				<th>Customer Name</th>
				<th>Email</th>
				<th>Address</th>
				<th></th>
			</tr>
			<tr>
				<td>--Customer--Name</td>
				<td>--Customer--Email</td>
				<td>--Customer--Address</td>
				<td><a href="edit_customer.php?id=1" class="btn btn-default btn-sm">Edit</a></td>
			<tr>
		</table>
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
