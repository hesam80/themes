<?php
/**
 * The template for displaying posts in the video post format
 *
 * @package WordPress
 * @subpackage mahan
 * @since mahan 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<!-- this page is content-video.php  --><!-- this page is content-video.php  -->
<!-- this page is content-video.php  -->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <title> <?php  bloginfo('title'); ?> </title>
    <?php wp_head(); ?>
    <style type="text/css">
 

.container {
    text-align: center;
    width: 80%;
    height: 80%;
    border: #1c4369 25px solid;
    border-radius: 15px;
    margin-top: 26px;
    margin-bottom: 5px;
    display: block;
}

.container:before {
  content: "";
  height: 100%;
  display: inline-block;
  vertical-align: middle;

}

.container .box {
  background:linear-gradient(rgba(78, 78, 136, 0.4) 56%, rgba(224, 205, 205, 0.5) 100%);;
    color: #fff;
    width: auto;
    display: inline-block;
    vertical-align: middle;
    text-align: right;
    padding: 2px 2px 3px 4px;
    margin-top: -20px;
    height: auto;
}

.box .content {
  padding: 20px;
}
.content p {
    color: #f2f7ff;
    font-size: 16px;
    line-height: 25px;
}
    
.box h1 {
  margin: 0;
}
</style>
    
    
</head>

<!-- Az inja dar page  sor.php  -->
<body <?php body_class(); ?>>
<div class="top">                          
<nav>
  <menu>
    <li><a href="#">☀</a></li>
    <li><a href="#">✈</a></li>
    <li><a href="#">❄</a></li>
    <li><a href="#">☎</a></li>
  </menu>
</nav>
<nav class="menu2">
  <menu>
    <li><a href="<?php echo get_settings('home'); ?>">home</a></li>
    <li><a href="#">about</a></li>
    <li><a href="#" class="selected">contact</a></li>
    <li><a href="#">blog</a></li>
  </menu>
</nav></div>
<div class="container">
  <div class="box">
    <div class="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
    <h1><?php the_title(); ?></h1>
	<p><?php  the_content() ;    ?></p>
    
<?php endwhile; else: ?>
    <?php _e( 'متاسفانه پستی برای نمایش وجود ندارد', 'textdomain' ); ?>
<?php endif; ?>
      
      </div> </div> </div>


<!-- Az inja dar page  fotter-sor.php  -->
<footer>
<div class="content-footer">
<p><?php echo bloginfo('template_url'); ?></p>
<p><?php echo get_template_directory_uri();?>/style-sara.css </p>
<p><?php echo get_settings('home'); ?></p>
<p><?php echo get_site_url(null, '/wp-content/themes/', 'https'); ?></p>
</div>
</footer>
</body>
<style type="text/css">
	body {
	 background: url(../wp-content/themes/mahan/img/bg.gif) repeat scroll center top #b8c4d0;
	
}
.top{
   display: block;
    content: ' ';
    background: #537596;
    min-height: 40px;
    border: 50px solid #537596;
    height: 40pt;
    border-radius: 11px;
}
.top:after , .top:before {
  display : block;
  content : ' ';
  background: #537596;
}

nav {
  float: left;
  width  : auto;
}

menu {
  border-radius : 3px;
  margin-top: 0px;
}
nav menu {margin-top: 0px;
}

menu:after , menu:before {
  display : block;
  content : ' ';
}

menu:after {
  clear : both;
}

li {
  list-style-type : none;
  background: linear-gradient(rgba(78, 78, 136, 0.4) 85%, rgba(224, 205, 205, 0.5) 100%);
    float: left;
    cursor: pointer;
    padding: 5px 10px;
    border-top: 2px solid rgba(200,200,255,0.5);
    border-bottom: 2px solid rgba(50,50,50,0.4);
}

li:first-child {
  border-radius : 5px 0 0 5px;
}

li:last-child {
  border-radius : 0 5px 5px 0;
}

a {
  display : block;
  padding : 10px 13px;
  font-size : 26px;
  text-decoration : none;
  border-radius   : 5px;
  position        : relative;
  top   : 0;
  color : #FFF;			
  transition : all .4s;
}

li:hover a {
  top   : -20px;
  color : #4eacff;
  background-color: #fff;
  box-shadow : 0 0 5px 0 rgba(255, 255, 255, 0.7);
  transition : all .4s;
}

li a:after {
  display  : block;
  content  : '';
  position : absolute;
  top  : 100%;
  left : 42%;
  border-style : solid;
  border-color : transparent;
  border-width : 5px 5px 0 5px;
  transition   : all .4s;
}

li:hover a:after {
  border-color : white transparent transparent transparent;
  transition   : all .4s;
}

/*************************************/

.menu2 {
  width :auto;
  float: right;
  margin-top: 5px;
}

.menu2 a {
  font-family : georgia;
  font-size   : 14px;
  font-style  : italic;
  text-transform : capitalize;
}

.menu2 li {
  border-right  : 1px solid rgba(200,200,255,0.5);
  border-left   : 1px solid rgba(40,40,40,0.2); 
}

.selected {
  top   : -20px;
  color : #4eacff;
  background-color: #fff;
  box-shadow : 0 0 5px 0 rgba(255, 255, 255, 0.7);
  transition : all .4s;
}

.selected:after {
  border-color : white transparent transparent transparent;
  transition   : all .4s;
}

a.fun {
  display : none;
}

/*****************footer style********************/
footer{
  display: block;
}
 footer .content-footer {
    width: auto;
    height: auto;
    border-top: 8px solid #1c4369;
    border-bottom: 8px solid #1c4369;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    background: url(../wp-content/themes/mahan/img/bg.gif) repeat scroll center top #d9d9d9;
    direction: ltr;
  }

</style>
</html>
  
  
  

