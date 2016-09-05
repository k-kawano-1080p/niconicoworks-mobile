<?php if(is_singular("column") ): // コラムsinnguruページ?>
	<!-- コラムシングルぱんくず
	================================================== -->
		<div id="pankuzu" style="margin-top: 5px;" class="cf">
		<ul class="bread_crumb">
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-1 top"><a itemprop="url" rel="home" href="<?php echo home_url('/'); ?>"><span itemprop="title">HOME</span></a></li>
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-2 sub"><a itemprop="url" rel="home" href="<?php echo $url = get_post_type_archive_link( 'column' ); ?>"><span itemprop="title">コラム</span></a></li>
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-3 sub"><span itemprop="title"><?php echo get_the_title(); ?></span></li>
		</ul>
		</div>

<?php elseif(is_single() ): // シングル ?>
	<!-- シングルページぱんくず
	================================================== -->
	<div class="single-post">
		<div class="title-group">
			<?php
			$category = get_the_category();
			$cat_id   = $category[0]->cat_ID;
			$cat_name = $category[0]->cat_name;
			$cat_slug = $category[0]->category_nicename;
			$link = get_category_link($cat_id);
			?>
			<div class="breadcrunmbs">
				<ul>
					<!-- Home -->
					<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
						<a href="<?php echo home_url('/'); ?>" itemprop="url" rel="home" class="bread-home"><span itemprop="title">HOME</span></a>
					</li>

					<!-- Under Home -->
					<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
						<a href="<?php echo get_page_link(34); ?>" itemprop="url" rel="home" class="bread-blog"><span itemprop="title">ニコニコブログ</span></a>
					</li>
					<!-- Category -->
					<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="cat-parent">
						<a href="<?php echo $link; ?>" itemprop="url" rel="home" class="bread-cat-parent">
							<span itemprop="title"><?php echo $cat_name; ?></span>
						</a>
					</li>
					<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="cat-child">
						<?php $tagcloud = get_the_tags(); $output = '';
						if($tagcloud){
							foreach($tagcloud as $tags) {
								if( $tags->slug == 'column') continue;
								$output .= '<a href="'.get_tag_link( $tags->term_id ).'" itemprop="url" rel="home" class="bread-cat-child"><span itemprop="title">'.$tags->name.'</span></a>';
							}
							echo trim($output);
						}
						?>
					</li>
				</ul>
			</div>
			<h1><?php echo get_the_title(); ?></h1>
			<div class="blog_info cf">
				<ul>
					<li class="cal"><?php the_time('Y年m月d日') ?></li>
					<li class="cat"><?php the_category(', ') ?></li>
					<li class="tag"><?php the_tags('', ', '); ?></li>
				</ul>
				<br class="clear" />
			</div>
		</div>
	</div>
<?php elseif(is_page( '34' ) ): // ブログTOP ?>
	<!-- ブログTOPぱんくず
	================================================== -->
		<div id="pankuzu" class="cf">
		<ul class="bread_crumb">
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-1 top">
				<a itemprop="url" rel="home" href="<?php echo home_url('/'); ?>"><span itemprop="title">HOME</span></a>
			</li>
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-2 sub">
				<span itemprop="title">ニコニコブログ</span>
			</li>
		</ul>
		</div>
<?php elseif(is_page( '321' ) ): ?>
	<!-- ブログサイトマップ
	================================================== -->
	<div class="single-post">
		<div class="title-group">
			<div class="breadcrunmbs">
				<ul>
					<!-- Home -->
					<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
						<a href="<?php echo home_url('/'); ?>" itemprop="url" rel="home" class="bread-home"><span itemprop="title">HOME</span></a>
					</li>
					<!-- Under Home -->
					<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
						<a href="<?php echo get_page_link(34); ?>" itemprop="url" rel="home" class="bread-blog"><span itemprop="title">ニコニコブログ</span></a>
					</li>
					<!-- Category -->
					<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="cat-parent">
							<span itemprop="title">ブログサイトマップ</span>
					</li>
				</ul>
			</div>
			<h1><?php echo get_the_title(); ?></h1>
		</div>
	</div>
