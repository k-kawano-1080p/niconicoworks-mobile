<!--start　subu　roop-->
<?php
$args = array(

//  'post__in' => array(234,235),


    'post_type' => array(                   //(string / array) - 投稿タイプを指定する。デフォルト値は'post'で、投稿が表示される。
//            'post',                         // - 投稿。
//            'page',                         // - 固定ページ
//            'revision',                     // - リビジョン。
//            'attachment',                   // - 添付ファイル。デフォルトのWP_Queryでは'post_status'=>'published'となっているが、添付ファイルは'post_status'=>'inherit'なので、'inherit'または'any'を指定する必要がある。
            'column'                  // - カスタム投稿タイプ (例: movies)
            ),

    'posts_per_page' => 1,

	);
$the_query = new WP_Query( $args );
			// ループ
if ( $the_query->have_posts() ) : ?>

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<article>
<h2><?php echo get_the_title(); ?></h2>
<?php the_content(); ?>
<div class="postinfo">
<?php the_time('Y年m月d日') ?>
</div>
</article>
<?php endwhile; ?>

<?php endif; ?>
<?php wp_reset_postdata(); ?>
<!--end　subu roop-->