function setCookie(name, value, options = {}) {

  options = {
    path: '/',
    // при необходимости добавьте другие значения по умолчанию
    ...options
  };

  if (options.expires instanceof Date) {
    options.expires = options.expires.toUTCString();
  }

  let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

  for (let optionKey in options) {
    updatedCookie += "; " + optionKey;
    let optionValue = options[optionKey];
    if (optionValue !== true) {
      updatedCookie += "=" + optionValue;
    }
  }

  document.cookie = updatedCookie;
}


function numberWithSpaces(x) {
  var parts = x.toString().split(".");
  parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  return parts.join(",");
}

let p = document.querySelectorAll(".aside__balance--crypto .balance-calculation");
  setTimeout(function() {
    p.forEach(function(p_elem) {

        var p_elem_text = $(p_elem).closest('.aside__balance--crypto').find('.balance-calculation').text();
        var p_elem_text = p_elem_text.replace(/\s+/g,'').trim();

        if(p_elem_text.match(/\./g) && p_elem_text.match(/\,/g)) {
          if(p_elem_text.match(/\./g).length >= 1 && p_elem_text.match(/\,/g).length == 1) {
            var p_elem_text_new = p_elem_text.replace(/\./g, "");
            var p_elem_text_new = p_elem_text_new.replace(/,/g, ".");
          }
        }

        else {
          if (p_elem_text.match(/\,/g)) {
            if(p_elem_text.match(/\,/g).length <= 1) {
              var p_elem_text = p_elem_text.replace(/,/g, ".");
              var p_elem_text_new = p_elem_text.replace(/,/g, ".");
            }
          }

          else if (p_elem_text.match(/\./g)) {
            if(p_elem_text.match(/\./g).length <= 1) {
              var p_elem_text_new = p_elem_text.replace(/,/g, ".");
            }
          }

          else {
            console.log(p_elem_cost);
          }
        }


        var p_elem_cost = $(p_elem).closest('.aside__balance--crypto').find('.hide__balance--cost').text();
        var p_elem_cost = p_elem_cost.replace(/\s+/g,'').trim();

        if(p_elem_cost.match(/\./g) && p_elem_cost.match(/\,/g)) {
          if(p_elem_cost.match(/\./g).length >= 1 && p_elem_cost.match(/\,/g).length == 1) {
            var p_elem_cost_new = p_elem_cost.replace(/\./g, "");
            var p_elem_cost_new = p_elem_cost_new.replace(/,/g, ".");
          }
        }

        else {
          if (p_elem_cost.match(/\,/g)) {
            if(p_elem_cost.match(/\,/g).length <= 1) {
              var p_elem_cost_new = p_elem_cost.replace(/,/g, ".");
              var p_elem_cost = p_elem_cost.replace(/,/g, ".");
            }
          }

          else if (p_elem_cost.match(/\./g)) {
            if(p_elem_cost.match(/\./g).length <= 1) {
              var p_elem_cost_new = p_elem_cost.replace(/,/g, ".");
            }
          }

          else {
            console.log(p_elem_cost);
          }
        }

      if($('.aside__balance--cash').find('.balance-calculation').get(0) != undefined) {
        var p_elem_cash = $('.aside__balance--cash').find('.balance-calculation').text();
        var p_elem_cash = p_elem_cash.replace(/\s+/g,'').trim();

        if(p_elem_cash.match(/\./g) && p_elem_cash.match(/\,/g)) {
          if(p_elem_cash.match(/\./g).length >= 1 && p_elem_cash.match(/\,/g).length == 1) {
            var p_elem_cash_new = p_elem_cash.replace(/\./g, "");
            var p_elem_cash_new = p_elem_cash_new.replace(/,/g, ".");
          }
        }

        else {
          if (p_elem_cash.match(/\,/g)) {
            if(p_elem_cash.match(/\,/g).length <= 1) {
              var p_elem_cash_new = p_elem_cash.replace(/,/g, ".");
              var p_elem_cash = p_elem_cash.replace(/,/g, ".");
            }
          }

          else if (p_elem_cash.match(/\./g)) {
            if(p_elem_cash.match(/\./g).length <= 1) {
              var p_elem_cash_new = p_elem_cash.replace(/,/g, ".");
            }
          }

          else {
            console.log(p_elem_cash);
          }
        }
      };


      var cost_own_crypto = Number(p_elem_text_new*p_elem_cost_new).toFixed(2);
      var percent_own_crypto = Number(cost_own_crypto/p_elem_cash_new*100).toFixed(2);
      var abreviation = $(p_elem).closest('.aside__balance--crypto').find('i').text().toLowerCase();

      var custom_border = document.createElement('div');
      custom_border.className = "custom_border " + abreviation;
      custom_border.style.width = percent_own_crypto + "%";
      custom_border.innerHTML = '<p>' + abreviation + ' ' + percent_own_crypto + '%</p>';
      ////document.querySelector('.aside__balance--border').appendChild(custom_border);

      console.log('result with one dote all sum: '+p_elem_cash_new);
      console.log('result with one dote cost one coin: '+p_elem_cost_new);
      console.log('result with one dote count crypto coin: '+p_elem_text_new);
      console.log(numberWithSpaces('result with one, and dote after 3 number all sum: '+p_elem_cash));
      console.log(numberWithSpaces('result with one, and dote after 3 number cost one coin: '+p_elem_cost));
      console.log(numberWithSpaces('result with one, and dote after 3 number count crypto coin: '+p_elem_text));

      console.log('abreviation: '+abreviation);
      console.log('all cost crypto: '+cost_own_crypto);
      console.log('percent from all sum: '+percent_own_crypto);

    });
  }, 50 );

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

if($('.icon-svg').get(0) != undefined) {

  $('.icon-svg').each(function(){
    var $img = $(this);
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');
    $.get(imgURL, function(data) {
      var $svg = $(data).find('svg');
      if(typeof imgClass !== 'undefined') {
        $svg = $svg.attr('class', imgClass+' edit_svg');
      }
      $svg = $svg.removeAttr('xmlns:a');
      if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
        $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
      }
      $img.replaceWith($svg);
    }, 'xml');
  });
};


////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

$(window).on('load', function () {

  AOS.init({
    duration: 1000,
    easing: 'ease-out-cubic',
    offset: 50,
  });

  ////////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////////

  $(document).ready(function() {
    setTimeout(function(){
      var info_browser = document.querySelector(".info-browser").textContent;
      var status_os = info_browser.includes('Mac');
      var status_version = info_browser.includes('Chrome');
      var status_browser = info_browser.includes('Safari');
      if (status_os == true && status_version == true && status_browser == true) {
        $('body').removeClass('animation');
      }

      else {
        $('body').addClass('animation');
      }
    }, 100);
  });

});

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

$(window).on('load', function () {

  var timeout_resize = null;
  $(window).on('resize', function(){
    var client_width = Number(window.innerWidth);
      if (client_width < 589) {
        if($('.aside').get(0) != undefined) {
          $('body').addClass('cabinet-mobile-small');
          $('body').addClass('cabinet-mobile');
        };

        $('body').addClass('mobile');
        $('body').addClass('mobile-small');
        clearTimeout(timeout_resize);
        timeout_resize = setTimeout(function(){
          if($('.aside').get(0) != undefined) {
            $('.aside').prependTo('.header .wrapper');
          };
        }, 100);
      }

      else if (client_width < 1024) {
        if($('.aside').get(0) != undefined) {
          $('body').addClass('cabinet-mobile-small');
          $('body').addClass('cabinet-mobile');
        };

        $('body').addClass('mobile');
        $('body').removeClass('mobile-small');
        clearTimeout(timeout_resize);
        timeout_resize = setTimeout(function(){
          if($('.aside').get(0) != undefined) {
            $('.aside').prependTo('.header .wrapper');
          };
        }, 100);
      }

      else if (client_width < 1280) {
        if($('.aside').get(0) != undefined) {
          $('body').addClass('cabinet-mobile-small');
          $('body').addClass('cabinet-mobile');
        };

        $('body').removeClass('mobile');
        $('body').removeClass('mobile-small');
        clearTimeout(timeout_resize);
        timeout_resize = setTimeout(function(){
          if($('.aside').get(0) != undefined) {
            $('.aside').prependTo('.header .wrapper');
          };
        }, 100);
      }

      else if (client_width < 1366) {
        if($('.aside').get(0) != undefined) {
          $('body').removeClass('cabinet-mobile-small');
          $('body').addClass('cabinet-mobile');
        };

        $('body').removeClass('mobile');
        $('body').removeClass('mobile-small');
        clearTimeout(timeout_resize);
        timeout_resize = setTimeout(function(){
          if($('.aside').get(0) != undefined) {
            $('.aside').prependTo('.header .wrapper');
          };

        }, 100);
      }

      else {
        if($('.aside').get(0) != undefined) {
          $('body').removeClass('cabinet-mobile-small');
          $('body').removeClass('cabinet-mobile');
        };
        $('body').removeClass('mobile');
        $('body').removeClass('mobile-small');
        clearTimeout(timeout_resize);
        timeout_resize = setTimeout(function(){
          if($('.aside').get(0) != undefined) {
            $('.aside').prependTo('aside');
          };
        }, 100);
      }

        if (client_width < 589) {
          $('body').addClass('mobile');
          $('body').addClass('mobile-faq');
          clearTimeout(timeout_resize);
          timeout_resize = setTimeout(function(){
            if($('.aside').get(0) != undefined) {
              $('.aside').prependTo('.header .wrapper');
            };
          }, 100);
        }

        else if (client_width < 1024) {
          $('body').addClass('mobile');
          $('body').removeClass('mobile-faq');
          clearTimeout(timeout_resize);
          timeout_resize = setTimeout(function(){
            if($('.aside').get(0) != undefined) {
              $('.aside').prependTo('.header .wrapper');
            };
          }, 100);
        }

        else if (client_width < 1280) {
          $('body').removeClass('mobile');
          $('body').removeClass('mobile-faq');

          clearTimeout(timeout_resize);
          timeout_resize = setTimeout(function(){
            if($('.aside').get(0) != undefined) {
              $('.aside').prependTo('.header .wrapper');
            };
          }, 100);
        }

        else if (client_width < 1366) {
          $('body').removeClass('mobile');
          $('body').removeClass('mobile-faq');

          clearTimeout(timeout_resize);
          timeout_resize = setTimeout(function(){
            if($('.aside').get(0) != undefined) {
              $('.aside').prependTo('.header .wrapper');
            };
          }, 100);
        }

        else {
          $('body').removeClass('mobile');
          $('body').removeClass('mobile-faq');
          clearTimeout(timeout_resize);
          timeout_resize = setTimeout(function(){
            if($('.aside').get(0) != undefined) {
              $('.aside').prependTo('aside');
            };
          }, 100);
        }

  }).trigger('resize');
});




