<?php
	namespace Admin\Controller;
	use Think\Controller;
	class AudioController extends CommonController {
	    public function addAudio(){
	    	$this->display();
	    }

	    public function doAdd(){
	    	$data['title'] 	 = $_POST['title'];
	    	$data['url']  	 = $_POST['url'];
	    	$data['content'] = $_POST['content'];
	    	$data['status']  = $_POST['status'];
	    	$data['code']    = $_POST['code'];
	   
	    	$article = M('audio');
			$f = $article ->add($data);
			if($f){
				$this->success('添加成功！',U('Audio/addAudio'));
			}else{
				$this->error('添加失败！');
			}
	    }


	}