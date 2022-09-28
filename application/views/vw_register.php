<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url();?>template/vendors/feather/feather.css"">
  <link rel="stylesheet" href="<?= base_url();?>template/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url();?>template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url();?>template/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?= base_url();?>template/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?= base_url();?>template/vendors/css/vendor.bundle.base.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" /> -->


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
              <h4>Halaman Registrasi</h4>
              <h6 class="fw-light">Silahkan mengisi data di bawah.</h6>
              <form method="post" class="pt-3" action="<?php echo base_url(); ?>register/proses">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" id="username" placeholder="Username" value="<?= set_value('username')?>">
				                <small class="text-danger">
                                <?php echo form_error('username') ?>
                        </small>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="nama" id="nama" placeholder="nama" value="<?= set_value('nama')?>">
				               <small class="text-danger">
                              <?php echo form_error('nama') ?>
                	     </small>
                </div>
                <h6 class="fw-light">Password & Confirm Password.</h6>
                <div class="form-group">
                  <div class="input-group">
                        <input type="password" class="form-control form-control-lg" name="password" id="password-field" placeholder="Password" value="<?= set_value('password')?>">
                        <span class="input-group-text"><a><i toggle="#password-field" class="mdi mdi-heart show-hide"></i></a></span>
                  </div>
				              <small class="text-danger">
                              <?php echo form_error('password') ?>
                      </small>
                </div>
                <div class="form-group">
                  <div class="input-group">
                        <input type="password" class="form-control form-control-lg" name="confirm_password" id="password-field2" placeholder="Confrim Password" value="<?= set_value('confirm_password')?>">
                        <span class="input-group-text"><a><i toggle="#password-field2" class="mdi mdi-heart show-hide"></i></a></span>
                  </div>
				              <small class="text-danger">
                              <?php echo form_error('confirm_password') ?>
                      </small>
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Registrasi</button>
                </div>
				
                <div class="text-center mt-4 fw-light">
                  Jika ingin kembali ke login <a href="<?php echo base_url(); ?>welcome" class="text-primary">Kembali</a>
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
  <!-- container-scroller -->
  <!-- plugins:js -->
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
  <!-- endinject -->
  <script>
        $(".show-hide").click(function () {
 
            $(this).toggleClass("mdi-heart mdi-heart-broken");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>

</body>

</html>