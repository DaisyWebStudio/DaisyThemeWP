$(document).ready(function(){

  try {
    const vidModTrig = document.querySelectorAll('.video-popup__trigger'),
    vidMod = document.querySelector('.video-popup'),
    vidContainerWrap = vidMod.querySelector('.video-popup__wrap');
    vidModTrig.forEach((i) => {
      i.addEventListener('click', (e) => {
        e.preventDefault();
      let src = e.target.href;
      let autoplay = e.target.dataset.autoplay;
      let mute = e.target.dataset.mute;
  const generateVidio = (src) => {
     return `
     <div class="js-player video-popup__content" data-plyr-provider="youtube" data-plyr-provider="${src}">
     <iframe
         src="${src}"
         allowfullscreen
         allowtransparency    
         allow="autoplay"
         autoplay="autoplay"
      ></iframe>
  </div>
     `
  };
  
  let param = {};
  if(autoplay == 1){
    param.autoplay = true;
  } 
  if(mute == 1){
    param.muted = true;
  } 
  vidContainerWrap.insertAdjacentHTML('afterbegin', generateVidio(src));
  const players = Array.from(document.querySelectorAll('.js-player')).map(p => new Plyr(p, param));
  
       vidMod.classList.remove('hide');
       try{
        vidMod.addEventListener('click', (e) => {
            if (e.target === vidMod.querySelector('.video-popup__wrap')) {
              vidMod.classList.add('hide');
              vidContainerWrap.innerHTML = '';
            }     
        });  
        } catch(e){}
    
        document.addEventListener('keydown', (e) => {
            if (e.code === "Escape" && !vidMod.classList.contains('hide')) { 
              vidMod.classList.add('hide');
              vidContainerWrap.innerHTML = '';
            }
        });
      })
    })
  } catch {}
  try {
    const perCatItem = document.querySelectorAll('.par-link'),
    child1All = document.querySelectorAll('.child-1'),
    child2All = document.querySelectorAll('.child-2'),
    child1Items = document.querySelectorAll('.cild-1__item');
    perCatItem.forEach((i) => {
      i.addEventListener('mouseover', () => {
        const child = i.querySelector('.child-1');
        child1All.forEach((i) => {
          i.classList.add('hide');
        })
        child.classList.remove('hide');
        child1All.forEach((i) => {
          if(i.classList.contains('hide')){
            i.querySelectorAll('.child-2').forEach((i) => {
              i.classList.add('hide');
            })
          }
        })
      })
    })
    child1Items.forEach((i) => {
      i.addEventListener('mouseover', () => {
        const child = i.closest('.child-link').querySelector('.child-2');
        child2All.forEach((i) => {
          i.classList.add('hide');
        })
        child.classList.remove('hide');
      })
    })
  } catch {}
  try {
    const catBtn = document.querySelector('.to_catalog_btn'),
    catModal = document.querySelector('.cat-modal'),
    modalMask = document.querySelector('.cat-modal-mask');
    catBtn.addEventListener('click', (e) => {
      e.preventDefault();
      catModal.classList.toggle('hide');
      modalMask.classList.toggle('hide');
    })
    modalMask.addEventListener('click', () => {
      catModal.classList.toggle('hide');
      modalMask.classList.toggle('hide');
    })
  } catch {}
  try {
    const hederMenu = document.querySelector('.menu');
    menuItem = hederMenu.querySelectorAll('.menu-item'),
    subMenus = hederMenu.querySelectorAll('.sub-menu');
    menuItem.forEach((i) => {
      i.addEventListener('mouseover', () => {
        const subMenu = i.querySelector('.sub-menu');
        subMenus.forEach((i) => {
          i.classList.remove('show');
        })
        if(subMenu){
          subMenu.classList.add('show');
        }
      })
    })
    document.body.addEventListener('mouseover', (e) => {
      if( e.target.closest('.menu') || e.target.closest('header') || e.target.closest('.top_tool')){
      } else {
        subMenus.forEach((i) => {
          i.classList.remove('show');
        })
      }
    })
  } catch {}
  try{
    const cardItem = document.querySelectorAll('.note_slider_item');
    cardItem.forEach((i) => {
      i.addEventListener('click', (e) => {
        e.preventDefault();
        e.target.closest('.note_slider_item').querySelector('.note_slider_link').click();
      })
    })
  } catch {}
  try{
    const catcardItem = document.querySelectorAll('.main_categories_item');
    catcardItem.forEach((i) => {
      i.addEventListener('click', (e) => {
        e.preventDefault();
        e.target.closest('.main_categories_item').querySelector('.main_categories_link').click();
      })
    })
  } catch {}
    try {
    $(".nav_list").slick({
      dots: false,
      slidesToShow: 14,
      slidesToScroll: 1,
      infinite: false,
      variableWidth: true,
      arrows: true,
  });
  } catch {}
  try {
  $("#sl1").slick({
    dots: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 1000,
    arrows: true,
    prevArrow: $('.advantages_prev5'),
    nextArrow: $('.advantages_next5'),
    responsive: [
      {
      breakpoint: 1000,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
      },
    {
      breakpoint:820 ,
      settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
      }
      },
    {
      breakpoint:780 ,
      settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
      }
      },
    {
      breakpoint:580 ,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      }
      }
    ]
  });
  } catch {}
  try {
    $("#sl2").slick({
      dots: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      speed: 1000,
      arrows: true,
      prevArrow: $('.advantages_prev5'),
      nextArrow: $('.advantages_next5'),
      responsive: [
        {
        breakpoint: 1000,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
        },
      {
        breakpoint:820 ,
        settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        }
        },
      {
        breakpoint:780 ,
        settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        }
        },
      {
        breakpoint:580 ,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        }
        }
      ]
    });
    } catch {}
  try {
  document.querySelectorAll('.qty').forEach((i) => {
    i.type = 'text';
  })
  } catch {}
  try {
  document.querySelectorAll('.wc-block-product-search__field').forEach((i) => {
    i.type = 'text';
  })
  } catch {}
  try {
    $('.burger').on('click', function () {
        $(this).toggleClass('active');
        $('.nav_block').slideToggle();
        $('.switch').toggleClass('active');
    });
  } catch {}
  try {
    $('.open_filter').on('click', function () {
        $('.filter_column').slideToggle();
        return false
    });
  } catch {}
  try {
    $('.account').on('click', function () {
      $('.account_drop').slideToggle();
      return false
  });
  } catch {}
  try {
    $('select').styler({ selectSearch: true });
  } catch {}
    try {
    $(".open_popup").magnificPopup({removalDelay:300,type:"inline"});
  } catch {}
  try {
    const mnb = document.querySelectorAll('.main_note');
    mnb.forEach((i) => {
      i.querySelector('.main_note_tabs__group').classList.add('active');
      i.querySelector('.main_note_box').classList.add('active');
    })
    $('ul.main_note_tabs').on('click', 'li:not(.active)', function() {
      $(this) .addClass('active').siblings().removeClass('active') .closest('div.main_note').find('div.main_note_box').removeClass('active').eq($(this).index()).addClass('active');
    });
  } catch {}
  // try {
  //   // document.querySelector('.main_note_tabs__group').classList.add('active');
  //   // document.querySelector('.main_note_box').classList.add('active');
  //   $('.per-link').on('mousover', 'a:not(.active)', function() {
  // 		$(this) .addClass('active').siblings().removeClass('active') .closest('div.cat-modal__par-cat').find('div.cild-1').removeClass('active').eq($(this).index()).addClass('active');
  // 	});
  // } catch {}
  try {
    const dopInf = document.querySelectorAll('.dop_info_row');
    dopInf.forEach((i) => {
      i.querySelector('.dop_info_tabs-trig').classList.add('active');
      i.querySelector('.dop_info_box').classList.add('active');
    })
    document.querySelector('.dop_info_tabs-trig').classList.add('active');
    document.querySelector('.dop_info_box').classList.add('active');
    $('ul.dop_info_tabs').delegate('li:not(.active)', 'click', function() {
      $(this).addClass('active').siblings().removeClass('active')
      .parents('div.dop_info').find('div.dop_info_box').hide().eq($(this).index()).fadeIn(150);
    })
  } catch {}
  try {
    $('ul.blog_article_tabs').delegate('li:not(.active)', 'click', function() {
      $(this).addClass('active').siblings().removeClass('active')
      .parents('div.blog_article').find('div.blog_article_box').hide().eq($(this).index()).fadeIn(150);
    })
  } catch {}
  try {
    $('ul.products_day_tabs').delegate('li:not(.active)', 'click', function() {
      $(this).addClass('active').siblings().removeClass('active')
      .parents('div.products_day_desc').find('div.products_day_box').hide().eq($(this).index()).fadeIn(150);
    })
  } catch {}
  try {
    $("#datepicker").datepicker({ monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь','Октябрь', 'Ноябрь', 'Декабрь'],
   dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'], firstDay: 1, });
  } catch {}
   try {
   $('a[href="#plus"]').click(function () {
      var inp = $(this).parent('span').find('input');
      inp.val(parseInt(inp.val())+1);
      return false;
    });
  } catch {}
    try {
    $('a[href="#minus"]').click(function () {
      var inp = $(this).parent('span').find('input');
      if(inp.val()>1) inp.val(parseInt(inp.val())-1);
      return false;
    });
  } catch {}
  try {
    $(".favorites_scrollbar").mCustomScrollbar({
      axis:"y"
    });
  } catch {}
  try {
    var accordion = $(".accordion");
      if(accordion.length){
        accordion.each(function(){
          var all_panels = $(this).find('.ac_inner').hide();
          var all_titles = $(this).find('.ac_title');
          $(this).find('.ac_inner.active').slideDown();
          all_titles.on("click", function() {
            var acc_title = $(this);
            var acc_inner =  acc_title.next();
            if(!acc_inner.hasClass('active')){
               all_panels.removeClass('active').slideUp();
               acc_inner.addClass('active').slideDown();
               all_titles.removeClass('active');
               acc_title.addClass('active');
            } else {
              all_panels.removeClass('active').slideUp();
              all_titles.removeClass('active');
            }
          });
        });
      }
    } catch {}
    try {
      $(function() {
        $('#price_l').change(function () {
        var val = $(this).val();
        $('#slider_price').slider("values",0,val);
        });	
        
        $('#price_r').change( function() {
          var val2 = $(this).val();
          $('#slider_price').slider("values",1,val2);
        });
      
        $( "#slider_price" ).slider({
          range: true,
          min: 0,
          step:10,
          max: 8000,
          values: [ 0, 4300 ],
          slide: function( event, ui ) {
            $('#price_l').val(ui.values[0]);
            $('#price_r').val(ui.values[1]);
          }
        });
          $('#price_l').val($('#slider_price').slider("values",0));
          $('#price_r').val($('#slider_price').slider("values",1));
      });
    } catch {}
    try {
    $(".main_slider").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: false,
    });
  } catch {}
  try {
    $('.d_slider').each(function(){
      $(this).slick({
        dots: true,
        slidesToShow: $(this).data('show'),
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: true,
        prevArrow: $(this).parent().find('.advantages_prev'),
        nextArrow: $(this).parent().find('.advantages_next'),
        responsive: [
          {
          breakpoint: 1000,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
          },
        ]
    });
    });
    } catch {}
  try {
    $(".single-slide_slider").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        adaptiveHight: true,
        prevArrow: $('.advantages_prev'),
        nextArrow: $('.advantages_next'),
    });
  } catch {}
  try {
    $(".featured_slider").slick({
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHight: true,
        arrows: false,
        adaptiveHight: true,
    });
  } catch {}
    try {
      $('.slider').each(function(){
        $(this).slick({
          dots: true,
          slidesToShow: $(this).data('show'),
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3000,
          speed: 1000,
          arrows: true,
          appendDots: $(this).parent().find('.advantages_dots'),
          prevArrow: $(this).parent().find('.advantages_prev'),
          nextArrow: $(this).parent().find('.advantages_next'),
          responsive: [
            {
            breakpoint: 1000,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            }
            },
          {
            breakpoint:580 ,
            settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            }
            }
          ]
      });
    });
    } catch {}
    try {
      $(".main_reviews_slider").slick({
        dots: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: true,
        prevArrow: $('.advantages_prev8'),
        nextArrow: $('.advantages_next8'),
        responsive: [
          {
          breakpoint: 1000,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
          },
        {
          breakpoint:820 ,
          settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          }
          },
        {
          breakpoint:780 ,
          settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          }
          },
        {
          breakpoint:580 ,
          settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          }
          }
        ]
      });
    } catch {}
    try {
      $(".main_rates_slider").slick({
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: true,
        prevArrow: $('.advantages_prev11'),
        nextArrow: $('.advantages_next11'),
        responsive: [
          {
          breakpoint: 1000,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
          },
        {
          breakpoint:820 ,
          settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          }
          },
        {
          breakpoint:780 ,
          settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          }
          },
        {
          breakpoint:580 ,
          settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          }
          }
        ]
      });
    } catch {}
    try {
      $(".main_categories_slider").slick({
        dots: true,
        slidesToShow: 6,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: true,
        prevArrow: $('.advantages_prev12'),
        nextArrow: $('.advantages_next12'),
        responsive: [
          {
          breakpoint: 1340,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 2,
          }
          },
        {
          breakpoint:1100 ,
          settings: {
          slidesToShow: 4,
          slidesToScroll: 2,
          }
          },
        {
          breakpoint:780 ,
          settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          }
          },
        {
          breakpoint:580 ,
          settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          }
          }
        ]
      });
    } catch {}
      $(".blog_aside_info_slider").slick({
          dots: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3000,
          speed: 1000,
          arrows: true,
      });
      $(".blog_aside_slider").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: true,
        prevArrow: $('.advantages_prev13'),
        nextArrow: $('.advantages_next13'),
    });
    $(".blog_article_description_slider").slick({
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: false,
        settings: "unslick",
        swipe: false,
        responsive: [
          {
          breakpoint: 980,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            settings: "true",
            swipe: true,
            dots: true,
            infinite: true,
            autoplay: true,
          }
          }
        ]
      
      });
  
      $(".popular_goods_slider").slick({
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 3000,
          speed: 1000,
          arrows: false,
      });
  
      $(".store_stock_slider").slick({
        dots: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: true,
        prevArrow: $('.advantages_prev14'),
        nextArrow: $('.advantages_next14'),
        responsive: [
          {
          breakpoint: 1000,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
          },
        {
          breakpoint:820 ,
          settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          }
          },
        {
          breakpoint:780 ,
          settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          }
          },
        {
          breakpoint:580 ,
          settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          }
          }
        ]
      });
  
      $(".products_day_slider_inner").slick({
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 3000,
          speed: 1000,
          arrows: false,
      });
  
      $(".products_day_slider").slick({
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 3000,
          speed: 1000,
          arrows: true,
          prevArrow: $('.advantages_prev15'),
          nextArrow: $('.advantages_next15'),
      });
  
      $(".comments_product_slider").slick({
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: true,
        prevArrow: $('.advantages_prev16'),
        nextArrow: $('.advantages_next16'),
        responsive: [
          {
          breakpoint: 1000,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
          },
        {
          breakpoint:820 ,
          settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          }
          },
        {
          breakpoint:780 ,
          settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          }
          },
        {
          breakpoint:680 ,
          settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          }
          }
        ]
      });
  
      $(".basket_content_slider").slick({
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 3000,
          speed: 1000,
          arrows: false,
      });
  
      $(".basket_sidebar_slider").slick({
        dots: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: true,
        prevArrow: $('.prev_sidebar'),
        nextArrow: $('.next_sidebar'),
        responsive: [
        {
          breakpoint:980 ,
          settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          }
          },
        {
          breakpoint:480 ,
          settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          }
          }
        ]
      });
  
      $(".product_comparison_slider").slick({
        dots: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: false,
        settings: "unslick",
        swipe: false,
        responsive: [
          {
          breakpoint: 680,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            settings: "true",
            swipe: true,
            dots: false,
            arrows: true,
          }
          }
        ]
      
      });
      
  });
  // (function () {
  //     var docBody         = document.body;
  //     var toggle          = document.getElementById('toggle');
  //     var metaThemeColor  = document.querySelector("meta[name=theme-color]");
    
  //     function setMetaThemeColor() {
  //       var pageStyle       = getComputedStyle(docBody);
  //       var backgroundColor = pageStyle.getPropertyValue('--background-color');
  //           metaThemeColor.setAttribute('content', backgroundColor);
  //     }
    
    
  //     toggle.addEventListener('change', function () {
    
  //       if ( docBody.className == '' ) {
  //         docBody.classList.toggle('dark');
  //         setMetaThemeColor();
  //       } else if ( docBody.className == 'dark' ) {
  //         docBody.classList.replace('dark', 'light');
  //         setMetaThemeColor();
  //       } else if ( docBody.className == 'light' ) {
  //         docBody.classList.replace('light', 'dark');
  //         setMetaThemeColor();
  //       }
    
  //       localStorage.setItem('themeType', docBody.className);
  //     });
    
    
  //     if ( localStorage.getItem('themeType') != null ) {
  //       var getThemeType      = localStorage.themeType;
  //           docBody.className = getThemeType;
  //       setMetaThemeColor();
  //       if ( localStorage.getItem('themeType') == 'dark' ) {
  //         toggle.checked = true;
  //       }
  //     }
    
    
  //     var darkThemeQuery = '(prefers-color-scheme: dark)';
  //     var matchMedia = window.matchMedia;
  //     if (matchMedia && matchMedia(darkThemeQuery).matches) {
  //       toggle.click();
  //     }
    
  //   })();
  $('.burger').on('click', function () {
    $(this).toggleClass('active');
    $('.nav_block').slideToggle();
    $('.switch').toggleClass('active');
});

