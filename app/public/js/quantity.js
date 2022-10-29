const buyButton = document.querySelector('.product-info__button_primary');
const quantityButtons = document.querySelectorAll('.product-info__quantity button');
const quantityValue = document.querySelector('.quantity');
const popup = $('.notification');

quantityButtons[0].addEventListener('click', () => {
  quantityValue.value--;
  quantityButtons[0].disabled = quantityValue.value <= 1;
})
quantityButtons[1].addEventListener('click', () => {
  quantityValue.value++;
  quantityButtons[0].disabled = quantityValue.value <= 1;
})

buyButton.addEventListener('click', () => {
  popup.text(`В корзину добавлено ${quantityValue.value} товаров`);
  popup.fadeIn();
  setTimeout(() => {
    popup.fadeOut();
  }, 1000);
})


