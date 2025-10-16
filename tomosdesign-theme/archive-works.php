<?php get_header(); ?>
<main class="lower-page">
	<section class="works">	
		<div class="section-header">
			<h1 class="section-title tree">Works</h2>
			<p class="section-subtitle">実績</p>
		</div>
		<div class="section-body"><!--Works	-->
			<div class="works-inner body-item-list">
				<?php
					$args= array(
						'post_type' => 'works',
						'posts_per_page' => 9,
					);
					$the_query= new WP_Query( $args);
					if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
				<div class="body-item" >
					<div class="js-modal-open" data-target="<?php the_field('modal-work-nm') ?>">
						<div class="works-image">
							<img  class="illust-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
						</div>
						<p class="works-title"><?php the_title(); ?></p>
					</div>
				</div>
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
		<!--	モーダルウィンドウ-->
		<div>
				<?php
					$args= array(
						'post_type' => 'works',
						'posts_per_page' => 9,
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
				</div>
			</div>
			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	<!--	モーダルウィンドウ-->
	</section>
<!--		イラストギャラリー-->
	<section>
		<div class="section-body" id="illust-gallery">
			<div class="section-header small serif">
				<h3 class="section-title small">Gallery of Illustration</h3>
				<span class="section-subtitle">イラストギャラリー</span>
			</div>
		
			<div class="works-inner body-item-list">
				<?php
					$args= array(
						'post_type' => 'illust',
						'posts_per_page' => 9,
					);
					$the_query= new WP_Query( $args);
					if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>
				<div class="body-item js-modal-open"  data-target="<?php the_field('modal-illust-nm') ?>">
						<div class="works-image"><img class="illust-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></div>
						<p class="works-title"><?php the_title(); ?></p>
				</div>
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>
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
		</div><!--/イラストギャラリー-->		
	</section>
</main>	
<?php get_footer(); ?>

