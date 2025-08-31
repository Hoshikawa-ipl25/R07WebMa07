const text = document.querySelector('#colorText');
const color = document.querySelector('#colorPicker');

//関数定義
const colorBg = () => {
  //選択した色を背景に設定
  document.body.style.backgroundColor = color.value;

  //（おまけ）選択した色を文字色に設定するとしたら(body全体のテキストcolorを設定)
  // document.body.style.color = color.value;

  /////////////////////////////////////////////////////////////
  //CSSで書くときは、こういう風に書く場所をJavascriptで書くと… 
  // 上のようになります
  // body{
  //   backgroud-color: #000000;
  //   color : #000000;
  // }
  // カラーコードを#000000 のように書く代わりに、
  // color.value というデータの入った定数を指定しています
  //////////////////////////////////////////////////////////////


  // 定数に入れた #colorText の部分だけの文字の色を変える、という指定なら↓こう書けます
  // こっちのほうが指示が丁寧ですね（body全体の文字の色を変えようとするより、その部分だけの変更、と的確に指定できます）
  text.style.color = color.value;


  //カラーコードの文字表示
  text.textContent = `カラーコード：${color.value}`;

  // テンプレート文字列（テンプレートリテラル）
  // バッククォート（`）で囲んで
  // 文字列と、定数や変数は ${ 定数名 }で記述すると
  // そのままの文章を表示したりすることができます。


};

//イベント「input」で関数「colorBg」を呼び出し
color.addEventListener('input', colorBg);


//無名関数：関数に名前をつけずに、そこに直接処理を書く方法
// color.addEventListener('input', () => {
//   text.textContent = `カラーコード：${color.value}`;
// });
