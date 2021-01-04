<?php
    require_once '../FRONT/Controller/voyageC.php';

    $userC =  new voyagesC();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Get Groovy - Shop</title>
	<link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>
	

	<section class="container">
		<h2></h2>
		<div class="form-container">
            <form action="" method = 'POST'>
                <div class="row">
                    <div class="col-25">                
                        <label>Search Title: </label>
                    </div>
                    <div class="col-75">
                        <input type = "text" name = 'voyages'>
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type = "submit" value = "Search" name ="search">
                </div>
            </form>
		</div>
	</section>

	<?php
		if (isset($_POST['voyages']) && isset($_POST['search'])){
			$result = $voyagesC->getvoyageBydestination($_POST['voyages']);
			if ($result !== false) {
	?>
		<section class="container">
			<h2>MUSIC</h2>
			<a href = "GV.php" class="btn btn-primary shop-item-button">All voyages</a>
			<div class="shop-items">
				
				<div class="shop-item">
          <strong class="shop-item-title"> <?= $result['destination'] ?> </strong>
            <span class="shop-item-price"><?= $result['prix'] ?> dt.</span>
            <strong class="shop-item-title"> <?= $result['depart'] ?> </strong>
            <strong class="shop-item-title"> <?= $result['retour'] ?> </strong>

            <img src="../assets/images/<?= $result['image'] ?>" class="shop-item-image">
					<div class="shop-item-details">

					</div>
				</div>
				
			</div>
		</section>
	<?php
		}
		else {
			echo "<div> No results found!!! </div>";
		}
	}
	?>


	<script src="../assets/js/script.js"></script>
</body>

</html>

