<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title>招生查询</title>
	<link rel="stylesheet" href="/zsjh/Public/css/amazeui.min.css"/>
	<link rel="stylesheet" href="/zsjh/Public/css/app.css"/>
</head>
<body>
	<header class="header-title am-topbar-fixed-top">
		西北工业大学招生计划查询小助手
	</header>
	<section id="main-content">
		<div class="province-section">
			<div class="ribbon">华北地区</div>
			<ul class="province-item">
				<li><a href="/zsjh/index.php/Home/Index/detail?province=北京">北京</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=天津">天津</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=河北">河北</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=山西">山西</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=内蒙">内蒙古</a></li>
			</ul>									
		</div>
		<div class="province-section">
			<div class="ribbon">东北地区</div>
			<ul class="province-item">
				<li><a href="/zsjh/index.php/Home/Index/detail?province=辽宁">辽宁</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=吉林">吉林</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=黑龙江">黑龙江</a></li>
			</ul>									
		</div>
		<div class="province-section">
			<div class="ribbon">华东地区</div>
			<ul class="province-item">
				<li><a id="shanghai" href="/zsjh/index.php/Home/Index/detail?province=上海">上海</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=江苏">江苏</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=浙江">浙江</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=安徽">安徽</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=福建">福建</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=江西">江西</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=山东">山东</a></li>
			</ul>									
		</div>
		<div class="province-section">
			<div class="ribbon">中南地区</div>
			<ul class="province-item">
				<li><a href="/zsjh/index.php/Home/Index/detail?province=河南">河南</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=湖北">湖北</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=湖南">湖南</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=广东">广东</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=广西">广西</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=海南">海南</a></li>
			</ul>									
		</div>
		<div class="province-section">
			<div class="ribbon">西南地区</div>
			<ul class="province-item">
				<li><a href="/zsjh/index.php/Home/Index/detail?province=重庆">重庆</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=四川">四川</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=贵州">贵州</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=云南">云南</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=西藏">西藏</a></li>
			</ul>									
		</div>
		<div class="province-section">
			<div class="ribbon">西北地区</div>
			<ul class="province-item">
				<li><a href="/zsjh/index.php/Home/Index/detail?province=陕西">陕西</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=甘肃">甘肃</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=青海">青海</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=宁夏">宁夏</a></li>
				<li><a href="/zsjh/index.php/Home/Index/detail?province=新疆">新疆</a></li>
			</ul>									
		</div>
	</section>
	<footer id="zsfooter">
		<p>注：最终数据以教育部审核通过并下达至各省招生管理机构的数据为准。</p>
		<img src="/zsjh/Public/images/footer.jpg" alt="">
		<p>版权所有：西北工业大学招生办公室</p>
	</footer>
<script src="/zsjh/Public/js/jquery.min.js"></script>
<script src="/zsjh/Public/js/amazeui.min.js"></script>
<script>
$("a").removeAttr("href");
$("#shanghai").attr("href","/zsjh/index.php/Home/Index/detail?province=上海");
</script>

</body>
</html>