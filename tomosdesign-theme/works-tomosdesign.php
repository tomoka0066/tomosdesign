<?php /* Template Name: works-detail-tomosdesign */ ?>

<?php get_header(); ?>
<main class="lower-page">
	<section class="works-detail">	
		<div class="section-header">
			<h1 class="section-title tree"><?php the_title(); ?></h2>
			<p class="section-subtitle">プレゼンテーション用資料（PCからご覧ください。）</p>
		</div>
<!--TOMOs Designの詳細の説明-->
		<div class="section-body">
			<div class="carousel-wrapper fade_off js-target">
				　<div class="gallery js-flickity" data-flickity-options='{ "freeScroll": true, "wrapAround": true }'>
<!--スライド１-->
					  <div class="carousel-cell">
						  <div class="works-text-area">
							  <h4>TOMOs DesignのWEBサイト新規作成</h4>
							  <p class="name">デジタルハリウッドSTUDIO <br>主婦ママクラス2020年6月生<br>　石川友香</p>
						  </div>
					 </div>
<!--スライド１-->
<!--スライド2-->
					  <div class="carousel-cell">
						  <div class="works-text-area">
							  <h4>WEBサイト作成の目的とゴール</h4>
							  <dl>
								  <dt>自分を過不足なく伝える</dt>
								  <dd>「この人は何ができるのか？」「どんな人か？」を伝える。</dd>
								  <dt>自分のスキルをPRする</dt>
								  <dd>
									  <ul>
										  <li>①英語<br>海外留学や通訳翻訳会社に勤務していた経験</li>
										  <li>②WEBデザイン<br>デジタルハリウッドで学んだスキルを出す</li>
									</ul>
								  </dd>
								  <dt>フリーランスとして活躍する</dt>
								  <dd>仕事の受注につながるための中継地点にする</dd>
							  </dl>
						   </div>
					 </div>					 
					 <div class="carousel-cell">
						  <div class="iframe-bg">
							  <iframe src="<?php echo esc_url( home_url( '/' ) ); ?>" frameborder="0"></iframe>
						  </div>
						  <div class="works-text-area">
							  <h4>メインビジュアル・自然を表現する</h4>
							  <dl>
								  <dt>芽から花が咲くアニメーション</dt>
								  <dd>イラストはIllustratorで作成、PhotoshopでGIFに加工しました。</dd>
								  <dt>蝶々がふわっと現れる</dt>
								  <dd>動きをつけた画像を、CSS（Keyframe）で画面上を移動させています。さらに、Javascriptでスクロールに合わせてふわっと現れるように設定しました。</dd>
								  <dt>背景は、朝の空のうつろいの色</dt>
								  <dd>グラデーションの背景色をKseyframeで変化をつけています</dd>
							  </dl>
						  </div>
					  </div>
					  <div class="carousel-cell">
						 <div>
							<iframe src="<?php echo esc_url( home_url( '/' ) ); ?>#button-sample" frameborder="0"></iframe>
						  </div>
						  <div class="works-text-area">
							  <h4>訪れた人に楽しんでもらう</h4>
							  <dl>
								  <dt>葉っぱが揺れるボタン</dt>
								  <dd>手書きのイラストを揺らし、さりげない動きを取り入れました。</dd>
								  <dt>「突き続けるキツツキ」</dt>
								  <dd>移住先で出没するキツツキをトップボタンにしました。突く様子はGIFアニメーションです。</dd>
								  <dt>フッターの背景色は夜の空の色（あおのじかん）</dt>
								  <dd>TOPページと同じく、色が変わります。親子で好きな<a href="https://www.iwanami.co.jp/book/b243791.html">「あおのじかん」</a>の絵本の夜の空の色をイメージしています</dd>
							  </dl>
						  </div>
					  </div>
					  <div class="carousel-cell">
						 <div>
							<iframe src="<?php echo esc_url( home_url( '/' ) ); ?>service/" frameborder="0"></iframe>
						  </div>
						  <div class="works-text-area">
							  <h4>「どんなことができる？」をわかりやすく、見やすく</h4>
							  <dl>
								  <dt>複数あるサービス内容を俯瞰できるデザイン</dt>
								  <dd>サービス内容が、「WEBに関することと・翻訳」の二つあり、さらに、WEBに関することには２つのメニューがあったため、全体を俯瞰しやすいように、アコーディオンで表示しました。</dd>
								  <dt>タップで開閉でき、スマートフォン、タブレットで読みやすい</dt>
								  <dd>タップして出たり入ったり、スクロールする量が減るため、モバイルでも読みやすくしました。</dd>
							  </dl>
						  </div>
					  </div>
