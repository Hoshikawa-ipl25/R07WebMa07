//監視対象が範囲内に現れたら実行する動作
const showKirin = (entries) => {
  const keyframes = {
    opacity: [0, 1],
    translate: ['200px 0', 0]
  }
  entries[0].target.animate(keyframes, 600);
  // console.log(entries[0].target);
};
// 関数の実行確認
// showKirin();

//監視ロボットの設定
const kirinObserver = new IntersectionObserver(showKirin);

// #kirinを監視するように指示して起動
kirinObserver.observe(document.querySelector('#kirin'));