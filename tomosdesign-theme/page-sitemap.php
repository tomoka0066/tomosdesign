<?php get_header(); ?>
<main class="lower-page">
	<section class="sitemap">	
		<div class="section-header">
			<h1 class="section-title tree">Site Map</h2>
			<p class="section-subtitle">サイトマップ</p>
		</div>
		<div class="section-body"><!--Works	-->
			<div class="sitemap">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="pc menu-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/logo-mainvisual-top.png" alt="TOMOs Design"></a>
				<ul class="menu-list">
						<li class="menu-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<p class="inline-flex-container">
									<span>Top</span>
									<span class="menu-item-ja">トップ</span>
								</p>
							</a>
						</li>
						<li class="menu-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/">
								<p class="inline-flex-container">
									<span>Service</span>
									<span class="menu-item-ja">サービス</span>
								</p>
							</a>
						</li>
						<li class="menu-item">
							<a class="inline-flex-container" href="<?php echo esc_url( home_url( '/' ) ); ?>works/">
								<span>Works</span>
								<span class="menu-item-ja">実績</span>
							</a>
						</li>

						<li class="menu-item">
							<a class="inline-flex-container" href="<?php echo esc_url( home_url( '/' ) ); ?>about/">
								<span>About</span>
								<span class="menu-item-ja">私について</span>
							</a>
						</li>

						<li class="menu-item">
							<a  class="inline-flex-container" href="<?php echo esc_url( home_url( '/' ) ); ?>contact/">
								<span>Contact</span>
								<span class="menu-item-ja">お問合せ</span>
							</a>
						</li>
						<li class="menu-item">
							<a class="inline-flex-container" href="<?php echo esc_url( home_url( '/' ) ); ?>blog/">
								<span>Blog</span>
								<span class="menu-item-ja">ブログ</span>
							</a>
							<ul class="menu-lower-list">
								<li>
									<a class="inline-flex-container" href="<?php echo esc_url( home_url( '/' ) ); ?>blog/web/">
										<span>- Web</span>
										<span class="menu-item-ja">ウェブのこと</span>
									</a>
								</li>
								<li>
									<a class="inline-flex-container" href="<?php echo esc_url( home_url( '/' ) ); ?>blog/translation">
										<span>- Translation</span>
										<span class="menu-item-ja">翻訳</span>
									</a>
								</li>
								<li>
									<a class="inline-flex-container" href="<?php echo esc_url( home_url( '/' ) ); ?>blog/life/">
										<span>- Life</span>
										<span class="menu-item-ja">八ヶ岳Life</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-item">
							<a class="inline-flex-container" href="<?php echo esc_url( home_url( '/' ) ); ?>sitemap/">
								<span>Sitemap</span>
								<span class="menu-item-ja">サイトマップ</span>
							</a>
						</li>
						<li class="menu-item">
							<a class="inline-flex-container" href="<?php echo esc_url( home_url( '/' ) ); ?>privacypolicy/">
								<span>Privacy Policy</span>
								<span class="menu-item-ja">プライバシーポリシー</span>
							</a>
						</li>
					</ul>
			</div>
		</div>
	</section>
</main>	
<?php get_footer(); ?>

