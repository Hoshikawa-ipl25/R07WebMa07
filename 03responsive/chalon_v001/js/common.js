// ハンバーガーメニューのトグル
$('.ham_menu').on('click', () => {
  $('header').toggleClass('on');
});

// メニューのどこかをクリックで、メニュー閉じる
$('header .header_inner nav').on('click', () => {
  $('header').removeClass('on');
});

// 画面をリサイズしたら閉じる
$(window).on('resize', () => {
  $('header').removeClass('on');
});