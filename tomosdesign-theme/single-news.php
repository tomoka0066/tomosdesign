<?php get_header(); ?>
<main class="lower-page">
	<div class="blog">
		<div class="section-header tab">
			<p class="section-title germ">News</p>
				<span class="section-subtitle">ニュース</span>
		</div>
<!--		全てのコンテンツ-->
		<section class="blog_content post show">
			<div class="blog-bg blog_all">
				<div class="section-body">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="blogpage-wrapper">
						<article class="single-post single-news">
							<h1 class="blog-title single"><?php the_title() ?></h1>
							<div class="blog-text-wrapper">
								<p class="blog-meta-date"><?php the_date('Y-m-d'); ?></p>
								<p class="blog-text"><?php the_content(); ?></p>
							</div>
						</article>
					<?php endwhile; else : ?>
					<?php endif; ?>
					</div>
				</div><!--section-body-->
				<div class="section-footer single">
				<button class="section-button tree" onclick="location.href='<?php echo esc_url( home_url( '/' ) ); ?>news/'">News一覧</button>
				</div>
			</div><!--blog-bg-->
		</section>
	</div>
</main>
<?php get_footer(); ?>
