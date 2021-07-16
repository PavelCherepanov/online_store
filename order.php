<?php
	require_once("config.php");
	$pageTitle = "Сделать заказ";
?>

<?php include("./templates/head.php");?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			<?php include("./templates/header.php");?>
			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
				<?php include("./templates/aside.php");?>
				<!-- Center Part -->
				<div class="col-md-9">

					<div class="title-1">Сделать заказ</div>


					<?php

						$currentProductId = intval($_GET["id"]);
						$sql = "SELECT * FROM products WHERE id = $currentProductId";
						$result = $db->query($sql);
						$product = $result->fetch(PDO::FETCH_ASSOC);
					?>

					<div class="order-item">
						<div class="order-img">
							<img class="order-img" src="img/products/<?php echo $product["img"]; ?>">
						</div>
						<div class="order-desc">
							<h4 class="order-title"><?php echo $product["title"]; ?></h4>
							<div class="order-price"><?php echo $product["price"]; ?></div>
						</div>
					</div>

					<form action="mail.php" method="POST">
						<div class="form-group">
							<input name="username" type="text" class="form-control" placeholder="Имя и Фамилия">
						</div>
						<div class="form-group">
							<input name="phone" type="text" class="form-control" placeholder="Телефон">
						</div>
						<div class="form-group">
							<input name="email" type="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input name="address" type="text" class="form-control" placeholder="Адрес">
						</div>
						<input name="productTitle" type="hidden" class="form-control" value="<?php $product["title"] ?>">
						<input name="productId" type="hidden" class="form-control" value="<?php $product["id"] ?>">
						<input name="productPrice" type="hidden" class="form-control" value="<?php $product["price"] ?>">

						<div class="form-group">
							<button type="submit" class="btn btn-primary">Оформить заказ</button>
						</div>
					</form>

				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

<?php include("./templates/footer.php");?>
