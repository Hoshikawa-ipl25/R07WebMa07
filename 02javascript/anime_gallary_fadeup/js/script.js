const items = document.querySelectorAll('.img-item');
console.log(items);


for (let i = 0; i < items.length; i++) {
  const keyframes = {
    opacity: [0, 1],
  };

  const options = {
    duration: 600,
    fill: 'forwards',
    delay: i * 300,
  };

  items[i].animate(keyframes, options);
}