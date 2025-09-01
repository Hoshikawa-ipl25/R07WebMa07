//P.175～「オブジェクト」の仕組みを確認中
//配列の箱に、インデックス番号じゃなくて、名前（キー）をつけ、中身（値）を入れていける


//#menuの<div>要素を代入
const menu = document.querySelector('#menu');

const strawberry = {
  name: 'イチゴ', // 「キー」:「値」, の組み合わせで１セット（プロパティ）
  img: 'strawberry.jpg',
  price: '450',
};

const key = 'name';
console.log(strawberry.name);
console.log(strawberry[key]);

const lists = [
  'strawberry.jpg',
  'lime.jpg',
  'mango.jpg',
  'lemon.jpg',
  'fig.jpg',
  'apple.jpg',
];


//for文でHTMLを出力 lists.length には、要素の個数が入っている
for (let i = 0; i < lists.length; i++) {
  const content = `<div><img src="images/${lists[i]}" alt=""></div>`;
  menu.insertAdjacentHTML('beforeend', content);

}