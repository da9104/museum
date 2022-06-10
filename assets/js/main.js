$(function() {

	'use strict';

	// Form

	var contactForm = function() {

		if ($('#contactForm').length > 0 ) {
			$( "#contactForm" ).validate( {
				rules: {
					name: "required",
					email: {
						required: true,
						email: true
					},
					message: {
						required: true,
						minlength: 5
					}
				},
				messages: {
					name: "Please enter your name",
					email: "Please enter a valid email address",
					message: "Please enter a message"
				},
				/* submit via ajax */
				submitHandler: function(form) {		
					var $submit = $('.submitting'),
						waitText = 'Submitting...';

					$.ajax({   	
				      type: "POST",
				      url: "./send-email.php",
				      data: $(form).serialize(),

				      beforeSend: function() { 
				      	$submit.css('display', 'block').text(waitText);
				      },
				      success: function(msg) {
		               if (msg == 'OK') {
		               	$('#form-message-warning').hide();
				            setTimeout(function(){
		               		$('#contactForm').fadeOut();
		               	}, 1000);
				            setTimeout(function(){
				               $('#form-message-success').fadeIn();   
		               	}, 1400);
			               
			            } else {
			               $('#form-message-warning').html(msg);
				            $('#form-message-warning').fadeIn();
				            $submit.css('display', 'none');
			            }
				      },
				      error: function() {
				      	$('#form-message-warning').html("Something went wrong. Please try again.");
				         $('#form-message-warning').fadeIn();
				         $submit.css('display', 'none');
				      }
			      });    		
		  		}
				
			} );
		}
	};
	contactForm();

});


let hearMap = function() {
	var platform = new H.service.Platform({
		 apikey: window.apikey
	  });   
	  var defaultLayers = platform.createDefaultLayers();
	  // Instantiate the map using the vecor map with the
	  // default style as the base layer:
	  var map = new H.Map(document.getElementById('map'),
				 defaultLayers.vector.normal.map,
				  {  
				    center: { lat: 55.8685891, lng: -4.2906039 }, //55.868607140200304, -4.289906527549472
					zoom: 15,  
					pixelRatio: window.devicePixelRatio || 1
				  });
				  window.addEventListener('resize', () => map.getViewPort().resize());
				  const behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
				  const request = {
						// mode: 'fastest;car',
						// waypoint0: 'geo!37.80221,-122.4191',
						// waypoint1: 'geo!37.76839,-122.51089',
						representation: 'display'
					};
				  var ui = H.ui.UI.createDefault(map, defaultLayers);
				  var bubble = new H.ui.InfoBubble(
					   {
						lat: 55.8685891, lng: -4.2906039
					   }, 
					  {
						content: `
							<p> Kelvingrove <br/>
							Art Gallery and Museum </p>
							`
					   });
				  ui.addBubble(bubble);
  }
hearMap();
