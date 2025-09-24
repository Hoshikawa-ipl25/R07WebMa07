const about_ob_func = (entries) => {
    for (entry of entries) {
        if (entry.isIntersecting) {
            entry.target.classList.add('on');
        }
    }
};

const about_ob_param = {
    rootMargin: '-150px',
};

const about_ob = new IntersectionObserver(about_ob_func, about_ob_param);
const img_wrap_arr = document.querySelectorAll('.img_wrap');

// for (const img_wrap of img_wrap_arr) {
//   about_ob.observe(img_wrap);
// }
img_wrap_arr.forEach((img_wrap) => about_ob.observe(img_wrap));

// for (const img_wrap of img_wrap_arr) {
//   about_ob.observe(img_wrap);
// }

// 上の for of 文でやっていることを、forEash文で書くとこの記述に
// img_wrap_arr.forEach(img_wrap => {
//   about_ob.observe(img_wrap)
// });

// forEachは、配列の要素数分、順番に処理を行うメソッド
// 構文は  配列.forEach(関数(引数){ 処理内容 });
// 引数は、配列の要素が順番に入ってくる

// さらに、行う処理の記述が１行などの場合は、{}を省略できるので↓の用に書ける
img_wrap_arr.forEach((img_wrap) => about_ob.observe(img_wrap));
