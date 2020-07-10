<?php get_header(); ?>
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-tre">
						<p>You search for <?php echo get_search_query(); ?></p>
						<?php 
							while( have_posts() ): the_post();
						 ?>
						
							<div class="col-md-6 abt-left">

								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
								<h6>Find The Most</h6>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
								<?php
								$text = get_the_content();
								 echo wp_trim_words( $text,10, ' .....' ); ?>
								<label><?php the_date( "F j, Y" ) ?></label>
							</div>
						<?php endwhile; ?>

						<?php if(! have_posts()){
							echo "<h2 style='color:red'> Search Item Not Found </h2>";
						} ?>
						
					</div>	
				</div>
				<?php get_sidebar(); ?>
				<div class="clearfix"></div>			
			</div>		
		</div>
	</div>
	<!--about-end-->
	<?php get_footer(); ?>