<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <title></title>

    <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
    <script src="/cloud/Public/js/sweet-alert.min.js"></script>
    <script type="text/javascript">
        $.get("/cloud/index.php/Home/Upload/test", function(data){
            var data = JSON.parse(data);
            var b = data.d;
            sweetAlert(b)
        })
    </script>
</head>
<body>


</body>
</html>