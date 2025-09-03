const menu = document.querySelector('#menu');
// console.log(menu);

const cafelists = [
  {
    name: 'コーヒー',
    imgFile: 'coffee.jpg',
    price: 400,

  },
  {
    name: 'カフェラテ',
    imgFile: 'cafelatte.jpg',
    price: 450,

  },
  {
    name: 'エスプレッソ',
    imgFile: 'espresso.jpg',
    price: 620,

  },
  {
    name: 'アイスコーヒー',
    imgFile: 'icecoffee.jpg',
    price: 420,

  },
  {
    name: 'ダージリンティー',
    imgFile: 'darjeelingtea.jpg',
    price: 480,

  },
  {
    name: 'ハーブティー',
    imgFile: 'herbtea.jpg',
    price: 500,

  },
  {
    name: 'オレンジジュース',
    imgFile: 'juice.jpg',
    price: 520,

  },

];
// console.log(cafelists.length);
for (let i = 0; i < cafelists.length; i++) {
  const menuItem = `<div><h2>${cafelists[i].name}</h2><img src="img/${cafelists[i].imgFile}"><p>${cafelists[i].price}円</p></div>`;
  menu.insertAdjacentHTML('beforeend', menuItem);
}