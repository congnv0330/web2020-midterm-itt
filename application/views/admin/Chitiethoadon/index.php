<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chi tiết hóa đơn</title>
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
  <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
          <div class="text-left mb-3">
            <a href="<?= base_url('index.php/admin/Home') ?>" id="btnBack" class="btn btn-primary">Trang chủ</a>
          </div>
          <h4 class="card-title text-center"><i class="mdi mdi-format-list-bulleted-type"></i>DANH SÁCH CHI TIẾT HÓA ĐƠN</h4>
          <div class="mb-3">
              <a href="<?= base_url('index.php/admin/Chitiethoadon/create') ?>" class="btn btn-primary">
                  <i class="fas fa-plus"></i> Thêm chi tiết hóa đơn
              </a>
              <button id="btn-reload" class="btn btn-secondary float-right">
                  <i class="fas fa-sync"></i> Tải lại
              </button>
          </div>
          <table class="table">
            <thead class="thead-light text-center">
            <tr>
              <th scope="col">Mã Chi tiết hóa đơn</th>
              <th scope="col">Mã hóa đơn</th>
              <th scope="col">Mã hàng hóa</th>
              <th scope="col">Số lượng</th>
          </tr>
          </thead>
          <tbody>    
          </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>