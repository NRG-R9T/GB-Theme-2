<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-8 columns" role="main">
	
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php _e('File Not Found', 'reverie'); ?></h1>
			</header>
			<div class="entry-content">
				<div class="error">
					<p class="bottom"><?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'reverie'); ?></p>
				</div>
				<p><?php _e('Please try the following:', 'reverie'); ?></p>
				<ul> 
					<li><?php _e('Check your spelling', 'reverie'); ?></li>
					<li><?php printf(__('Return to the <a href="%s">home page</a>', 'reverie'), home_url()); ?></li>
					<li><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'reverie'); ?></li>
				</ul>
			<div class="row">
				<div class="large-3 columns">
					<?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 5 ), array( 'widget_id' => '404', 'before_title' => '<h4 class="widgettitle">','after_title' => '</h4>' ) ); ?>
					</div>	
					<div class="large-3 columns">
						<h4 class="widgettitle"><?php _e( 'Meistgenutzte Kategorien', 'reverie' ); ?></h4>
						<ul>
							<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 5 ) ); ?>
						</ul>
					</div>
					<div class="large-3 columns">
					<?php
						$archive_content = '<p>' . __( 'Monatsarchive', 'reverie' ) . '</p>';
						the_widget( 'WP_Widget_Archives', array('count' => 0 , 'dropdown' => 1 ), array( 'before_title' => '<h4 class="widgettitle">','after_title' => '</h4>'.$archive_content ) );
					?>
					</div>
					<div class="large-3 columns">
					<?php the_widget( 'WP_Widget_Tag_Cloud', array(), array( 'before_title' => '<h4 class="widgettitle">','after_title' => '</h4>' ) ); ?>
					</div>
				</div>
		</article>
	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>