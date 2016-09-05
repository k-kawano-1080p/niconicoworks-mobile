<?php
// サイドバーウィジェット
register_sidebar(array(
'name' => 'サイドバーウィジット-1',
'id' => 'sidebar-1',
'description' => 'サイドバーのウィジットエリアです。',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
));
// 標準で吐き出すソースを削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('template_redirect', 'rest_output_link_header', 11);
remove_action('wp_head', 'wp_shortlink_wp_head');
// generatorを非表示にする
remove_action('wp_head', 'wp_generator');
// EditURIを非表示にする
remove_action('wp_head', 'rsd_link');
// wlwmanifestを非表示にする
remove_action('wp_head', 'wlwmanifest_link');
// カスタムナビゲーションメニュー
add_theme_support('menus');
// アイキャッチ画像
add_theme_support( 'post-thumbnails' );
//アイキャッチ画像の定義と切り抜き
add_action( 'after_setup_theme', 'baw_theme_setup' );
function baw_theme_setup() {
 add_image_size('small_thumbnail', 90, 90 ,true );
 add_image_size('kiji', 610, 200, true );
 add_image_size('650', 650, 230, true );
 add_image_size('350', 350, 250, true );
 add_image_size('slidepc', 722, 340, true );
 add_image_size( '120', 120, 120, true );
 add_image_size( 's_thumbnail', 80, 80, true );
 add_image_size('280_thumbnail', 280, 125, true );
}
// SNSプラグイン自由に配置
function wpSns() {
  if (function_exists("wp_social_bookmarking_light_output_e")) {
    wp_social_bookmarking_light_output_e();
  }
}
add_shortcode('socialBtns', 'wpSns');
// コメントフォーム
add_filter('comments_open', 'custom_comment_tags');
add_filter('pre_comment_approved', 'custom_comment_tags');
function custom_comment_tags($data) {
    global $allowedtags;
    unset($allowedtags['a']);
    unset($allowedtags['abbr']);
    unset($allowedtags['acronym']);
    unset($allowedtags['b']);
    unset($allowedtags['div']);
    unset($allowedtags['cite']);
    unset($allowedtags['code']);
    unset($allowedtags['del']);
    unset($allowedtags['em']);
    unset($allowedtags['i']);
    unset($allowedtags['q']);
    unset($allowedtags['strike']);
    unset($allowedtags['strong']);
    return $data;
}
// ページ送り
function pagination() {
  global $wp_rewrite;
  global $wp_query;
  global $paged;
    $paginate_base = get_pagenum_link(1);
    if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
        $paginate_format = '';
        $paginate_base = add_query_arg('paged','%#%');
    }
    else{
        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
        user_trailingslashit('page/%#%/','paged');;
        $paginate_base .= '%_%';
    }
   //paginationの出力
   echo '<ul class="pagination">';
   echo paginate_links(array(
        'base' => $paginate_base,
        'format' => $paginate_format,
        'total' => $wp_query->max_num_pages,
        'mid_size' => 2,
        'current' => ($paged ? $paged : 1),
        'prev_text' => '« 前へ',
        'next_text' => '次へ »',
        'type'      => 'list',
    ));
   echo '</ul>';
}
// アイキャッチ画像出力
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
if(empty($first_img)){ //Defines a default image
        $first_img = "http://www.fsc-net.jp/fsbc/wp-content/themes/fsbc/img/no_image325.gif";
    }
    return $first_img;
}
// 文字抜粋
function new_excerpt_mblength($length) {
     return 300;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');
function new_excerpt_more($more) {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
// Custom Post Type UIの日本語化ファイルをすでにあるものより優先して読み込ませるようにします。
function override_load_cptui_ja( $override, $domain, $mofile ) {
  if ( 'cpt-plugin' == $domain
    && strrpos( $mofile, WP_PLUGIN_DIR . '/custom-post-type-ui/languages/cpt-plugin-ja.mo' ) === 0 ) {
    load_textdomain( 'cpt-plugin', WP_LANG_DIR . '/plugins/cpt-plugin-ja.mo' );
    return true;
  }
  return $override;
}
add_filter( 'override_load_textdomain', 'override_load_cptui_ja', 10, 3 );
// 新着記事URL獲得
function get_latest_post_url() {
    global $wpdb;
    $query = "SELECT ID FROM {$wpdb->prefix}posts WHERE post_type='post' AND post_status='publish' ORDER BY post_date DESC LIMIT 1;";
    $result = $wpdb->get_results($query);
    if(is_object($result[0])) {
        return get_permalink($result[0]->ID);
    } else {
        return '';
    };
}
// サイトのURLを出力
add_shortcode('url', 'shortcode_url');
function shortcode_url() {
return get_bloginfo('url');
}
// アップロード・ディレクトリへのパス
add_shortcode('uploads', 'shortcode_up');
function shortcode_up() {
$upload_dir = wp_upload_dir();
return $upload_dir['baseurl'];
}
// サイドウィジェットでもショートコードを使えるように
add_filter('widget_text', 'do_shortcode');
// 検索ワードが0や未入力のときにもsearch.phpを使うように追記
function search_template_redirect() {
  global $wp_query;
  $wp_query->is_search = true;
  $wp_query->is_home = false;
  if (file_exists(TEMPLATEPATH . '/search.php')) {
    include(TEMPLATEPATH . '/search.php');
  }
  exit;
}
if (isset($_GET['s']) && $_GET['s'] == false) {
  add_action('template_redirect', 'search_template_redirect');
}
// 検索結果を投稿ページのみに
function my_posy_search($search) {
  if(is_search()) {
    $search .= " AND post_type = 'post'";
  }
  return $search;
}
add_filter('posts_search', 'my_posy_search');
?>
<?php
function SNS_btn_horizontal_bottom()
{ ?>
<?php
$canonical_url=get_permalink();
$title=wp_title( '', false, 'right' ).'| '.get_bloginfo('name');
$canonical_url_encode=urlencode($canonical_url);
$title_encode=urlencode($title);
?>
<div id="sns-btn-bottom" class="sns-buttons-pc">
  <ul class="snsbv">
    <li class="balloon-btn-horizontal feedly-balloon-btn-horizontal">
      <span class="balloon-btn-set">
        <span class="arrow-box-horizontal">
          <a href="http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Fniconicoworks.com%2Ffeed%2F" target="blank" class="arrow-box-horizontal-link feedly-arrow-box-horizontal-link" title="Feedlyで最新記事をフォロー！">
            <?php if(function_exists('scc_get_follow_feedly')) echo (scc_get_follow_feedly()==0)?'0':scc_get_follow_feedly(); ?>
          </a>
          <a href="http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Fniconicoworks.com%2Ffeed%2F" target="blank" class="balloon-btn-horizontal-link feedly-balloon-btn-horizontal-link" title="Feedlyで最新記事をフォロー！">
            <i class="icon-feedly"></i>
          </a>
        </span>
      </span>
    </li>
    <li class="balloon-btn-horizontal pocket-balloon-btn-horizontal">
      <span class="balloon-btn-set">
        <span class="arrow-box-horizontal">
          <a href="http://getpocket.com/edit?url=<?php echo $canonical_url_encode;?>&title=<?php echo $title_encode;?>" target="blank" class="arrow-box-horizontal-link pocket-arrow-box-horizontal-link" title="Pocketしてあとで読む">
            <?php if(function_exists('scc_get_share_pocket')) echo (scc_get_share_pocket()==0)?'0':scc_get_share_pocket(); ?>
          </a>
          <a href="http://getpocket.com/edit?url=<?php echo $canonical_url_encode;?>&title=<?php echo $title_encode;?>" target="blank" class="balloon-btn-horizontal-link pocket-balloon-btn-horizontal-link" title="Pocketしてあとで読む">
            <i class="icon-pocket"></i>
          </a>
        </span>
      </span>
    </li>
    <li class="balloon-btn-horizontal googleplus-balloon-btn-horizontal">
      <span class="balloon-btn-set">
        <span class="arrow-box-horizontal">
          <a href="https://plus.google.com/share?url=<?php echo $canonical_url_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=500');return false;" target="blank" class="arrow-box-horizontal-link googleplus-arrow-box-horizontal-link" title="+1する！">
            <?php if(function_exists('scc_get_share_gplus')) echo (scc_get_share_gplus()==0)?'0':scc_get_share_gplus(); ?>
          </a>
          <a href="https://plus.google.com/share?url=<?php echo $canonical_url_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=500');return false;" target="blank" class="balloon-btn-horizontal-link googleplus-balloon-btn-horizontal-link" title="+1する！">
            <i class="icon-googleplus"></i>
          </a>
        </span>
      </span>
    </li>
    <li class="balloon-btn-horizontal hatena-balloon-btn-horizontal">
      <span class="balloon-btn-set">
        <span class="arrow-box-horizontal">
          <a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $canonical_url_encode ?>&title=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=510');return false;" target="blank" class="arrow-box-horizontal-link hatena-arrow-box-horizontal-link" title="はてブする！">
            <?php if(function_exists('scc_get_share_hatebu')) echo (scc_get_share_hatebu()==0)?'0':scc_get_share_hatebu(); ?>
          </a>
          <a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $canonical_url_encode ?>&title=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=510');return false;" target="blank" class="balloon-btn-horizontal-link hatena-balloon-btn-horizontal-link" title="はてブする！">
            <i class="icon-hatena"></i>
          </a>
        </span>
      </span>
    </li>
    <li class="balloon-btn-horizontal twitter-balloon-btn-horizontal">
      <span class="balloon-btn-set">
        <span class="arrow-box-horizontal">
          <a href="http://twitter.com/intent/tweet?url=<?php echo $canonical_url_encode ?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton" target="blank" class="arrow-box-horizontal-link twitter-arrow-box-horizontal-link" title="ツイートする！">
            <?php if(function_exists('scc_get_share_twitter')) echo (scc_get_share_twitter()==0)?'0':scc_get_share_twitter(); ?>
          </a>
          <a href="http://twitter.com/intent/tweet?url=<?php echo $canonical_url_encode ?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton" target="blank" class="balloon-btn-horizontal-link twitter-balloon-btn-horizontal-link" title="ツイートする！">
            <i class="icon-twitter"></i>
          </a>
        </span>
      </span>
    </li>
    <li class="balloon-btn-horizontal facebook-balloon-btn-horizontal">
      <span class="balloon-btn-set">
        <span class="arrow-box-horizontal">
          <a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $canonical_url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="blank" class="arrow-box-horizontal-link facebook-arrow-box-horizontal-link" title="Facebookでシェア！">
            <?php if(function_exists('scc_get_share_facebook')) echo (scc_get_share_facebook()==0)?'0':scc_get_share_facebook(); ?>
          </a>
          <a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $canonical_url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="blank" class="balloon-btn-horizontal-link facebook-balloon-btn-horizontal-link" title="Facebookでシェア！">
            <i class="icon-facebook"></i>
          </a>
        </span>
      </span>
    </li>
  </ul>
  <div class="clearfloat"></div>
</div>
<?php }
?>
<?php
add_action('wp_footer', 'ga');
function ga() { ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-58709942-4', 'auto');
    ga('send', 'pageview');
</script>
<?php } ?>
