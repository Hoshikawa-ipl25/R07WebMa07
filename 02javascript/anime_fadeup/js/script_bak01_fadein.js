// 見出しをアニメーション(下からだんだんでてくる)
const heading = document.querySelector('#heading');

const keyframes = {
  opacity: [0, 1],
  translate: ['0px 50px', 0],
}

const options = {
  //アニメーションの動きの詳細をここに記述
  duration: 2000,
  easing: 'ease',
  // direction: 'reverse',
  // iterations: Infinity,

};

//アニメーションをするためのメソッド
// 動かす要素.animate('動かす内容（キーフレームの設定）','動きの詳細やタイミングの設定')
heading.animate(keyframes, options);