<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        Reset Password
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
              <h4>Reset Password</h4>
              <h6 class="fw-light">Silahkan masukan password baru anda.</h6>
              <?php echo form_open('lupa_password/reset_password/'); ?>
              <form method="post" class="pt-3" action="">
                <h6>Password :</h6>
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" class="form-control form-control-lg" id="password-field" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password">
                        <span class="input-group-text"><a><i toggle="#password-field" class="mdi mdi-eye show-hide"></i></a></span>
                    </div>
                  
                    <small class="text-danger">
                            <?php echo form_error('password') ?>
                    </small>
                </div>
                <h6>Confirm Password :</h6>
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" class="form-control form-control-lg" id="password-field2" name="passconf" value="<?php echo set_value('passconf'); ?>" placeholder="Confirm Password">
                        <span class="input-group-text"><a><i toggle="#password-field2" class="mdi mdi-eye show-hide"></i></a></span>
                    </div>
                  
                    <small class="text-danger">
                            <?php echo form_error('passconf') ?>
                    </small>
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="btnSubmit" value="Submit">Reset</button>
                </div>
              </form>
              <div class="text-center mt-4 fw-light">
                  Jika ingin kembali ke login <a href="<?php echo base_url(); ?>welcome" class="text-primary">Kembali</a>
              </div>
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
    <script>
        $(".show-hide").click(function () {
 
            $(this).toggleClass("mdi-eye mdi-eye-off");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>

</html>