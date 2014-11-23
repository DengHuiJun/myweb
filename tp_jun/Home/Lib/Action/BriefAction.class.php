<?php
	class BriefAction extends Action{
		public function index(){
			$data = M('Brief');
			$list = $data->where('id=1')->find();
			$this->assign('list',$list);
			$this->display();
		}


		public function second(){
			$data = M('Brief');
			$list = $data->where('id=2')->find();
			$this->assign('list',$list);
			$this->display();
		}

		public function third(){
			$data = M('Brief');
			$list = $data->where('id=3')->find();
			$this->assign('list',$list);
			$this->display();
		}

	}



?>