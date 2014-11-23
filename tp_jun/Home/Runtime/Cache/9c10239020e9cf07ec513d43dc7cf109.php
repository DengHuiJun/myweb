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
	<link href="__PUBLIC__/css/ly.css" rel="stylesheet">
	<script src = "__PUBLIC__/js/jquery.min.js" type = "text/javascript" ></script>
	<script>
	    $(function(){
	        $('button[id="lo"]').click(function(){
	                $('form[name="myform"]').submit();
	        });

	        $('button[id="rg"]').click(function(){
	                $('form[name="myform"]')[0].reset();
	        });
	    });
	</script>
 
	 <div class ="ly_wrap">
                <div class ="posi">
                    <span>本站位置</span>&nbsp;&nbsp;&gt;&gt;&nbsp;<a href="__APP__/Index/index">首页</a>&nbsp;&nbsp;&gt;&nbsp;<a href="__APP__/Serve/index">联系我们</a>&nbsp;&nbsp;&gt;&nbsp;<a href="__APP__/Serve/index.html">留言服务</a>
                </div>

                <div class ="l_main">
                    <h3>留言服务</h3>
                    <br><hr>
                    <div class = "l_contact liuyan_input">
                         <form action ="__URL__/doAdd"  method = "post" name ="myform">
                            <ul>
                                <li>
                                    <label>留言者：</label>
                                    <input  type="text"  name="name" value ="" />
                                </li>

                                <li>
                                    <label>联系电话：</label>                         
                                    <input   type="text"  name="tell" value = ""/>
                                </li>

                                <li>
                                    <label>内容：</label>                     
                                    <textarea rows="14" cols="31" name="content"></textarea>
                                </li>
                                
                                <li>
                                    <label>验证码：</label>
                                    <input   type="text"  name="code"/>
                                </li>  
                                <li>
                                    <label>图片：</label>
                                    <img src='__APP__/Public/code' title = '提示：点击验证码图片可变换'  onclick = " this.src = this.src + '?' +Math.random"/>
                                </li>
                                <li>
                                    <button id ='lo' >提交</button>
                                    &nbsp;&nbsp;
                                    <button id ='rg' >重置</button>
                                </li>
                            </ul>
                         </form>
                    </div>
                     
                </div>
                <!-- l_main结束 -->

                <div class ="r_main">  
                    <div class = "r_main_list">
                        <h2>联系我们</h2>
                        <li><a href="__APP__/Serve/view.html">查看留言</a></li>
                        <li><a href="__APP__/Serve/index.html">留言服务</a></li>
                    </div>

                    <div class =  "other">
                        <div class = "r_main_list"> 
                            <h2>爱我科大</h2>       
                            <img src = "__PUBLIC__/images/s_server.jpg">
                        </div>
                    </div>
                </div>
                <!-- r_main结束 --> 

            </div>
            <!-- ly_wrap结束 -->

		
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