$('.open_filter').on('click', function () {
    $('.filter_column').slideToggle();
    return false
});

$(document).click( function(event){
  if( $(event.target).closest(".account_wrap").length ) 
    return;
  $(".account_drop").slideUp("5000");
  $(".account").removeClass('active');
  event.stopPropagation();
});
$('.account').click( function() {
  $(this).toggleClass('active');
  $("div.account_drop").slideToggle("5000");
});

$(document).click( function(event){
  if( $(event.target).closest(".locations_item").length ) 
    return;
  $(".locations_drop").slideUp("5000");
  $(".locations").removeClass('active');
  event.stopPropagation();
});
$('.locations').click( function() {
  $(this).toggleClass('active');
  $("div.locations_drop").slideToggle("5000");
});

$(document).click( function(event){
  if( $(event.target).closest(".top_tool_phone_item").length ) 
    return;
  $(".top_tool_phone_drop").slideUp("5000");
  $(".top_tool_phone").removeClass('active');
  event.stopPropagation();
});
$('.top_tool_phone').click( function() {
  $(this).toggleClass('active');
  $("div.top_tool_phone_drop").slideToggle("5000");
});

$(document).click( function(event){
  if( $(event.target).closest(".working_hours_item").length ) 
    return;
  $(".working_hours_drop").slideUp("5000");
  $(".working_hours").removeClass('active');
  event.stopPropagation();
});
$('.working_hours').click( function() {
  $(this).toggleClass('active');
  $("div.working_hours_drop").slideToggle("5000");
});

