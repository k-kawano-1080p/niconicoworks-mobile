		<!--roop start-->
		<?php
		$categories = get_the_category($post->ID);
		$category_ID = array();
		foreach($categories as $category):
		  array_push( $category_ID, $category -> cat_ID);
		endforeach ;
		$args = array(
			'category__in' => $category_ID,
			'posts_per_page' => 5,
			'meta_key' => 'views',
			 'orderby' => 'meta_value_num',
			 'order' => 'DESC',
			);
		$the_query = new WP_Query( $args );
					// ループ
		if ( $the_query->have_posts() ) : ?>
<div class="single-widget suggest-post cf">
		<?php
		$category = get_the_category();
		$cat_id   = $category[0]->cat_ID;
		$cat_name = $category[0]->cat_name;
		$cat_slug = $category[0]->category_nicename;
		?>
	<div style="margin: 0 -1em !important；"><h2><?php echo $cat_name; ?>&nbsp;カテゴリーの人気記事</h2></div>
	<ul class="panel">
		<li id="menu2" class="related-post">
			<div class='yarpp-related'>
				<ul>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); // 何かする ?>
					<li id="yarpp-li" class="1">
						<a href="<?php the_permalink();?>" class="related-post-1">
							<div class="eyecatch">
								<?php $title= get_the_title(); the_post_thumbnail( '120' , array( 'alt' =>$title, 'title' => $title)); ?>
							</div>
							<div class="meta">
							<span class="label label-danger" style="display: inline;padding: .2em .6em .3em;font-size: 75%;color: #fff;border-radius: .25em;font-weight: 700;line-height: 1;vertical-align: baseline;white-space: nowrap;text-align: center;background-color: #d9534f;"><?php echo the_views(); ?></span>
								<span class="title"><?php the_title(); ?></span>
							</div>
						</a>
					</li>
<?php endwhile; // 繰り返し処理終了 ?>
				</ul>
			</div>
		</li>
	</ul>
</div>
<?php endif; // WordPress ループ 終了?>
<?php wp_reset_postdata(); ?>
<!--end main roop-->