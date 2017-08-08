// Slider için javascript
$(function() {
				
				var Page = (function() {
					

					var $navArrows = $( '#nav-arrows' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {
									

								$navArrows.show();
								$shadow.show();

							},
							 
							orientation : 'r',
							cuboidsRandom : true, 
							perspective : 1200,
// number of slices / cuboids
// needs to be an odd number 15 => number > 0 (if you want the limit higher, change the _validate function).
cuboidsCount : 5,
// if true then the number of slices / cuboids is going to be random (cuboidsCount is overwitten)               
// the range of possible number of cuboids if cuboidsRandom is true
// it is strongly recommended that you do not set a very large number :)
maxCuboidsCount : 5,
// each cuboid will move x pixels left / top (depending on orientation). The middle cuboid doesn't move. the middle cuboid's neighbors will move disperseFactor pixels
// disperseFactor : 0,
// color of the hidden sides
colorHiddenSides : '#222',
// the animation will start from left to right. The left most cuboid will be the first one to rotate
// this is the interval between each rotation in ms
sequentialFactor : 150,
// animation speed
// this is the speed that takes "1" cuboid to rotate
speed : 600,
// transition easing
easing :'ease',
// if true the slicebox will start the animation automatically
autoplay : true,
// time (ms) between each rotation, if autoplay is true
interval: 3000,
// the fallback will just fade out / fade in the items
// this is the time fr the fade effect
fallbackFadeSpeed: 300,                     
disperseFactor : 30
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
					
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

						};

						return { init : init };

				})();

				Page.init();

			});