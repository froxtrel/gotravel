<?php include('./public/header.php');?>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->


    <!-- PAGE WRAP -->
    <div id="page-wrap">
        <!-- PRELOADER -->
        <div class="preloader"></div>
        <!-- END / PRELOADER -->

        
        <!-- HEADER PAGE -->
        <header id="header-page">
            <div class="header-page__inner">
                <div class="container">
                    <!-- LOGO -->
                    <div class="logo">
                        <a href="<?php echo base_url();?>"><b><?php echo $brandtop;?></b></a>
                    </div>
                    <!-- END / LOGO -->
                    
                   <?php include('./public/nav_menu.php');?>
                    
                    <!-- SEARCH BOX -->
                    <div class="search-box">
                        <span class="searchtoggle"><i class="awe-icon awe-icon-search"></i></span>
                        <form class="form-search">
                            <div class="form-item">
                                <input type="text" value="Search &amp; hit enter">
                            </div>
                        </form>
                    </div>
                    <!-- END / SEARCH BOX -->


                    <!-- TOGGLE MENU RESPONSIVE -->
                    <a class="toggle-menu-responsive" href="#">
                        <div class="hamburger">
                            <span class="item item-1"></span>
                            <span class="item item-2"></span>
                            <span class="item item-3"></span>
                        </div>
                    </a>
                    <!-- END / TOGGLE MENU RESPONSIVE -->
                </div>
            </div>
        </header>
        <!-- END / HEADER PAGE -->

        
        <section class="checkout-section-demo">
            <div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <div class="row">
                            <div class="col-xs-12">
                                <h5> Booking Cart</h5>
                            </div>                          
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-2"><img class="img-responsive" src="https://scontent-kut2-1.xx.fbcdn.net/v/t31.0-8/12489457_10154052523384349_5957258425204783285_o.jpg?oh=13860cc11189c5a1b2b52a3ca97af9ea&oe=59055F7D">
                        </div>
                        <div class="col-xs-4">
                            <h4 class="product-name"><strong><?php echo $tour_name;?></strong>
                            </h4><small><?php echo $tour_desc;?></small>                      
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-6 text-right">
                                <h6><strong>RM <?php echo $adult_rate;?> <span class="text-muted">x</span></strong></h6>
                                <br>
                                <h6><strong>RM <?php echo $child_rate;?> <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-xs-6">
                                <input disabled="true" type="text" class="form-control input-sm" value="<?php echo $adult ;?> ADULT">
                                <br>
                                <input disabled="true" type="text" class="form-control input-sm" value="<?php echo $child ;?> CHILD">
                            </div>
                        </div>
                    </div>
                    <hr>               
                    <div class="row">
                        <div class="text-center">
                            <div class="col-xs-9">
                                <!-- <h6 class="text-right">Added items?</h6> -->
                            </div>
                            <div class="col-xs-3">
                                <button type="button" class="btn btn-default btn-sm btn-block">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row text-center">
                        <div class="col-xs-9">
                            <h4 class="text-right">Total <strong>RM <?php echo $total;?></strong></h4>
                        </div>
                        <div class="col-xs-3">
                            <button type="button" class="btn btn-success btn-block">
                                Okay
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>              
        </section>

        
   <?php include('./public/footer.php');?>