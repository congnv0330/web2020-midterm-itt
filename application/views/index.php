<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="<?= base_url() ?>"><img class="img-fluid m-auto" src="https://www.upsieutoc.com/images/2020/07/04/Logo.png" alt="Logo" width="30"> <strong>ITT</strong>Shop</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url() ?>">Trang chủ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Quản lý</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid py-3">
		<h4 class="text-center mb-4">DANH SÁCH SẢN PHẨM</h4>
		<div class="row">
			<?php foreach($hanghoas as $hanghoa) : ?>
				<div class="col-md-4 col-lg-3">
					<div class="card mb-4">
						<img src="<?= $hanghoa['Hinh'] ?>" class="card-img-top" alt="">
						<div class="card-body text-center">
							<h5 class="card-title"><?= $hanghoa['TenHH'] ?></h5>
							<p class="card-text">Giá: <?= number_format($hanghoa['DonGia']) ?></p>
							<a href="#" class="btn btn-primary">Chọn</a>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>