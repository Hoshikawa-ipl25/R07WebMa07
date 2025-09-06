//ハンバーガーボタンをクリックしたら、bodyタグにis-nav-openを付け外し
$('.site-header-navbtn').on('click', () => {
    $('body').toggleClass('is-nav-open');
});

//ドロワーメニューの空いているところも、クリックorタップすると
// is-nav-openが外れてメニュ－がしまわれる
$('.site-header-nav').on('click', () => {
    $('body').removeClass('is-nav-open');
});