////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

$(window).on('load', function () {
  $('.form-calculate .bg-input input:not([hidden])').on("change keyup input click", function() {
    this.value = this.value.replace(/[^\d\.,]/g, "");
    this.value = this.value.replace(/,/g, ".");
    if(this.value.match(/\./g)) {
      if(this.value.match(/\./g).length > 1) {
        this.value = this.value.substr(0, this.value.lastIndexOf("."));
      }
    }
  });

  if($(".form-calculate input[name='value_lend']").get(0) != undefined) {
    $('.form-calculate').hover(function () {
      $('.form-calculate').removeClass('hover');
      $(this).addClass('hover');
    });

    $(document).on("input", ".form-calculate input[name='value_lend']", function () {
      var value_profit_input_double_all = $(".form-calculate input[name='value_lend']").val();
      var value_profit_input_double = Number (value_profit_input_double_all);

      if (value_profit_input_double_all == '.') {
        $('.form-calculate.hover .result__daily>p').text('$0.00');
        $('.form-calculate.hover .result__all>p').text('$0.00');
      }

      else if (value_profit_input_double>30000) {
        var value_profit_input_double = Number ($(".form-calculate.hover input[name='value_lend']").val(30000));
        $('.form-calculate.hover .result__daily>p').text('$'+Math.fround(30000*0.10).toFixed(2));
        $('.form-calculate.hover .result__all>p').text('$'+Math.fround(30000*1.40).toFixed(2));
      }

      else {
        $('.form-calculate.hover .result__daily>p').text('$'+Math.fround(value_profit_input_double*0.10).toFixed(2));
        $('.form-calculate.hover .result__all>p').text('$'+Math.fround(value_profit_input_double*1.4).toFixed(2));
      }
    });
  };
});

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

if($('.faq').get(0) != undefined) {

  $('.faq').find('ul li').click(function () {
    $(this).closest('.faq').find('ul li').removeClass('active');
    $(this).addClass('active');
    var index = $(this).index();

    if($(this).hasClass('active')) {
      $(this).closest('.faq').find('.faq__content .tab').fadeOut(0);
      $(this).closest('.faq').find('.faq__content .tab').removeClass('active');
      $(this).closest('.faq').find('.faq__content .tab:eq('+index+')').fadeIn(300);
      $(this).closest('.faq').find('.faq__content .tab:eq('+index+')').addClass('active');
      $(this).closest('.faq').find('.faq__content .tab:eq('+index+')').css('display', 'flex');
    };

    $('.icon-svg').each(function(){
      var $img = $(this);
      var imgClass = $img.attr('class');
      var imgURL = $img.attr('src');
      $.get(imgURL, function(data) {
        var $svg = $(data).find('svg');
        if(typeof imgClass !== 'undefined') {
          $svg = $svg.attr('class', imgClass+' edit_svg');
        }
        $svg = $svg.removeAttr('xmlns:a');
        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
          $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }
        $img.replaceWith($svg);
      }, 'xml');
    });
  });

  // ///////////////////////////////////////////////////////////////////

  $('.faq').find('.faq__nav--result').click(function () {
    if ($(this).closest('.mobile-faq').find('.faq__nav').hasClass('show')) {
      $(this).closest('.mobile-faq').find('.faq__nav').find('ul').slideUp();
      $(this).closest('.mobile-faq').find('.faq__nav').removeClass('show');
    }

    else {
      $(this).closest('.mobile-faq').find('.faq__nav').addClass('show');
      $(this).closest('.mobile-faq').find('.faq__nav ul').slideDown();
      $(this).closest('.mobile-faq').find('.faq__nav ul').css('display', 'flex');
    }
  });

  $(document).click( function(event){
    if( $(event.target).closest('.faq__nav--result').length )
    return;

    $('.mobile-faq .faq__nav').find('ul').slideUp();
    $('.mobile-faq .faq__nav').removeClass('show');
    event.stopPropagation();
  });

  $('.faq__nav').find('li').hover(function () {
    $('.faq__nav li').removeClass('hover');
    $(this).addClass('hover');

    $(this).on('click', function () {
      var p_small = $('.faq__nav li.hover span').text();
      $(this).closest('.faq__nav').find('.faq__nav--result span').text(p_small);
    });
  });

  // ///////////////////////////////////////////////////////////////////

  $('.faq').find('.faq__item--header').click(function () {
    if ($(this).closest('.faq__item').hasClass('active')) {
      $(this).closest('.faq__item').find('.faq__item--description').slideUp(300);
      $(this).closest('.faq__item').removeClass('active');
    }

    else {
      $('.faq__item').find('.faq__item--description').slideUp(300);
      $('.faq__item').removeClass('active');
      $(this).closest('.faq__item').addClass('active');
      $(this).closest('.faq__item').find('.faq__item--description').slideDown(300);
    }
  });

  $(document).click( function(event){
    if( $(event.target).closest('.faq__item').length )
    return;

    $('.faq__item').find('.faq__item--description').slideUp(300);
    $('.faq__item').removeClass('active');
    event.stopPropagation();
  });
};

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

$('form').on('click', '.bg-input__show', function (e) {
  if ($(this).hasClass('show-password')) {
    $(this).removeClass('show-password');
    $(this).closest('.bg-input').find('input').attr('type', 'password');
  }

  else {
    $(this).addClass('show-password');
    $(this).closest('.bg-input').find('input').attr('type', 'text');
  }
});

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

if($('.drop-down__search').get(0) != undefined) {
  $('input.drop-down__search').on("change keyup input click", function() {
    filterFunction();
  });

  function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.querySelector('.drop-down__search');
    filter = input.value.toUpperCase();
    div = document.querySelector('.drop-down__content');
    a = div.getElementsByTagName("li");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }
};

if($('.form .drop-down').get(0) != undefined) {
  $('.form .drop-down').find('>.result').on('click', function () {
    if ($(this).closest('.drop-down').hasClass('active')) {
      $('.form .drop-down').removeClass('active');
      $('.form .drop-down').find('>.drop-down__list').slideUp(300);
    }

    else  {
      $('.form .drop-down').removeClass('active');
      $('.form .drop-down>.drop-down__list').slideUp(300);
      $(this).closest('.form .drop-down').addClass('active');
      $(this).closest('.form .drop-down').find('>.drop-down__list').slideDown(300);
    }
  });

  $('.form .drop-down').find("li").hover(function () {
    $('.form .drop-down li').removeClass('hover');
    $(this).addClass('hover');

    $(this).on('click', function () {
      var p_small = $('.form .drop-down li.hover').text();
      $(this).closest('.form .drop-down').find('>.result>p').text(p_small);
      var input_v = $(this).closest('.bg-input').find('input:not(.drop-down__search)').val(p_small);
      $(this).closest('.bg-input').find('input.drop-down__search').val('');
      console.log(input_v);
      $('.form .drop-down').removeClass('active');
      $('.form .drop-down>.drop-down__list').slideUp(300);
      $('.form .drop-down').find("li").fadeIn();
    });
  });

  $(document).click( function(event){
    if( $(event.target).closest('.form .drop-down').length )
    return;

    $('.form .drop-down').removeClass('active');
    $('.form .drop-down>.drop-down__list').slideUp(300);
    event.stopPropagation();
  });
};

if($('.textarea textarea').get(0) != undefined) {
  var tx = document.getElementsByTagName('textarea');
  for (var i = 0; i < tx.length; i++) {
    tx[i].setAttribute('style', 'height:' + (tx[i].scrollHeight) + 'px;overflow-y:hidden;');
    tx[i].addEventListener("input", OnInput, false);
  }

  function OnInput() {
    this.style.height = 'auto';
    this.style.height = (this.scrollHeight) + 'px';
  }
};

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

