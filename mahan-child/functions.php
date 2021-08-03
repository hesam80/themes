<?php
/**
 * mahan functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 *
 * @link https://codex.wordpress.org/Child_Themes
 *
 * @package mahan mahan child WordPress
 * @subpackage mahan child
 * @since mahan 
 */


/*register custom post type
add_action( 'init', 'my_function' );

function my_function() {
	$labels = array(
		'name'               => __( 'دوره های آموزشی' ),
		'singular_name'      => __( 'دوره ها' ),
		'menu_name'          => __( 'دوره آموزشی' ),
		'name_admin_bar'     => __( 'دوره' ),
		'add_new'            => __( 'افزودن دوره' ),
		'add_new_item'       => __( 'پست مخصوص دوره های آموزشی' ),
		'new_item'          => __( 'پست جدید' ),
		'edit_item'          => __( 'ویرایش پست' ),
		'view_item'          => __( 'مشاهده پست' ),
		'all_items'          => __( 'همه دوره ها' ),
		'search_items'       => __( 'جستجو در بین دوره ها' ),
		'parent_item_colon'  => __( 'مادر' ),
		'not_found'          => __( 'مطلب یافت نشد' ),
		'not_found_in_trash' => __( 'مطلب در زباله دان یافت نشد' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'پست تایپ دوره های آموزشی' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'course' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'course', $args );
}*/

// register fehrest links
function register_my_menu(){
	register_nav_menus(array(
	'top-menu'=>__('منوی بالا'),
	'main-menu'=>__('منوی اصلی'),
	));
}	
	add_action('init','register_my_menu');

 add_theme_support('post-thumbnails');
 set_post_thumbnail_size( 672, 372, true );

  
  //register dynamic sidebar in mytheme
  
  if(function_exists(register_sidebar)){
  	register_sidebar(array(
	'name'=> 'sidebar',
	'id'=> 'my sidebar',
	'before_widget'=> '<div class="sidebox">',
	'after_widget'=>'<div ></div></div>',
	'before_title'=>'<h3 class="sidetitle">',
	'after_title'=>'</h3>'
	));
  }

add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );
  
  function restrict_access_admin_panel(){
    global $current_user;
    get_currentuserinfo();
    if ($current_user->user_level <  4) {
        wp_redirect(
            get_bloginfo('url') // انتقال به صفحه اصلی سایت
        );
        exit;
    }
}
add_action('admin_init', 'restrict_access_admin_panel', 1);



function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  //wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array('style'), '1.1', 'all');
 
  //wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/css/media-queries.css', array(), '1.1', 'all');
 
  wp_enqueue_style('jtwt',get_template_directory_uri() . '/css/twitter/jtwt.css', array(), '1' , 'all');

  wp_enqueue_style('style-sara',get_template_directory_uri() . '/style-sara.css', array(),'1' , 'all');
  wp_enqueue_script( 'jquery-1.7.1', get_template_directory_uri() . '/js/jquery-1.7.1.js', array (), 1.7, true);
 
  wp_enqueue_script( 'jquery-func', get_template_directory_uri() . '/js/jquery-func.js', array (), 1.7, true);


   wp_enqueue_script( 'js', get_template_directory_uri() . '/js/js.js', array ( 'jquery' ), 1.7, true);

   wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array ( ), 1.1, true);
  
   wp_enqueue_script( 'jquery.jtwt', get_template_directory_uri() . '/css/twitter/jquery.jtwt.js', array (), 1.7, true);
   
   


 }
 add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
 

 /*  tedade baazdid az har post  */

function setPostViews($postID) {
 $count_key = 'post_views_count';
 $count = get_post_meta($postID, $count_key, true);
 if($count==''){
 $count = "0";
 delete_post_meta($postID, $count_key);
 add_post_meta($postID, $count_key, '0');
 }else{
 $count++;
 update_post_meta($postID, $count_key, $count);
 }
}

