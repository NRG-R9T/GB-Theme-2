<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-8 columns" role="main">
	
		<h2><?php _e('Search Results for', 'reverie'); ?> "<?php echo get_search_query(); ?>"</h2>
	
	<?php if ( have_posts() ) : ?>
	
		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php reverie_entry_meta_front(); ?>
				</header>
				<div>
			<?php if (is_archive() || is_search() || is_home() || is_front-page ()) : // Only display excerpts for archives and search ?>
				<figure><?php the_post_thumbnail('thumbnail', array('class' => 'alignleft')); ?></figure><?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="small button success radius" >Weiterlesen</a>
			<?php else : ?>
				<?php the_content('Weiterlesen..'); ?>
				<a href="<?php the_permalink(); ?>" class="small button success radius" >Weiterlesen</a>
			<?php endif; ?>
				</div>
				<footer>

				</footer>
				<hr>
			</article>	
		<?php endwhile; // End the loop ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
	<?php endif; // end have_posts() check ?>
	
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Zuvor', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Danach &rarr;', 'reverie' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>