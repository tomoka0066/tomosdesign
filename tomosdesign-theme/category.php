<?php get_header(); ?>
<main class="lower-page">
	<div class='blog'>
		 <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/">
			<div class="section-header tab">
				<h1 class="section-title germ">Blog</h1>
				<span class="section-subtitle">ブログ（全カテゴリ）</span>
			</div>
		</a>
		<!--blog-->
		<div class="section-body category">
			<ul class="category-list">
				<li class="category-item tab">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/web/">
						<div class="category-title laptop-blog">WEB</div>
					</a>
				</li>
				<li class="category-item tab">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/translation/">
						<div class="category-title translation">翻訳</div>
					</a>
				</li>
				<li class="category-item tab">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/life/">
						<div class="category-title life">八ヶ岳Life</div>
					</a>
				</li>
			</ul>
		</div>
<!--		全てのコンテンツ-->
		<section class="blog_content">
			<div class="blog-bg category-page <?php if(is_category('web')) echo 'blog_web'; ?><?php if(is_category('translation')) echo 'blog_translation'; ?><?php if(is_category('life')) echo 'life'; ?>">
				<div class="section-body wrapper">
					<h2 class="blog-category <?php if(is_category('web')) echo 'laptop-blog'; ?><?php if(is_category('translation')) echo 'translation'; ?><?php if(is_category('life')) echo 'life'; ?>"><?php single_term_title(); ?></h2>
					<div class="blogpage-wrapper">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="blogpage-item">
							<a href="<?php the_permalink(); ?>">
								<div class="blog-item-1-inner">
									<img class="blog-img-1" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
									<div class="blog-text-wrapper">
										<h3 class="blog-title">
											<?php
											if(mb_strlen($post->post_title, 'UTF-8')>20){
												$title= mb_substr($post->post_title, 0, 20, 'UTF-8');
												echo $title.'…';
											}else{
												echo $post->post_title;
											}
											?></h3>
										<p class="blog-meta-date"><?php the_time('Y-m-d'); ?></p>
										<div class="blog-text"><?php the_excerpt(); ?></div>
									</div>
								</div>
							</a>
						</div>
						<?php endwhile; else : ?>
						<?php endif; ?>
					</div>
				</div><!--section-body-->
		<h3 class="serif section-title small">Recommended Posts</h3>
<!--				おすすめの投稿の表示-->
				<div class="section-body recommended">
					<div class="carousel-wrapper">
						<div class="gallery js-flickity"
						 data-flickity-options='{ "freeScroll": true, "wrapAround": true }'>
							<?php
							$args= array(
								'post_type' => 'post',
								'tag' => 'recommended',
								'posts_per_page' => 5,
							);
							$the_query= new WP_Query( $args);
							if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
							<div class="carousel-cell blog-carousel">
								<a href="<?php the_permalink(); ?>">
									<div class="blog-item-wrapper">
										<img class="blog-img-1" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
										<div class="blog-text-wrapper">
											<h3 class="blog-title">
												<?php
												if(mb_strlen($post->post_title, 'UTF-8')>20){
													$title= mb_substr($post->post_title, 0, 20, 'UTF-8');
													echo $title.'…';
												}else{
													echo $post->post_title;
												}
												?></h3>
											<p class="blog-meta-date"><?php the_time('Y-m-d'); ?></p>
											<div class="blog-text"><?php the_excerpt(); ?></div>
										</div>
									</div>
								</a>
							</div>
							<?php endwhile; endif; ?>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
				<div class="section-footer single"><!--blog一覧-->
					<button class="section-button tree" onclick="location.href='<?php echo esc_url( home_url( '/' ) ); ?>blog/'">Blog一覧</button>
				</div>
			</div><!--blog-bg-->
			
		</section>
	</div>
</main>
<script src="https://npmcdn.com/flickity@2.2.1/dist/flickity.pkgd.js"></script>
<?php get_footer(); ?>