function getPostViews($postID){
 $count_key = 'post_views_count';
 $count = get_post_meta($postID, $count_key, true);
 if($count==''){
 delete_post_meta($postID, $count_key);
 add_post_meta($postID, $count_key, '0');
 return "0";
 }
 return $count;
}



 add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
 $defaults['post_views'] = __('View');
 return $defaults;
}
function posts_custom_column_views($column_name, $id){
 if($column_name === 'post_views'){
 echo getPostViews(get_the_ID());
 }
}
/*  tedade baazdid az har post  */
//--- custom Search Form -------------------------------------
function custom_search_form($custom_search){
 
$default=array(
                'cat_show'=>false,
				'tag_show'=>false,
				'author_show'=>false,
				'archive_show'=>false,
				'field_show'=>true,
				'label_show'=>false,
				'button_show'=>true,
				'rememberd'=>true,
				'echo'=>false
);
//default array
foreach((array)$custom_search as $key=>$value){
	$default[$key]=$value;
}

//--base vars------------------------
global $WP_Query,$query,$wp_user;
$cat_option='';$tag_option='';$author_option='';$archive_option='';
$advance_option='';$close_option='';$field_option='';$button_option='';
$cat_selected=get_query_var('cat');
$tag_selected=get_query_var('tag');
$author_selected=get_query_var('author');
$day_selected=get_query_var('day');
$month_selected=get_query_var('monthnum');
$year_selected=get_query_var('year');
if($day_selected==0)$day_selected='';
if($month_selected==0)$month_selected='';
if($year_selected==0)$year_selected='';
//--------category--------------------	
	if($default['cat_show']==1):
	$categories = get_categories(); 
		$cat_option='<li><ul>';
		if($default['label_show']):
			$cat_option .='<li class="cat-label">'.__('دسته بندی','zistfa').'</li>';
		endif;	
				$cat_option .='<li class="search-cat"><select name="cat" id="searchcat" ><option value="">'.__('همه','zistfa').'</option>';
			foreach ($categories as $category) {
				$cat_option .= '<option value="'.$category->cat_ID.'"';
					if(($cat_selected == $category->cat_ID)&&($default['rememberd']==1)):
						$cat_option .=' selected';
					endif;
				$cat_option .= '>'.$category->cat_name;
				$cat_option .= '</option>';
			}
		$cat_option .= '</select></li></ul></li>';
	endif;
	//--------tag--------------------
	if($default['tag_show']==1):
		$tags = get_categories('taxonomy=post_tag'); 
			$tag_option='<li><ul>';
				if($default['label_show']):
					$tag_option .='<li class="tag-label">'.__('برچسب','zistfa').'</li>';
				endif;
			$tag_option .='<li class="search-tag" ><select name="tag" id="searchtag" ><option value="">'.__('همه','zistfa').'</option>';
 
			foreach ($tags as $tag) {
				$tag_option .= '<option value="'.$tag->slug.'"';
					if(($tag_selected == $tag->slug)&&($default['rememberd']==1)):
						$tag_option .=' selected';
					endif;
				$tag_option .= '>'.$tag->cat_name;
				$tag_option .= '</option>';
			}
			$tag_option .= '</select></li></ul></li>';
	endif;
	//--------author--------------------		
if($default['author_show']==1):
	$authors=get_users(array('who'=>'authors','fields'=>array('id','display_name')));
	$author_option='<li><ul>';
			if($default['label_show']):
				$author_option .='<li class="author-label">'.__('نویسنده ','zistfa').'</li>';
			endif;
			$author_option .='<li class="search-author" ><select name="tag" id="searchauthor" ><option value="">'.__('همه','zistfa').'</option>';
 
			foreach ($authors as $author) {
				$author_option .= '<option value="'.$author->id.'"';
					if(($author_selected == $author->id)&&($default['rememberd']==1)):
						$author_option .=' selected';
					endif;
				$author_option .= '>'.$author->display_name;
				$author_option .= '</option>';
			}
			$author_option .= '</select></li></ul></li>';
	endif;
	//--------Date--------------------		
if($default['archive_show']==1):
$archive_option='<li><ul>';
if($default['label_show']):
$archive_option .='<li class="archive-label">'.__('تاریخ','zistfa').'</li>';
endif;
$archive_option .='<li class="archive-field">
		<input type="text" value="' . $year_selected . '" name="year" id="year" size="3" placeholder="'.__('سال','zistfa').'" />
		<input type="text" value="' . $month_selected . '" name="monthnum" id="monthnum" size="2" placeholder="'.__('ماه','zistfa').'" />
		<input type="text" value="' . $day_selected. '" name="day" id="day" size="1" placeholder="'.__('روز','zistfa').'" />
</li></ul></li>';
endif;
//--------search field--------------------		
	if($default['field_show']==1):
	$field_option='<li><ul>';
			if($default['label_show']):
				$field_option .='<li class="search-label">'.__('جستجو برای : ','zistfa').'</li>';
			endif;
			$field_option .='<li class="search-field"><input type="text" value="' . get_search_query() . '" name="s"  placeholder="'.__('کلمه مورد نظر + اینتر','zistfa').'" /></li>
		</ul>
	</li>';
	endif;
	//--------search button--------------------		
if($default['button_show']==1):
$button_option='<li>
<input type="submit" class="search-submit" value="'. esc_attr__( 'جستجو','zistfa' ) .'" />
</li>';
endif;
//--------final form-------------------		
		$form = '<form role="search" method="get" class="searchform" action="' . home_url( '/' ) . '" ><ul>
			'.$cat_option.$tag_option.$author_option.$archive_option.$field_option.$button_option.'
			</ul></form>';
 
		if($default['echo']==1):
			echo $form;
		else:
			return $form;
		endif;
 
}
add_filter( 'get_search_form', 'custom_search_form',10,1 );

