<?php 

require_once('database.php');

// var_dump($_POST);
if ($_POST){
	$name=$_POST['productNmae'];
	$price=$_POST['price'];

	insertAItem($name,$price);
}

$all_items= getAllItems();

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>our mvc project</title>
 </head>
 <body>
 	
 	<h1>This is a Shopping Cart Using DB</h1>

 	<ul>
 		<?php 
 			foreach($all_items as $item){
 				echo '<li>Nmae: '. $item['name'];
 				echo '<br>';
 				echo 'Price: '.$item['price'];
 				echo '</li>';
 			}

 		 ?>
 	</ul>
 	<form action="" method="post">
 		<label for="">Name:</label>
 		<input type="text" name="productNmae">
 		<label for="">Price:</label>
 		<input type="text" name="price">
 		<input type="submit">
 	</form>
 </body>
 </html>