$(function($) {
    WindowHeight = $(window).height();
    $('.drawr').css('height', WindowHeight); //メニューをWindowの高さいっぱいにする
    $(document).ready(function() {
        $('.btn2').click(function(){ //クリックしたら
            $('.drawr').animate({width:'toggle'}); //animateで表示・非表示
            $(this).toggleClass('peke'); //toggleでクラス追加・削除
        });
    });
        // fixed footer
      var fbtArea = $('.menubtn');
      fbtArea.hide();
      $(window).scroll(function () {
          if ($(this).scrollTop() > 2) {
              fbtArea.fadeIn();
          } else {
              fbtArea.fadeOut();
          }
      });
      $(".cmn_footlink_in").hide();



});