<?php get_header(); ?>
<main class="lower-page">
	<div class="blog">
		 <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/">
			<div class="section-header tab">
				<p class="section-title germ">Blog</p>
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
		<div class="blog_content post">
			<section>
	<?php
	  $category = get_the_category();
	  $cat = $category[0];

	  //カテゴリー名
	  $cat_name = $cat->name;

	  //カテゴリーID
	  $cat_id = $cat->cat_ID;

	  //カテゴリースラッグ
	  $cat_slug = $cat->slug;
	?>
				<div class="blog-bg <?php if(in_category('web')) echo 'blog_web'; ?><?php if(in_category('translation')) echo 'blog_translation'; ?><?php if(in_category('life')) echo 'life'; ?>">
					<div class="section-body wrapper">
						<p class="blog-category <?php if(in_category('web')) echo 'laptop-blog'; ?><?php if(in_category('translation')) echo 'translation'; ?><?php if(in_category('life')) echo 'life'; ?>"><?php echo $cat_name; ?></p>
						<div class="section-body">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="blogpage-wrapper">
								<article class="single-post">
									<h1 class="blog-title single"><?php the_title() ?></h1>
									<p class="single-post-img"><?php the_post_thumbnail( 'medium' ); ?></p>
									<div class="blog-text-wrapper">
										<p class="blog-meta-date"><?php the_date('Y-m-d'); ?></p>
										<p class="blog-text"><?php the_content(); ?></p>
									</div>
								</article>
							<?php endwhile; else : ?>
							<?php endif; ?>
							</div>
						</div><!--section-body--><!--sigleの記事-->
						<?php
						$prevpost = get_adjacent_post(true, '', true); //前の記事
						$nextpost = get_adjacent_post(true, '', false); //次の記事
						if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
						?>
						<ul class="post_link"><!--前後の記事-->
						<?php
						if ( $prevpost ) { //前の記事が存在しているとき
						echo 
						'<a class="post_link_box" href="' . get_permalink($prevpost->ID) . '">
						<li class="prev_post">' . get_the_title($prevpost->ID) . 
						'</li></a>';
						} else { //前の記事が存在しないとき
						echo '<div><a class="post_link_box back_all" href="' . network_site_url('/') . 'blog/">Blog一覧</a></div>';
						}
						if ( $nextpost ) { //次の記事が存在しているときblog-
						echo '<a class="post_link_box" href="' . get_permalink($nextpost->ID) . '"><li class="next_post"><div></div>' . get_the_title($nextpost->ID) . '</li></a>';

						} else { //次の記事が存在しないとき
						echo '<div><a class="post_link_box back_all" href="' . network_site_url('/') . 'blog/">Blog一覧</a></div>';
						}
						?>
						</ul>
						<?php } ?>

					</div><!--section-body wrappe メインの記事＋ページネーション--->
				</section>
				<section><!--				お勧めの投稿-->
					<p class="serif section-title small">Recommended Posts</p>
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
												<p class="blog-title">
													<?php
													if(mb_strlen($post->post_title, 'UTF-8')>20){
														$title= mb_substr($post->post_title, 0, 20, 'UTF-8');
														echo $title.'…';
													}else{
														echo $post->post_title;
													}
													?></p>
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
				</section><!--				お勧めの投稿-->
				<div class="section-footer single"><!--blog一覧-->
					<button class="section-button tree" onclick="location.href='<?php echo esc_url( home_url( '/' ) ); ?>blog/'">Blog一覧</button>
				</div>				
			</div><!--blog-bg-->
		</div>
	</div>
</main>
<script src="https://npmcdn.com/flickity@2.2.1/dist/flickity.pkgd.js"></script>
<?php get_footer(); ?>
