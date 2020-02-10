<?php 

include 'connection.php';
	if(isset($_POST['update'])){

		$name = $_POST['name'];
		$quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $id = $_POST['id'];
	}

	

	$statement = $conn->prepare('update fashion_products set name=:name,quantity=:quantity,price=:price where id=:id');

	$result = $statement->execute(['name'=>$name,'quantity'=>$quantity,'price'=>$price,'id'=>$id]);
// var_dump ($result);
	if($result){
		header("location:products.php?message=Updated Successfully");
	}else{
		header("location:products.php?error=Sorry!Data cannot be updated");
	}


 ?>