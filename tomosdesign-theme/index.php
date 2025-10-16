<?php get_header(); ?>
<main role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
<section class="content"><?php the_content(); ?></section>
</article>
<?php endwhile; else : ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>