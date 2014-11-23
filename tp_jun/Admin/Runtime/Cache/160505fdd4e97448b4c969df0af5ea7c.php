<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>update</title>
	    <!-- 配置文件 -->
	    <script type="text/javascript" src="__ROOT__/ueditor/ueditor.config.js"></script>
	    <!-- 编辑器源码文件 -->
	    <script type="text/javascript" src="__ROOT__/ueditor/ueditor.all.js"></script>
	      <link href="__PUBLIC__/dist/css/zui.min.css" rel="stylesheet">
  <script src="__PUBLIC__/dist/js/zui.min.js"></script>
	</head>

	<body>
     	<form  action="__URL__/doupdate" class="form-horizontal form-condensed" role="form" method="post" >
          <legend>修改通知公告</legend>
          <div class="form-group">
            <label class="col-md-2 control-label required">题目</label>
            <div class="col-md-4">
           		<input type="text" name = "title"  value="<?php echo ($m["title"]); ?>" class="form-control">
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-2 control-label">添加作者</label>
            <div class="col-md-4">
               <input type="text" name="author"  value="<?php echo ($m["author"]); ?>" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">内容</label>
            <div class="col-md-9">
              	<script id="container" name="content" type="text/plain">
		              <?php echo ($m["content"]); ?>
		     	      </script>
            </div>
          </div>
          <input type="text" name = "id"  value="<?php echo ($m["id"]); ?>" class="form-control" style="visibility:hidden">
          <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
               <input type="submit" id="submit" class="btn btn-primary" value="修改" data-loading="稍候..."> 
               <input type="hidden" name="type" id="type" value="article">
            </div>
          </div>
        </form>

     	<script type="text/javascript">
         var ue = UE.getEditor('container');
     	</script>
	</body>
</html>