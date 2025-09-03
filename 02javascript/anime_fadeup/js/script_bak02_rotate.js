// 見出しをアニメーションさせる（くるっと回転）
const heading = document.querySelector('#heading');

const keyframes = {
  // opacity: [0, 1],
  rotate: ['x 360deg', 0],
  // rotate: ['y 720deg', 0],
}

const options = {
  //アニメーションの動きの詳細をここに記述
  duration: 1000,
  easing: 'ease',


};

//アニメーションをするためのメソッド
// 動かす要素.animate('動かす内容（キーフレームの設定）','動きの詳細やタイミングの設定')
heading.animate(keyframes, options);