<?php 
	/*
		Template Name: About Page
	*/
get_header(); ?>
	<!--team-starts-->
	<div class="team">
		<div class="container">
		<div class="team-top heading">
			<h3>OUR TEAM</h3>
		</div>
			<div class="team-bottom">
				<?php 
					$team = new WP_Query([
						'post_type'		=> 'team',
						'posts_per_page'	=> 4, 
						'order'			=> 'ASC',
					]);
					while($team-> have_posts()): $team-> the_post();

				 ?>

				<div class="col-md-3 team-left">
					<?php  the_post_thumbnail(); ?>
					<h4><?php the_title(); ?></h4>
					<?php the_content(); ?>
				</div>

				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<!--team-end-->
<?php get_footer(); ?>