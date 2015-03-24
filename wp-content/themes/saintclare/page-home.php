<?php 

/*
  Template Name: Home Page Custom
*/

get_header();  ?>

<div class="main">	
  <div class="picHero">
	  <div class="container">
	  	<div class="heroText">
		  	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<h2><?php the_content(); ?></h2>  				      
		  	<?php endwhile; // end the loop?>
	  	</div>
	  </div> <!-- /.container -->
  </div>
</div> <!-- /.main -->

<?php get_footer(); ?>