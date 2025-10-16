<!--TOPボタン-->
<div class="top-button-area" id="top-button-area">
	<p class="top-button-text serif">TOP</p>
	<button class="back" id="back">
		<img class="top-button-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/top-btn/kitutuki-infinite.gif" alt="キツツキ のTOPボタン">
	</button>
</div>

<!--/TOPボタン-->

<!--フッター-->
<footer class="footer">
	<!--	フッター前の装飾-->
	<div class="footer-top-img"></div>

	<!--	/フッター前の装飾-->
	<!--フッターの青の塗り潰しの部分	-->
	<div class="colored-area">

		<div class="sp">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo-footer" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/logo-white.png" alt="TOMOs Design"></a>
		</div>

		<div class="pc serif">
			<div class="section-body body-item-list">		
				<div class="body-item">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo-footer" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/logo-white.png" alt="TOMOs Design"></a>
				</div>


				<ul class="body-item">
					<li class="menu-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/">
							<p class="inline-flex-container">
								<span>Service</span>
								<span class="menu-item-ja">サービス</span>
							</p>
						</a>
					</li>
					<li class="menu-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>works/" class="inline-flex-container">
							<span>Works</span>
							<span class="menu-item-ja">実績</span>
						</a>
					</li>

					<li class="menu-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>about/" class="inline-flex-container">
							<span>About</span>
							<span class="menu-item-ja">私について</span>
						</a>
					</li>
					<li class="menu-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="inline-flex-container">
							<span>Contact</span>
							<span class="menu-item-ja">お問合せ</span>
						</a>
					</li>
				</ul>
				<div class="body-item footer-blog">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/" class="inline-flex-container">
						<span>Blog</span>
						<span class="menu-item-ja">ブログ</span>
					</a>
					<ul class="menu-lower-list">
						<li>
							<a  class="inline-flex-container" href="<?php echo esc_url( home_url( '/' ) ); ?>category/web/">
								<span>- Web</span>
								<span class="menu-item-ja">ウェブのこと</span>
							</a>
						</li>
						<li>
							<a class="inline-flex-container" href="<?php echo esc_url( home_url( '/' ) ); ?>category/translation/">
								<span>- Translation</span>
								<span class="menu-item-ja">翻訳</span>
							</a>
						</li>
						<li>
							<a class="inline-flex-container" href="<?php echo esc_url( home_url( '/' ) ); ?>category/life/">
								<span>- Life</span>
								<span class="menu-item-ja">八ヶ岳LIFE</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="section-body">
			<div>
				<p class="footer-text-sitemap"><a href="<?php echo esc_url( home_url( '/' ) ); ?>sitemap/">サイトマップ</a></p>
				<p class="footer-text-connect">Connect on SNS</p>
				<ul class="follow-me">
					<li><a href="https://twitter.com/tomosdesign" target="_blank"><span class="fa fa-twitter"></span></a></li>
					<li><a href="https://www.facebook.com/tomoka.kawase" target="_blank"><span class="fa fa-facebook"></span></a></li>
					<li><a href="https://www.instagram.com/tomosdesign/" target="_blank"><span class="fa fa-instagram"></span></a></li>
				</ul>
			</div>
			<div class="copyright">											
				<small>(c)  2020 TOMOs Design</small>
			</div>
			<!-- <div class="butterfly"></div> -->
		</div>
	</div><!--　/フッターの青の塗り潰しの部分	-->
</footer>
<?php wp_footer(); ?>
<!--/フッター-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
</body>
</html>