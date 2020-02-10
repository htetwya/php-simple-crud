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
      <a href="index.php" class="btn btn-sm btn-info">Add Product</a>
				<h1>All Product</h1>

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

        <?php include 'connection.php';
        
        $satement = $conn->prepare('select * from fashion_products order by name desc');

        $result = $satement->execute();

        $rows = $satement->fetchAll();

        ?>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Name</th>
              <th scope="col">Qauntity</th>
              <th scope="col">Price</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($rows as $key=>$row){ ?>
            <tr>
            <th scope="row">
            <?php 
              
              echo $key+1;
            ?>
            </th>
            <td><?= $row['name'] ?></td>
            <td><?= $row['quantity'] ?></td>
            <td><?= $row['price'] ?></td>
            <td>
            <a href="update.php?id=<?= $row['id'] ?>">Update</a>
            <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
            </td>
            </tr>;
          <?php } ?>
            
          </tbody>
        </table>
				

				
			</div>

		</div>

	</div>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>