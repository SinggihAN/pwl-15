<section class="wrapper">
<h3 align="center">Kelola Kategori</h3>
<div class="row-lg-12">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-tags"></i> Tambahkan Kategori Baru</h4><hr>
                      <form class="form-horizontal style-form" method="post"  action="<?php echo site_url()?>/admin/dashboard/tambahkategori">
                      <div class="form-group">
         <label class="col-sm-2 col-sm-2 control-label">Nama Kategori</label>
         <div class="col-sm-10">
                              <input type="text" class="form-control" name="namaKategori" />
        </div>
      </div>
<div class="form-group">
         <label class="col-sm-2 col-sm-2 control-label">ID Jenis Kelamin</label>
         <div class="col-sm-10">
                              <input type="text" class="form-control" name="idJenisKelamin" />
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

<div class="row-lg-9">
              <div class="col-lg-12">
                  <div class="form-panel">
    <table class="table table-striped table-advance table-hover">
     <h4><i class="fa fa-tags"></i> Data Kategori</h4>
    <tbody>
      <tr>
    <th>ID Kategori</th>
    <th>ID Jenis Kelamin</th>
    <th>Nama kategori</th>
    <th>Kelola</th>
  </tr> 
          <?php foreach ($kategori as $k): ?>
        <tr>
          <td><p><?php echo $k->idKategori?></p></td>
          <td><p><?php echo $k->idJenisKelamin?></p></td>
          <td><p><?php echo $k->namaKategori?></p></td>                                                                
          <td class="center">
                    <a href="<?php echo site_url()?>/admin/dashboard/ubahkategori/<?php echo $k->idKategori ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                    <?php echo anchor('admin/dashboard/hapuskategori/'.$k->idKategori, '<i class="fa fa-trash-o"></i>', array('class'=>'btn btn-danger btn-xs', 'onclick'=>"return confirmDialog();")); ?>
          </td>
        </tr> 
      <?php endforeach ?>
</tbody>
</table>
</div><!-- /content-panel -->
</div>
</div>
</section>

<script>
function confirmDialog() {
    return confirm("Apakah anda yakin ingin menghapus data ini ?")
}
</script>