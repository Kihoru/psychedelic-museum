Webcam.attach( '#my_camera' );
    	$( "#my_camera div" ).remove();
    	Webcam.set({
	        width: 640,
	        height: 480,
	        dest_width: 640,
        	dest_height: 480,
	        image_format: 'jpg',
	        force_flash: false,
	        flip_horiz: true,
	        fps: 45
    	});
    	//////////////////////////////////////////// sliders
 		// declaration des variables : //
 		var centerX = 640 / 2;
 		var centerY = 480 / 2;
		var uri, canvas, texture;
 		var hue = 0, saturate = 0,
		    blur_centerX = centerX, blur_centerY = centerY, blur_strengh = 0,
		    buble_centerX = centerX, buble_centerY = centerY, buble_strengh = 0, buble_radius = 0,
		    swirl_centerX = centerX, swirl_centerY = centerY, angle = 0, swirl_radius = 0;

 		    //////////////////////////// hue + saturate
		    $( "#hue_change" ).slider({
		      range: "min",
		      value: 0,
		      min: -100,
		      max: 100,
		      slide: function( event, ui ) {
		      	hue = ui.value / 100;
		      	filter_update(hue, saturate,
		 					   blur_centerX, blur_centerY, blur_strengh,
		 					   swirl_centerX, swirl_centerY, angle, swirl_radius,
		 					   buble_centerX, buble_centerY, buble_radius, buble_strengh);
		      }
		    }); 
    		$( "#saturate_change" ).slider({
		      range: "min",
		      value: 0,
		      min: -100,
		      max: 100,
		      slide: function( event, ui ) {
		      	saturate = ui.value / 100;
		      	filter_update(hue, saturate,
		 					   blur_centerX, blur_centerY, blur_strengh,
		 					   swirl_centerX, swirl_centerY, angle, swirl_radius,
		 					   buble_centerX, buble_centerY, buble_radius, buble_strengh);
		      }
		    });
		    //////////////////////////// blur
		    $( "#strengh_blur_change" ).slider({
		      range: "min",
		      value: 0,
		      min: 0,
		      max: 100,
		      slide: function( event, ui ) {
		      	blur_strengh = ui.value / 100;
		      	filter_update(hue, saturate,
		 					   blur_centerX, blur_centerY, blur_strengh,
		 					   swirl_centerX, swirl_centerY, angle, swirl_radius,
		 					   buble_centerX, buble_centerY, buble_radius, buble_strengh);
		      }
		    });	
		    //////////////////////////// swirl
		    $( "#radius_swirl_change" ).slider({
		      range: "min",
		      value: 0,
		      min: -2500,
		      max: 2500,
		      slide: function( event, ui ) {
		      	swirl_radius = ui.value / 100;
		      	filter_update(hue, saturate,
		 					   blur_centerX, blur_centerY, blur_strengh,
		 					   swirl_centerX, swirl_centerY, angle, swirl_radius,
		 					   buble_centerX, buble_centerY, buble_radius, buble_strengh);
		      }
		    });	
		    $( "#angle_swirl_change" ).slider({
		      range: "min",
		      value: 0,
		      min: 0,
		      max: 600,
		      slide: function( event, ui ) {
		      	angle = ui.value;
		      	filter_update(hue, saturate,
		 					   blur_centerX, blur_centerY, blur_strengh,
		 					   swirl_centerX, swirl_centerY, angle, swirl_radius,
		 					   buble_centerX, buble_centerY, buble_radius, buble_strengh);
		      }
		    });
		    //////////////////////////// buble
		    $( "#strengh_buble_change" ).slider({
		      range: "min",
		      value: 0,
		      min: -100,
		      max: 100,
		      slide: function( event, ui ) {
		      	buble_strengh = ui.value / 100;
		      	filter_update(hue, saturate,
		 					   blur_centerX, blur_centerY, blur_strengh,
		 					   swirl_centerX, swirl_centerY, angle, swirl_radius,
		 					   buble_centerX, buble_centerY, buble_radius, buble_strengh);
		      }
		    });	
		    $( "#radius_buble_change" ).slider({
		      range: "min",
		      value: 300,
		      min: 0,
		      max: 600,
		      slide: function( event, ui ) {
		      	buble_radius = ui.value;
		      	filter_update(hue, saturate,
		 					   blur_centerX, blur_centerY, blur_strengh,
		 					   swirl_centerX, swirl_centerY, angle, swirl_radius,
		 					   buble_centerX, buble_centerY, buble_radius, buble_strengh);
		      }
		    });
    	/////////////////////////////////////////////////////////
        function take_snapshot() {

        	$('#my_camera').css('visibility', 'hidden');
        	$('#snap').css('visibility', 'hidden');

        	Webcam.snap( function(data_uri) {
        		$('.cache').css('visibility', 'visible');
        		$('canvas').css('visibility', 'visible');
        		$('#retry').css('visibility', 'visible');
				$('#settings_selfie').css('visibility', 'visible');

        		$('#img').attr('src', data_uri);	
	            draw();
    		} );
        }
        function retry_snapshot(){
        	$('#my_camera').css('visibility', 'visible');
        	$('#snap').css('visibility', 'visible');
        	$('.cache').css('visibility', 'hidden');
        	$('canvas').css('visibility', 'hidden');
        	$('#retry').css('visibility', 'hidden');
			$('#settings_selfie').css('visibility', 'hidden');
			$('#value_hue').css({
				'visibility': 'hidden',
				'height': '0'
			});
			$('#value_blur').css({
				'visibility': 'hidden',
				'height': '0'
			});
			$('#value_swirl').css({
				'visibility': 'hidden',
				'height': '0'
			});
			$('#value_buble').css({
				'visibility': 'hidden',
				'height': '0'
			});
			canvas.remove();
		    resetSliders();
        }
    	function draw() {

	    	// try to create a WebGL canvas (will fail if WebGL isn't supported)
		    try {
		        canvas = fx.canvas();
		    } catch (e) {
		        alert(e);
		        return;
		    }

		    // convert the image to a texture
		    var image = document.getElementById('img');
		    texture = canvas.texture(image);
			canvas.setAttribute('id', 'test');
			// apply filter
		    canvas.draw(texture).update();

		    // replace the image with the canvas
		    image.parentNode.insertBefore(canvas, image);
		}
		function filter_update(hue, saturate,
		 					   blur_centerX, blur_centerY, blur_strengh,
		 					   swirl_centerX, swirl_centerY, angle, swirl_radius,
		 					   buble_centerX, buble_centerY, buble_radius, buble_strengh)
		{
			canvas.draw(texture)
			.hueSaturation(hue, saturate)
			.zoomBlur(blur_centerX, blur_centerY, blur_strengh)
			.swirl(swirl_centerX, swirl_centerY, angle, swirl_radius)
			.bulgePinch(buble_centerX, buble_centerY, buble_radius, buble_strengh)
			.update();
		}
		function resetSliders(){
			$( "#hue_change" ).slider('value', 0); 
    		$( "#saturate_change" ).slider('value', 0);
		    $( "#strengh_blur_change" ).slider('value', 0);	
		    $( "#radius_swirl_change" ).slider('value', 0);	
		    $( "#angle_swirl_change" ).slider('value', 0);
		    $( "#strengh_buble_change" ).slider('value', 0);	
		    $( "#radius_buble_change" ).slider('value', 0);

		    hue = 0, saturate = 0,
		    blur_centerX = centerX, blur_centerY = centerY, blur_strengh = 0,
		    buble_centerX = centerX, buble_centerY = centerY, buble_strengh = 0, buble_radius = 0,
		    swirl_centerX = centerX, swirl_centerY = centerY, angle = 0, swirl_radius = 0;
		}



		$('#filter_hue').on('click', function(){
			$('#value_buble').css('height', '0');
			$('#value_swirl').css('height', '0');
			$('#value_blur').css('height', '0');
			$('#value_hue').css('height', '120px');
			$('#value_buble').css('visibility', 'hidden');
			$('#value_swirl').css('visibility', 'hidden');
			$('#value_blur').css('visibility', 'hidden');

			setTimeout(function(){
				$('#value_hue').css('visibility', 'visible');
			}, 200);
        });
        $('#filter_zoomBlur').on('click', function(){
			$('#value_buble').css('height', '0');
			$('#value_swirl').css('height', '0');
			$('#value_blur').css('height', '80px');
			$('#value_hue').css('height', '0');
			$('#value_buble').css('visibility', 'hidden');
			$('#value_swirl').css('visibility', 'hidden');
			$('#value_hue').css('visibility', 'hidden');
			setTimeout(function(){
				$('#value_blur').css('visibility', 'visible');
			}, 200);
        });
        $('#filter_swirl').on('click', function(){
			$('#value_buble').css('height', '0');
			$('#value_swirl').css('height', '120px');
			$('#value_blur').css('height', '0');
			$('#value_hue').css('height', '0');
			$('#value_buble').css('visibility', 'hidden');
			$('#value_hue').css('visibility', 'hidden');
			$('#value_blur').css('visibility', 'hidden');
			setTimeout(function(){
				$('#value_swirl').css('visibility', 'visible');
			}, 200);
        });
        $('#filter_buble').on('click', function(){
			$('#value_buble').css('height', '120px');
			$('#value_swirl').css('height', '0');
			$('#value_blur').css('height', '0');
			$('#value_hue').css('height', '0');
			$('#value_hue').css('visibility', 'hidden');
			$('#value_blur').css('visibility', 'hidden');
			$('#value_swirl').css('visibility', 'hidden');
			setTimeout(function(){
				$('#value_buble').css('visibility', 'visible');
			}, 200);
        });

		/*$('#dll').on('click', function(){
			var canvasData = canvas.toDataURL("image/png");
			var ajax = new XMLHttpRequest();
			ajax.open("POST",'selfie.blade.php',false);
			ajax.setRequestHeader('Content-Type', 'application/upload');
			ajax.send(canvasData );
		});

		$('#dll').on('click', function(){
			Canvas2Image.saveAsImage(canvas, 640, 480, 'JPG');
			downloadCanvas(this, 'test', 'test2.png');
		}, false);

		function downloadCanvas(link, canvasId, filename) {
			link.href = document.getElementById(canvasId).toDataURL();
			link.download = filename;
		}*/