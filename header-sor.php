
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<!--   header-sor.php  -->
<!--   header-sor.php  -->
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

.container .box .content {
  padding: 20px;
}

.container .box .content p {
    color: #005580;
    font-size: 16px;
    line-height: 25px;
}
.container .box .content p:hover{
      color: #f2f7ff;
}
    
.container .box h1 {
  margin: 0;
}
</style>
    
    
</head>