$(document).click( function(event){
  if( $(event.target).closest(".language_item").length ) 
    return;
  $(".language_drop").slideUp("5000");
  $(".language").removeClass('active');
  event.stopPropagation();
});
$('.language').click( function() {
  $(this).toggleClass('active');
  $("div.language_drop").slideToggle("5000");
});

$(document).click( function(event){
  if( $(event.target).closest(".currency_item").length ) 
    return;
  $(".currency_drop").slideUp("5000");
  $(".currency").removeClass('active');
  event.stopPropagation();
});
$('.currency').click( function() {
  $(this).toggleClass('active');
  $("div.currency_drop").slideToggle("5000");
});

$(document).click( function(event){
  if( $(event.target).closest(".heart_item1").length ) 
    return;
  $(".heart_drop").slideUp("5000");
  $(".heart").removeClass('active');
  event.stopPropagation();
});
$('.heart').click( function() {
  $(this).toggleClass('active');
  $("div.heart_drop").slideToggle("5000");
});

$(document).click( function(event){
  if( $(event.target).closest(".heart_item2").length ) 
    return;
  $(".heart_drop2").slideUp("5000");
  $(".bar_chart").removeClass('active');
  event.stopPropagation();
});
$('.bar_chart').click( function() {
  $(this).toggleClass('active');
  $("div.heart_drop2").slideToggle("5000");
});

