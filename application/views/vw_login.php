<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login </title>
  <!-- plugins:css -->
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
        <?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
					echo '<strong>Error!! </strong>'; 
          echo $this->session->flashdata('error');
          echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button></div>';
				}
				?>
 
				<?php 
				if($this->session->flashdata('message_success') !='')
				{
					echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
					echo '<strong>Success!! </strong>'; 
          echo $this->session->flashdata('message_success');
          echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button></div>';

				}
				?>

        <?php 
				if($this->session->flashdata('sukses') !='')
				{
					echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
					echo '<strong>Success!! </strong>'; 
          echo $this->session->flashdata('sukses');
          echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button></div>';

				}
				?>
        <?php 
				if($this->session->flashdata('msg') !='')
				{
					echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
					echo '<strong>Error!! </strong>'; 
          echo $this->session->flashdata('msg');
          echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button></div>';

				}
				?>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="template/images/fsi.png" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign in untuk melanjutkan.</h6>
              <form method="post" class="pt-3" action="<?php echo base_url(); ?>login/autentikasi">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="username" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <div class="input-group">
                      <input type="password" class="form-control form-control-lg" name="password" id="password-field" placeholder="Password">
                      <span class="input-group-text"><a><i toggle="#password-field" class="mdi mdi-eye show-hide"></i></a></span>
                  </div>
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="<?php echo base_url(); ?>lupa_password" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="<?= base_url('pilih'); ?>" class="text-primary">Create</a>
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
 
            $(this).toggleClass("mdi-eye mdi-eye-off");
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





