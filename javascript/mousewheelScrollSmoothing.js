/* 	Author: Dan Jones
	Version 1.0
	Latest Update 01/May 2015
*/
	

/********Mousewheel smoothing *********/
var mouseWheelScrollAmount = 100;	
var keyDownScrollAmount = 300;	
var scrollingInterval;
var isMouseWheelScrolling = false;
var overrideNativeScrolling = true;
var overrideNativeArrowKeys = true;
var bodyScrollTop = $(window).scrollTop();
var bodyScrollTopTarget;
var maxScrollTop;

function doMousewheelScroll(len){
	if(typeof len == 'undefined'){
		len = 300;
	}
	if(len > 1000){
		len = 1000;
	}
	//console.log('time: ' + len + ', scrollAmount:' + mouseWheelScrollAmount );
	clearInterval(scrollingInterval);
	if(bodyScrollTop != bodyScrollTopTarget){
		mouseWheelScrolling(len);
		scrollingInterval = setInterval(function(){mouseWheelScrolling(len);},len);
	}
}

function mouseWheelScrolling(len){
	isMouseWheelScrolling = true;
	if(bodyScrollTop != bodyScrollTopTarget){
		clearInterval(scrollingInterval);
	}
	$('html,body').stop(true,false).animate({scrollTop:bodyScrollTopTarget},len,len < 500 ? 'linear' : 'easeOutCubic', function(){
		isMouseWheelScrolling = false;
	});
}

var iOS;
	
function checkOS(){
	iOS = navigator.userAgent.indexOf('Mac OS X') != -1 //is IOS 
}

var timeStampOld;
var timeStamp;
var timeDiff

function mssInitialiser(){
	//checkOS();
	//Smooth mousewheel events
	//if(!iOS){ //Do not do any of this for apple trackpads
		$(window).on('mousewheel DOMMouseScroll', function(event){
			if(overrideNativeScrolling == true){
				event.preventDefault();
				
				//get time difference for intertia scrolling
				timeStampOld = timeStamp || 0;
				timeStamp = event.timeStamp;
				var timeDiff = (timeStamp - timeStampOld)*5;
				
				//Get scroll Amount from the wheeldata
				mouseWheelScrollAmount = -1*event.originalEvent.wheelDelta || 40*event.originalEvent.detail;
				
				if (mouseWheelScrollAmount > 0) { //ScrollWheel Down
					maxScrollTop = $(document).height() - $(window).height();
					bodyScrollTopTarget += mouseWheelScrollAmount;
					if(bodyScrollTopTarget > maxScrollTop){
						bodyScrollTopTarget = maxScrollTop;
					}
					doMousewheelScroll(timeDiff);
				}
				else { //ScrollWheel Up
					bodyScrollTopTarget += mouseWheelScrollAmount;
					if(bodyScrollTopTarget < 0){
						bodyScrollTopTarget = 0;
					}
					doMousewheelScroll(timeDiff);
				}
			}
		});
	//}
	
	//Smooth Keyboard events
	$(window).on('keydown', function(event){
		if(overrideNativeArrowKeys == true){
			if(event.which == 40){ //Down Arrow Key
				event.preventDefault();
				bodyScrollTopTarget += keyDownScrollAmount;
				maxScrollTop = $(document).height() - $(window).height();
				if(bodyScrollTopTarget > maxScrollTop){
					bodyScrollTopTarget = maxScrollTop;
				}
				doMousewheelScroll();
			} else if (event.which == 38){ //Up Arrow Key
				event.preventDefault();
				bodyScrollTopTarget -= keyDownScrollAmount;
				if(bodyScrollTopTarget < 0){
					bodyScrollTopTarget = 0;
				}
				doMousewheelScroll();
			} else if (event.which == 36){ //Home Key
				event.preventDefault();
				bodyScrollTopTarget = 0;
				doMousewheelScroll();
			} else if (event.which == 35){ //End Key
				event.preventDefault();
				maxScrollTop = $(document).height() - $(window).height();
				bodyScrollTopTarget = maxScrollTop;
				doMousewheelScroll();
			} else if (event.which == 34){ //Page Down Key
				event.preventDefault();
				bodyScrollTopTarget += $(window).height();
				maxScrollTop = $(document).height() - $(window).height();
				if(bodyScrollTopTarget > maxScrollTop){
					bodyScrollTopTarget = maxScrollTop;
				}
				doMousewheelScroll();
			} else if (event.which == 33){ //Page Up Key
				event.preventDefault();
				bodyScrollTopTarget -= $(window).height();
				if(bodyScrollTopTarget < 0){
					bodyScrollTopTarget = 0;
				}
				doMousewheelScroll();
			}
		}
	});
	
	//Allow CTRL + mousewheel to zoom (as per default browser behaviour
	$(window).on('keydown', function(event){
		if(event.which == 17 && overrideNativeScrolling == true){
			overrideNativeScrolling = !overrideNativeScrolling;
		}
	})
	.on('keyup', function(event){
		if(event.which == 17){
			overrideNativeScrolling = !overrideNativeScrolling;
		}
	});
		
	//Restore default arrow key behaviour for certain form elements
	$('textarea, select').on('focus', function(){overrideNativeArrowKeys = false;}).on('blur', function(){overrideNativeArrowKeys = true;});
	
	//Restore default mousewheel behaviour for scrollable elements (uses :scrollable below..)
	$('body *:scrollable').on('mouseenter', function(){overrideNativeScrolling = false}).on('mouseleave', function(){overrideNativeScrolling = true});
	
	//Cancel scrolling on mousedown (if users clicks scrollbar or hyperlink etc...
	$(window).on('mousedown', function(){
		$('html,body').stop(true,false);
		isMouseWheelScrolling = false;
		clearInterval(scrollingInterval);
	});
	
	mssScrollingHandler();
	mssResizingHandler();
}

