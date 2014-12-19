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
        <form class="form-horizontal style-form" method="post"  action="<?php echo site_url()?>/home/tambahpesanan">
        <label>Kode Produk</label>
        <input type="text" name="idProduk" class="input-xlarge" value="<?php echo $produk['idProduk']; ?>" /><br />
        <label>Ukuran</label>
        <input type="text" name="ukuran" class="input-xlarge" value="" /><br />
        <label>Jumlah</label> 
        <input type="text" name="totalBarang" class="input-xlarge" value="" /><br />
        <label>Nama Lengkap</label>
        <input type="text" name="namaPelanggan" class="input-xlarge" value="" /><br />
        <label>Alamat</label> 
        <textarea name="alamat" class="input-xlarge"></textarea><br />
        <label>No Telepon</label>
        <input type="text" name="telepon" class="input-xlarge" value="" /><br />  
        <label>Kode Pos</label>
        <input type="text" name="kodePos" class="input-xlarge" value="" /><br />  

        <input type="submit" value="Pesan" class="btn btn-warning" />
        </form>
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