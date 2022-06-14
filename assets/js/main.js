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

function ajsearch() {
  // (A) GET SEARCH TERM
  var data = new FormData();
  data.append("search", document.getElementById("search").value);
  data.append("ajax", 1);
 
  // (B) AJAX SEARCH REQUEST
  fetch("search.php", { method:"POST", body:data })
  .then(res => res.json()).then((results) => {
    var wrapper = document.getElementById("results");
    if (results.length > 0) {
      wrapper.innerHTML = "";
      for (let res of results) {
        let line = document.createElement("div");
        line.innerHTML = `${res["title"]} - ${res["body"]}`;
        wrapper.appendChild(line);
      }
    } else { wrapper.innerHTML = "No results found"; }
  });
  return false;
}


// const getStoic = async () => {
// 	let randomNumber = Math.floor(Math.random() * 10);
//     return fetch(requestUrl)
//       .then((response) => response.json())
//       .then((data) => {
//         let allImages = data.results[randomNumber];
//         return allImages.urls.regular;
// 	}).catch((e) => e.message);
// 	return getStoic;
	
//	console.log(allImages)
    // fetch("https://stoicquotesapi.com/v1/api/quotes/random")
    // .then((response) => response.json())
    // .then((data) => {
    //  return data.body;
    // }).catch((e) => e.message);
    // return getStoic;

// const getPhoto = async () => {
//     try {
//         let randomImage = await axios.get('https://api.unsplash.com/search/photos?query=london&client_id=TH_hAxlm82Yz_GKltWgLe6TMVOzDX0AT796zQd_OT0o')
// 		return randomImage.data.body;
// 		//return imageToDisplay.src = randomImage;
// 		console.log(randomImage.data.body)
//        }
//     catch (e) {
//         return "NO PHOTO AVAILABLE! SORRY!"
//     }
//}
