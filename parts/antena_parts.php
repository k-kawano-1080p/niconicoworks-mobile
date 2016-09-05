<?php if(is_tag()): ?>
	<!-- タグ
	================================================== -->
		<!--roop start-->
		<?php
		$tags = wp_get_post_tags($post->ID);
		$tag_ids = array();
		foreach($tags as $tag):
		  array_push( $tag_ids, $tag -> term_id);
		endforeach ;
		$args = array(
			'tag__in' => $tag_ids,
			'posts_per_page' => 5,
			'meta_key' => 'views',
			 'orderby' => 'meta_value_num',
			 'order' => 'DESC',
			);
		$the_query = new WP_Query( $args );
					// ループ
		if ( $the_query->have_posts() ) : ?>
		<section class="txt-ranking">
		<h2 style="padding: 13px 0 6px 20px;"><?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo $tag->name . ' '; } } ?>タグの人気記事</h2>
		<ol>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li><a href="<?php the_permalink();?>"><span class="label label-danger" style="display: inline;padding: .2em .6em .3em;font-size: 75%;color: #fff;border-radius: .25em;font-weight: 700;line-height: 1;vertical-align: baseline;white-space: nowrap;text-align: center;background-color: #d9534f;"><?php echo the_views(); ?></span>&nbsp;<?php the_title(); ?></a></li>
		<?php endwhile;?>
		</ol>
		</section>
		<?php endif;?>
		<?php wp_reset_postdata(); ?>
		<!--end roop-->
<?php elseif(is_category()): ?>
	<!-- カテゴリー
	================================================== -->
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
		<section class="txt-ranking">
		<?php
		$category = get_the_category();
		$cat_id   = $category[0]->cat_ID;
		$cat_name = $category[0]->cat_name;
		$cat_slug = $category[0]->category_nicename;
		?>
		<h2><?php echo $cat_name; ?>&nbsp;カテゴリーの人気記事</h2>
		<ol>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li><a href="<?php the_permalink();?>"><span class="label label-danger" style="display: inline;padding: .2em .6em .3em;font-size: 75%;color: #fff;border-radius: .25em;font-weight: 700;line-height: 1;vertical-align: baseline;white-space: nowrap;text-align: center;background-color: #d9534f;"><?php echo the_views(); ?></span>&nbsp;<?php the_title(); ?></a></li>
		<?php endwhile;?>
		</ol>
		</section>
		<?php endif;?>
		<?php wp_reset_postdata(); ?>
		<!--end roop-->
<?php elseif(is_search() ): // サーチ ?>
	<!-- サーチ
	================================================== -->
		<!--roop start-->
		<?php
		$args = array(
			'post_type' => array( 'post',),
			//'hour' => 24,　//一日の集計
			'meta_key' => 'views',
		      'orderby' => 'meta_value_num',
		      'order' => 'DESC',
			'posts_per_page' => 5,
			);
		$the_query = new WP_Query( $args );
					// ループ
		if ( $the_query->have_posts() ) : ?>
		<section class="txt-ranking">
		<h2 style="padding: 7px 0 4px 20px;">人気記事</h2>
		<ol>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<li><a href="<?php the_permalink();?>"><span class="label label-danger" style="display: inline;padding: .2em .6em .3em;font-size: 75%;color: #fff;border-radius: .25em;font-weight: 700;line-height: 1;vertical-align: baseline;white-space: nowrap;text-align: center;background-color: #d9534f;"><?php echo the_views(); ?></span>&nbsp;<?php the_title(); ?></a></li>
			<?php endwhile; ?>
		</ol>
		</section>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		<!--end roop-->
<?php elseif(is_page( '34' ) || is_page( '321' ) ): ?>
	<!-- ブログTOP
	================================================== -->
		<!--roop start-->
		<?php
		$args = array(
			'post_type' => array( 'post',),
			//'hour' => 24,　//一日の集計
			'meta_key' => 'views',
		      'orderby' => 'meta_value_num',
		      'order' => 'DESC',
			'posts_per_page' => 5,
			);
		$the_query = new WP_Query( $args );
					// ループ
		if ( $the_query->have_posts() ) : ?>
		<section class="txt-ranking">
		<h2 style="padding: 7px 0 4px 20px;">人気記事</h2>
		<ol>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<li><a href="<?php the_permalink();?>"><span class="label label-danger" style="display: inline;padding: .2em .6em .3em;font-size: 75%;color: #fff;border-radius: .25em;font-weight: 700;line-height: 1;vertical-align: baseline;white-space: nowrap;text-align: center;background-color: #d9534f;"><?php echo the_views(); ?></span>&nbsp;<?php the_title(); ?></a></li>
			<?php endwhile; ?>
		</ol>
		</section>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		<!--end roop-->
<?php elseif(is_single()): ?>
	<!-- シングル
	================================================== -->
		<!--roop start-->
		<?php
		$tags = wp_get_post_tags($post->ID);
		$tag_ids = array();
		foreach($tags as $tag):
		  array_push( $tag_ids, $tag -> term_id);
		endforeach ;
		$args = array(
			'tag__in' => $tag_ids,
			'posts_per_page' => 5,
			'meta_key' => 'views',
			 'orderby' => 'meta_value_num',
			 'order' => 'DESC',
			);
		$the_query = new WP_Query( $args );
					// ループ
		if ( $the_query->have_posts() ) : ?>
		<section class="txt-ranking" style="margin: -1em -1em 1em -1em;">
		<h2><?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo $tag->name . ' '; } } ?>タグの人気記事</h2>
		<ol>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<li><a href="<?php the_permalink();?>"><span class="label label-danger" style="display: inline;padding: .2em .6em .3em;font-size: 75%;color: #fff;border-radius: .25em;font-weight: 700;line-height: 1;vertical-align: baseline;white-space: nowrap;text-align: center;background-color: #d9534f;"><?php echo the_views(); ?></span>&nbsp;&nbsp;<?php the_title(); ?></a></li>
			<?php endwhile; ?>
		</ol>
		</section>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		<!--end roop-->

<?php endif; ?>

