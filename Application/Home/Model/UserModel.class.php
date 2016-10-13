<?php
namespace Home\Model;
use Think\Model;

	class UserModel extends Model{
		protected $_validate=array(
			array('code','require','验证码必须填写!'),
			array('code','checkCode','验证码错误!',0,'callback',1),
			array('username','require','用户必须填写!'),
			array('username','','用户已经存在',0,'unique',1),
			array('username','/^\w{5,}$/','用户名必须5个字母或5个字母以上',0,'regex',1),
			array('password','require','密码必须填写!'),
			array('repassword','require','确认密码必须填写!'),
			array('password','/^\w{3,}$/','密码必须3个字母或3个字母以上',0,'regex',1),
			array('repassword','password','密码与确认密码不一致',0,'confirm'), 
		);

		protected function checkCode($code){
			if(md5($code)!=$_SESSION['code']){
				return false;
			}else{
				return true;
			}
		}
	}
?>