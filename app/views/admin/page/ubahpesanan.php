<section class="wrapper">
  <h3 align="center">Ubah Pesanan</h3>
  <div class="row-lg-12">
    <div class="col-lg-12">
      <div class="form-panel">
        <h4 class="mb"><i class="fa fa-tags"></i> Data Pemesan</h4>
        <hr>
        <form class="form-horizontal style-form" method="post"  action="">
          <div class="form-group">
            <?php foreach ($ubahpesanan as $p): ?>
            <label class="col-sm-2 col-sm-2 control-label">ID Pemesan</label>
            <div class="col-sm-10">
              <label class="col-sm-2 col-sm-2 control-label"><?php echo $p->idOrder ?></label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Nama Pemesan</label>
            <div class="col-sm-10">
              <label class="col-md-6 col-md-6 control-label"><?php echo $p->namaPelanggan?></label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
              <label class="col-lg-12 col-lg-12 control-label"><?php echo $p->alamat ?></label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Kode Pos</label>
            <div class="col-sm-10">
              <label class="col-sm-2 col-sm-2 control-label"><?php echo $p->kodePos?></label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">No Telepon</label>
            <div class="col-sm-10">
              <label class="col-sm-4 col-sm-4 control-label"><?php echo $p->telepon?></label>
            </div>
            <?php endforeach ?>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="row-lg-9">
    <div class="col-lg-12">
      <div class="form-panel">
        <table class="table table-striped table-advance table-hover">
          <h4><i class="fa fa-tags"></i> Pesanan</h4>
          <tbody>
            <tr>
              <th>No</th>
              <th>Foto Barang</th>
              <th>Nama Barang</th>
              <th>Harga / Barang</th>
              <th>Jumlah</th>
              <th>Total Harga / Barang</th>
            </tr> 
            <?php foreach ($ubahpesanan as $p): ?>
            <tr>
              <td><p></p></td>
              <td><p><img src="<?php echo base_url()?>assets/img/produk/<?php echo $p->gambar?>" height="200px"/></p></td>
              <td><p><?php echo $p->namaProduk?></p></td>
              <td><p><?php echo $p->harga?></p></td>
              <td><p><?php echo $p->jumlah?></p></td>
              <td><p><?php echo $p->totalHarga?></p></td>             
            </tr> 
            <?php endforeach ?>
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th>Total Barang</th>
              <th></th>
            </tr>
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th>Total Harga</th>
              <th></th>
            </tr>  
          </tbody>
        </table>
        <div class="btn-group btn-group-justified">
          <div class="btn-group">
          <a href="" class="btn btn-info">Setujui dan Kirim Barang</a>
          </div>
          <div class="btn-group">
          <a href="" class="btn btn-warning">Batalkan Pesanan</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
