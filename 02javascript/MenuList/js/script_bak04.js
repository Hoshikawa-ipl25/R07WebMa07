//P.186～193「オブジェクト」を配列に入れていく

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
// console.log(lists[2].name);

//for文でHTMLを出力 lists.length には、要素の個数が入っている
for (let i = 0; i < lists.length; i++) {
  const content = `<div><img src="images/${lists[i].img}" alt=""><h2>${lists[i].name}</h2><p>${lists[i].price}円</p></div>`;
  menu.insertAdjacentHTML('beforeend', content);

}