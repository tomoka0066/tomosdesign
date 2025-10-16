<?php get_header(); ?>
<main class="lower-page">
	<div class='blog'>
		 <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">
			<div class="section-header tab current">
			<h1 class="section-title germ">Blog</h1>
				<span class="section-subtitle">ブログ（全カテゴリ）</span>
		</div>
		</a>
		<!--blog-->
		<div class="section-body category">
			<ul class="category-list">
				<li class="category-item tab">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/web">
						<div class="category-title laptop-blog">WEB</div>
					</a>
				</li>
				<li class="category-item tab">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/blog/translation">
						<div class="category-title translation">翻訳</div>
					</a>
				</li>
				<li class="category-item tab">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/life">
						<div class="category-title life">八ヶ岳Life</div>
					</a>
				</li>
			</ul>
		</div>
<!--		全てのコンテンツ-->
		<section class="blog_content show">
			<div class="blog-bg category-page <?php if(is_category('web')) echo 'blog_web'; ?><?php if(is_category('translation')) echo 'blog_translation'; ?><?php if(is_category('life')) echo 'life'; ?>">
				<div class="section-body wrapper">
					<h1 class="blog-category <?php if(is_category('web')) echo 'laptop-blog'; ?><?php if(is_category('translation')) echo 'translation'; ?><?php if(is_category('life')) echo 'life'; ?>"><?php single_term_title(); ?></h1>
					<div class="blogpage-wrapper">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<article class="blogpage-item">
									<p class="blog-img-1"><?php the_post_thumbnail( 'thumbnail' ); ?></p>
									<div class="blog-text-wrapper">
										<h2 class="blog-title"><?php the_title() ?></h2>
										<p class="blog-meta-date"><?php the_date('Y-m-d'); ?></p>
										<div class="blog-text">
											<?php the_excerpt(); ?>
										</div>
									</div>
							</article>
						</a>
						<?php endwhile; else : ?>
						<?php endif; ?>
					</div>
				</div><!--section-body-->
			</div><!--blog-bg-->
		</section>
	</div>
</main>	
<script src="https://npmcdn.com/flickity@2.2.1/dist/flickity.pkgd.js"></script>
<?php get_footer(); ?>