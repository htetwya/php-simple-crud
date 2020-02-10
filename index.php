<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD project</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Fashion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="products.php">All Products <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-md-4">
				<h1>Add Product</h1>

				<!-- Print out success message  -->
				<?php if(isset($_GET['message'])){
				?>
					
					<div class="alert alert-primary" role="alert">
						<?php echo $_GET['message']; ?>
					</div>

				<?php }  ?>

				<!-- Print out error message  -->
				<?php if(isset($_GET['error'])){
				?>
				<div class="alert alert-danger" role="alert">
				 	<?php echo $_GET['error']; ?>
				</div>
				<?php 
				} ?>
				
				<form action="insert.php" method="POST">
				  <div class="form-group">
				    <label for="productName">Product Name</label>
				    <input type="text" class="form-control" id="productName" name="name">
				  </div>

				  <!-- Product Name <input type="text" name="name"><br> -->

				  <div class="form-group">
				    <label for="productQuantity">Quantity</label>
				    <input type="number" class="form-control" id="productQuantity" name="quantity">
				  </div>

				  <div class="form-group">
				    <label for="productPrice">Product Price</label>
				    <input type="text" class="form-control" id="productPrice" name="price">
				  </div>

				  <button type="submit" class="btn btn-primary" name="add">Add</button>
				</form>
			</div>

		</div>

	</div>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>