const text = document.querySelector('#colorText');
const color = document.querySelector('#colorPicker');

//関数定義
const colorBg = () => {
  //選択した色を背景に設定
  document.body.style.backgroundColor = color.value;
  //text.style.color = color.value;

  //カラーコードが白だった時
  if (color.value === '#ffffff') {
    text.textContent = `カラーコード：${color.value}（White）`;
  }
  //カラーコードが黒だった時
  else if (color.value === '#000000') {
    text.textContent = `カラーコード：${color.value}（Black）`;
  }
  //カラーコードが赤だった時
  // else if (color.value === '#ff0000') {
  //   text.textContent = `カラーコード：${color.value}（Red）`;
  // }

  //それ以外の色の時
  else {
    text.textContent = `カラーコード：${color.value}`;
  }
};

//イベント「input」で関数「colorBg」を呼び出し
color.addEventListener('input', colorBg);
