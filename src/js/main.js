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
    // var windowHeight = window.innerHeight;
    var windowWidth = window.innerWidth;
    if(windowWidth < 1024) {
      slidestoShow = 5;
    }
    // if(windowHeight < 600) {
    //   slidestoShow = 4;
    // } else if(windowHeight < 760) {
    //   slidestoShow = 6;
    // } else {
    //   slidestoShow = 7;
    // }
    // if(windowWidth < 768) {
    //   verticalSldier = false;
    //   slidestoShow = 3;
    // }

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
  };

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
    scrollTop: $($(this).data().nextview).offset().top - 100
  }, 1000);
});
})();
// Next view click end
//  =====================================================================================================================

//  =====================================================================================================================
// Main page image scratch start
var sratchImageCtrl = (function() {

  var building = document.querySelector('.building');
  var canvas = document.querySelector('.building__canvas');
  var ctx = canvas.getContext('2d');
  var brushRadius = 100;

  function placeImageOverCanvas() {
    var img = document.createElement('img');
    img.src = '../img/main/the_building_orig.jpg';

    setcanvasSize();

    img.addEventListener('load', function() {
      drawImageProp(ctx, img)
      //ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
    });
  };

/**
 * By Ken Fyrstenberg Nilsen
 *
 * drawImageProp(context, image [, x, y, width, height [,offsetX, offsetY]])
 *
 * If image and context are only arguments rectangle will equal canvas
*/
function drawImageProp(ctx, img, x, y, w, h, offsetX, offsetY) {

  if (arguments.length === 2) {
      x = y = 0;
      w = ctx.canvas.width;
      h = ctx.canvas.height;
  }

  // default offset is center
  offsetX = typeof offsetX === "number" ? offsetX : 0.5;
  offsetY = typeof offsetY === "number" ? offsetY : 0.5;

  // keep bounds [0.0, 1.0]
  if (offsetX < 0) offsetX = 0;
  if (offsetY < 0) offsetY = 0;
  if (offsetX > 1) offsetX = 1;
  if (offsetY > 1) offsetY = 1;

  var iw = img.width,
      ih = img.height,
      r = Math.min(w / iw, h / ih),
      nw = iw * r,   // new prop. width
      nh = ih * r,   // new prop. height
      cx, cy, cw, ch, ar = 1;

  // decide which gap to fill    
  if (nw < w) ar = w / nw;                             
  if (Math.abs(ar - 1) < 1e-14 && nh < h) ar = h / nh;  // updated
  nw *= ar;
  nh *= ar;

  // calc source rectangle
  cw = iw / (nw / w);
  ch = ih / (nh / h);

  cx = (iw - cw) * offsetX;
  cy = (ih - ch) * offsetY;

  // make sure source rectangle is valid
  if (cx < 0) cx = 0;
  if (cy < 0) cy = 0;
  if (cw > iw) cw = iw;
  if (ch > ih) ch = ih;

  // fill image in dest. rectangle
  ctx.drawImage(img, cx, cy, cw, ch,  x, y, w, h);
}

  function setcanvasSize() {
    canvas.width = building.offsetWidth;
    canvas.height = building.offsetHeight;
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

    var grad = ctx.createRadialGradient(mouseX,mouseY,brushRadius,brushRadius,brushRadius,brushRadius);
    grad.addColorStop(0,"transparent");
    grad.addColorStop(1,"white");
    ctx.fillStyle = grad;

    //ctx.fillStyle = "#fff";

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

    window.addEventListener('resize', debounce(function() {
      placeImageOverCanvas();
    }, 100));
  };

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