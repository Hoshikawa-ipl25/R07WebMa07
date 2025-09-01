const getScollPercent = () => {

  //スクロール量を取得
  const scrolled = window.scrollY;
  // console.log(`${scrolled} スクロールされました`);

  // ページ全体の高さ
  const pageHeight = document.documentElement.scrollHeight;

  // 表示領域の高さ
  const viewHeight = document.documentElement.clientHeight;

  //取得した値をコンソールで確認用↓ 
  //console.log(`ページの高さ：${pageHeight}、表示領域の高さ：${viewHeight}`);

  // スクロール量を%で＝スクロール量 ÷（ページ全体の高さ-表示画面の高さ）× 100
  const percentage = scrolled / (pageHeight - viewHeight) * 100;
  // console.log(percentage);

  //プログレスバーに幅をwidthで設定
  document.querySelector('#bar').style.width = `${percentage}%`;

};

//作った関数 getScollPercent は、画面をスクロールするたびに実行
window.addEventListener('scroll', getScollPercent);