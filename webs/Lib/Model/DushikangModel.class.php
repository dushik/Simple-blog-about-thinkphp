<?php

class DushikangModel extends Model{
    // 自动验证设置
    protected $_validate = array(
		array('name','require','名字必须'),
		array('email','email','邮箱格式错误！'),
		array('message', 'require', '内容必须'),
    );
    //定义自动完成
    protected $_auto = array(        
        array('create_time','getDate',1,'callback'),
		array('time','getTime',1,'callback'),
    );  
	function getDate(){
		return Date('Y-m-d');
	}
	function getTime(){
		return Date('H:i:s');
	}
}