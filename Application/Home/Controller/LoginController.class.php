<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    //登录主界面
    public function login(){
        $this->display();
    }

    //登录
    public function doLogin(){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $user=M('User');
        $where['username']=$username;
        $arr=$user->where($where)->find();
        //dump($arr);
        if($username==""||$username==" "||$password==""||$password==" "){
            $this->error('小主，别闹！！！');
        }elseif($arr==null){
            $this->error('该用户不存在');
        }elseif($arr['password']!=$password){
            //exit;
            $this->error('密码错误');
        }else{
            session('username',$username);
            $_SESSION['id']=$arr['id'];
            //$this->success('',U('Index/index'));
            $this->redirect('Index/index');
        }
    }

    //退出登录
        public function doLogout(){
            $_SESSION=array();
                if(isset($_COOKIE[session_name()])){
                    setcookie(session_name(),'',time()-1,'/');
                }
            session_destroy();
            $this->redirect('Login/showlogin');
        }
}
?>