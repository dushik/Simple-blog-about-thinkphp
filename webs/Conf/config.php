<?php
return array(
	//'配置项'=>'配置值'
	//'配置项'=>'配置值'
	'URL_MODEL'            	 	=> 0,
	'DB_TYPE'              		=> 'mysql',         			// 数据库类型
    'DB_HOST'            	   	=> 'localhost',     		// 服务器地址
    'DB_NAME'               	=> 'bolgtest',          			// 数据库名
    'DB_USER'               	=> 'root',          			// 用户名
    'DB_PWD'                	=> 'root',  			// 密码
    'DB_PORT'               	=> '3306',          			// 端口
	'DB_PREFIX'					=> '',	
	
	//分组配置
	'DEFAULT_THEME'				=> 'Default',
	'TMPL_DETECT_THEME'			=> false,						// 自动侦测模板主题
	'THEME_LIST' 				=> 'Default',					//模板列表
    'DEFAULT_CHARSET' 			=> 'UTF-8',                       //编码格式
	
	//调试配置
	'SHOW_PAGE_TRACE'			=> true,						//显示调试信息
    'SHOW_ERROR_MSG'        	=> true,            			//显示错误信息
    'SHOW_PAGE_TRACE'       	=> true,           				//显示页面Trace信息
	'APPDEBUG'					=> true,						//开启firebug调试
);
?>