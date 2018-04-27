//  =====================================================================================================================
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

      $('.location').mousemove(function(e) {
        $('.handle').css('left', e.pageX);
        var container = $('.ba-slider'),
        containerOffset = container.offset().left,
        containerWidth = container.outerWidth();
        // Set limits
        widthValue = (e.pageX / containerWidth) * 100 + '%'
        $('.resize').css('width', widthValue);
      });


      
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
      },500));
})();
// Before/After main page slider end
//  =====================================================================================================================

//  =====================================================================================================================
// Main page slick slider initialisation start (2 sliders actually)
(function() {

  _initSliders();

  function _initSliders() {
    var slidestoShow = 7;
    var verticalSldier = true;
    var windowHeight = window.innerHeight;
    var windowWidth = window.innerWidth;
    if(windowHeight < 600) {
      slidestoShow = 4;
    } else if(windowHeight < 760) {
      slidestoShow = 6;
    } else {
      slidestoShow = 7;
    }
    if(windowWidth < 768) {
      verticalSldier = false;
      slidestoShow = 3;
    }

    $('.gallery__thumbnails').slick({
      arrows: false,
      autoplay: true,
      vertical: verticalSldier,
      verticalSwiping: verticalSldier,
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
  }, 500));

})();
// Main page slick slider initialisation end
//  =====================================================================================================================

//  =====================================================================================================================
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
//  =====================================================================================================================

//  =====================================================================================================================
// Preloader logic and animation start
var animateLogoCtrl = (function() {
  
  // Array.prototype.forEach.call(document.querySelectorAll('.letter_row'), animateAll);

  // function animateAll(element) {
  //   var offset = element.style.strokeDashoffset = element.getTotalLength();
  //   element.style.strokeDasharray = element.getTotalLength();
  //   var speed = offset < 1000 ? 5 : 12;
  //   function animate() {
  //     element.style.strokeDashoffset = offset;
  //       offset = offset - speed;
  //       if(offset >= 0) {
  //         requestAnimationFrame(animate);
  //       } else {
  //         element.style.strokeDashoffset = 0;
  //       }
  //   }
  //   animate();
  // }

  var squares = {
    innerLeft: document.querySelector('.inner_square_left'),
    innerRight: document.querySelector('.inner_square_right'),
    outerLeft: document.querySelector('.outer_square_left'),
    outerRight: document.querySelector('.outer_square_right')
  };

  var letters = {
    top: document.querySelector('.top_letter_row'),
    middle: document.querySelectorAll('.middle_letter_row'),
    bottom: document.querySelectorAll('.bottom_letter_row'),
    all: document.querySelectorAll('.letter_row')
  };

  var animationTime = {
    squares: 4,
    lettersDash: 5,
    lettersFill: 2,
    preloaderHide: 1
  };

  var preloader = document.querySelector('.preloader');
  var preloaderCover = document.querySelector('.preloader__cover');

  // Main animation function it gets dashStroke of each element and sets it dashStrokeOffset
  function animate(element, time, reverse, callback) {

    var offset = element.getTotalLength();

    element.style.strokeDasharray = offset;
    element.style.strokeDashoffset = offset;

    TweenLite.to(element, time, {
      css: {
        strokeDashoffset: 0
      }, 
      onComplete: animateFill});
      // Because pths strokeDashffset ins't set when page loads cover is used to hide svg? when loaded cover removed
      preloaderCover.style.display = 'none';
  }

  // Squaes dashStroke animation
  function squaresAnimation() {
    animate(squares.innerLeft, animationTime.squares);
    animate(squares.innerRight, animationTime.squares);
    animate(squares.outerLeft, animationTime.squares);
    animate(squares.outerRight, animationTime.squares);
  }

  // Letters dashStroke animation
  function lettersAnimation() {
    animate(letters.top, animationTime.lettersDash, false);
    Array.prototype.forEach.call(letters.middle, function(element) {
      animate(element, animationTime.lettersDash);
    });
    Array.prototype.forEach.call(letters.bottom, function(element) {
      animate(element, animationTime.lettersDash);
    });
  }

  // Letters fil animation
  function animateFill() {
    Array.prototype.forEach.call(letters.all, function(element) {
      TweenLite.to(element, animationTime.lettersFill, {
        css: {
          fill: '#b79d7c'
        },
        onComplete: hidePreloader
        });
    });
  };

  // Hide prelaoder after animation end
  function hidePreloader() {
    TweenLite.to(preloader, animationTime.preloaderHide, {
      css: {
        opacity: 0, 
        display: 'none'
      }
    });
    // Showing scrollbar again
    showScrollBar();
    // Adding flag to sessionStorage
  };

  function init() {
    // Adding flag to sessionStorage
    sessionStorage.setItem('preloader', true);

    preloader.style.display = 'block';

    hideScrollBar();
    squaresAnimation();
    lettersAnimation();
    Array.prototype.forEach.call(letters, animate);
  }

  return {
    init: init,
    preloader: preloader,
    preloaderCover: preloaderCover
  };

})();
// If no preloader flag in sessionStorage
if(!sessionStorage.getItem('preloader')) {
  animateLogoCtrl.init();
} else {
  animateLogoCtrl.preloader.style.display = 'none';
  // Because pths strokeDashffset ins't set when page loads cover is used to hide svg? when loaded cover removed
  animateLogoCtrl.preloaderCover.style.display = 'none';
}
// Preloader logic and animation end
//  =====================================================================================================================

//  =====================================================================================================================
// Main page image scratch start
var sratchImageCtrl = (function() {

  var canvas = document.querySelector('.building__canvas');
  var ctx = canvas.getContext('2d');
  var brushRadius = 100;

  function placeImageOverCanvas() {
    var building = document.querySelector('.building');
    var img = document.createElement('img');
    img.src = '../img/main/the_building_orig.jpg';
    
    img.addEventListener('load', function() {
      ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
    });
  };

  function getBrushPos(xRef, yRef) {
    var canvasRect = canvas.getBoundingClientRect();
    return {
      x: Math.floor((xRef - canvasRect.left) / (canvasRect.right - canvasRect.left) * canvas.width),
      y: Math.floor((yRef - canvasRect.top) / (canvasRect.bottom - canvasRect.top) * canvas.height)
    };
  };

  function detectLeftButton(event) {
    if ('buttons' in event) {
        return event.buttons === 1;
    } else if ('which' in event) {
        return event.which === 1;
    } else {
        return event.button === 1;
    }
  };

  function drawDot(mouseX,mouseY){
    ctx.beginPath();
    ctx.arc(mouseX, mouseY, brushRadius, 0, 2*Math.PI, true);
    ctx.fillStyle = '#000';
    ctx.globalCompositeOperation = "destination-out";
    ctx.fill();
  };

  function addEventListeners() {
    canvas.addEventListener("mousemove", function(e) {
      var brushPos = getBrushPos(e.clientX, e.clientY);
      var leftBut = detectLeftButton(e);
      drawDot(brushPos.x, brushPos.y);

    }, false);

    canvas.addEventListener("touchmove", function(e) {
        var touch = e.targetTouches[0];
        if (touch) {
            var brushPos = getBrushPos(touch.pageX, touch.pageY);
            drawDot(brushPos.x, brushPos.y);
        }
    }, false);
  }

  function init() {
    placeImageOverCanvas();
    addEventListeners();
  };

  return {
    init: init
  }

})();

sratchImageCtrl.init();
// Main page image scratch end
//  =====================================================================================================================