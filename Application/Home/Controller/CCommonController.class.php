<?php
namespace Home\Controller;
use Think\Controller;
	class CCommonController extends Controller{
		Public function _initialize(){
   		// 初始化的时候检查用户权限
   			if(!isset($_SESSION['username']) || $_SESSION['username']==''){
				$this->redirect('Loginbackstage/loginbackstage');
			}
		}
	}
?>