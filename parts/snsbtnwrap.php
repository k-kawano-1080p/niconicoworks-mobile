<style>
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css");
ul.snsbtnwrap{list-style: none;display: flex;justify-content: center;display: -webkit-flex;-webkit-justify-content: center;margin: 0;padding: 0;flex-wrap: wrap;-webkit-flex-wrap:wrap;}
ul.snsbtnwrap a{text-decoration:none;border: none;}
li.btn-comm{font: normal normal normal 14px/1 FontAwesome;padding: 10px 4px 6px 4px;margin:7px;border-radius: 3px;display: flex;flex-direction: column;display: -webkit-flex;-webkit-flex-direction: column;width: 66px;}
li.btn-comm span{text-decoration: none;margin: 9px 0px 0px 0px;padding: 4px 7px;color: #fff;border-radius: 20px;background-color: rgba(0,0,0,0.2);font-size: 11px;text-align: center;line-height:15px;}
li.btn-tw{background-color: #55ACEE;}li.btn-tw:before{content: "\f099";color: #55ACEE;}/*twitter*/
li.btn-fb{background-color: #3b5998;}li.btn-fb:before{content: "\f230";color: #3b5998;}/*facebook*/
li.btn-gp{background-color: #cc3732;}li.btn-gp:before{content: "\f0d4";color: #cc3732;}/*google plus*/
li.btn-hb{background-color: #008FDE;}li.btn-hb:before{content: "B!";font-family: Verdana;font-weight: bold;;color: #008FDE;}/*hatebu*/
li.btn-pk{background-color: #EF3E56;}li.btn-pk:before{content: "\f265";color: #EF3E56;}/*pocket*/
li.btn-fd{background-color: #6cc655;}li.btn-fd:before{content: "\f1d8";color: #6cc655;}/*feedly*/
li.btn-comm:before{text-align: center;font-size: 20px;width: 40px;height: 40px;background-color: #fff;border-radius: 50%;margin: 0px auto;line-height: 40px;transition: all .3s ease;}
li.btn-tw:hover:before{box-shadow:0 0 0 2px #55ACEE, 0 0 0 5px #fff;}
li.btn-fb:hover:before{box-shadow:0 0 0 2px #3b5998, 0 0 0 5px #fff;}
li.btn-gp:hover:before{box-shadow:0 0 0 2px #cc3732, 0 0 0 5px #fff;}
li.btn-hb:hover:before{box-shadow:0 0 0 2px #008FDE, 0 0 0 5px #fff;}
li.btn-pk:hover:before{box-shadow:0 0 0 2px #EF3E56, 0 0 0 5px #fff;}
li.btn-fd:hover:before{box-shadow:0 0 0 2px #6cc655, 0 0 0 5px #fff;}
</style>
<ul class="snsbtnwrap">
    <a href="https://twitter.com/share?text=<?php the_title() ?>&url=<?php the_permalink() ?>"><li class="btn-tw btn-comm"><span>Twitter</span></li></a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>&t=<?php the_title() ?>"><li class="btn-fb btn-comm"><span>Facebook</span></li></a>
    <a href="https://plus.google.com/share?url=<?php the_permalink() ?>"><li class="btn-gp btn-comm"><span>Google+</span></li></a>
    <a href="https://b.hatena.ne.jp/entry/<?php the_permalink() ?>"><li class="btn-hb btn-comm"><span>はてぶ</span></li></a>
    <a href="https://getpocket.com/edit?url=<?php the_permalink() ?>"><li class="btn-pk btn-comm"><span>Pocket</span></li></a>
    <a href="https://feedly.com/index.html#subscription%2Ffeed%2F<?php urlencode(bloginfo('rss2_url')); ?>"><li class="btn-fd btn-comm"><span>Feedly</span></li></a>
</ul>
