<!doctype html>
	<html itemscope 
	itemtype="http://schema.org/NewsArticle" 
	itemid="<?php the_permalink() ?>">
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->   

<meta itemprop="inLanguage" content="<?php language_attributes(); ?>" />

<head>
<?php remove_custom_background() ?>
	
	<link rel="dns-prefetch" href="//zedo.com">
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="dns-prefetch" href="//doubleclick.net">
	<link rel="dns-prefetch" href="//googleads.g.doubleclick.net">
	<link rel="dns-prefetch" href="//www.slidedeck.com">


	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

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

<?php wp_head(); ?>

<!-- Enable G+ -->
<?php
if (!is_singular()) {
    echo '<link rel="publisher" href="https://plus.google.com/u/0/103478563688345350335/" />';
} ?>

<!-- Enable GA -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23288080-1']);
  _gaq.push(['gat._anonymizeIp'],['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript">
function trackOutboundLink(link, category, action) { 
 
try { 
_gaq.push(['_trackEvent', category , action]); 
} catch(err){}
 
setTimeout(function() {
document.location.href = link.href;
}, 100);
}
</script>

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
googletag.defineSlot('/130598692/Billboard', [960, 90], 'div-gpt-ad-1365112664264-0').addService(googletag.pubads());
googletag.defineSlot('/130598692/Fixed_Panel', [336, 700], 'div-gpt-ad-1365112664264-1').addService(googletag.pubads());
googletag.defineSlot('/130598692/Full_Banner', [468, 60], 'div-gpt-ad-1365112664264-2').addService(googletag.pubads());
googletag.defineSlot('/130598692/Leaderboard', [728, 90], 'div-gpt-ad-1365112664264-3').addService(googletag.pubads());
googletag.defineSlot('/130598692/Medium_Rectangle', [300, 250], 'div-gpt-ad-1365112664264-4').addService(googletag.pubads());
googletag.defineSlot('/130598692/ResponsiveAd', [1, 1], 'div-gpt-ad-1365112664264-5').addService(googletag.pubads());
googletag.defineSlot('/130598692/Wide_Skyscraper', [160, 600], 'div-gpt-ad-1365112664264-6').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>

</head>

<body <?php body_class(); ?>>

<header class="row" role="banner">
	<div class="small-12 columns">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/GREENbyte-Logo-Stripe.png" data-interchange="[<?php echo get_template_directory_uri(); ?>/img/GREENbyte-Logo-Stripe.png, (default)], [<?php echo get_template_directory_uri(); ?>/img/GREENbyte-Logo-700.png, (screen and (max-width: 568px))], [<?php echo get_template_directory_uri(); ?>/img/GREENbyte-Logo-Stripe.png, (small)], [<?php echo get_template_directory_uri(); ?>/img/GREENbyte-Logo-Stripe.png, (medium)], [<?php echo get_template_directory_uri(); ?>/img/GREENbyte-Logo-Stripe.png, (large)]" alt="" ></a>
		<hr/>
	</div>
</header>

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

<section id="megaContainer" style="display: none;">
<script>
var megaDrop = $('#megaDrop');              // Variable to cache megaDrop element
var megaContainer = $('#megaContainer');                // Variable to cache megaContainer element
$(megaDrop).click(function() {
    $(megaContainer).slideToggle(300,function(){
        if ($(this).is(":hidden")) $(megaDrop).html("+");
        else $(megaDrop).html("×");
    });
});
</script>
	<div class="row">
		
		<div class="large-4 columns">
			<p>Doppelklick auf <kbd>shift</kbd> aktiviert "Emphasis". Mit der Funktion können sie Sätze oder Abschnitte mit einem einzigen Klick markieren. Danach können sie ganz einfach dahin verweisen.</p>
		</div>
		
		<div class="large-4 columns">
			<p>rising outward from twin creases above a hooked nose, and his pale brown hair grew down-from high flat temples-in a point on his forehead. He looked rather pleasantly like a blond Satan. He said to Effie Perine: "Yes, sweetheart?"</p>
		</div>
		
		<div class="large-4 columns">
			<p>She was a lanky sunburned girl whose tan dress of thin woolen stuff clung to her with an effect of dampness. Her eyes were brown and playful in a shiny boyish face.<br><br>- The Maltese Falcon</p>
		</div>
		
	</div>

</section>

<header class="row" role="slider">
		<div> <?php if (is_home() || is_category() || is_front_page()) {
			echo do_shortcode( "[SlideDeck2 id=10605 ress=1]" );
		}?> 
		</div>	
</header>

<header class="row" role="banner">
		<?php /* Widgetized header */
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header') ) : ?><?php endif; ?>
</header>

<div class="row" role="navigation">
		<ul class="breadcrumbs">
			<?php if(function_exists('bcn_display'))
			{
			bcn_display();
			}?>
		</ul>
</div>

<!-- Start the main container -->
<section class="container" role="document">
	<div class="row">