<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<title>艺术类管理平台</title>
	<link rel="stylesheet" href="/cloud/Public/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/cloud/Public/css/commom.css" type="text/css">
	<link rel="stylesheet" href="/cloud/Public/css/shipin.css" type="text/css">
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
                            <li ><a href="/cloud/index.php/Home/Show/pic/tag/erwei">二维</a></li>
                            <li ><a href="/cloud/index.php/Home/Show/pic/tag/sanwei">三维</a></li>
                            <li ><a href="/cloud/index.php/Home/Show/pic/tag/shejizuopin">设计作品</a></li>
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
<div id="middle" class="center">
	<p class="yahei" id="p1">图片</p>
	<div id="sp-container" class="center">
		<div class="row">
			<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="left col">
				<div class="box">
					<div class="index-box" >
						<img src="/cloud/Public/Uploads/<?php echo ($vo["content"]); ?>" title="<?php echo ($vo["title"]); ?>"/>
					</div>
					<div>
						<div class="zoupname"><p class="yahei"><?php echo ($vo["title"]); ?></p></div>
						<div class="heart"><img src="/cloud/Public/img/heart2.png"/></div>
						<p style="float:left;" class="yahei">455</p>
					</div>
				</div>
				<div>
					<div class="yuan"><img src="/cloud/Public/img/ren.png"/></div><p class="yahei minz"><?php echo ($user_name); ?></p>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
</div>
</div>
</body>
<script language="JavaScript">
    <!--
    if (window.Event)
        document.captureEvents(Event.MOUSEUP);
    function nocontextmenu()
    {
        event.cancelBubble = true
        event.returnValue = false;
        return false;
    }
    function norightclick(e)
    {
        if (window.Event)
        {
            if (e.which == 2 || e.which == 3)
                return false;
        }
        else
        if (event.button == 2 || event.button == 3)
        {
            event.cancelBubble = true
            event.returnValue = false;
            return false;
        }
    }
    document.oncontextmenu = nocontextmenu; // for IE5+
    document.onmousedown = norightclick; // for all others
    //-->
</script>
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