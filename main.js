window.addEventListener('DOMContentLoaded', function(){

  // new SimpleBar(document.getElementById('priceDiv'));

  // Бургерное меню

  // Создаём плавность анимации появления мобильного меню
  // Сначала объявим функцию FadeIn

  const fadeIn = (el, timeout, display) => {
    el.style.opacity = 0;
    el.style.display = display || 'block';
    el.style.transition = `opacity ${timeout}ms`;
    setTimeout(() => {
      el.style.opacity = 1;
    }, 10);
  }

  // Объявим функцию FadeOut

  const fadeOut = (el, timeout) => {
    el.style.opacity = 1;
    el.style.transition = `opacity ${timeout}ms`;
    el.style.opacity = 0;

    setTimeout(() => {
      el.style.display = 'none';
    }, timeout);
  };

  var menu = document.querySelector('#menu')
      ,burger = document.querySelector('#burger')
      ,burgerClose = document.querySelector('#burger.open')
      ,flag = false;

  burger.addEventListener('click', function(){      
      if(!flag) {
        fadeIn(menu, 300, 'flex');
        flag = true;  
      } else {
        fadeOut(menu, 300);
        flag = false;
      }       

      burger.classList.toggle('open');

      // Скрытие меню при нажатии на один из пунктов меню

      document.querySelectorAll('.menu__link').forEach(function(oneItem){
          oneItem.addEventListener('click', function(){          

            fadeOut(menu, 300);
            flag = false;
          
            burger.classList.remove('open');
          });
      });

      burgerClose.addEventListener('click', function(){
        fadeOut(menu, 300);
        flag = false;
      
        burger.classList.remove('open');
      });
    }); 

  // Слайдер в блоке Reviews

  new Swiper('.slider-reviews', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 80,
    speed: 700,    
    

    // Navigation arrows
    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
    },

    // Управлять слайдером с клавиатуры
    keyboard: {
        //включаем
        enabled: true,
        //управление клавишами pageUp/pageDown
        pageUpDown: true,
    },

    freeMode: {
        enabled: true,
    },

    // autoplay: {
    //     delay: 3000,            
    //     waitForTransition: true,
    // },
    
    breakpoints: {
      // when window width is >= 320px
      1100: {
        slidesPerView: 2,
        spaceBetween: 40       
      }
    }

  });


  // Сайдбар / Sidebar

  const postDetails = document.querySelector(".main__content");
  const postSidebar = document.querySelector(".main-sidebar");
  const postSidebarContent = document.querySelector(".sidebar");

  const blogDetails = document.querySelector(".single-main__article");
  const blogSidebar = document.querySelector(".single-sidebar");
  const blogSidebarContent = document.querySelector(".blog-sidebar");
   
  //1
  const controller = new ScrollMagic.Controller();   
   
  //2
  const scene = new ScrollMagic.Scene({
    triggerElement: postSidebar,
    triggerHook: 0,
    duration: getDuration
  }).addTo(controller);

  console.log( window.innerHeight);

  console.log(blogSidebar.offsetHeight);

  const blogscene = new ScrollMagic.Scene({
    triggerElement: blogSidebar,
    triggerHook: 0,
    duration: blogDetails.offsetHeight - blogSidebarContent.offsetHeight
  }).addTo(controller);
   
  //3
  if (window.matchMedia("(min-width: 992px)").matches) {
    scene.setPin(postSidebar, {pushFollowers: false});
  }

  if (window.matchMedia("(min-width: 1200px)").matches) {
    blogscene.setPin(blogSidebar, {pushFollowers: false});
  }
   
  //4
  window.addEventListener("resize", () => {
    if (window.matchMedia("(min-width: 992px)").matches) {
      scene.setPin(postSidebar, {pushFollowers: false});
    } else {
      scene.removePin(postSidebar, true);
    }
  });

  window.addEventListener("resize", () => {
    if (window.matchMedia("(min-width: 1200px)").matches) {
      blogscene.setPin(blogSidebar, {pushFollowers: false});
    } else {
      blogscene.removePin(blogSidebar, true);
    }
  });

  function getDuration() {
    return postDetails.offsetHeight - postSidebarContent.offsetHeight;
  }

  // function getDurationBlog() {
  //   return blogDetails.offsetHeight - blogSidebarContent.offsetHeight;
  // }
  


  
   
});

jQuery (function($) { 
  // Выбор плитка/список на странице Блог

  let listButton = $('#block2')
    ,tableButton = $('#block1')
    ,listBlock = $('#list')
    ,tableBlock = $('#table')
    ,listImg = $('.level-btn__list')
    ,tableImg = $('.level-btn__table');
  

  listButton.on('click', function(){
    listBlock.css('display', 'block');
    tableBlock.css('display', 'none');
    listButton.css('opacity', '.4');
    tableButton.css('opacity', '1');    
    listImg.css('background-image', 'url("/wp-content/themes/sovservice/img/spisok-active.svg")'); 
    tableImg.css('background-image', 'url("/wp-content/themes/sovservice/img/plitka.svg")');    
  });
  
  tableButton.on('click', function(){
    listBlock.css('display', 'none');
    tableBlock.css('display', 'flex');
    tableButton.css('opacity', '.4');
    listButton.css('opacity', '1');
    tableImg.css('background-image', 'url("/wp-content/themes/sovservice/img/plitka-active.svg")');
    listImg.css('background-image', 'url("/wp-content/themes/sovservice/img/spisok.svg")');    
  });


  // Открытие попапа Отправить заявку

  let zakazOpen = $('.js-getZakaz')
  ,zakazContainer = $('.js-zakazContainer')
  ,zakazClose = $('.js-zakazClose');

  zakazOpen.on('click', function(e){
  event.preventDefault();

  zakazContainer.fadeIn(600);

    $('body').css ({
        'height': '100vh',
        'overflow-y': 'hidden',
        'padding-right': '15px' 
    }); 
  });

  zakazClose.on('click', function(){
    zakazContainer.fadeOut(400);

    $('body').css ({
        'height': '',
        'overflow-y': '',
        'padding-right': '' 
    }); 
  });

  $('.js-zakazContainer').on('click', function(event){
  if(this == event.target) {
      zakazContainer.fadeOut('400', function(){
      });
  }

    $('body').css ({
        'height': '',
        'overflow-y': '',
        'padding-right': '' 
    });   

  });


  // Счетчик чистел / Counter

  $(".counter__digit").each(function () {
    $(this)
      .prop("Counter", 0)
      .animate(
        {
          Counter: $(this).text()
        },
        {
          duration: 9000,
          easing: "swing",
          step: function (now) {
            $(this).text(Math.ceil(now));
          }
        }
      );
  });

});




