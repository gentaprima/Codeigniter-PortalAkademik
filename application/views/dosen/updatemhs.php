 <!-- page content -->
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>

              <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div> -->
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Edit Mahasiswa <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li> -->
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form method="post" action="<?= base_url().'siakad/prosesupdatemhs' ?>" class="form-horizontal form-label-left" novalidate>
                    <?php if( $this->session->flashdata('sukses') ){ ?>
                    <div class="alert alert-success" role="alert">
                            <?= $this->session->flashdata('sukses'); ?>
                    </div>
                    <?php } ?>
                    <?php if( $this->session->flashdata('msg') ){ ?>
                    <div class="alert alert-danger" role="alert">
                            <?= $this->session->flashdata('msg'); ?>
                    </div>
                    <?php } ?>
                      <!-- <span class="section">Personal Info</span> -->
                      <?php foreach($dosen as $row){ ?>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">NIM<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" value="<?= $row['NIM'] ?>" data-validate-length-range="6" data-validate-words="2" name="nidn" placeholder="Input NIM" required="required" type="text" readonly>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Mahasiswa<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" value="<?= $row['nama_mahasiswa']; ?>" data-validate-length-range="6" data-validate-words="2" name="nama" placeholder="Input Nama Mahasiswa" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" value="<?= $row['email']; ?>" placeholder="Input Email"class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Role<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="email" name="role" required="required" placeholder="Input Email"class="form-control col-md-7 col-xs-12">
                              <?php if( $row['role'] == 1 ){ ?>
                              <option value="1">Dosen Admin</option>
                              <option value="0">Dosen Pengajar</option>
                              <?php }else{?>
                              <option value="0">Dosen Pengajar</option>
                              <option value="1">Dosen Admin</option>
                              <?php } ?>
                          </select>
                        </div>
                      </div>
                      <?php } ?>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button id="send" name="submit" type="submit" class="btn btn-success">Submit</button>
                          <a href="<?= base_url().'siakad/list_dosen' ?>" id="send" class="btn btn-danger">Cancel</a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
