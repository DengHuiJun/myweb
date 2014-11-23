<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
    public function index(){
    	$this->display();
    }

    public function doLogin(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$code = $_POST['code'];
		if(md5($code)!= $_SESSION['code']){
			$this->error('验证码错误！');
		}

		$user = M('Manager');
		$where['username'] = $username;
		$where['password'] = $password;

		$arr = $user->field('id')->where($where)->find();
		if($arr){
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $arr['id'];
			$this->success('用户登录成功！',U("Index/index"));

		}else{
			$this->error('该用户不存在！');
		}
    }

    	//退出登录
	public function doLoginOut(){
		$_SESSION =array();
		if(isset($_COOKIE[session_name()])){
			setcookie(session_name(),'',time()-1,'/');

		}
		session_destroy();
		$this->redirect('Login/index');
	}






}