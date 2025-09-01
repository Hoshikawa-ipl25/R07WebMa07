//教科書P.149～161までの内容のメモ付きjavascript


//#menuの<div>要素を代入
const menu = document.querySelector('#menu');

// 配列「lists」を宣言して、ファイル名を入れていく
const lists = [
  'strawberry.jpg',
  'lime.jpg',
  'mango.jpg',
  'lemon.jpg',
  'fig.jpg',
  'apple.jpg',
];
//list[0]には'strawberry.jpg'が入っています。
console.log(lists[0]);


//中身のコンテンツのHTMLを入れていく
// ひとつずつ記述した場合↓
const content = `
<div><img src="images/${lists[0]}" alt=""></div>
<div><img src="images/${lists[1]}" alt=""></div>
<div><img src="images/${lists[2]}" alt=""></div>
<div><img src="images/${lists[3]}" alt=""></div>
<div><img src="images/${lists[4]}" alt=""></div>
<div><img src="images/${lists[5]}" alt=""></div>
`;

// 指定した要素のテキストを入れ替えたい記述を
// menu.textContent = content;
// これで書くと、textContentは、タグを書いても、文章として認識されてしまう

// ↓insertAdjacentは、HTMLタグをタグとして認識してHTMLに挿入してくれる
menu.insertAdjacentHTML('beforeend', content);