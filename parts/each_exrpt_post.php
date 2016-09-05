<?php if(is_category()): ?>
  <!-- カテゴリー
  ================================================== -->
        <!--start main roop-->
        <?php if (have_posts()): // WordPress ループ ?>
        <div class="posts latest-posts">
        <?php
        $category = get_the_category();
        $cat_id   = $category[0]->cat_ID;
        $cat_name = $category[0]->cat_name;
        $cat_slug = $category[0]->category_nicename;
        $link = get_category_link($cat_id);
        ?>
        <h2><?php echo $cat_name; ?>&nbsp;カテゴリーの新着情報</h2>
        <ul class="postlist">
        <?php while (have_posts()): the_post(); // 繰り返し処理開始 ?>
        <li>
          <div class="post">
            <div class="post-info">
              <div class="blog_info2">
                <ul>
                  <li class="cal"><?php the_time('Y年m月d日') ?></li>
                  <li class="cat"><?php the_category(', ') ?></li>
                  <li class="tag"><?php the_tags('', ', '); ?></li>
                </ul>
                <br class="fix" />
              </div>
            </div>
            <div class="post-link">
              <a href="<?php the_permalink(); ?>" class="index-posts-1">
                <span class="eyecatch main-eyecatch"><?php $title= get_the_title(); the_post_thumbnail( '80' , array( 'alt' =>$title, 'title' => $title)); ?></span>
                <span class="title"><?php the_title(); ?></span>
              </a>
            </div>
          </div>
        </li>
        <?php endwhile; // 繰り返し処理終了 ?>
        </ul>
        </div>
        <?php endif; // WordPress ループ 終了?>
        <?php pagination(); ?>
        <?php wp_reset_query() ?>
        <!--end main roop-->
<?php elseif(is_tag()): ?>
  <!-- タグ
  ================================================== -->
        <!--start main roop-->
        <?php if (have_posts()): // WordPress ループ ?>
        <div class="posts latest-posts">
        <h2><?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo $tag->name . ' '; } } ?>タグの新着情報</h2>
        <ul class="postlist">
        <?php while (have_posts()): the_post(); // 繰り返し処理開始 ?>
        <?php
        $category = get_the_category();
        $cat_id   = $category[0]->cat_ID;
        $cat_name = $category[0]->cat_name;
        $cat_slug = $category[0]->category_nicename;
        $link = get_category_link($cat_id);
        ?>
        <li>
          <div class="post">
            <div class="post-info">
              <div class="blog_info2">
                <ul>
                  <li class="cal"><?php the_time('Y年m月d日') ?></li>
                  <li class="cat"><?php the_category(', ') ?></li>
                  <li class="tag"><?php the_tags('', ', '); ?></li>
                </ul>
                <br class="fix" />
              </div>
            </div>
            <div class="post-link">
              <a href="<?php the_permalink(); ?>" class="index-posts-1">
                <span class="eyecatch main-eyecatch"><?php $title= get_the_title(); the_post_thumbnail( '80' , array( 'alt' =>$title, 'title' => $title)); ?></span>
                <span class="title"><?php the_title(); ?></span>
              </a>
            </div>
          </div>
        </li>
        <?php endwhile; // 繰り返し処理終了 ?>
        </ul>
        </div>
        <?php endif; // WordPress ループ 終了?>
        <?php pagination(); ?>
        <?php wp_reset_query() ?>
        <!--end main roop-->
<?php elseif(is_search()): ?>
  <!-- サーチ
  ================================================== -->
        <!--start main roop-->
        <?php if (have_posts() && get_search_query()) : // WordPress ループ ?>
        <div class="posts latest-posts">
        <h2>検索結果一覧</h2>
        <ul class="postlist">
        <?php while (have_posts()): the_post(); // 繰り返し処理開始 ?>
        <li>
          <div class="post">
            <div class="post-info">
              <div class="blog_info2">
                <ul>
                  <li class="cal"><?php the_time('Y年m月d日') ?></li>
                  <li class="cat"><?php the_category(', ') ?></li>
                  <li class="tag"><?php the_tags('', ', '); ?></li>
                </ul>
                <br class="fix" />
              </div>
            </div>
            <div class="post-link">
              <a href="<?php the_permalink(); ?>" class="index-posts-1">
                <span class="eyecatch main-eyecatch"><?php $title= get_the_title(); the_post_thumbnail( '80' , array( 'alt' =>$title, 'title' => $title)); ?></span>
                <span class="title"><?php the_title(); ?></span>
              </a>
            </div>
          </div>
        </li>
        <?php endwhile; // 繰り返し処理終了 ?>
        </ul>
        </div>
        <?php else: // ここから記事が見つからなかった場合の処理 ?>
        <div class="posts latest-posts">
          <p style="text-align: center;font-size: 23px;padding: 20px;">検索キーワードに該当する記事がございませんでした。<br>カテゴリーやタグから探してみてください。</p>
        </div>
        <?php endif; // WordPress ループ 終了?>
        <?php pagination(); ?>
        <?php wp_reset_query() ?>
        <!--end main roop-->