$(document).on('click','.mobile:not(.cabinet-mobile-small) .dropdown-toggle',function (e) {

  if ($(this).closest('.header').hasClass('active')) {
    $('.mobile:not(.cabinet-mobile-small)').removeClass('open-menu');
    $(this).closest('.mobile:not(.cabinet-mobile-small)').find('.header .header__nav').fadeOut(300);
    $(this).closest('.mobile:not(.cabinet-mobile-small)').find('.header').removeClass('active');
  }

  else {
    $('.mobile:not(.cabinet-mobile-small)').addClass('open-menu');
    $(this).closest('.mobile:not(.cabinet-mobile-small)').find('.header').addClass('active');
    $(this).closest('.mobile:not(.cabinet-mobile-small)').find('.header .header__nav').fadeIn(300);
    $(this).closest('.mobile:not(.cabinet-mobile-small)').find('.header .header__nav').css('display', 'flex');
  }
});

$(document).click( function(event){
  if( $(event.target).closest('.mobile:not(.cabinet-mobile-small) .header__nav, .mobile:not(.cabinet-mobile-small) .dropdown-toggle').length )
  return;

  $('.mobile:not(.cabinet-mobile-small) .header').find('.header__nav').fadeOut(300);
  $('.mobile:not(.cabinet-mobile-small) .header').removeClass('active');
  $('.mobile:not(.cabinet-mobile-small)').removeClass('open-menu');
  event.stopPropagation();
});

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

$(document).on('click','.cabinet-mobile-small .dropdown-toggle',function (e) {

  if ($(this).closest('.header').hasClass('active')) {
    $('.cabinet-mobile-small').removeClass('open-menu');
    $(this).closest('.cabinet-mobile-small').find('.header .header__nav').fadeOut(300);
    $(this).closest('.cabinet-mobile-small').find('.header').removeClass('active');
  }

  else {
    $('.cabinet-mobile-small').addClass('open-menu');
    $(this).closest('.cabinet-mobile-small').find('.header').addClass('active');
    $(this).closest('.cabinet-mobile-small').find('.header .header__nav').fadeIn(300);
    $(this).closest('.cabinet-mobile-small').find('.header .header__nav').css('display', 'flex');
  }

  $(document).on('click','.cabinet-mobile-small .header__nav--close',function (e) {
    $('.cabinet-mobile-small .header').find('.header__nav').fadeOut(300);
    $('.cabinet-mobile-small .header').removeClass('active');
    $('.cabinet-mobile-small').removeClass('open-menu');
  });
});

$(document).click( function(event){
  if( $(event.target).closest('.cabinet-mobile-small .header__nav, .cabinet-mobile-small .dropdown-toggle, .cabinet-mobile .aside, .cabinet-mobile .open-settings').length )
  return;

  $('.cabinet-mobile-small .header').find('.header__nav').fadeOut(300);
  $('.cabinet-mobile-small .header').removeClass('active');
  $('.cabinet-mobile-small').removeClass('open-menu');
  event.stopPropagation();
});

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

$(document).on('click','.cabinet-mobile .open-settings',function (e) {

  if ($(this).closest('.header').hasClass('active')) {
    $('.cabinet-mobile').removeClass('open-menu');
    $(this).closest('.cabinet-mobile').find('.header .aside').fadeOut(300);
    $(this).closest('.cabinet-mobile').find('.header').removeClass('active');
  }

  else {
    $('.cabinet-mobile').addClass('open-menu');
    $(this).closest('.cabinet-mobile').find('.header').addClass('active');
    $(this).closest('.cabinet-mobile').find('.header .aside').fadeIn(300);
    $(this).closest('.cabinet-mobile').find('.header .aside').css('display', 'flex');
  }

  $(document).on('click','.cabinet-mobile .aside-close',function (e) {
    $('.cabinet-mobile .header').find('.aside').fadeOut(300);
    $('.cabinet-mobile .header').removeClass('active');
    $('.cabinet-mobile').removeClass('open-menu');
  });
});

$(document).click( function(event){
  if( $(event.target).closest('.cabinet-mobile-small .header__nav, .cabinet-mobile-small .dropdown-toggle, .cabinet-mobile .aside, .cabinet-mobile .open-settings').length )
  return;

  $('.cabinet-mobile .header').find('.aside').fadeOut(300);
  $('.cabinet-mobile .header').removeClass('active');
  $('.cabinet-mobile').removeClass('open-menu');
  event.stopPropagation();
});

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

if($('.timer-count').get(0) != undefined) {
  class CountdownTimer {
    constructor(deadline, cbChange, cbComplete) {
      this._deadline = deadline;
      this._cbChange = cbChange;
      this._cbComplete = cbComplete;
      this._timerId = null;
      this._out = {
        days: '', hours: '', minutes: '', seconds: '',
        daysTitle: '', hoursTitle: '', minutesTitle: '', secondsTitle: ''
      };
      this._start();
    }
    static declensionNum(num, words) {
      return words[(num % 100 > 4 && num % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(num % 10 < 5) ? num % 10 : 5]];
    }
    _start() {
      this._calc();
      this._timerId = setInterval(this._calc.bind(this), 1000);
    }
    _calc() {
      const diff = this._deadline - new Date();
      const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
      const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
      const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
      const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;

      this._out.days = days < 10 ? days : days;
      this._out.hours = hours < 10 ? '0' + hours : hours;
      this._out.minutes = minutes < 10 ? '0' + minutes : minutes;
      this._out.seconds = seconds < 10 ? '0' + seconds : seconds;

      this._cbChange ? this._cbChange(this._out) : null;
      if (diff <= 0) {
        clearInterval(this._timerId);
        this._cbComplete ? this._cbComplete() : null;
      }
    }
  }

/*
  let timer_all = document.querySelectorAll('.timer-count');
  setTimeout(function() {
    timer_all.forEach(function(timer_all__elem) {
      var data_count = $(timer_all__elem).attr('data-count');
      var data_date = $(timer_all__elem).attr('data-date');
      var data_year = $(timer_all__elem).attr('data-year');
      var data_month = $(timer_all__elem).attr('data-month');
      var data_day = $(timer_all__elem).attr('data-day');
      var data_hour = $(timer_all__elem).attr('data-hour');
      var data_minute = $(timer_all__elem).attr('data-minute');
      var data_second = $(timer_all__elem).attr('data-second');

      const elDays = timer_all__elem.querySelector(`.timer__days`);
      const elHours = timer_all__elem.querySelector(`.timer__hours`);
      const elMinutes = timer_all__elem.querySelector(`.timer__minutes`);
      const elSeconds = timer_all__elem.querySelector(`.timer__seconds`);
      const deadline = new Date(data_year, data_month, data_day, data_hour, data_minute, data_second, 0 + (24*60*60*1000+999)); // месяц на единикцу меньше поскольку отсчёт начинается с "0" если указывать вручную
      $('.timer-count>*').css('display', 'flex');

      new CountdownTimer(deadline, (timer) => {
        elDays.textContent = timer.days;
        elHours.textContent = timer.hours;
        elMinutes.textContent = timer.minutes;
        elSeconds.textContent = timer.seconds;
        elDays.dataset.title = timer.daysTitle;
        elHours.dataset.title = timer.hoursTitle;
        elMinutes.dataset.title = timer.minutesTitle;
        elSeconds.dataset.title = timer.secondsTitle;
      }, () => {
        timer_all__elem.querySelector('.timer__result').innerHTML = 'Processing';
        $(timer_all__elem).addClass('complete');
      });

    });
  }, 500 );
*/



};

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

if($('.global__list--slide').get(0) != undefined) {

  let filter_setting = document.querySelectorAll('.global__list');

  setTimeout(function() {
    filter_setting.forEach(function(filter_setting__elem) {
      var change_height = $(filter_setting__elem).find('.global__list--fade');
      var array = [];
      var sum = 0;

      for ( var i = 0; i<7; i++ ) {
        array[i] = $(filter_setting__elem).find('.global__list--item').eq(i).outerHeight();
        sum = sum + array[i];
      }

      var bloks_total_height = $(filter_setting__elem).find('.global__list--slide');
      $(bloks_total_height).css('height', sum + 'px');

      if(change_height.length){
        for(i=0; i < change_height.length;i++){
          blok_height = $(change_height[i]).outerHeight();
          blok_height_s = $(bloks_total_height).outerHeight();

          if(blok_height > blok_height_s){
            $(filter_setting__elem).addClass('scroll-fade');
            $(change_height[i]).closest(filter_setting__elem).addClass('show-btn');
            setTimeout(function() {
              $(filter_setting__elem).find('.custom-content').css('max-height', sum + 'px');
              $(filter_setting__elem).find('.custom-content').addClass('overflow');
            }, 20 );

            $(filter_setting__elem).find('.show-more').click(function () {
              $(this).toggleClass('open-list');

              if($(this).hasClass('open-list')) {
                $(filter_setting__elem).find('.custom-content').css('max-height', 'auto');
                $(filter_setting__elem).find('.custom-content').removeClass('overflow');
                $(filter_setting__elem).removeClass('scroll-fade');
                $(filter_setting__elem).find(".show-more").addClass('disable');
              }
              else {
                $(filter_setting__elem).find('.custom-content').css('max-height', sum + 'px');
                $(filter_setting__elem).find('.custom-content').addClass('overflow');
                $(filter_setting__elem).addClass('scroll-fade');
                $(filter_setting__elem).find(".show-more").removeClass('disable');
              };
            });
          }
        }
      }
    });
  }, 50 );
};

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

