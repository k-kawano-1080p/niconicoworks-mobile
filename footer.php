    <div id="footer">
        <div class="fleft">
            <a href="<?php echo home_url('/'); ?>" class="home_icon">HOME</a>
        </div>
        <div class="fright">
            <a id="page-top" class="backtotop">PAGE TOP</a>
        </div>
        <br class="fix" />
    </div>
    <p class="copy">COPYRIGHT&reg;<?php the_time('Y'); ?> NICONICOWORKS</p>
</div>
<!--end content-->
    <p class="menubtn"><a class="btn2"></a></p>
    <?php echo get_template_part( "parts/menu_parts" ); ?>
<?php wp_footer(); ?>
</body>

</html>