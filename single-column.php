<!--スマホ版 | コラムシングルページ　直指定
======================================================================================================================================== -->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; user-scalable=0;">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/fbicon.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/icomoon/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vague.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/sp-javascript.js"></script>
<!--[if lt IE 9]>
<script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<script>
//クリックで表示Fade
$(function(){
    var menubtn = $('#menubtn');
    var menubox = $('#menubox');
    menubtn.toggle(function(){
        menubox.fadeIn('normal');
    },
    function(){
        menubox.fadeOut('fast');
    })
//Blur
var vague = $("#content").Vague({intensity:3});
vague.unblur();
$(".btn , .btn2").on("click",$.proxy(vague.toggleblur,vague));
})
//スクロールトップ
$(function() {
    var topBtn = $('#page-top');
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
//OWL Carousell
$(document).ready(function() {
    $("#owl").owlCarousel({
    navigation : false, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 400,
    pagenation:true,
    singleItem:true,
    autoPlay:true
      // "singleItem:true" is a shortcut for:
      // items : 1,
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
  });
});
</script>
<style type="text/css" id="syntaxhighlighteranchor"></style>
</head>
<?php echo get_template_part( "parts/header_parts" ); ?>
<?php get_template_part('parts/pankuzu_list'); ?>
<div id="content">
	<article>
		<h2><?php echo get_the_title(); ?></h2>
        <!--start main roop-->
        <?php if (have_posts()): // WordPress ループ ?>
        <?php while (have_posts()): the_post(); // 繰り返し処理開始 ?>
        <?php the_content(); ?>
        <?php endwhile; // 繰り返し処理終了 ?>
        <?php else: // ここから記事が見つからなかった場合の処理 ?>
        <div class="post">
            <h2>記事はありません</h2>
            <p>お探しの記事は見つかりませんでした。</p>
        </div>
        <?php endif; ?>
        <div class="postinfo">
        <?php the_time('Y年m月d日') ?>
        </div>
        <?php wp_reset_query() ?>
        <!--end main roop-->
	</article>
        <div class="single-widget go2top cf" style="    margin: 0px 15px 15px 15px;">
        <a href="<?php echo $url = get_post_type_archive_link( 'column' ); ?>" class="go2top-button-1"><div class="button">コラムTOPへ戻る</div></a>
        </div>
<?php get_footer(); ?>