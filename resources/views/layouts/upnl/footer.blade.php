 <div class=page-user__footer>
     <div class="user-footer-group page-user__user-footer-group">
         <div class=user-footer-group__inner>
             <div class=user-footer-group__rights> © 2025 / All rights reserved by Airocoin </div>
             <div class=user-footer-group__links><a href=/user-agreement class=user-footer-group__link data-pjax="">
                     User agreement </a> <a href=/terms-of-use class=user-footer-group__link data-pjax=""> Terms of use
                 </a></div>
             <div class=user-footer-group__menu><a href=/blog class=user-footer-group__link data-pjax=""> Blog </a> <a
                     href=/guide class=user-footer-group__link data-pjax=""> Guide </a> <a href=/faq
                     class=user-footer-group__link data-pjax=""> FAQ </a> <a href=/company
                     class=user-footer-group__link data-pjax=""> Company </a> <a href=/theme/static/presentation-en.pdf
                     target=_blank class=user-footer-group__link> Presentation </a> <a href=/contacts
                     class=user-footer-group__link data-pjax=""> Contacts </a></div>
         </div>
     </div>
 </div>
 </div>
 </div>
 </div>
 <div class=messages-container>
     <div class=container-fluid>
         <div class=messages-container__inner></div>
     </div>
 </div>
 <script>
     pageInits.push(function() {
         $('.js-link-user-dashboard').addClass('active')
     });
     pageInits.push(function() {
         function handleResize() {
             var $slider = $('.js-user-banner-slider-block');
             var windowWidth = $(window).width();
             if (windowWidth <= 1024) {
                 $slider.prependTo('#js-chart-cell')
             } else {
                 $slider.prependTo('#js-leaders-cell')
             }
         }
         $(window).on('resize.userBannerSliderBlock', handleResize);
         handleResize()
     });
     pageDestroys.push(function() {
         $(window).off('resize.userBannerSliderBlock')
     })
 </script>
 </div>
 <script src=/theme/js/index-v-d367a25c6b3e.js></script>
 <script src=/theme/js/pjax-v-d367a25c6b3e.js></script>
 <script>
     var xhr = new XMLHttpRequest();
     xhr.open('GET', '/theme/img/sprite-v-d367a25c6b3e.svg', !0);
     xhr.onreadystatechange = function() {
         if (xhr.readyState === 4 && xhr.status === 200) {
             var div = document.createElement('div');
             div.style.position = 'absolute';
             div.style.width = '0';
             div.style.height = '0';
             div.style.visibility = 'hidden';
             div.innerHTML = xhr.responseText;
             document.body.insertBefore(div, document.body.firstChild)
         }
     };
     xhr.send()
 </script>
 <script>
     document.addEventListener('DOMContentLoaded', function() {
         var pjaxOptions = {
             fragment: '#js-pjax-container',
             scrollTo: !1,
             timeout: 3000
         };
         $.pjax.defaults.maxCacheLength = 0;
         $(document).on('click', 'form[data-pjax] button[type="submit"][name]', function() {
             var form = $(this).closest('form');
             var buttonName = $(this).attr('name');
             var buttonValue = $(this).attr('value');
             var hiddenInput = form.find('input[type="hidden"][name="' + buttonName + '"]');
             if (hiddenInput.length > 0) {
                 hiddenInput.remove()
             }
             hiddenInput = $('<input>').attr('type', 'hidden').attr('name', buttonName).val(buttonValue);
             form.append(hiddenInput)
         }).pjax('a[data-pjax]', '#js-pjax-container', pjaxOptions).on('submit', 'form[data-pjax]', function(
             event) {
             $.pjax.submit(event, '#js-pjax-container', pjaxOptions)
         }).on('pjax:clicked', function(options) {}).on('pjax:beforeReplace', function() {
             pageDestroys.forEach(function(element) {
                 (element)()
             });
             pageDestroys = []
         }).on('pjax:beforeSend', function(event) {
             $('.modal-backdrop').remove();
             $('body').removeClass('modal-open');
             $('#js-preloader').removeClass('ready');
             if (!$(event.relatedTarget).hasClass('js-noscroll')) {
                 setTimeout(function() {
                     window.scrollTo({
                         top: 0,
                         left: 0
                     })
                 }, 10)
             }
         }).on('pjax:success', function(event, data) {}).on('pjax:error', function(event, xhr, textStatus,
             errorThrown, options) {
             options.success(xhr.responseText, textStatus, xhr);
             return !1
         }).on('pjax:end', function() {
             pageInits.forEach(function(element) {
                 (element)()
             });
             pageInits = []
         }).on('pjax:complete', function() {
             layoutInit();
             $('#js-preloader').addClass('ready');
             setTimeout(function() {
                 $('#js-pjax-container').css('height', '')
             })
         })
     })
 </script>
 <script>
     //(function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.defer=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document,
     //'https://dars1.ladesk.com/scripts/track.js',
     //function(e){ LiveAgent.createButton('u76fqdpl', e); });
 </script>
 <script>
     (function(w, d, v3) {
         w.chaportConfig = {
             appId: '684c6a1f1abf0018f2bd6556'
         };
         if (w.chaport) return;
         v3 = w.chaport = {};
         v3._q = [];
         v3._l = {};
         v3.q = function() {
             v3._q.push(arguments)
         };
         v3.on = function(e, fn) {
             if (!v3._l[e]) v3._l[e] = [];
             v3._l[e].push(fn)
         };
         var s = d.createElement('script');
         s.type = 'text/javascript';
         s.async = !0;
         s.src = 'https://app.chaport.com/javascripts/insert.js';
         var ss = d.getElementsByTagName('script')[0];
         ss.parentNode.insertBefore(s, ss)
     })(window, document)
 </script>
 <style>
     /*
.footer-menu-list__link.js-link-partnership {
  display: none;
}
li.menu__item:nth-child(4) {
  display: none;
}

div.user-sidebar__item:nth-child(5) {
  display: none;
}

a.user-footer-group__link:nth-child(5) {
  display: none;
}

div.show > a:nth-child(1) {
  display: none;
}

div.footer-menu-list:nth-child(1) > ul:nth-child(2) > li:nth-child(4) {
  display: none;
}



div.mobile-menu-list:nth-child(1) > div:nth-child(5) {
  display: none;
}
div.mobile-menu-list:nth-child(2) > div:nth-child(1) {
  display: none;
}

.transactions-container {
  display: none !important;
}

*/
 </style>
 <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
     integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
     data-cf-beacon='{"version":"2024.11.0","token":"0ba6880f01494148a07c3ba6978a8c03","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
     crossorigin="anonymous"></script>
 </body>

 </html>
