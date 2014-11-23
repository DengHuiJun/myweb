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

    <div class = "addArticle">
		<h2>添加文章</h2>
    <hr />
		<form action="/myWeb/index.php/Admin/Article/doAdd" method="post">    
            <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            <p>
              <label>输入标题：</label>
              <input class="text-input small-input" type="text" id="small-input" name="title" />
              <span class="input-notification success png_bg">Successful message</span>
              <!-- Classes for input-notification: success, error, information, attention -->      
            <p>
            <p>
              <label>输入作者：</label>
              <input class="text-input small-input" type="text" id="small-input" name="author" />
              <span class="input-notification success png_bg">Successful message</span>
              <!-- Classes for input-notification: success, error, information, attention -->      
            <p>
            <p>
              <label>输入摘要：</label>
              <input class="text-input small-input" type="text" id="small-input" name="info" />
              <span class="input-notification success png_bg">Successful message</span>
              <!-- Classes for input-notification: success, error, information, attention -->      
            <p>
            <p>
              <label>输入内容：</label>
              <script id="container" name="content" type="text/plain">
                  开始使用
              </script>  
            <p>
            <p>
              <label>输入状态码：</label>
              <input class="text-input small-input" type="text" id="small-input" name="code" />
              <span class="input-notification success png_bg">Successful message</span>
              <!-- Classes for input-notification: success, error, information, attention -->      
            <p>

              <input class="button" type="submit" value="Submit" />
            </p>           
          </form>
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