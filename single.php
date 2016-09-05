<?php get_header(); ?>
<?php echo get_template_part( "parts/header_parts" ); ?>
<div id="content">
	<article>
	<?php get_template_part('parts/antena_parts'); ?>
	<?php get_template_part('parts/content_ad'); ?>
		<?php get_template_part('parts/pankuzu_list'); ?>
		<?php get_template_part('parts/each_exrpt_post'); ?>
		<div class="postinfo">
		<?php the_time('Y年m月d日') ?> │ カテゴリー：<?php the_category(', ') ?>
		</div>
		<?php SNS_btn_horizontal_bottom() ?>
		<?php get_template_part('parts/content_ad'); ?>
		<?php get_template_part('parts/peji_link'); ?>
		<?php get_template_part('parts/kanren_kiji'); ?>
		<?php get_template_part('parts/widget'); ?>
		<?php get_template_part('parts/blog_top_btn'); ?>
	</article>
<?php get_footer(); ?>