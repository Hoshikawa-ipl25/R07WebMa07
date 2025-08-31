// console.log('準備完了！');
console.log(document.querySelector('#colorPicker').value);

document.querySelector('#colorText').textContent = document.querySelector('#colorPicker').value;
//HTMLドキュメントの、#colorTextと付けたセレクタを指定して、そこのテキストのコンテンツをイコールの先の文字列に置き換える


// HTMLタグも入れたい場合は innerHTML というのが使える
// document.querySelector('#colorText').innerHTML = '<h1>カラーコード：</h1>';
//↑h1タグが反映されて「カラーコード：」の文字が大きい字などで表示される

// textContentで指定しておいて、<h1>タグ入りの文字列を渡すと、<h1>の部分も文章として表示される。<h1>タグとして認識されない。
// document.querySelector('#colorText').textContent = '<h1>カラーコード：</h1>';
//↑「<h1>カラーコード：<h1>」と画面に表示される