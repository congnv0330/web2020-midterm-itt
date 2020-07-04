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
            <a href="<?= base_url('index.php/admin/KhachHang/index') ?>" id="btnBack" class="btn btn-primary">Quay về </a>
          </div>
          <h4 class="card-title"><i class="mdi mdi-format-list-bulleted-type"></i> Thêm khách hàng</h4>          
        </div>
        <div class="card-body">
            <form action="#" method="post">
                <input type="hidden" name="_token" value="uRHGWpTT8FrXAx7rRoAwCdeWLhvhdFrwKRVYpUga">                
                <div class="form-group row">
                    <label for="code" class="col-sm-2 col-form-label">Mã khách hàng</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control " id="code" name="code" placeholder="Nhập mã" value="" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Tên khách hàng</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="name" name="name" placeholder="Nhập tên ..." value="" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Điện thoại</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="price" name="price" placeholder="Nhập số điện thoại..." value="" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="price" name="price" placeholder="Nhập email..." value="" required="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Xác nhận</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
