var slideshowSpeed = 6000;
var photos = [ {
		"image" : "img/bg/NY1.jpg"
	}, {
		"image" : "img/bg/OTT1.jpg"
	}, {
		"image" : "img/bg/CHI1.jpg"
	}, {
    	"image" : "img/bg/NY2.jpg"
	}
];
$(document).ready(function() {
	var interval,
		activeContainer = 1,
		currentImg = 0,
		animating = false,
		currentContainer = activeContainer,
		currentZindex = -1;

	$("#control").toggle(function(){
		stopAnimation();
	}, function() {
		navigate("next");
		interval = setInterval(function() {
			navigate("next");
		}, slideshowSpeed);
	});

	var navigate = function(direction) {
		if(animating) {
			return;
		}

		if(direction == "next") {
			currentImg++;
			if(currentImg == photos.length + 1) {
				currentImg = 1;
			}
		} else {
			currentImg--;
			if(currentImg == 0) {
				currentImg = photos.length;
			}
		}

		if(activeContainer == 1) {
			activeContainer = 2;
		} else {
			activeContainer = 1;
		}
		showImage(photos[currentImg - 1], currentContainer, activeContainer);
	};

	var showImage = function(photoObject, currentContainer, activeContainer) {
		animating = true;
		currentZindex--;
		$("#headerimg" + activeContainer).css({
			"background-image" : "url(" + photoObject.image + ")",
			"display" : "block",
			"z-index" : currentZindex
		});

		$("#headerimg" + currentContainer).fadeOut(function() {
			setTimeout(function() {
				animating = false;
			}, 500);
		});
	};

	navigate("next");
	interval = setInterval(function() {
		navigate("next");
	}, slideshowSpeed);
});
