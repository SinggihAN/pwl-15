<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title?> - LIMABELAS</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/lineicons/style.css">    
    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/tables/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/tables/dataTables.autoFill.css">
    <script type="text/javascript" language="javascript" src="<?php echo base_url()?>assets/js/tables/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url()?>assets/js/tables/dataTables.autoFill.js"></script>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url()?>assets/js/chart-master/Chart.js"></script>
    
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo site_url()?>/admin/dashboard" class="logo"><b>LIMABELAS</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo site_url()?>/admin/dashboard/logout">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo base_url()?>assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h3 class="centered"><a href="<?php echo site_url()?>/admin/dashboard/profil"><?php echo $cookie['c_fullname']?></a></h3>
              	  	
                  <li class="mt">
                      <a href="<?php echo site_url()?>/admin/dashboard">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="menu">
                      <a href="<?php echo site_url()?>/admin/dashboard/produk" >
                          <i class="fa fa-desktop"></i>
                          <span>Produk</span>
                      </a>
                  </li>

                  <li class="menu">
                      <a href="<?php echo site_url()?>/admin/dashboard/kategori" >
                          <i class="fa fa-th-list"></i>
                          <span>Kategori</span>
                      </a>
                  </li>
                  <li class="menu">
                      <a href="<?php echo site_url()?>/admin/dashboard/pesanan" >
                          <i class="fa fa-edit"></i>
                          <span>Pesanan</span>
                      </a>
                  </li>
                  <li class="menu">
                      <a href="<?php echo site_url()?>/admin/dashboard/perusahaan" >
                          <i class="fa fa-cogs"></i>
                          <span>Perusahaan</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <?php $this->load->view('admin/page/' . $page) ?>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - LIMABELAS
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
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
  </body>
</html>
