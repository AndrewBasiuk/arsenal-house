// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.
function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};
// end debounce

function hideScrollBar() {
  document.getElementsByTagName('body')[0].style.overflow = 'hidden';
}
function showScrollBar() {
  document.getElementsByTagName('body')[0].style.overflow = 'visible';
}

// Before/After main page slider start
(function() {

    function drags(dragElement, resizeElement, container) {
	
        // Initialize the dragging event on mousedown.
        dragElement.on('mousedown touchstart', function(e) {
          
          dragElement.addClass('draggable_before_after');
          resizeElement.addClass('resizable_before_after');
          
          // Check if it's a mouse or touch event and pass along the correct value
          var startX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;
          
          // Get the initial position
          var dragWidth = dragElement.outerWidth(),
              posX = dragElement.offset().left + dragWidth - startX,
              containerOffset = container.offset().left,
              containerWidth = container.outerWidth();
       
          // Set limits
          minLeft = containerOffset + 10;
          maxLeft = containerOffset + containerWidth - dragWidth - 10;
          
          // Calculate the dragging distance on mousemove.
          dragElement.parents().on("mousemove touchmove", function(e) {
              
            // Check if it's a mouse or touch event and pass along the correct value
            var moveX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;
            
            leftValue = moveX + posX - dragWidth;
            
            // Prevent going off limits
            if ( leftValue < minLeft) {
              leftValue = minLeft;
            } else if (leftValue > maxLeft) {
              leftValue = maxLeft;
            }
            
            // Translate the handle's left value to masked divs width.
            widthValue = (leftValue + dragWidth/2 - containerOffset)*100/containerWidth+'%';
                  
            // Set the new values for the slider and the handle. 
            // Bind mouseup events to stop dragging.
            $('.draggable_before_after').css('left', widthValue).on('mouseup touchend touchcancel', function () {
              $(this).removeClass('draggable_before_after');
              resizeElement.removeClass('resizable_before_after');
            });
            $('.resizable_before_after').css('width', widthValue);
          }).on('mouseup touchend touchcancel', function(){
            dragElement.removeClass('draggable_before_after');
            resizeElement.removeClass('resizable_before_after');
          });
          e.preventDefault();
        }).on('mouseup touchend touchcancel', function(e){
          dragElement.removeClass('draggable_before_after');
          resizeElement.removeClass('resizable_before_after');
        });
      }
      
      // Call & init
      $(document).ready(function(){
        $('.ba-slider').each(function(){
          var cur = $(this);
          // Adjust the slider
          var width = cur.width()+'px';
          cur.find('.resize img').css('width', width);
          // Bind dragging events
          drags(cur.find('.handle'), cur.find('.resize'), cur);
        });
      });
      
      // Update sliders on resize.
      $(window).resize(debounce(function(){
        $('.ba-slider').each(function(){
          var cur = $(this);
          var width = cur.width()+'px';
          cur.find('.resize img').css('width', width);
        });
      },100));
})();
// Before/After main page slider end

// Main page scroll listener and frames add animation start
var animateHTMLCtrl = (function() {
  var elems, 
  windowHeight

  var init = function() {
    elems = document.getElementsByClassName('hidden__frame')
    windowHeight = window.innerHeight;
    _addEventHandlers();
    _checkPosition();
  }

  function _addEventHandlers() {
    window.addEventListener('scroll', debounce(_checkPosition, 100));
    window.addEventListener('resize', debounce(init, 100));
  }

  function _checkPosition() {
    for (var i = 0; i < elems.length; i++) {
      var posFromTop = elems[i].getBoundingClientRect().top;
      if (posFromTop - windowHeight <= 0) {
        elems[i].className = elems[i].className.replace('hidden__frame', 'fade-in__frame')
      }
    }
  }

  return {
    init: init
  }

})();
animateHTMLCtrl.init();
// end animateHTMLCtrl
// Main page scroll listener and frames add animation start


// Main page slick slider initialisation start (2 sliders actually)
(function() {

  _initSliders();

  function _initSliders() {
    var slidestoShow = 7;
    var windowHeight = window.innerHeight;
    if(windowHeight < 600) {
      slidestoShow = 4;
    } else if(windowHeight < 760) {
      slidestoShow = 6;
    } else {
      slidestoShow = 7;
    }

    $('.gallery__thumbnails').slick({
      arrows: false,
      autoplay: true,
      vertical: true,
      verticalSwiping: true,
      focusOnSelect: true,
      slidesToShow: slidestoShow,
      asNavFor: '.gallery__items',
    });
  
    $('.gallery__items').slick({
      arrows: false,
      autoplay: true,
      draggable: false,
      asNavFor: '.gallery__thumbnails'
    });
  }

  window.addEventListener('resize', debounce(function(){
    $('.gallery__thumbnails').slick('unslick');
    $('.gallery__items').slick('unslick');
    _initSliders();
  }, 100));

})();
// Main page slick slider initialisation end

// Next view click start
(function() {
$('.next-view a').click(function(e) {
  e.preventDefault();
  $('html, body').animate({
    scrollTop: $($(this).data().nextview).offset().top
  }, 1000);
});
})();
// Next view click end

// Preloader logic and animation start
(function() {



  var animateLogoCtrl = (function() {

    var paths = document.querySelectorAll('.letter_row');
    var topLetters = document.querySelector('.main_letter_row');
  
    function init() {

      hideScrollBar();

      Array.prototype.forEach.call(paths, animateAll);

      function animateAll(element) {
        var offset = element.getTotalLength();
        element.style.strokeDashoffset = offset;
        element.style.strokeDasharray = offset;
        var speed = offset < 1000 ? 5 : 10;
        function animate() {
          element.style.strokeDashoffset = offset;
            offset = offset - speed;
            if(offset >= 0) {
              requestAnimationFrame(animate);
            } else {
              element.style.strokeDashoffset = 0;
              showScrollBar();
            }
        };
        animate();
      };

    };

    // setTimeout(function(){
    //   showScrollBar();
    // }, 3000);
    
    return {
      init: init
    };
  
  })();
  
  animateLogoCtrl.init();

})();
// Preloader logic and animation end