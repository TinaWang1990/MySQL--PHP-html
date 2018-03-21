<?php

function getAllItems() {
//creat a PDO connection object
$pdo = new PDO('mysql:host=localhost;dbname=shopping_cart;charset=utf8mb4', 'root', 'root');
// var_dump($pdo);


//creat a PDO statment object from connection object
//$pdo object run query function and this function return a statment object
$sql = "SELECT * FROM items";
$stmt=$pdo->query($sql);

//execut and get all the results
$result=$stmt->fetchAll(PDO::FETCH_ASSOC);

return $result;
}

function insertAItem($name, $price) {
//creat a PDO connection object
$pdo = new PDO('mysql:host=localhost;dbname=shopping_cart;charset=utf8mb4', 'root', 'root');
// var_dump($pdo);


//creat a PDO statment object from connection object
//$pdo object run query function and this function return a statment object
$sql = "INSERT INTO items (name, price) VALUES(:name,:price)";
$stmt=$pdo->prepare($sql);
$stmt->execute(
	array(
		':name'=>$name,
		':price'=>$price
	)//防止sql注入，帮助做检查
);
$affected_rows=$stmt->rowCount();

return $affected_rows;
}
insertAItem('towl','10');