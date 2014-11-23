<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>test</title>
		<link href="" rel="stylesheet">
		<script src=""></script>
		  <link href="__PUBLIC__/dist/css/zui.min.css" rel="stylesheet">
  <script src="__PUBLIC__/dist/js/zui.min.js"></script>
        <style>
            .picOP{
                width: 150px;
                height: 150px;
                float: left;
            }
        </style>
	</head>

	<body>
    <h1>管理团队风采</h1>
    <h2>上传允许文件类型：gif png jpg 图像文件，并生成2张缩略图,生成后会删除原图。</h2>
    <br>
    <form action="__URL__/Upload" method="post" enctype="multipart/form-data">
        <input type="file" name="image" /><br>
        <input type="submit" value="上传" /> 
    </form>
    <br/>
    <h3>已经上传的图片(显示的是小图)</h3>
    <hr/>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pic): $mod = ($i % 2 );++$i;?><div class = "picOP">
    	<!-- <img src="__UPLOAD__/s_<?php echo ($pic["image"]); ?>" />  -->
        <img src="__UPLOAD__/s_<?php echo ($pic["image"]); ?>" width="100px" height="100px" class="img-circle" alt="">
        <br>
        <a href ="__URL__/dodel/?id=<?php echo ($pic["id"]); ?>">删除</a>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
	</body>
</html>