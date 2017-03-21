<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function getLoginInfo(){
        $user = M("user");
        $uname = I('post.loggin-user');
        $upwd = I('post.loggin-password');


        $data = $user->where("username= '$uname'")->find();
        if($data == null){
            echo "<script>alert('该用户不存在！');parent.location.href='Index/index';</script>";
        }else if($upwd != $data['password']) {
            echo "<script>alert('密码错误！');parent.location.href='Index/index';</script>";
        }else{
            $this->redirect('Blog/index');
        }

    }
}