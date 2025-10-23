const about_ob_func = (entries) => {
  for (entry of entries) {
    if (entry.isIntersecting) {
      entry.target.classList.add('on');
    }
  }
}

const about_ob_param = {
  rootMargin: '-150px',
};

const about_ob = new IntersectionObserver(about_ob_func, about_ob_param);
const img_wrap_arr = document.querySelectorAll('.img_wrap');

// for (const img_wrap of img_wrap_arr) {
//   about_ob.observe(img_wrap);
// }
img_wrap_arr.forEach(img_wrap => about_ob.observe(img_wrap));


