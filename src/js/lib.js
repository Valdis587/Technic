import Swiper from 'swiper';
import {Autoplay, EffectFade, Navigation, Pagination, Thumbs} from 'swiper/modules';
Swiper.use({ Autoplay, EffectFade, Navigation, Pagination, Thumbs});


const homeslider = new Swiper('.homeslider__content', {
   modules: [Navigation, Autoplay, EffectFade],
   loop: true,
   autoplay: true,
   speed: 2000,
   autoplayDisableOnInteraction:true,
   pagination: false,
   effect: 'fade',
   fadeEffect: {
     crossFade: true
    },
      // Navigation arrows
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },
  });

  const homeproject = new Swiper('.projecthome__content', {
   modules: [Navigation, Autoplay, EffectFade],
   speed: 400,
   autoplay: true,
   autoHeight: true,
   initialSlide: 0,
   //truewrapper adoptsheight of active slide
 
   // Optional parameters
   direction: 'horizontal',
   loop: true,
   // delay between transitions in ms
   autoplay: true,
   pagination: false,
 
   effect: 'slide',
   // Distance between slides in px.
   spaceBetween: 25,
   //
   slidesPerView: 'auto',
   //
   centeredSlides: false,
   //
   slidesOffsetBefore: 0,
 
   // Navigation arrows
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },
 
   //
   breakpoints: {
      320: {
         slidesPerView: 1,
      },
      480: {
         slidesPerView: 1,
      },
      590: {
         slidesPerView: 2,
      },
      1100: {
         slidesPerView: 3,
      },
      1300: {
       slidesPerView: 4,
    },
   }
 });


const news = new Swiper('.newshome__content', {
   modules: [Navigation, Autoplay, EffectFade],
   speed: 400,
   autoplay: true,
   autoHeight: true,
   initialSlide: 0,
   //truewrapper adoptsheight of active slide
 
   // Optional parameters
   direction: 'horizontal',
   loop: true,
   // delay between transitions in ms
   autoplay: true,
   pagination: false,
 
   effect: 'slide',
   // Distance between slides in px.
   spaceBetween: 25,
   //
   slidesPerView: 'auto',
   //
   centeredSlides: false,
   //
   slidesOffsetBefore: 0,
 
   // Navigation arrows
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },
 
   //
   breakpoints: {
      320: {
         slidesPerView: 1,
      },
      480: {
         slidesPerView: 1,
      },
      590: {
         slidesPerView: 2,
      },
      1100: {
         slidesPerView: 3,
      },
      1300: {
       slidesPerView: 4,
    },
   }
 });

 var proek = new Swiper(".single__sleder-small", {
  modules: [Autoplay, Thumbs, Navigation, Pagination, EffectFade],
  spaceBetween: 6,
  slidesPerView: 'auto',
  slideToClickedSlide: true,
  centeredSlides: false,
  autoHeight: true,
  initialSlide: 0,
  autoplay: true,
  loop: true,
  watchSlidesProgress: true,
});
var proek2 = new Swiper(".single__sleder-big", {
 modules: [Autoplay, Thumbs, Navigation, Pagination, EffectFade],
// spaceBetween: 10,
 autoplay: true,
 effect: 'fade',
 fadeEffect: {
   crossFade: true
  },
 slideToClickedSlide: true,
 navigation: {
   nextEl: ".swiper-button-next",
   prevEl: ".swiper-button-prev",
 },
 thumbs: {
   swiper: proek,
 },
});

