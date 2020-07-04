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
    <form>
    <div class="form-group">
    <label for="exampleInputPassword1">Thông tin sản phẩm</label>
  </div>
    <table id="data-table" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã hàng hóa</th>
                        <th>Tên hàng hóa</th>
                        <th>Đơn giá</th>
                        <th>Hình</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>   
  <div class="form-group">
    <label for="thename">Tên khách hàng</label>
    <input type="name" class="form-control" id="thename" aria-describedby="Nhập họ và tên...">
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>