function get_query_template( $type, $templates = array() ) {
    $type = preg_replace( '|[^a-z0-9-]+|', '', $type );
 
    if ( empty( $templates ) )
        $templates = array("{$type}.php");
 
    /**
     * Filters the list of template filenames that are searched for when retrieving a template to use.
     *
     * The last element in the array should always be the fallback template for this query type.
     *
     * Possible values for `$type` include: 'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date',
     * 'embed', 'home', 'frontpage', 'page', 'paged', 'search', 'single', 'singular', and 'attachment'.
     *
     * @since 4.7.0
     *
     * @param array $templates A list of template candidates, in descending order of priority.
     */
    $templates = apply_filters( "{$type}_template_hierarchy", $templates );
 
    $template = locate_template( $templates );
 
    /**
     * Filters the path of the queried template by type.
     *
     * The dynamic portion of the hook name, `$type`, refers to the filename -- minus the file
     * extension and any non-alphanumeric characters delimiting words -- of the file to load.
     * This hook also applies to various types of files loaded as part of the Template Hierarchy.
     *
     * Possible values for `$type` include: 'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date',
     * 'embed', 'home', 'frontpage', 'page', 'paged', 'search', 'single', 'singular', and 'attachment'.
     *
     * @since 1.5.0
     * @since 4.8.0 The `$type` and `$templates` parameters were added.
     *
     * @param string $template  Path to the template. See locate_template().
     * @param string $type      Filename without extension.
     * @param array  $templates A list of template candidates, in descending order of priority.
     */
    return apply_filters( "{$type}_template", $template, $type, $templates );
}

//--------alt Attribute for pictures-------------------	
/*$attr = array('alt'=> trim(strip_tags( get_the_title() )));
the_post_thumbnail( "my-thumb", $attr ); 
*/

