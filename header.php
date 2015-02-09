<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->   

<meta itemprop="inLanguage" content="<?php language_attributes(); ?>" />

<head>
<?php remove_custom_background() ?>
	
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/mobileviewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	
	<link rel="alternate" type="application/rss+xml" title="Greenbyte.ch Feed" href="http://greenbyte.ch/feed/">
	
	<link rel="alternate" type="application/rss+xml" title="Greenbyte.ch RSS 2.0 feed" href="http://greenbyte.ch/feed/" />
	<link rel="alternate" type="application/atom+xml" title="Greenbyte.ch Atom feed" href="http://greenbyte.ch/feed/atom/" />
	<link rel="alternate" type="application/rss+xml" title="Greenbyte.ch RDF/RSS 1.0 feed" href="http://greenbyte.ch/feed/rdf/" />
	<link rel="alternate" type="application/rss+xml" title="Greenbyte.ch RSS 0.92 feed" href="http://greenbyte.ch/feed/rss/" />


	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />

<!-- Google Web Fonts Collection - http://www.google.com/fonts#UsePlace:use/Collection:Lato:300|Merriweather -->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300|Merriweather" media="screen">
<link rel="stylesheet" type="text/css" href="get_template_directory_uri(); ?>/css/style.css" media="screen">

<!-- Enable G+ -->
<?php
if (!is_singular()) {
    echo '<link rel="publisher" href="https://plus.google.com/u/0/103478563688345350335/" />';
} ?>

<link rel="alternate" type="application/rss+xml" title="RSS" href="/rss.xml">

<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/130598692/Leaderboard', [728, 90], 'div-gpt-ad-1365112664264-3').addService(googletag.pubads());
googletag.defineSlot('/130598692/Medium_Rectangle', [300, 250], 'div-gpt-ad-1365112664264-4').addService(googletag.pubads());
googletag.defineSlot('/130598692/Wide_Skyscraper', [[336,700],[160,600]], 'div-gpt-ad-1365112664264-6').addService(googletag.pubads());
googletag.defineSlot('/130598692/Full_Banner', [468, 60], 'div-gpt-ad-1365112664264-2').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>

</head>

<?php wp_head(); ?>

<?php flush(); ?>

<body <?php body_class(); ?>>

<div class="row" role="banner">
	<div class="small-12 columns">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/GREENbyte-Logo-Stripe.png" data-interchange="[<?php echo get_template_directory_uri(); ?>/img/GREENbyte-Logo-Stripe.png, (default)], [<?php echo get_template_directory_uri(); ?>/img/GREENbyte-logo-700.png, (screen and (max-width: 568px))], [<?php echo get_template_directory_uri(); ?>/img/GREENbyte-Logo-Stripe.png, (small)], [<?php echo get_template_directory_uri(); ?>/img/GREENbyte-Logo-Stripe.png, (medium)], [<?php echo get_template_directory_uri(); ?>/img/GREENbyte-Logo-Stripe.png, (large)]" alt="" ></a>
		<hr/>
	</div>
</div>

<div class="contain-to-grid sticky">
	<!-- Starting the Top-Bar -->
	<nav class="top-bar">
	    <ul class="title-area">
	        <li class="name">
	        	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/Greenbyte-SQUARE-Logo-30.png"></a></h1>
	        </li>
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<li class="toggle-topbar menu-icon"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" alt=""><span>MENU</span></a></li>
	    </ul>
	    <section class="top-bar-section">
	    <?php
	        wp_nav_menu( array(
	            'theme_location' => 'primary',
	            'container' => false,
	            'depth' => 0,
	            'items_wrap' => '<ul class="left">%3$s</ul>',
	            'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
	            'walker' => new reverie_walker( array(
	                'in_top_bar' => true,
	                'item_type' => 'li'
	            ) ),
	        ) );
	    ?>
	    <ul class="right">
	    	<li class="divider hide-for-small"></li>
	    	<li class="has-form"><?php get_search_form(); ?></li>
	    </ul>
	    </section>
	</nav>
	<!-- End of Top-Bar -->
</div>


<div class="row" role="slider">
	<div class="slider-one">
    <ul class="bxslider"></ul>
		<div> <?php if (is_home() || is_category() || is_front_page()) {
			if( function_exists('bxslider') ) bxslider('features'); 
		}?> 
		</div>
	</div>		
</div>

<div class="row" role="banner">
	<div class="small-12 columns">
		<?php /* Widgetized header */
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header') ) : ?><?php endif; ?>
	</div>
</div>





<nav class="row" role="navigation">
		<ul class="breadcrumbs">
			<?php if(function_exists('bcn_display'))
			{
			bcn_display();
			}?>
		</ul>
</nav>

<!-- Start the main container -->
<section class="container" role="document">
	<div class="row">