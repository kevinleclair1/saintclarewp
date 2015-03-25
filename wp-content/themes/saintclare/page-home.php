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
  <section class="about">
  	<div class="container">
	    <?php $latestPosts = new WP_Query(array(
	    	'post_type' => 'about', //we only want blog posts
	    	'posts_per_page' => -1
	    )); ?>
	
		<?php if($latestPosts->have_posts()) while($latestPosts ->have_posts()) : $latestPosts->the_post(); ?>
		<?php  
			$aboutImage = get_field('about_picture');
		?>
		<h3><?php the_title(); ?></h3> 
		<img class='aboutPic' src="<?php echo $aboutImage['url']; ?>" alt=""> 
		<?php the_content(); ?>
		<?php endwhile; //end custom loop?>
		<?php wp_reset_postdata(); // return env back to regular?>
  	</div>
  </section>
  <section class="music">
  	<div class="container">
  		
  	</div>
  </section>
</div> <!-- /.main -->

<?php get_footer(); ?>