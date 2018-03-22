<?php 

require_once('practice.php');

if($_POST){
	$brand=$_POST['brand'];
	$ITEM=$_POST['item'];
	$price=$_POST['price'];

	insertAItem($brand, $ITEM, $price);
}


$all_items=getAllItems();



 ?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>hopping list from sepero</title>

  </head>
  <body>
  	<div class="top" style="
  			width: 100vw;
  			height: 20vh;
  			background-image: url('./top.jpg');
			background-size: cover;
			background-position: center center;">
	
	</div>
  	    
    <P class="text-top " style="font-size: 2.5rem; padding:0; margin:0">MY BASKET<img src="./Capture.PNG" style="height: 2rem"></P>

    <table class="table table-bordered">
  
  <thead class="thead-light">
    <tr>
      <th scope="col3">Brand</th>
      <th scope="col3">ITEM#</th>
      <th scope="col3">QTY</th>
      <th scope="col3">Price($)</th>
    </tr>
  </thead>
  <tbody >
   <?php 
 			foreach($all_items as $val){
 				echo '<tr>';
 				echo '<td>'.$val['Brand'].'</td>';
 				
 				echo '<td>'.$val['ITEM#'].'</td>';

 				echo '<td>
 					<div class="input-group mb-3">
  					<div class="input-group-prepend">
    				<label class="input-group-text" for="inputGroupSelect01">QTY</label>
 					 </div>
 					 <select class="custom-select" id="inputGroupSelect01">
   					 <option value="1">1</option>
   					 <option value="2">2</option>
   					 <option value="3">3</option>
   					 <option value="4">4</option>
   					 <option value="4">4</option>
  					</select>
					</div>
					</td>
 				';
 				
 				echo '<td>'.$val['Price($)'].'</td>';
 				echo '</tr>';
 			}


 		 ?>
  </tbody>
</table>

<form action="" method="post">
	<label for="">Brand:</label>
	<input type="text" name="brand">
	<label for="">ITEM#:</label>
	<input type="text" name="item">
	<label for="">Price:</label>
	<input type="text" name="price">

	<input type="submit"><img src="kiss.PNG">
</form>

<p style="margin-left: 1vw;">ABOUT US:</p>
<div class="scrollbar" style="
width: 98VW; 
height: 100px;
margin: 0 1vw; 
overflow: scroll;
scrollbar-face-color: #889B9F;
/*scrollbar-face-color:grey;*/
scrollbar-base-color:red;
scrollbar-arrow-color:yellow;
">
<p>Sephora is a leader in global prestige retail, teaching and inspiring clients to play in a world of beauty. Owned by LVMH Moët Hennessy Louis Vuitton, the world's leading luxury goods group, Sephora has earned its reputation as a beauty trailblazer with its expertise, innovation, and entrepreneurial spirit.

At Sephora, beauty is in our DNA. Our revolutionary beauty-retail concept, founded in France by Dominique Mandonnaud in 1970, is defined by its unique, open-sell environment with an ever-increasing assortment of products from carefully curated brands, featuring indie darlings, emerging favorites, trusted classics, and Sephora’s own, SEPHORA COLLECTION. Today, Sephora is not only the leading retailer of perfume and cosmetics stores in France, but also a powerful beauty presence in countries around the world thanks to its unparalleled assortment of prestige products in every category, unbiased service from experts, interactive shopping environment, and innovation.

Sephora believes every stroke, swipe and dab reveals possibility, and we share our client’s love for the confidence that our products, services, and expertise brings to their life every day. In every store, clients unlock their beauty potential at our Beauty, Skincare and Fragrance Studios through intuitive technology and guidance from the most knowledgeable and professional team of product consultants in the beauty industry.</p>
</div>

	<div class="bottom" style="
  			width: 100vw;
  			height: 20vh;
  			background-image: url('./bottom.PNG');
			background-size: cover;
			background-position: center center;">
	
	</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

