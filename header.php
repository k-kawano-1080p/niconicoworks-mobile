<?php if(is_page( '34' ) || is_page( '321' ) || is_category() || is_tag() || is_search() || is_single() ): ?>
<!--スマホ版 | index:ブログTOP,シングル投稿ページ | noindex:カテゴリー,タグ,検索ページ,ブログサイトマップ
======================================================================================================================================== -->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <?php //指定ページにnoindexタグを出力
    if (get_post_meta($post->ID, "noindex", true))
    {echo '<meta name="robots" content="noindex,nofollow" />';print("\n");};
    ?>
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
<?php if (is_singular()) wp_enqueue_script("comment-reply"); ?>
<?php wp_head(); ?>
</head>
<?php elseif(is_archive( 'column' ) || is_singular("column") ): ?>
<!--スマホ版 | コラムアーカイブ(コラムシングルはテンプレートに直書き)
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
<?php elseif(is_page() ): ?>
<!--スマホ版 | ◆noindex:プライバシーポリシー195,サイトマップ188　◆index:パッケージ170、固定ページ
======================================================================================================================================== -->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <?php //指定ページにnoindexタグを出力
    if (get_post_meta($post->ID, "noindex", true))
    {echo '<meta name="robots" content="noindex,nofollow" />';print("\n");};
    ?>
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
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
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
<?php elseif(is_home()): ?>
<!--スマホ版 | ホーム
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
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
    <script>
    //クリックで表示
    $(function() {
            var menubtn = $('#menubtn');
            var menubox = $('#menubox');
            menubtn.toggle(function() {
                        menubox.fadeIn('normal');
                    },
                    function() {
                        menubox.fadeOut('fast');
                    })
                //Blur
            var vague = $("#content").Vague({
                intensity: 3
            });
            vague.unblur();
            $(".btn , .btn2").on("click", $.proxy(vague.toggleblur, vague));
        })
        //OWL Carousell
    $(document).ready(function() {
        $("#owl").owlCarousel({
            navigation: false, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            pagenation: true,
            singleItem: true,
            autoPlay: true
            // "singleItem:true" is a shortcut for:
            // items : 1,
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false
        });
    });
    //アドレスバー消す
    window.onload = function() {
            setTimeout("scrollTo(0,1)", 1);
        }
        //スクロールトップ
    $(function() {
        var topBtn = $('#page-top');
        //スクロールしてトップ
        topBtn.click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 300);
            return false;
        });
    });
    </script>
    <style type="text/css" id="syntaxhighlighteranchor"></style>
    <?php wp_head(); ?>
</head>
<?php endif; ?>



