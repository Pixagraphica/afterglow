

var initCarousel = function() {

	//VARIABLES
	
	var carousel = document.getElementById('carousel'),
		carouselContainer = document.getElementById('carousel-container'),
		navButtons = document.querySelectorAll('.carousel-nav'), //next: data-increment="1", prev -1

		panelCount = carousel.children.length,
		deltaAngle = 360 / panelCount,
		panelWidth=44 * window.innerWidth / 100, /*vw workaround, size is 44 in vw*/
		radius = Math.round((panelWidth / 2) / Math.tan( Math.PI/panelCount)),  //half the side length, half the angle
		theta = 0, //current position
		//frontIndex = 0,
		
		mouseX = 0.01,
		mouseY = 0;
		
	//ACTUAL INIT WORK
	
	TweenMax.set(carouselContainer, {perspective:'1000px'});
	TweenMax.set(carouselContainer, {perspectiveOrigin:'50% -20%'});
	TweenMax.set(carousel, {z:(-radius)+'px'});
	theta = 1; //mobile translateZ lag workaround on change orientation. only works first time though.
	
	for (var i=0; i<panelCount; i++){
		var panel2 = carousel.children[i];
		var angle2 = (360 / panelCount) * i;
		TweenMax.set( panel2, {rotationY:angle2,z:radius+'px',transformOrigin:'50% 50% ' + (-radius) +'px'});
	}
	
	//DRAWING EVENT HANDLERS
	var panel;
	var angle;
	
	this.fpsTimer = window.setInterval(function(){
		theta += mouseX * -2;
		TweenMax.to( carousel, 1, {rotationY:theta, rotationX:mouseY*-5, ease:Quint.easeOut } );
		
		for (var i=0; i<panelCount; i++){
			panel = carousel.children[i];
			angle = theta + deltaAngle * i;
			while(angle<0) angle = angle + 360; //mod
			while(angle>=360) angle = angle - 360;
			angle = Math.abs(angle/180 - 1);
			if(angle<0.15) angle = 0.15;
			TweenMax.set( panel, {opacity: angle} ); //reduce opacity the further away from the front
		}
	},1000/60); //60 FPS
	
	
	this.onResize = function(e){
		destroyCarousel();
		initCarousel();
	};
	
	//INPUT EVENT HANDLERS
	
	this.onMouseMove = function(e){
		mouseX = e.pageX/window.innerWidth - 0.5;
		mouseY = e.pageY/window.innerHeight - 0.65;
	};
	
	this.onNavButtonClick = function( event ){
		var increment = parseInt( event.target.getAttribute('data-increment') );
		var tempTheta = theta + ( 360 / panelCount ) * increment * -1;
		theta = Math.round( tempTheta / (360/panelCount)) * (360/panelCount); //snap
	};
	
	this.handleHammer = function(ev){
				
		switch(ev.type) {
			case 'dragright':
				theta += Math.round( Math.log(Math.abs(ev.gesture.deltaX)+0.05) / 8 );
			break;
			case 'dragleft':
				theta -= Math.round( Math.log(Math.abs(ev.gesture.deltaX)+0.05) / 8 );
			break;
			case 'swipeleft':
				//prev
				var tempTheta = theta + ( 360 / panelCount ) * -1;
				theta = Math.round( tempTheta / (360/panelCount)) * (360/panelCount);
				ev.gesture.stopDetect();
				mouseX = 0;
				mouseY = 0;
			break;
			case 'swiperight':
				//next
				var tempTheta = theta + ( 360 / panelCount );
				theta = Math.round( tempTheta / (360/panelCount)) * (360/panelCount);
				ev.gesture.stopDetect();
				mouseX = 0;
				mouseY = 0;
			break;
			case 'release':
				mouseX = 0;
			break;
		}
	};
	
	this.onTouchStart = function(e){
		prevX = e.changedTouches[0].clientX;
		prevY = e.changedTouches[0].clientY;
	};
	
	this.onTouchMove = function(e){
		e.preventDefault();
		e.stopPropagation();
	};
	
	//ADD EVENT LISTENERS
	
	new Hammer(carouselContainer, { dragLockToAxis: true, dragMinDistance:0 }).on("swipeleft swiperight dragright dragleft release", this.handleHammer);
	window.addEventListener('mousemove', this.onMouseMove, false);
	window.addEventListener('touchmove', this.onTouchMove, false);
	window.addEventListener('touchstart', this.onTouchStart, false);
	window.addEventListener('resize', this.onResize, false);
	
	for (var i=0,navCount=navButtons.length; i < navCount; i++) {
		navButtons[i].addEventListener( 'click', this.onNavButtonClick, false);
	}
	
};


var destroyCarousel = function(){
	
	//VARIABLES
	
	var carousel = document.getElementById('carousel'),
		panelCount = carousel.children.length,
		carouselContainer = document.getElementById('carousel-container'),
		navButtons = document.querySelectorAll('.carousel-nav');
		
	//ACTUAL WORK
	
	clearInterval(this.fpsTimer); //shutdown fps timer
	
	//reset opacity and transforms
	for (var i=0; i<panelCount; i++){
		var panel = carousel.children[i];
		var angle = (360 / panelCount) * i;
		panel.style [ Modernizr.prefixed('transform') ] = 'none'; 
		TweenMax.set( panel, {opacity: 1} );
	}
	carousel.style [ Modernizr.prefixed('transform') ] = 'none';
	TweenMax.killAll();
	
	//REMOVE EVENT LISTENERS
	
	Hammer(carouselContainer).off("swipeleft swiperight dragright dragleft release", this.handleHammer);
	window.removeEventListener('mousemove', this.onMouseMove, false);
	window.removeEventListener('touchmove', this.onTouchMove, false);
	window.removeEventListener('touchstart', this.onTouchStart, false);
	window.removeEventListener('resize', this.onResize, false);
	
	for (var i=0,navCount=navButtons.length; i < navCount; i++) {
		navButtons[i].removeEventListener( 'click', this.onNavButtonClick, false);
	}
	
};
	
	
	
	
	
	
	
	
	
	
	
	