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
		  	<p class='arrow'><i class="fa fa-arrow-circle-down"></i></p>
	  	</div>
	  </div> <!-- /.container -->
  </div>
  <section class="about" id='about'>
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
  </section> <!-- end of about -->
  <section class="music" id="music">
  	<h4>Music</h4>
  	<div class="container clearfix stream">
  		<?php $latestPosts = new WP_Query(array(
	    	'post_type' => 'music', //we only want blog posts
	    	'posts_per_page' => -1
	    )); ?>
	
		<?php if($latestPosts->have_posts()) while($latestPosts ->have_posts()) : $latestPosts->the_post(); ?>
			<div class="musicWrap">
				<img src="<?php the_field('album_art')?>" alt="">
				<h5><?php the_title(); ?></h5> 
				<div class="bcWrap">
					<?php the_field('iframe'); ?>
				</div>
				<?php the_content(); ?>
			</div>
		<?php endwhile; //end custom loop?>
		<?php wp_reset_postdata(); // return env back to regular?>
  	</div>
  </section> <!-- end of music -->
  <section class="tour" id="tour">
  	<h4>Tour Dates</h4>
  	<div class="container tourWrap">
  		<?php $latestPosts= new WP_Query (array(
  		'post_type' => 'tour',
  		'posts_per_page' => -1
  		)); ?>
  		<?php if($latestPosts->have_posts()) while($latestPosts ->have_posts()) : $latestPosts->the_post(); ?>
  			<?php while( has_sub_field('tour') ): ?>
  			  <!-- Our sub fields go here -->
  			 <div class="tourDate">
  			   	 <div class="top clearfix">
		  			 <p class="date"><?php the_sub_field('date'); ?></p>
		  			 <p class"venue"><?php the_sub_field('venue'); ?></p>
		  			 <p class='cityprov'><?php the_sub_field('city_prov'); ?></p>
		  			 <div class="rsvpWrap">
			  			 <a target="_blank" class="rsvp" href="<?php the_sub_field('rsvp_link')?>">RSVP</a>
		  			 </div>
	  			 </div>
	  			 <p class='support'>W/ <?php the_sub_field('other_bands');?></p>
  			 </div>
  			<?php endwhile; ?>
  		<?php endwhile; //end custom loop?>
  		<?php wp_reset_postdata(); // return env back to regular?>
  	</div>
  </section> <!-- end of tour -->
  <section class="contact" id="contact">
  	<h4>Contact</h4>
  	<div class="container contactWrap">
  		<?php $latestPosts= new WP_Query (array(
  		'post_type' => 'contact',
  		'posts_per_page' => -1
  		)); ?>
  		<?php if($latestPosts->have_posts()) while($latestPosts ->have_posts()) : $latestPosts->the_post(); ?>
  			<div class="contactText">
	  			<?php the_content(); ?>
	  			<p class="contactInfo">
	  				<span><?php the_field('name') ?></span>:
	  				<a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a>
	  			</p>
			</div>
  		<?php endwhile; //end custom loop?>
  		<?php wp_reset_postdata(); // return env back to regular?>
  	</div>
  </section>
</div> <!-- /.main -->

<?php get_footer(); ?>