<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="/cloud/Public/css/normalize.css">
        <link rel="stylesheet" href="/cloud/Public/css/main.css">
        <script src="/cloud/Public/js/modernizr-2.8.3.min.js"></script>

        <!-- 新 Bootstrap 核心 CSS 文件 -->
        <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- 可选的Bootstrap主题文件（一般不使用） -->
        <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>

        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>


        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="page">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/cloud/index.php/Home/Show/index">北洋呵呵呵</a>
                        </div>

                        <div class="container">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="left-part" id="bs-example-navbar-collapse-1"><!--collapse navbar-collapse-->
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="/cloud/index.php/Home/Show/index">首页</a></li>
                                    <li><a href="#">图片</a></li>
                                    <li><a href="#">音频</a></li>
                                    <li><a href="#">视频</a></li>
                                    <li>
                                        <div class="search-box">
                                            <form id="search_form" method="get" action="/search/" class="searching-unit" data-regestered="regestered">
                                                <input id="query" type="text" size="50" name="q" autocomplete="off" placeholder="搜索你喜欢的" value="" >
                                                <a href="#" ><button><img class="search-button" src="/cloud/Public/img/搜索按钮.png"></button></a>
                                            </form>
                                            <div class="search-hint">
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                        <div class="news">
                                            <img class="" src="/cloud/Public/img/小喇叭.png">
                                        </div>
                                    </a></li>
                                    <li><a href="/cloud/index.php/Home/Upload/index">
                                        <div class="cloud">
                                            <img class="" src="/cloud/Public/img/灰色的云.png">
                                        </div>
                                    </a></li>
                                    <li><a href="#">
                                        <div class="">
                                            <div class="avatar">
                                            <img class="" src="/cloud/Public/img/头像.png">
                                            </img>
                                            </div>

                                            <div class="id">
                                                <span>番茄鸡蛋</span>
                                            </div>
                                        </div>
                                    </a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div>
                    </div><!-- /.container-fluid -->
                </nav>

                <div class="middle container">
                        <div class="">
                            <h2 class="h">热门推荐</h2>
                            <div class="middle-left">
                                <div id="myCarousel" class="carousel slide">
                                    <!-- 轮播（Carousel）指标 -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                                    <!-- 轮播（Carousel）项目 -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="/cloud/Public/img/场景原画.png" alt="First slide">
                                            <div class="carousel-caption">标题 1</div>
                                        </div>
                                        <div class="item">
                                            <img src="/cloud/Public/img/场景原画.png" alt="Second slide">
                                            <div class="carousel-caption">标题 2</div>
                                        </div>
                                        <div class="item">
                                            <img src="/cloud/Public/img/场景原画.png" alt="Third slide">
                                            <div class="carousel-caption">标题 3</div>
                                        </div>
                                    </div>
                                    <!-- 轮播（Carousel）导航 -->
                                    <a class="carousel-control left" href="#myCarousel"
                                       data-slide="prev">&lsaquo;</a>
                                    <a class="carousel-control right" href="#myCarousel"
                                       data-slide="next">&rsaquo;</a>
                                </div>
                            </div>
                            <div class="middle-right">
                                <div class="right-left">
                                    <img class="psxz" src="/cloud/Public/img/平时习作.png" >
                                </div>
                                <div class="right-right">
                                    <img class="rgnxhjgny" src="/cloud/Public/img/如果你喜欢就给你呀.png">
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="hdiv">
                                <h2>图片</h2>
                            </div>
                            <div class="little-top">
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                            </div>
                            <div class="little-bottom">
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="hdiv">
                                <h2>音频</h2>
                            </div>
                            <div class="little-top">
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                            </div>
                            <div class="little-bottom">
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="hdiv">
                                <h2>视频</h2>
                            </div>
                            <div class="little-top">
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                            </div>
                            <div class="little-bottom">
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="neirong">
                                        <div class="little-top-top">
                                            <img class="picture" src="/cloud/Public/img/图片.png">
                                        </div>
                                        <div class="little-top-bottom">
                                            <div class="worksname">
                                                <a href="">作品名称</a>
                                            </div>
                                            <div class="heart">
                                                <img src="/cloud/Public/img/心.png">
                                                455
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zuozhe">
                                        <img src="/cloud/Public/img/头像.png">
                                        番茄鸡蛋
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
        </div>
    </body>
</html>