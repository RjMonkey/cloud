<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="/cloud/index.php/Home/Upload/upload" enctype="multipart/form-data" method="post" >
    <input type="text" name="name" />
    <input type="file" name="photo" />
    <input type="submit" value="提交" >
</form>

</body>
</html>