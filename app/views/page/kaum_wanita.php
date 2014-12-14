<div id="product">
  <h3>Fine Your Temptations here</h3>
  
  <form name="form1" method="post" action="" class="form1">

  <div class="sidebarmenu">
     <div class="sidebartop"></div>         
    <a class="menuitem submenuheader" href="">Male</a>
                <div class="submenu">
                    <ul>
                    <li><a href="">Shirt</a></li>
                    <li><a href="">Raglan</a></li>
                    <li><a href="">Pants</a></li>
                    <li><a href="">Jacket</a></li>
                    <li><a href="">Other</a></li>
                    </ul>
                </div>         
    <a class="menuitem submenuheader" href="">Female</a>
                <div class="submenu">
                    <ul>
                    <li><a href="">Shirt</a></li>
                    <li><a href="">Raglan</a></li>
                    <li><a href="">Pants</a></li>
                    <li><a href="">Jacket</a></li>
                    <li><a href="">Other</a></li>
                    </ul>
                </div>
    <a class="menuitem submenuheader" href="" >Color</a>
                <div class="submenu">
                    <ul>
                    <li><a href="">Black</a></li>
                    <li><a href="">White</a></li>
                    <li><a href="">Red</a></li>
                    <li><a href="">Green</a></li>
                    <li><a href="">Blue</a></li>
                    <li><a href="">Yellow</a></li>
                    <li><a href="">Other</a></li>
                    </ul>
                </div>
    <a class="menuitem submenuheader" href="">Price</a>
    <div class="submenu">
      <ul>
                    <li><a href=""></a></li>
        </ul>
                </div>
  <div class="sidebarbottom"></div>
  </div>
    <div class="center">
	<div class="search">
    </div>
        <div class="col-lg-12">
<table id="" class="display" cellspacing="0" width="100%">
        <thead>
          <tr><th></th></tr>
        </thead>
        <tfoot>
          <tr><th></th></tr>
        </tfoot>
        <tbody>
          <?php foreach ($kaum_wanita as $p): ?>
          <tr>
            <td width="80%">
            <?php foreach ($kaum_wanita as $p): ?>
            <div class="img_thumb">
              <a href=""><img src="<?php echo base_url()?>assets/img/produk/<?php echo $p->gambar?>"></a>
              <p align="center"><a href=""><?php echo $p->namaProduk?></a> - <?php echo $p->idProduk?><br />
              Size : <b><?php echo $p->ukuran?></b><br />
              Harga : <b>IDR <?php echo $p->harga?></b></p>
            </div>
            <?php endforeach ?>
            </td>
          </tr>
          <?php endforeach?>
        </tbody>
      </table>
    </div>
 <div class="button">
	<a href="">Next</a>
</div>
</div>
 
 <div class="cart">
 	<div class="cart_top"> <a href="#">Cart </a></div>
 	<div class="cart_center"><table width="660" border="0">
  <tr>
    <td width="79" height="35" bgcolor="#F7F7F7">Id</td>
    <td width="191" bgcolor="#F7F7F7">Item</td>
    <td width="65" bgcolor="#F7F7F7">Qty</td>
    <td width="74" bgcolor="#F7F7F7">Size</td>
    <td width="108" bgcolor="#F7F7F7">Color</td>
    <td width="117" bgcolor="#F7F7F7">Price</td>
  </tr>
  <tr>
    <td height="33" bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="31" bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
</div>
 	<div class="cart_bottom"></div>
</div>
  </form>

</div>