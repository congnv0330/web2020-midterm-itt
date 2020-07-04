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
            <a href="<?= base_url('index.php/admin/Hoadon/index') ?>" id="btnBack" class="btn btn-primary">Quay về </a>
          </div>
          <h4 class="card-title"><i class="mdi mdi-format-list-bulleted-type"></i> Thêm hóa đơn</h4>          
        </div>
        <div class="card-body">
            <form action="#" method="post">
                <input type="hidden" name="_token" value="uRHGWpTT8FrXAx7rRoAwCdeWLhvhdFrwKRVYpUga">                
                <div class="form-group row">
                    <label for="code" class="col-sm-2 col-form-label">Mã hóa đơn</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control " id="code" name="code" placeholder="Nhập mã" value="" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Tên hóa đơn</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="name" name="name" placeholder="Nhập tên ..." value="" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="parent" class="col-md-2 col-form-label">Ngày lập hóa đơn</label>
                    <div class="col-md-10">
                      <div>
                      <input type="text" class="form-control " id="date" name="date" placeholder="Nhập ngày ..." value="" required="">
                      </div>
                  </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Đơn giá</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="price" name="price" placeholder="Nhập giá price vnđ..." value="" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Hình</label>
                    <div class="col-sm-10">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="pl-Pl">
                        <label class="custom-file-label" for="customFileLang">Chọn ảnh</label>
                      </div>
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