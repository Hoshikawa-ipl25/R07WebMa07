$('.slider').slick({
  arrows: false,
  autoplay: true,
  centerMode: true,
  centerPadding: '30%',
  autoplaySpeed: 0,
  cssEase: 'linear',
  speed: 10000,
  pauseOnFocus: false,
  pauseOnHover: false,
  responsive: [
    {
      // 519px以下の画面サイズの設定
      breakpoint: 519,
      settings: {
        centerPadding: '16px',
      }
    }
  ]
});

// Slick-Slider カスタマイズ用オプションまとめ一覧
// https://junpei-sugiyama.com/slick-option/


//-----------------------------------------------
//各セクションのタイトルをスクロールに合わせて表示する
//-----------------------------------------------

//-----------------------------------------------
// 画面スクロールで対象物が画面に入ってきた時にプログラムが動く
// observer設定セット
//-----------------------------------------------
// const element_ob_func(監視対象が入った時に動く関数) = (entries) => {
//  if (entry of entries) {
//    console.log('対象が監視エリアに内に存在中');
//  }
// };

// const element_param(オブザーバの設定が入ってるオブジェクト配列名) = {
//    オブザーバーの設定を記述（ rootMargin: '300px',とか）
// };

// const element_ob（オブザーバに名前を付けて設置） = new IntersectionObserver(element_ob_func(監視対象が入った時に動く関数名), element_param(オブザーバの設定が入ってるオブジェクト配列名));
// element_ob（設置したオブザーバ）.observe(document.querySelector('#element_id_name(対象の要素（エレメント）をセレクタで指定)'));

const title_ob_func = (entries) => {
  if (entries[0].isIntersecting) {
    console.log('監視中');
  }
};

const title_param = {
  // オブザーバーの設定を後で書くかも
};

const title_ob = new IntersectionObserver(title_ob_func, title_param);
title_ob.observe(document.querySelector('#content_title_menu'));
