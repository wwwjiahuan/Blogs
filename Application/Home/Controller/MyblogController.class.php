<?php
namespace Home\Controller;
use Think\Controller;
    class MyblogController extends Controller{
    	public function myblog(){
    		$this->display();
    	}
        public function domyblog(){
			$message=M('Message');


			$upload=new \Think\Upload();//实例化上传类
			$upload->rootPath =  './Uploads/';// 设置附件上传根目录
			//$upload->savePath =  '';// 设置附件上传子目录
			$info=$upload->upload();
			if(!$info) {// 上传错误提示错误信息
				$this->error($upload->getError());
			}else{// 上传成功 获取上传文件信息

				$arr['filename']=$info['filename']['savename'];
				$arr['title']=$_POST['title'];
				$arr['content']=$_POST['content'];
				$arr['uid']=$_SESSION['id'];
                $arr['time']=time();
			}
			$lastId=$message->add($arr);
		
			if(!$lastId){
				$this->error('留言失败');
				
			}else{
				$this->success('留言成功',U('Index/index')); 
			}
		}
    }
?>