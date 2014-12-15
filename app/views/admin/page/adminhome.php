<section class="wrapper site-min-height">
  <h3 align="center">Selamat datang di halaman administrator <strong><?php echo $cookie['c_fullname']?></strong></h3>
  <p align="center">Terakhir login tgl <strong><?php echo $cookie['c_lastlog']?></strong></p>
   <div class="row mt">
     <div class="col-lg-12">
<! -- 1st ROW OF PANELS -->
          <div class="row">
            <!-- Product Panel -->
            <div class="col-lg-4 col-md-4 col-sm-4 mb">
              <div class="product-panel-2 pn">
                <div class="badge badge-hot">HOT</div>
                <img src="<?php echo base_url()?>assets/img/product.jpg" width="200" alt="">
                <h5 class="mt">Flat Pack Heritage</h5>
                <h6>TOTAL SALES: 1388</h6>
                <button class="btn btn-small btn-theme04">FULL REPORT</button>
              </div>
            </div><! --/col-md-4 -->
            
            <div class="col-lg-4 col-md-4 col-sm-4 mb">
              <!-- WHITE PANEL - TOP USER -->
              <div class="white-panel pn">
                <div class="white-header">
                  <h5>TOP USER</h5>
                </div>
                <p><img src="<?php echo base_url()?>assets/img/ui-zac.jpg" class="img-circle" width="50"></p>
                <p><b>Zac Snider</b></p>
                  <div class="row">
                    <div class="col-md-6">
                      <p class="small mt">MEMBER SINCE</p>
                      <p>2012</p>
                    </div>
                    <div class="col-md-6">
                      <p class="small mt">TOTAL SPEND</p>
                      <p>$ 47,60</p>
                    </div>
                  </div>
              </div>
            </div><!-- /col-md-4 -->
            
            <div class="col-lg-4 col-md-4 col-sm-4 mb">
              <!-- INSTAGRAM PANEL -->
              <div class="instagram-panel pn">
                <i class="fa fa-instagram fa-4x"></i>
                <p>@THISISYOU<br/>
                  5 min. ago
                </p>
                <p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
              </div>
            </div><!-- /col-md-4 -->
          </div><! --/END 1ST ROW OF PANELS -->
          
          <! -- 2ND ROW OF PANELS -->
          <div class="row">
            <! -- TODO PANEL -->
            <div class="col-lg-4 col-md-4 col-sm-4 mb">
              <div class="steps pn">
                  <input id='op1' name='op1' type='checkbox' checked/>
                  <label for='op1'>Update Profile</label>
                  <input id='op2' name='op2' type='checkbox'/>
                  <label for='op2'>Contact Paul</label>
                  <input id='op3' name='op3' type='checkbox'/>
                  <label for='op3'>Enjoy Life</label>
                  <input type='submit' value='All Done!' id='submit'/>
              </div>
            </div><! --/col-md-4 -->
            
            <! -- PROFILE 01 PANEL -->
            <div class="col-lg-4 col-md-4 col-sm-4 mb">
              <div class="content-panel pn">
                <div id="profile-01">
                  <h3>Sharon Holmes</h3>
                  <h6>WEB DESIGNER</h6>
                </div>
                <div class="profile-01 centered">
                  <p>ADD TO CONTACT LIST</p>
                </div>
                <div class="centered">
                  <h6><i class="fa fa-envelope"></i><br/>SHARON@DASHGUMTHEME.COM</h6>
                </div>
              </div><! --/content-panel -->
            </div><! --/col-md-4 -->
            
            <! -- PROFILE 02 PANEL -->
            <div class="col-lg-4 col-md-4 col-sm-4 mb">
              <div class="content-panel pn">
                <div id="profile-02">
                  <div class="user">
                    <img src="<?php echo base_url()?>assets/img/friends/fr-06.jpg" class="img-circle" width="80">
                    <h4>DJ SHERMAN</h4>
                  </div>
                </div>
                <div class="pr2-social centered">
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                </div>
              </div><! --/panel -->
            </div><!--/ col-md-4 -->
          </div><! --/END 2ND ROW OF PANELS -->
    </div>
  </div>
</section>