function mssScrollingHandler(){
	bodyScrollTop = $(window).scrollTop();
	if(isMouseWheelScrolling == false){
		bodyScrollTopTarget = bodyScrollTop;
	}
}

function mssResizingHandler(){
	maxScrollTop = $(document).height() - $(window).height();
}

$(window).on('load', function(){mssInitialiser();});
$(window).on('scroll', function(){mssScrollingHandler();});
$(window).on('resize', function(){mssResizingHandler();});


/*!
 * jQuery :scrollable selector filter
 *
 * Version 1.8 (14 Jul 2011)
 * Requires jQuery 1.4 or newer
 *
 * Copyright (c) 2011 Robert Koritnik
 * Licensed under the terms of the MIT license
 * http://www.opensource.org/licenses/mit-license.php
 */
 
(function ($) {
    var converter = {
        vertical: { x: false, y: true },
        horizontal: { x: true, y: false },
        both: { x: true, y: true },
        x: { x: true, y: false },
        y: { x: false, y: true }
    };

    var rootrx = /^(?:html)$/i;

 
    var scrollValue = {
        auto: true,
        scroll: true,
        visible: false,
        hidden: false
    };
 
    $.extend($.expr[":"], {
        scrollable: function (element, index, meta, stack) {
            var direction = converter[typeof (meta[3]) === "string" && meta[3].toLowerCase()] || converter.both;
            var styles = (document.defaultView && document.defaultView.getComputedStyle ? document.defaultView.getComputedStyle(element, null) : element.currentStyle);
            var overflow = {
                x: scrollValue[styles.overflowX.toLowerCase()] || false,
                y: scrollValue[styles.overflowY.toLowerCase()] || false,
                isRoot: rootrx.test(element.nodeName)
            };
 
            // check if completely unscrollable (exclude HTML element because it's special)
            if (!overflow.x && !overflow.y && !overflow.isRoot)
            {
                return false;
            }
 
            var size = {
                height: {
                    scroll: element.scrollHeight,
                    client: element.clientHeight
                },
                width: {
                    scroll: element.scrollWidth,
                    client: element.clientWidth
                },
                // check overflow.x/y because iPad (and possibly other tablets) don't dislay scrollbars
                scrollableX: function () {
                    return (overflow.x || overflow.isRoot) && this.width.scroll > this.width.client;
                },
                scrollableY: function () {
                    return (overflow.y || overflow.isRoot) && this.height.scroll > this.height.client;
                }
            };
            return direction.y && size.scrollableY() || direction.x && size.scrollableX();
        }
    });
})(jQuery);
