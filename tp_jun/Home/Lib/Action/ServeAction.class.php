<?php
	class ServeAction extends Action{
		public function index(){
			$this->display();
		}

		public function doAdd(){
			$code = $_POST['code'];
			if(md5($code)!= $_SESSION['code']){
				$this->error('验证码错误！');
			}

			$name = $_POST['name'];
			$tell = $_POST['tell'];
			$content = $_POST['content'];
			$ip = get_client_ip();

			$message = M('message');
			$data['name'] = $name;
			$data['tell'] = $tell;
			$data['content'] = $content;
			$data['ip'] = $ip;
			$data['time'] = date("Y-m-d");
			$f = $message->add($data);
			if($f > 0){
				$this->success('留言成功！',U('Serve/index'));
			}else{
				$this->error('留言失败！');
				$this->display('index');
			}
		}

		public function view(){
			$User = M('message'); // 实例化User对象
			import('ORG.Util.Page');// 导入分页类
			$count      = $User->count();// 查询满足要求的总记录数
			$Page       = new Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $User->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('data',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this->display(); // 输出模板
		}
	}


	