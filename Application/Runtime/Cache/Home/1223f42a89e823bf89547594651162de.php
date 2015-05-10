<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>招生查询</title>
	<link rel="stylesheet" href="/Public/css/amazeui.min.css"/>
	<link rel="stylesheet" href="/Public/css/app.css"/>
</head>
<body>
	<section id="detail-main-content">
		<div data-am-widget="tabs" class="am-tabs am-tabs-d2 my-tabs">
		    <ul class="am-tabs-nav am-cf">
			    <li class="am-active">
			      <a href="[data-tab-panel-0]">普通本科</a>
			    </li>
			    <li class="">
			      <a href="[data-tab-panel-1]">国防</a>
			    </li>
			    <li class="">
			      <a href="[data-tab-panel-2]">本硕</a>
			    </li>
			    <!-- <li class=""> -->
			      <!-- <a href="[data-tab-panel-3]">预科</a> -->
			    <!-- </li> -->
			</ul>
		  	<div class="am-tabs-bd">
			    <div data-tab-panel-0 id="panel-1" class="am-tab-panel am-active">
			    	<table>
			    		<tr>
			    			<th>类别</th>
			    			<th>专业</th>
			    			<th>科类</th>
			    			<th>人数</th>
			    		</tr>
			    		<?php if(is_array($puke)): $i = 0; $__LIST__ = $puke;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			    			<td><?php echo ($vo['cate']); ?></td>
			    			<td><?php echo ($vo['major']); ?></td>
			    			<td><?php echo ($vo['wenli']); ?></td>
			    			<td><?php echo ($vo['count']); ?></td>
			    		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			    	</table>
			    </div>
			    <div data-tab-panel-1 id="panel-2" class="am-tab-panel ">
			    	<table>
			    		<tr>
			    			<th>专业名称</th>
			    			<th>培养目标</th>
			    			<th>专业类别</th>
			    			<th>学制</th>
			    			<th>文理科</th>
			    			<th>性别</th>
			    			<th>人数</th>
			    		</tr>
			    		<?php if(is_array($guofang)): $i = 0; $__LIST__ = $guofang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			    			<td><?php echo ($vo['major']); ?></td>
			    			<td><?php echo ($vo['target']); ?></td>
			    			<td><?php echo ($vo['cate']); ?></td>
			    			<td><?php echo ($vo['year']); ?></td>
			    			<td><?php echo ($vo['wenli']); ?></td>
			    			<td><?php echo ($vo['gender']); ?></td>
			    			<td><?php echo ($vo['count']); ?></td>
			    		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			    	</table>
			    </div>
			    <div data-tab-panel-2 id="panel-3" class="am-tab-panel ">
			    	<table>
			    		<tr>
			    			<th>专业名称</th>
			    			<th>人数</th>
			    		</tr>
			    		<?php if(is_array($benshuo)): $i = 0; $__LIST__ = $benshuo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			    			<td><?php echo ($vo['major']); ?></td>
			    			<td><?php echo ($vo['count']); ?></td>
			    		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			    	</table>
			    </div>
			    <div data-tab-panel-3 id="panel-4" class="am-tab-panel ">
			    	<table>
			    		<tr>
			    			<th>专业名称</th>
			    			<th>科类</th>
			    			<th>人数</th>
			    		</tr>
			    	</table>
			    </div>
			</div>
		</div>
	</section>
<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/js/amazeui.min.js"></script>
<script>			
</script>

</body>
</html>