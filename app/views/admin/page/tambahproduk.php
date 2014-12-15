<section class="wrapper">
<h3 align="center">Kelola Data Produk</h3>
<div class="row-lg-9">
<p>
	<div class="btn-group btn-group-justified">
		<div class="btn-group">
		<a href="<?php echo site_url()?>/admin/dashboard/Produk" class="btn btn-info">Data Produk</a>
		</div>
		<a href="<?php echo site_url()?>/admin/dashboard/tambahProduk" class="btn btn-info">Tambah Produk</a>
		</div>
	</div>
</p>
</div>
   <div class="row-lg-9">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Input Data Produk</h4><hr>
                      <form class="form-horizontal style-form" method="get" action="<?php echo site_url()?>/admin/dashboard/proses_tambahProduk">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">KODE </label>
                              <div class="col-sm-2">
                              <input type="text" class="form-control" name="idProduk" />
                              </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">KATEGORI</label>
                              <div class="col-sm-3">
							<select name="idKategori" class="form-control">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
							</select>
                                  </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NAMA</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" name="namaProduk">
                                  </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">HARGA</label>
                              <div class="col-sm-3">
                                  <input type="text" class="form-control" name="harga">
                                  </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">UKURAN</label>
                              <div class="col-sm-10">
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox1" value="option1" name="ukuran"> S
								</label>
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox2" value="option2" name="ukuran"> M
								</label>
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox3" value="option3" name="ukuran"> L
								</label>
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox2" value="option2" name="ukuran"> XL
								</label>
								<label class="checkbox-inline">
								  <input type="checkbox" id="inlineCheckbox3" value="option3" name="ukuran"> XXL
								</label>
                                  </div></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">STOK</label>
                              <div class="col-sm-2">
                                  <input type="text" class="form-control" name="stok">
                                  </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">FOTO</label>
                              <div class="col-sm-10">
                                  <input id="inputIncludeFile" name="gambar" type="file" placeholder="Inlcude some file" />
                                  </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">KETERANGAN</label>
                              <div class="col-sm-4">
                              	<textarea rows="3" class="form-control" name="deskripsi"></textarea>
                              </div>
                          </div><hr>
                          <button type="submit" class="btn btn-theme">SIMPAN</button>
                          <button type="submit" class="btn btn-warning">BATAL</button>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->
   </div>
   </section>