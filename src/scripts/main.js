const selectors = {
  productInfo: {
     title: '#buy-form .product-block .product-name', // Обращение к классу по иерархии как в css
    price: '#buy-form .product-block .product-price',
    total: '#buy-form .product-block .product-total',
  },
  quantityField: '.quantity-field',
  productField: '#buy-form .product',
  additionsField: '#buy-form .additions-check',
  additionsQntyField: '#buy-form .additions-qnty',
  additionsTotalField: '.additions-total',
  finalPrice: '#buy-form .final-price'
};

//Таймер на алерт --
$(document).ready(function() {
  const $alert = $('.alert.notification');

  if (typeof $alert !== 'undefined') {
    setTimeout(() => $alert.remove(), 3000)
  }
});


// Let = Создание переменной $ = Обращение к Jquery (document) = действия после загрузки страницы
$(document).on('click', '.price-item', function (e){ //обращение к документу(странице) по клику 'class - (любое имя)' запускаем функцию.=>

  let data = $(this).data(); // выводим дата атрибуты из поля Data (массив с данными). this -> указатель на обьект,
  let name = $(this).find('h4').text(); // ищем содержимое в теге H4(может быть любой тег или класс )
  let price = $(this).find('.price').text(); // поиск по классу как и по тегу

  // Получаем jquery обьект(поэтому через $) через форму(обращение к id формы )
  // '#' - при обращении к id \ '.' - при обращении к классу \ ' ' - при обращении к тегу
  let $form = $('#buy-form');
  // let quantity = $form.find(selectors.quantityField).val();


  $(selectors.productInfo.title).html(`<b>${name}</b>`);
  $(selectors.productInfo.price).text(price);
  $(selectors.productField).val(data.id);


  calculateTotal()
});

$(document).on('change', selectors.additionsField, function () {
  let field = $(this)[0];
  let qnty = 0;
  let singlePrice = parseFloat($(this).parent().find('.price').text());
  let $total = $(this).parent().find(selectors.additionsTotalField);

  if ($(field).is(':checked')) {
    qnty = 1;
    $(qnty).trigger('change');
  }else {
    qnty = 0;
  }

  let total = singlePrice;
  $total.text(singlePrice * qnty)
  calculateTotal()

})

function calculateTotal()
{
  let productPrice = parseFloat($(selectors.productInfo.price).text());
  let additions = $(selectors.additionsTotalField);

  for(let i = 0; i < additions.length; i++) {
    if($(additions[i]).text().length > 0) {
      let price = parseFloat($(additions[i]).text());
      productPrice = productPrice + price;
    }
  }

  $(selectors.finalPrice).text(productPrice);
}


// var myModalEl = document.getElementById('myModal')
// myModalEl.addEventListener('hidden.bs.modal', function (event) {
//     // do something...
// })