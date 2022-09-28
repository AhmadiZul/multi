<!-- <link href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script> -->
<div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles light"></div>
            <div class="tiles primary"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>dasboard">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <?php if($this->session->userdata('access')=='Mahasiswa'){ ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>mahasiswa">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">Mahasiswa</span>
            </a>
          </li>
          <?php }; ?>
          <?php if($this->session->userdata('access')=='Dosen'){ ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>mahasiswa">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">Dosen</span>
            </a>
          </li>
          <?php }; ?>
          <?php if($this->session->userdata('access')=='Admin'){ ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>mahasiswa">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">Admin</span>
            </a>
          </li>
          <?php }; ?>
          <li class="nav-item nav-category">help</li>
          <li class="nav-item">
            <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                  <?php if($this->session->userdata('access')=='Mahasiswa'){ ?>
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Mahasiswa</a>
                    </li>
                    <?php }; ?>
                    <?php if($this->session->userdata('access')=='Dosen'){ ?>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="true">Dosen</a>
                    </li>
                    <?php }; ?>
                    <?php if($this->session->userdata('access')=='Admin'){ ?> 
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Admin</a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="true">Dosen</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Mahasiswa</a>
                    </li>
                    <?php }; ?>
                  </ul>
                  <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                      <?php if($this->session->userdata('access')=='Mahasiswa'){ ?> 
                      <button href="" class="btn btn-success text-white me-0" data-bs-toggle="modal" data-bs-target="#myModalTambah"><i class="mdi mdi-school"></i> Tambah</button>
                      <?php }; ?>
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                <?php if($this->session->userdata('access')=='Mahasiswa'){ ?>
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                              <div mb-2>
                                      <!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
                                      <?php if ($this->session->flashdata('message')) :
                                          echo $this->session->flashdata('message');
                                      endif; ?>
                                </div>
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Pengajuan Proposal</h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Mahasiswa Universitas Sebelas Maret</h5>
                                  </div>
                                  <!-- <div id="performance-line-legend"></div> -->
                                </div>
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover" id="item-list">
                                        <thead class="bg-light">
                                            <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Judul Proposal</th>
                                            <th>Dosen</th>
                                            <th>Status Pengajuan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            
                                            
                                          
                                        </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <?php }; ?>
                  <?php if($this->session->userdata('access')=='Dosen'){ ?>
                  <div class="tab-pane fade show active" id="audiences" role="tabpanel" aria-labelledby="audiences"> 
                    <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                              <div mb-2>
                                      <!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
                                      <?php if ($this->session->flashdata('message')) :
                                          echo $this->session->flashdata('message');
                                      endif; ?>
                                </div>
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Halaman Dosen</h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Dosen Universitas Sebelas Maret</h5>
                                  </div>
                                  <!-- <div id="performance-line-legend"></div> -->
                                </div>
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover" id="item-dosen">
                                        <thead class="bg-light">
                                            <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Proposal</th>
                                            <th>Penilaian</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                            <!-- <tr> -->
                                            
                                           <!--  <td> -->
                                            <!-- <button class="badge badge-warning" type="button" href="<?= site_url('mahasiswa/edit' . $row->IdMhsw) ?>">Edit</button>
                                            <button class="badge badge-danger item-delete" type="button" href="javascript:void(0);" data="<?= $row->IdMhsw ?>">Hapus</button> -->
                                            
                                            <!-- </td> -->
                                            <!-- </tr> -->
                                            
                                       
                                        </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <?php }; ?>
                  <?php if($this->session->userdata('access')=='Admin'){ ?>
                  <div class="tab-pane fade show active" id="demographics" role="tabpanel" aria-labelledby="demographics"> 
                    <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                              <div mb-2>
                                      <!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
                                      <?php if ($this->session->flashdata('message')) :
                                          echo $this->session->flashdata('message');
                                      endif; ?>
                                </div>
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Tambah Admin</h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Admin Universitas Sebelas Maret</h5>
                                  </div>
                                  <!-- <div id="performance-line-legend"></div> -->
                                </div>
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover" id="">
                                        <thead class="bg-light">
                                            <tr>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Alamat</th>
                                            <th>Agama</th>
                                            <th>No Hp</th>
                                            <th>Email</th>
                                            <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <th></th>
                                              <th></th>
                                              <th></th>
                                              <th></th>
                                              <th></th>
                                              <th></th>
                                              <th></th>
                                            </tr>
                                            
                                       
                                        </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <?php }; ?>
                </div><!-- tabs-content ends -->
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    
                                            <!-- modal create -->
        <section id="form-and-scrolling-components">
          <div class="row">
            <div class="col-md-6 col-12">
              <div class="form-group">
                <!--login form Modal -->
                <div class="modal fade text-left" id="modal_verif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Pengajuan Judul Proposal</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                          <i data-feather="x"></i>
                        </button>
                      </div>
                      <form action="" id="form_verif">
                        <div class="modal-body">
                          <label>Judul: </label>
                          <div class="form-group">
                            <input type="text" id="judul_verif" class="form-control" disabled />
                            <input type="hidden" id="id" name="id" class="form-control" />
                          </div>
                          <label>Nama Mahasiswa: </label>
                          <div class="form-group">
                          <input type="text" name="nama_verif" id="nama_verif"  class="form-control" disabled />
                          </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                          </button>
                          <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Verifikasi</span>
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end modal create -->

                                            <div class="modal fade" id="myModalEdit" aria-labelledby="myModalEditLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit</h5>
                                                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button> -->
                                                            <i class="settings-close ti-close"></i>
                                                        </div>
                                                        <form id="FrmEditMahasiswa" method="post">
                                                        <div class="modal-body">
                                                        
                                                          <div class="card-body">
                                                          
                                                              <div class="form-group row">
                                                                  <div class="col-sm-6">
                                                                      <label for="Nama" class="">Nama</label>
                                                                      <input type="hidden" class="form-control" id="IdMhsw" name="IdMhsw" value="">
                                                                      <input type="text" class="form-control" id="Nama" name="Nama" value="">
                                                                  </div>
                                                                  <div class="col-sm-6">
                                                                      <label for="Nama" class="">Jenis Kelamin</label>
                                                                      <select class="form-control" id="JenisKelamin" name="JenisKelamin">
                                                                          <label for="JenisKelamin" class="">Jenis Kelamin</label>
                                                                          <option value="">Pilih</option>
                                                                          <option value="Laki-laki">Laki-laki</option>
                                                                          <option value="Perempuan">Perempuan</option>
                                                                      </select>
                                                            
                                                                  </div>
                                                              </div>
                                                              <div class="form-group row">
                                                                  
                                                                  <div class="col-sm-6">
                                                                    <label for="Alamat" class="">Alamat</label>
                                                                      <textarea class="form-control" id="Alamat" name="Alamat" rows="3"></textarea>
                                                        
                                                                  </div>
                                                                  <div class="col-sm-6">
                                                                      <label for="Agama" class="">Agama</label>
                                                                      <select class="form-control" id="Agama" name="Agama">
                                                                          <option value="">Pilih</option>
                                                                          <option value="Islam">Islam</option>
                                                                          <option value="Protestan">Protestan</option>
                                                                          <option value="Katolik">Katolik</option>
                                                                          <option value="Hindu">Hindu</option>
                                                                          <option value="Buddha">Buddha</option>
                                                                          <option value="Khonghucu">Khonghucu</option>
                                                                      </select>
                                                                      
                                                                  </div>
                                                              </div>


                                                              <div class="form-group row">
                                                                  
                                                                  <div class="col-sm-6">
                                                                      <label for="NoHp" class="">No Hp</label>
                                                                      <input type="text" class="form-control" id="NoHp" name="NoHp" value="">
                                                                     
                                                                  </div>
                                                                  <div class="col-sm-6">
                                                                      <label for="Email" class="">Email</label>
                                                                      <input type="text" class="form-control" id="Email" name="Email" value="">
                                                                      
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <div class="col-sm-10 offset-md-2">
                                                                      <button type="submit" class="btn btn-primary text-white">Simpan</button>
                                                                      <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                                                                  </div>
                                                              </div>
                                                              </form>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="myModalTambah" aria-labelledby="myModalTambahLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Tambah</h5>
                                                            <i class="settings-close ti-close"></i>
                                                        </div>
                                                        
                                                        <div class="modal-body">
                                                          <form id="FrmAddMahasiswa" method="post"> 
                                                              <div class="form-group row">
                                                                  <div class="col-sm-6">
                                                                      <label for="Nama" class="">Judul</label>
                                                                      <input type="hidden" class="form-control" id="id" name="id" value="">
                                                                      <input type="text" class="form-control" id="proposal" name="proposal" value="">
                                                                      <div class="invalid-feedback" for="proposal"></div>
                                                                  </div>
                                                                  <div class="col-sm-6">
                                                                      <label for="dosen" class="">Dosen</label>
                                                                      <select class="form-control" id="dosen" name="dosen">
                                                                          <option value="">Pilih</option>
                                                                          <?php foreach($dosen as $row):?>
                                                                          <option value="<?php echo $row->id;?>"<?php if(isset($_POST['dosen']) && $_POST['dosen'] == $row->id) echo 'selected="selected"';?>><?php echo $row->nama_d;?></option>
                                                                          <?php endforeach;?>
                                                                      </select>
                                                                      
                                                                  </div>
                                                                  
                                                              </div>

                                                              <div class="form-group row">
                                                                  <div class="col-sm-10">
                                                                      <button type="submit" class="btn btn-primary btn-sm text-white">Simpan</button>
                                                                      <a class="btn btn-secondary btn-sm" href="javascript:history.back()">Kembali</a>
                                                                  </div>
                                                              </div>
                                                          </form> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script  type="text/javascript">
    //menampilkan data ketabel dengan plugin datatables
  var tabel ;
