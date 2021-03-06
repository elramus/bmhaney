<?php /* Template Name: About Page Template */ get_header(); ?>

	<main role="main">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="inner-wrap-oversized content">
				<h3 class='page-title inner-wrap'>
					<?php if (get_field('top_headline')) {
						echo get_field('top_headline');
					} else {
						the_title();
					} ?>
				</h3>
				<div class="featured-image-container">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="inner-wrap">
					<?php the_content(); ?>
					<div class="links">
						<?php if (get_field('linkedin')) { ?>
							<a href="<?php echo get_field('linkedin'); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
						<?php } ?>
						<?php if (get_field('email')) { ?>
							<a href="mailto:<?php echo get_field('email'); ?>" target="_blank"><i class="fas fa-envelope"></i></a>
						<?php } ?>
						<?php if (get_field('resume')) { ?>
							<a href="<?php echo get_field('resume')['url']; ?>" target="_blank"><i class="fas fa-file-pdf"></i><span>Resume</span></a>
						<?php } ?>
					</div>
				</div>
			</div>

		</article>

	<?php endwhile; endif; ?>

	</main>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
