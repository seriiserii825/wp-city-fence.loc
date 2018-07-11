<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>

	<?php endwhile; ?><?php else: ?><?php endif; ?>
</main>

<?php get_footer(); ?>

