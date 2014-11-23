<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang='zh-CN'>
	<head>
		<meta lang="zh-CN" charset="utf-8">
		<title>Zero In University</title>
		<!-- 新 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
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
		            <li><a href="#">日记</a></li>
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
	
  <link rel="stylesheet" href="/myWeb/Public/Home/Css/music.css"> 

  <div class = "main"> 
		<div class = "left_box">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="/myWeb/index.php/Home/Audio/music">音乐收藏</a></li>
          <li role="presentation"><a href="/myWeb/index.php/Home/Audio/video">视频收藏</a></li>
        </ul>
        <p class = "list text-center">音乐列表</p>

        <ul class="list-group">
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ls): $mod = ($i % 2 );++$i;?><a href ="/myWeb/index.php/Home/Audio/play/?id=<?php echo ($ls["id"]); ?>"><li class="list-group-item"><?php echo ($ls["title"]); ?></li></a><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>

    </div>

    <div class = "right_box">
      <div class = "music_view">
        <audio controls="controls">
                        <source src="<?php echo ($arr["url"]); ?>" type="audio/mpeg">
                    Your browser does not support the audio tag.
        </audio>
      </div>
      <div class = "introduce_title"><strong>音乐简介</strong></div>
      <p class = "introduce text-left">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($arr["content"]); ?></p>
    </div>

    </div>
     
          <div class = "clearFloat"></div>

      
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