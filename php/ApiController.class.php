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
		/**INSERT INTO `ceshi_user_list` (`user_name`, `password`) VALUES ('".$_POST['Username']."', '".$_POST['Password']."')*/
	}
	
}

?>