if($('.program .btn-close').get(0) != undefined) {
  $('.program .btn-close').click(function () {
    $('.program').fadeOut(300);
    setCookie('ref_program', '1', {secure: true, 'max-age': 3600000});
  });
};

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

  function adaptiveFixed(num, needNonZero) {
    let res = Math.trunc(num);
    let frac = Math.abs(num - res);
    if (frac === 0)
      return res;
    res += '.';
    let numNonZero = 0;
    while (frac !== 0 && numNonZero < needNonZero) {
      frac *= 10;
      const cur = Math.floor(frac);
      res += cur;
      frac -= cur;
      if (cur !== 0)
        numNonZero++;
    }
    return res;
  }

if($('.invest .drop-down').get(0) != undefined) {
  $('.invest .drop-down').find('>.result').on('click', function () {
    if ($(this).closest('.invest .drop-down').hasClass('active')) {
      $('.invest .drop-down').removeClass('active');
      $('.invest .drop-down').find('>ul').slideUp(300);
    }

    else  {
      $('.invest .drop-down').removeClass('active');
      $('.invest .drop-down>ul').slideUp(300);
      $(this).closest('.invest .drop-down').addClass('active');
      $(this).closest('.invest .drop-down').find('>ul').slideDown(300);
    }
  });

  $('.invest .drop-down:not(.contacts__drop-down)').find("li").hover(function () {
    $('.invest .drop-down:not(.contacts__drop-down) li').removeClass('hover');
    $(this).addClass('hover');
  });

  $('.invest .drop-down:not(.contacts__drop-down)').on('click', 'li.hover',function () {
    $('.invest .drop-down:not(.contacts__drop-down)').find("li").css('display', 'list-item');
    $(this).css('display', 'none');
    var crypto_result = document.querySelector('.invest .drop-down:not(.contacts__drop-down) li.hover>p:first-child').innerHTML;

    var crypto_name = $('.invest .drop-down li.hover>p .crypto-name').text();
    var crypto_abbreviation = $('.invest .drop-down:not(.contacts__drop-down) li.hover>p .crypto-abbreviation').text();
    var crypto_rates = $('.invest .drop-down:not(.contacts__drop-down) li.hover>p .crypto-rates').text();
    var crypto_min = $('.invest .drop-down:not(.contacts__drop-down) li.hover>p .crypto-min').text();
    var crypto_max = $('.invest .drop-down:not(.contacts__drop-down) li.hover>p .crypto-max').text();
    var crypto_time = $('.invest .drop-down:not(.contacts__drop-down) li.hover>p .crypto-time-send').text();
    var crypto_address = $('.invest .drop-down:not(.contacts__drop-down) li.hover>p .crypto-address').text();

    document.querySelector('.invest .drop-down:not(.contacts__drop-down)>.result').innerHTML = crypto_result;
    $(this).closest('.invest .drop-down:not(.contacts__drop-down)').find('>.result').removeClass('btc');
    $(this).closest('.invest .drop-down:not(.contacts__drop-down)').find('>.result').removeClass('usdt');
    $(this).closest('.invest .drop-down:not(.contacts__drop-down)').find('>.result').removeClass('trx');
    $(this).closest('.invest .drop-down:not(.contacts__drop-down)').find('>.result').removeClass('ltc');
    $(this).closest('.invest .drop-down:not(.contacts__drop-down)').find('>.result').addClass(crypto_abbreviation.toLowerCase());

    if($('.invest__rates--item.current').get(0) != undefined) {
      document.querySelector('.invest__rates--item.current>span').innerHTML = 'Rate <b>'+crypto_abbreviation+'</b>';
      $('.invest__rates--item.current>p').text('$'+crypto_rates);
      $("input[name='abbreviation_hidden']").val(crypto_abbreviation);
      $("input[name='rates_hidden']").val(crypto_rates);
    };

    if($('.invest__rates--item.min-max').get(0) != undefined) {
      $("input[name='rates_min']").val(crypto_min);
      $("input[name='rates_max']").val(crypto_max);
    };

    if($('.invest__rates--item.time-send').get(0) != undefined) {
      $('.invest__rates--item.time-send>p').text(crypto_time);
    };

    if($('.bg-input.abbreviation').get(0) != undefined) {
      $('.bg-input.abbreviation>p').text(crypto_abbreviation);
      $(".invest__rates--min-coin>span").text(crypto_abbreviation);
      $(".invest__rates--max-coin>span").text(crypto_abbreviation);
    };

    if($('.pay__address--header').get(0) != undefined) {
      $('.pay__address--header>span').text(crypto_abbreviation);
    };

    if($('.pay__address--input').get(0) != undefined) {
      $('.pay__address--input>p').text(crypto_address);
    };

    if($('.bg-input.address').get(0) != undefined) {
      $('.bg-input.address>span').text(crypto_address);
    };

    if($('.bg-input.address .label').get(0) != undefined) {
      $('.bg-input.address .label>span').text(crypto_name);
    };

    if($("input[name='value_dollar']").get(0) != undefined) {
      ratesMin = Number(crypto_min)/Number(crypto_rates);
      ratesMax = Number(crypto_max)/Number(crypto_rates);

      if (crypto_abbreviation == 'BTC') {
        $("input[name='value_crypto_hidden']").val(adaptiveFixed(ratesMin, 5));
        $("input[name='value_crypto']").val(adaptiveFixed(ratesMin, 5));
        $("input[name='value_crypto']").attr('placeholder', adaptiveFixed(ratesMin, 5));
        $("input[name='value_dollar']").attr('placeholder', crypto_min);
        $("input[name='value_dollar']").val(crypto_min);
        $(".invest__rates--min-coin>p").text(adaptiveFixed(ratesMin, 5));
        $(".invest__rates--max-coin>p").text(adaptiveFixed(ratesMax, 5));
      }

      else {        $("input[name='value_crypto']").val(adaptiveFixed(ratesMin, 3));
        $("input[name='value_crypto_hidden']").val(adaptiveFixed(ratesMin, 3));
        $("input[name='value_crypto']").attr('placeholder', adaptiveFixed(ratesMin, 3));
        $("input[name='value_dollar']").attr('placeholder', crypto_min);
        $("input[name='value_dollar']").val(crypto_min);
        $(".invest__rates--min-coin>p").text(adaptiveFixed(ratesMin, 3));
        $(".invest__rates--max-coin>p").text(adaptiveFixed(ratesMax, 3));
      }

      profit_daily = Math.fround(crypto_min*10/100);
      profit_total = Math.fround(crypto_min*140/100);
      $("input[name='profit_daily']").val((profit_daily).toFixed(2));
      $("input[name='profit_total']").val((profit_total).toFixed(2));
      $("input[name='profit_daily']").attr('placeholder', (profit_daily).toFixed(2));
      $("input[name='profit_total']").attr('placeholder', (profit_total).toFixed(2));
    };

    $('.invest .drop-down:not(.contacts__drop-down)').removeClass('active');
    $('.invest .drop-down:not(.contacts__drop-down)>ul').slideUp(300);
  });

  $('.invest .drop-down.contacts__drop-down').find("li").hover(function () {
    $('.invest .drop-down.contacts__drop-down li').removeClass('hover');
    $(this).addClass('hover');

    $(this).on('click', function () {
      var crypto_result = $('.invest .drop-down.contacts__drop-down li.hover').text();
      $(this).closest('.invest .drop-down.contacts__drop-down').find('>.result').text(crypto_result);

      $('.invest .drop-down.contacts__drop-down').removeClass('active');
      $('.invest .drop-down.contacts__drop-down>ul').slideUp(300);
    });
  });

  $(document).click( function(event){
    if( $(event.target).closest('.invest .drop-down').length )
    return;

    $('.invest .drop-down').removeClass('active');
    $('.invest .drop-down>ul').slideUp(300);
    event.stopPropagation();
  });
};

////////////////////////////////////////////////////////////////////////////////////////////

$('.invest__line input:not([hidden], [name="fa_code"])').on("change keyup input click", function() {
    this.value = this.value.replace(/[^\d\.,]/g, "");
    this.value = this.value.replace(/,/g, ".");
      if(this.value.match(/\./g)) {
        if(this.value.match(/\./g).length > 1) {
          this.value = this.value.substr(0, this.value.lastIndexOf("."));
        }
      }
});

