const getScollPercent = () => {

  //スクロール量を取得
  const scrolled = window.scrollY;
  console.log(`${scrolled} スクロールされました`);

  // ページ全体の高さ
  const pageHeight = document.documentElement.scrollHeight;

  // 表示領域の高さ
  const viewHeight = document.documentElement.clientHeight;

  console.log(`ページの高さ：${pageHeight}、表示領域の高さ：${viewHeight}`);

}
window.addEventListener('scroll', getScollPercent);