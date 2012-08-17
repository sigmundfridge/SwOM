<div class="clear"></div>

<div class="two-col">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('First Footer Area') ) : // begin primary sidebar widgets ?>
	<h2>About</h2>
	<p>SwOM is a recoded, and slightly redesigned version of the <a href = "http://www.upstartblogger.com/wordpress-theme-upstart-blogger-futurosity-magazine">Futurosity Magazine Theme</a>, which was designed by <a href="http://www.upstartblogger.com/" title="Upstart Blogger">Upstart Blogger</a> . It was built upon request of <a href = "http://materialistpapers.com/">the Materialist Papers</a>.</p>
	<p>This text can be replaced with a widget in the widget menu ('First Footer Area')</p>
<? endif; ?>
</div>

<div class="two-col">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Second Footer Area') ) : // begin primary sidebar widgets ?>
  	<h2>Download</h2>
	<p>You can download this theme for free from <a href = "http://sigfrid.co.uk/downloads/">SigF</a>. It also has a <a href = "https://github.com/sigmundfridge/SwOM">GitHub repository.</a></p>
<? endif; ?>
</div>
 
<div class="one-col">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Third Footer Area') ) : // begin primary sidebar widgets ?>
  <h2>Join</h2>
	<p><strong>Join <?php bloginfo('blog_name'); ?></strong>. Post comments and submit stories&mdash;engage, converse, create. Login, or join now.</p>
	<ul>
		<?php wp_register() ?>
		<li><?php wp_loginout() ?></li>
		<?php wp_meta() ?>
	</ul>
<? endif; ?>
</div>
 
 <div class="one-col">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Fourth Footer Area') ) : // begin primary sidebar widgets ?>
  	<h2>Subscribe</h2>
	<ul>
		<li><a href="<?php bloginfo('rss2_url') ?>" title="<?php bloginfo('name') ?> <?php _e('Posts RSS feed', 'sandbox'); ?>" rel="alternate" type="application/rss+xml"><?php _e('All posts', 'sandbox') ?></a></li>
		<li><a href="<?php bloginfo('comments_rss2_url') ?>" title="<?php bloginfo('name') ?> <?php _e('Comments RSS feed', 'sandbox'); ?>" rel="alternate" type="application/rss+xml"><?php _e('All comments', 'sandbox') ?></a></li>
	</ul>
	<a href="<?php bloginfo('rss2_url') ?>" title="<?php bloginfo('name') ?> <?php _e('Posts RSS feed', 'sandbox'); ?>" rel="alternate" type="application/rss+xml"><img src="<?php bloginfo('template_url'); ?>/images/feedbot.gif" width="125" style="border:none;" alt="<?php bloginfo('name') ?> <?php _e('Posts RSS feed', 'sandbox'); ?>" /></a>
<? endif; ?>
</div>