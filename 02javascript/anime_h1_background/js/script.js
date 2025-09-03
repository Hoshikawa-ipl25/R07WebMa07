// 教科書 P.223 ふよふよ動く見出しを作る
const headeing = document.querySelector('#heading');

const keyframes = {
  borderRadius: [
    '20% 50% 50% 70% / 50% 50% 70% 50%',
    '50% 20% 50% 50% / 40% 40% 60% 60%',
    '50% 40% 20% 40% / 40% 50% 50% 80%',
    '50% 50% 50% 20% / 40% 40% 60% 60%',
  ],
  // border-radiusで作る流体シェイプ（Fluid Shap、Blob）についての解説記事
  // https://www.webcreatorbox.com/blog/border-radius
};

const options = {
  duration: 8000,
  direction: 'alternate',
  iterations: Infinity,
};

headeing.animate(keyframes, options);
