<?php get_header(); $base = get_template_directory_uri() . '/assets/images/'; ?>

<section class="section">
	<div class="container">
		<div class="article-inner" style="max-width:820px;margin:0 auto;">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1 style="font-size:30px;font-weight:800;color:var(--ink);margin-bottom:16px;"><?php the_title(); ?></h1>
				<div><?php the_content(); ?></div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
