<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></h2>
		<?php reverie_entry_meta_front(); ?>
	</header>
	<div>
<?php if (is_archive() || is_search() || is_home() || is_front-page ()) : // Only display excerpts for archives and search ?>
	<div class="row">
		<div class="large-5 columns">
		  	<figure><?php the_post_thumbnail('large', array('class' => 'alignleft')); ?></figure>
		</div>
		<div class="large-7 columns">
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="small button success radius" >Weiterlesen</a>
		</div>
	</div>
<?php else : ?>
	
			<?php the_content('Weiterlesen..'); ?>
			<a href="<?php the_permalink(); ?>" class="small button success radius" >Weiterlesen</a>
	
<?php endif; ?>
	</div>
	<footer>

	</footer>
	<hr>
</article>	