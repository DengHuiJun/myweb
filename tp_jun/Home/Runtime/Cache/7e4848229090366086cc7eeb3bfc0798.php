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

	<div class = "weather">
		<iframe allowtransparency="true" frameborder="0" width="317" height="28" scrolling="no" src="http://tianqi.2345.com/plugin/widget/index.htm?s=3&z=1&t=1&v=0&d=1&bd=0&k=000000&f=&q=1&e=1&a=1&c=54511&w=317&h=28&align=center"></iframe>

		<marquee width = "600px" height="30px" srollamount = "1" direction = "left" srolldelay ="10"><strong> 湖南科技大学大学生军训团欢迎您！</strong></marquee>
	</div>

		<div class = "main">
		   
			<div class = "pic_text" id = "boxID">
				<div class="loading"><img src="__PUBLIC__/images/loading.gif" alt="请稍候..." /></div>
	      		<!--载入画面(可删除)--> 
	            <div class ="pic">
	                <ul>
	                    <li><a href="#"><img src="__PUBLIC__/images/0.jpg"  text="IT工作者：走出浮躁的泥沼"/></a></li>
	                    <li><a href="#"><img src="__PUBLIC__/images/1.jpg"  text="
	                    	值得每天读两遍的文章"/></a></li>
	                    <li><a href="#"><img src="__PUBLIC__/images/2.jpg"  text="耒阳城，我那美丽的家乡 "/></a></li>
	                    <li><a href="#"><img src="__PUBLIC__/images/3.jpg"  text="个人开公司的流程，以后用得着"/></a></li>
	                    <li><a href="#"><img src="__PUBLIC__/images/4.jpg"  text="个人开公司的流程，以后用得着"/></a></li>
	                </ul>
	            </div>  
			</div>

			<div class ="news">
				<div class = "news_l">
					<div class ="title">
	                    <h2 class="title_left" >[工作动态]</h2>
	                    <span class="title_right"><a href="__APP__/Work/index">更多&gt;&gt;</a></span>
            		</div>

            		<div class="news_l_list">
	                    <ul>
	                    	<?php if(is_array($w_list)): $i = 0; $__LIST__ = $w_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$w_vo): $mod = ($i % 2 );++$i;?><li><span><?php echo ($w_vo["time"]); ?></span><a href="__APP__/Work/docontent/?id=<?php echo ($w_vo["id"]); ?>"><?php echo ($w_vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	                    </ul>
               		</div>
				</div>

				<div class="news_r">
					<div class ="title">
	                    <h2 class="title_left" >[通知公告]</h2>
	                    <span class="title_right"><a href="#">更多&gt;&gt;</a></span>
            		</div>

		       		<div class="news_l_list">
		                    <ul>
		                  		<?php if(is_array($n_list)): $i = 0; $__LIST__ = $n_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n_vo): $mod = ($i % 2 );++$i;?><li><span><?php echo ($n_vo["time"]); ?></span><a href="__APP__/Notice/docontent/?id=<?php echo ($n_vo["id"]); ?>"><?php echo ($n_vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		                    </ul>  
		           	</div>
				</div>	
			</div>
			<!-- news结束 -->

			<div class = "news2">
				<div class = "news2_l">
					<div class ="title">
	                    <h2 class="title_left" >[军事新闻]</h2>
	                    <span class="title_right"><a href="#">更多&gt;&gt;</a></span>
            		</div>

             		<div class="news_l_list">
	                    <ul>
	            			<?php if(is_array($m_list)): $i = 0; $__LIST__ = $m_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m_vo): $mod = ($i % 2 );++$i;?><li><span><?php echo ($m_vo["time"]); ?></span><a href="__APP__/Military/docontent/?id=<?php echo ($m_vo["id"]); ?>"><?php echo ($m_vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	                    </ul>  
               		</div>
				</div>

				<div class="news2_r">
					<div class ="title">
	                    <h2 class="title_left" >[国防教育]</h2>
	                    <span class="title_right"><a href="#">更多&gt;&gt;</a></span>
            		</div>

             		<div class="news_l_list">
	                    <ul>
	                 		<?php if(is_array($e_list)): $i = 0; $__LIST__ = $e_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$e_vo): $mod = ($i % 2 );++$i;?><li><span><?php echo ($e_vo["time"]); ?></span><a href="__APP__/Education/docontent/?id=<?php echo ($e_vo["id"]); ?>"><?php echo ($e_vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	                    </ul>  
               		</div>
				</div>
			</div>
			<!-- news2结束 -->

			<div class = "kh">
				<img src="__PUBLIC__/images/kh.jpg">
			</div>
			<!-- kh结束 -->
		</div>
		<!-- main结束 -->

		<div class = "right_box">
			<div class ="right_box_1">
				<div class = "right_box_1_t">
					<h3>军训团简介</h3>
				</div>
				<p style = "background:#e8e8e8;line-height:25px;font-size:15px;color:#000">&nbsp;&nbsp;&nbsp;&nbsp;湖南科技大学大学生军训团是直属校武装部的学生组织。大学生军训团是一支以“学生自训”为主导，以培养坚韧性格为理念的学生军训队伍，它成立的宗旨是培养我校学生吃苦耐劳、勇于奉献的精神。“集中精力，默契配合，永不服输，不畏困难，艰苦训练”是是我们的信念，踏踏实实做人，扎扎实实做事是我们的工作态度。</p>
			</div>
			<div class = "right_box_2">
				<div class = "right_box_2_t">
					<h3>闪亮之星</h3>
				</div>
				<p>
					<center><img  src = "__PUBLIC__/images/jc3.jpg"/></center>
					<span style = "background:#e8e8e8;line-height:25px;font-size:15px;color:#000">&nbsp;&nbsp;&nbsp;&nbsp;军人，是对在国家军队中服役的军职人员的称呼，包括战斗人员和非战斗人员，类似古代的武士，骑士。其职责是保卫国家安全，保卫及守护国家边境，政府政权稳定，社会安定.</span>
				</p>
				<center><a href = "#"><h4>点击更换<h4><a></center>
				
			</div>
			
			<div class = "right_box_3">
				<div class = "right_box_2_t">
					<h3>相关链接</h3>
				</div>			
				<ul>
					<li><a href = "http://www.hnust.edu.cn" id = "lian">湖南科技大学官网</a></li>
					<li><a href = "http://dep.hnust.cn/bwc" id = "lian">科大武装保卫处</a></li>
					<li><a href = "http://dep.hnust.cn/xwd/index.aspx" id = "lian">科大校卫队</a></li>
					<li><a href = "http://news.ifeng.com/mil/" id = "lian">凤凰军事网</a></li>
					<li><a href = "http://www.mod.gov.cn/edu/" id = "lian">国防教育网</a></li>
				</ul>
			
			</div>
		</div>
		<div class = "clear">
		</div>

		<div class = "fc" >
			 <div class="a">
			       <ul>
			           <li>
			               <a href="#"><img alt="" src="__PUBLIC__/images/1.jpg"/></a>
			           </li>
			           <li >
			               <a href="#"><img alt="" src="__PUBLIC__/images/2.jpg"></a>
			           </li>
			           <li>
			               <a href="#"><img alt=""  src="__PUBLIC__/images/3.jpg"></a>
			           </li>
			           <li>
			               <a href=""><img alt="" src="__PUBLIC__/images/4.jpg"></a>
			           </li>
			           <li>
			               <a href="#"><img alt="" src="__PUBLIC__/images/05.jpg"></a>
			           </li>
			           <li>
			               <a href="#"><img alt=""  src="__PUBLIC__/images/3.jpg"></a>
			           </li>
			           <li>
			               <a href=""><img alt="" src="__PUBLIC__/images/4.jpg"></a>
			           </li>
			           <li>
			               <a href="#"><img alt="" src="__PUBLIC__/images/05.jpg"></a>
			           </li>
			       </ul>
			  </div>
			
		</div>


	</div>
	<!-- wrap结束 -->
	
	<div class= "copyright">
		<center>
			<p>Copyright@2014 湖南科技大学军训团 All rights reserved. 版权所有</p>
			<p>联系邮箱：944789442@qq.com QQ：783352994</p>
			<p>联系地址：湖南科技大学</p>
		</center>
	</div>

	<script src=" http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="__PUBLIC__/js/myfocus-2.0.1.min.js" charset="utf-8"></script><!--引入myFocus库-->
	<script type="text/javascript">
		myFocus.set({
			id:'boxID',//焦点图盒子ID
			pattern:'mF_pithy_tb',//风格应用的名称
			time:3,//切换时间间隔(秒)
			trigger:'mouseover',//触发切换模式:'click'(点击)/'mouseover'(悬停)
			width:620,//设置图片区域宽度(像素)
			height:300,//设置图片区域高度(像素)
			txtHeight:'default'//文字层高度设置(像素),'default'为默认高度，0为隐藏
		});

	</script>


	<script type="text/javascript">
       jQuery.fn.extend({
           pic_scroll:function (){
               $(this).each(function(){
                   var _this=$(this);//存储对象
                   var ul=_this.find("ul");//获取ul对象
                   var li=ul.find("li");//获取所有图片所有的li
                   var w=li.size()*li.width();//统计图片的长度
                   li.clone().prependTo(ul);//克隆图片一份放入ul里
                   ul.width(20*w);//设置ul的长度，使所有图片排成一排
                   var i=1,l;
                   _this.hover(function(){i=0},function(){i=1});//鼠标经过时设置i=0达到鼠标经过停止效果
                   setInterval(function(){
                       //定时滚动函数
                       l = _this.scrollLeft();
                       if (l < w) {
                           _this.scrollLeft(l+i);
                       } else {
                           _this.scrollLeft(0);
                       }
                   },20);
               })
           }
       });
       $(document).ready(function(){
           $(".a").pic_scroll();//多个地方使用
       })
   </script>

	</body>
</html>