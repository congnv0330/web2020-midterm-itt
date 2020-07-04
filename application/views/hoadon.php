<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hóa đơn</title>
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
<h3 class="text-center"> Xác nhận đơn hàng</h3>
    <div class="container">
    	<label for="exampleInputPassword1">Thông tin sản phẩm</label>
    	<table class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
			<thead>
				<tr>
					<th>Hình</th>
					<th>Tên hàng hóa</th>
					<th>Đơn giá</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($hanghoas as $hanghoa) : ?>
					<tr>
						<td>
							<img src="<?= $hanghoa['Hinh'] ?>" alt="" width="100">
						</td>
						<td><?= $hanghoa['TenHH'] ?></td>
						<td><?= number_format($hanghoa['DonGia']) ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>   
		<form action="#" methods="post">
			<?php foreach($hanghoas as $hanghoa) : ?>
				<input type="hidden" name="MaHH[]" value="<?= $hanghoa['MaHH'] ?>">
				<input type="hidden" name="DonGia[]" value="<?= $hanghoa['DonGia'] ?>">
			<?php endforeach ?>
			<div class="form-group">
				<label for="name">Tên khách hàng</label>
				<input type="text" class="form-control" id="name" name="TenKH" placeholder="Nhập họ và tên...">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>
