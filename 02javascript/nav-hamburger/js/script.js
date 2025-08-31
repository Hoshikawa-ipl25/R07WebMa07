//global navi(vanillaJS)

// jsで操作するid名のついた要素を定数へ取得
const hamBtn = document.querySelector('#js-gnav-button');
const gnav = document.querySelector('#js-gnav');
const gnavList = document.querySelector('#js-gnav-list');

// ハンバーガーアイコンを押すたびに is-open というクラス名を付与
hamBtn.addEventListener('click', () => {
  gnav.classList.toggle('is-open');
});

// id名が #js-gnav-list のリスト（開いているナビメニュー）の範囲をクリックした時は、
// is-openクラスを削除
gnavList.addEventListener('click', () => {
  gnav.classList.remove('is-open');
});