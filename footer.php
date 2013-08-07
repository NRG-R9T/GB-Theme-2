	</div><!-- Row End -->
</section><!-- Container End -->

<div class="row full-width">
	<?php dynamic_sidebar("Footer"); ?>
</div>
<footer class="large-12 columns" role="contentinfo">
	<div class="row">
 		<div class="large-6 columns">
			<div class="panel">
				<div class="source-org vcard copyright" >				
					<a itemprop="copyrightNotice" rel="item-license" rel="licence" href="http://creativecommons.org/licenses/by-nc-sa/3.0/ch/" onClick="trackOutboundLink(this, 'Outbound Links', 'Creative Commons Licence Footer'); return false;" target="_blank"><img alt="Creative Commons Lizenzvertrag" style="border-width:0" src="http://greenbyte.ch/wp-content/uploads/2013/08/88x31.png" /></a><br />
					<span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type" class="org fn"
						 itemprop="copyrightHolder" 
						 itemscope
						 itemtype="http://greenbyte.ch/impressum#Organization"
						 itemid="http://greenbyte.ch">
						 <span itemprop="name">Greenbyte.ch</span>
					</span><br /> <span itemprop="copyrightYear">Copyright 2011-<?php echo date('Y'); ?></span> <a itemprop="usageTerms" xmlns:cc="http://creativecommons.org/ns#" href=""http://greenbyte.ch/impressum#Organization"" rel="cc:morePermissions">Digitell.ch Media</a>. 
				</div>
			</div>	
		</div>
		<div class="large-6 columns">
			<div class="panel">
				<div><a href="http://www.w3.org/html/logo/" onClick="trackOutboundLink(this, 'Outbound Links', 'w3.org'); return false;" target="_blank">
				<img src="http://greenbyte.ch/wp-content/uploads/2013/08/html5-badge-h-css3-device-multimedia-performance-semantics.png" alt="HTML5 Powered with CSS3 / Styling, Device Access, Multimedia, Performance &amp; Integration, and Semantics" title="HTML5 Powered with CSS3 / Styling, Device Access, Multimedia, Performance &amp; Integration, and Semantics"></a>
				</div>
			</div>
		</div>

	</div>
	
	<div class="small-12 large-8 columns">
		<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list right')); ?>
	</div>
	
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>