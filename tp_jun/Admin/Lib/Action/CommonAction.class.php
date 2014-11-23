<?php
	class CommonAction extends Action{
		public function _initialize(){
			//判断用户是否登录 通过session
			if(!isset($_SESSION['username']) || $_SESSION['username'] == ''){  
	    		$this->redirect('Login/index');
	    	}
		}
	}

?>