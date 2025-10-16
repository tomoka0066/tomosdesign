<?php get_header(); ?>

<main role="main">
<section class="search">
<div class="section-header">
			<h1 class="section-title tree">Search</h2>
			<h2>「<?php echo esc_html( get_search_query( false ) ); ?>」の検索結果</h2>
		</div>
	<div class="section-body">
		<div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<a href="<?php the_permalink(); ?>">
		<article class="article-wrap">
		<h3><?php the_title(); ?></h3>
		<!--<p class="category"><?php $cats = get_the_category(); echo $cats[0]->cat_name; ?></p>-->
<!--		<p class="image"><?php the_post_thumbnail( 'thumbnail' ); ?></p>-->
		<p><?php the_excerpt(); ?></p>
		</article>
		</a>
		<?php endwhile; else : ?>
		<?php endif; ?>
		</div>
	</div>
</section>
</main>
<?php get_footer(); ?>