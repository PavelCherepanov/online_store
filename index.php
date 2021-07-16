<?php
	require_once("config.php");
	$pageTitle = "Главная страница";
?>

<?php include("./templates/head.php");?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
<?php include("templates/header.php");?>
			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
<?php include("templates/aside.php");?>
				<!-- Center Part -->
				<div class="col-md-9 col-lg-10">
					<div class="row">
						<?php
						
						if(isset($_GET["categoryTitle"])){
							$categoryName = $_GET['categoryTitle'];
							$sql = "SELECT * FROM products WHERE category = :category";
							$stmt = $db->prepare($sql);
							$stmt->bindValue(":category", $_GET['categoryTitle']);
							$stmt->execute();
							$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
						}else{
							$sql = "SELECT * FROM products";
							$result = $db->query($sql);
							//преобразование в ассоциативный массив
							$products = $result->fetchAll(PDO::FETCH_ASSOC);
						}

						

						foreach ($products as $product){
						
							include("./templates/product-item.php");

						}
							
						?>
							
					</div>
				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->
<?php include("templates/footer.php");?>