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
    <div class="col-md-6">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr><th>MALE</th></tr>
				</thead>
				<tfoot>
					<tr><th>MALE</th></tr>
				</tfoot>
				<tbody>
					<?php foreach ($produk_male as $p): ?>
					<tr>
						<td width="80%">
                      		<div class="weather-2 pn">
                      			<div class="weather-2-header">
									<div class="row">
										<div class="col-sm-6 col-xs-6">
											<p><?php echo $p->namaProduk?></p>
										</div>
										<div class="col-sm-6 col-xs-6 goright">
										<p>
										<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
										<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a></p>
										</div>
									</div>
                      			</div>
								<div class="row">
									<div class="col-sm-4 col-xs-4 goleft">
										<img src="<?php echo base_url()?>assets/img/produk/<?php echo $p->gambar?>" alt="SS001" title="" height="200px"/>
									</div>
									<div class="col" >
									<p>KODE PRODUK : <b><?php echo $p->idProduk?></b><br />
									HARGA PRODUK : <b><?php echo $p->harga?></b><br />
                                    Ukuran TERSEDIA : <b>S M L XL</b><br />
                                    STOK PRODUK : <b><?php echo $p->stok?></b> <br />
                                    DESKRIPSI PRODUK : <b><?php echo $p->deskripsi?></b><br /></p>
                                    </div>
	                      		</div>
                      		</div>
						</td>
					</tr>
					<?php endforeach?>
				</tbody>
			</table>
	</div>
<div class="col-md-6">
			<table id="" class="table table-striped table-bordered display" cellspacing="0" width="100%">
				<thead>
					<tr><th>FEMALE</th></tr>
				</thead>
				<tfoot>
					<tr><th>FEMALE</th></tr>
				</tfoot>
				<tbody>
					<?php foreach ($produk_female as $p): ?>
					<tr>
						<td width="80%">
                      		<div class="weather-2 pn">
                      			<div class="weather-2-header">
									<div class="row">
										<div class="col-sm-6 col-xs-6">
											<p><?php echo $p->namaProduk?></p>
										</div>
										<div class="col-sm-6 col-xs-6 goright">
										<p>
										<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
										<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a></p>
										</div>
									</div>
                      			</div>
								<div class="row">
									<div class="col-sm-4 col-xs-4 goleft">
										<img src="<?php echo base_url()?>assets/img/produk/<?php echo $p->gambar?>" alt="SS001" title="" height="200px"/>
									</div>
									<div class="col" >
									<p>KODE PRODUK : <b><?php echo $p->idProduk?></b><br />
									HARGA PRODUK : <b><?php echo $p->harga?></b><br />
                                    Ukuran TERSEDIA : <b>S M L XL</b><br />
                                    STOK PRODUK : <b><?php echo $p->stok?></b> <br />
                                    DESKRIPSI PRODUK : <b><?php echo $p->deskripsi?></b><br /></p>
                                    </div>
	                      		</div>
                      		</div>
						</td>
					</tr>
					<?php endforeach?>
				</tbody>
			</table>
	</div>
</div>
</section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.sparkline.js"></script>

    <!-- Tables -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url()?>assets/js/tables/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url()?>assets/js/tables/dataTables.autoFill.js"></script>
        
    <script type="text/javascript" language="javascript" class="init">

      $(document).ready(function() {
        var table = $('#example').DataTable();
        new $.fn.dataTable.AutoFill( table );
      } );

    </script>


    <!--common script for all pages-->
    <script src="<?php echo base_url()?>assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url()?>assets/js/sparkline-chart.js"></script>    
	<script src="<?php echo base_url()?>assets/js/zabuto_calendar.js"></script>	
	
    <script type="text/javascript" language="javascript" class="init">

    $(document).ready(function() {
      $('table.display').dataTable();
    } );

  </script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
