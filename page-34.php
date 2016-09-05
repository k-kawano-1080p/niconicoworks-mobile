<?php get_header(); ?>
<?php echo get_template_part( "parts/header_parts" ); ?>
<?php get_template_part('parts/pankuzu_list'); ?>
<!--コンテンツ-->
<div id="content">
	<article class="blog-home">
		<?php get_template_part('parts/antena_parts'); ?>
		<?php get_template_part('parts/content_ad'); ?>
		<?php get_template_part('parts/each_exrpt_post'); ?>
		<?php get_template_part('parts/content_ad'); ?>
		<?php get_template_part('parts/widget'); ?>
	</article>
<?php get_footer(); ?>