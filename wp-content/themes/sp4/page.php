<?php get_header(); ?>
<?php get_sidebar(); ?>
		<div class="content_box">
		<h3 style="margin-left:12px; padding-left:10px; margin-bottom:0px;">
		<?php the_title(); ?></h3><hr />
			<div id="content_tresc">
			<?php while (have_posts()) : the_post(); ?>
				
					<?php the_content(); ?>

				<?php endwhile; ?> 
			</div>
		</div>
<?php get_footer(); ?>