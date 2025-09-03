// 教科書 P.222 背景色が伸びる見出し
const headeing = document.querySelector('#heading');

const keyframes = {
  color: ['transparent', '#fff'],
  backgroundPosition: ['100% 0', '0 0'],
};


const options = {
  duration: 1000,
  easing: 'ease',
};


headeing.animate(keyframes, options);
