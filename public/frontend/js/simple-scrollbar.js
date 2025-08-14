;(function(root, factory) {
  if (typeof exports === 'object') {
    module.exports = factory(window, document)
  } else {
    root.SimpleScrollbar = factory(window, document)
  }
})(this, function(w, d) {
  var raf = w.requestAnimationFrame || w.setImmediate || function(c) { return setTimeout(c, 0); };

  function initEl(el) {
    Object.defineProperty(el, 'data-custom-scrollbar', { value: new SimpleScrollbar(el), configurable: true });
  }

  function unbindEl(el) {
    if (!Object.prototype.hasOwnProperty.call(el, 'data-custom-scrollbar')) return;
    el['data-custom-scrollbar'].unBind();
    //Remove the elements property
    delete el['data-custom-scrollbar'];
  }

  // Mouse drag handler
  function dragDealer(el, context) {
    var lastPageY;

    el.addEventListener('mousedown', function(e) {
      lastPageY = e.pageY;
      el.classList.add('custom-grabbed');
      d.body.classList.add('custom-grabbed');

      d.addEventListener('mousemove', drag);
      d.addEventListener('mouseup', stop);

      return false;
    });

    function drag(e) {
      var delta = e.pageY - lastPageY;
      lastPageY = e.pageY;

      raf(function() {
        context.el.scrollTop += delta / context.scrollRatio;
      });
    }

    function stop() {
      el.classList.remove('custom-grabbed');
      d.body.classList.remove('custom-grabbed');
      d.removeEventListener('mousemove', drag);
      d.removeEventListener('mouseup', stop);
    }
  }

  // Constructor
  function custom_scroll(el) {
    this.target = el;
    this.content = el.firstElementChild;

    this.direction = w.getComputedStyle(this.target).direction;

    this.bar = '<div class="custom-scroll">';
    //Create a reference to the function binding to remove the event listeners
    this.mB = this.moveBar.bind(this);

    this.wrapper = d.createElement('div');
    this.wrapper.setAttribute('class', 'custom-wrapper');

    this.el = d.createElement('div');
    this.el.setAttribute('class', 'custom-content');

    this.el_bg = d.createElement('div');
    this.el_bg.setAttribute('class', 'custom-scroll--bg');

    if (this.direction === 'rtl') {
      this.el.classList.add('rtl');
    }

    this.wrapper.appendChild(this.el);
    this.wrapper.appendChild(this.el_bg);

    while (this.target.firstChild) {
      this.el.appendChild(this.target.firstChild);
    }
    this.target.appendChild(this.wrapper);

    this.target.insertAdjacentHTML('beforeend', this.bar);
    this.bar = this.target.lastChild;

    dragDealer(this.bar, this);
    this.moveBar();

    w.addEventListener('resize', this.mB);
    this.el.addEventListener('scroll', this.mB);
    this.el.addEventListener('mouseenter', this.mB);
    this.el_bg.addEventListener('scroll', this.mB);
    this.el_bg.addEventListener('mouseenter', this.mB);

    this.target.classList.add('custom-container');

    var css = w.getComputedStyle(el);
  	if (css['height'] === '0px' && css['max-height'] !== '0px') {
    	el.style.height = css['max-height'];
    }

    if (css['height'] === '0px' && css['max-height'] !== '0px') {
    	el_bg.style.height = css['max-height'];
    }

    this.unBind = function() {
      //Remove event listeners
      w.removeEventListener('resize', this.mB);
      this.el.removeEventListener('scroll', this.mB);
      this.el.removeEventListener('mouseenter', this.mB);
      this.el_bg.removeEventListener('scroll', this.mB);
      this.el_bg.removeEventListener('mouseenter', this.mB);

      this.target.classList.remove('custom-container');

      //Unwrap the initial content and remove remaining wrappers
      this.target.insertBefore(this.content, this.wrapper);
      this.target.removeChild(this.wrapper);

      //Remove the bar including its drag-dealer event listener
      this.target.removeChild(this.bar);
      this.bar = null; //make way for the garbage collector
    }
  }

  custom_scroll.prototype = {
    moveBar: function(e) {
      var totalHeight = this.el.scrollHeight,
          ownHeight = this.el.clientHeight,
          _this = this;

      this.scrollRatio = ownHeight / totalHeight;

      var isRtl = _this.direction === 'rtl';
      var right = isRtl ?
        (_this.target.clientWidth - _this.bar.clientWidth + 18) :
        (_this.target.clientWidth - _this.bar.clientWidth) * -1;

      raf(function() {
        // Hide scrollbar if no scrolling is possible
        if(_this.scrollRatio >= 1) {
          _this.bar.classList.add('custom-hidden');
          $(_this.bar).closest('.custom-container').find('.custom-scroll--bg').removeClass('show__scroll-bg');
        } else {
          _this.bar.classList.remove('custom-hidden')
          _this.bar.style.cssText = 'height:' + Math.max(_this.scrollRatio * 100, 10) + '%; top:' + (_this.el.scrollTop / totalHeight ) * 100 + '%;right:' + right + 'px;';
          $(_this.bar).closest('.custom-container').find('.custom-scroll--bg').addClass('show__scroll-bg');
        }
      });
    }
  }

  function initAll() {
    var nodes = d.querySelectorAll('*[custom-container]');

    for (var i = 0; i < nodes.length; i++) {
      initEl(nodes[i]);

      if ($(nodes).find('.custom-scroll').hasClass('custom-hidden')) {
        $(nodes).find('.custom-scroll--bg').removeClass('show__scroll-bg');
      }
      else {
        $(nodes).find('.custom-scroll--bg').addClass('show__scroll-bg');
      }
    }
  }

  function unbindAll() {
    var nodes = d.querySelectorAll('.custom-container');

    for (var i = 0; i < nodes.length; i++) {
      unbindEl(nodes[i]);

      if ($(nodes).find('.custom-scroll').hasClass('custom-hidden')) {
        $(nodes).find('.custom-scroll--bg').removeClass('show__scroll-bg');
      }
      else {
        $(nodes).find('.custom-scroll--bg').addClass('show__scroll-bg');
      }
    }
  }

  d.addEventListener('DOMContentLoaded', initAll);
  custom_scroll.initEl = initEl;
  custom_scroll.initAll = initAll;
  custom_scroll.unbindEl = unbindEl;
  custom_scroll.unbindAll = unbindAll;

  var SimpleScrollbar = custom_scroll;
  return SimpleScrollbar;
});