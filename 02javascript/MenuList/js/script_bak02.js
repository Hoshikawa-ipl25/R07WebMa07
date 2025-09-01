// 教科書P.164～170 for文を使ってみてるあたりから

//#menuの<div>要素を代入
const menu = document.querySelector('#menu');

const lists = [
  'strawberry.jpg',
  'lime.jpg',
  'mango.jpg',
  'lemon.jpg',
  'fig.jpg',
  'apple.jpg',
];

//配列の個数を lists.length で確認
//for文で繰り返す回数の指定に使えそう
console.log(lists.length);


//中身のコンテンツのHTMLを入れておく
// ひとつずつ記述
// const content = `
// <div><img src="images/${lists[0]}" alt=""></div>
// <div><img src="images/${lists[1]}" alt=""></div>
// <div><img src="images/${lists[2]}" alt=""></div>
// <div><img src="images/${lists[3]}" alt=""></div>
// <div><img src="images/${lists[4]}" alt=""></div>
// <div><img src="images/${lists[5]}" alt=""></div>
// `;

//↑をfor文で記述
for (let i = 0; i < lists.length; i++) {
  const content = `<div><img src="images/${lists[i]}" alt=""></div>`;
  menu.insertAdjacentHTML('beforeend', content); //↑ここで作った<div>要素を挿入
}

// i = i + 1
// i += 1
// i++
// ↑３つとも、iを１ずつ増やす、の意味
// 
