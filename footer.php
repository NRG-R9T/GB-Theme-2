	</div><!-- Row End -->
</section><!-- Container End -->

<div class="row full-width" role="contentinfo">
	<?php dynamic_sidebar("Footer"); ?>
</div>



<div class="row">
<footer class="large-12 columns" role="contentinfo">
	<div class="gb-footer-top">
		<div class="row">
			<div class="large-3 columns">
				<a href="http://greenbyte.ch/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://greenbyte.ch/wp-content/themes/GB-Theme-2/img/GREENbyte-logo-700.png"></a>
				
				<p><strong>Nachhaltigkeit braucht Informatik.<tr></tr> Informatik braucht Nachhaltigkeit.</p></strong> 

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
						<!-- Begin MailChimp Signup Form -->
						<div id="mc_embed_signup">
						<form action="http://greenbyte.us2.list-manage.com/subscribe/post?u=0f0529906cc6a4793f8935daf&amp;id=a4e945666a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
							<label for="mce-EMAIL"></label>
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Updates per E-Mail: Dienstag & Freitag" required>
							<div class="clear"><input type="submit" value="Einschreiben" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						</form>
						</div>
						<!--End mc_embed_signup-->	
						<a href="http://greenbyte.ch/feed"><img src="http://greenbyte.ch/wp-content/uploads/rssfeed30.jpg" alt="RSS-Feed-Link"/></a><a href="http://greenbyte.ch/feed">&nbsp;Live-Update via RSS.</a><br>
				</div>						
			</div>
		</div>
	</div>
</footer>
</div>

<div class="show-for-small">
  <ul class="mobile-nav">
    <li><a href="/Werbung">Werbung</a></li>
    <li><a href="/Impressum">Impressum</a></li>
    <li><a href="/Feedback">Feedback</a></li>
	<li><a href="/Verlag">Verlag</a></li>
    <li><a href="/Sitemap">Sitemap</a></li>
  </ul>
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
				<a itemprop="copyrightNotice" rel="item-license" rel="licence" href="http://creativecommons.org/licenses/by-nc-sa/3.0/ch/" onClick="trackOutboundLink(this, 'Outbound Links', 'Creative Commons Licence Footer'); return false;" target="_blank"><img alt="Creative Commons Lizenzvertrag" class="cc-logo" src="http://greenbyte.ch/wp-content/themes/GB-Theme-2/img/CreativeCommons.png" /></a><br />

			</div>
		</div>
	</div>

<div class="row" style="text-align: center">
<footer class="small-9 small-centered columns">
<a rel="" href="http://www.rackspace.com/de/?CMP=GB" onClick="trackOutboundLink(this, 'Outbound Links', 'racker-logo'); return false;" target="_blank"><img alt="Powered by Rackspace" class="racker-logo" src="http://greenbyte.ch/wp-content/uploads/2013/12/RS_PoweredBy_OCC_logo-2c-e1387285241241.png" /></a>
</footer>
</div>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>

<!-- Piwik -->
<script type="text/javascript"> 
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://data.greenbyte.ch/piwik//";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();

</script>
<noscript><p><img src="http://data.greenbyte.ch/piwik/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Code -->

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

<noscript>
<!-- Piwik Image Tracker -->
<img src="http://data.greenbyte.ch/piwik/piwik.php?idsite=1&amp;rec=1&action_name=greenbyte.ch" style="border:0" alt="" />
<!-- End Piwik -->
</noscript>
	
</body>
</html>