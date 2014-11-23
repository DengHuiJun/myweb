<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>addEdu</title>
	    <!-- 配置文件 -->
	    <script type="text/javascript" src="__ROOT__/ueditor/ueditor.config.js"></script>
	    <!-- 编辑器源码文件 -->
	    <script type="text/javascript" src="__ROOT__/ueditor/ueditor.all.js"></script>
	      <link href="__PUBLIC__/dist/css/zui.min.css" rel="stylesheet">
  <script src="__PUBLIC__/dist/js/zui.min.js"></script>
	</head>

	<body>
		<form  action="__URL__/doadd" class="form-horizontal form-condensed" role="form" method="post">
          <legend>添加国防教育</legend>
          <div class="form-group">
            <label class="col-md-2 control-label required">题目</label>
            <div class="col-md-4">
           		<input type="text" name = "title" id="author" value="demo" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">添加作者</label>
            <div class="col-md-4">
               <input type="text" name="author" id="author" value="demo" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">内容</label>
            <div class="col-md-9">
              	<script id="container" name="content" type="text/plain">
		         这里写你的初始化内容
		     	      </script>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
               <input type="submit" id="submit" class="btn btn-primary" value="保存" data-loading="稍候..."> 
               <input type="hidden" name="type" id="type" value="article">
            </div>
          </div>
        </form>
        <p class="with-padding bg-warning">
          时间自动存储，无需手动输入。
        </p>
     	<script type="text/javascript">
         var ue = UE.getEditor('container');
     	</script>
	</body>
</html>