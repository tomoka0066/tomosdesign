<?php get_header(); ?>
<main class="lower-page">
	<div class="blog">
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
		<section class="blog_content show">
			<div class="blog-bg <?php if(is_category('blog')) echo 'blog_all'; ?><?php if(is_category('web')) echo 'blog_web'; ?><?php if(is_category('translation')) echo 'blog_translation'; ?><?php if(is_category('life')) echo 'life'; ?>">
				<div class="section-body wrapper">
					<div class="blogpage-wrapper">
						<?php
						$paged = get_query_var('paged') ? get_query_var('paged') : 1;
						$args= array(
						'post_type' => 'post',
						'posts_per_page' => 6,
						'paged'=> $paged, 	// ページ設定
						);
						$the_query= new WP_Query( $args);
						if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
						<div class="blogpage-item">
							<a href="<?php the_permalink(); ?>">
								<div class="blog-item-1-inner">
									<img class="blog-img-1" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
									<div class="blog-text-wrapper">
										<h2 class="blog-title">
											<?php
											if(mb_strlen($post->post_title, 'UTF-8')>20){
												$title= mb_substr($post->post_title, 0, 20, 'UTF-8');
												echo $title.'…';
											}else{
												echo $post->post_title;
											}
											?></h2>
										<p class="blog-meta-date"><?php the_time('Y-m-d'); ?></p>
										<div class="blog-text"><?php the_excerpt(); ?></div>
									</div>
								</div>
							</a>
						</div>
						<?php endwhile; endif; ?>
						　<div class="pagenation">
							<?php //ページリスト表示処理
							global $wp_rewrite;
							$paginate_base = get_pagenum_link(1);
							if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
							  $paginate_format = '';
							  $paginate_base = add_query_arg('paged','%#%');
							}else{
							  $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
							  user_trailingslashit('page/%#%/','paged');
							  $paginate_base .= '%_%';
							}
							echo paginate_links(array(
							  'base' => $paginate_base,
							  'format' => $paginate_format,
							  'total' => $the_query->max_num_pages,
							  'mid_size' => 1,
							  'current' => ($paged ? $paged : 1),
							  'prev_text' => '< 前へ',
							  'next_text' => '次へ >',
							)); ?>
						</div>
						<?php wp_reset_query(); ?>
					</div>
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
			</div><!--blog-bg-->
		</section>
	</div>
</main>
<script src="https://npmcdn.com/flickity@2.2.1/dist/flickity.pkgd.js"></script>
<?php get_footer(); ?>

