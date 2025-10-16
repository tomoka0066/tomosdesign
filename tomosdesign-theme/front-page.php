<?php get_header(); ?>
<!--	メインビジュアル-->
<div class="top-area">
	<div class="mainvisual-wrapper">
		<div class="mainvisual">
			<h1 class="logo-top" id="logo-top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/logo-mainvisual-top.png" alt="TOMOs Design"></h1>
			<p class="serif mainvisual-title text-center">
				<span class="mainvisual-subtitle">Japanese / English</span><br>
				<span class="mainvisual-maintitle">Web Design</span>
			</p>
			<p>
				<img class="mainvisual-treat" src="<?php echo get_stylesheet_directory_uri(); ?>/images/top/germ-flower-infinite-final.gif" alt="小さな花">
			</p>
			<div class="serif name text-center">
				<p>WEB Designer</p>
				<p>Tomoka Ishikawa</p>
			</div>
		</div>
		<?php
		$args= array(
		'post_type' => 'news',
		'posts_per_page' => 1,
		);
		$the_query= new WP_Query( $args);
		if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
		<a href="<?php the_permalink(); ?>" class="news-area">
				<span class="news serif">News</span>
				<span class="news-text"><?php the_title(); ?><span class="underline">More</span></span>
		</a>
		<?php endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>
		<div class="news-bg">
		<span class="butterfly"></span>								
		</div>
	</div>
</div>
 
<main>
<!--サービス	-->
	<div class="section-header">
		<h2 class="section-title tree">Service</h2>
		<p class="section-subtitle">サービス</p>
	</div>
	<div class="section-body body-item-list">
		<div class="body-item">
			<h3 class="body-title laptop fade_off js-target">WEBサイト作成</h3>
			<div class="body-text">
				<p>お客様のご要望を丁寧にお伺いし、サイトを作成してきます。</p>
			</div>
		</div>

		<div class="body-item">
			<h3 class="body-title translation fade_off js-target">翻訳サービス</h3>
			<div class="body-text">
				<p>通訳翻訳会社で約5年間、コーディネーターとして務めた経験を生かし、翻訳者と連携して日英・英日翻訳を承ります。また、WEBサイト作成のための訳語の調整も行ます。</p>
			</div>
		</div>
		
		<div class="body-item">
			<h3 class="body-title connect fade_off js-target" id="service-3">つながるサポート</h3>
			<div class="body-text">
				<p>LINEやSNSを活用した、「つながる」サポートも行っております。SNSエキスパート初級を取得しております。</p>
			</div>
		</div>
	</div>
	<div class="section-footer">
		<button class="section-button tree" onclick="location.href='<?php echo esc_url( home_url( '/' ) ); ?>service/'">View More</button>
	</div>

	
<!--/サービス	-->
		
<!--Works-->
	<div class="section-header" id="works">
		<h2 class="section-title leaf">Works</h2>
		<p class="section-subtitle">実績</p>
	</div>

	<div class="carousel-wrapper">
		<div class="gallery js-flickity" data-flickity-options='{ "freeScroll": true, "wrapAround": true }'>
		  <!-- images from unsplash.com -->
			<?php
					$args= array(
						'post_type' => 'works',
						'posts_per_page' => 5,
					);
					$the_query= new WP_Query( $args);
					if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
			<div class="carousel-cell">
			<img class="js-modal-open" data-target="<?php the_field('modal-work-nm') ?>" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
		  </div>
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>
		</div>
	</div>
		
	<div class="section-footer">
		<button class="section-button leaf" onclick="location.href='<?php echo esc_url( home_url( '/' ) ); ?>works/'">View More</button>
	</div>
<!--	モーダルウィンドウ-->
	<div>		
		<!--		modal-work-03-->
				<?php
					$args= array(
						'post_type' => 'works',
						'posts_per_page' => 5,
					);
					$the_query= new WP_Query( $args);
					if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
		<div id="<?php the_field('modal-work-nm') ?>" class="modal js-modal">
			<div class="modal__bg js-modal-close"></div>
			<div class="modal__content">
				<p class="work-title in-modal"><?php the_title(); ?></p>
				<div class="image-list-in-modal">
					<div class="image-list-in-modal">
						<div class="image-in-modal">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
						</div>
					</div>
				</div>
				<div class="work-text in-modal">
					<dl class="work-dl">
						<div class="dl-list">
							<dt class="work-text-dt">使用ソフト</dt>
							<dd class="work-text-dd"><?php the_field('tools') ?></dd>
						</div>
						<div class="dl-list">
							<dt class="work-text-dt">連絡・管理ツール</dt>
							<dd class="work-text-dd"><?php the_field('comu_tools') ?></dd>
						</div>
						<div class="dl-list">
							<dt class="work-text-dt">作成期間</dt>
							<dd class="work-text-dd"><?php the_field('how_long') ?></dd>
						</div>
					</dl>
					<div class="work-description">
						<p><?php the_content(); ?></p>
					</div>
				</div>
				<p class="close-in-modal">
					<a class="js-modal-close" href="">閉じる</a>
				</p>
			</div> <!---modal-content-->
		</div> <!---/moda-work-03-->
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>
		
	</div>
