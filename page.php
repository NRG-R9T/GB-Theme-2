<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-8 columns" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
			<h1 itemprop="headline" class="headline"><?php the_title(); ?></h1>
				
			</header>
			<div class="article_text" itemprop="articleBody">
				<?php wwsgd_the_message(); ?>
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>