<?php
namespace Home\Controller;
use Think\Controller;
class AndroidController extends Controller {
    public function index(){
    	$html = M('dialog');
    	$data = $html -> where('id=1')->find();
    	$this->assign('list',$data);
    	$this->display();
    }

    public function doGet()
    {
    	// 设置报文头, 构建请求报文 
		header("Content-type: text/html; charset=utf-8");

    	$apiKey = "2926a7182d3be0d8623c57f7d5931869"; 
		$apiURL = "http://www.tuling123.com/openapi/api?key=KEY&info=INFO";

		$reqInfo = $_POST['msg']; 

		$url = str_replace("INFO", $reqInfo, str_replace("KEY", $apiKey, $apiURL)); 

		$res =file_get_contents($url); 

		$content=json_decode($res);

		$res  =$content->text;

		$html = M('dialog');
    	$data = $html -> where('id=1')->find();

		$data['html'] = $data['html']."<div class = 'user'><div class = 'user_c'>".$reqInfo."<span class='glyphicon glyphicon-user zero_icon'></span></div></div>"."<div class = 'zero'>
			<span class='glyphicon glyphicon-eye-open zero_icon'></span>".$res."</div>";

		$html->save($data);

		$this->redirect('Android/index');
    } 

    public function initialize()
    {
    	$html = M('dialog');
    	$data = $html -> where('id=1')->find();

    	$data['html'] = "<div class = 'zero'><span class='glyphicon glyphicon-eye-open zero_icon'></span>您好！我是小泽！可爱的你有什么烦恼呢？</div>";

    	$html -> save($data);
    	$this->redirect('Android/index');
    }
}