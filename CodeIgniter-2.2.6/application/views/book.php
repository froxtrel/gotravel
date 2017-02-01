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
                    <div class="col-lg-12">
                        <div class="checkout-page__top">
                            <div class="title">
                                <h1 class="text-uppercase">CONFIRM</h1>
                            </div>
                            <span class="phone">Support Call: 088-212 852</span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="checkout-page__sidebar">
                            <ul>
                                <li class="current"><a href="checkout-yourcart.html">Your Book</a></li> 
                                <li><a href="checkout-complete.html">Complete order</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="checkout-page__content">
                            <div class="yourcart-content">
                                <div class="content-title">
                                    <h2><i class="awe-icon awe-icon-cart"></i><?php echo $tour;?></h2>
                                </div>
                                <div class="cart-content">

                                <br>
                                <hr>
                                <br>
                                
                                    <div class="cart-footer">
                                        <div class="cart-subtotal">
                                            <div class="subtotal-title">
                                                <h5>Book Subtotal</h5>
                                            </div>
                                            <div class="subtotal">
                                                <span class="amount">$ 467.909</span>
                                                <span class="sale">- 30%</span>
                                            </div>
                                            <div class="coupon-code">
                                                <label for="coupon">Coupon Code</label>
                                                <div class="form-item">
                                                    <input type="text" id="coupon">
                                                </div>
                                                <div class="form-submit">
                                                    <input type="submit" value="Apply code" class="button">
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="order-total">
                                            <h4 class="title">Book total</h4>
                                            <span class="amount">$ 467.909</span>
                                        </div>
                                        <div class="cart-submit">
                                            <input type="submit" value="UPDATE BOOK" class="update-cart">
                                            <input type="submit" value="PROCEED" class="checkout">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
   <?php include('./public/footer.php');?>