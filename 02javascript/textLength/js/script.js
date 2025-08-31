const text = document.querySelector('#text');
const count = document.querySelector('#count');

text.addEventListener('keyup', () => {
  //キー入力された時にすること
  count.textContent = text.value.length;

  if (text.value.length > 100) {
    //alertクラスを加える
    count.classList.add('alert');
  } else {
    //alertクラスをはずす
    count.classList.remove('alert');
  }
});

