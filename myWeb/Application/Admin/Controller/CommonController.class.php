<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
		public function _initialize(){
			// 判断用户是否登录 通过session
			if(!isset($_SESSION['username']) || $_SESSION['username'] == ''){  
	    		$this->redirect('Manager/login');
	    	}
		}
}