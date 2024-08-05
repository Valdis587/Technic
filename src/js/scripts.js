
$(document).ready(function () {
    $('.header__burger').click(function() {
        $('.header__menu-nav').addClass('menu-nav-open');
    });

    $('.header__menu-close').click(function() {
        $('.header__menu-nav').removeClass('menu-nav-open');   
     });
     $(".menu-item-has-children").click(function(){ // задаем функцию при нажатии на элемент 
      $(this).children('ul').toggleClass('sub-menu-open'); // добавляем элементу  по которому произведен клик класс
     });

     $(".footer__button-up").addClass("footer__button-up-hide");
     $(window).scroll(function () {
     if ($(this).scrollTop() === 0) {
         $(".footer__button-up").addClass("footer__button-up-hide")
     } else {
         $(".footer__button-up").removeClass("footer__button-up-hide")
     }
   });
   
   $('.footer__button-up').on("click", function () {
     $('body,html').animate({scrollTop:0}, 1200);
     return false;
   });


   $('.header__center-button').on("click", function() {
    $('.popup').addClass('popup-open');
});
$('.cart__catalog-button').on("click", function() {
    $('.popup-zak').addClass('popup-open');
});

$('.popup-zak__close').on("click", function() {
    $('.popup-zak').removeClass('popup-open');   
  });

$('.popup__close').on("click", function() {
   $('.popup').removeClass('popup-open');   
 });

 $('.quick__close').on("click", function() {
  $('.quick').removeClass('popup-open');   
});
$('.quick__catalog-button').on("click", function() {
  $('.quick').removeClass('popup-open'); 
  $('.popup-zak').addClass('popup-open');
});

 $('.single__catalog-button').on("click", function() {
  $('.popup-zak').addClass('popup-open');
});

    /*---------- 01. On Load Function ----------*/
    $(window).on("load", function () {
      $(".preloader").fadeOut();
  });

  var explode = function(){
      $(".preloader").css("display", "none")
    };

  setTimeout(explode, 1000);

});

