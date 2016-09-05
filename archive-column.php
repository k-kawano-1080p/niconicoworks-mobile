<?php get_header(); ?>
<?php echo get_template_part( "parts/header_parts" ); ?>
<?php get_template_part('parts/pankuzu_list'); ?>
<!--コンテンツ-->
<div id="content">
	<article class="blog-home">
		<?php echo get_template_part('parts/each_exrpt_post'); ?>
	</article>
		<div class="single-widget go2top cf" style="    margin: 0px 15px 15px 15px;">
		<a href="<?php echo home_url('/'); ?>" class="go2top-button-1"><div class="button">ホームへ戻る</div></a>
		</div>
<?php get_footer(); ?>