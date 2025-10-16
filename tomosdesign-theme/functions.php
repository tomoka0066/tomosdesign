<?php
//アイキャッチ画像の有効化
add_theme_support( 'post-thumbnails' );

//自動的な編集を制御
add_action('init', function() {
remove_filter('the_title', 'wptexturize');
remove_filter('the_content', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');
remove_filter('the_title', 'wpautop');
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
remove_filter('the_editor_content', 'wp_richedit_pre');
});

add_filter('tiny_mce_before_init', function($init) {
$init['wpautop'] = false;
$init['apply_source_formatting'] = true;
return $init;
});

//ニュースの投稿を追加
add_action( 'init', 'create_post_type' );
function create_post_type() {
	
//ニュースのカスタム投稿の追加
register_post_type( 'news',
array(
'labels' => array(
'name' => __( 'ニュース' ),
'singular_name' => __( 'ニュース' )
),
'public' => true,
'has_archive' => true,
)
);

//Worksのカスタム投稿の追加
register_post_type( 'works',
array(
'labels' => array(
'name' => __( '実績' ),
'singular_name' => __( '実績' )
),
'public' => true,
'has_archive' => true,
 // 'supports'に'thumbnail'を追記
  'supports' => array('title','editor','thumbnail') 
)
);
	
//illustのカスタム投稿の追加
register_post_type( 'illust',
array(
'labels' => array(
'name' => __( 'イラスト' ),
'singular_name' => __( 'イラスト' )
),
'public' => true,
'has_archive' => false,
 // 'supports'に'thumbnail'を追記
  'supports' => array('title','editor','thumbnail') 
)
);
}

/**
* スラッグの日本語禁止
*/
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
$slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
}
return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4 );


//ウィジェットの初期化
function my_widgets_init() {
register_sidebar( array(
'name' => 'nav widget',
'id' => 'nav-widget',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '',
'after_title' => '',
) );
}
add_action( 'widgets_init', 'my_widgets_init' );

//ウィジェットタイトルを消す
add_filter( 'widget_title', 'remove_widget_title' );
function remove_widget_title( $widget_title ) {
if ( substr ( $widget_title, 0, 1 ) == '!' )
return;
else
return ( $widget_title );
}

//概要（抜粋）の省略文字
 function my_excerpt_more($more) {
 return '…';
 }
 add_filter('excerpt_more', 'my_excerpt_more');

//概要（抜粋）の文字数調整
 function my_excerpt_length($length) {
 return 50;
 }
 add_filter('excerpt_length', 'my_excerpt_length');

//無駄なCSS削除（Gutenberg)
 add_action( 'wp_enqueue_scripts', 'remove_block_library_style' );
function remove_block_library_style() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
}
