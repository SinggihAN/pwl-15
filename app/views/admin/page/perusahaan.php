<section class="wrapper">
<h3 align="center">Profil Perusahaan</h3>
<div class="row-lg-9">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Profil Perusahaan</h4><hr>
                      <form class="form-horizontal style-form" method="get" action="admin/dashboard/perusahaan">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Perusahaan </label>
                              <div class="col-sm-4">
                              <input type="text" name="nama" class="form-control" value="<?php echo $perusahaan['namaPerusahaan']; ?>">
                              </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-4">
                              	<textarea rows="2" class="form-control" name="alamat"><?php echo $perusahaan['alamatPerusahaan']; ?></textarea>
                              </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Telepon</label>
                              <div class="col-sm-3">
                                  <input type="text" name="telp" class="form-control" value="<?php echo $perusahaan['telpPerusahaan']; ?>">
                                  </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-4">
                              <input type="email" name="email" class="form-control" id="exampleInputEmail2" value="<?php echo $perusahaan['emailPerusahaan']; ?>">
                          </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Bank</label>
                              <div class="col-sm-4">
                                  <input type="text" name="bank" class="form-control" value="<?php echo $perusahaan['namaBank']; ?>">
                                  </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Rekening</label>
                              <div class="col-sm-3">
                                  <input type="text" name="noRek" class="form-control" value="<?php echo $perusahaan['noRek']; ?>">
                                  </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Atas Nama</label>
                              <div class="col-sm-4">
                                  <input type="text" name="atasNama" class="form-control" value="<?php echo $perusahaan['atasNama']; ?>">
                                  </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tentang Perusahaan</label>
                              <div class="col-sm-5">
                              	<textarea rows="3" class="form-control" name="tentang"><?php echo $perusahaan['tentang']; ?></textarea>
                              </div>
                          </div><hr>
                          <button type="button" class="btn btn-primary btn-lg btn-block">Simpan Data</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->
   </div>
   </section>