<!--	モーダルウィンドウ-->
	
	
	<div class="section-header small serif">
		<h3 class="section-title small">Gallery of Illustration</h3>
			<span class="section-subtitle">イラストギャラリー</span>
	</div>

	
	<div class="carousel-wrapper">
		<div class="gallery js-flickity"
	  data-flickity-options='{ "freeScroll": true, "wrapAround": true }'>
		  <!-- images from unsplash.com -->
		<?php
			$args= array(
				'post_type' => 'illust',
				'posts_per_page' => 9,
			);
			$the_query= new WP_Query( $args);
			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
		  <div class="carousel-cell js-modal-open" data-target="<?php the_field('modal-illust-nm') ?>">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
		  </div>
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>
		</div>
	</div>
	<div>
	<?php
		$args= array(
			'post_type' => 'illust',
			'posts_per_page' => 9,
		);
		$the_query= new WP_Query( $args);
		if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
		<div id="<?php the_field('modal-illust-nm') ?>" class="modal js-modal">
			<div class="modal__bg js-modal-close"></div>
			<div class="modal__content">
				<p class="work-title in-modal"><?php the_title(); ?></p>
				<div class="image-list-in-modal">
					<div class="image-list-in-modal">
						<div class="image-in-modal">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
						</div>
					</div>
				</div>
				<div class="work-text in-modal">
					<dl class="work-dl">
						<div class="dl-list">
							<dt class="work-text-dt">使用ソフト</dt>
							<dd class="work-text-dd"><?php the_field('tools') ?></dd>
						</div>
						<div class="dl-list">
							<dt class="work-text-dt">連絡・管理ツール</dt>
							<dd class="work-text-dd"><?php the_field('comu_tools') ?></dd>
						</div>
						<div class="dl-list">
							<dt class="work-text-dt">作成期間</dt>
							<dd class="work-text-dd"><?php the_field('how_long') ?></dd>
						</div>
					</dl>
					<div class="work-description">
						<p><?php the_content(); ?></p>
					</div>
				</div>
				<p class="close-in-modal">
					<a class="js-modal-close" href="">閉じる</a>
				</p>
			</div>
		</div>
	<?php endwhile; endif; ?>
	<?php wp_reset_postdata(); ?>
</div>
<!--	モーダルウィンドウ-->
	
	
	<div class="section-footer">
		<button class="section-button leaf" onclick="location.href='<?php echo esc_url( home_url( '/' ) ); ?>works/#illust-gallery'">View all</button>
	</div>

<!--/Works-->
<!--blog-->
	<div class="blog">
		<div class="section-header serif">
			<h2 class="section-title germ">Blog</h2>
			<p class="section-subtitle">ブログ</p>
		</div>
		<div class="section-body">
			<ul class="category-list">
				<li class="category-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/web/"><span class="category-title laptop-blog">WEB</span></a></li>
				<li class="category-item"><div class="category-title translation"><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/translation/">翻訳</a></div></li>
				<li class="category-item"><div class="category-title life"><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/life/">八ヶ岳ライフ</a></div></li>
			</ul>
		</div>
		
	
		<h3 class="serif section-title small">Latest blog</h3>
		<div class="section-body">
			<div class="carousel-wrapper">
				<div class="gallery js-flickity"
		 		 data-flickity-options='{ "freeScroll": true, "wrapAround": true }'>
					<?php
					$args= array(
						'post_type' => 'post',
						'posts_per_page' => 5,
					);
					$the_query= new WP_Query( $args);
					if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
					<div class="carousel-cell blog-carousel">
						<a href="<?php the_permalink(); ?>">
							<div>
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

		<div class="section-footer" id="button-sample">
			<button class="section-button germ" onclick="location.href='<?php echo esc_url( home_url( '/' ) ); ?>blog/'">View More</button>
		</div>
	</div>
<!--/blog-->
</main>

<script src="https://npmcdn.com/flickity@2.2.1/dist/flickity.pkgd.js"></script>
<?php get_footer(); ?>
