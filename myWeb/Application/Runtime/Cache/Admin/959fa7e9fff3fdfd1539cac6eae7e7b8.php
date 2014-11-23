<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <base target="iframe"/>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <title>Simpla Admin</title>
      <!--                       CSS                       -->
      <!-- Reset Stylesheet -->
      <link rel="stylesheet" href="/myWeb/Public/Admin/Css/reset.css" type="text/css" media="screen" />
      <!-- Main Stylesheet -->
      <link rel="stylesheet" href="/myWeb/Public/Admin/Css/style.css" type="text/css" media="screen" />
      <!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
      <link rel="stylesheet" href="/myWeb/Public/Admin/Css/invalid.css" type="text/css" media="screen" />
      <!--                       Javascripts                       -->
      <!-- jQuery -->
      <script type="text/javascript" src="/myWeb/Public/Admin/Js/jquery-1.3.2.min.js"></script>
      <!-- jQuery Configuration -->
      <script type="text/javascript" src="/myWeb/Public/Admin/Js/simpla.jquery.configuration.js"></script>
      <!-- Facebox jQuery Plugin -->
      <script type="text/javascript" src="/myWeb/Public/Admin/Js/facebox.js"></script>
      <!-- jQuery WYSIWYG Plugin -->
      <script type="text/javascript" src="/myWeb/Public/Admin/Js/jquery.wysiwyg.js"></script>
      <!-- jQuery Datepicker Plugin -->
      <script type="text/javascript" src="/myWeb/Public/Admin/Js/jquery.datePicker.js"></script>
      <script type="text/javascript" src="/myWeb/Public/Admin/Js/jquery.date.js"></script>
      <script type="text/javascript" src="/myWeb/Public/js/jquery-2.0.2.js"></script>
      <script type="text/javascript" src="/myWeb/Public/ueditor/ueditor.config.js"></script>    
      <script type="text/javascript" src="/myWeb/Public/ueditor/ueditor.all.min.js"></script>
      <script>
      $(function(){
          var ue = UE.getEditor('container');
      })
      </script>
    </head>
<body>

<div id="body-wrapper">
  <!-- Wrapper for the radial gradient background -->
    <div id="sidebar">
      <div id="sidebar-wrapper">
        <!-- Sidebar with logo and menu -->
        <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
        <!-- Logo (221px wide) -->
        <a href="#"><img id="logo" src="/myWeb/Public/Admin/Img/logo.png" alt="Simpla Admin logo" /></a>
        <!-- Sidebar Profile links -->
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="/myWeb/index.php/Home/Index/index" title="View the Site" target="_self" >回到网站主页</a> | <a href="/myWeb/index.php/Admin/Manager/doLoginOut" title="Sign Out" target="_self">退出登录</a> 
        <br/>
      </div>
        <ul id="main-nav">
          <!-- Accordion Menu -->
          <li> <a href="#/" class="nav-top-item no-submenu">
            <!-- Add the class "no-submenu" to menu items with no sub menu -->
            Dashboard </a> </li>
          <li> <a href="/myWeb/index.php/Admin/Article/index" class="nav-top-item">
            <!-- Add the class "current" to current menu item -->
            主页文章</a>
            <ul>
              <li><a href="/myWeb/index.php/Admin/Article/addArticle" >发表新文章</a></li>
              <li><a href="/myWeb/index.php/Admin/Article/checkA"  >管理文章</a></li>
              <!-- Add class "current" to sub menu items also -->
              <!-- <li><a href="#"  >管理评论</a></li> -->
            </ul>
          </li>


          <li> <a href="#" class="nav-top-item">
            <!-- Add the class "current" to current menu item -->
            爱好影音</a>
            <ul>
              <li><a href="/myWeb/index.php/Admin/Audio/addAudio" >添加影音文件</a></li>
              <li><a href="/myWeb/index.php/Admin/Article/checkA"  >管理影音文件</a></li>
              <!-- Add class "current" to sub menu items also -->
              <!-- <li><a href="#"  >管理评论</a></li> -->
            </ul>
          </li>

        </ul>
        <!-- End #main-nav -->
      </div>
    </div>
  <!-- End #sidebar -->
    <div id="main-content">
      <!-- Main Content Section with everything -->
      <!-- Page Head -->
      <h2>Welcome</h2>
      <p id="page-intro">What would you like to do?</p>
        <ul class="shortcut-buttons-set">
          <li><a class="shortcut-button" href="/myWeb/index.php/Admin/Article/addArticle"><span> <img src="/myWeb/Public/Admin/Img/icons/pencil_48.png" alt="icon" /><br />
            Write an Article </span></a></li>
          <li><a class="shortcut-button" href="#"><span> <img src="/myWeb/Public/Admin/Img/icons/paper_content_pencil_48.png" alt="icon" /><br />
            a New Page </span></a></li>
          <li><a class="shortcut-button" href="#"><span> <img src="/myWeb/Public/Admin/Img/icons/image_add_48.png" alt="icon" /><br />
            Upload an Image </span></a></li>
          <li><a class="shortcut-button" href="#"><span> <img src="/myWeb/Public/Admin/Img/icons/clock_48.png" alt="icon" /><br />
            Add an Event </span></a></li>
          <li><a class="shortcut-button" href="#messages" rel="modal"><span> <img src="/myWeb/Public/Admin/Img/icons/comment_48.png" alt="icon" /><br />
            Open Modal </span></a></li>
        </ul>
      <!-- End .shortcut-buttons-set -->
      <div class="clear"></div>
      <!-- End .clear -->
     <div class="tab-content default-tab" id="tab1">
          <!-- This is the target div. id must match the href of this div's tab -->
          <table>
            <thead>
              <tr>
                <th>
                  <input class="check-all" type="checkbox" />
                </th>
                <th>序号(id)</th>
                <th>标题</th>
                <th>作者</th>
                <th>时间</th>
                <th>状态码</th>
                <th>操作</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
                <td colspan="6">
				<span><?php echo ($page); ?></span>	      
                </td>
              </tr>
            </tfoot>
            <tbody>

			 <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?><tr>
                <td>
                  <input type="checkbox" />
                </td>
                <td><?php echo ($article["id"]); ?></td>
                <td><?php echo ($article["title"]); ?></td>
                <td><?php echo ($article["author"]); ?></td>
                <td><?php echo ($article["time"]); ?></td>
                <td><?php echo ($article["code"]); ?></td>
                <td>
                  <!-- Icons -->
                  <a href="/myWeb/index.php/Admin/Article/update/?id=<?php echo ($article["id"]); ?>" title="Edit">
                  	<img src="/myWeb/Public/Admin/Img/icons/pencil.png" alt="Edit" />
                  </a>
                  <a href="/myWeb/index.php/Admin/Article/dodel/?id=<?php echo ($article["id"]); ?>" title="Delete">
                  	<img src="/myWeb/Public/Admin/Img/icons/cross.png" alt="Delete" />
                  </a> 
                  <a href="#" title="Edit Meta">
                  	<img src="/myWeb/Public/Admin/Img/icons/hammer_screwdriver.png" alt="Edit Meta" />
                  </a> 
                </td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>

            </tbody>
          </table>
        </div>
      <div class="clear"></div>

      <div id="footer"> <small>
        <!-- Remove this notice or replace it with whatever you want -->
        &#169; Copyright 2014 邓慧 | Powered by <a href="#">admin templates</a> | <a href="#">Top</a> </small> 
      </div>
      <!-- End #footer -->
    </div>
  <!-- End #main-content -->
</div>

</body>
<!-- Download From www.exet.tk-->
</html>