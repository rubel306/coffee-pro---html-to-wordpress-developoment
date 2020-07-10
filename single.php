<?php get_header(); ?>
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-tre">
						<?php 
							while( have_posts() ): the_post();
						 ?>
						
							<div class="col-md-12">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
								<h6>Find The Most</h6>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
								<?php
								the_content(); ?>
								<label><?php the_date( "F j, Y" ) ?></label>
							</div>
						<?php  endwhile; ?>
					</div>	
					<div class="comments-area">
						<?php  
							comments_template();
							
						 ?>
					</div>
				</div>
				<?php get_sidebar(); ?>
				<div class="clearfix"></div>			
			</div>		
		</div>
	</div>
	<!--about-end-->
	<?php get_footer(); ?>