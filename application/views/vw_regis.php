<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Regis</title>
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
          <div class="col-lg-10 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= base_url();?>template/images/fsi.png" alt="logo">
              </div>
              <h4>Halaman Registrasi</h4>
              <h6 class="fw-light">Silahkan mengisi data di bawah.</h6>
              <form method="post" class="pt-3" action="<?php echo base_url(); ?>regiscoba/proses">
                <h6><strong>Data diri :</strong></h6>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="Nama" class="">Nama</label>
                        <input type="hidden" class="form-control" id="IdMhsw" name="IdMhsw" value="<?= set_value('id_user')?>">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama')?>">
                        <small class="text-danger">
                                <?php echo form_error('nama') ?>
                        </small>
                    </div>
                    <div class="col-sm-6">
                        <label for="Nama" class="">Nomer Induk Keluarga</label>
                        <input type="text" class="form-control" id="nik" name="nik" value="<?= set_value('nik')?>">  
                        <small class="text-danger">
                                <?php echo form_error('nik') ?>
                        </small>                                                         
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="Nama" class="">Nomer Induk Mahasiswa</label>
                        <input type="text" class="form-control" id="nim" name="nim" value="<?= set_value('nim')?>">
                        <small class="text-danger">
                                <?php echo form_error('nim') ?>
                        </small>
                    </div>
                    <div class="col-sm-6">
                        <label for="Nama" class="">Agama</label>
                        <select class="form-control" id="agama" name="agama">
                            <label for="agama" class="">Agama</label>
                                <option value="">Pilih</option>
                                <?php foreach($agama as $row):?>
                                <option value="<?php echo $row->id;?>"<?php if(isset($_POST['agama']) && $_POST['agama'] == $row->id) echo 'selected="selected"';?>><?php echo $row->nama_agama;?></option>
                                <?php endforeach;?>
                        </select>
                        <small class="text-danger">
                                <?php echo form_error('agama') ?>
                        </small>                                
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="Nama" class="">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat" name="tempat" value="<?= set_value('tempat')?>">
                        <small class="text-danger">
                                <?php echo form_error('tempat') ?>
                        </small>
                    </div>
                    <div class="col-sm-6">
                        <label for="Nama" class="">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= set_value('tanggal')?>"> 
                        <small class="text-danger">
                                <?php echo form_error('tanggal') ?>
                        </small>                    
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="Nama" class="">Nomor Hp</label>
                        <input type="text" class="form-control" id="nomor" name="nomor" value="<?= set_value('nomor')?>">
                        <small class="text-danger">
                                <?php echo form_error('nomor') ?>
                        </small>
                    </div>
                    <div class="col-sm-6">
                        <label for="Nama" class="">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email')?>">
                        <small class="text-danger">
                                <?php echo form_error('email') ?>
                        </small>                          
                    </div>
                </div>
                <h6><strong>Data Alamat & Prodi :</strong></h6>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="Nama" class="">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= set_value('alamat')?>">
                        <small class="text-danger">
                                <?php echo form_error('alamat') ?>
                        </small>
                    </div>
                    <div class="col-sm-6">
                        <label for="Nama" class="">Provinsi</label>
                        <select class="form-control" id="provinsi" name="provinsi" value="<?= set_value('provinsi')?>">
                            <label for="provinsi" class="">Jenis Kelamin</label>
                                <option value="">Pilih</option>
                                <?php foreach($provinces as $p):?>
                                <option value="<?php echo $p->id;?>" <?= set_select('provinsi', "$p->id")?>><?php echo $p->name;?></option>
                                <?php endforeach;?>

                        </select>
                        <small class="text-danger">
                                <?php echo form_error('provinsi') ?>
                        </small>
                                                            
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="Nama" class="">Kabupaten</label>
                        <select class="form-control" id="kabupaten" name="kabupaten" value="<?= set_value('kabupaten')?>">
                                <option value="">Pilih</option>
                                        <?php if(!empty($regencies)){
                                        foreach($regencies as $k):?>
                                        <option value="<?php echo $k->id;?>" <?= set_select('kabupaten', "$k->id")?>><?php echo $k->name;?></option>
                                        <?php endforeach; }?>


                        </select>
                        <small class="text-danger">
                                <?php echo form_error('kabupaten') ?>
                        </small>
                    </div>
                    <div class="col-sm-6">
                        <label for="Nama" class="">Kecamatan</label>
                        <select class="form-control" id="kecamatan" name="kecamatan" value="<?= set_value('kecamatan')?>">
                            <label for="kecamatan" class="">Kecamatan</label>
                                <option value="">Pilih</option>
                        </select>
                        <small class="text-danger">
                                <?php echo form_error('kecamatan') ?>
                        </small>                              
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="Nama" class="">Prodi</label>
                        <select class="form-control" id="prodi" name="prodi">
                            <label for="prodi" value="">prodi</label>
                                <option value="<?= set_value('prodi')?>">Pilih</option>
                                <?php foreach($prodi as $row):?>
                                <option value="<?php echo $row->id;?>"><?php echo $row->nama_prodi;?><?= set_value('prodi')?></option>
                                <?php endforeach;?>
                        </select>
                        <small class="text-danger">
                                <?php echo form_error('prodi') ?>
                        </small>
                    </div>
                    <div class="col-sm-6">
                        <label for="Nama" class="">username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username')?>">
                        <small class="text-danger">
                                <?php echo form_error('username') ?>
                        </small>
                    </div>
                    
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="Nama" class="">password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password-field" name="password" value="<?= set_value('password')?>">
                            <span class="input-group-text"><a><i toggle="#password-field" class="mdi mdi-eye show-hide"></i></a></span>
                        </div>   
                        <small class="text-danger">
                                <?php echo form_error('password') ?>
                        </small>   
                    </div>
                    <div class="col-sm-6">
                        <label for="Nama" class="">Confim Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password-field2" name="confirm_password" value="<?= set_value('confirm_password')?>">
                                <span class="input-group-text"><a><i toggle="#password-field2" class="mdi mdi-eye show-hide"></i></a></span>
                            </div>
                            <small class="text-danger">
                                <?php echo form_error('confirm_password') ?>
                            </small>
                        </div>
                    
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
 
            $(this).toggleClass("mdi-eye mdi-eye-off");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
 
            $('#provinsi').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('Regiscoba/kabupaten');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id+'>'+data[i].name+'</option>';
                        }
                        $('#kabupaten').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
        $(document).ready(function(){
 
            $('#kabupaten').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('Regiscoba/kecamatan');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                        
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id+'>'+data[i].name+'</option>';
                        }
                        $('#kecamatan').html(html);

                    }
                });
                return false;
            }); 
        
        });
    </script>

</body>

</html>