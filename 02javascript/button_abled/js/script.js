//チェックボックスの要素
const isAgreed = document.querySelector('#check');

//ボタンの要素
const btn = document.querySelector('#btn');

isAgreed.addEventListener('change', () => {
  console.log(isAgreed.checked);

  // // チェックボックスにチェックが入っているなら
  // if (isAgreed.checked === true) {
  //   btn.disabled = false;
  // }
  // // そうじゃないなら
  // else {
  //   btn.disabled = true;
  // }

  //↑をまとめて、trueかfaulseを直接代入
  //NOTの意味である「!」を頭につけて、反対の意味にしている（教科書P.128）
  btn.disabled = !isAgreed.checked;

});