<?php elseif(is_archive( 'column' )): ?>
  <!-- コラムアーカイブ
  ================================================== -->
        <!--start main roop-->
        <?php if (have_posts()): // WordPress ループ ?>
        <div class="posts latest-posts">
        <h2>コラム</h2>
        <ul class="postlist">
        <?php while (have_posts()): the_post(); // 繰り返し処理開始 ?>
        <li>
          <div class="post">
            <div class="post-info">
              <div class="blog_info2">
                <ul>
                  <li class="cal"><?php the_time('Y年m月d日') ?></li>
                </ul>
                <br class="fix" />
              </div>
            </div>
            <div class="post-link">
              <a href="<?php the_permalink(); ?>" class="index-posts-1">
                <span class="eyecatch main-eyecatch"><?php $title= get_the_title(); the_post_thumbnail( '80' , array( 'alt' =>$title, 'title' => $title)); ?></span>
                <span class="title"><?php the_title(); ?></span>
              </a>
            </div>
          </div>
        </li>
        <?php endwhile; // 繰り返し処理終了 ?>
        </ul>
        </div>
        <?php endif; // WordPress ループ 終了?>
        <?php pagination(); ?>
        <?php wp_reset_query() ?>
        <!--end main roop-->
<?php elseif(is_page( '34' )): ?>
  <!-- ブログTOP
  ================================================== -->
    <!--roop start-->
    <?php
    $args = array(
      'post_type' => array('post'),
      'paged' => $paged,
      'posts_per_page' => 10,
      'orderby' => 'date',
      'order' => 'DESC'
      );
    $the_query = new WP_Query( $args );
          // ループ
    if ( $the_query->have_posts() ) : ?>
        <div class="posts latest-posts">
        <h2>新着記事</h2>
        <ul class="postlist">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php
        $category = get_the_category();
        $cat_id   = $category[0]->cat_ID;
        $cat_name = $category[0]->cat_name;
        $cat_slug = $category[0]->category_nicename;
        $link = get_category_link($cat_id);
        ?>
        <li>
          <div class="post">
            <div class="post-info">
              <div class="blog_info2">
                <ul>
                  <li class="cal"><?php the_time('Y年m月d日') ?></li>
                  <li class="cat"><?php the_category(', ') ?></li>
                  <li class="tag"><?php the_tags('', ', '); ?></li>
                </ul>
                <br class="fix" />
              </div>
            </div>
            <div class="post-link">
              <a href="<?php the_permalink(); ?>" class="index-posts-1">
                <span class="eyecatch main-eyecatch"><?php $title= get_the_title(); the_post_thumbnail( '80' , array( 'alt' =>$title, 'title' => $title)); ?></span>
                <span class="title"><?php the_title(); ?></span>
              </a>
            </div>
          </div>
        </li>
        <?php endwhile; ?>
        </ul>
        </div>
        <?php endif; ?>
        <?php wp_pagenavi(array('query' => $the_query)); ?>
        <?php wp_reset_postdata(); ?>
        <!--end　subu roop-->
<?php elseif(is_page( '321' ) ): ?>
  <!-- ブログサイトマップ
  ================================================== -->
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
        <?php wp_reset_query() ?>
        <!--end main roop-->
<?php elseif(is_page()): ?>
  <!-- ページ
  ================================================== -->
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
        <?php wp_reset_query() ?>
        <!--end main roop-->
<?php elseif(is_single()): ?>
  <!-- シングル
  ================================================== -->
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
        <?php wp_reset_query() ?>
        <!--end main roop-->
<?php endif; ?>


