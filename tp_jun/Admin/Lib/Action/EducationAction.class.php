<?php
	class EducationAction extends CommonAction{
		public function checkEdu(){
			$User = M('education'); // 实例化User对象
			import('ORG.Util.Page');// 导入分页类
			$count      = $User->count();// 查询满足要求的总记录数
			$Page       = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $User->order('time')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('data',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this->display(); // 输出模板
		}

		public function addEdu(){
			$this->display();
		}

		public function doadd(){
			$data['title'] = $_POST['title'];
			$data['author'] = $_POST['author'];
			$data['content'] = $_POST['content'];
			$showtime=date("Y-m-d");
			$data['time'] = $showtime;
			$work = M("education");
			$f = $work ->add($data);

			if($f){
				$this->success('添加成功！',U('Education/addEdu'));
			}else{
				$this->error('添加失败！');
			}
		}

		public function dodel(){
			$id = $_GET['id'];
			$User = M("education"); // 实例化User对象
			$where['id'] = $id;
			$User->where($where)->delete(); // 删除指定id的用户数据
			$this->redirect("Education/checkEdu");
		}


		public function update(){
			$id = $_GET['id'];
			$User = M("education"); // 实例化User对象
			$where['id'] = $id;
			$data = $User->where($where)->find(); 
			$this->assign('m',$data);
			$this->display();
		}

		public function doupdate(){
			$User = M("education"); // 实例化User对象
			// 要修改的数据对象属性赋值
			$data['id'] = $_POST['id'];
			$data['title'] = $_POST['title'];
			$data['author'] = $_POST['author'];
			$data['content'] = $_POST['content'];

			$showtime=date("Y-m-d");
			$data['time'] = $showtime;

			$User->save($data); // 根据条件保存修改的数据
			$this->redirect("Education/checkEdu");
		}
	}