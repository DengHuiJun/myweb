<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/index.js"></script>
<link rel="stylesheet" href="__PUBLIC__/css/public.css" />
<link rel="stylesheet" href="__PUBLIC__/css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
	<div id="top">
		<div class="menu">
			<h1>欢迎使用湖南科技大学军训团网站后台系统</h1>
		</div>
		<div class="exit">
			<a href="__APP__/Login/doLoginOut" target="_self">退出</a>
			<a href="http://www.baidu.com" target="_blank">获得帮助</a>
			<a href ="__ROOT__/index.php" target="_self">前台显示</a>
		</div>
	</div>
	<div id="left">
		<dl>
			<dt>团队概况</dt>
			<dd><a href="__APP__/Brief/add" target="iframe">添加团队概况</a></dd>
			<dd><a href="__APP__/Brief/check" target="iframe">管理团队概况</a></dd>
		</dl>

	

		<dl>
			<dt>团队风采</dt>
			<dd><a href="__APP__/Album/index" target="iframe">管理团队风采</a></dd>
		</dl>

		<dl>
			<dt>联系我们</dt>
			<dd><a href="__APP__/LiuYan/checkMessage" target="iframe">留言管理</a></dd>
		</dl>

		<dl>
			<dt>工作动态</dt>
			<dd><a href="__APP__/Work/addwork"   target="iframe">添加工作动态</a></dd>
			<dd><a href="__APP__/Work/checkwork" target="iframe">管理工作动态</a></dd>
		</dl>
		<dl>
			<dt>通知公告</dt>
			<dd><a href="__APP__/Notice/addnotice" target="iframe">添加通知公告</a></dd>
			<dd><a href="__APP__/Notice/checknotice" target="iframe">管理通知公告</a></dd>
		</dl>
		<dl>
			<dt>军事新闻</dt>
			<dd><a href="__APP__/Military/addm" target="iframe">添加军事新闻</a></dd>
			<dd><a href="__APP__/Military/checkm" target="iframe">管理军事新闻</a></dd>
		</dl>
		<dl>
			<dt>国防教育</dt>
			<dd><a href="__APP__/Education/addEdu" target="iframe">添加国防教育</a></dd>
			<dd><a href="__APP__/Education/checkEdu" target="iframe">管理国防教育</a></dd>
		</dl>
		
	


	</div>
	<div id="right">
		<iframe name="iframe" src="__URL__/content">
		</iframe>
	</div>
</body>
</html>