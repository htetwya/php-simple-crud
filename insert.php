<?php 

include 'connection.php';
	if(isset($_POST['add'])){

		$name = $_POST['name'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];

	}

	

	$statement = $conn->prepare('insert into fashion_products (name,quantity,price) values (:name,:quantity,:price)');

	$result = $statement->execute(['name'=>$name,'quantity'=>$quantity,'price'=>$price]);

	if($result){
		header("location:index.php?message=Inserted Successfully");
	}else{
		header("location:index.php?error=Sorry!Data cannot be inserted");
	}


 ?>