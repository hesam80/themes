<?php
/*
Template Name : Blog Page
*/
?>
<?php global $query_string; // required
$posts = query_posts($query_string.'&posts_per_page=3&cat=-6,-9&order=ASC'); ?>

<?php // DEFAULT LOOP GOES HERE ?>

<?php wp_reset_query(); // reset the query ?>