$(window).on('load', function () {
  //
  if($('.invest .drop-down li.for-load').get(0) != undefined) {
    var crypto_result = document.querySelector('.invest .drop-down li.for-load>p:first-child').innerHTML;
    var crypto_abbreviation = $('.invest .drop-down li.for-load>p .crypto-abbreviation').text();
    var crypto_rates = $('.invest .drop-down li.for-load>p .crypto-rates').text();
    var crypto_min = $('.invest .drop-down li.for-load>p .crypto-min').text();
    var crypto_max = $('.invest .drop-down li.for-load>p .crypto-max').text();
    var crypto_time = $('.invest .drop-down li.for-load>p .crypto-time-send').text();
    var crypto_address = $('.invest .drop-down li.for-load>p .crypto-address').text();

    document.querySelector('.invest .drop-down>.result').innerHTML = crypto_result;

    if($('.invest__rates--item.current').get(0) != undefined) {
      document.querySelector('.invest__rates--item.current>span').innerHTML = 'Rate <b>'+crypto_abbreviation+'</b>';
      $('.invest__rates--item.current>p').text('$'+crypto_rates);
      $("input[name='abbreviation_hidden']").val(crypto_abbreviation);
      $("input[name='rates_hidden']").val(crypto_rates);
    };

    if($('.invest__rates--item.min-max').get(0) != undefined) {
      $("input[name='rates_min']").val(crypto_min);
      $("input[name='rates_max']").val(crypto_max);
    };

    if($('.invest__rates--item.time-send').get(0) != undefined) {
      $('.invest__rates--item.time-send>p').text(crypto_time);
    };

    if($('.bg-input.address').get(0) != undefined) {
      $('.bg-input.address>span').text(crypto_address);
    };

    if($('.bg-input.abbreviation').get(0) != undefined) {
      $('.bg-input.abbreviation>p').text(crypto_abbreviation);
      $(".invest__rates--min-coin>span").text(crypto_abbreviation);
      $(".invest__rates--max-coin>span").text(crypto_abbreviation);
    };

    if($('.pay__address--header').get(0) != undefined) {
      $('.pay__address--header>span').text(crypto_abbreviation);
    };

    if($('.pay__address--input').get(0) != undefined) {
      $('.pay__address--input>p').text(crypto_address);
    };

    if($("input[name='value_dollar']").get(0) != undefined) {
      ratesMin = Number(crypto_min)/Number(crypto_rates);
      ratesMax = Number(crypto_max)/Number(crypto_rates);

      if (crypto_abbreviation == 'BTC') {
        $("input[name='value_crypto_hidden']").val(adaptiveFixed(ratesMin, 5));
        $("input[name='value_crypto']").val(adaptiveFixed(ratesMin, 5));
        $("input[name='value_crypto']").attr('placeholder', adaptiveFixed(ratesMin, 5));
        $("input[name='value_dollar']").attr('placeholder', crypto_min);
        $("input[name='value_dollar']").val(crypto_min);
        $(".invest__rates--min-coin>p").text(adaptiveFixed(ratesMin, 5));
        $(".invest__rates--max-coin>p").text(adaptiveFixed(ratesMax, 5));
      }

      else {
        $("input[name='value_crypto']").val(adaptiveFixed(ratesMin, 3));
        $("input[name='value_crypto_hidden']").val(adaptiveFixed(ratesMin, 3));
        $("input[name='value_crypto']").attr('placeholder', adaptiveFixed(ratesMin, 3));
        $("input[name='value_dollar']").attr('placeholder', crypto_min);
        $("input[name='value_dollar']").val(crypto_min);
        $(".invest__rates--min-coin>p").text(adaptiveFixed(ratesMin, 3));
        $(".invest__rates--max-coin>p").text(adaptiveFixed(ratesMax, 3));
      }

      profit_daily = Math.fround(crypto_min*10/100);
      profit_total = Math.fround(crypto_min*140/100);
      $("input[name='profit_daily']").val((profit_daily).toFixed(2));
      $("input[name='profit_total']").val((profit_total).toFixed(2));
      $("input[name='profit_daily']").attr('placeholder', (profit_daily).toFixed(2));
      $("input[name='profit_total']").attr('placeholder', (profit_total).toFixed(2));
    };
  //

  //
  if($("input[name='value_crypto']").get(0) != undefined) {
    $(document).on("input", "input[name='value_crypto']", function () {
      var abbreviation_crypto = $("input[name='abbreviation_hidden']").val();
      var crypto_rates = Number ($("input[name='rates_hidden']").val());
      var amountDolar = Number ($("input[name='value_dollar']").val());
      var amountCrypto = Number ($("input[name='value_crypto']").val());
      var crypto_max = Number($("input[name='rates_max']").val());
      var profit_daily = Number($("input[name='profit_daily']").val());
      var profit_total = Number($("input[name='profit_total']").val());
      var this_value = $(this).val();

      if (abbreviation_crypto=='BTC') {
        if(this_value == '.') {
          $("input[name='value_dollar']").val('0');
          $("input[name='profit_total']").val('0');
          $("input[name='profit_daily']").val('0');
        }

        else {
          var amountCrypto = Number ($("input[name='value_crypto']").val());
          amountDolar = Math.fround(amountCrypto*crypto_rates);
          $("input[name='value_dollar']").val((amountDolar).toFixed(3));

          profit_daily = Math.fround(amountDolar*10/100);
          profit_total = Math.fround(amountDolar*140/100);
          $("input[name='profit_daily']").val((profit_daily).toFixed(2));
          $("input[name='profit_total']").val((profit_total).toFixed(2));

          if (amountDolar>crypto_max) {
            $("input[name='value_dollar']").val(crypto_max);
            $("input[name='value_crypto']").val(adaptiveFixed(crypto_max/crypto_rates, 5));

            profit_daily = Math.fround(crypto_max*10/100);
            profit_total = Math.fround(crypto_max*140/100);
            $("input[name='profit_daily']").val((profit_daily).toFixed(2));
            $("input[name='profit_total']").val((profit_total).toFixed(2));
          }
        }
      }

      else {
        if(this_value == '.') {
          $("input[name='value_dollar']").val('0');
          $("input[name='profit_total']").val('0');
          $("input[name='profit_daily']").val('0');
        }

        else {
          var amountCrypto = Number ($("input[name='value_crypto']").val());
          amountDolar = Math.fround(amountCrypto*crypto_rates);
          $("input[name='value_dollar']").val((amountDolar).toFixed(3));

          profit_daily = Math.fround(amountDolar*10/100);
          profit_total = Math.fround(amountDolar*140/100);
          $("input[name='profit_daily']").val((profit_daily).toFixed(2));
          $("input[name='profit_total']").val((profit_total).toFixed(2));

          if (amountDolar>crypto_max) {
            $("input[name='value_dollar']").val(crypto_max);
            $("input[name='value_crypto']").val(adaptiveFixed(crypto_max/crypto_rates, 3));

            profit_daily = Math.fround(crypto_max*10/100);
            profit_total = Math.fround(crypto_max*140/100);
            $("input[name='profit_daily']").val((profit_daily).toFixed(2));
            $("input[name='profit_total']").val((profit_total).toFixed(2));
          }
        }
      }

      if (amountCrypto=='') {
        $("input[name='value_dollar']").val('');
        $("input[name='profit_daily']").val('');
        $("input[name='profit_total']").val('');
      }
    });
  };
  //

  //

  if($("input[name='value_dollar']").get(0) != undefined) {

    $(document).on("input", "input[name='value_dollar']", function () {

      var abbreviation_crypto = $("input[name='abbreviation_hidden']").val();
      var crypto_rates = Number ($("input[name='rates_hidden']").val());
      var amountDolar = Number ($("input[name='value_dollar']").val());


      var amountCrypto = Number ($("input[name='value_crypto']").val());
      var crypto_max = Number($("input[name='rates_max']").val());
      var this_value = $(this).val();

      if (abbreviation_crypto=='BTC') {
        if(this_value == '.') {
          $("input[name='value_crypto']").val('0');
          $("input[name='profit_total']").val('0');
          $("input[name='profit_daily']").val('0');
        }

        else {
          var amountDolar = Number ($("input[name='value_dollar']").val());
          amountCrypto = Math.fround(amountDolar/crypto_rates);
          $("input[name='value_crypto']").val(adaptiveFixed(amountCrypto, 5));

          profit_daily = Math.fround(amountDolar*10/100);
          profit_total = Math.fround(amountDolar*140/100);
          $("input[name='profit_daily']").val((profit_daily).toFixed(2));
          $("input[name='profit_total']").val((profit_total).toFixed(2));

          if (amountDolar>crypto_max) {
            $("input[name='value_dollar']").val(crypto_max);
            amountCrypto = Math.fround(crypto_max/crypto_rates);
            $("input[name='value_crypto']").val((amountCrypto).toFixed(5));

            profit_daily = Math.fround(crypto_max*10/100);
            profit_total = Math.fround(crypto_max*140/100);
            $("input[name='profit_daily']").val((profit_daily).toFixed(2));
            $("input[name='profit_total']").val((profit_total).toFixed(2));
          }
        }
      }

      else {
        if(this_value == '.') {
          $("input[name='value_crypto']").val('0');
          $("input[name='profit_total']").val('0');
          $("input[name='profit_daily']").val('0');
        }

        else {
          var amountDolar = Number ($("input[name='value_dollar']").val());
          amountCrypto = Math.fround(amountDolar/crypto_rates);
          $("input[name='value_crypto']").val(adaptiveFixed(amountCrypto, 3));

          profit_daily = Math.fround(amountDolar*10/100);
          profit_total = Math.fround(amountDolar*140/100);
          $("input[name='profit_daily']").val((profit_daily).toFixed(2));
          $("input[name='profit_total']").val((profit_total).toFixed(2));

          if (amountDolar>crypto_max) {
            $("input[name='value_dollar']").val(crypto_max);
            amountCrypto = Math.fround(crypto_max/crypto_rates);
            $("input[name='value_crypto']").val((amountCrypto).toFixed(3));

            profit_daily = Math.fround(crypto_max*10/100);
            profit_total = Math.fround(crypto_max*140/100);
            $("input[name='profit_daily']").val((profit_daily).toFixed(2));
            $("input[name='profit_total']").val((profit_total).toFixed(2));
          }
        }
      }

      if (amountDolar=='') {
        $("input[name='value_crypto']").val('');
        $("input[name='profit_daily']").val('');
        $("input[name='profit_total']").val('');
      }
    });
  };
  //

  //
  if($("input[name='profit_daily']").get(0) != undefined) {
    $(document).on("input", "input[name='profit_daily']", function () {
      var abbreviation_crypto = $("input[name='abbreviation_hidden']").val();
      var crypto_rates = Number ($("input[name='rates_hidden']").val());
      var amountDolar = Number ($("input[name='value_dollar']").val());
      var amountCrypto = Number ($("input[name='value_crypto']").val());
      var crypto_max = Number($("input[name='rates_max']").val());
      var profit_daily = Number($("input[name='profit_daily']").val());
      var this_value = $(this).val();

      if (abbreviation_crypto=='BTC') {
        if(this_value == '.') {
          $("input[name='value_crypto']").val('0');
          $("input[name='profit_total']").val('0');
          $("input[name='value_dollar']").val('0');
        }

        else {
          var profit_daily = Number ($("input[name='profit_daily']").val());
          amountDolar = Math.fround(profit_daily*100/10);
          amountCrypto = Math.fround(amountDolar/crypto_rates);
          $("input[name='value_dollar']").val((amountDolar).toFixed(2));
          $("input[name='value_crypto']").val(adaptiveFixed(amountCrypto, 5));
          profit_total = Math.fround(amountDolar*140/100);
          $("input[name='profit_total']").val((profit_total).toFixed(2));

          if (amountDolar>crypto_max) {
            $("input[name='value_dollar']").val(crypto_max);
            amountCrypto = Math.fround(crypto_max/crypto_rates);
            $("input[name='value_crypto']").val((amountCrypto).toFixed(5));

            profit_daily = Math.fround(crypto_max*10/100);
            profit_total = Math.fround(crypto_max*140/100);
            $("input[name='profit_daily']").val((profit_daily).toFixed(2));
            $("input[name='profit_total']").val((profit_total).toFixed(2));
          }
        }
      }

      else {
        if(this_value == '.') {
          $("input[name='value_crypto']").val('0');
          $("input[name='profit_total']").val('0');
          $("input[name='value_dollar']").val('0');
        }

        else {
          var profit_daily = Number ($("input[name='profit_daily']").val());
          amountDolar = Math.fround(profit_daily*100/10);
          amountCrypto = Math.fround(amountDolar/crypto_rates);
          $("input[name='value_dollar']").val((amountDolar).toFixed(2));
          $("input[name='value_crypto']").val(adaptiveFixed(amountCrypto, 3));
          profit_total = Math.fround(amountDolar*140/100);
          $("input[name='profit_total']").val((profit_total).toFixed(2));

          if (amountDolar>crypto_max) {
            $("input[name='value_dollar']").val(crypto_max);
            amountCrypto = Math.fround(crypto_max/crypto_rates);
            $("input[name='value_crypto']").val((amountCrypto).toFixed(3));

            profit_daily = Math.fround(crypto_max*10/100);
            profit_total = Math.fround(crypto_max*140/100);
            $("input[name='profit_daily']").val((profit_daily).toFixed(2));
            $("input[name='profit_total']").val((profit_total).toFixed(2));
          }
        }
      }

      if (profit_daily=='') {
        $("input[name='value_dollar']").val('');
        $("input[name='value_crypto']").val('');
        $("input[name='profit_total']").val('');
      }
    });
  };
  //

  //
  if($("input[name='profit_total']").get(0) != undefined) {
    $(document).on("input", "input[name='profit_total']", function () {
      var abbreviation_crypto = $("input[name='abbreviation_hidden']").val();
      var crypto_rates = Number ($("input[name='rates_hidden']").val());
      var amountDolar = Number ($("input[name='value_dollar']").val());
      var amountCrypto = Number ($("input[name='value_crypto']").val());
      var crypto_max = Number($("input[name='rates_max']").val());
      var profit_total = Number($("input[name='profit_total']").val());
      var this_value = $(this).val();

      if (abbreviation_crypto=='BTC') {
        if(this_value == '.') {
          $("input[name='value_crypto']").val('0');
          $("input[name='profit_daily']").val('0');
          $("input[name='value_dollar']").val('0');
        }

        else {
          var profit_total = Number ($("input[name='profit_total']").val());
          amountDolar = Math.fround(profit_total*100/140);
          amountCrypto = Math.fround(amountDolar/crypto_rates);
          $("input[name='value_dollar']").val((amountDolar).toFixed(2));
          $("input[name='value_crypto']").val(adaptiveFixed(amountCrypto, 5));
          profit_daily = Math.fround(amountDolar*10/100);
          $("input[name='profit_daily']").val((profit_daily).toFixed(2));

          if (amountDolar>crypto_max) {
            $("input[name='value_dollar']").val(crypto_max);
            amountCrypto = Math.fround(crypto_max/crypto_rates);
            $("input[name='value_crypto']").val((amountCrypto).toFixed(5));

            profit_daily = Math.fround(crypto_max*10/100);
            profit_total = Math.fround(crypto_max*140/100);
            $("input[name='profit_daily']").val((profit_daily).toFixed(2));
            $("input[name='profit_total']").val((profit_total).toFixed(2));
          }
        }
      }

      else {
        if(this_value == '.') {
          $("input[name='value_crypto']").val('0');
          $("input[name='profit_daily']").val('0');
          $("input[name='value_dollar']").val('0');
        }

        else {
          var profit_total = Number ($("input[name='profit_total']").val());
          amountDolar = Math.fround(profit_total*100/140);
          amountCrypto = Math.fround(amountDolar/crypto_rates);
          $("input[name='value_dollar']").val((amountDolar).toFixed(2));
          $("input[name='value_crypto']").val(adaptiveFixed(amountCrypto, 3));
          profit_daily = Math.fround(amountDolar*10/100);
          $("input[name='profit_daily']").val((profit_daily).toFixed(2));

          if (amountDolar>crypto_max) {
            $("input[name='value_dollar']").val(crypto_max);
            amountCrypto = Math.fround(crypto_max/crypto_rates);
            $("input[name='value_crypto']").val((amountCrypto).toFixed(3));

            profit_daily = Math.fround(crypto_max*10/100);
            profit_total = Math.fround(crypto_max*140/100);
            $("input[name='profit_daily']").val((profit_daily).toFixed(2));
            $("input[name='profit_total']").val((profit_total).toFixed(2));
          }
        }
      }

      if (profit_daily=='') {
        $("input[name='value_dollar']").val('');
        $("input[name='value_crypto']").val('');
        $("input[name='profit_daily']").val('');
      }
    });
  };
  //
  };
});

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

