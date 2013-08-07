<?php
/*
Author: Zhen Huang
URL: http://themefortress.com/

This place is much cleaner. Put your theme specific codes here,
anything else you may wan to use plugins to keep things tidy.

*/

/*
1. lib/clean.php
    - head cleanup
	- post and images related cleaning
*/
require_once('lib/clean.php'); // do all the cleaning and enqueue here
/*
2. lib/enqueue-sass.php or enqueue-css.php
    - enqueueing scripts & styles for Sass OR CSS
    - please use either Sass OR CSS, having two enabled will ruin your weekend
*/
require_once('lib/enqueue-sass.php'); // do all the cleaning and enqueue if you Sass to customize Reverie
//require_once('lib/enqueue-css.php'); // to use CSS for customization, uncomment this line and comment the above Sass line
/*
3. lib/foundation.php
	- add pagination
	- custom walker for top-bar and related
*/
require_once('lib/foundation.php'); // load Foundation specific functions like top-bar
/*
4. lib/presstrends.php
    - add PressTrends, tracks how many people are using Reverie
*/
require_once('lib/presstrends.php'); // load PressTrends to track the usage of Reverie across the web, comment this line if you don't want to be tracked

/**********************
Add theme supports
**********************/
function reverie_theme_support() {
	// Add language supports. Please note that Reverie does not include language files, not yet
	load_theme_textdomain('reverie', get_template_directory() . '/lang');
	
	// Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
	add_theme_support('post-thumbnails');
	// set_post_thumbnail_size(150, 150, false);
	
	// rss thingy
	add_theme_support('automatic-feed-links');
	
	// Add post formarts supports. http://codex.wordpress.org/Post_Formats
	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
	
	// Add menu supports. http://codex.wordpress.org/Function_Reference/register_nav_menus
	add_theme_support('menus');
	register_nav_menus(array(
		'primary' => __('Primary Navigation', 'reverie'),
		'utility' => __('Utility Navigation', 'reverie')
	));
	
	// Add custom background support
	add_theme_support( 'custom-background',
	    array(
	    'default-image' => '',  // background image default
	    'default-color' => '', // background color default (dont add the #)
	    'wp-head-callback' => '_custom_background_cb',
	    'admin-head-callback' => '',
	    'admin-preview-callback' => ''
	    )
	);
}
add_action('after_setup_theme', 'reverie_theme_support'); /* end Reverie theme support */

// create widget areas: sidebar, footer
$sidebars = array('Sidebar');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
		'after_widget' => '</div></article>',
		'before_title' => '<h6><strong>',
		'after_title' => '</strong></h6>'
	));
}
$sidebars = array('Footer');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h6><strong>',
		'after_title' => '</strong></h6>'
	));
}
$sidebars = array('Header');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
        'before_widget' => '<header id="%1$s" class="row widget %2$s">',
        'after_widget' => '</header>',
        'before_title' => '<h6><strong>',
        'after_title' => '</strong></h6>'
    ));
}
$sidebars = array('PostInterface-1');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
        'before_widget' => '<article id="%1$s" class="row widget %2$s">',
        'after_widget' => '</article>',
        'before_title' => '<h6><strong>',
        'after_title' => '</strong></h6>'
    ));
}
$sidebars = array('BelowPost');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
        'before_widget' => '<article id="%1$s" class="row widget %2$s">',
        'after_widget' => '</article>',
        'before_title' => '<h6><strong>',
        'after_title' => '</strong></h6>'
    ));
}

// return entry meta information for posts, used by multiple loops.
function reverie_entry_meta() {
	$category = get_the_category(); 
	if($category[0]){
	echo '<a itemprop="articleSection" class="tiny button" href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
	}
	echo '<meta itemprop="dateCreated" content="'. get_the_time('c') .'" >'. sprintf(__(' Publiziert am %s um %s Uhr.', 'reverie'), get_the_time('l, j. F Y'), get_the_time()) .'</meta>';
	echo '<h4 class="byline author vcard">'. __('Verfasst von', 'reverie') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></h4>'; 
}

// return entry meta information for front posts, used by multiple loops.
function reverie_entry_meta_front() {
	$category = get_the_category(); 
	if($category[0]){
	echo '<a itemprop="articleSection" class="tiny button" href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
	}
	echo '<meta itemprop="dateCreated" content="'. get_the_time('c') .'" >'. sprintf(__(' %s um %s Uhr.', 'reverie'), get_the_time('l, j. F Y'), get_the_time()) .'</meta>';
}

//CUSTOMS

//add login message filter
add_filter ( 'login_message', 'custom_login_message' );
function custom_login_message() {
$message = "   Willkommen, bitte melden sie sich hier an.";
return $message;}

// Obscure login screen error messages
function wpfme_login_obscure(){ return '<strong>Sorry</strong>: Falsch!';}
add_filter( 'login_errors', 'wpfme_login_obscure' ); 

// Remove the version number of WP
// Warning - this info is also available in the readme.html file in your root directory - delete this file!
remove_action('wp_head', 'wp_generator');

// filter tag cloud output so that it can be styled by CSS - credits to foundation for wordpress theme
function add_tag_class( $taglinks ) {
    $tags = explode('</a>', $taglinks);
    $regex = "#(.*tag-link[-])(.*)(' title.*)#e";
        foreach( $tags as $tag ) {
            $tagn[] = preg_replace($regex, "('$1$2 label radius tag-'.get_tag($2)->slug.'$3')", $tag );
        }
    $taglinks = implode('</a>', $tagn);
    return $taglinks;
}

add_action('wp_tag_cloud', 'add_tag_class');

add_filter( 'widget_tag_cloud_args', 'my_widget_tag_cloud_args' );

function my_widget_tag_cloud_args( $args ) {
	$args['number'] = 20; // show less tags
	$args['largest'] = 9.75; // make largest and smallest the same - i don't like the varying font-size look
	$args['smallest'] = 9.75;
	$args['unit'] = 'px';
	return $args;
}

add_filter('wp_tag_cloud','wp_tag_cloud_filter', 10, 2);

function wp_tag_cloud_filter($return, $args)
{
  return '<div id="tag-cloud"><p>'.$return.'</p></div>';
}

function add_class_the_tags($html){
    $postid = get_the_ID();
    $html = str_replace('<a','<a class="label success radius"',$html);
    return $html;
}
add_filter('the_tags','add_class_the_tags',10,1);

add_theme_support( 'post-thumbnails' ); 

add_filter( 'post_thumbnail_html', 'rw_post_thumbnail_html', 10, 2 );
function rw_post_thumbnail_html( $html, $post_id )
{
    $html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
    return $html;
}


//disable wpautop filter
remove_filter ('the_content',  'wpautop');

//Add [iframe src=http://example.com] to the content where you want the iframe
function add_iframe($atts) {
    extract(shortcode_atts(array(
    'src' => '/'
    ), $atts));
  $theframe = '<iframe src="'.$src.'" width="720" height="500" frameborder="0"></iframe>';
  return $theframe;
}
add_shortcode('iframe', 'add_iframe');

//html in user bio mts
remove_filter('pre_user_description', 'wp_filter_kses');// Do NOT remove this line. //This is to sanitize content for allowed HTML tags for post content
add_filter( 'pre_user_description', 'wp_filter_post_kses' );


?>