<?php get_header(); ?>
<?php echo get_template_part( "parts/header_parts" ); ?>
		<?php get_template_part('parts/pankuzu_list'); ?>
<!--コンテンツ-->
<div id="content">
	<?php get_template_part('parts/column_the_content'); ?>
	<article>
		<h1><?php echo get_the_title(); ?></h1>
        <?php get_template_part('parts/each_exrpt_post'); ?>
        <?php get_template_part('parts/page_service_parts'); ?>
	</article><!--end article-->
		<div class="single-widget go2top cf" style="    margin: 0px 15px 15px 15px;">
		<a href="<?php echo home_url('/'); ?>" class="go2top-button-1"><div class="button">ホームへ戻る</div></a>
		</div>
<?php get_footer(); ?>