$(document).click( function(event){
  if( $(event.target).closest(".heart_item3").length ) 
    return;
  $(".heart_drop3").slideUp("5000");
  $(".cart").removeClass('active');
  event.stopPropagation();
});
$('.cart').click( function() {
  $(this).toggleClass('active');
  $("div.heart_drop3").slideToggle("5000");
});

$(document).click( function(event){
  if( $(event.target).closest(".to_catalog_btn").length ) 
    return;
  $(".catalog_nav_wrap").slideUp("5000");
  $(".to_catalog_btn").removeClass('active');
  event.stopPropagation();
});
$('.to_catalog_btn').click( function() {
  $(this).toggleClass('active');
  $("div.catalog_nav_wrap").slideToggle("5000");
});

$('select').styler({ selectSearch: true });

$(".open_popup").magnificPopup({removalDelay:300,type:"inline"});

$('ul.main_note_tabs').on('click', 'li:not(.active)', function() {
  $(this) .addClass('active').siblings().removeClass('active') .closest('div.main_note').find('div.main_note_box').removeClass('active').eq($(this).index()).addClass('active');
});

$('ul.dop_info_tabs').delegate('li:not(.active)', 'click', function() {
  $(this).addClass('active').siblings().removeClass('active')
  .parents('div.dop_info').find('div.dop_info_box').hide().eq($(this).index()).fadeIn(150);
})

