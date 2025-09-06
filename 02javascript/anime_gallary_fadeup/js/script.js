const items = document.querySelectorAll('.img-item');
console.log(items);

//様々な効果、初期値はCSSファイルの方も設定しつつ、ためしてみましょう
for (let i = 0; i < items.length; i++) {
  const keyframes = {
    //効果追加
    // rotate: ['-15deg', 0], // 傾いた状態から、まっすぐになる
    // scale: [1.1, 1],       // 少し拡大した状態から、デフォルトの大きさに
    filter: ['blur(20px)', 'blur(0)'],
  };

  const options = {
    duration: 2000,
    fill: 'forwards',
    delay: i * 300,
  };

  items[i].animate(keyframes, options);
}