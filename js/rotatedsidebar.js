

var initSidebar = function(){

	var sidebar = document.getElementById('sidebar'),
		linkCount = sidebar.children.length,
		range = 120,
		shift = 80;
		deltaAngle = range/(linkCount-1);
		
		for(var i = 0; i<linkCount; i++){
			var link = sidebar.children[i];
			var angle = i * deltaAngle - (range/2);
			TweenMax.to(link, 1, {rotationZ:angle,x:shift,transformOrigin:'-130px 50% 0',ease:Quint.easeOut});
		}


}


var initGlow = function(){

	var sidebar = document.getElementById('sidebar'),
		main = document.getElementById('main-content'),
		glow = document.getElementById('sidebar-glow'),
		linkCount = sidebar.children.length
		
	this.onLinkHover = function(e){
		TweenMax.to(glow,1,{className: 'glow-' + e.target.getAttribute('data-color')});
	}
	this.onLinkExit = function(e){
		TweenMax.to(glow,2,{className: 'glow-' + main.getAttribute('data-color')});
	}

	for (var i=0; i < linkCount; i++) {
		var link = sidebar.children[i];
		link.addEventListener('mouseenter', this.onLinkHover, true);
		link.addEventListener('mouseout', this.onLinkExit, false);
	}
}

	
	
	
	
	
	