<?php
namespace Home\Controller;
use Think\Controller;
class AudioController extends Controller {
    public function music(){
    	$audio = M('audio');
    	$data = $audio -> where('code=1 and status =1')->order('id')->limit(10)->select();
    	$this->assign('list',$data);
    	$this->display();
    }


    public function play(){
    	$id = $_GET['id'];
    	$audio = M('audio');
    	$data = $audio -> where('code=1 and status =1')->order('id')->limit(10)->select();
    	$arr = $audio -> where('id='.$id)-> find();
    	$this->assign('list',$data);
    	$this->assign('arr',$arr);
    	$this->display();

    }
}