<!--
					  <div class="carousel-cell">
						 <div>
							<iframe src="<?php echo esc_url( home_url( '/' ) ); ?>/service/index.html#works" frameborder="0"></iframe>
						  </div>
						  <div class="works-text-area">
							  <h4>実績はタップする詳細が表示される</h4>
							  <dl>
								  <dt>TOPページで横スクロールで確認できる</dt>
								  <dd>どんなテイストの作品を作っているか、TOPページでスクロールさせて確認できます。</dd>
								  <dt>タップすると、モーダルで表示される</dt>
								  <dd>タップするとモーダルで作品についての説明文が表示されます。</dd>
							  </dl>
						  </div>
					  </div>
-->
<!--
					  <div class="carousel-cell">
						 <div>
							<iframe src="<?php echo esc_url( home_url( '/' ) ); ?>/service#works" frameborder="0"></iframe>
						  </div>
						 <div class="works-text-area">
							<h4>PC版ではプレゼンテーションのように詳しく</h4>
							<dl>
								<dt>SP版のサイトと「伝えたいこと」をならべる</dt>
								<dd>SP版の実際の動きを見ながら、説明文を読めるように工夫しました。</dd>  
								<dt>SP版のサイトを埋め込む</dt>
								<dd>自分のサイトを埋め込みしているため、実際に動きを確認しながら説明文を読むことができます。</dd>
							  </dl>
						  </div>
					  </div>
-->
					  <div class="carousel-cell">
						 <div>
							<iframe src="<?php echo esc_url( home_url( '/' ) ); ?>blog/" frameborder="0"></iframe>
						  </div>
						  <div class="works-text-area">
							  <h4>ブログ部分は、花や草のイラストを背景として配置</h4>
							  <dl>
								  <dt>手書きイラストを敷き詰めてしき詰める</dt>
								  <dd>草や花の手書きイラストを背景にし、ノートを読んでいるような雰囲気を演出しました。</dd>
								  <dt>カテゴリごとに背景のイラストが変わる</dt>
								  <dd>カテゴリで、背景のイラストを変えてページの雰囲気に変化をつけています。</dd>
							  </dl>
						  </div>
					  </div>
					 　<div class="carousel-cell">
						 <div>
							<iframe src="<?php echo esc_url( home_url( '/' ) ); ?>" frameborder="0"></iframe>
						  </div>
						 <div class="works-text-area">
							<h4>さいごに</h4>
							<dl>
								<dt>様々なスキルを使って、自身も楽しみながらサイト作成ができました。見ていただいている方も楽しんでいただけると嬉しいです！</dt>
								<dd>今後、更新システム（Wordpress）を構築して、更新することでサイトを育てていきます。</dd>  
								<dt>ご意見、ご感想などありましたら、ぜひコメントをお寄せください。</dt>
								<dd>お好きなSNSのダイレクトメッセージより気軽にコメントいただけると嬉しいです。</dd>
							  </dl>
							  <p>最後までお付き合いいただきありがとうございました！</p>
						  </div>
					  </div>
				  </div>
			</div>
			
		</div><!--TOMOs Designの詳細の説明-->
	</section>
</main>
<?php get_footer(); ?>
