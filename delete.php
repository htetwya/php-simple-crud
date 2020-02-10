<?php 

include 'connection.php';

$id=$_GET['id'];

$statement = $conn->prepare('delete from fashion_products where id=:id');

$result = $statement->execute(['id'=>$id]);

if($result){
  header('location:products.php?message=Deleted Successfully');
}else{
  header('location:products.php?message=Cannot be deleted');
}