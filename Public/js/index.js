			var head_box = document.getElementById('head-box');
			var header = document.getElementById('header');
			var head_search = document.getElementById('head_search');
			var nav_item = document.getElementById('nav');
			var list = document.getElementById('list');
			var next = document.getElementById('right');
			var prev = document.getElementById('left');
			var dprev = document.getElementById('prev');
			var dnext = document.getElementById('next');
			var buttons = document.getElementById('buttons').getElementsByTagName('span');
			var login = document.getElementById('login');
			var a = document.getElementById('nav').getElementsByTagName('a');
			var bgimg = document.getElementsByClassName('bgimg');
			var col=document.getElementsByClassName('col');
			//var col0= document.getElementsByClassName('col0');
			var bgboxWidth = parseInt(document.getElementById('background-box').offsetWidth);
			var index = 1;
			var rtWidth = bgboxWidth;
			var len = 4;
			var animated = false;
            var interval = 3000;
            var timer;
			
			
			for(var i=0;i<col.length;i++){
				col[i].style.width = bgboxWidth *0.8 *0.2187+"px";
				col[i].style.height = bgboxWidth *0.8 *0.25 + "px";
			}
			function slider(val){
				list.style.width = val*6 +"px";
				list.style.left = -val+"px";
				for(var i =0 ;i<bgimg.length;i++){	
					bgimg[i].style.width = val +"px";
				}
			}
			if(bgboxWidth < 680){
				dprev.style.left = 0;
				dnext.style.right = 0;
			}
			slider(bgboxWidth);
			function showbuttons(){
				for (var i = 0; i < buttons.length ; i++) {
						if( buttons[i].className == 'on'){
							buttons[i].className = '';
							break;
						}
					}
				buttons[index - 1].className = 'on';
			}
			showbuttons()
			
			function animate(offset){
			if (offset == 0) {
                    return;
                }
                animated = true;
                var time = 300;
                var inteval = 30;
                var speed = offset/(time/inteval);
                var left = parseInt(list.style.left) + offset;

                var go = function (){
                    if ( (speed > 0 && parseInt(list.style.left) < left) || (speed < 0 && parseInt(list.style.left) > left)) {
                        list.style.left = parseInt(list.style.left) + offset + 'px';
                        setTimeout(go, inteval);
                    }
                    else {
                        list.style.left = left + 'px';
                        if(left> rtWidth){
                            list.style.left = -rtWidth * len + 'px';
                        }
                        if(left<(-rtWidth * len)) {
                            list.style.left = -rtWidth +"px";
                        }
                        animated = false;
                    }
                }
                go();
			}
			/*
			 function play() {
                timer = setTimeout(function () {
                    next.onclick();
                    play();
                }, interval);
            }
            function stop() {
                clearTimeout(timer);
            }
			*/
			next.onclick = function(){
				
				if (animated) {
                    return;
                }
				if(index == 4){
					index = 1;
				}else{
					index += 1;
				}
				
				showbuttons();
				animate(-rtWidth);
			}
			prev.onclick = function(){
				if (animated) {
                    return;
                }
				if(index == 1){
					index = 4;
				}else{
					index -= 1;
				}
				showbuttons();
				animate(rtWidth);
			}
			
			for (var i = 0; i < buttons.length; i++) {
                buttons[i].onclick = function () {
                  
                    if(this.className == 'on') {
                        return;
                    }
                    var myIndex = parseInt(this.getAttribute('index'));
                    var offset = -rtWidth * (myIndex - index);

                    animate(offset);
                    index = myIndex;
                    showbuttons();
                }
            }
			
			//play();
			//head_box.onmouseover = stop;
           // head_box.onmouseout = play;
			
			window.onscroll = function(){ 
				var height = document.documentElement.scrollTop||document.body.scrollTop;

				if(height > 300){
					header.style.backgroundColor = "white";
					head_search.style.visibility = "visible";
					login.style.color = 'black';
					login.style.borderColor = 'black';
					header.style.boxShadow = "0 0 4px rgba(0,0,0,.2)";
					
					for(var i = 0; i < a.length; i++){
						a[i].style.color = "#000"
					}
				}
				else{
					header.style.background = "0";
					header.style.boxShadow = "none";
					head_search.style.visibility = "hidden";
					login.style.color = 'white';
					login.onmousemove = function(){
						login.style.color = 'black';
					}
					login.style.borderColor = '#fff';
					for(var i = 0; i<a.length; i++){
						a[i].style.color = "white";
					}
				}
			}
			
			window.onresize = function(){
				var htmlWidth = parseInt(document.body.offsetWidth);
				slider(htmlWidth);
				rtWidth = htmlWidth;
				if(htmlWidth < 680){
					dprev.style.left = 0;
					dnext.style.right = 0;
				}else{
					dprev.style.left = 10+"%";
					dnext.style.right = 10+"%";
				}
			}