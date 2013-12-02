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
				<div class="section-auto-sample-vtabs" data-section="vertical-tabs">
				  <section>
					<p class="title-sample" data-section-title><a href="#section1">Info</a></p>
					<div class="content-sample" data-slug="section1" data-section-content>
					  <?php reverie_entry_meta(); ?>
					  <?php wwsgd_the_message(); ?>
					</div>
				  </section>
				  <section>
					<p class="title-sample" data-section-title><a href="#section1">Teilen</a></p>
					<div class="content-sample" data-slug="section2" data-section-content>
						<?php if(function_exists('get_twoclick_buttons')) {get_twoclick_buttons(get_the_ID());}?>
					</div>
				  </section>
				  <section>
					<p class="title-sample" data-section-title><a href="#section1">Inhalt</a></p>
					<div class="content-sample" data-slug="section2" data-section-content>
					  <section id="widget">
						<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('PostInterface-1') ) : ?><?php endif; ?>
						</section>
					</div>
				  </section>
				</div>
			</header>
			<div class="article_text" itemprop="articleBody">
				<?php the_content(); ?>
			<?php zemanta_related_posts()?>
			<?php if(function_exists('echo_ald_wherego')) echo_ald_wherego(); ?>

				<section id="widget" class="small-11 small-centered columns">
				<?php 
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('BelowPost') ) : ?><?php endif; ?>
				</section>
			</div>
			
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<?php the_tags(); ?> 
			</footer>
			<?php comments_template(); ?>

		</article>

	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>