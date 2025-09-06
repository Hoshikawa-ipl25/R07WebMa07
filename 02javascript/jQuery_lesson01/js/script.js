// クラス名 temperature の文字の色colorを変えたい

//JavaScriptの書き方
// const temperature = document.querySelector('.temperature');
// temperature.style.color = '#ff0000';


//jQueryの、セレクタで指定してCSSプロパティを変える書き方
//$('セレクタ').css('プロパティ名','設定値');
//   ↓
// $('.temperature').css('color', '#ff0000');

//------------------------------------------------------------------------

//メソッドチェーン　（メソッドを . でつないで指定していく事ができる）
// $('.temperature').css('color', '#ff0000').fadeOut('slow');

// オブジェクトリテラルを使った書き方
$('.temperature')
  .css({
    'color': 'red',
    'font-weight': 'bold',
    'background-color': 'pink', // ハイフンつなぎはクォーテーションで囲む
  })
  .fadeOut('slow');