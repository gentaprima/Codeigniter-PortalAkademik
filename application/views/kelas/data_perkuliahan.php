   <!-- page content -->
   <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>DATA <small></small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Perkuliahan <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php if( $this->session->flashdata('sukses') ){ ?>
                  <div class="alert alert-success" role="alert">
                            <?= $this->session->flashdata('sukses'); ?>
                  </div>
                  <?php } ?>
                  <!-- <a href="<?= base_url().'siakad/form_dosen' ?>" type="submit" class="btn btn-success pull-right">Tambah data</a> -->
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Matakuliah</th>
                          <th>Nama Dosen</th>
                          <th width="150">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php $i= 0; foreach($perkuliahan as $row){ $i++; ?>
                            <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row['nama_matakuliah']; ?> (<?= $row['kode_kelas']; ?>)</td>
                            <td><?= $row['nama_dosen']; ?></td> 
                            <td width="150">
                                <center>
                                  <a href="<?= base_url().'siakad/detail_perkuliahan/' ?><?= $row['kode_perkuliahan']; ?>/" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                  <!-- <a href="<?= base_url().'siakad/hapusperkuliahan/' ?><?= $row['kode_perkuliahan']; ?>"  class="btn btn-danger"><i class="fa fa-trash-o"></i></a> -->
                                </center>
                            </td>
                            </tr>
                         <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- /page content -->