
var initGlow = function(){

	var sidebar = document.getElementById('sidebar'),
		main = document.getElementById('main-content'),
		glow = document.getElementById('sidebar-glow'),
		linkCount = sidebar.children.length
		
	this.onLinkHover = function(e){
		TweenMax.to(glow,1,{className:'glow-' + e.target.getAttribute('data-color')});
	}
	this.onLinkExit = function(e){
		TweenMax.to(glow,2,{className:'glow-' + main.getAttribute('data-color')});
	}

	for (var i=0; i < linkCount; i++) {
		var link = sidebar.children[i];
		link.addEventListener('mousemove', this.onLinkHover, false);
		link.addEventListener('mouseout', this.onLinkExit, false);
	}
}

	
	
	
	
	
	