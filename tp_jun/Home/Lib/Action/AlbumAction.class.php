<?php
	class AlbumAction extends Action{
		public function index(){
			$image=M('Photofc');
			import('ORG.Util.Page');// 导入分页类   
			$count      = $image->count();// 查询满足要求的总记录数
			$Page       = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出                  
            $data=$image->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();    //获取所有上传图片
            $this->assign('data',$data);
            $this->assign('page',$show);// 赋值分页输出
			$this->display();

		}

	}



?>