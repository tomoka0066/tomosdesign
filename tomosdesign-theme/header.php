<!doctype html>
<html lang="ja">
<!--	TOPページのHTML-->	
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>TOMOs Design</title>
<meta name="description" content="TOMOs Designのホーム">
<meta property="og:title" content="TOMOs Design">
<meta property="og:description" content="TOMOs Designのトップ">
<meta property="og:type" content="website">
<meta property="og:url" content="https://tomokaishikawa.com">
<meta property="og:site_name" content="TOMOs Design">
<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/images/meta/og-image.png">
<meta name="format-detection" content="telephone=no">
<link rel="canonical" href="#"> 
<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/meta/touch-icon.png"> 
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/meta/favicon.ico">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
<script src="https://kit.fontawesome.com/ed01d72940.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css" media="screen">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
<!--	メインビジュアル-->
	<div>	
<!--	固定ナビゲーション-->
		<nav class="navigation">
			<ul class="navigation-list">
				<li class="nav-item"><a class="contact-area" href="<?php echo esc_url( home_url( '/' ) ); ?>contact/"><span class="fa fa-envelope"></span><span class="pc pc-inline-block contact">Contact</span></a></li>
				<li class="nav-item">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>service/">
						<span class="service">Service</span>
						<span class="btn-area">
							<span class="web-trans"></span>
							<span class="fa fa-laptop"></span>
							<span class="pc pc-inline-block">Web</span>
							<span class="slash"></span>
							<span class="fa fa-book"></span>
							<span class="pc pc-inline-block">翻訳</span>
						</span>
					</a>
				</li>
				<li Class="nav-item">
					<ul class="lang-list">
						<li class="lang-item current"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="lang">Ja</span></a></li>
						<li class="lang-item "><a href="<?php echo esc_url( home_url( '/' ) ); ?>en/"><span class="lang">En</span></a></li>
					</ul>
				</li>
				<li class="nav-item">
					<div id="btn-trigger">
						<button class="btn-trigger" >
							<svg viewBox="0 0 44 44" xmlns:xlink="http://www.w3.org/1999/xlink" role="img" aria-labelledby="menuButtonTitle">
								<title id="menuButtonTitle">Menu</title>
								<symbol id="bar">
								 <rect width="22" height="4" fill="#295782"></rect>
								</symbol>
								<use xlink:href="#bar" x="11" y="11"></use>
								<use xlink:href="#bar" x="11" y="21"></use>
								<use xlink:href="#bar" x="11" y="31"></use>
							 </svg>
							Menu
						</button>

					</div>
				</li>	
			</ul>
			<div class="menu" id="menu">
				<div class="menu-inner serif">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="pc menu-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/logo-white.png" alt="TOMOs Design"></a>
					<ul class="menu-list">
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
									<a class="inline-flex-container" href="<?php echo esc_url( home_url( '/' ) ); ?>category/web/">
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
						</li>
					</ul>
					<ul class="follow-me of-menu">
							<li><a href="https://twitter.com/tomosdesign"><span class="fa fa-twitter"></span></a></li>
							<li><a href="https://www.facebook.com/tomoka.kawase"><span class="fa fa-facebook"></span></a></li>
							<li><a href="https://www.instagram.com/tomosdesign/"><span class="fa fa-instagram"></span></a></li>
					</ul>
					<?php dynamic_sidebar( 'nav-widget' ); ?>
					<p class="menu-sitemap"><a href="<?php echo esc_url( home_url( '/' ) ); ?>sitemap/">サイトマップ</a></p>
					<button class="btn-close" id="btn-close">
						<svg viewBox="0 0 44 44" xmlns:xlink="http://www.w3.org/1999/xlink" role="img" aria-labelledby="menuButtonClose">
							<title id="menuButtonClose">close</title>
							<symbol id="barclose">
							<rect width="36" height="4" fill="#fff"></rect>
							</symbol>
							<use xlink:href="#barclose" x="4" y="8"></use>
							<use xlink:href="#barclose" x="0" y="32"></use>
						</svg>
						<span class="close">close</span>
					</button>
				</div>
			</div>
		</nav>
	</div>
</header>

<!-- ローディング画面 -->
<!-- <div id="loading">
  <div class="spinner"></div>
	<p class="loading_text">Loading....</p>
 <div class="loading_butterfly"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/title/flying-butterfly-infinite.gif" alt="蝶々が飛ぶ"></div>
</div> -->
<!--	/ローディング画面-->
<!--右上のロゴ-->
<div class="top-fixed-logo">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/logo-mainvisual-top.png" alt="Tomos Designのロゴ"></a>
</div>
<!--/右上のロゴ-->