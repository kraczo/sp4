<?php get_header(); ?>
<?php get_sidebar(); ?>
		<div class="content_box">
		<h3 style="margin-left:12px; padding-left:10px; margin-bottom:0px;">
		Aktualności</h3><hr />
			<div id="content_tresc">
			<?php while (have_posts()) : the_post(); ?>
				<div id="post_info">
					<h1 style="	padding-bottom:0px;
	margin-bottom:0px;"><?php the_title(); ?></h1>
					Napisane przez <a href="#"><?php the_author_posts_link(); ?></a> dnia <?php the_time('j F, Y'); ?>
				</div>
				</br>
				<span style="text-align:center; display:block">
				<?php the_post_thumbnail( array(540,540) ); ?>
				</span>
				<?php the_content(); ?>
				<div style="margin-right:18px;">
				<?php
					if(function_exists('display_social4i'))
					echo display_social4i("large","align-right");
				?>
				</div>
				<hr class="style-six" style="margin-top:10px;" />
			

				<?php endwhile; ?> 
			</div>
		</div>
<?php get_footer(); ?>