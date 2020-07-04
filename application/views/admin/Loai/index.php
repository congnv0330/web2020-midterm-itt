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
          <h4 class="card-title"><i class="mdi mdi-format-list-bulleted-type"></i> Danh sách hàng hóa</h4>
          <div class="mb-3">
              <a href="<?= base_url('index.php/admin/Loai/create') ?>" class="btn btn-primary">
                  <i class="fas fa-plus"></i> Thêm loại hàng hóa 
              </a>
              <a href="<?= base_url('index.php/admin/Loai/edit') ?>" class="btn btn-primary">
                  <i class="fas fa-plus"></i> Sửa loại hàng hóa 
              </a>
              <button id="btn-reload" class="btn btn-secondary float-right">
                  <i class="fas fa-sync"></i> Tải lại
              </button>
          </div>
          <table class="table">
            <thead class="thead-light text-center">
            <tr>
              <th scope="col">Mã loại hàng hóa</th>
              <th scope="col">Tên loại hàng hóa</th>
              <th scope="col">Mô tả</th>
              <th scope="col">Hành động</th>
          </tr>
          </thead>
          <tbody class="text-center">  
          <?php foreach($loais as $loai) : ?>
              <tr>
                <td><?= $loai['MaLoai'] ?></td>
                <td><?= $loai['TenLoai'] ?></td>
                <td><?= $loai['MoTa'] ?></td>
                <td>
                <a href="<?= base_url('index.php/admin/Loai/edit/' .$loai['MaLoai']) ?>" class="btn btn-info">
                  <i class="fas fa-plus"></i> Sửa 
                </a>
                <a href="<?= base_url('index.php/admin/Hanghoa/delete/' .$loai['MaLoai']) ?>" class="btn btn-danger">
                  <i class="fas fa-plus"></i> Xóa 
              </a>
                </td>
              </tr>
              <?php endforeach ?>   
          </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