const sdcat = new Swiper('.sidebar__widget-catalog', {
   modules: [Autoplay, EffectFade],
   loop: true,
   autoplay: true,
   speed: 2000,
   autoplayDisableOnInteraction:true,
   pagination: false,
   effect: 'fade',
   fadeEffect: {
     crossFade: true
    },
  });

 const sdreviews = new Swiper('.sidebar__widget-reviews', {
   modules: [Autoplay, EffectFade],
   loop: true,
   autoplay: true,
   speed: 2000,
   autoplayDisableOnInteraction:true,
   pagination: false,
   effect: 'fade',
   fadeEffect: {
     crossFade: true
    },
  });

  const sdvakan = new Swiper('.sidebar__widget-vakan', {
   modules: [Autoplay, EffectFade],
   loop: true,
   autoplay: true,
   speed: 2000,
   autoplayDisableOnInteraction:true,
   pagination: false,
   effect: 'fade',
   fadeEffect: {
     crossFade: true
    },
  });


  const servhome = new Swiper('.servicehome__content', {
    modules: [Navigation, Autoplay, EffectFade],
    speed: 400,
    autoplay: true,
    autoHeight: true,
    initialSlide: 0,
    //truewrapper adoptsheight of active slide
  
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // delay between transitions in ms
    autoplay: true,
    pagination: false,
  
    effect: 'slide',
    // Distance between slides in px.
    spaceBetween: 25,
    //
    slidesPerView: 'auto',
    //
    centeredSlides: false,
    //
    slidesOffsetBefore: 0,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    //
    breakpoints: {
       320: {
          slidesPerView: 1,
       },
       480: {
          slidesPerView: 1,
       },
       590: {
          slidesPerView: 2,
       },
       1100: {
          slidesPerView: 3,
       },
       1300: {
        slidesPerView: 4,
     },
    }
  });


  const cataloghome = new Swiper('.cataloghome__content', {
    modules: [Navigation, Autoplay, EffectFade],
    speed: 400,
    autoplay: true,
    autoHeight: true,
    initialSlide: 0,
    //truewrapper adoptsheight of active slide
  
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // delay between transitions in ms
    autoplay: true,
    pagination: false,
  
    effect: 'slide',
    // Distance between slides in px.
    spaceBetween: 25,
    //
    slidesPerView: 'auto',
    //
    centeredSlides: false,
    //
    slidesOffsetBefore: 0,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    //
    breakpoints: {
       320: {
          slidesPerView: 1,
       },
       480: {
          slidesPerView: 1,
       },
       590: {
          slidesPerView: 2,
       },
       1100: {
          slidesPerView: 3,
       },
       1300: {
        slidesPerView: 4,
     },
    }
  });

  const rebiewshome = new Swiper('.reviewshome__content', {
   modules: [Navigation, Autoplay, EffectFade],
   speed: 400,
   autoplay: true,
   autoHeight: true,
   initialSlide: 0,
   //truewrapper adoptsheight of active slide
 
   // Optional parameters
   direction: 'horizontal',
   loop: true,
   // delay between transitions in ms
   autoplay: true,
   pagination: false,
 
   effect: 'slide',
   // Distance between slides in px.
   spaceBetween: 25,
   //
   slidesPerView: 'auto',
   //
   centeredSlides: false,
   //
   slidesOffsetBefore: 0,
 
   // Navigation arrows
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },
 
   //
   breakpoints: {
      320: {
         slidesPerView: 1,
      },
      480: {
         slidesPerView: 1,
      },
      590: {
         slidesPerView: 1,
      },
      1000: {
         slidesPerView: 2,
      },
   }
 });


 const logohome = new Swiper('.logo__content', {
   modules: [Navigation, Autoplay, EffectFade],
   speed: 400,
   autoplay: true,
   autoHeight: true,
   initialSlide: 0,
   //truewrapper adoptsheight of active slide
 
   // Optional parameters
   direction: 'horizontal',
   loop: true,
   // delay between transitions in ms
   autoplay: true,
   pagination: false,
 
   effect: 'slide',
   // Distance between slides in px.
   spaceBetween: 25,
   //
   slidesPerView: 'auto',
   //
   centeredSlides: false,
   //
   slidesOffsetBefore: 0,
 
   // Navigation arrows
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },
 
   //
   breakpoints: {
      320: {
         slidesPerView: 2,
      },
      480: {
         slidesPerView: 2,
      },
      590: {
         slidesPerView: 3,
      },
      1100: {
         slidesPerView: 4,
      },
      1300: {
       slidesPerView: 6,
    },
   }
 });


 const accordionItemHeaders = document.querySelectorAll(".faq__title");

accordionItemHeaders.forEach(accordionItemHeader => {
   accordionItemHeader.addEventListener("click", event => {
    
     // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
    
    const currentlyActiveAccordionItemHeader = document.querySelector(".faq__item .active");
     if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
       currentlyActiveAccordionItemHeader.classList.toggle("active");
        currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
      }

     accordionItemHeader.classList.toggle("active");
     const accordionItemBody = accordionItemHeader.nextElementSibling;
     if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
     }
     else {
       accordionItemBody.style.maxHeight = 0;
     }
    
   });
});







