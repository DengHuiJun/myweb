<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>管理工作动态</title>	
		  <link href="__PUBLIC__/dist/css/zui.min.css" rel="stylesheet">
  <script src="__PUBLIC__/dist/js/zui.min.js"></script>
	</head>

	<body>
		<center>
			<h1>工作动态</h1>
			<ul>
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$work): $mod = ($i % 2 );++$i;?><p class="with-padding bg-success"><?php echo ($work["title"]); ?><span style = "padding-right:100px;float:right"><?php echo ($work["time"]); ?>&nbsp;&nbsp;<a href="__URL__/dodel/?id=<?php echo ($work["id"]); ?>">删除</a>&nbsp;&nbsp;<a href ="__URL__/update/?id=<?php echo ($work["id"]); ?>">修改</a><span></p><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<br/>
			<span><?php echo ($page); ?></span>
		</center>
	</body>
</html>