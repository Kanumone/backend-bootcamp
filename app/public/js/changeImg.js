const mainImg = document.querySelector('.main-img');
const slider = document.querySelector('.slider');
const imgs = Array.from(slider.children);
imgs.forEach(img => {
  img.addEventListener('mouseover', () => {
    if (img.classList.contains('first')) mainImg.setAttribute('src', './images/main.webp');
    else mainImg.setAttribute('src', img.attributes[0].value);
  });
})
