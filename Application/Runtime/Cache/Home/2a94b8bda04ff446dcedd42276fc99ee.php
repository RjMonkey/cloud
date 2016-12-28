<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>登录</title>
	<link rel="stylesheet" href="/cloud/Public/css/login.css" type="text/css"/>
	<meta charset="utf-8">
</head>
<body>
<div id="page">
	<div id="head">
		<div  id="heart"></div>
		<div id="biaoti"><p>欢迎来到北洋呵呵呵</p></div>
	</div>
	<div id="middle" >
		<form action="/cloud/index.php/Home/Index/login" method="post">
		<p style="height:1px;"></p>
		<div id="logbox" >

				<div class="feiru" >
					<img src="/cloud/Public/img/people.png" class="inp-img"/>
					<input type="text" placeholder="输入学号或工号" name="username" required="required"/>
				</div>
				<div class="feiru" style="margin-top:5%;">
					<img src="/cloud/Public/img/key.png" / class="inp-img">
					<input type="password" name="password" placeholder="密码" required="required"/>
				</div>

				<a href="#" id="forget">忘记密码&gt&gt</a>



		</div>
		<button id="button"  type="submit" onmouseover="style.backgroundImage= 'url(/cloud/Public/img/hover.png)';" onmouseout="style.backgroundImage= 'url(/cloud/Public/img/normal.png)';" onmousedown="style.backgroundImage= 'url(/cloud/Public/img/press.png)';" onmouseup="style.backgroundImage= 'url(/cloud/Public/img/hover.png)';"></button>
		</form>
	</div >

</div>

</body>
<script src="/cloud/Public/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script>
	var middle=document.getElementById("middle");
	var HTwidth = document.body.offsetWidth/1.3;
	var logbox = document.getElementById('logbox');
	var feiru = document.getElementsByClassName('feiru');
	var input = document.getElementsByTagName('input');
	var inpimg = document.getElementsByClassName('inp-img');
	var button = document.getElementById('button');
	var heart = document.getElementById('heart');
	var head = document.getElementById('head');
	var forget = document.getElementById('forget');
	var biaoti =document.getElementById('biaoti');


	for(var i=0;i<input.length;i++){
		feiru[i].style.width = HTwidth * 0.3 * 0.7 +"px";
		feiru[i].style.height = HTwidth/55 +"px";
		input[i].style.width = HTwidth *0.3*0.7*0.6 +"px";
		input[i].style.height = HTwidth/55 +"px";
		input[i].style.fontSize = HTwidth/70 +"px";
		input[i].style.lineHight = HTwidth/55 +"px";
		inpimg[i].style.width = HTwidth /90 +"px";
		inpimg[i].style.height = HTwidth/65 +"px";
		//inpimg[i].style.marginTop = HTwidth *0.3*0.7* 0.01 +"px";
	}
	button.style.width = HTwidth/12 +"px";
	button.style.height = HTwidth/20 +"px";
	if(HTwidth*1.5 >=1500){
		button.style.left = HTwidth/1.7 +"px";
		//button.style.top = HTwidth/11 +"px";
	}
	else if(HTwidth*1.5>=900 && HTwidth*1.5 < 1500){
		button.style.left = HTwidth/1.7 +"px";
		//button.style.top = HTwidth/12 +"px";
	}else if(HTwidth*1.5 <900 && HTwidth*1.5 >= 700){
		//button.style.top = HTwidth/14+"px";
	}else if(HTwidth*1.5 <700 && HTwidth*1.5 >=500){
		//button.style.top = HTwidth/18+"px";
	}else if(HTwidth*1.5 < 500){
		//button.style.top = HTwidth/28+"px";
	}
	logbox.style.width = HTwidth *0.3 +"px";
	logbox.style.height = HTwidth *0.175 +"px";
	middle.style.width = HTwidth + "px";
	middle.style.height = HTwidth + "px";
	heart.style.height = HTwidth/15+"px";
	biaoti.style.height = HTwidth /15 +"px";
	heart.style.width = HTwidth/35 +"px";
	forget.style.fontSize = HTwidth/80 +"px";
	head.style.height = HTwidth/15 +"px";



	/*
	 myimg.onmouseout = function(){
	 myimg.src = "../img/1.png";
	 }
	 */
	/*
	 var alpha=0.1;
	 var timer;
	 fadeInOut(0.005);
	 function fadeInOut(value){
	 clearInterval(timer);
	 timer=setInterval(
	 function(){
	 alpha+=value;
	 middle.style.background=alpha;
	 if(alpha>=1||alpha<=0){
	 clearInterval(timer);
	 }
	 },30);
	 }
	 */
	$(document).ready(function(){
		var times = 0;
		var cishu = 3;
		$('#logbox').fadeIn(100);
		$('#logbox').animate({left:"40%",opacity:"1"},400);


		tantiao();
		function tantiao(){
			if( times <= 3){
				$('#logbox').fadeIn(100);
				$('#logbox').animate({left:35-cishu*1.5 +"%"},250);
				cishu--;
				if(cishu >= 0){
					$('#logbox').fadeIn(100);
					$('#logbox').animate({left:35+cishu*1.5+"%"},250);
					times++;
					tantiao();
				}
			}
			return;
		}
	})

</script>
</html>