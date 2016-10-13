<?php
namespace Home\Controller;
use Think\Controller;
class BackstageController extends CCommonController {
    public function backstage(){
        $message=D('Message');
        $user=D('User');
        //$arr_arr=$message->relation(true)->select();//relation()开启关联
        //$this->assign('list',$arr_arr);
      
        $count=$message->count();//获取数据的总数
        $page=new \Think\Page($count,5);//每页显示2条数据
        $page->setConfig('header','条信息');
        $show=$page->show();//返回分页信息
       // $arr=$message->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
        $arr=$message->limit($page->firstRow.','.$page->listRows)->relation(true)->select();
        $this->assign('list',$arr);
        $this->assign('show',$show);
    	$this->display();
    }
    public function update(){
      $id=$_GET['id'];
      $_SESSION['aid']=$id;
      $m=M('Message');
      $where['id']=$_SESSION['aid'];
      $arr=$m->where($where)->find();
      session('title',$arr['title']);
      session('content',$arr['content']);
      session('filename',$arr['filename']);
      $this->assign('list',arr);
      $this->display();
    }
    public function delete(){
      $where['id']=$_GET['id'];
      $m=M('Message');
      $count=$m->where($where)->delete();
      if($count){
        $this->success('删除成功',U('Backstage/backstage'));
      }else{
        $this->error('删除失败');
      }
      
    }
    public function doupdate(){
      $where['id']=$_SESSION['aid'];
      $m=M('Message');
      $arr["content"]=$_POST['content'];
      $arr["title"]=$_POST['title'];
      $arr["filename"]=$_POST['filename'];
      $arr["time"]=time();
      $row=$m->where($where)->save($arr);

      if($row){
        $this->success('信息修改成功',U('Backstage/backstage'));    
      }
      else{
        $this->error('信息修改失败');
      }
    }
}
?>