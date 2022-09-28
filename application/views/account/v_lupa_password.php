<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        <?= $title; ?>
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
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= base_url();?>template/images/fsi.png" alt="logo">
              </div>
              <h4>Lupa Password</h4>
              <h6 class="fw-light">Untuk melakukan reset password, silahkan masukan alamat email anda.</h6>
              <?php echo form_open('lupa_password'); ?>
              <form method="post" class="pt-3" action="">
                <h6>Email/Username :</h6>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" value="<?php echo set_value('username'); ?>" placeholder="Username">
                  <small class="text-danger">
                            <?php echo form_error('email') ?>
                    </small>
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="btnSubmit" value="Submit">Reset</button>
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