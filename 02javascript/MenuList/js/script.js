//P.194～196「オブジェクト」の記述をスッキリさせる

//#menuの<div>要素を代入
const menu = document.querySelector('#menu');

// オブジェクトが入った配列を設定
const lists = [
  {
    name: 'イチゴ',
    img: 'strawberry.jpg',
    price: '450',
  },
  {
    name: 'ライム',
    img: 'lime.jpg',
    price: '400',
  },
  {
    name: 'マンゴー',
    img: 'mango.jpg',
    price: '500',
  },
  {
    name: 'レモン',
    img: 'lemon.jpg',
    price: '400',
  },
  {
    name: 'イチジク',
    img: 'fig.jpg',
    price: '500',
  },
  {
    name: 'リンゴ',
    img: 'apple.jpg',
    price: '400',
  },
];


//for文でHTMLを出力 lists.length には、要素の個数が入っている
for (let i = 0; i < lists.length; i++) {

  // 呼んだオブジェクトのプロパティを一旦定数に格納すると見やすく
  // const name = lists[i].name;
  // const img = lists[i].img;
  // const price = lists[i].price;

  // ↑これを、分割代入で記述↓
  const { name, img, price } = lists[i];

  const content = `<div><img src="images/${img}" alt=""><h2>${name}</h2><p>${price}円</p></div>`;
  menu.insertAdjacentHTML('beforeend', content);

}