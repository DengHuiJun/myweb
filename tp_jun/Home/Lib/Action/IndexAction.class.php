<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){

    	//获取工作动态的前8个标题
    	$work = M("Workdynamic");
    	$w_list = $work ->order("time desc")->limit(8)->select();
    	$this->assign('w_list',$w_list);


    	//获取国防教育的前8个标题
    	$edu =M("education");
    	$e_list = $edu ->order("time desc")->limit(8)->select();
    	$this->assign('e_list',$e_list);

        //获取通知公告的前8个标题
        $notice = M("notice");
        $n_list = $notice->order("time desc")->limit(8)->select();
        $this->assign('n_list',$n_list);

        //获取军事新闻的前8个标题
        $military = M("military");
        $m_list = $military->order("time desc")->limit(8)->select();
        $this->assign('m_list',$m_list);

        //获取滚动的图片
        $image=M('Photo');                       
        $photo=$image->select();    //获取所有上传图片
        $this->assign('photo',$photo);


    	$this->display();
    }
}