<?php
	class WorkAction extends Action{

		public function index(){
			$User = M('workdynamic'); // 实例化User对象
			import('ORG.Util.Page');// 导入分页类
			$count      = $User->count();// 查询满足要求的总记录数
			$Page       = new Page($count,14);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $User->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this->display('index'); // 输出模板
		}

		public function docontent(){
			$id = $_GET['id'];
			$work = M("workdynamic");
			$where['id'] = $id;
			$data = $work->where($where)->getField('content');
			$this->assign('con',$data);
			$this->display();
		}

		


	}


?>