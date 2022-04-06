jQuery(document).ready(function() {

    // ハンバーガーメーニュー
    jQuery("#js-header-btn").click(function() {
        jQuery(this).toggleClass("active");
        jQuery("#js-header-nav").toggleClass("active");
        jQuery("#js-burger-musk").toggleClass("active");

        if(jQuery(this).hasClass("active")) {
            jQuery("#js-burger-musk").fadeIn(200);
        } else {
            jQuery("#js-burger-musk").fadeOut(200);
        };
    });
    
    // スライダー
    jQuery('.slider').slick({
        autoplay:true, // 自動再生を設定
        autoplaySpeed:3000, // スライド切り替えの時間を設定
        arrows: false,
    });

    // アコーディオン
    jQuery(document).on('click', '#accordion-head', function() {
        jQuery(this).toggleClass('click');
        jQuery(this).next().slideToggle();
    });

    // セレクトボックス
    const Target = jQuery('.wpcf7-select');
    jQuery(Target).on('change', function(){
      if (jQuery(Target).val() !== ""){
        jQuery(this).removeClass('wpcf7-select');
      } else {
        jQuery(this).addClass('wpcf7-select');
      }
    });

    // スムーススクロール
    jQuery('a[href^="#"]').click(function() {

      // スクロールスピード
      let speed = 300;
      // hrefで指定されたidを取得
      let id = jQuery(this).attr("href");
      // idのの値が#だけだったらターゲットをhtmlタグにしてtopに戻るようにする
      let target = jQuery("#" == id ? "html" : id);
      // ページのトップを基準にターゲットの位置を取得
      let position = jQuery(target).offset().top;
      // ターゲットの位置までspeedの速度で移動
      if ("fixd" !== jQuery(".header").css("position")) {
          position = jQuery(target).offset().top;
      }
      if (0 > position) {
          position= 0;
      }
      jQuery("html, body").animate(
          {
              scrollTop: position - jQuery("#js-header").outerHeight()
          },
          speed
      );
      return false;
  });

  //スクロールしたらボタン表示
  let topBtn = jQuery('#page-top');    
  topBtn.hide();
  jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 400) {
          topBtn.fadeIn();
      } else {
          topBtn.fadeOut();
      }
  });
        
});