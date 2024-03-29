<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang chủ</title>
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
          <h4 class="card-title"><i class="mdi mdi-format-list-bulleted-type"></i> Danh sách hóa đơn</h4>
          <div class="mb-3">
              <a href="<?= base_url('index.php/admin/Hoadon/create') ?>" class="btn btn-primary">
                  <i class="fas fa-plus"></i> Thêm hóa đơn
              </a>
              <a href="<?= base_url('index.php/admin/Hoadon/edit') ?>" class="btn btn-primary">
                  <i class="fas fa-plus"></i> Sửa hóa đơn
              </a>
              <button id="btn-reload" class="btn btn-secondary float-right">
                  <i class="fas fa-sync"></i> Tải lại
              </button>
          </div>
          <table class="table">
            <thead class="thead-light text-center">
            <tr>
              <th scope="col">Mã hóa đơn</th>
              <th scope="col">Ngày lập hóa đơn</th>
              <th scope="col">Mã khách hàng</th>
              <th scope="col">Tổng tiền</th>
              <th scope="col">Hành động</th>
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
