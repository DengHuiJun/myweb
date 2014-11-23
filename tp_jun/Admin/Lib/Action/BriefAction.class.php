<?php
	class BriefAction extends Action{
		public function add(){
			$this->display();
		}

		public function doadd(){
			$data['title'] = $_POST['title'];
			$data['author'] = $_POST['author'];
			$data['content'] = $_POST['content'];
			$showtime=date("Y-m-d");
			$data['time'] = $showtime;
			$work = M("brief");
			$f = $work ->add($data);
			if($f){
				$this->success('添加成功！',U('Brief/add'));
			}else{
				$this->error('添加失败！');
			}
		}

		public function check(){
			$data = M('brief');
			$list = $data -> order('id')->select();
			$this->assign('list',$list);
			$this->display();
		}

		public function update(){
			$id = $_GET['id'];
			$User = M("brief"); // 实例化User对象
			$where['id'] = $id;
			$data = $User->where($where)->find(); 
			$this->assign('m',$data);
			$this->display();
		}


		public function doupdate(){
			$User = M("brief"); // 实例化User对象
			// 要修改的数据对象属性赋值
			$data['id'] = $_POST['id'];
			$data['title'] = $_POST['title'];
			$data['author'] = $_POST['author'];
			$data['content'] = $_POST['content'];

			$showtime=date("Y-m-d");
			$data['time'] = $showtime;

			$User->save($data); // 根据条件保存修改的数据
			$this->redirect("Brief/check");
		}
	}