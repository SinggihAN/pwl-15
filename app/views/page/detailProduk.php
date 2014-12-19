<div id="center">
    <div class="title">
  <h3>Find Your Temptations here</h3>
  </div>
</div>
<div id="product">
  

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
                      <form class="form-horizontal style-form" method="post"  action="<?php echo site_url()?>/home/pesan/<?php echo $detailProduk['idProduk']; ?>">
<table id="" class="display" cellspacing="0" width="100%">
          <tr>
            <td width="300px" rowspan="3" valign="top">
            <div class="img_detail">
              <img src="<?php echo base_url()?>assets/img/produk/<?php echo $detailProduk['gambar']; ?>">
            </div>
            </td>
            <td valign="top" colspan="2" height="25px">
              <div class="detail_produk">
              <h4><?php echo $detailProduk['namaProduk']; ?></h4>
              </div>
              </td>
          </tr>
          <tr>
            <td valign="top" width="170px">
              <div class="detail_produk">
              <p>Kode Produk<br /><br />
              Stok<br /><br>
              Ukuran<br /><br /><br />
              Jumlah<br><br><br />
              Harga<br /><br />
              Keterangan

              </p></div>
            </td>
            <td valign="top"><div class="detail_produk">
              <p>
              <?php echo $detailProduk['idProduk']; ?><br /><br />
              <?php echo $detailProduk['stok']; ?><br /><br> 
                <select name="ukuran" class="form-control">
                  <option value='ukuran'>S</option>
                  <option value='ukuran'>M</option>
                  <option value='ukuran'>L</option>
                  <option value='ukuran'>XL</option>
                  <option value='ukuran'>XXL</option>
                </select><br /><br />
                <input type="text" class="form-control" name="totalBarang" /><br><br>
                IDR <?php echo $detailProduk['harga']; ?>,00<br /><br />
                <?php echo $detailProduk['deskripsi']; ?>
                </p>
                </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="btn-group">
              <input type="submit" value="Pesan" name="submit" class="btn">
              </div>
            </td>
          </tr>
      </table></form>
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