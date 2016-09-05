<?php get_header(); ?>
<?php echo get_template_part( "parts/header_parts" ); ?>
		<?php get_template_part('parts/pankuzu_list'); ?>
<!--コンテンツ-->
<div id="content">
<div id="package">
	<article>
        <?php get_template_part('parts/each_exrpt_post'); ?>
        <?php get_template_part('parts/page_service_parts'); ?>
	    <aside class="subBox contactBox">
        <h3>結果につながるホームページをご提案します。</h3>
		<div class="single-widget go2top cf" style="    margin: 0px 0 5px 0;">
		<a href="<?php echo get_page_link(146); ?>" class="go2top-button-1"><div class="button">お見積り・お問い合わせ</div></a>
		<p>お気軽にお問い合わせください。</p>
		</div>
		</aside>
	</article><!--end article-->
</div>
<?php get_footer(); ?>