<?php get_header(); $base = get_template_directory_uri() . '/assets/images/'; ?>

<section class="section">
	<div class="container">
		<div class="article-inner" style="max-width:820px;margin:0 auto;">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article style="margin-bottom:40px;">
						<h1 class="text-red" style="font-size:30px;font-weight:800;margin-bottom:14px;"><?php the_title(); ?></h1>
						<div><?php the_content(); ?></div>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<h1 style="font-size:28px;font-weight:800;">Nothing here yet.</h1>
				<p><a class="link-view" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to home</a></p>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
