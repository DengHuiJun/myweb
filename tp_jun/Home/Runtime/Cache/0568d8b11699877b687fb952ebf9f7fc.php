<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>湖南科技大学军训团</title>
		<link href="__PUBLIC__/css/main.css" rel="stylesheet">
		<link href="__PUBLIC__/css/work.css" rel="stylesheet">
		<script src = "__PUBLIC__/js/setHomeSetFav.js" type = "text/javascript" charset="gb2312"></script>
		<script src = "__PUBLIC__/js/jquery.min.js" type = "text/javascript" ></script>


	</head>

	<body>
		<div class = "top">
	    	<div class = "top_content">
	    		<ul>
	    			<li><a href="#">联系我们</a></li>
	    			<li><a href="#" onclick="AddFavorite(window.location,document.title)">加入收藏</a></li>
	    			<li><a href="#" onclick="SetHome(window.location)">设为首页</a></li>
	    		</ul>  		
	    	</div>
    	</div> 
    	<!-- top结束 -->

	<div class ="wrap">
    		<div class="logo">
    			<img src="__PUBLIC__/images/webhead.jpg"/>
    		</div>

    		<div class = "nav">
    			<ul>
                    <a href="__APP__/Index/index"><li>本站首页</li></a>
                    <a href="__APP__/Brief/index"><li>团队概况</li></a>
                    <a href="__APP__/Military/index"><li>军事新闻</li></a>
                    <a href="__APP__/Education/index"><li>国防教育</li></a>
                   	<a href="__APP__/Album/index"><li>团队风采</li></a>
					<a href="__APP__/Work/index"><li>工作动态</li></a>
					<a href="__APP__/Notice/index"><li>通知公告</li></a>
					<a href="__APP__/Serve/index"><li>联系我们</li></a>    
				</ul>
    		</div>
    		<!-- nav结束 -->
<link href="__PUBLIC__/css/Album.css" rel="stylesheet">
	<div class ="posi">
        <span>本站位置</span>&nbsp;&nbsp;&gt;&gt;&nbsp;<a href="__APP__/Index/index">首页</a>&nbsp;&nbsp;&gt;&nbsp;<a href="__APP__/Album/index">团队风采</a>&nbsp;&nbsp;&gt;&nbsp;<a href="__APP__/Album/jctp">精彩图片</a>
    </div>

	<div class = "work_list">

	<!-- 	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$photofc): $mod = ($i % 2 );++$i;?><div class = "">
            	<img src="__UPLOAD__/m_<?php echo ($photofc["image"]); ?>" /> 
            </div><?php endforeach; endif; else: echo "" ;endif; ?> -->
	
	</div>

	<div class = "work_main">
		<h3>相册列表</h3>
		<ul>
		<li><a href="__URL__/index">训练风采</a></li>
		<li><a href="__URL__/jctp">精彩图片</a></li>
		<li><a href="__URL__/slzx">闪亮之星</a></li>
		</ul>	
	</div>

		
	</div>
	<!-- wrap结束 -->
	<div class = "clear">
	</div>
	<div class= "copyright" >
		<center>
			<p>Copyright@2014 湖南科技大学军训团 All rights reserved. 版权所有</p>
			<p>联系邮箱：944789442@qq.com QQ：783352994</p>
			<p>联系地址：湖南科技大学</p>
		</center>
	</div>

	</body>
</html>