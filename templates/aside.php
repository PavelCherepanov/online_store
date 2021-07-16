<!-- Left aside -->
<div class="col-md-3 col-lg-2"> 
	<ul class="nav">
		<li class="nav__element"><a href="index.php" class="nav__link">Все товары</a></li>
		<li class="nav__element"><a href="index.php?categoryTitle=Телефоны" class="nav__link">Телефоны</a></li>
		<li class="nav__element"><a href="index.php?categoryTitle=Планшеты" class="nav__link">Планшеты</a></li>
		<?php if (isset($_GET["categoryTitle"]) && $_GET["categoryTitle"] == "Ноутбуки"): ?>
			<li class="nav__element"><a href="index.php?categoryTitle=Ноутбуки" class="nav__link nav__link--active">Ноутбуки</a></li>
		<?php else: ?>
			<li class="nav__element"><a href="index.php?categoryTitle=Ноутбуки" class="nav__link">Ноутбуки</a></li>
		<?php endif ?>

		
		<li class="nav__element"><a href="index.php?categoryTitle=Компьютеры" class="nav__link">Компьютеры</a></li>
	</ul>
</div>
<!-- // Left aside -->