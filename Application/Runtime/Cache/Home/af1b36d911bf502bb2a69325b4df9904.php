<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<title>Rankinglist</title>
	<link rel="stylesheet" href="/xiangmu/blogs/Public/Css/basic.css">
	<link rel="stylesheet" href="/xiangmu/blogs/Public/Css/index.css">
	<body>
		<div id='wrapper'>

			<div id='logo'>
				<p>博客</p>
				<!--<span><a href='/xiangmu/blogs/index.php/Home/Login/login' target='_top' class='register'>登录</a>｜<a href='/xiangmu/blogs/index.php/Home/Register/register' class='login'>注册</a></span>-->
				<p class='my'>欢迎你 <?php echo (session('username')); ?> <a href='/xiangmu/blogs/index.php/Home/Loginbackstage/loginbackstage' target='_top'>退出</a></p>
			</div>

			<div id='nav'>

				<ul>
	<li><a href="/xiangmu/blogs/index.php/Home/Index/index">主页</a></li>
	<li><a href="/xiangmu/blogs/index.php/Home/Column/column">博客专栏</a></li>
	<li><a href="/xiangmu/blogs/index.php/Home/Professor/professor">博客专家</a></li>
	<li><a href="/xiangmu/blogs/index.php/Home/Rankinglist/rankinglist">排行榜</a></li>
	<li><a href="/xiangmu/blogs/index.php/Home/Myblog/myblog">我的博客</a></li>
</ul>
			</div>
			<div id='main_body'>
				<div id='main'>
			
					<div id='content'>
						<div id='content_box'>
							
						</div>
						
					</div>

					<div id='about'>
						
					</div>
				</div>
			</div>
			

			<div id='footer'>
				<strong>©2016 Powered by <a href="http://www.52feidian.com/" target="_blank"> Feidian Studio </a> | All Rights Reserved.</strong>
			</div>
		</div>
		
	</body>
</html>