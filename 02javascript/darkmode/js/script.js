const btn = document.querySelector('#btn');
btn.addEventListener('click', () => {
  document.body.classList.toggle('dark-theme');

  //もし　（ボタンのテキストがダークモードである）{
  if (btn.textContent === 'ダークモードにする') {

    //ボタンのテキスト＝「ライトモードにする」  
    btn.textContent = 'ライトモードにする'

    //そうでない場合
  } else {
    btn.textContent = 'ダークモードにする'
  }

});
