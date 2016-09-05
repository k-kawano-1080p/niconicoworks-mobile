<style type="text/css">
	ul#menu2 li a
	{
		color: #fff;
		font-family: 'Hiragino Kaku Gothic Pro', Meiryo, 'MS PGothic', sans-serif;
	}
	ul#menu2 li a:hover
	{
		color: #1288ba;
	}
    ul#menu2 li i
    {
        width: 36px;
        float: left;
        margin-top: 11px;
    }
</style>
<div class="drawr">
    <p class="menu-logo">
        <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/sitelogo_menu.png" alt="SOHO・フリーランスのホームページ制作事務所 ニコニコワークス" width="160" height="44" /></a>
    </p>
    <ul id="menu2" class="cf">
        <li><a href="<?php echo get_page_link(132); ?>"><i class="fa fa-building"></i>ニコニコワークスについて</a></li>
        <li><a href="<?php echo get_page_link(135); ?>"><i class="fa fa-cubes"></i>制作実績</a></li>
        <li><a href="<?php echo get_page_link(138); ?>"><i class="fa fa-desktop"></i>制作の流れ</a></li>
        <li><a href="<?php echo get_page_link(141); ?>"><i class="fa fa-question-circle"></i>よくある質問</a></li>
        <li><a href="<?php echo get_page_link(143); ?>"><i class="fa fa-jpy"></i>料金案内</a></li>
        <li><a href="<?php echo get_page_link(170); ?>"><i class="fa fa-hand-o-right"></i>料金案内で迷ったらコレ！</a></li>
        <li><a href="<?php echo get_page_link(157); ?>"><i class="fa fa-hand-o-right"></i>ショッピングサイト構築</a></li>
        <li><a href="<?php echo get_page_link(146); ?>"><i class="fa fa-fax"></i>お問い合わせ</a></li>
        <li><a href="<?php echo get_page_link(34); ?>"><i class="fa fa-pencil-square-o"></i>ニコニコブログ</a></li>
        <li><a href="<?php echo $url = get_post_type_archive_link( 'column' ); ?>"><i class="fa fa-comment"></i>近況報告</a></li>
        <li><a href="<?php echo get_page_link(321); ?>"><i class="fa fa-check-square-o"></i>ブログサイトマップ</a></li>
        <li><a href="<?php echo home_url('/'); ?>"><i class="fa fa-home"></i>ホームへ戻る</a></li>
    </ul>
</div>