<!-- ウィジェット開始-->
<div id="sm-widget">
      <?php
      if (is_active_sidebar('sidebar-1')):
        dynamic_sidebar('sidebar-1');
    else:
        ?>
    <div class="widget">
        <h2>No Widget</h2>
        <p>ウィジットは設定されていません。</p>
    </div>
    <?php endif;?>
</div>
<!-- ウィジェット終了 -->
