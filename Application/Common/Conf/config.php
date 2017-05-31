<?php
return array(
	//'配置项'=>'配置值'
    'TMPL_VAR_IDENTIFY' => 'array',
    'DEFAULT_FILTER'        =>  'strip_tags,stripslashes,htmlspecialchars',
    "SHOW_PAGE_TRACE"=>true,  //可以实时显示当前页面的操作的请求信息、运行情况、SQL执行、错误提示等，并支持自定义显示
    "SHOW_ERROR_MSG"=>true,       //显示具体的错误信息了
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'cloud',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PREFIX' => '', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_PORT'   => 3306, // 端口
);
