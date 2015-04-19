<footer>
<p class="footerByline">&copy; Saint Clare <?php echo date('Y'); ?> Built by <a href="http://kevinleclair.ca">Kevin LeClair</a></p>
  <div class="container">
	<?php $latestPosts = new WP_Query(array(
	'post_type' => 'social', //we only want blog posts
	'posts_per_page' => -1
	)); ?>
	<?php if($latestPosts->have_posts()) while($latestPosts ->have_posts()) : $latestPosts->the_post(); ?>
		<div class="socialLink">
			 <a href="<?php the_field('social_link') ?>"><?php the_field('font_awesome_markup') ?></a> 
		</div>
	<?php endwhile; //end custom loop?>
	<?php wp_reset_postdata(); // return env back to regular?>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>