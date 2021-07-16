<?php 
require_once("config.php");


$pageTitle = "Заказ оформлен";
?>

<?php include('./templates/head.php'); ?>

<!-- white-plate -->
<div class="white-plate">
	<div class="container-fluid">

		<?php include('./templates/header.php'); ?>

		<div class="line-between"></div>
		<!-- content block -->
		<div class="row">
			<div class="col-12">

				<div class="title-1 text-success">Товар успешно оформлен</div>
				<a href="index.php" class="btn btn-secondary">Вернуться на главную</a>

			</div>

		</div>
		<!-- content block -->
	</div>
</div>
<!-- // white-plate -->

<?php include('./templates/footer.php'); ?>