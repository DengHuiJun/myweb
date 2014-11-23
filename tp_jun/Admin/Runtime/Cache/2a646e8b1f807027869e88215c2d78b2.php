<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>callback</title>	
		  <link href="__PUBLIC__/dist/css/zui.min.css" rel="stylesheet">
  <script src="__PUBLIC__/dist/js/zui.min.js"></script>
	</head>

	<body>
		<form  action="__URL__/docallback" class="form-horizontal form-condensed" role="form" method="post">
          <legend>回复功能</legend>
          <div class="form-group">
            <label class="col-md-2 control-label required">留言内容</label>
            <div class="col-md-4">
           		<textarea cols="50" rows="10"  name="content"  disabled="disabled"><?php echo ($m["content"]); ?></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">回复</label>
            <div class="col-md-4">
               <textarea cols="50" rows="10"  name="callback"><?php echo ($m["callback"]); ?></textarea>
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
               <input type="submit" id="submit" class="btn btn-primary" value="保存" data-loading="稍候..."/> 
               <input type="hidden" name="id"  value="<?php echo ($m["id"]); ?>"/>
            </div>
          </div>
        </form>
	</body>
</html>