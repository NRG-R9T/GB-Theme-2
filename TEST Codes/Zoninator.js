$zone_query = z_get_zone_query( 'homepage' );
if ( $zone_query->have_posts() ) :
    while ( $zone_query->have_posts() ) : $zone_query->the_post();
        echo '<ul class="Zone1-Slider" data-orbit>' '<li>' . get_the_title() . '</li>' '</ul>';
    endwhile;
endif;
wp_reset_query();

-----


<?php $posts = z_get_posts_in_zone( 'homepage', array( 'numberposts' => 1, 'post_type' => 'any', 'post_status'=>'publish' ), false ); ?>
            <?php foreach( $posts as $post ) : ?>
                <div class="features">
                	<?php the_post_thumbnail(); ?>
                	<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<?php the_excerpt() ?>
				</div>
			<?php endforeach;
			wp_reset_postdata();?>


--------------- get the image
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
			<?php get_the_image( array( 'meta_key' => 'feature_img', 'size' => 'medium', 'width' => '200', 'height' => '200', 'image_class' => 'feature' ) ); ?>
	
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	
			<div class="entry-summary">
				<?the_excerpt(); ?>
			</div>
	
		</div>
	
	<?php endwhile; endif; ?>