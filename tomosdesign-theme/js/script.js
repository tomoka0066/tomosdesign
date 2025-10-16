// JavaScript Document

/*-------------------------
ハンバーガーメニュー
--------------------------*/

$("#btn-trigger").on("click",function(){
//	$(".menu").css("display","block");
	$(".menu").fadeIn(1000);
});


$("#btn-close").on("click",function(){
//	$(".menu").css("display","none");
	$(".menu").fadeOut(1000);
});



//モーダルウィンドウ
$(function(){
    var winScrollTop;
    $('.js-modal-open').each(function(){
        $(this).on('click',function(){
            //スクロール位置を取得
            winScrollTop = $(window).scrollTop();
            var target = $(this).data('target');
            var modal = document.getElementById(target);
            $(modal).fadeIn();
            return false;
        });
    });
    $('.js-modal-close').on('click',function(){
        $('.js-modal').fadeOut();
        $('body,html').stop().animate({scrollTop:winScrollTop}, 100);
        return false;
    }); 
});



//アコーディオン
$(function(){
  //.accordion_oneの中の.accordion_headerがクリックされたら
  $('.accordion-one .accordion-header').click(function(){
    //クリックされた.accordion_oneの中の.accordion_headerに隣接する.accordion_innerが開いたり閉じたりする。
    $(this).next('.accordion-inner').slideToggle();
    $(this).toggleClass("open");
  });
});



/*-------------------------
ページトップボタン
--------------------------*/

$("#back").on("click",function(){
	$("html,body").animate({scrollTop:0},1000);
});




//メインビジュアルに遊びを入れる
$(".mainvisual").fadeIn(1000);
$("#logo-top").fadeIn(1300);
$(".mainvisual-subtitle").fadeIn(1400);
$(".mainvisual-maintitle").fadeIn(1600);
$(".mainvisual-treat").fadeIn(1800);
$(".name").fadeIn(2000);


//サービスメニューをスクロールでふわっと表示

$(function(){
	$(window).scroll(function (){
		$(".js-target").each(function(){
			var imgPos = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll > imgPos - windowHeight + windowHeight/5){
				$(this).addClass("fade_on");
			} else {
				$(this).removeClass("fade_on");
			}
		});
	});
});



$(function(){
	$(window).scroll(function (){
		$(".butterfly").each(function(){
			var imgPos = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll > imgPos - windowHeight + windowHeight/5){
				$(this).addClass("act");
			} else {
				$(this).removeClass("act");
			}
		});
	});
});


//ローディング画面
window.onload = function() {
  const spinner = document.getElementById('loading');
  spinner.classList.add('loaded');
}

//
////ブログページのタブの切り替え
//$(function() {
//  let tabs = $(".tab"); // tabのクラスを全て取得し、変数tabsに配列で定義
//  $(".tab").on("click", function() { // tabをクリックしたらイベント発火
//    $(".active").removeClass("active"); // activeクラスを消す
//    $(this).addClass("active"); // クリックした箇所にactiveクラスを追加
//    const index = tabs.index(this); // クリックした箇所がタブの何番目か判定し、定数indexとして定義
//    $(".blog_content").removeClass("show").eq(index).addClass("show"); // showクラスを消して、contentクラスのindex番目にshowクラスを追加
//  })
//})