if($('section:not(.popup) .btn-copy').get(0) != undefined) {

  $('.pay__address--input').hover(function () {
    $('.pay__address--input').removeClass('hover');
    $(this).addClass('hover');

    document.querySelector(".pay__address--input.hover .btn-copy").onclick = function() {
      $('.btn-copy').removeClass('copy-success');
      var copyTextarea = document.createElement("textarea");
      copyTextarea.textContent = document.querySelector(".pay__address--input.hover p").innerText;
      $(this).addClass('copy-success');

      setTimeout(function(){
        document.body.appendChild(copyTextarea);
        copyTextarea.select();
        document.execCommand("copy");
        document.body.removeChild(copyTextarea);
      }, 100);

      setTimeout(function(){
        $('.copy-success').removeClass('copy-success');
      }, 2000);
    }
  });
};

// /////////////////////////////////////////////////////////////////
// /////////////////////////////////////////////////////////////////

if($('.pay__confirm--info').get(0) != undefined) {
  var timeout_coin = 0;

  $('.pay__confirm--info').hover(
    function() {
      if (timeout_coin != undefined) clearTimeout(timeout_coin);
      $('.pay__confirm--popup').fadeIn(300);

    },
    function() {
      timeout_coin = setTimeout(function() {
        $('.pay__confirm--popup').fadeOut(300);
      }, 300 );
    }
  );
};

// /////////////////////////////////////////////////////////////////
// /////////////////////////////////////////////////////////////////

if($('input[name=fa_code]').get(0) != undefined) {
  $("input[name=fa_code]").mask('——————');
};

if($('input[name=fa_code_settings]').get(0) != undefined) {
  $("input[name=fa_code_settings]").mask('————');
};

if($('input[name=fa_code_settings_popup]').get(0) != undefined) {
  $("input[name=fa_code_settings_popup]").mask('——————');
};

// /////////////////////////////////////////////////////////////////
// /////////////////////////////////////////////////////////////////

$(window).on('load', function () {
  if($('.promo__materials--list').get(0) != undefined) {
    $('.promo__materials--list').css('overflow', 'unset');
  };
});

// /////////////////////////////////////////////////////////////////
// /////////////////////////////////////////////////////////////////

