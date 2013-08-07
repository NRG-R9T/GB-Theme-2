<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-8 columns" role="main">
	
	<?php /* Start loop */ ?>
		<?php $edit_type = (is_page()) ? __('Edit Page','reverie') : __('Edit Post','reverie');
	edit_post_link( '['.$edit_type.']', '', ''); ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 itemprop="headline" class="headline"><?php the_title(); ?></h1>
				<div class="panel radius">
					<?php reverie_entry_meta(); ?>
					<?php wwsgd_the_message(); ?>
					<?php if(function_exists('get_twoclick_buttons')) {get_twoclick_buttons(get_the_ID());}?>
				</div>
			
			</header>
			<div class="article_text" itemprop="articleBody">
				<?php the_content(); ?>
				<section id="widget" class="small-11 small-centered columns">
				<?php 
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('BelowPost') ) : ?><?php endif; ?>
				</section>
			</div>
			
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
		<div class="panel radius">
			<a href="http://greenbyte.ch/feed"><img src="http://greenbyte.ch/wp-content/uploads/rssfeed30.jpg" /></a><a href="http://greenbyte.ch/feed">&nbsp;Folgen via RSS.</a><br><br>
			<?php the_tags(); ?> 

		</div>
		<div class="panel radius">
			<!-- Begin MailChimp Signup Form -->
			<link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
			<div id="mc_embed_signup">
			<form action="http://greenbyte.us2.list-manage.com/subscribe/post?u=0f0529906cc6a4793f8935daf&amp;id=a4e945666a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
				<label for="mce-EMAIL">Nichts verpassen! Tragen sie kostenlos ihre E-Mail ein - Newsletter jeweils Freitags.</label>
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="E-Mail-Adresse für Newsletter" required>
				<div class="clear"><input type="submit" value="Einschreiben" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			</form>
			</div>
			<!--End mc_embed_signup-->
		</div>

			</footer>
			<?php comments_template(); ?>

		</article>

	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>