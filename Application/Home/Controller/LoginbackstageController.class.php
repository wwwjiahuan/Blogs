<?php
namespace Home\Controller;
use Think\Controller;
class LoginbackstageController extends Controller {
    //登录主界面
    public function Loginbackstage(){
        $this->display();
    }

    //登录
    public function doLogin(){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $user=M('Superuser');
        $where['username']=$username;
        $arr=$user->where($where)->find();
        //dump($arr);
        if($username==""||$username==" "||$password==""||$password==" "){
            $this->error('小主，别闹！！！');
        }elseif($arr==null){
            $this->error('该用户不存在');
        }elseif($arr['superpassword']!=$password){
            //exit;
            $this->error('密码错误');
        }else{
            session('supername',$supername);
            $_SESSION['id']=$arr['id'];
            //$this->success('',U('Index/index'));
            $this->redirect('Backstage/backstage');
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