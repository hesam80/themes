<?php
/*
Template Name: soofi
*/

?>
<?php get_header(); ?>

<div id="container">
<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
<h1><?php the_title(); ?></h1>
<div>
<?php if(isset($emailSent) && $emailSent == true) { ?>
<div>
<p>با تشکر، ایمیل شما با موفقیت ارسال شد</p>
</div>
<?php } else { ?>
<?php the_content(); ?>
<?php if(isset($hasError) || isset($captchaError)) { ?>
<p>متاسفم، خطایی رخ داده است لطفا مجددا سعی نمایید<p>
<?php } ?>

<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
<ul>
<li>
<label for="contactName">نام شما:</label>
<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" />
<?php if($nameError != '') { ?>
<span><?=$nameError;?></span>
<?php } ?>
</li>

<li>
<label for="email">ایمیل شما:</label>
<input type="text" name="email" id="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" />
<?php if($emailError != '') { ?>
<span><?=$emailError;?></span>
<?php } ?>
</li>

<li><label for="commentsText">پیغام:</label>
<textarea name="comments" id="commentsText" rows="20" cols="30"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
<?php if($commentError != '') { ?>
<span><?=$commentError;?></span>
<?php } ?>
</li>

<li>
<input type="submit" value="ارسال ایمیل"></input>
</li>
</ul>
<input type="hidden" name="submitted" id="submitted" value="ارسال ایمیل" />
</form>
<?php } ?>
</div><!-- .entry-content -->
</div><!-- .post -->

<?php endwhile; endif; ?>
</div><!-- #content -->
</div><!-- #container -->

<?php # get_sidebar(); ?>
<?php get_footer('soofi') ?>