<?php get_header(); ?>
<style>
	.txt-ranking { overflow: hidden;     margin: -1em  -1em 1em -1em;}
</style>
<?php echo get_template_part( "parts/header_parts" ); ?>
<div id="content">
	<article>
		<?php get_template_part('parts/antena_parts'); ?>
		<?php get_template_part('parts/content_ad'); ?>
		<?php get_template_part('parts/pankuzu_list'); ?>
		<?php get_template_part('parts/each_exrpt_post'); ?>
		<?php get_template_part('parts/content_ad'); ?>
		<?php get_template_part('parts/widget'); ?>
		<?php get_template_part('parts/blog_top_btn'); ?>
	</article>
<?php get_footer(); ?>