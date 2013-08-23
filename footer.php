	</div><!-- Row End -->
</section><!-- Container End -->

<div class="row full-width" role="contentinfo">
	<?php dynamic_sidebar("Footer"); ?>
</div>

<div class="show-for-small">
  <ul class="mobile-nav">
    <li><a href="/Werbung">Werbung</a></li>
    <li><a href="/Impressum">Impressum</a></li>
    <li><a href="/Feedback">Feedback</a></li>
	<li><a href="/Verlag">Verlag</a></li>
    <li><a href="/Sitemap">Sitemap</a></li>
  </ul>
  	<?php the_widget( 'simple-social-icons', array(), array( 'before_title' => '<h4 class="widgettitle">','after_title' => '</h4>' ) ); ?>
</div>

<div class="row">
<footer class="large-12 columns" role="contentinfo">
	<div class="gb-footer-top">
		<div class="row">
			<div class="large-3 columns show-for-medium-up">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/GREENbyte-logo-700.png"></a>
				
				<p><strong>Greenbyte.ch orientiert über den nachhaltigen Nutzen und die Missstände von IT für wirtschaftlich denkende Menschen.</p></strong> 

			</div>	
			<div class="large-3 columns">
				<div class="panel radius callout hide-for-small">
				<h4>Werbung</h4>
				<p>Mediendaten mit Preisen und Werbeformaten von Greenbyte.ch</p>
				<p><a class="large radius success button" href="http://greenbyte.ch/werbung/">Werbung</a></p>
				</div>			
			</div>
			<div class="large-3 columns show-for-medium-up">
				<div class="panel">
				<h4>Impressum</h4>
				<p>Team, Kontakt und Recht von Greenbyte.ch</p>
				<p><a class="large radius success button" href="http://greenbyte.ch/impressum/">Impressum</a></p>
				</div>
			</div>
			<div class="large-3 columns">	
				<div class="panel">
					<h4>Service</h4>
						<a href="http://greenbyte.ch/feed"><img src="http://greenbyte.ch/wp-content/uploads/rssfeed30.jpg" alt="RSS-Feed-Link"/></a><a href="http://greenbyte.ch/feed">&nbsp;Live-Update via RSS.</a><br>
						<!-- Begin MailChimp Signup Form -->
						<div id="mc_embed_signup">
						<form action="http://greenbyte.us2.list-manage.com/subscribe/post?u=0f0529906cc6a4793f8935daf&amp;id=a4e945666a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
							<label for="mce-EMAIL">Zusatzlich liefern wir ihnen Updates per E-Mail, jeweils Dienstags und Freitags!</label>
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="E-Mail-Adresse für Newsletter" required>
							<div class="clear"><input type="submit" value="Einschreiben" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						</form>
						</div>
						<!--End mc_embed_signup-->	
				</div>						
			</div>
		</div>
	</div>
</footer>
</div>

	<div class="row footer-nav">
		<div class="gb-footer-bottom">
			<div class="hide-for-small">
				<div class="large-6 columns" role="navigation">
				<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'sub-nav')); ?>	
				</div>
			</div>
			<div class="large-6 columns social">
				<div class="source-org copyright" >				
					<span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type" class="org fn"
						 itemprop="copyrightHolder" 
						 itemscope
						 itemtype="http://greenbyte.ch/impressum#Organization"
						 itemid="http://greenbyte.ch">
						 <span itemprop="name">Greenbyte.ch</span>
					</span><span itemprop="copyrightYear">2011-<?php echo date('Y'); ?><br>Some rights reserved</span> <a itemprop="usageTerms" xmlns:cc="http://creativecommons.org/ns#" href=""http://greenbyte.ch/impressum#Organization"" rel="cc:morePermissions"></a>
				</div>
				<a itemprop="copyrightNotice" rel="item-license" rel="licence" href="http://creativecommons.org/licenses/by-nc-sa/3.0/ch/" onClick="trackOutboundLink(this, 'Outbound Links', 'Creative Commons Licence Footer'); return false;" target="_blank"><img alt="Creative Commons Lizenzvertrag" class="cc-logo" src="<?php echo get_template_directory_uri(); ?>/img/CreativeCommons.png" /></a><br />

				<?php the_widget( 'simple-social-icons', array(), array( 'before_title' => '<h4 class="widgettitle">','after_title' => '</h4>' ) ); ?>
			</div>
		</div>
	</div>



<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>