$(document).ready(function() {
    tabelmhs = $('#item-list').DataTable({
        "ajax": {
            url : "<?= base_url('get_items') ?>",
            type : 'GET',
            columns: [
                    {
                        data: 'nama'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'proposal'
                    },
                    {
                        data: 'dosen'
                    },
                    {
                        data: 'Aksi'
                    }
                ],

        },
    });
});

var tabel ;
$(document).ready(function() {
    tabel = $('#item-dosen').DataTable({
        "ajax": {
            url : "<?= base_url('get_itums') ?>",
            type : 'GET',
            columns: [
                    {
                        data: 'nama'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'proposal'
                    },
                    {
                        data: 'Aksi'
                    }
                ],

        },
    });
});



function deleteConfirm(event) {
    Swal.fire({
      title: 'Delete Konfirmasi!',
      text: 'Apakah kami yakin delete item ini?',
      icon: 'warning',
      showCancelButton: true,
      cancelButtonText: 'Tidak',
      confirmButtonText: 'Iya',
      confirmButtonColor: 'red'
    }).then(dialog => {
      if (dialog.isConfirmed) {
        // window.location.assign(event.dataset.deleteUrl);
        $.ajax({
          url: event.dataset.deleteUrl,
          type: 'GET',
          dataType: "JSON",
          error: function() {
            alert('Something is wrong');
          },
          success: function(data) {
            if (data.success) {
              tabel.ajax.reload();
              const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                showCloseButton: true,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })

              Toast.fire({
                icon: 'success',
                title: data.message
              });
            }

          }
        });
      }
    })


  }
 

    //menampilkan modal dialog saat tombol hapus ditekan
    /* $('#tableMahasiswa').DataTable(); */
    $('#FrmAddMahasiswa').submit(function(e) {
                e.preventDefault();
                var form = $(this);
                $('#FrmAddMahasiswa').find('input, select').removeClass('is-invalid');
                $('input').parent().removeClass('is-invalid');
                $.ajax({
                    url: '<?php echo base_url('tambah') ?>',
                    type: 'POST',
                    dataType: "JSON",
                    data: form.serialize(),
                    error: function() {
                        alert('Something is wrong');
                    },
                    success: function(data) {
                        if (data.success) {
                            $('#FrmAddMahasiswa')[0].reset();
                            $('#myModalTambah').modal('hide');
                            tabelmhs.ajax.reload();
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                showCloseButton: true,
                                timer: 5000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                                icon: 'success',
                                title: data.message
                            });
                        } else {
                            $.each(data.message, function(key, val) {
                                if (val != "") {
                                    $('.invalid-feedback[for="' + key + '"]').html(val);
                                    $('[name="' + key + '"]').parent().addClass('is-invalid');
                                    $('[name="' + key + '"]').addClass('is-invalid');
                                }
                            })
                        }

                    }
                });
            });
//menampilkan modal dialog saat tombol hapus ditekan
$('#modal_verif').on('show.bs.modal', function(event) {
          const button = event.relatedTarget; // Button that triggered the modal
            var nama = button.getAttribute('data-bs-nama');
            var proposal = button.getAttribute('data-bs-proposal');
            var id = button.getAttribute('data-bs-id');
            console.log(id);
            $('#nama_verif').val(nama);
            $('#judul_verif').val(proposal);
            $('#id').val(id);
            $('#form_verif').attr('action', '<?= base_url("dosen/verif")?>');
        });

        $('#form_verif').submit(function(e) {
                e.preventDefault();
                var form = $(this);
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    dataType: "JSON",
                    data: form.serialize(),
                    error: function() {
                        alert('Something is wrong');
                    },
                    success: function(data) {
                        if (data.success) {
                            $('#modal_verif').modal('hide');
                            tabel.ajax.reload();
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                showCloseButton: true,
                                timer: 5000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                                icon: 'success',
                                title: data.message
                            });
                        } else alert('Something is GJ');

                    }
                });
        });


</script>