<?php elseif(is_page() ): // 固定ページ?>
	<!-- 固定ページぱんくず
	================================================== -->
		<div id="pankuzu" style="margin-top: 5px;" class="cf">
		<ul class="bread_crumb">
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-1 top"><a itemprop="url" rel="home" href="<?php echo home_url('/'); ?>"><span itemprop="title">HOME</span></a></li>
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-2 sub"><span itemprop="title"><?php echo get_the_title(); ?></span></li>
		</ul>
		</div>
<?php elseif(is_category()): ?>
	<!-- カテゴリページぱんくず
	================================================== -->
		<div id="pankuzu" class="cf">
		<?php
		$category = get_the_category();
		$cat_id   = $category[0]->cat_ID;
		$cat_name = $category[0]->cat_name;
		$cat_slug = $category[0]->category_nicename;
		$link = get_category_link($cat_id);
		?>
		<ul class="bread_crumb">
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-1 top"><a itemprop="url" rel="home" href="<?php echo home_url('/'); ?>"><span itemprop="title">HOME</span></a></li>
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-2 sub"><a itemprop="url" rel="home" href="<?php echo get_page_link(34); ?>"><span itemprop="title">ニコニコブログ</span></a></li>
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-3 sub"><span itemprop="title"><?php echo $cat_name; ?></span></li>
		</ul>
		</div>
<?php elseif(is_tag()): ?>
	<!-- タグページぱんくず
	================================================== -->
		<div id="pankuzu" class="cf" style="    margin-bottom: -10px;">
		<?php
		$category = get_the_category();
		$cat_id   = $category[0]->cat_ID;
		$cat_name = $category[0]->cat_name;
		$cat_slug = $category[0]->category_nicename;
		$link = get_category_link($cat_id);
		?>
		<ul class="bread_crumb">
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-1 top">
			<a itemprop="url" rel="home" href="<?php echo home_url('/'); ?>"><span itemprop="title">HOME</span></a>
			</li>
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-2 sub">
			<a itemprop="url" rel="home" href="<?php echo get_page_link(34); ?>"><span itemprop="title">ニコニコブログ</span></a>
			</li>
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-3 sub">
			<a itemprop="url" rel="home" href="<?php echo $link; ?>"><span itemprop="title"><?php echo $cat_name; ?></span></a>
			</li>
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-4 sub tail current">
			<span itemprop="title"><?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo $tag->name . ' '; } } ?></span>
			</li>
		</ul>
		</div>
<?php elseif(is_search()): ?>
	<!-- サーチ
	================================================== -->
		<div id="pankuzu" class="cf">
		<ul class="bread_crumb">
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-1 top"><a itemprop="url" rel="home" href="<?php echo home_url('/'); ?>"><span itemprop="title">HOME</span></a></li>
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-2 sub"><a itemprop="url" rel="home" href="<?php echo get_page_link(34); ?>"><span itemprop="title">ニコニコブログ</span></a></li>
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-3 sub"><span itemprop="title">検索ページ</span></li>
		</ul>
		</div>
<?php elseif(is_archive( 'column' ) ): // コラムアーカイブページ?>
	<!-- コラムアーカイブぱんくず
	================================================== -->
		<div id="pankuzu" class="cf">
		<ul class="bread_crumb">
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-1 top"><a itemprop="url" rel="home" href="<?php echo home_url('/'); ?>"><span itemprop="title">HOME</span></a></li>
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-2 sub"><span itemprop="title">コラム</span></li>
		</ul>
		</div>
<?php elseif(is_page( '170' ) ): // パッケージ?>
	<!-- パッケージぱんくず
	================================================== -->
		<div id="pankuzu">
		<ul class="bread_crumb">
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-1 top"><a itemprop="url" rel="home" href="<?php echo home_url('/'); ?>"><span itemprop="title">HOME</span></a></li>
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="level-2 sub"><span itemprop="title"><?php echo get_the_title(); ?></span></li>
		</ul>
		</div>
<?php endif; ?>