<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        Registrasi
    </title>
    <link rel="stylesheet" href="<?= base_url();?>template/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url();?>template/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url();?>template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url();?>template/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?= base_url();?>template/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?= base_url();?>template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url();?>template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url();?>template/images/logo-uns-biru.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-6 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= base_url();?>template/images/fsi.png" alt="logo">
              </div>
              <h4>Registrasi</h4>
              <h6 class="fw-light">Silahkan pilih registrasi sebagai apa.</h6>
              
              <form method="post" class="pt-3" action="">
                
                <div class="form-group row">
                    <div class="col-sm-11">
                        <div class="input-group">
                            <button class="btn btn-danger" type="submit" name="btnSubmit" value="Submit" href="<?= base_url(''); ?>">Administrator</button>
                            <a href="<?= base_url('regiscoba'); ?>" class="btn btn-warning"><i class="mdi mdi-account"></i>Mahasiswa</a>
                            <button class="btn btn-success" type="submit" name="btnSubmit" value="Submit">Dosen Pembimbing</button>
                        </div> 
                    </div>   
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</body>
<script src="<?= base_url();?>template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url();?>template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url();?>template/js/off-canvas.js"></script>
  <script src="<?= base_url();?>template/js/hoverable-collapse.js"></script>
  <script src="<?= base_url();?>template/js/template.js"></script>
  <script src="<?= base_url();?>template/js/settings.js"></script>
  <script src="<?= base_url();?>template/js/todolist.js"></script>
</html> 