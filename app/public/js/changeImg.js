const mainImg = document.querySelector('.main-img');
const mainImgSrc = mainImg.getAttribute('src');
const slider = document.querySelector('.slider');
const imgs = Array.from(slider.children);
imgs.forEach(img => {
  const imgSrc = img.getAttribute('src');
  img.addEventListener('mouseover', () => {
    mainImg.setAttribute('src', imgSrc);
  });
  img.addEventListener('mouseout', () => {
    mainImg.setAttribute('src', mainImgSrc);
  });
})
