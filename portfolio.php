<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Portfolio Hesam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="content description">
    <meta name="author" content="Hesam Hosseini">

    <!-- Your Styles
    ================================================== -->
    <link href="css/style.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="js/twitter/jtwt.css" />

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.html">
    <link rel="apple-touch-icon"  href="img/icons/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon"  href="img/icons/apple-touch-icon-114x114.html">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/font-awesome-ie7.css">
    <![endif]-->

    <!-- styles for IE -->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/ie/ie.css" type="text/css" media="screen"/>
    <![endif]-->
    <!--[if IE 7 ]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

</head>
<body>
<div id="main_container">
    <!--Begin header-->
    <header>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="content_menu wrap">
                        <div class="box span2 offset0 color_one resume">
                            <h1><a href="index.php#content">حسام حسینی نسب</a></h1>

                                    <p>
                                        طراح , برنامه نویس و مجری شبکه های مجازی.<br>
                                        اجرا و مشاوره,طراحی,نصب و فروش  تجهیزات مربوطه<br>
                                        برای آشنایی با کارهای من میتوانید پورتفولیو من را مشاهده کنید.<br>
										
                                    </p>
                                     <div class="resume_button btn-sample btn-large">
                                        <a href="portfolio.php"><i class="icon-white icon-download"></i> رزومه</a>
                                    </div>
                                    <div class="contact_button btn-sample btn-large">
                                        <a href="contact.php"><i class="icon-white icon-info"></i>تماس با من</a>
                                    </div>
                        </div>
                        <!-------------content menu---------------------------->
                        <nav class="navbar span3">
                            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="nav-collapse collapse">
                                 <ul class="nav">
                                <li class="menu_item"><a href="index.php">خانه</a></li>
                                <li class="menu_item"><a href="education.php">تحصیلات </a></li>
                                <li class="menu_item"><a href="portfolio.php">پورتفولیو </a></li>
                                <li class="menu_item"><a href="experience.php">تجربه کاری </a></li>
                                <li class="menu_item"><a href="blog.php">بلاگ </a></li>
                                <li class="menu_item"><a href="contact.php">تماس با من </a></li>
                            </ul>
                            </div>

                        </nav>
                        <!-------------end content menu------------------------>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!--End begin header-->
    
    <!--Begin content main-->
    <section id="content" class="portfolio">
   		<div class="container-fluid">
        
        	<div class="row-fluid">
            	<div class="span12">
                	<div class="wrap">
                    
                		<!------------------slider----------------->
                        <div class="content_slider span5">
                            
                            <div id="myCarousel" class="carousel slide">
                            
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item"><img src="img/portfolio-slider/1.jpg" alt="slider image"></div>
                                    <div class="item"><img src="img/portfolio-slider/2.jpg" alt="slider image"></div>
                                    <div class="item"><img src="img/portfolio-slider/3.jpg" alt="slider image"></div>
                                    <div class="item"><img src="img/portfolio-slider/4.jpg" alt="slider image"></div>
                                </div>
                                
                                <!-- Carousel nav -->
                                <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
                                <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
                            </div>
                            
                        </div>
                        <!------------------end slider----------------->
                       
                	</div>
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span12">
                    <div class="wrap">
                    
                        <!------------content------------->
                        <div class="content_main span12">
                            <div class="services_content first_service row-fluid">
                            
                            	<h2 class="sub_title"> پورتفولیو من <span class="little_title"> - با کارهای من آشنا شوید</span></h2>
                                
                                <!-------------filter portfolio---------------->
                                <ul id="menu_content" class="nav nav-pills">
                                    <li class="active"><a class="all" href="#">نمایش همه</a></li>
                                    <li><a class="marketing" href="#">بازاریابی</a></li>
                                    <li><a class="photography" href="#">عکاسی </a></li>
                                    <li><a class="illustration" href="#">تصویر سازی</a></li>
                                    <li><a class="branding" href="#">برند سازی</a></li>
                                </ul>
                                <!-------------end filter portfolio---------------->
                                
                                <ul id="case_content">
                                
                                
                                
                                	<!--Item with no lightbox, only link to the item page-->
                                    <li class="case" data-type="photography" data-id="id-1" >
                                        <!-- Button to trigger modal -->
                                        <a class="portfolio_box " href="single_item.php" role="button">
                                            <img src="img/portfolio/1.jpg" alt="portfolio single item image">
                                            <div class="portfolio_box_text">
                                                <h6>ماهان تکنیک</h6>
                                                <p> برند سازی / طراحی گرافیک</p>
                                            </div>
                                        </a>
                                    </li>
                                    
                                    
                                    
                                    <li class="case" data-type="marketing" data-id="id-2" >
                                        <!-- portfolio item to trigger modal -->
                                        <a class="portfolio_box " href="#myModal2" role="button" data-toggle="modal">
                                            <img src="img/portfolio/2.jpg" alt="portfolio single item image">
                                            <div class="portfolio_box_text">
                                                <h6>عنوان برند</h6>
                                                <p> برند سازی / طراحی گرافیک</p>
                                            </div>
                                        </a>
                                        <!-- Lightbox modal -->
                                        <div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cancel-circle"></i></button>
                                                <div class="content_modal">
													<img src="img/lightbox/1.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p>یک خط نوشته برای توضیحات بیشتر در اینجا قرار میگیرد.</p>
                                            </div>
                                        </div>
                                        <!-- End Lightbox modal -->
                                    </li>
                                    
                                    
                                    
                                    
                                    <li class="case" data-type="marketing branding" data-id="id-3" >
                                        <!-- Button to trigger modal -->
                                        <a class="portfolio_box " href="#myModal13" role="button" data-toggle="modal">
                                            <img src="img/portfolio/3.jpg" alt="portfolio single item image">
                                            <div class="portfolio_box_text">
                                                <h6>عنوان برند</h6>
                                                <p> برند سازی / طراحی گرافیک</p>
                                            </div>
                                        </a>
                                        <!-- Lightbox modal -->
                                        <div id="myModal13" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cancel-circle"></i></button>
                                                <div class="content_modal">
													<img src="img/lightbox/2.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p>یک خط نوشته برای توضیحات بیشتر در اینجا قرار میگیرد.</p>
                                            </div>
                                        </div>
                                        <!-- End Lightbox modal -->
                                    </li>
                                    
                                    
                                    
                                    
                                    <li class="case" data-type="photography" data-id="id-4" >
                                        <!-- Button to trigger modal -->
                                        <a class="portfolio_box " href="#myModal12" role="button" data-toggle="modal">
                                            <img src="img/portfolio/4.jpg" alt="portfolio single item image">
                                            <div class="portfolio_box_text">
                                                <h6>عنوان برند</h6>
                                                <p> برند سازی / طراحی گرافیک</p>
                                            </div>
                                        </a>
                                        <!-- Lightbox modal -->
                                        <div id="myModal12" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cancel-circle"></i></button>
                                                <div class="content_modal">
													<img src="img/lightbox/2.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p>یک خط نوشته برای توضیحات بیشتر در اینجا قرار میگیرد.</p>
                                            </div>
                                        </div>
                                        <!-- End Lightbox modal -->
                                    </li>
                                    
                                    
                                    
                                    
                                    
                                    <li class="case" data-type="marketing branding" data-id="id-5" >
                                        <!-- Button to trigger modal -->
                                        <a class="portfolio_box " href="#myModal11" role="button" data-toggle="modal">
                                            <img src="img/portfolio/5.jpg" alt="portfolio single item image">
                                            <div class="portfolio_box_text">
                                                <h6>عنوان برند</h6>
                                                <p> برند سازی / طراحی گرافیک</p>
                                            </div>
                                        </a>
                                        <!-- Lightbox modal -->
                                        <div id="myModal11" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cancel-circle"></i></button>
                                                <div class="content_modal">
													<img src="img/lightbox/2.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p>یک خط نوشته برای توضیحات بیشتر در اینجا قرار میگیرد.</p>
                                            </div>
                                        </div>
                                        <!-- End Lightbox modal -->
                                    </li>
                                    
                                    
                                    
                                    
                                    
                                    <li class="case" data-type="photography illustration branding" data-id="id-6" >
                                        <!-- Button to trigger modal -->
                                        <a class="portfolio_box " href="#myModal10" role="button" data-toggle="modal">
                                            <img src="img/portfolio/6.jpg" alt="portfolio single item image">
                                            <div class="portfolio_box_text">
                                                <h6>عنوان برند</h6>
                                                <p> برند سازی / طراحی گرافیک</p>
                                            </div>
                                        </a>
                                        <!-- Lightbox modal -->
                                        <div id="myModal10" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cancel-circle"></i></button>
                                                <div class="content_modal">
													<img src="img/lightbox/1.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p>یک خط نوشته برای توضیحات بیشتر در اینجا قرار میگیرد..</p>
                                            </div>
                                        </div>
                                        <!-- End Lightbox modal -->
                                    </li>
                                    
                                    
                                    
                                    
                                    
                                    
                                    <li class="case" data-type="marketing illustration branding" data-id="id-7" >
                                        <!-- Button to trigger modal -->
                                        <a class="portfolio_box " href="#myModal3" role="button" data-toggle="modal">
                                            <img src="img/portfolio/7.jpg" alt="portfolio single item image">
                                            <div class="portfolio_box_text">
                                                <h6>عنوان برند</h6>
                                                <p> برند سازی / طراحی گرافیک</p>
                                            </div>
                                        </a>
                                        <!-- Lightbox modal -->
                                        <div id="myModal3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cancel-circle"></i></button>
                                                <div class="content_modal">
													<img src="img/lightbox/2.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p>یک خط نوشته برای توضیحات بیشتر در اینجا قرار میگیرد.</p>
                                            </div>
                                        </div>
                                        <!-- End Lightbox modal -->
                                    </li>
                                    
                                    
                                    
                                    
                                    
                                    <li class="case" data-type="branding illustration" data-id="id-8" >
                                        <!-- Button to trigger modal -->
                                        <a class="portfolio_box " href="#myModal4" role="button" data-toggle="modal">
                                            <img src="img/portfolio/8.jpg" alt="portfolio single item image">
                                            <div class="portfolio_box_text">
                                                <h6>عنوان برند</h6>
                                                <p> برند سازی / طراحی گرافیک</p>
                                            </div>
                                        </a>
                                        <!-- Lightbox modal -->
                                        <div id="myModal4" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cancel-circle"></i></button>
                                                <div class="content_modal">
													<img src="img/lightbox/1.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p>یک خط نوشته برای توضیحات بیشتر در اینجا قرار میگیرد.</p>
                                            </div>
                                        </div>
                                        <!-- End Lightbox modal -->
                                    </li>
                                    
                                    
                                    
                                    
                                    
                                    <li class="case" data-type="branding illustration" data-id="id-9" >
                                        <!-- Button to trigger modal -->
                                        <a class="portfolio_box " href="#myModal5" role="button" data-toggle="modal">
                                            <img src="img/portfolio/1.jpg" alt="portfolio single item image">
                                            <div class="portfolio_box_text">
                                                <h6>عنوان برند</h6>
                                                <p> برند سازی / طراحی گرافیک</p>
                                            </div>
                                        </a>
                                        <!-- Lightbox modal -->
                                        <div id="myModal5" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cancel-circle"></i></button>
                                                <div class="content_modal">
													<img src="img/lightbox/2.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p>یک خط نوشته برای توضیحات بیشتر در اینجا قرار میگیرد.</p>
                                            </div>
                                        </div>
                                        <!-- End Lightbox modal -->
                                    </li>
                                    
                                    
                                    
                                    
                                    
                                    <li class="case" data-type="marketing illustration" data-id="id-10" >
                                        <!-- Button to trigger modal -->
                                        <a class="portfolio_box " href="#myModal6" role="button" data-toggle="modal">
                                            <img src="img/portfolio/1.jpg" alt="portfolio single item image">
                                            <div class="portfolio_box_text">
                                                <h6>عنوان برند</h6>
                                                <p> برند سازی / طراحی گرافیک</p>
                                            </div>
                                        </a>
                                        <!-- Lightbox modal -->
                                        <div id="myModal6" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cancel-circle"></i></button>
                                                <div class="content_modal">
													<img src="img/lightbox/2.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p>یک خط نوشته برای توضیحات بیشتر در اینجا قرار میگیرد.</p>
                                            </div>
                                        </div>
                                        <!-- End Lightbox modal -->
                                    </li>
                                    
                                    
                                    
                                    
                                    
                                    <li class="case" data-type="illustration" data-id="id-11" >
                                        <!-- Button to trigger modal -->
                                        <a class="portfolio_box " href="#myModal7" role="button" data-toggle="modal">
                                            <img src="img/portfolio/3.jpg" alt="portfolio single item image">
                                            <div class="portfolio_box_text">
                                                <h6>عنوان برند</h6>
                                                <p> برند سازی / طراحی گرافیک</p>
                                            </div>
                                        </a>
                                        <!-- Lightbox modal -->
                                        <div id="myModal7" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cancel-circle"></i></button>
                                                <div class="content_modal">
													<img src="img/lightbox/2.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p>یک خط نوشته برای توضیحات بیشتر در اینجا قرار میگیرد.</p>
                                            </div>
                                        </div>
                                        <!-- End Lightbox modal -->
                                    </li>
                                    
                                    
                                    
                                    
                                    
                                    
                                    <li class="case" data-type="marketing" data-id="id-12" >
                                        <!-- Button to trigger modal -->
                                        <a class="portfolio_box " href="#myModal8" role="button" data-toggle="modal">
                                            <img src="img/portfolio/4.jpg" alt="portfolio single item image">
                                            <div class="portfolio_box_text">
                                                <h6>عنوان برند</h6>
                                                <p> برند سازی / طراحی گرافیک</p>
                                            </div>
                                        </a>
                                        <!-- Lightbox modal -->
                                        <div id="myModal8" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cancel-circle"></i></button>
                                                <div class="content_modal">
													<img src="img/lightbox/2.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p>یک خط نوشته برای توضیحات بیشتر در اینجا قرار میگیرد.</p>
                                            </div>
                                        </div>
                                        <!-- End Lightbox modal -->
                                    </li>
                                    
                                    
                                    
                                    
                                    <li class="case" data-type="photography" data-id="id-13" >
                                        <!-- Button to trigger modal -->
                                        <a class="portfolio_box " href="#myModal6" role="button" data-toggle="modal">
                                            <img src="img/portfolio/2.jpg" alt="portfolio single item image">
                                            <div class="portfolio_box_text">
                                                <h6>عنوان برند</h6>
                                                <p> برند سازی / طراحی گرافیک</p>
                                            </div>
                                        </a>
                                        <!-- Lightbox modal -->
                                        <div id="myModal6" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cancel-circle"></i></button>
                                                <div class="content_modal">
													<img src="img/lightbox/2.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p>یک خط نوشته برای توضیحات بیشتر در اینجا قرار میگیرد.</p>
                                            </div>
                                        </div>
                                        <!-- End Lightbox modal -->
                                    </li>
                                    
                                    
                                    
                                    
                                    <li class="case" data-type="photography" data-id="id-14" >
                                        <!-- Button to trigger modal -->
                                        <a class="portfolio_box " href="#myModal6" role="button" data-toggle="modal">
                                            <img src="img/portfolio/5.jpg" alt="portfolio single item image">
                                            <div class="portfolio_box_text">
                                                <h6>عنوان برند</h6>
                                                <p> برند سازی / طراحی گرافیک</p>
                                            </div>
                                        </a>
                                        <!-- Lightbox modal -->
                                        <div id="myModal6" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cancel-circle"></i></button>
                                                <div class="content_modal">
													<img src="img/lightbox/2.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p>یک خط نوشته برای توضیحات بیشتر در اینجا قرار میگیرد.</p>
                                            </div>
                                        </div>
                                        <!-- End Lightbox modal -->
                                    </li>
                                    
                                    
                                </ul>

                            </div>
                        </div>

                        <!------------end content------------->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End begin content main-->

    <!--Begin footer-->
    <footer>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="wrap">
                        <div class="content_footer span12">
                            <hr>
                            <div class="span2">
                                2015 My Online Resume. All rights reserved
								<p>
								ویرایش و پارسی سازی توسط <a href="http://mahantec.tk" title="Mahan technique" alt="Mahan technique" target="">Mahan technique</a>
								</p>
                            </div>
                            <div class="span3 offset0">
                                <ul class="social-circled">
                                    <li class="color_ten social">
                                        <a class="icon-gplus-circled" href="#googleplus"></a>
                                    </li>
                                    <li class=" color_ten social ">
                                        <a class="icon-pinterest-circled" href="#googleplus"></a>
                                    </li>
                                    <li class="color_ten social ">
                                        <a class="icon-twitter-circled" href="#googleplus"></a>
                                    </li>
                                    <li class="color_ten social ">
                                        <a class="icon-linkedin-circled " href="#googleplus"></a>
                                    </li>
                                    <li class="color_ten social ">
                                        <a class="icon-facebook-circled" href="#googleplus"></a>
                                    </li>
                                    <li class="color_ten social ">
                                        <a class="icon-skype-circled" href="#googleplus"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </footer>
    <!--End begin footer-->
</div>

<!-- ======================= JQuery libs =========================== -->
<!-- Always latest version of jQuery-->
<script src="js/jquery-1.7.1.js"></script>
<script src="js/filter/jquery.easing.min.js"></script>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>-->
<!-- Bootstrap.js-->
<script src="js/bootstrap.js"></script>
<!--fUNCTIONS-->
<script src="js/js.js" type="text/javascript"></script>
<script type="text/javascript" src="js/twitter/jquery.jtwt.js"></script>
<script src="js/filter/quiksand.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>



<!-- ======================= End JQuery libs =========================== -->

</body>
</html>