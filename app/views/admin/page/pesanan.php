<section class="wrapper site-min-height">
  <h3 align="center">Kelola Data Pesanan</h3>
   <div class="row mt">
<div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Data Pesanan</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Id Pesan</th>
                                  <th>Nama Pemesan</th>
                                  <th>Tanggal Pesan</th>
                                  <th>Status Proses</th>
                                  <th>Kelola</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach ($pesanan as $n): ?>                        
                              <?php if ($n->status == 'Selesai') {
                                $s = 'label label-success label-mini';
                              } else if ($n->status == 'Sedang Dikirim') {
                                $s = 'label label-info label-mini'; 
                              } elseif ($n->status == 'Sedang Diproses') {
                                $s = 'label label-warning label-mini'; 
                              } else { $s = 'label label-danger label-mini';  } ?>

                              <tr>
                                  <td><?php echo $n->idOrder?></td>
                                  <td><?php echo $n->namaPelanggan?></td>
                                  <td><?php echo $n->tglOrder?></td>
                                  <td><span class="<?php echo $s ?>"><?php echo $n->status?></span></td>
                                  <td>
                                    <p>
                                      <a href="<?php echo site_url()?>/admin/dashboard/ubahpesanan/<?php echo $n->idOrder ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      <?php echo anchor('admin/dashboard/hapusproduk/'.$n->idOrder, '<i class="fa fa-trash-o"></i>', array('class'=>'btn btn-danger btn-xs', 'onclick'=>"return confirmDialog();")); ?>
                                    </p>
                                </td>
                              </tr>
                                <?php endforeach?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
                  </div>
                  </section>
<script>
function confirmDialog() {
    return confirm("Apakah anda yakin ingin menghapus data ini ?")
}
</script>