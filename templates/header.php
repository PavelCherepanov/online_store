<!-- header -->
	<div class="header">
		<div class="row">
			<div class="col-sm-6">
				<a href="index.php" class="site-logo">
						<span></span>Store</a>
				</div>
		<div class="col-sm-6">
			<div class="admin-link">
			<?php if (isset($_SESSION['login']) && $_SESSION['login'] == 'on'): ?>
				<a href="./admin.php">
					<img width="38" src="img/icons/padlock.svg" alt="">
				</a>
				<a href="./logout.php">
					<img width="38" src="img/icons/logout.svg" alt="">
				</a>
			<?php else: ?>
			<a href="./login.php">
				<img width="38" src="img/icons/padlock.svg" alt="">
			</a>
			<?php endif ?>

		</div>
		</div>
	</div>
</div>
<!-- // header -->