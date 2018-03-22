<?php 

function getAllItems() {
	$pdo= new PDO('mysql:host=localhost; dbname=homework;charset=utf8mb4','root','root');

	$sql=" SELECT * FROM shopping_list";
	$stmt=$pdo->query($sql);
	$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
	return $result;
}
 function insertAItem($brand,$ITEM,$price){
 	$pdo= new PDO('mysql:host=localhost; dbname=homework;charset=utf8mb4','root','root');

 $sql = "INSERT INTO shopping_list (Brand, `ITEM#`, Price($)) VALUES(:brand,:item,:price)";
$stmt=$pdo->prepare($sql);
$stmt->execute(
	array(
		':brand'=>$brand,
		':item'=>$ITEM,
		':price'=>$price
	)
);
$affected_rows=$stmt->rowCount();

return $affected_rows;
}
insertAItem('Kit Lit','155','100');





 ?>