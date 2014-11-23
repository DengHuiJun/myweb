<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>test</title>
		  <link href="__PUBLIC__/dist/css/zui.min.css" rel="stylesheet">
  <script src="__PUBLIC__/dist/js/zui.min.js"></script>
	
	</head>

	<body>
		<center><h1>查看留言</h1></center>
		<div class="datatable show-scroll-slide scrolled-in scrolled-out" id="datatable-14098131630619344">
			<div class="datatable-head" style="">
				<div class="datatable-head-span datatable-span fixed-left" style="width: 85%;">
					<div class="datatable-wrapper">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="sort-up" data-index="0" data-type="number" style="width: 50px; height: 40px;">序号<div class="size-handle"></div>
									</th>
									<th class="text-center" data-index="1" data-type="string" style="width: 70px; height: 40px;">留言者<div class="size-handle"></div>
									</th>
									<th class="text-center" data-index="2" data-type="string" style="width: 120px; height: 40px;">留言者电话<div class="size-handle"></div>
									</th>
									<th class="" data-index="3" data-type="string" style="width: 200px; height: 40px;">留言内容<div class="size-handle"></div></th>
									<th class="" data-index="4" data-type="string" style="width: 200px; height: 40px;">回复</th>
									<th class="" data-index="5" data-type="string" style="width: 80px; height: 40px;">IP地址</th>
									<th class="" data-index="6" data-type="string" style="width: 80px; height: 40px;">留言时间</th>
									<th class="" data-index="7" data-type="string" style="width: 120px; height: 40px;">操作</th>
								</tr>
							</thead>
						</table>
							<div class="size-handle size-handle-head size-handle-left">
								
							</div>
					</div>
				</div>
			</div>
			<div class="datatable-rows">
				<div class="datatable-rows-span datatable-span fixed-left" style="width: 85%;">
					<div class="datatable-wrapper">
						<table class="table table-hover">
							<tbody>
								<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="active" data-index="0" data-id="0">
									<td data-row="0" data-index="0" data-flex="false" data-type="number" class="text-center" style="width: 50px; height: 64px;"><?php echo ($vo["id"]); ?></td>
									<td data-row="0" data-index="1" data-flex="false" data-type="string" class="" style="width: 70px; height: 64px;"><?php echo ($vo["name"]); ?></td>
									<td data-row="0" data-index="2" data-flex="false" data-type="string" class="" style="width: 120px; height: 64px;"><?php echo ($vo["tell"]); ?></td>
									<td data-row="0" data-index="3" data-flex="false" data-type="string" class="" style="width: 200px; height: 64px;"><?php echo ($vo["content"]); ?></td>
									<td data-row="0" data-index="4" data-flex="false" data-type="string" class="" style="width: 200px; height: 64px;"><?php echo ($vo["callback"]); ?></td>
									<td data-row="0" data-index="5" data-flex="false" data-type="string" class="" style="width: 80px; height: 64px;"><?php echo ($vo["ip"]); ?></td>
									<td data-row="0" data-index="6" data-flex="false" data-type="string" class="" style="width: 80px; height: 64px;"><?php echo ($vo["time"]); ?></td>
									<td data-row="0" data-index="7" data-flex="false" data-type="string" class="" style="width: 120px; height: 64px;"><a href="__URL__/dodel/?id=<?php echo ($vo["id"]); ?>">删除</a>&nbsp;&nbsp;<a href="__URL__/callback/?id=<?php echo ($vo["id"]); ?>">回复</a></td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<br/>
		<center><span><?php echo ($page); ?></span></center>


	</body>
</html>