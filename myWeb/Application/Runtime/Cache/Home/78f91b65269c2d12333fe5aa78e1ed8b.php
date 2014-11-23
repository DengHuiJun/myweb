<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang='zh-CN'>
	<head>
		<meta lang="zh-CN" charset="utf-8">
		<title>Zero In University</title>
		<!-- 新 Bootstrap 核心 CSS 文件 -->
		<link href="/myWeb/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
		<link rel="stylesheet" href="/myWeb/Public/Home/Css/main.css">	
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">网站中心</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="/myWeb/index.php/Home/Index/index">文章</a></li>
		        <li><a href="#">留言</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">个人主页<span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="/myWeb/index.php/Home/Android/index">zero机器人</a></li>
		            <li><a href="/myWeb/index.php/Home/Album/index">相册</a></li>
		            <li><a href="/myWeb/index.php/Home/Audio/music">音乐</a></li>
		          </ul>
		        </li>
		      </ul>
		      <form class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        	<button type="submit" class="btn btn-default">Submit</button>
		      </form>
		        <button class="btn btn-primary btn-mg nav_btn" data-toggle="modal" data-target="#myModal">
  				注册
				</button> 
				<button class="btn btn-primary btn-mg nav_btn" data-toggle="modal" data-target="#myDModal">
  				登陆
				</button> 
		      
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<!-- Modal -->
 		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
				    	<span class="sr-only">Close</span>
				    </button>
				    <h4 class="modal-title" id="myModalLabel">注册页面</h4>
				  </div>

				  <div class="modal-body">
				    ...
				  </div>

				  <div class="modal-footer">
				    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
				    <button type="button" class="btn btn-primary">提交</button>
				  </div>
				</div>
			</div>
		</div>  
	
	<link rel="stylesheet" href="/myWeb/Public/Home/Css/android.css"> 
	<div class = "main">
	
	<div class = "dialog">
<!-- 		<div class = "zero">
			<span class="glyphicon glyphicon-eye-open zero_icon"></span>
			你好！我是zero机器人！
		</div>

		<div class = "user">
			<div class = "user_c">
			你好！我是user!
			<span class="glyphicon glyphicon-user zero_icon"></span>
			</div>
		</div> -->
		<?php echo ($list["html"]); ?>
	</div>
	<div class = "info">
		<h2>使用说明</h2>
		<p>该功能是调用<a href="http://www.tuling123.com">图灵机器人</a>的API，能够讲笑话，故事，聊新闻，翻译单词，讲百科全书。由于是测试版，页面布局尚不完善，请及时点击下面“清空”，保证页面美观。祝您使用愉快！
		</p>
			<form action="/myWeb/index.php/Home/Android/initialize" >
				<button type="submit" class="btn btn-default">清空</button>
			</form>
	</div>

	<div class = "clearFloat"></div>

	<form class="form-horizontal" role="form" action="/myWeb/index.php/Home/Android/doGet" method="post">
		 <div class="form-group">
		 	<button type="submit" class="btn btn-default">发送</button>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" placeholder="你想对zero说的话..." name = "msg"/>
		    </div>
		  </div>
	</form>
	


	</div>

	<div class = "clearFloat"></div>
	<div class = "copyright">
		<center>
			<p>Copyright@2014 泽尔若 All rights reserved. 版权所有</p>
			<p>联系邮箱：783352994@qq.com QQ：783352994</p>
			<p>联系地址：湖南科技大学   <a href="/myWeb/index.php/Admin/Manager/login">后台管理入口</a></p>
		</center>
	<div>




		
		<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
		<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>