$('ul.blog_article_tabs').delegate('li:not(.active)', 'click', function() {
  $(this).addClass('active').siblings().removeClass('active')
  .parents('div.blog_article').find('div.blog_article_box').hide().eq($(this).index()).fadeIn(150);
})

$('ul.products_day_tabs').delegate('li:not(.active)', 'click', function() {
  $(this).addClass('active').siblings().removeClass('active')
  .parents('div.products_day_desc').find('div.products_day_box').hide().eq($(this).index()).fadeIn(150);
})

$("#datepicker").datepicker({ monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь','Октябрь', 'Ноябрь', 'Декабрь'],
dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'], firstDay: 1, });

$('a[href="#plus"]').click(function () {
  var inp = $(this).parent('span').find('input');
  inp.val(parseInt(inp.val())+1);
  return false;
});
$('a[href="#minus"]').click(function () {
  var inp = $(this).parent('span').find('input');
  if(inp.val()>1) inp.val(parseInt(inp.val())-1);
  return false;
});

try {
$(".favorites_scrollbar").mCustomScrollbar({
  axis:"y"
});
$(".drop_scroll").mCustomScrollbar({
  axis:"y"
});
$(".catalog_nav_scroll").mCustomScrollbar({
  axis:"y"
});
} catch {}

var accordion = $(".accordion");
  if(accordion.length){
    accordion.each(function(){
      var all_panels = $(this).find('.ac_inner').hide();
      var all_titles = $(this).find('.ac_title');
      $(this).find('.ac_inner.active').slideDown();
      all_titles.on("click", function() {
        var acc_title = $(this);
        var acc_inner =  acc_title.next();
        if(!acc_inner.hasClass('active')){
           all_panels.removeClass('active').slideUp();
           acc_inner.addClass('active').slideDown();
           all_titles.removeClass('active');
           acc_title.addClass('active');
        } else {
          all_panels.removeClass('active').slideUp();
          all_titles.removeClass('active');
        }
      });
    });
  }

  $(function() {
    $('#price_l').change(function () {
    var val = $(this).val();
    $('#slider_price').slider("values",0,val);
    });	
    
    $('#price_r').change( function() {
      var val2 = $(this).val();
      $('#slider_price').slider("values",1,val2);
    });
  
    $( "#slider_price" ).slider({
      range: true,
      min: 0,
      step:10,
      max: 8000,
      values: [ 0, 4300 ],
      slide: function( event, ui ) {
        $('#price_l').val(ui.values[0]);
        $('#price_r').val(ui.values[1]);
      }
    });
      $('#price_l').val($('#slider_price').slider("values",0));
      $('#price_r').val($('#slider_price').slider("values",1));
  });
  
  
    $('img.img_svg').each(function(){
      var $img = $(this);
      var imgClass = $img.attr('class');
      var imgURL = $img.attr('src');
      $.get(imgURL, function(data) {
        var $svg = $(data).find('svg');
        if(typeof imgClass !== 'undefined') {
          $svg = $svg.attr('class', imgClass+' replaced-svg');
        }
        $svg = $svg.removeAttr('xmlns:a');
        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
          $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }
        $img.replaceWith($svg);
      }, 'xml');
  });
  
 