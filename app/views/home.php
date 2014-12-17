<!DOCTYPE html>
<html lang="en">
    <head>
    <title><?php echo $title?> - LIMABELAS</title>

<!--memanggil file css-->

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/mainstyle.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/slide/slide_style.css" />

<!-- Data Tables -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/tables/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/tables/dataTables.autoFill.css">
<script type="text/javascript" language="javascript" src="<?php echo base_url()?>assets/js/tables/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url()?>assets/js/tables/dataTables.autoFill.js"></script>
<script type="text/javascript" language="javascript" class="init">
  $(document).ready(function() {
    var table = $('#example').DataTable();
     new $.fn.dataTable.AutoFill( table );
  } );

</script>

<!--accordion-->    
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/ddaccordion.js"></script>
<script type="text/javascript">
  ddaccordion.init({
  headerclass: "submenuheader",
  contentclass: "submenu",
  revealtype: "click",
  mouseoverdelay: 200,
  collapseprev: true,
  defaultexpanded: [],
  onemustopen: false, 
  animatedefault: false,
  persiststate: true, 
  toggleclass: ["", ""],
  togglehtml: ["suffix", "<img src='<?php echo base_url()?>assets/img/designs/plus.gif' class='statusicon' />", "<img src='<?php echo base_url()?>assets/img/designs/minus.gif' class='statusicon' />"], 
  animatespeed: "fast",
  oninit:function(headers, expandedindices){ 
  },
  onopenclose:function(header, index, state, isuseractivated){  }
})    



</script>
<!--memanggil fungsi font-->
<!-- <script type="text/javascript" src="js/cufon-yui.js"></script>
<script src="js/GeosansLight_500.font.js" type="text/javascript"></script>
<script type="text/javascript">
Cufon.replace('.logo', { fontFamily: 'GeosansLight' });
Cufon.replace('h1', { fontFamily: 'GeosansLight' });
Cufon.replace('h2', { fontFamily: 'GeosansLight' });


</script>    
-->
</head>
<body>
<div id="main_container">

         <!--header-->
         
  <div class="header">
    <a href="<?php echo site_url()?>" class="logo"><img src="<?php echo base_url()?>assets/img/designs/LOGO_HEADER.png" /></a>
    <div class="menu">
        <ul>
        <li><a href="<?php echo site_url()?>">Home</a></li>
        <li><a href="<?php echo site_url()?>/home/kaum_pria">Kaum Pria</a></li>
        <li><a href="<?php echo site_url()?>/home/kaum_wanita">Kaum Wanita</a></li>
        <li><a href="<?php echo site_url()?>/home/konfirmasi">Konfirmasi Pemesanan</a></li>
        <li><a href="<?php echo site_url()?>/home/keranjang">Keranjang</a></li>
        </ul>
    </div>
      <div class="header_socials">
            <a href="#"><img src="<?php echo base_url()?>assets/img/designs/rss.png" alt="" title="" border="0" /></a>
            <a href="#"><img src="<?php echo base_url()?>assets/img/designs/facebook.png" alt="" title="" border="0" /></a>
            <a href="#"><img src="<?php echo base_url()?>assets/img/designs/twitter.png" alt="" title="" border="0" /></a>
            <a href="#"><img src="<?php echo base_url()?>assets/img/designs/mail.png" alt="" title="" border="0" /></a>
      </div>
  </div>
    
      <!--end of header-->  
     
      <!--content-->

          <?php $this->load->view('page/' . $page) ?>

      <!--footer-->
        
        
<div class="footer">
    
    <div class="footer_content">
        
          <div class="menu_bawah">
        <ul>
        <li><a href="<?php echo site_url()?>">Home</a></li>
        <li><a href="<?php echo site_url()?>/home/tentang_kami">Tentang Kami</a></li>
        <li><a href="<?php echo site_url()?>/home/pemesanan">Cara Pemesanan</a></li>
        <li><a href="<?php echo site_url()?>/home/kontak">Hubungi Kami</a></li>
        </ul>
          </div>  

    </div>
</div>

</div>

<!--memanggil fungsi jquery-->
<script src="<?php echo base_url()?>assets/js/jquery.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/slide/Slide_ui.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
});
</script>
</body>
</html>