<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kelola Produk</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="asset/styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="asset/styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="asset/styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="asset/styles/all.css">
    <link type="text/css" rel="stylesheet" href="asset/styles/main.css">
    <link type="text/css" rel="stylesheet" href="asset/styles/style-responsive.css">
     <link type="text/css" rel="stylesheet" href="asset/styles/jplist-custom.css">
</head>
<body>
    <div>
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" 
            data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" 
                class="navbar-toggle"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span><span class="icon-bar">
                    
                </span><span class="icon-bar"></span></button>
                <a id="logo" href="index.html" class="navbar-brand">
                <span class="fa fa-rocket"></span>
                <span class="logo-text">LIMABELAS</span>
                <span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs">
            <i class="fa fa-bars"></i></a>
                
                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a>
                    <input type="text" placeholder="Search here..." class="form-control text-white"/></div>
                </form>
                <div class="news-update-box hidden-xs">
                    <ul>
                        <li>Selamat Datang Admin</li>
                    </ul>
                </div>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    
                    </li>
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle">
                    <img src="images/avatar/ava.png" alt="" class="img-responsive img-circle"/>
                    <span class="hidden-xs">Admin</span><span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="Login.html"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <li><a href="dashboard.php"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Dashboard</span></a></li>
                    <li><a href="produk.php"><i class="fa fa-desktop fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Produk</span></a>
                       
                    </li>
                    <li><a href="#"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Kategori</span></a>
                       
                    </li>
                    <li><a href="pesanan.php"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Pesanan</span></a>
                      
                    </li>
                    <li><a href="perusahaan.php"><i class="fa fa-archive fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Perusahaan</span></a>
                </ul>
            </div>
        </nav>
          
          
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Data Produk</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i><a href="dashboard.html">Home</a><i class="fa fa-angle-right"></i></li>
                        <li class="hidden"><a href="#">Daftar Produk</a><i class="fa fa-angle-right"></i></li>
                        <li class="active">Daftar Produk</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">
                            <div class="col-lg-12">
                                
                                            <div class="col-md-12">
                                                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                                                </div>
                                            </div>
                                
                            </div>

                            <div class="col-lg-12">
                            <div class="col-lg-12">
                        <ul id="generalTab" class="nav nav-tabs responsive">
                            <li class="active"><a href="#daftar-tab" data-toggle="tab">Daftar Produk</a></li>
                            <li><a href="#tambah-tab" data-toggle="tab">Tambah Produk</a></li>
                        </ul>
        <div id="generalTabContent" class="tab-content responsive">
            <div id="daftar-tab" class="tab-pane fade in active">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div id="grid-layout-table-1" class="box jplist">
                                    <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                    <div class="jplist-panel box panel-top">
                                        <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" class="jplist-drop-down form-control">
                                            <ul class="dropdown-menu">
                                                <li><span data-number="3"> 3 per page</span></li>
                                                <li><span data-number="5"> 5 per page</span></li>
                                                <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                <li><span data-number="all"> view all</span></li>
                                            </ul>
                                        </div>
                                        <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                            <ul class="dropdown-menu">
                                                <li><span data-path="default">Sort by</span></li>
                                                <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                                <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                                <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                                <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                                                <li><span data-path=".like" data-order="asc" data-type="number" data-default="true">Likes asc</span></li>
                                                <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                                                <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                                            </ul>
                                        </div>
                                        <div class="text-filter-box">
                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span>
                                            <input data-path=".title" type="text" value="" placeholder="Cari Produk" data-control-type="textbox" data-control-name="title-filter" data-control-action="filter" class="form-control"/>
                                            </div>
                                        </div>
                                        <div data-type="Page {current} of {pages}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-white"></div>
                                        <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" class="jplist-pagination"></div>
                                    </div>
                                    <div class="box text-shadow">
                                        <table class="demo-tbl"><!--<item>1</item>-->
                                        <?php
                                        for ($i=0; $i < 40 ; $i++) { 
                                            
                                        ?>
                                            <tr class="tbl-item"><!--<img/>-->
                                                <td class="img" width="20%"><img src="../asset/images/produk/ss001.jpg" alt="" title="" width="170px" /></td>
                                                <!--<data></data>-->
                                                <td class="td-block" width="30%"><p class="date">03/15/2012</p>

                                                    <p class="title">Deskripsi</p>
                                                    
                                                    <p class="desc"><b>VOLKS</b><br />Kode : SS001<br />Harga : IDR 190.000<br />
                                                    Ukuran : S M L XL<br />Stok : 5</p>
                                                    <p></p>
                                                    <p class="like">35 Likes</p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p>
                                                    <a href="#" class="todo-edit"><i class="fa fa-edit"></i> Edit </a> | 
                                                    <a href="#" class="todo-remove"><i class="fa fa-trash-o"></i> Hapus</a></p>


                                                    </td>
                                                    <!--<img/>-->
                                                <td class="img" width="20%"><img src="../asset/images/produk/sp001.jpg" alt="" title="" width="170px" /></td>
                                                <!--<data></data>-->
                                                <td class="td-block" width="30%"><p class="date">03/18/2012</p>

                                                    <p class="title">Deskripsi</p>

                                                    <p class="desc"><b>DHRONED</b><br />Kode : SP001<br />Harga : IDR 230.000<br />
                                                    Ukuran : 32 34 36<br />Stok : 4</p>

                                                    <p></p>
                                                    <p class="like">25 Likes</p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p></p>
                                                    <p>
                                                    <a href="#" class="todo-edit"><i class="fa fa-edit"></i> Edit </a> | 
                                                    <a href="#" class="todo-remove"><i class="fa fa-trash-o"></i> Hapus</a></p>
                                            </tr>
                                            <?php 
                                        }
                                            ?>

                                        </table>
                                    </div>
                                    <div class="box jplist-no-results text-shadow align-center"><p>No results found</p></div>
                                    <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                    <div class="jplist-panel box panel-bottom">
                                        <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-drop-down form-control">
                                            <ul class="dropdown-menu">
                                                <li><span data-number="3"> 3 per page</span></li>
                                                <li><span data-number="5"> 5 per page</span></li>
                                                <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                <li><span data-number="all"> view all</span></li>
                                            </ul>
                                        </div>
                                        <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-control-animate-to-top="true" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                            <ul class="dropdown-menu">
                                                <li><span data-path="default">Sort by</span></li>
                                                <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                                <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                                <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                                <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                                                <li><span data-path=".like" data-order="asc" data-type="number" data-default="true">Likes asc</span></li>
                                                <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                                                <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                                            </ul>
                                        </div>
                                        <div data-type="{start} - {end} of {all}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                        <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tambah-tab" class="tab-pane fade">
                                <div class="row">
                                
                                </div>
                            </div>
                            
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="#">2014 © LIMABELAS. All Right Reserved.</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="asset/script/jquery-1.10.2.min.js"></script>
    <script src="asset/script/jquery-migrate-1.2.1.min.js"></script>
    <script src="asset/script/jquery-ui.js"></script>
    <script src="asset/script/bootstrap.min.js"></script>
    <script src="asset/script/bootstrap-hover-dropdown.js"></script>
    <script src="asset/script/html5shiv.js"></script>
    <script src="asset/script/respond.min.js"></script>
    <script src="asset/script/jquery.metisMenu.js"></script>
    <script src="asset/script/jquery.slimscroll.js"></script>
    <script src="asset/script/jquery.cookie.js"></script>
    <script src="asset/script/icheck.min.js"></script>
    <script src="asset/script/custom.min.js"></script>
    <script src="asset/script/jquery.news-ticker.js"></script>
    <script src="asset/script/jquery.menu.js"></script>
    <script src="asset/script/pace.min.js"></script>
    <script src="asset/script/holder.js"></script>
    <script src="asset/script/responsive-tabs.js"></script>
    <script src="asset/script/jquery.flot.js"></script>
    <script src="asset/script/jquery.flot.categories.js"></script>
    <script src="asset/script/jquery.flot.pie.js"></script>
    <script src="asset/script/jquery.flot.tooltip.js"></script>
    <script src="asset/script/jquery.flot.resize.js"></script>
    <script src="asset/script/jquery.flot.fillbetween.js"></script>
    <script src="asset/script/jquery.flot.stack.js"></script>
    <script src="asset/script/jquery.flot.spline.js"></script>
    <script src="asset/script/zabuto_calendar.min.js"></script>
    <script src="asset/script/index.js"></script>
    <script src="asset/script/data.js"></script>
    <script src="asset/script/drilldown.js"></script>
    <script src="asset/script/jplist.min.js"></script>
    <script src="asset/script/jplist.js"></script>

</body>
</html>
