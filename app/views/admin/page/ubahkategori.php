<section class="wrapper">
<h3 align="center">Kelola Kategori</h3>
<div class="row-lg-12">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-tags"></i> Ubah Kategori</h4><hr>
                      <form class="form-horizontal style-form" method="post"  action="<?php echo site_url()?>/admin/dashboard/ubahkategori/<?php echo $ubahkategori['idKategori']; ?>">
                      <div class="form-group">
         <label class="col-sm-2 col-sm-2 control-label">Nama Kategori</label>
         <div class="col-sm-10">
                              <input type="text" class="form-control" name="namaKategori" value="<?php echo $ubahkategori['namaKategori']; ?>"/>
        </div>
      </div>
<div class="form-group">
         <label class="col-sm-2 col-sm-2 control-label">ID Jenis Kelamin</label>
         <div class="col-sm-10">
                              <input type="text" class="form-control" name="idJenisKelamin" value="<?php echo $ubahkategori['idJenisKelamin']; ?>" />
        </div>
      </div>
    <p>
          <div class="btn-group">
          <?php echo form_submit(array('value'=>'Simpan','class' =>'btn btn-theme', 'name'=>'submit','id'=>'submit')); ?>
          </div>
         <button type="reset" class="btn">Batal</button>
     </div>
     </p>

   </form>
 </div>
</div>
</div>

</section>
