<section class="wrapper site-min-height">
  <h3 align="center">Selamat datang di halaman administrator <strong><?php echo $cookie['c_fullname']?></strong></h3>
  <p align="center">Terakhir login tgl <strong><?php echo $cookie['c_lastlog']?></strong></p>
   <div class="row mtbox">
                      <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                        <div class="box1">
                  <span class="li_t-shirt"></span>
                  <h3><a href="<?php echo site_url()?>/admin/dashboard/produk">Produk</a></h3>
                        </div>
                  <p>Total keseluruhan produk = <br />Total stok produk = </p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_tag"></span>
                  <h3><a href="<?php echo site_url()?>/admin/dashboard/kategori">Kategori</a></h3>
                        </div>
                  <p>Total kategori = </p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_user"></span>
                  <h3><a href="<?php echo site_url()?>/admin/dashboard/profil"><?php echo $cookie['c_username']?></a></h3>
                        </div>
                  <p><?php echo $cookie['c_email']?></p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_banknote"></span>
                  <h3><a href="<?php echo site_url()?>/admin/dashboard/pesanan">Pesanan</a></h3>
                        </div>
                  <p>Total pesanan baru = <br />Total keseluruhan pesanan = .</p>
                      </div>
                      <div class="col-md-2 col-sm-2 box0">
                        <div class="box1">
                  <span class="li_shop"></span>
                  <h3><a href="<?php echo site_url()?>/admin/dashboard/perusahaan">Perusahaan</a></h3>
                        </div>
                  <p> </p>
                      </div>
                    
                    </div><!-- /row mt -->  
                    <div class="row-md-6">

              <div class="showback">
                <h4><i class="fa fa-tag"></i> Petunjuk Penggunaan Halaman Administrator</h4>
              <div class="alert alert-info">1. Gunakan dengan <b>bijak</b> fasilitas-fasilitas yang telah disediakan.<br />
2. Harap <b>LOGOUT</b> terlebih dahulu ketika meninggalkan sistem.</div>
              </div>
              </div>
</section>