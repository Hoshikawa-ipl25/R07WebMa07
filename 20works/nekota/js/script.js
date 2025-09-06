//ハンバーガーボタンをクリックしたら、bodyタグにis-nav-openを付け外し
$('.grobal_nav_btn').on('click', () => {
  $('body').toggleClass('is-nav-open');
});

//ドロワーメニューの空いているところも、クリックorタップすると
// is-nav-openが外れてメニュ－がしまわれる
$('.grobal_nav').on('click', () => {
  $('body').removeClass('is-nav-open');
});