<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller {
    public function login(){
    	$this->display();
    }

    public function doLogin()
    {
    	$username = $_POST['username'];
    	$password = $_POST['password'];

    	$account = M('Manager');
    	$where['username'] = $username;
		$where['password'] = $password;

		$arr = $account->field('id')->where($where)->find();
		if($arr){
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $arr['id'];
			$this->success('用户登录成功！',U("Index/index"));

		}else{
			$this->error('该用户不存在！');
		}
    }

    public function doLoginOut(){
		$_SESSION =array();
		if(isset($_COOKIE[session_name()])){
			setcookie(session_name(),'',time()-1,'/');

		}
		session_destroy();
		$this->redirect('Manager/login');
	}
}