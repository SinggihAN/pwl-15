<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Login Ke Halaman Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/css/login.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/login-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="" method="post">
		        <h2 class="form-login-heading">Masuk Ke Halaman Admin</h2>
		        <div class="login-wrap">
					<?php if (!empty($error)):?>
					<div class="alert alert-error">
                        <?php echo $error ?>
                    </div>	
					<?php endif?> 
		            <input type="text" name="usr" class="form-control" placeholder="User ID" autofocus>
		            <br>
		            <input type="password" name="pwd" class="form-control" placeholder="Password">      
		            <label class="checkbox">
		                    <a data-toggle="modal" href="<?php echo site_url()?>">Kembali</a>
		               
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Lupa Password?  </a>
		
		                </span>
		            </label>
		            <button class="btn btn-info btn-block" type="submit" name="submit" value="submit"><i class="fa fa-lock"></i> Masuk</button>
		            <hr>
		            
		            
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Lupa Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-info" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("img/login.jpg", {speed: 500});
    </script>


  </body>
</html>
