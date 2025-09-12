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