if($('.btn__popup').get(0) != undefined) {
  $('.btn__popup').click(function () {
    $('body').addClass('show-popup');
    $('.promo__materials--item').removeClass('active');
    document.querySelector(".popup .popup__header").innerHTML = '';
    document.querySelector(".popup .popup__banner").innerHTML = '';
    $('.popup.preview a').attr('href', '');
    document.querySelector(".popup .popup__item--link p").innerHTML = '';
    document.querySelector(".popup .popup__item--code p").innerHTML = '';
    $(this).closest('.promo__materials--item').addClass('active');
    $('.popup').fadeIn(300);
    $('.popup__close').fadeIn(300);
    $('.popup').css('display', 'flex');

    setTimeout(function(){
    var height_popup = $('.popup').outerHeight();
    var height_content = $('.popup__content').outerHeight();
      if (height_popup >= height_content) {
        $('.popup').css('align-items', 'center');
        $('.popup').css('overflow-x', 'hidden');
      }

      else {
        $('.popup').css('align-items', 'flex-start');
        $('.popup').css('overflow-x', 'hidden');
        $('.popup').css('overflow-y', 'auto');
      }
    }, 100);

    if ($(this).hasClass('promo__materials--preview')) {
      setTimeout(function(){
        var popup_header = document.querySelector('.promo__materials--item.active .promo__materials--name').innerHTML;
        var popup_alt = document.querySelector('.promo__materials--item.active .promo__materials--name').innerText.replace(/\s+/g,' ').trim();
        var popup_link = document.querySelector('.promo__materials--item.active .promo__materials--link').innerText.replace(/\s+/g,' ').trim();
        $('.popup').removeClass('code');
        $('.popup').addClass('preview');
        document.querySelector(".popup .preview-form .popup__header").innerHTML = popup_header;
        document.querySelector(".popup .popup__banner").innerHTML = '<img src="'+popup_link+'" alt="'+popup_alt+'">';
        $('.popup a').attr('href', popup_link);
      }, 10);
    }

    else if ($(this).hasClass('promo__materials--code')) {
      setTimeout(function(){
        var popup_header = document.querySelector('.promo__materials--item.active .promo__materials--name').innerHTML;
        var popup_code = document.querySelector('.promo__materials--item.active .promo__materials--html').innerHTML;
        var popup_link = document.querySelector('.promo__materials--item.active .promo__materials--link').innerText.replace(/\s+/g,' ').trim();
        $('.popup').removeClass('preview');
        $('.popup').addClass('code');
        document.querySelector(".popup .code-form .popup__header").innerHTML = popup_header;
        document.querySelector(".popup .popup__item--link p").innerHTML = popup_link;
        document.querySelector(".popup .popup__item--code p").innerHTML = popup_code;
      }, 10);

      $('.popup__item').hover(function () {
        $('.popup__item').removeClass('hover');
        $(this).addClass('hover');

        document.querySelector(".popup__item.hover .btn-copy").onclick = function() {
          $('.btn-copy').removeClass('copy-success');
          var copyTextarea = document.createElement("textarea");
          copyTextarea.textContent = document.querySelector(".popup__item.hover .popup__item--result p").innerText;
          $(this).addClass('copy-success');

          setTimeout(function(){
            document.body.appendChild(copyTextarea);
            copyTextarea.select();
            document.execCommand("copy");
            document.body.removeChild(copyTextarea);
          }, 100);

          setTimeout(function(){
            $('.copy-success').removeClass('copy-success');
          }, 2000);
        }
      });
    }

    else if ($(this).hasClass('settings__user--avatar')) {
      $('.popup').addClass('photo');
    }

    else if ($(this).hasClass('settings__user--on')) {
      $('.popup').addClass('settings-on');
      $('.authentication__description').fadeIn(0);
      $('.authentication__description').css('display', 'flex');

      $(".form-authentication__item--copy ").on("click", ".btn-copy", function() {
        $('.btn-copy').removeClass('copy-success');
        var copyTextarea = document.createElement("textarea");
        copyTextarea.textContent = document.querySelector(".form-authentication__item--copy .form-authentication__item--result p").innerText;
        $(this).addClass('copy-success');

        setTimeout(function(){
          document.body.appendChild(copyTextarea);
          copyTextarea.select();
          document.execCommand("copy");
          document.body.removeChild(copyTextarea);
        }, 100);

        setTimeout(function(){
          $('.copy-success').removeClass('copy-success');
        }, 2000);
      });

      $(".settings-on ").on("click", ".form-authentication__item--code", function() {
        $('.settings-on').addClass('popup-code');
        $('.authentication__description').fadeOut(0);
        $('.authentication__popup--qr').fadeIn(300);
        $('.authentication__popup--qr').css('display', 'flex');
        $('.authentication-on').addClass('show-qr-code');

        $(".authentication__popup--qr").on("click", ".btn__ready", function() {
          $('.settings-on').removeClass('popup-code');
          $('.authentication-on').removeClass('show-qr-code');
          $('.authentication__popup--qr').fadeOut(0);
          $('.authentication__description').fadeIn(300);
          $('.authentication__description').css('display', 'flex');
        });
      });


/*
      $(".settings-on").on("click", ".btn-agree", function() {
        $('.settings__user--off').removeClass('active');
        $('.settings__user--on').addClass('active');
        $('.settings-on').addClass('system-message');
        $('.authentication__description').fadeOut(0);
        $('.authentication__system').fadeIn(300);
        $('.authentication__system').css('display', 'flex');

        $(".authentication__system--enable").on("click", ".btn__got-it", function() {
          $('.authentication__system').fadeOut(0);
          $('.popup__close').fadeOut(0);
          $('.popup').fadeOut(300);
          $('body').removeClass('show-popup');
          $('.popup').removeClass('settings-on');
          $('.popup').removeClass('system-message');
        });
      });
*/


    }

    else if ($(this).hasClass('settings__user--off')) {
      $('.popup').addClass('system-message--off');


/*
      $(".system-message--off").on("click", ".btn-agree", function() {
        $('.settings__user--on').removeClass('active');
        $('.settings__user--off').addClass('active');
        $('.authentication__system').fadeIn(300);
        $('.authentication__system').css('display', 'flex');
        $('.system-message--off').addClass('system-message--success');

        $(".system-message--success").on("click", ".btn__got-it", function() {
          $('.authentication__system').fadeOut(0);
          $('.popup__close').fadeOut(0);
          $('.popup').fadeOut(300);
          $('body').removeClass('show-popup');
          $('.popup').removeClass('system-message--off');
          $('.popup').removeClass('system-message--success');
        });
      });
*/

    }

    else if ($(this).hasClass('ticket-create')) {
      $('.popup').addClass('ticket-popup');

      if($('.textarea textarea').get(0) != undefined) {
        var tx = document.getElementsByTagName('textarea');
        for (var i = 0; i < tx.length; i++) {
          tx[i].setAttribute('style', 'height:' + (tx[i].scrollHeight) + 'px;overflow-y:hidden;');
          tx[i].addEventListener("input", OnInput, false);
        }

        function OnInput() {
          this.style.height = 'auto';
          this.style.height = (this.scrollHeight) + 'px';
        }
      };
    }

    else if ($(this).hasClass('pay__address--code')) {
      $('.popup').addClass('settings-on');

      $('.settings-on').addClass('popup-code');
      $('.authentication__description').fadeOut(0);
      $('.authentication__popup--qr').fadeIn(300);
      $('.authentication-on').addClass('show-qr-code');

      $(".authentication-on").on("click", ".btn__ready", function() {
        $('body').removeClass('show-popup');
        $('.popup__close').fadeOut(0);
        $('.popup').fadeOut(300);
        $('.popup').removeClass('show-qr-code');
      });
    }

    else {
    }

  });

  $('.popup__close, .cancel').click(function () {
    $('body').removeClass('show-popup');
    $('.authentication__popup--qr').fadeOut(0);
    $('.authentication__system').fadeOut(0);
    $('.popup__close').fadeOut(0);
    $('.popup').fadeOut(300);
    $('.authentication-on').removeClass('show-qr-code');
    $('.popup').removeClass('system-message--success');
    $('.popup').removeClass('system-message--off');
    $('.popup').removeClass('system-message');
    $('.popup').removeClass('ticket-popup');
    $('.popup').removeClass('show-qr-code');
    $('.popup').removeClass('settings-on');
    $('.popup').removeClass('popup-code');
    $('.popup').removeClass('preview');
    $('.popup').removeClass('photo');
    $('.popup').removeClass('code');
    document.querySelector(".popup .popup__header").innerHTML = '';
    document.querySelector(".popup .popup__banner").innerHTML = '';
    $('.popup.preview a').attr('href', '');
    document.querySelector(".popup .popup__item--link p").innerHTML = '';
    document.querySelector(".popup .popup__item--code p").innerHTML = '';
  });

  $(document).click( function(event){
    if( $(event.target).closest('.btn__popup, .popup__content, .delete-file').length )
    return;

    $('body').removeClass('show-popup');
    $('.authentication__popup--qr').fadeOut(0);
    $('.authentication__system').fadeOut(0);
    $('.popup__close').fadeOut(0);
    $('.popup').fadeOut(300);
    $('.authentication-on').removeClass('show-qr-code');
    $('.popup').removeClass('system-message--success');
    $('.popup').removeClass('system-message--off');
    $('.popup').removeClass('system-message');
    $('.popup').removeClass('show-qr-code');
    $('.popup').removeClass('ticket-popup');
    $('.popup').removeClass('settings-on');
    $('.popup').removeClass('popup-code');
    $('.popup').removeClass('preview');
    $('.popup').removeClass('photo');
    $('.popup').removeClass('code');
    document.querySelector(".popup .popup__header").innerHTML = '';
    document.querySelector(".popup .popup__banner").innerHTML = '';
    $('.popup.preview a').attr('href', '');
    document.querySelector(".popup .popup__item--link p").innerHTML = '';
    document.querySelector(".popup .popup__item--code p").innerHTML = '';

    event.stopPropagation();
  });
};

