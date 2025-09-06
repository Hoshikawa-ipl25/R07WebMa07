// 背景色や文字色でセレクタの選択範囲を確認
// $('nav').css('background-color', 'pink');
// $('.item').css('color', 'red');
// $('li::marker').css()
// $('#onepoint').css('color', 'blue');

// $('ul.list-list li').css('background-color', 'skyblue');



//枠線をつけて範囲を確認してみよう
$(function () {
  // 1つめのul直下のli要素にだけ枠線をつけてみる
  $('ul.list > li').css("border", "1px solid pink");
  $('ul.list li').css('color', 'red');
});

// $(function () {
//   // .item1_0と同じ階層で、すぐ後の要素のみ
//   $('.item1_0 ~ li').css("border", "1px solid pink");
// });