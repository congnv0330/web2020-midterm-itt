<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tạo Chi tiết hóa đơn</title>
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
            <a href="<?= base_url('index.php/admin/Chitiethoadon/index') ?>" id="btnBack" class="btn btn-primary">Quay về </a>
          </div>
          <h4 class="card-title"><i class="mdi mdi-format-list-bulleted-type text-center"></i> THÊM CHI TIẾT HÓA ĐƠN</h4>          
        </div>
        <div class="card-body">
            <form action="#" method="post">
                <input type="hidden" name="_token" value="uRHGWpTT8FrXAx7rRoAwCdeWLhvhdFrwKRVYpUga">                
                <div class="form-group row">
                    <label for="code" class="col-sm-2 col-form-label">Mã chi tiết hóa đơn</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control " id="code" name="code1" placeholder="Nhập mã" value="" required="">
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="code2" class="col-sm-2 col-form-label">Mã hóa đơn</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control " id="code2" name="code2" placeholder="Nhập mã" value="" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code3" class="col-sm-2 col-form-label">Mã hàng hóa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control " id="code3" name="code3" placeholder="Nhập mã" value="" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="soluong" class="col-sm-2 col-form-label">Số lượng</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="soluong" name="soluong" placeholder="Nhập số lượng..." value="" required="">
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