//----------------- new code --------------------
//-------------- code namayesh masir -------------
/*
function sitralweb_breadcrumbs() {
	$separator          = '»';
	$breadcrums_id      = 'breadcrumbs';
	$breadcrums_class   = 'breadcrumbs';
	$home_title         = 'صفحه نخست';
	$custom_taxonomy    = 'product_cat';
	  
	global $post,$wp_query;
	if ( !is_front_page() ) {
		echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
		echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
		echo '<li class="separator separator-home"> ' . $separator . ' </li>';
		  
		if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
			echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
		} else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
			$post_type = get_post_type();
			if($post_type != 'post') {
				$post_type_object = get_post_type_object($post_type);
				$post_type_archive = get_post_type_archive_link($post_type);
				echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
				echo '<li class="separator"> ' . $separator . ' </li>';
			}
			$custom_tax_name = get_queried_object()->name;
			echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
		} else if ( is_single() ) {
			$post_type = get_post_type();
			if($post_type != 'post') {
				$post_type_object = get_post_type_object($post_type);
				$post_type_archive = get_post_type_archive_link($post_type);
				echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
				echo '<li class="separator"> ' . $separator . ' </li>';
			}
			$category = get_the_category();
			if(!empty($category)) {
				$last_category = end(array_values($category));
				$get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
				$cat_parents = explode(',',$get_cat_parents);
				$cat_display = '';
				foreach($cat_parents as $parents) {
					$cat_display .= '<li class="item-cat">'.$parents.'</li>';
					$cat_display .= '<li class="separator"> ' . $separator . ' </li>';
				}
			}
			$taxonomy_exists = taxonomy_exists($custom_taxonomy);
			if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
				$taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
				$cat_id         = $taxonomy_terms[۰]->term_id;
				$cat_nicename   = $taxonomy_terms[۰]->slug;
				$cat_link       = get_term_link($taxonomy_terms[۰]->term_id, $custom_taxonomy);
				$cat_name       = $taxonomy_terms[۰]->name;
			}
			if(!empty($last_category)) {
				echo $cat_display;
				echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
			} else if(!empty($cat_id)) {
				echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
				echo '<li class="separator"> ' . $separator . ' </li>';
				echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
			} else {
				echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
			}
		} else if ( is_category() ) {
			echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
		} else if ( is_page() ) {
			if( $post->post_parent ){
				$anc = get_post_ancestors( $post->ID );
				$anc = array_reverse($anc);
				if ( !isset( $parents ) ) $parents = null;
				foreach ( $anc as $ancestor ) {
					$parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
					$parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
				}
				echo $parents;
				echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
			} else {
				echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
			}
		} else if ( is_tag() ) {
			$term_id        = get_query_var('tag_id');
			$taxonomy       = 'post_tag';
			$args           = 'include=' . $term_id;
			$terms          = get_terms( $taxonomy, $args );
			$get_term_id    = $terms[۰]->term_id;
			$get_term_slug  = $terms[۰]->slug;
			$get_term_name  = $terms[۰]->name;
			echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
		} elseif ( is_day() ) {
			echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
			echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
			echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
			echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
			echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
		} else if ( is_month() ) {
			echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
			echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
			echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
		} else if ( is_year() ) {
			echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
		} else if ( is_author() ) {
			global $author;
			$userdata = get_userdata( $author );
			echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
		} else if ( get_query_var('paged') ) {
			echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
		} else if ( is_search() ) {
			echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
		} elseif ( is_404() ) {
			echo '<li>' . 'خطای ۴۰۴ » صفحه مورد نظر یافت نشد' . '</li>';
		}
		echo '</ul>';
	}
}
add_action('init','sitralweb_breadcrumbs');
*/
function author_role_template( $templates = '' ) {
    $author = get_queried_object();
    $role = $author->roles[0];
 
    if ( ! is_array( $templates ) && ! empty( $templates ) ) {
        $templates = locate_template( array( "author-$role.php", $templates ), false );
    } elseif ( empty( $templates ) ) {
        $templates = locate_template( "author-$role.php", false );
    } else {
        $new_template = locate_template( array( "author-$role.php" ) );
        if ( ! empty( $new_template ) ) {
            array_unshift( $templates, $new_template );
        }
    }
 
    return $templates;
}
add_filter( 'author_template', 'author_role_template' );

function bcg_body() { 
$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
$color ='#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].
$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
echo $color;
}

?>