// /////////////////////////////////////////////////////////////////
// /////////////////////////////////////////////////////////////////

$(".table__nav").on("click", "li:not(.active)", function() {
  $(this)
    .addClass("active")
    .siblings()
    .removeClass("active")
    .closest(".statistics")
    .find(".table-statistics__content")
    .fadeOut(0)
    .eq($(this).index())
    .fadeIn(0)
    .css('display', 'flex');
});

// /////////////////////////////////////////////////////////////////
// /////////////////////////////////////////////////////////////////

if($('.timer-count').get(0) != undefined) {
  class CountdownTimer {
    constructor(deadline, cbChange, cbComplete) {
      this._deadline = deadline;
      this._cbChange = cbChange;
      this._cbComplete = cbComplete;
      this._timerId = null;
      this._out = {
        days: '', hours: '', minutes: '', seconds: '',
        daysTitle: '', hoursTitle: '', minutesTitle: '', secondsTitle: ''
      };
      this._start();
    }
    static declensionNum(num, words) {
      return words[(num % 100 > 4 && num % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(num % 10 < 5) ? num % 10 : 5]];
    }
    _start() {
      this._calc();
      this._timerId = setInterval(this._calc.bind(this), 1000);
    }
    _calc() {
      const diff = this._deadline - new Date();
      const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
      const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
      const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
      const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;

      this._out.days = days < 10 ? days : days;
      this._out.hours = hours < 10 ? '0' + hours : hours;
      this._out.minutes = minutes < 10 ? '0' + minutes : minutes;
      this._out.seconds = seconds < 10 ? '0' + seconds : seconds;

      this._cbChange ? this._cbChange(this._out) : null;
      if (diff <= 0) {
        clearInterval(this._timerId);
        this._cbComplete ? this._cbComplete() : null;
      }
    }
  }

/*

  let timer_all = document.querySelectorAll('.timer-count');
  setTimeout(function() {
    timer_all.forEach(function(timer_all__elem) {
      var data_count = $(timer_all__elem).attr('data-count');
      var data_date = $(timer_all__elem).attr('data-date');
      var data_year = $(timer_all__elem).attr('data-year');
      var data_month = $(timer_all__elem).attr('data-month');
      var data_day = $(timer_all__elem).attr('data-day');
      var data_hour = $(timer_all__elem).attr('data-hour');
      var data_minute = $(timer_all__elem).attr('data-minute');
      var data_second = $(timer_all__elem).attr('data-second');

      const elDays = timer_all__elem.querySelector(`.timer__days`);
      const elHours = timer_all__elem.querySelector(`.timer__hours`);
      const elMinutes = timer_all__elem.querySelector(`.timer__minutes`);
      const elSeconds = timer_all__elem.querySelector(`.timer__seconds`);

      const deadline = new Date(data_year, data_month, data_day, data_hour, data_minute, data_second, 0 + (24*60*60*1000+999)); // месяц на единикцу меньше поскольку отсчёт начинается с "0" если указывать вручную
      $('.timer-count>*').css('display', 'flex');

      new CountdownTimer(deadline, (timer) => {
        elDays.textContent = timer.days;
        elHours.textContent = timer.hours;
        elMinutes.textContent = timer.minutes;
        elSeconds.textContent = timer.seconds;
        elDays.dataset.title = timer.daysTitle;
        elHours.dataset.title = timer.hoursTitle;
        elMinutes.dataset.title = timer.minutesTitle;
        elSeconds.dataset.title = timer.secondsTitle;
      }, () => {
        timer_all__elem.querySelector('.timer__result').innerHTML = 'Processing';
        $(timer_all__elem).addClass('complete');
      });

    });
  }, 500 );

*/

};

// /////////////////////////////////////////////////////////////////
// /////////////////////////////////////////////////////////////////

if($('.notifications__list').get(0) != undefined) {

  let filter_setting = document.querySelectorAll('.notifications__list');

  setTimeout(function() {
    filter_setting.forEach(function(filter_setting__elem) {

      var count_item = $(filter_setting__elem).find('.table__line').length;

      if (count_item<1) {
        $('.btn-create-ticket').css('display','flex');
      }

      else if (count_item>3) {
        $('.btn-create-ticket').css('display','none');

        var array = [];
        var sum = 0;

        for ( var i = 0; i<3; i++ ) {
          array[i] = $(filter_setting__elem).find('.table__line').eq(i).outerHeight();
          sum = sum + array[i];
        }

        $(filter_setting__elem).css('height', sum +'px');

        new SimpleScrollbar($(filter_setting__elem)[0]);
      }

      else {
        $('.btn-create-ticket').css('display','flex');
      }

    });
  }, 10);
};

// /////////////////////////////////////////////////////////////////
// /////////////////////////////////////////////////////////////////

if($('.message__list').get(0) != undefined) {

  let filter_setting = document.querySelectorAll('.message__list');

  setTimeout(function() {
    filter_setting.forEach(function(filter_setting__elem) {

      var count_item = $(filter_setting__elem).find('.message__item').length;
      var margin_item = parseInt($(filter_setting__elem).find('.message__item').css('margin-bottom'), 10);

      if (count_item>2) {
        var array = [];
        var sum = 0;
        var sum_all = 0;
        var height_body = $('body').outerHeight();

        for ( var i = 0; i<2; i++ ) {
          array[i] = $(filter_setting__elem).find('.message__item').eq(i).outerHeight();
          sum = sum + array[i];
        }

        for ( var i = 0; i<count_item; i++ ) {
          array[i] = $(filter_setting__elem).find('.message__item').eq(i).outerHeight();
          sum_all = sum_all + array[i];
          sum_all = sum_all + count_item*margin_item - margin_item;
        }


        if (sum_all>height_body*.3) {
          $(filter_setting__elem).css('height', height_body*.3 +'px');
          $(filter_setting__elem).css('min-height', 'unset');
          new SimpleScrollbar($(filter_setting__elem)[0]);
        }

        else {
          $(filter_setting__elem).css('height', 'auto');
          $(filter_setting__elem).css('min-height', height_body*.3 +'px');
        }
      }
    });
  }, 10);
};
// /////////////////////////////////////////////////////////////////
// /////////////////////////////////////////////////////////////////
var dt = new DataTransfer();

/*
$('.photo-form input[type=file]').on('change', function(){
	let $files_list = $('.result-download');
	$files_list.empty();

	for(var i = 0; i < this.files.length; i++){
		let file = this.files.item(i);
		dt.items.add(file);
    if (!/^image/.test(file.type)) {
      document.querySelector('.add-photo__error').innerText = 'The selected file is not an image!';
      return;
    }

    else {
      document.querySelector('.add-photo__error').innerText = '';
    }

		let reader = new FileReader();
		reader.readAsDataURL(file);
		reader.onloadend = function(){
			let new_file_input = '<div class="download-item">' +
				'<div class="download-image"><div><img src="' + reader.result + '" alt="' + file.name + '"></div></div>' +
				'<div class="delete-file"><p>Delete photo</p></div>' +
			'</div>';
			$files_list.append(new_file_input);
		}
	};
	this.files = dt.files;
  $('.photo-form__download').fadeOut(0);
  $('.photo-form__result').fadeIn(300);
});

$('.photo-form').on('click touchend', '.delete-file', function(e){
	let name = $(this).prev().text();
	let input = $(this).closest('.photo-form').find('input[type=file]');
	$(this).closest('.download-item').remove();
	for(let i = 0; i < dt.items.length; i++){
		if(name === dt.items[i].getAsFile().name){
			dt.items.remove(i);
		}
	}
	input[0].files = dt.files;
  $('.photo-form__result').fadeOut(0);
  $('.photo-form__download').fadeIn(300);
});
*/

// /////////////////////////////////////////////////////////////////
// /////////////////////////////////////////////////////////////////

$('.table').on('click', '.valuta-usd', function () {
  if ($('.valuta-usd').hasClass('active')) {
    //$(this).removeClass('active');
    //$(".table__line--coin .change-usd").fadeOut(0);
    //$(".table__line--coin .change-coin").fadeIn(300);
  }

  else {
    $('.valuta-usd').addClass('active');
    $(".table__line--coin .valuta-coin").removeClass('active');
    $(".table__line--coin .change-coin").fadeOut(0);
    $(".table__line--coin .change-usd").fadeIn(300);
  }
});

$('.table').on('click', '.valuta-coin', function () {
  if ($('.valuta-coin').hasClass('active')) {
    //$(this).removeClass('active');
    //$(".table__line--coin .change-coin").fadeOut(0);
    //$(".table__line--coin .change-usd").fadeIn(300);
  }

  else {
    $('.valuta-coin').addClass('active');
    $(".table__line--coin .valuta-usd").removeClass('active');
    $(".table__line--coin .change-usd").fadeOut(0);
    $(".table__line--coin .change-coin").fadeIn(300);
  }
});

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////