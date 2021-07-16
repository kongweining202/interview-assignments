<?php
class controller_ApiController extends controller_BaseController
{
    function indexDo()
    {
		$this->smarty->display('ceshi/registered.html');
    }
	function registerDo()
	{
		/*php判断提交数据*/
		/*插入数据表数据**/
		/**mysql数据表 CREATE TABLE `ceshi_user_list` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_name` varchar(80) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY  (`id`,`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;*/
		
		if($_POST['Username']=="" || $_POST['Password']=="")
		{
			echo json_encode(array("status"=>1001,"messge"=>"提交数据不可为空"));
			exit();
		}
		if(strlen($_POST['Password'])<6)
		{
			echo json_encode(array("status"=>1002,"messge"=>"密码长度不可小于6"));
			exit();
		}
		if(preg_match("/\d{3}/", $_POST['Password']))
		{
			echo json_encode(array("status"=>1002,"messge"=>"密码长度不可设置3位以上连续数组"));
			exit();
		}
		if(!preg_match("/^[a-zA-Z_]([A-Za-z0-9]+)$/i",$_POST['Username']))
		{
			echo json_encode(array("status"=>1003,"messge"=>"用户名称只能以英文字母或下划线开头，且只能包含英文字母，下划线或数字"));
			exit();
		}
		
		if(!preg_match("/^[a-zA-Z_]([A-Za-z0-9]+)$/i",$_POST['Username']))
		{
			echo json_encode(array("status"=>1004,"messge"=>"用户名称只能以英文字母或下划线开头，且只能包含英文字母，下划线或数字"));
			exit();
		}
		if($_POST['Password']!=$_POST['Password2'])
		{
			echo json_encode(array("status"=>1005,"messge"=>"两次密码输入不一致"));
			exit();
		}
		/**INSERT INTO `ceshi_user_list` (`user_name`, `password`) VALUES ('".$_POST['Username']."', '".$_POST['Password']."')*/
		echo json_encode(array("status"=>0,"messge"=>"注册成功","info"=>array("id"=>$userid,"user_name="=>$_POST['Username'])));
		exit();
	}
	
}

?>