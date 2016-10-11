<?php
return array(
	//'配置项'=>'配置值'
    'SHOW_PAGE_TRACE'        => false,                           // 是否显示调试面板
    'URL_CASE_INSENSITIVE'   => false,                           // url区分大小写
    'LOAD_EXT_CONFIG'        => 'db',                            // 加载网站设置文件


    'TMPL_PARSE_STRING'      => array(                           // 定义常用路径
        '__ADMIN_CSS__'      => __ROOT__.trim(TMPL_PATH,'.').'Admin/Public/',
        '__ADMIN_IMAGES__'   => __ROOT__.trim(TMPL_PATH,'.').'Admin/Public/',
        '__ADMIN_JS__'       => __ROOT__.trim(TMPL_PATH,'.').'Admin/Public/',
        '__PUBLIC_CSS__'     => __ROOT__.trim(TMPL_PATH,'.').'Public/css',
        '__PUBLIC_JS__'      => __ROOT__.trim(TMPL_PATH,'.').'Public/js',
        '__HOME_CSS__'       => __ROOT__.trim(TMPL_PATH,'.').'Home/Public/',
    ),


    //***********************************模板引擎设置 ***********************************
    'TMPL_L_DELIM'           =>  '<{',            // 模板引擎普通标签开始标记
    'TMPL_R_DELIM'           =>  '}>',            // 模板引擎普通标签结束标记


    //***********************************SESSION设置**********************************
    'SESSION_OPTIONS'        => array(
        'name'               => 'BJYADMIN',//设置session名
        'expire'             => 24*3600*15, //SESSION保存15天
        'use_trans_sid'      => 1,//跨页传递
        'use_only_cookies'   => 0,//是否只开启基于cookies的session的会话方式
    ),
    //***********************************页面设置**************************************
    'TMPL_EXCEPTION_FILE'    => APP_DEBUG ? THINK_PATH.'Tpl/think_exception.tpl' : './Template/default/Home/Public/404.html',
    'TMPL_ACTION_ERROR'      => TMPL_PATH.'/Public/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'    => TMPL_PATH.'/Public/dispatch_jump.tpl', // 默认成功跳转对应的模板文件


    'URL_ROUTER_ON'          => true, //开启路由
    'URL_ROUTE_RULES'=>array(//规则/正则路由
        'index$'             => 'Home/Index/index',//首页
        'lists$'             => 'Home/Article/lists',
        //'project/:id\d'      => 'Home/Project/detail',//项目详情
        'login$'             => 'Admin/Login/login',
        'delete$'            => 'Admin/User/delete',
    ),

);