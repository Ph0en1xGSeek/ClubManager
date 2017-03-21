<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
    public function index(){
        $this->display();
    }

    public function getRegisterInfo(){
        $uname = I('post.register-user');
        $upwd = I('post.register-password');
        $upwdagain = I('post.register-password-again');
        $user = M("user");
        $data = $user->where("username= '$uname'")->find();
        if($upwd != $upwdagain){
            echo "<script>alert('重复密码不正确！');parent.location.href='javascript:history.back()';</script>";
        }else if($data != null) {
            echo "<script>alert('该用户已存在！');parent.location.href='javascript:history.back()';</script>";
        } else{
                $data = array(
                    "username" => $uname,
                    "password" => $upwd
                );
                $user->add($data);

                $this->redirect('Index/index');
        }
    }
}