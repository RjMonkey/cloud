<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<title>个人主页</title>
	<link rel="stylesheet" href="/cloud/Public/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/cloud/Public/css/commom.css" type="text/css">
	<link rel="stylesheet" href="/cloud/Public/css/sc.css" type="text/css">
</head>
<body>
<div id="page">
    <div id="header">
        <div id="head-container" class="center">
            <div id="nav" class="left">
                <ul class="nav nav-pills left">
                    <li class="dropdown">
                        <a href="/cloud/index.php/Home/Show/index"class="dropdown-toggle">首页</a>
                    </li>
                </ul>
                <ul class="nav nav-pills left">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"  >图片</a>
                        <ul class="dropdown-menu"  >
                            <li ><a href="##">二维</a></li>
                            <li ><a href="##">三维</a></li>
                            <li ><a href="##">设计作品</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-pills left">
                    <li class="dropdown">
                        <a href="/cloud/index.php/Home/Show/video"  class="dropdown-toggle"  >视频</a>
                    </li>
                </ul>
                <ul class="nav nav-pills left">
                    <li class="dropdown">
                        <a href="/cloud/index.php/Home/Show/mic"  class="dropdown-toggle"  >音频</a>
                    </li>
                </ul>
                <ul class="nav nav-pills left">
                    <li class="dropdown">
                        <a  href="/cloud/index.php/Home/Show/rar"  class="dropdown-toggle"  >压缩</a>
                    </li>
                </ul>
            </div>
            <div id="search" class="left">
                <input type="text" placeholder="搜索一下"/>
            </div>
            <div id="person-inf" class="left">
                <div class="person-item left">
                    <p><img src="/cloud/Public/img/lb.png"/></p>
                </div>
                <div class="person-item left">
                    <a href="/cloud/index.php/Home/Upload/index">
                        <p><img src="/cloud/Public/img/cloud.png"/></p>
                    </a>
                </div>
                <div class="person-item left">
                    <a href="/cloud/index.php/Home/Personal/index">
                        <p class="yahei"><?php echo (session('username')); ?></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
<div id="middle" >
	<div id="container" class="center">
		<div style="height:50px;"><p class="yahei little-title">上传作品</p></div>
		<div id="inf-box" class="center">
			<form name="form" id="formId" enctype="multipart/form-data"  method="post" action="/cloud/index.php/Home/Upload/upload">
				<div id="neirong" class="center">
					<div id="zpname-box">
						<p class="yahei little2title">作品名称:</p>
						<input  id="zpname" type="text" name="name" required="required"/>
					</div>
					<div id="kind">
						<p class="yahei little2title">作品类型:</p>
						<select id="type-select" name="category" onchange="showdiv()" required="required">
							<option id="pic" value="pic">图片</option>
							<option id="mov" value="mov">视频</option>
							<option id="mic" value="mic">音频</option>
							<option id="rar" value="rar ">压缩</option>
						</select>

						<select id="tag" name="tag" required="required" >
							<option value="二维" class="yahei type">二维</option>
							<option value="三维" class="yahei type">三维</option>
							<option value="设计作品" class="yahei type">设计作品</option>
						</select>


					</div>
					<div id="send">
						<p class="yahei little2title">上传作品:</p>
						<div class="yahei type" id="selects" style="cursor: pointer;position: relative;">
							<span style="display: inline-block" id="fileName">选择作品</span>

							<input id="file" name="content" type="file" class="hidden_dom" value="选择作品" onchange="handleFile()" required="required">

						</div>

						<textarea id="jieshao" cols ="50" rows = "3" placeholder="作品说明" name="description" required="required"></textarea>
					</div>
					<!--<div id="submit"  class="yahei center" onclick="javascript:form.submit();">确定</div>-->
					<div id="submit"  class="yahei center" >
						<span style="display: inline-block">确定</span>
						<input  type="submit" class="hidden_dom" >
					</div>

				</div>
			</form>
		</div>
	</div>
</div>
</div>
</body>
<script src="/cloud/Public/js/jquery-3.1.1.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="/cloud/Public/js/my_main.js"></script>
<script src="/cloud/Public/js/jquery.uploadify.js"></script>
<script src="/cloud/Public/js/jquery.uploadify.min.js"></script>
<div id="footer">
    <div  id="linker" class="center">
        <p id="link_list">
            <a href="#">&nbsp 关于我们&nbsp | </a>
            <a href="#">&nbsp 联系我们&nbsp |</a>
            <a href="#">&nbsp 帮助中心&nbsp |</a>
            <a href="#">&nbsp 法律声明&nbsp |</a>
            <a href="#">&nbsp 广告合作热线</a>
        </p>
        <p class="app">
            &copy e.tju.edu.cn天津大学王者工作室荣誉出品
        </p>
    </div>
</div>
</html>